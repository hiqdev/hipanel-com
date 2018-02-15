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

class NavbarMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return (new MainMenu())->items();
    }
}
