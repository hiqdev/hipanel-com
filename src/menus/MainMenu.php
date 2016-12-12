<?php

namespace hipanel\com\menus;

use Yii;

class MainMenu extends \hiqdev\menumanager\Menu
{
    public function items()
    {
        return [
            ['label' => Yii::t('hipanel:com', 'Features'), 'url' => '#features', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
            ['label' => Yii::t('hipanel:com', 'Screenshots'), 'url' => '#screenshots', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
            ['label' => Yii::t('hipanel:com', 'Pricing'), 'url' => '#pricing', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
            ['label' => Yii::t('hipanel:com', 'About'), 'url' => '#about', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
            ['label' => Yii::t('hipanel:com', 'Team'), 'url' => '#team', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
            ['label' => Yii::t('hipanel:com', 'Contact'), 'url' => '#contact', 'template' => '<a href="{url}" class="page-scroll">{label}</a>'],
        ];
    }
}
