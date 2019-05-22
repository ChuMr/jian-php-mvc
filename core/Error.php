<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/13
 * Time: 13:47
 */
namespace core;

class Error
{
    static function register()
    {
        error_reporting(E_ALL);
    }
}