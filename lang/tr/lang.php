<?php return [
  'plugin' => [
    'tab' => 'Üyeler',
    'access_users' => 'Üyeleri Yönet',
    'access_groups' => 'Üye Gruplarını Yönet',
    'access_settings' => 'Üye Ayarlarını Yönet',
    'impersonate_user' => 'Üye Gibi Gezin',
  ],
  'users' => [
    'all_users' => 'Bütün Üyeler',
    'new_user' => 'Yeni Üye',
    'trashed_hint_title' => 'Üye hesabını pasifleştirmiş',
    'trashed_hint_desc' => 'Üye hesabını pasifleştirmiş ve bu sitede görünmek istemiyor. Tekrar hesabına giriş yaparak hesabını istediği zaman aktifleştirebilir.',
    'banned_hint_title' => 'Üye engellendi.',
    'banned_hint_desc' => 'Üye bir yönetici tarafından engellendi ve giriş yapamayacak.',
    'guest_hint_title' => 'Bu üye ziyaretçi.',
    'guest_hint_desc' => 'Bu üye ziyaretçi olarak eklenmiş ve giriş yapabilmesi için kayıt olması gerekiyor.',
    'activate_warning_title' => 'Üye hesabı aktif edilmemiş!',
    'activate_warning_desc' => 'Bu üye hesabı aktif edilmedi ve oturum açamayacaktır.',
    'activate_confirm' => 'Bu üyeyi gerçekten aktif etmek istediğinize emin misiniz?',
    'activated_success' => 'Üye aktifleştirildi',
    'activate_manually' => 'Bu üyeyi aktif et',
    'convert_guest_confirm' => 'Ziyaretçiyi üyeye çevirmek istiyor musunuz?',
    'convert_guest_manually' => 'Kayıtlı üyeye çevir',
    'convert_guest_success' => 'Ziyaretçi, kayıtlı üyeye çevrildi.',
    'impersonate_user' => 'Üye Gibi Gezin',
    'impersonate_confirm' => 'Bu üye gibi giriş yapmak istediğinize emin misiniz? Çıkış yaparak tekrar orjinal halinize dönebilirsiniz.',
    'impersonate_success' => 'Şimdi üye gibi gezinebilirsiniz.',
    'delete_confirm' => 'Bu üyeyi gerçekten silmek istediğinize emin misiniz?',
    'unban_user' => 'Üyenin engelini kaldır',
    'unban_confirm' => 'Bu üyenin engelini kaldırmak istediğinize emin misiniz?',
    'unbanned_success' => 'Üyenin engeli kaldırıldı',
    'return_to_list' => 'Üye listesine geri dön',
    'update_details' => 'Detayları değiştir',
    'delete_selected' => 'Seçileni sil',
    'delete_selected_confirm' => 'Seçili üyeleri sil?',
    'delete_selected_empty' => 'Silmek için seçili üye yok.',
    'delete_selected_success' => 'Seçili üyeler başarıyla silindi.',
    'activate_selected' => 'Seçileni etkinleştir',
    'activate_selected_confirm' => 'Seçili kullanıcılar etkinleştirilsin mi?',
    'activate_selected_empty' => 'Etkinleştirilecek seçili kullanıcı yok.',
    'activate_selected_success' => 'Seçilen kullanıcılar başarıyla etkinleştirildi.',
    'deactivate_selected' => 'Seçileni pasifleştir',
    'deactivate_selected_confirm' => 'Seçilen üyeler pasifleştirilsin mi?',
    'deactivate_selected_empty' => 'Pasifleştirmek için üye seçmelisiniz.',
    'deactivate_selected_success' => 'Seçilen üyeler pasifleştirildi.',
    'restore_selected' => 'Seçileni aktifleştir',
    'restore_selected_confirm' => 'Seçilen üyeler aktifleştirilsin mi?',
    'restore_selected_empty' => 'Aktifleştirmek için üye seçmelisiniz.',
    'restore_selected_success' => 'Seçilen üyeler aktifleştirildi.',
    'ban_selected' => 'Seçileni engelle',
    'ban_selected_confirm' => 'Seçilen üyeler engellensin mi?',
    'ban_selected_empty' => 'Engellemek için üye seçmelisiniz.',
    'ban_selected_success' => 'Seçilen üyeler engellendi.',
    'unban_selected' => 'Seçilenin engelini kaldır',
    'unban_selected_confirm' => 'Seçilen üyelerin engeli kaldırılsın mi?',
    'unban_selected_empty' => 'Engeli kaldırmak için üye seçmelisiniz.',
    'unban_selected_success' => 'Seçilen üyelerin engeli kaldırıldı.',
    'unsuspend' => 'Askıya alma',
    'unsuspend_success' => 'Üye askıya alındı.',
    'unsuspend_confirm' => 'Üye askıya alınsın mı?',
  ],
  'settings' => [
    'users' => 'Üyeler',
    'activation_tab' => 'Aktivasyon',
    'signin_tab' => 'Oturum Açma',
    'registration_tab' => 'Kayıt',
    'profile_tab' => 'Profil',
    'notifications_tab' => 'Bildirimler',
    'allow_registration' => 'Üye kaydını aktifleştir',
    'allow_registration_comment' => 'Eğer bu seçenek pasifleştirilirse sadece yöneticiler tarafından üye kaydı yapılabilecektir.',
    'min_password_length' => 'Minimum şifre uzunluğu',
    'min_password_length_comment' => 'Üye şifresi için gereken minimum şifre uzunluğu',
    'activate_mode' => 'Aktivasyon Modu',
    'activate_mode_comment' => 'Üyenin nasıl aktif edileceğini seçin.',
    'activate_mode_auto' => 'Otomatik',
    'activate_mode_auto_comment' => 'Üye olduğu an aktif edilsin.',
    'activate_mode_user' => 'Üye',
    'activate_mode_user_comment' => 'Eposta adresini kullanarak aktif etsin.',
    'activate_mode_admin' => 'Yönetici',
    'activate_mode_admin_comment' => 'Sadece yöneticiler aktif edebilsin.',
    'require_activation' => 'Üye girişleri aktivasyon gerektirsin',
    'require_activation_comment' => 'Üyeler oturum açabilmek için aktif edilmiş bir hesaba sahip olmalıdırlar.',
    'use_throttle' => 'Boğma Girişimleri',
    'use_throttle_comment' => 'Tekrarlayan hatalı girişlerde kısa süreliğine üyeyi askıya al.',
    'block_persistence' => 'Eşzamanlı oturumları engelle',
    'block_persistence_comment' => 'Etkinleştirildiğinde, kullanıcılar aynı anda birden fazla cihazda oturum açamazlar.',
    'login_attribute' => 'Oturum Açma Yöntemi',
    'login_attribute_comment' => 'Üye girişlerinde hangi üye detayının kullanılacağını seçin.',
    'remember_login' => 'Şifre hatırlama modu',
    'remember_login_comment' => 'Üye oturumu kalıcı olsun.',
    'remember_always' => 'Her zaman',
    'remember_never' => 'Hiçbir zaman',
    'remember_ask' => 'Üye girişi sırasında sor',
  ],
  'user' => [
    'details' => 'Detaylar',
  ],
  'group' => [],
  'groups' => [
    'delete_selected_confirm' => 'Seçilen grupları silmek istediğinize emin misiniz?',
    'delete_confirm' => 'Bu grubu silmek istediğinize emin misiniz?',
    'delete_selected_success' => 'Seçilen gruplar silindi.',
    'delete_selected_empty' => 'Silinecek grup seçmelisiniz.',
    'return_to_list' => 'Grup listesine dön',
    'return_to_users' => 'Üye listesine dön',
    'preview_title' => 'Grubu önizle',
  ],
  'login' => [
    'attribute_email' => 'Eposta',
    'attribute_username' => 'Üye Adı',
  ],
  'account' => [
    'account' => 'Hesap',
    'account_desc' => 'Üye yönetimi formu.',
    'redirect_to' => 'Yönlendir',
    'redirect_to_desc' => 'Güncellemeden sonra yönlendirilecek sayfanın adı, oturum aç ya da kayıt ol.',
    'code_param' => 'Aktivasyon Kodu Parametresi',
    'code_param_desc' => 'Üyelik aktivasyon kodu için sayfanın URL parametresi kullanılır.',
    'force_secure' => 'Güvenli protokole zorla',
    'force_secure_desc' => 'URL’yi her zaman HTTPS şemasına yönlendirin.',
    'invalid_user' => 'Girilen bilgilerle eşleşen bir üye yok.',
    'invalid_activation_code' => 'Geçersiz aktivasyon kodu',
    'invalid_current_pass' => 'Mevcut şifrenizi hatalı girdiniz.',
    'invalid_deactivation_pass' => 'Girdiğiniz şifre geçersiz.',
    'success_activation' => 'Hesabınız başarıyla aktifleştirildi.',
    'success_deactivation' => 'Hesabınız pasifleştirildi. Aramıza tekrar bekleriz!',
    'success_saved' => 'Ayarlar başarıyla kaydedildi!',
    'login_first' => 'Önce oturum açmalısınız!',
    'already_active' => 'Hesabın zaten aktifleştirildi!',
    'activation_email_sent' => 'Tanımladığınız eposta adresine aktivasyon maili gönderildi.',
    'registration_disabled' => 'Üye kaydı geçici olarak durduruldu.',
    'registration_throttled' => 'Üye kayıt işleminiz kısıtlandı ve geçersiz oldu. Lütfen daha sonra tekrar deneyin.',
    'sign_in' => 'Oturum Aç',
    'register' => 'Kayıt Ol',
    'full_name' => 'Tam İsim',
    'email' => 'Email',
    'password' => 'Parola',
    'login' => 'Oturum Aç',
    'new_password' => 'Yeni Parola',
    'new_password_confirm' => 'Yeni Şifre Onayla',
    'update_requires_password' => 'Güncelleme sırasında onay gereksin',
    'update_requires_password_comment' => 'Üye bilgi güncelleme ekranında mevcut şifre zorunlu olsun.',
  ],
  'reset_password' => [
    'reset_password' => 'Parolanızı Sıfırlayın',
    'reset_password_desc' => 'Unutulan şifreyi sıfırlama formu.',
    'code_param' => 'Sıfırlama Kodu Parametresi',
    'code_param_desc' => 'Sıfırlama kodu için sayfanın URL parametresi kullanılır.',
  ],
  'session' => [
    'session' => 'Oturum',
    'session_desc' => 'Üye oturumlarını sayfaya ekler ve sayfaya erişimi kısıtlayın.',
    'security_title' => 'Görüntüleme İzni',
    'security_desc' => 'Bu sayfaya erişim izni olanlar.',
    'all' => 'Hepsi',
    'users' => 'Üyeler',
    'guests' => 'Misafirler',
    'redirect_title' => 'Yönlendir ',
    'redirect_desc' => 'Erişimi engelliyse yönlendirilecek sayfa.',
    'logout' => 'Başarıyla çıkış yaptınız!',
  ],
];
