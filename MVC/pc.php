<?php 
    require_once 'require.php';//引入所有文件
    class PC{//让程序跑起来!!!!
        public static $controller;//用于调用指定控制器
        public static $method;//用于调用指定控制器中的方法
        public static $config;//配置View选项
        public static $controllerAllow=array('test','show','login','admin','articleadd','articlemessage','articlelist','article','id','articledel','articleshow','articlesearch','postcomments','register');
        public static function init_db(){//用于调用DB类
            DB::init('PdoMysql');
        }
        public static function init_view(){//调用View类
            View::init('Smarty',self::$config);
        }
        public static function init_controller(){
            self::$controller=in_array(empty($_GET['controller'])?'index':$_GET['controller'],self::$controllerAllow)?$_GET['controller']:'index';  
        }
        public static function init_method(){
            self::$method=in_array(empty($_GET['method'])?'index':$_GET['method'],self::$controllerAllow)?$_GET['method']:'index';
        }
        public static function run($config){
            self::$config=$config;
            self::init_db();
            self::init_view();
            self::init_controller();
            self::init_method();
            C(self::$controller,self::$method);
        }
    }
?>