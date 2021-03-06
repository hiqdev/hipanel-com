<?php
/**
 * hipanel.com site
 *
 * @link      https://github.com/hiqdev/hipanel-com
 * @package   hipanel-com
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

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
            'class' => \sadovojav\image\Thumbnail::class,
            'basePath' => '@hipanel/com/assets/img',
            'cachePath' => '@webroot/assets/thumbnails',
            'options' => [
                'placeholder' => [
                    'type' => 'js',
                    'random' => false,
                    'cache' => true,
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
    'modules' => [
        'pages' => [
            'storage' => [
                'class' => \creocoder\flysystem\LocalFilesystem::class,
                'path' => '@hipanel/com/pages',
            ],
        ],
    ],
];
