<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Мовні рядки перевірки (Validation Language Lines)
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки містять повідомлення про помилки за замовчуванням,
    | що використовуються класом валідатора. Деякі правила мають кілька версій,
    | такі як правила розміру. Ви можете налаштувати кожне з цих повідомлень.
    |
    */

    'accepted'        => ':attribute має бути прийнятим.',
    'active_url'      => ':attribute не є дійсною URL-адресою.',
    'after'           => ':attribute має бути датою після :date.',
    'after_or_equal'  => ':attribute має бути датою не раніше :date.',
    'alpha'           => ':attribute може містити лише літери.',
    'alpha_dash'      => ':attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num'       => ':attribute може містити лише літери та цифри.',
    'array'           => ':attribute має бути масивом.',
    'before'          => ':attribute має бути датою до :date.',
    'before_or_equal' => ':attribute має бути датою не пізніше :date.',
    'between'         => [
        'numeric' => ':attribute має бути між :min та :max.',
        'file'    => ':attribute має бути між :min та :max кілобайт.',
        'string'  => ':attribute має містити від :min до :max символів.',
        'array'   => ':attribute має містити від :min до :max елементів.',
    ],
    'boolean'        => 'Поле :attribute має бути істинним або хибним.',
    'confirmed'      => 'Підтвердження :attribute не збігається.',
    'date'           => ':attribute не є дійсною датою.',
    'date_equals'    => ':attribute має бути датою, що дорівнює :date.',
    'date_format'    => ':attribute не відповідає формату :format.',
    'different'      => ':attribute та :other мають бути різними.',
    'digits'         => ':attribute має містити :digits цифр.',
    'digits_between' => ':attribute має містити від :min до :max цифр.',
    'dimensions'     => ':attribute має недійсні розміри зображення.',
    'distinct'       => 'Поле :attribute містить повторюване значення.',
    'email'          => ':attribute має бути дійсною електронною адресою.',
    'ends_with'      => ':attribute має закінчуватись одним із наступного: :values.',
    'exists'         => 'Вибраний :attribute недійсний.',
    'file'           => ':attribute має бути файлом.',
    'filled'         => 'Поле :attribute має містити значення.',
    'gt'             => [
        'numeric' => ':attribute має бути більшим за :value.',
        'file'    => ':attribute має бути більшим за :value кілобайт.',
        'string'  => ':attribute має містити більше :value символів.',
        'array'   => ':attribute має містити більше :value елементів.',
    ],
    'gte' => [
        'numeric' => ':attribute має бути більшим або дорівнювати :value.',
        'file'    => ':attribute має бути більшим або дорівнювати :value кілобайт.',
        'string'  => ':attribute має містити не менше :value символів.',
        'array'   => ':attribute має містити :value або більше елементів.',
    ],
    'image'    => ':attribute має бути зображенням.',
    'in'       => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer'  => ':attribute має бути цілим числом.',
    'ip'       => ':attribute має бути дійсною IP-адресою.',
    'ipv4'     => ':attribute має бути дійсною IPv4-адресою.',
    'ipv6'     => ':attribute має бути дійсною IPv6-адресою.',
    'json'     => ':attribute має бути дійсним JSON рядком.',
    'lt'       => [
        'numeric' => ':attribute має бути меншим за :value.',
        'file'    => ':attribute має бути меншим за :value кілобайт.',
        'string'  => ':attribute має містити менше :value символів.',
        'array'   => ':attribute має містити менше :value елементів.',
    ],
    'lte' => [
        'numeric' => ':attribute має бути меншим або дорівнювати :value.',
        'file'    => ':attribute має бути меншим або дорівнювати :value кілобайт.',
        'string'  => ':attribute має містити не більше :value символів.',
        'array'   => ':attribute не має містити більше :value елементів.',
    ],
    'max' => [
        'numeric' => ':attribute не може бути більшим за :max.',
        'file'    => ':attribute не може бути більшим за :max кілобайт.',
        'string'  => ':attribute не може містити більше :max символів.',
        'array'   => ':attribute не може містити більше :max елементів.',
    ],
    'mimes'     => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min'       => [
        'numeric' => ':attribute має бути не менше :min.',
        'file'    => ':attribute має бути не менше :min кілобайт.',
        'string'  => ':attribute має містити не менше :min символів.',
        'array'   => ':attribute має містити не менше :min елементів.',
    ],
    'multiple_of'          => ':attribute має бути кратним :value.',
    'not_in'               => 'Вибраний :attribute недійсний.',
    'not_regex'            => 'Формат :attribute недійсний.',
    'numeric'              => ':attribute має бути числом.',
    'password'             => 'Пароль невірний.',
    'present'              => 'Поле :attribute має бути присутнім.',
    'regex'                => 'Формат :attribute недійсний.',
    'required'             => 'Поле :attribute є обов’язковим.',
    'required_if'          => 'Поле :attribute є обов’язковим, коли :other дорівнює :value.',
    'required_unless'      => 'Поле :attribute є обов’язковим, якщо :other не входить до :values.',
    'required_with'        => 'Поле :attribute є обов’язковим, коли :values присутнє.',
    'required_with_all'    => 'Поле :attribute є обов’язковим, коли всі :values присутні.',
    'required_without'     => 'Поле :attribute є обов’язковим, коли :values відсутнє.',
    'required_without_all' => 'Поле :attribute є обов’язковим, коли жодне з :values не присутнє.',
    'same'                 => ':attribute і :other мають збігатися.',
    'size'                 => [
        'numeric' => ':attribute має бути :size.',
        'file'    => ':attribute має бути :size кілобайт.',
        'string'  => ':attribute має містити :size символів.',
        'array'   => ':attribute має містити :size елементів.',
    ],
    'starts_with' => ':attribute має починатися з одного з наступного: :values.',
    'string'      => ':attribute має бути рядком.',
    'timezone'    => ':attribute має бути дійсною часовою зоною.',
    'unique'      => ':attribute вже використовується.',
    'uploaded'    => ':attribute не вдалося завантажити.',
    'url'         => 'Формат :attribute недійсний.',
    'uuid'        => ':attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Спеціальні мовні рядки перевірки
    |--------------------------------------------------------------------------
    |
    | Тут ви можете вказати спеціальні повідомлення для правил, використовуючи
    | формат "attribute.rule". Це дозволяє налаштовувати повідомлення для
    | конкретних атрибутів.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'спеціальне-повідомлення',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Спеціальні атрибути для перевірки
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки використовуються для заміни нашого заповнювача
    | атрибутів на щось більш зручне для читання, наприклад, "Електронна адреса"
    | замість "email". Це допомагає зробити повідомлення більш виразними.
    |
    */

    'attributes' => [],

];
