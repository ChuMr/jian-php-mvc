<?php
/**
 * app       应用目录
 * core      核心目录
 * index.php 入口文件
 * config    配置文件
 */

define('APP_PATH',__DIR__.'/');

//基础类
require APP_PATH . 'core/Base.php';


//$app = new \core\App();
//$app::run();
$app = new \core\App();
$app::Run();
