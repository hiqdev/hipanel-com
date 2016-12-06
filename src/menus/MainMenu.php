<?php

namespace hipanel\com\menus;

use Yii;

class MainMenu extends \hiqdev\menumanager\Menu
{
    public function items()
    {
        return [
            ['label' => Yii::t('hipanel:com', 'About'), 'url' => ['/site/about']],
            ['label' => Yii::t('hipanel:com', 'Contact'), 'url' => ['/site/contact']],
            ['label' => Yii::t('hipanel:com', 'Login'), 'url' => ['/site/login']],
        ];
    }
}
