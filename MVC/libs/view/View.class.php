<?php 
    class View{
        public static $View=null;
        public static function init($obj,$config){
            self::$View=new $obj;
            /*
            1.left_delimiter
            2.right_delimiter
            3.template_dir
            4.compile_dir
            5.cache_dir 
            */
            foreach($config as $key=>$val){
                self::$View->$key=$val;
            }
        }
        public static function assign($data){
            foreach ($data as $key=>$val){
                self::$View->assign($key,$val);
            }
        }
        public static function display($template){
            self::$View->display($template);
        }
    }
?>