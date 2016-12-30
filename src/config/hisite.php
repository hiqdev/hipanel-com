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
        'i18n' => [
            'translations' => [
                'hipanel:com' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/agency/messages',
                ],
            ],
        ],
        'thumbnail' => [
            'class' => '\sadovojav\image\Thumbnail',
            'basePath' => '@hipanel/com/assets/img',
            'cachePath' => '@webroot/assets/thumbnails',
            'options' => [
                'placeholder' => [
                    'type' => 'js',
                    'random' => false,
                    'cache' => true
                ],
                'quality' => 62,
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractMainMenu::class => ['class' => \hipanel\com\menus\MainMenu::class],
            \hiqdev\thememanager\menus\AbstractFooterMenu::class => ['class' => \hipanel\com\menus\FooterMenu::class],
            \hiqdev\thememanager\menus\AbstractNavbarMenu::class => ['class' => \hipanel\com\menus\NavbarMenu::class],
        ],
    ],
];
