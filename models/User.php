<?php namespace RainLab\User\Models;

use Str;
use Mail;
use Event;
use Config;
use Model;
use Carbon\Carbon;
use RainLab\User\Models\Settings as UserSettings;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use October\Rain\Auth\AuthException;

/**
 * User record
 *
 * @property int $id
 * @property bool $is_guest
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string $company
 * @property string $phone
 * @property string $city
 * @property string $zip
 * @property int $state_id
 * @property int $country_id
 * @property string $notes
 * @property string $password
 * @property string $remember_token
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property int $primary_group_id
 * @property string $created_ip_address
 * @property string $last_ip_address
 * @property bool $is_banned
 * @property string $banned_reason
 * @property bool $is_activated
 * @property \Illuminate\Support\Carbon $banned_at
 * @property \Illuminate\Support\Carbon $activated_at
 * @property \Illuminate\Support\Carbon $two_factor_confirmed_at
 * @property \Illuminate\Support\Carbon $deleted_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 *
 * @package rainlab\user
 * @author Alexey Bobkov, Samuel Georges
 */
class User extends Model implements Authenticatable, CanResetPassword
{
    use \RainLab\User\Models\User\HasTwoFactor;
    use \RainLab\User\Models\User\HasPasswordReset;
    use \RainLab\User\Models\User\HasAuthenticatable;
    use \RainLab\User\Models\User\HasEmailVerification;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var string The database table used by the model.
     */
    protected $table = 'users';

    /**
     * Validation rules
     */
    public $rules = [
        'email' => 'required|between:6,255|email|unique:users',
        'avatar' => 'nullable|image|max:4000',
        'username' => 'required|between:2,255|unique:users',
        'password' => 'required:create|between:8,255|confirmed',
        'password_confirmation' => 'required_with:password|between:8,255',
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'groups' => [UserGroup::class, 'table' => 'users_groups']
    ];

