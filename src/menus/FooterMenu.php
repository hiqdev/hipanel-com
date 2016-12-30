<?php

namespace hipanel\com\menus;

class FooterMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return (new MainMenu)->items();
    }
}
