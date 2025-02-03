<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description'         => 'Descripción',
                'expected-close-date' => 'Fecha de Cierre Esperada',
                'lead-value'          => 'Valor del Prospecto',
                'sales-owner'         => 'Propietario de Ventas',
                'source'              => 'Fuente',
                'title'               => 'Título',
                'type'                => 'Tipo',
                'pipeline'            => 'Pipeline',
                'stage'               => 'Etapa',
            ],

            'persons' => [
                'contact-numbers' => 'Números de Contacto',
                'emails'          => 'Correos Electrónicos',
                'job-title'       => 'Cargo',
                'name'            => 'Nombre',
                'organization'    => 'Organización',
                'sales-owner'     => 'Propietario de Ventas',
            ],

            'organizations' => [
                'address'     => 'Dirección',
                'name'        => 'Nombre',
                'sales-owner' => 'Propietario de Ventas',
            ],

            'products' => [
                'description' => 'Descripción',
                'name'        => 'Nombre',
                'price'       => 'Precio',
                'quantity'    => 'Cantidad',
                'sku'         => 'SKU',
            ],

            'quotes' => [
                'adjustment-amount' => 'Cantidad de Ajuste',
                'billing-address'   => 'Dirección de Facturación',
                'description'       => 'Descripción',
                'discount-amount'   => 'Cantidad de Descuento',
                'discount-percent'  => 'Porcentaje de Descuento',
                'expired-at'        => 'Expira el',
                'grand-total'       => 'Total General',
                'person'            => 'Persona',
                'sales-owner'       => 'Propietario de Ventas',
                'shipping-address'  => 'Dirección de Envío',
                'sub-total'         => 'Subtotal',
                'subject'           => 'Asunto',
                'tax-amount'        => 'Cantidad de Impuestos',
            ],

            'warehouses' => [
                'contact-address' => 'Dirección de Contacto',
                'contact-emails'  => 'Correos Electrónicos de Contacto',
                'contact-name'    => 'Nombre de Contacto',
                'contact-numbers' => 'Números de Contacto',
                'description'     => 'Descripción',
                'name'            => 'Nombre',
            ],
        ],

        'email' => [
            'activity-created'      => 'Actividad Creada',
            'activity-modified'     => 'Actividad Modificada',
            'date'                  => 'Fecha',
            'new-activity'          => 'Tienes una nueva actividad, encuentra los detalles a continuación',
            'new-activity-modified' => 'Tienes una actividad modificada, encuentra los detalles a continuación',
            'participants'          => 'Participantes',
            'title'                 => 'Título',
            'type'                  => 'Tipo',
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Pipeline Predeterminado',

                'pipeline-stages' => [
                    'follow-up'   => 'Seguimiento',
                    'lost'        => 'Perdido',
                    'negotiation' => 'Negociación',
                    'new'         => 'Nuevo',
                    'prospect'    => 'Prospecto',
                    'won'         => 'Ganado',
                ],
            ],

            'source' => [
                'direct'   => 'Directo',
                'email'    => 'Correo Electrónico',
                'phone'    => 'Teléfono',
                'web'      => 'Web',
                'web-form' => 'Formulario Web',
            ],

            'type' => [
                'existing-business' => 'Negocio Existente',
                'new-business'      => 'Nuevo Negocio',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Rol de Administrador',
                'administrator'      => 'Administrador',
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'Correos electrónicos a los participantes tras la actualización de actividades',
            'email-to-participants-after-activity-creation' => 'Correos electrónicos a los participantes tras la creación de actividades',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Admin',
                'krayin'           => 'Krayin',
                'confirm-password' => 'Confirmar Contraseña',
                'email'            => 'Correo Electrónico',
                'email-address'    => 'admin@example.com',
                'password'         => 'Contraseña',
                'title'            => 'Crear Administrador',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Dinar Argelino (DZD)',
                'allowed-currencies'          => 'Monedas Permitidas',
                'allowed-locales'             => 'Idiomas Permitidos',
                'application-name'            => 'Nombre de la Aplicación',
                'argentine-peso'              => 'Peso Argentino (ARS)',
                'australian-dollar'           => 'Dólar Australiano (AUD)',
                'krayin'                      => 'Krayin',
                'bangladeshi-taka'            => 'Taka Bangladesí (BDT)',
                'brazilian-real'              => 'Real Brasileño (BRL)',
                'british-pound-sterling'      => 'Libra Esterlina (GBP)',
                'canadian-dollar'             => 'Dólar Canadiense (CAD)',
                'cfa-franc-bceao'             => 'Franco CFA BCEAO (XOF)',
                'cfa-franc-beac'              => 'Franco CFA BEAC (XAF)',
                'chilean-peso'                => 'Peso Chileno (CLP)',
                'chinese-yuan'                => 'Yuan Chino (CNY)',
                'colombian-peso'              => 'Peso Colombiano (COP)',
                'czech-koruna'                => 'Corona Checa (CZK)',
                'danish-krone'                => 'Corona Danesa (DKK)',
                'database-connection'         => 'Conexión de Base de Datos',
                'database-hostname'           => 'Nombre del Host de la Base de Datos',
                'database-name'               => 'Nombre de la Base de Datos',
                'database-password'           => 'Contraseña de la Base de Datos',
                'database-port'               => 'Puerto de la Base de Datos',
                'database-prefix'             => 'Prefijo de la Base de Datos',
                'database-username'           => 'Usuario de la Base de Datos',
                'default-currency'            => 'Moneda Predeterminada',
                'default-locale'              => 'Idioma Predeterminado',
                'default-timezone'            => 'Zona Horaria Predeterminada',
                'default-url'                 => 'URL Predeterminada',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Libra Egipcia (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Dólar Fiyiano (FJD)',
                'hong-kong-dollar'            => 'Dólar de Hong Kong (HKD)',
                'hungarian-forint'            => 'Forinto Húngaro (HUF)',
                'indian-rupee'                => 'Rupia India (INR)',
                'indonesian-rupiah'           => 'Rupia Indonesia (IDR)',
                'israeli-new-shekel'          => 'Nuevo Shekel Israelí (ILS)',
                'japanese-yen'                => 'Yen Japonés (JPY)',
                'jordanian-dinar'             => 'Dinar Jordano (JOD)',
                'kazakhstani-tenge'           => 'Tenge Kazajo (KZT)',
                'kuwaiti-dinar'               => 'Dinar Kuwaití (KWD)',
                'lebanese-pound'              => 'Libra Libanesa (LBP)',
                'libyan-dinar'                => 'Dinar Libio (LYD)',
                'malaysian-ringgit'           => 'Ringgit Malayo (MYR)',
                'mauritian-rupee'             => 'Rupia de Mauricio (MUR)',
                'mexican-peso'                => 'Peso Mexicano (MXN)',
                'moroccan-dirham'             => 'Dirham Marroquí (MAD)',
                'mysql'                       => 'Mysql',
                'nepalese-rupee'              => 'Rupia Nepalesa (NPR)',
                'new-taiwan-dollar'           => 'Nuevo Dólar Taiwanés (TWD)',
                'new-zealand-dollar'          => 'Dólar Neozelandés (NZD)',
                'nigerian-naira'              => 'Naira Nigeriana (NGN)',
                'norwegian-krone'             => 'Corona Noruega (NOK)',
                'omani-rial'                  => 'Rial Omaní (OMR)',
                'pakistani-rupee'             => 'Rupia Paquistaní (PKR)',
                'panamanian-balboa'           => 'Balboa Panameño (PAB)',
                'paraguayan-guarani'          => 'Guaraní Paraguayo (PYG)',
                'peruvian-nuevo-sol'          => 'Nuevo Sol Peruano (PEN)',
                'pgsql'                       => 'pgSQL',
                'philippine-peso'             => 'Peso Filipino (PHP)',
                'polish-zloty'                => 'Zloty Polaco (PLN)',
                'qatari-rial'                 => 'Rial Catarí (QAR)',
                'romanian-leu'                => 'Leu Rumano (RON)',
                'russian-ruble'               => 'Rublo Ruso (RUB)',
                'saudi-riyal'                 => 'Riyal Saudí (SAR)',
                'select-timezone'             => 'Seleccionar Zona Horaria',
                'singapore-dollar'            => 'Dólar de Singapur (SGD)',
                'south-african-rand'          => 'Rand Sudafricano (ZAR)',
                'south-korean-won'            => 'Won Surcoreano (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Rupia de Sri Lanka (LKR)',
                'swedish-krona'               => 'Corona Sueca (SEK)',
                'swiss-franc'                 => 'Franco Suizo (CHF)',
                'thai-baht'                   => 'Baht Tailandés (THB)',
                'title'                       => 'Configuración de la Tienda',
                'tunisian-dinar'              => 'Dinar Tunecino (TND)',
                'turkish-lira'                => 'Lira Turca (TRY)',
                'ukrainian-hryvnia'           => 'Grivna Ucraniana (UAH)',
                'united-arab-emirates-dirham' => 'Dírham de los Emiratos Árabes Unidos (AED)',
                'united-states-dollar'        => 'Dólar Estadounidense (USD)',
                'uzbekistani-som'             => 'Som Uzbeko (UZS)',
                'venezuelan-bolívar'          => 'Bolívar Venezolano (VEF)',
                'vietnamese-dong'             => 'Dong Vietnamita (VND)',
                'warning-message'             => '¡Atención! Los ajustes de idioma y moneda predeterminados son permanentes y no se pueden cambiar una vez configurados.',
                'zambian-kwacha'              => 'Kwacha de Zambia (ZMW)',
            ],

            'installation-processing' => [
                'krayin'       => 'Instalación de Krayin',
                'krayin-info'  => 'Creando las tablas de la base de datos, esto puede tardar unos momentos',
                'title'        => 'Instalación',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Panel de Administración',
                'krayin-forums'              => 'Foro de Krayin',
                'customer-panel'             => 'Panel de Clientes',
                'explore-krayin-extensions'  => 'Explorar Extensiones de Krayin',
                'title'                      => 'Instalación Completada',
                'title-info'                 => 'Krayin se ha instalado correctamente en su sistema.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Crear tabla de base de datos',
                'install'                 => 'Instalación',
                'install-info'            => 'Krayin Para la Instalación',
                'install-info-button'     => 'Haga clic en el botón a continuación para',
                'populate-database-table' => 'Rellenar las tablas de la base de datos',
                'start-installation'      => 'Iniciar Instalación',
                'title'                   => 'Listo para la Instalación',
            ],

            'start' => [
                'locale'        => 'Idioma',
                'main'          => 'Iniciar',
                'select-locale' => 'Seleccionar Idioma',
                'title'         => 'Instalación de Krayin',
                'welcome-title' => 'Bienvenido a Krayin',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendario',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filtro',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 o superior',
                'session'     => 'sesión',
                'title'       => 'Requisitos del Sistema',
                'tokenizer'   => 'tokenizador',
                'xml'         => 'XML',
            ],

            'back'                     => 'Atrás',
            'krayin'                   => 'Krayin',
            'krayin-info'              => 'un Proyecto Comunitario de',
            'krayin-logo'              => 'Logotipo de Krayin',
            'continue'                 => 'Continuar',
            'installation-description' => 'La instalación de Krayin generalmente implica varios pasos. Aquí hay un esquema general del proceso de instalación de Krayin.',
            'installation-info'        => '¡Estamos encantados de verte aquí!',
            'installation-title'       => 'Bienvenido a la Instalación',
            'asistente-de-instalación' => 'Idioma del Asistente de Instalación',
            'title'                    => 'Instalador de Krayin',
            'webkul'                   => 'Webkul',
        ],
    ],
];