    public $attachOne = [
        'avatar' => \System\Models\File::class
    ];

    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'surname',
        'login',
        'username',
        'email',
        'password',
        'password_confirmation',
        'created_ip_address',
        'last_ip_address'
    ];

    /**
     * Reset guarded fields, because we use $fillable instead.
     * @var array The attributes that aren't mass assignable.
     */
    protected $guarded = ['*'];

    /**
     * Purge attributes from data set.
     */
    protected $purgeable = ['password_confirmation', 'send_invite'];

    /**
     * @var array dates
     */
    protected $dates = [
        'last_seen',
        'deleted_at',
        'created_at',
        'updated_at',
        'activated_at',
        'last_login'
    ];

    /**
     * @var string|null loginAttribute
     */
    public static $loginAttribute = null;

    /**
     * Sends the confirmation email to a user, after activating.
     * @param  string $code
     * @return bool
     */
    public function attemptActivation($code)
    {
        if ($this->trashed()) {
            if ($code === $this->activation_code) {
                $this->restore();
            } else {
                return false;
            }
        } else {
            $result = parent::attemptActivation($code);

            if ($result === false) {
                return false;
            }
        }

        Event::fire('rainlab.user.activate', [$this]);

        return true;
    }

    /**
     * Converts a guest user to a registered one and sends an invitation notification.
     * @return void
     */
    public function convertToRegistered($sendNotification = true)
    {
        // Already a registered user
        if (!$this->is_guest) {
            return;
        }

        if ($sendNotification) {
            $this->generatePassword();
        }

        $this->is_guest = false;
        $this->save();

        if ($sendNotification) {
            $this->sendInvitation();
        }
    }

    //
    // Constructors
    //

    /**
     * findByEmail looks up a user by their email address.
     * @return self
     */
    public static function findByEmail($email)
    {
        if (!$email) {
            return;
        }

        return self::where('email', $email)->first();
    }

    //
    // Getters
    //

    /**
     * clearPersistCode will forcibly sign the user out
     */
    public function clearPersistCode()
    {
        $this->persist_code = null;
        $this->timestamps = false;
        $this->save();
    }

    /**
     * Gets a code for when the user is persisted to a cookie or session which identifies the user.
     * @return string
     */
    public function getPersistCode()
    {
        $block = UserSettings::get('block_persistence', false);

        if ($block || !$this->persist_code) {
            return parent::getPersistCode();
        }

        return $this->persist_code;
    }

    /**
     * Returns the public image file path to this user's avatar.
     */
    public function getAvatarThumb($size = 25, $options = null)
    {
        if (is_string($options)) {
            $options = ['default' => $options];
        }
        elseif (!is_array($options)) {
            $options = [];
        }

        // Default is "mm" (Mystery man)
        $default = array_get($options, 'default', 'mm');

        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        }
        else {
            return '//www.gravatar.com/avatar/'.
                md5(strtolower(trim($this->email))).
                '?s='.$size.
                '&d='.urlencode($default);
        }
    }

    /**
     * Returns the name for the user's login.
     * @return string
     */
    public function getLoginName()
    {
        if (static::$loginAttribute !== null) {
            return static::$loginAttribute;
        }

        return static::$loginAttribute = UserSettings::get('login_attribute', UserSettings::LOGIN_EMAIL);
    }

    /**
     * Returns the minimum length for a new password from settings.
     * @return int
     */
    public static function getMinPasswordLength()
    {
        return Config::get('rainlab.user::minPasswordLength', 8);
    }

    //
    // Scopes
    //

    /**
     * scopeIsActivated
     */
    public function scopeIsActivated($query)
    {
        return $query->where('is_activated', 1);
    }

    /**
     * scopeFilterByGroup
     */
    public function scopeFilterByGroup($query, $filter)
    {
        return $query->whereHas('groups', function($group) use ($filter) {
            $group->whereIn('id', $filter);
        });
    }

    //
    // Events
    //

    /**
     * beforeValidate event
     * @return void
     */
    public function beforeValidate()
    {
        /*
         * Guests are special
         */
        if ($this->is_guest && !$this->password) {
            $this->generatePassword();
        }

        /*
         * When the username is not used, the email is substituted.
         */
        if (
            (!$this->username) ||
            ($this->isDirty('email') && $this->getOriginal('email') == $this->username)
        ) {
            $this->username = $this->email;
        }

        /*
         * Apply rules Settings
         */
        $minPasswordLength = Settings::get('min_password_length', static::getMinPasswordLength());
        $passwordRule = PasswordRule::min($minPasswordLength);
        if (Settings::get('require_mixed_case')) {
            $passwordRule->mixedCase();
        }

        if (Settings::get('require_uncompromised')) {
            $passwordRule->uncompromised();
        }

        if (Settings::get('require_number')) {
            $passwordRule->numbers();
        }

        if (Settings::get('require_symbol')) {
            $passwordRule->symbols();
        }

        $this->addValidationRule('password', $passwordRule);
        $this->addValidationRule('password_confirmation', $passwordRule);
    }

    /**
     * afterCreate event
     * @return void
     */
    public function afterCreate()
    {
        $this->restorePurgedValues();

        if ($this->send_invite) {
            $this->sendInvitation();
        }
    }

    /**
     * beforeLogin event
     * @return void
     */
    public function beforeLogin()
    {
        if ($this->is_guest) {
            $login = $this->getLogin();
            throw new AuthException(sprintf(
                'Cannot login user "%s" as they are not registered.', $login
            ));
        }

        parent::beforeLogin();
    }

    /**
     * afterLogin event
     * @return void
     */
    public function afterLogin()
    {
        $this->last_login = $this->freshTimestamp();

        if ($this->trashed()) {
            $this->restore();

            Mail::sendTo($this, 'rainlab.user::mail.reactivate', [
                'name' => $this->name
            ]);

            Event::fire('rainlab.user.reactivate', [$this]);
        }
        else {
            parent::afterLogin();
        }

        Event::fire('rainlab.user.login', [$this]);
    }

    /**
     * afterDelete event
     * @return void
     */
    public function afterDelete()
    {
        if ($this->isSoftDelete()) {
            Event::fire('rainlab.user.deactivate', [$this]);
            return;
        }

        $this->avatar && $this->avatar->delete();

        parent::afterDelete();
    }

    //
    // Banning
    //

    /**
     * ban this user, preventing them from signing in.
     */
    public function ban($reason = null)
    {
        if (!$this->is_banned) {
            $this->is_banned = true;
            $this->banned_reason = $reason;
            $this->banned_at = $this->freshTimestamp();
            $this->save(['force' => true]);
        }
    }

    /**
     * unban removes the ban on this user.
     */
    public function unban()
    {
        if ($this->is_banned) {
            $this->is_banned = false;
            $this->banned_reason = null;
            $this->banned_at = null;
            $this->save(['force' => true]);
        }
    }

    //
    // IP Recording and Throttle
    //

    /**
     * Records the last_ip_address to reflect the last known IP for this user.
     * @param string|null $ipAddress
     * @return void
     */
    public function touchIpAddress($ipAddress)
    {
        $this
            ->newQuery()
            ->where('id', $this->id)
            ->update(['last_ip_address' => $ipAddress])
        ;
    }

    /**
     * Returns true if IP address is throttled and cannot register
     * again. Maximum 3 registrations every 60 minutes.
     * @param string|null $ipAddress
     * @return bool
     */
    public static function isRegisterThrottled($ipAddress)
    {
        if (!$ipAddress) {
            return false;
        }

        $timeLimit = Carbon::now()->subMinutes(60);
        $count = static::make()
            ->where('created_ip_address', $ipAddress)
            ->where('created_at', '>', $timeLimit)
            ->count()
        ;

        return $count > 2;
    }

    //
    // Last Seen
    //

    /**
     * Checks if the user has been seen in the last 5 minutes, and if not,
     * updates the last_seen timestamp to reflect their online status.
     * @return void
     */
    public function touchLastSeen()
    {
        if ($this->isOnline()) {
            return;
        }

        $oldTimestamps = $this->timestamps;
        $this->timestamps = false;

        $this
            ->newQuery()
            ->where('id', $this->id)
            ->update(['last_seen' => $this->freshTimestamp()])
        ;

        $this->last_seen = $this->freshTimestamp();
        $this->timestamps = $oldTimestamps;
    }

    /**
     * Returns true if the user has been active within the last 5 minutes.
     * @return bool
     */
    public function isOnline()
    {
        if (!$this->last_seen) {
            return false;
        }

        return $this->last_seen > $this->freshTimestamp()->subMinutes(5);
    }

    /**
     * Returns the date this user was last seen.
     * @deprecated use last_seen attribute
     * @return Carbon\Carbon
     */
    public function getLastSeen()
    {
        return $this->last_seen ?: $this->created_at;
    }

    //
    // Utils
    //

    /**
     * Returns the variables available when sending a user notification.
     * @return array
     */
    public function getNotificationVars()
    {
        $vars = [
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'login' => $this->getLogin(),
            'password' => $this->getOriginalHashValue('password')
        ];

        /*
         * Extensibility
         */
        $result = Event::fire('rainlab.user.getNotificationVars', [$this]);
        if ($result && is_array($result)) {
            $vars = call_user_func_array('array_merge', $result) + $vars;
        }

        return $vars;
    }

    /**
     * sendInvitation sends an invitation to the user using template
     * "rainlab.user::mail.invite"
     * @return void
     */
    protected function sendInvitation()
    {
        Mail::sendTo($this, 'rainlab.user::mail.invite', $this->getNotificationVars());
    }

    /**
     * generatePassword assigns this user with a random password.
     * @return void
     */
    protected function generatePassword()
    {
        $this->password = $this->password_confirmation = Str::random(static::getMinPasswordLength());
    }
}
