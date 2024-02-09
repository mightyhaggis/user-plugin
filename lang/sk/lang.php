<?php return [
  'plugin' => [
    'tab' => 'Požívatelia',
    'access_users' => 'Správa používateľov',
    'access_groups' => 'Správa skupín používateľov',
    'access_settings' => 'Správa používateľských nastavení',
    'impersonate_user' => 'Zosobniť používateľov',
  ],
  'users' => [
    'menu_label' => 'Používatelia',
    'all_users' => 'Všetci používatelia',
    'new_user' => 'Nový používateľ',
    'list_title' => 'Správa používateľov',
    'trashed_hint_title' => 'Používateľ deaktivoval svoj účet',
    'trashed_hint_desc' => 'Tento používateľ deaktivoval svoj účet a už nechce byť zobrazovaný na webe. Môže kedykoľvek obnoviť svoj účet, keď sa prihlási späť.',
    'banned_hint_title' => 'Používateľ bol zakázaný',
    'banned_hint_desc' => 'Tento pouužívateľ bol zakázaný administrátorom a nebude sa môcť prihlásiť.',
    'guest_hint_title' => 'Toto je hosťujúci používateľ',
    'guest_hint_desc' => 'Tento používateľ je uložený iba na účely odkazovania a musí sa zaregistrovať pred prihlásením.',
    'activate_warning_title' => 'Používateľ nie je aktivovaný!',
    'activate_warning_desc' => 'Tento používateľ nebol aktivovaný a nemusí byť schopný sa prihlásiť.',
    'activate_confirm' => 'Naozaj chcete aktivovať tohto používateľa?',
    'activated_success' => 'Používateľ bol aktivovaný',
    'activate_manually' => 'Aktivovať tohto používateľa manuálne',
    'convert_guest_confirm' => 'Konvertovať tohto hosťa na používateľa?',
    'convert_guest_manually' => 'Konvertovať na registrovaného používateľa',
    'convert_guest_success' => 'Používateľ bol prevedený na zaregistrovaný účet',
    'impersonate_user' => 'Zosobniť používateľa',
    'impersonate_confirm' => 'Zosobniť toto používateľa? Môžete sa vrátiť do pôvodného stavu odhlásením.',
    'impersonate_success' => 'Teraz zosobňujete tohoto používateľa',
    'delete_confirm' => 'Naozaj chcete zmazať tohto používateľa?',
    'unban_user' => 'Zrušiť zákaz tohto používateľa',
    'unban_confirm' => 'Naozaj chcete zrušiť zákaz tohto používateľa?',
    'unbanned_success' => 'Zákaz používateľa bol zrušený',
    'return_to_list' => 'Vrátiť sa na zoznam používateľov',
    'update_details' => 'Aktualizujte detaily',
    'delete_selected' => 'Zmazať označené',
    'delete_selected_confirm' => 'Zmazať vybraných používateľov?',
    'delete_selected_empty' => 'Nie sú vybraní žiadni používatelia na odstránenie.',
    'delete_selected_success' => 'Úspešne ste odstránili vybraných používateľov.',
    'activate_selected' => 'Aktivovať vybraných',
    'activate_selected_confirm' => 'Aktivovať vybraných používateľov?',
    'activate_selected_empty' => 'Nie sú vybraní žiadni používatelia na aktiváciu.',
    'activate_selected_success' => 'Vybraní používatelia boli úspešne aktivovaní.',
    'deactivate_selected' => 'Deaktivovať vybraných',
    'deactivate_selected_confirm' => 'Deaktivovať vybraných používateľov?',
    'deactivate_selected_empty' => 'Nie sú vybraní žiadni používatelia na deaktiváciu.',
    'deactivate_selected_success' => 'Vybraní používatelia boli úspešne deaktivovaní.',
    'restore_selected' => 'Obnoviť vybraných',
    'restore_selected_confirm' => 'Obnoviť vybraných používateľov?',
    'restore_selected_empty' => 'Nie sú vybraní žiadni používatelia na obnovenie.',
    'restore_selected_success' => 'Vybraní používatelia boli úspešne obnovení.',
    'ban_selected' => 'Zakázať vybraných',
    'ban_selected_confirm' => 'Zakázať vybraných používateľov?',
    'ban_selected_empty' => 'Nie sú vybraní žiadni používatelia na zakázanie.',
    'ban_selected_success' => 'Vybraní používatelia boli úspešne zakázaní.',
    'unban_selected' => 'Zrušiť zákaz vybraných',
    'unban_selected_confirm' => 'Zrušiť zakáz vybraných používateľov?',
    'unban_selected_empty' => 'Nie sú vybraní žiadni používatelia na zrušenie zakázu.',
    'unban_selected_success' => 'Vybraným používateľom bol úspešne zrušený zakáz.',
  ],
  'settings' => [
    'users' => 'Používatelia',
    'menu_label' => 'Nastavenie používateľov',
    'menu_description' => 'Správa nastavení používateľov.',
    'activation_tab' => 'Aktivácia',
    'signin_tab' => 'Prihlásenie',
    'registration_tab' => 'Registrácia',
    'notifications_tab' => 'Notifikácie',
    'allow_registration' => 'Povoliť registráciu používateľa',
    'allow_registration_comment' => 'Ak je to zakázané, použávatelia môžu byť vytvorený iba administrátormi.',
    'activate_mode' => 'Režim aktivácie',
    'activate_mode_comment' => 'Vyberte spôsob aktivácie používateľského účtu.',
    'activate_mode_auto' => 'Automatický',
    'activate_mode_auto_comment' => 'Automaticky sa aktivuje pri registrácii.',
    'activate_mode_user' => 'Používateľ',
    'activate_mode_user_comment' => 'Používateľ aktivuje svoj vlastný účet emailom.',
    'activate_mode_admin' => 'Administrátor',
    'activate_mode_admin_comment' => 'Iba Administrátor môže aktivovať používateľa.',
    'require_activation' => 'Prihlásenie vyžaduje aktiváciu',
    'require_activation_comment' => 'Používatelia musia mať aktivovaný účet na prihlásenie.',
    'use_throttle' => 'Obmedziť pokusy',
    'use_throttle_comment' => 'Opakované neúspešné pokusy o prihlásenie používateľov dočasne zablokuje.',
    'block_persistence' => 'Zabrániť súbežným reláciám',
    'block_persistence_comment' => 'Po zapnutí sa používatelia nemôžu prihlásiť do viacerých zariadení súčasne.',
    'login_attribute' => 'Prihlasovací atribút',
    'login_attribute_comment' => 'Vyberte, aké základný údaj používateľa sa má použiť pri prihlasovaní.',
  ],
  'user' => [
    'label' => 'Používateľ',
    'id' => 'ID',
    'username' => 'Užívateľské meno',
    'name' => 'Meno',
    'name_empty' => 'Anonym',
    'surname' => 'Priezvisko',
    'email' => 'E-mail',
    'created_at' => 'Registrovaný',
    'last_seen' => 'Naposledy videný',
    'is_guest' => 'Hosť',
    'joined' => 'Pridaný',
    'is_online' => 'Teraz online',
    'is_offline' => 'Momentálne je offline',
    'send_invite' => 'Poslať pozvánku e-mailom',
    'send_invite_comment' => 'Odošle uvítaciu správu obsahujúcu informácie o prihlásení a hesle.',
    'create_password' => 'Vytvoriť heslo',
    'create_password_comment' => 'Zadajte nové heslo, ktoré sa používa na prihlásenie.',
    'reset_password' => 'Obnoviť heslo',
    'reset_password_comment' => 'Ak chcete obnoviť heslo používateľa, zadajte nové heslo tu.',
    'confirm_password' => 'Potvrdenie hesla',
    'confirm_password_comment' => 'Znova zadajte heslo a potvrďte ho.',
    'groups' => 'Skupiny',
    'empty_groups' => 'Neexistujú žiadne skupiny používateľov.',
    'avatar' => 'Avatar',
    'details' => 'Detaily',
    'account' => '=Účet',
    'block_mail' => 'Zablokujte všetku odchádzajúcu poštu odoslanú tomuto používateľovi.',
    'status_guest' => 'Hosť',
    'status_activated' => 'Aktivovaný',
    'status_registered' => 'Registrovaný',
  ],
  'group' => [
    'label' => 'Skupina',
    'id' => 'ID',
    'name' => 'Meno',
    'description_field' => 'Popis',
    'code' => 'Kód',
    'code_comment' => 'Zadajte jedinečný kód použitý na identifikáciu tejto skupiny.',
    'created_at' => 'Vytvorená',
    'users_count' => 'Používatelia',
  ],
  'groups' => [
    'menu_label' => 'Skupiny',
    'all_groups' => 'Skupiny používateľov',
    'new_group' => 'Nová skupina',
    'delete_selected_confirm' => 'Naozaj chcete odstrániť vybrané skupiny?',
    'list_title' => 'Správa skupín',
    'delete_confirm' => 'Naozaj chcete odstrániť túto skupinu?',
    'delete_selected_success' => 'Vybrané skupiny boli úspešne odstránené.',
    'delete_selected_empty' => 'Nie sú vybrané žiadne skupiny na odstránenie.',
    'return_to_list' => 'Späť na zoznam skupín',
    'return_to_users' => 'Späť na zoznam používateľov',
    'create_title' => 'Vytvoriť skupinu používateľov',
    'update_title' => 'Upraviť skupinu používateľov',
    'preview_title' => 'Ukážka skupiny používateľov',
  ],
  'login' => [
    'attribute_email' => 'E-mail',
    'attribute_username' => 'Užívateľské meno',
  ],
  'account' => [
    'account' => 'Účet',
    'account_desc' => 'Formulár správy používateľov.',
    'redirect_to' => 'Presmerovať na',
    'redirect_to_desc' => 'Názov stránky na presmerovanie po aktualizácii, prihlásení alebo registrácii.',
    'code_param' => 'Aktivačný kód Parameter',
    'code_param_desc' => 'Parameter URL stránky použitý ako kód aktivácie registrácie',
    'force_secure' => 'Vynútiť bezpečný protokol',
    'force_secure_desc' => 'Vždy presmerujte adresu URL schémou HTTPS.',
    'invalid_user' => 'Používateľ s uvedenými povereniami nebol nájdený.',
    'invalid_activation_code' => 'Bol zadaný neplatný aktivačný kód.',
    'invalid_deactivation_pass' => 'Zadané heslo je neplatné.',
    'success_activation' => 'Váš účet bol úspešne aktivovaný.',
    'success_deactivation' => 'Váš účet bol úspešne deaktivovaný. Je nám ľúto, že vás odchádzate!',
    'success_saved' => 'Nastavenia boli úspešne uložené!',
    'login_first' => 'Najprv musíte byť prihlásení!',
    'already_active' => 'Váš účet je už aktivovaný!',
    'activation_email_sent' => 'Na vašu e-mailovú adresu bol odoslaný aktivačný e-mail.',
    'registration_disabled' => 'Registrácie sú momentálne nedostupné.',
    'sign_in' => 'Prihlásiť sa',
    'register' => 'Registrovať',
    'full_name' => 'Celé meno',
    'email' => 'E-mail',
    'password' => 'Heslo',
    'login' => 'Prihlásiť sa',
    'new_password' => 'Nové heslo',
    'new_password_confirm' => 'Potvrďte nové heslo',
  ],
  'reset_password' => [
    'reset_password' => 'Obnoviť heslo',
    'reset_password_desc' => 'Formulár pre zabudnuté heslo.',
    'code_param' => 'Obnovovací kód Parameter',
    'code_param_desc' => 'Parameter URL stránky použitý pre obnovovací kód',
  ],
  'session' => [
    'session' => 'Relácia',
    'session_desc' => 'Pridá reláciu používateľa na stránku a môže obmedziť prístup na stránku.',
    'security_title' => 'Povoliť iba',
    'security_desc' => 'Kto má prístup na túto stránku.',
    'all' => 'Všetci',
    'users' => 'Užívatelia',
    'guests' => 'Hostia',
    'allowed_groups_title' => 'Povoliť skupiny',
    'allowed_groups_description' => 'Vyberte povolené skupiny alebo žiadne, aby ste povolili všetky skupiny',
    'redirect_title' => 'Presmerovať na',
    'redirect_desc' => 'Názov stránky pre presmerovanie, ak je prístup zamietnutý.',
    'logout' => 'Úspešne ste sa odhlásili!',
    'stop_impersonate_success' => 'Už sa nezosobňujete používateľa.',
  ],
];
