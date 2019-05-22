<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/13
 * Time: 14:34
 */
namespace core;

class App
{
    public static function Run()
    {
        //加载配置文件
        //设置路径环境变量
        //加载环境变量配置文件

        require APP_PATH . 'config/config.php';

        //注册树模式,将必须的类实例化放在一个数组里,方便之后使用
        $db = new database();
        $db::main();
       var_dump($_SERVER['REQUEST_URI']); 
       echo 'app_run';
    }

    /**
     * 路由处理
     */
    public function Route()
    {

    }

    public function removeMagicQuotes()
    {
        magic_quotes_gpc();
    }

    public function unregisterGlobals()
    {

    }


}