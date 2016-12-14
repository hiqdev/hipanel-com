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
];
