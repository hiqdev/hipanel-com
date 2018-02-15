<?php
/**
 * hipanel.com site
 *
 * @link      https://github.com/hiqdev/hipanel-com
 * @package   hipanel-com
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\com\menus;

use Yii;

class MainMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return [
            ['label' => Yii::t('hipanel:com', 'Features'), 'url' => '#features'],
            ['label' => Yii::t('hipanel:com', 'Screenshots'), 'url' => '#screenshots'],
            ['label' => Yii::t('hipanel:com', 'Pricing'), 'url' => '#pricing'],
            ['label' => Yii::t('hipanel:com', 'About'), 'url' => '#about'],
            ['label' => Yii::t('hipanel:com', 'Team'), 'url' => '#team'],
            ['label' => Yii::t('hipanel:com', 'Contact'), 'url' => '#contact'],
        ];
    }
}
