<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 16:44
 */

namespace core;

class loader
{
    static function register()
    {
        spl_autoload_register('core\\loader::autoload');
    }

    static function autoload($class)
    {
        require APP_PATH . $class . '.php';
    }
}