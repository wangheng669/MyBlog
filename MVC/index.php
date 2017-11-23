<?php 
header("Content-type:text/html;charset='utf-8'");//设置字符集
session_start();//开启SESSION
require_once 'pc.php';
require_once 'config.php';//包含配置文件
PC::run($config);
?>