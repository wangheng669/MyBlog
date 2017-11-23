<?php 
    //定义一个可以调用不同控制器的方法
    function  C($name,$method){//两个参数,1.控制器名称,2.控制器方法
        require_once "libs/Controller/{$name}Controller.class.php";//包含对应的控制器文件
           $controller=$name.'Controller';//定义变量保存类名
           $obj=new $controller;//new 一个对象
           $obj->$method();//调用传来的方法
    }
    //定义一个可以调用不同模型的方法
    function M($name){//一般模型需要传入参数所以不指定方法名,只指定类名
        require_once "libs/Model/{$name}Model.class.php";
           $Model=$name.'Model';
           $obj=new $Model;
           return $obj;
    }
    //定义一个可以调用不同视图的方法
    function V($name){//一般视图需要传入参数所以不指定方法名,只指定类名
        require_once "libs/{$name}View/{$name}View.class.php";
        $View=$name.'View';
        $obj=new $View;
        return $obj;
    }
    //防止用户输入不合法的字符,对‘’进行转移
    function daddslashes($str){
        return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }
?>