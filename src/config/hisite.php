<?php

return [
    'id' => 'hipanel.com',
    'name' => 'HiPanel',
    'components' => [
        'themeManager' => [
            'pathMap' => [
                '$themedViewPaths' => ['@hipanel/com/views'],
            ],
        ],
        'menuManager' => [
            'items' => [
                'main' => \hipanel\com\menus\MainMenu::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hipanel:com' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/agency/messages',
                ],
            ],
        ],
    ],
];
