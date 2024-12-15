<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description'         => 'Опис',
                'expected-close-date' => 'Очікувана дата закриття',
                'lead-value'          => 'Вартість угоди',
                'sales-owner'         => 'Відповідальний менеджер',
                'source'              => 'Джерело',
                'title'               => 'Назва',
                'type'                => 'Тип',
                'pipeline'            => 'Воронка',
                'stage'               => 'Етап',
            ],

            'persons' => [
                'contact-numbers' => 'Контактні номери',
                'emails'          => 'Електронна пошта',
                'job-title'       => 'Посада',
                'name'            => 'Ім’я',
                'organization'    => 'Організація',
                'sales-owner'     => 'Відповідальний менеджер',
            ],

            'organizations' => [
                'address'     => 'Адреса',
                'name'        => 'Назва',
                'sales-owner' => 'Відповідальний менеджер',
            ],

            'products' => [
                'description' => 'Опис',
                'name'        => 'Назва',
                'price'       => 'Ціна',
                'quantity'    => 'Кількість',
                'sku'         => 'Артикул',
            ],

            'quotes' => [
                'adjustment-amount' => 'Сума коригування',
                'billing-address'   => 'Адреса для виставлення рахунку',
                'description'       => 'Опис',
                'discount-amount'   => 'Сума знижки',
                'discount-percent'  => 'Відсоток знижки',
                'expired-at'        => 'Термін дії',
                'grand-total'       => 'Загальна сума',
                'person'            => 'Контактна особа',
                'sales-owner'       => 'Відповідальний менеджер',
                'shipping-address'  => 'Адреса доставки',
                'sub-total'         => 'Проміжний підсумок',
                'subject'           => 'Тема',
                'tax-amount'        => 'Сума податку',
            ],

            'warehouses' => [
                'contact-address' => 'Контактна адреса',
                'contact-emails'  => 'Контактна електронна пошта',
                'contact-name'    => 'Контактна особа',
                'contact-numbers' => 'Контактні номери',
                'description'     => 'Опис',
                'name'            => 'Назва',
            ],
        ],

        'email' => [
            'activity-created'      => 'Створено активність',
            'activity-modified'     => 'Змінено активність',
            'date'                  => 'Дата',
            'new-activity'          => 'У вас нова активність, перегляньте деталі нижче',
            'new-activity-modified' => 'У вас змінена активність, перегляньте деталі нижче',
            'participants'          => 'Учасники',
            'title'                 => 'Назва',
            'type'                  => 'Тип',
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Основна воронка',

                'pipeline-stages' => [
                    'follow-up'   => 'Повернення',
                    'lost'        => 'Втрачено',
                    'negotiation' => 'Переговори',
                    'new'         => 'Новий',
                    'prospect'    => 'Потенційний клієнт',
                    'won'         => 'Успішно',
                ],
            ],

            'source' => [
                'direct'   => 'Прямий контакт',
                'email'    => 'Електронна пошта',
                'phone'    => 'Телефон',
                'web'      => 'Сайт',
                'web-form' => 'Веб-форма',
            ],

            'type' => [
                'existing-business' => 'Існуючий бізнес',
                'new-business'      => 'Новий бізнес',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Роль адміністратора',
                'administrator'      => 'Адміністратор',
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'Надсилання листів учасникам після оновлення активності',
            'email-to-participants-after-activity-creation' => 'Надсилання листів учасникам після створення активності',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Адміністратор',
                'krayin'           => 'Krayin',
                'confirm-password' => 'Підтвердити пароль',
                'email'            => 'Електронна пошта',
                'email-address'    => 'admin@example.com',
                'password'         => 'Пароль',
                'title'            => 'Створити адміністратора',
            ],

            'environment-configuration' => [
                'application-name'            => 'Назва застосунку',
                'default-currency'            => 'Валюта за замовчуванням',
                'default-locale'              => 'Мова за замовчуванням',
                'default-timezone'            => 'Часовий пояс за замовчуванням',
                'default-url'                 => 'URL за замовчуванням',
                'database-connection'         => 'Підключення до бази даних',
                'database-hostname'           => 'Хост бази даних',
                'database-name'               => 'Назва бази даних',
                'database-password'           => 'Пароль бази даних',
                'database-port'               => 'Порт бази даних',
                'database-prefix'             => 'Префікс бази даних',
                'database-username'           => 'Ім’я користувача бази даних',
                'warning-message'             => 'Увага! Налаштування основної мови та валюти є постійними і не можуть бути змінені після встановлення.',
                'title'                       => 'Налаштування середовища',
            ],

            'installation-processing' => [
                'krayin'      => 'Встановлення Krayin',
                'krayin-info' => 'Створення таблиць бази даних, це може зайняти кілька хвилин',
                'title'       => 'Встановлення',
            ],

            'installation-completed' => [
                'admin-panel'               => 'Адміністративна панель',
                'customer-panel'            => 'Панель клієнта',
                'explore-krayin-extensions' => 'Ознайомитися з розширеннями Krayin',
                'title'                     => 'Встановлення завершено',
                'title-info'                => 'Krayin успішно встановлено на вашу систему.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Створити таблиці бази даних',
                'install'                 => 'Встановлення',
                'install-info'            => 'Krayin для встановлення',
                'start-installation'      => 'Розпочати встановлення',
                'title'                   => 'Готовність до встановлення',
            ],

            'start' => [
                'locale'        => 'Локалізація',
                'select-locale' => 'Виберіть мову',
                'title'         => 'Встановлення Krayin',
                'welcome-title' => 'Ласкаво просимо до Krayin',
            ],

            'server-requirements' => [
                'php'          => 'PHP',
                'php-version'  => '8.1 або вище',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Back',
            'krayin'                   => 'Krayin',
            'krayin-info'              => 'a Community Project by',
            'krayin-logo'              => 'Krayin Logo',
            'continue'                 => 'Continue',
            'installation-description' => 'Krayin installation typically involves several steps. Here\'s a general outline of the installation process for Krayin',
            'installation-info'        => 'We are happy to see you here!',
            'installation-title'       => 'Welcome to Installation',
            'title'                    => 'Krayin Installer',
            'webkul'                   => 'Webkul',
        ],
    ],
];
