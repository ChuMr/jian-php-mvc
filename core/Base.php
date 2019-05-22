<?php
/**
 * Created by PhpStorm.
 * User: qian
 * Date: 2019/5/10
 * Time: 18:19
 */
namespace core;

//载入loader 类
require APP_PATH . 'core/Loader.php';

//注册自动加载
Loader::register();

//注册错误和异常处理机制
Error::register();



