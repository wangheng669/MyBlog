<?php 
//该类主要用于调用PdoMysql类中的方法
    class DB{
        public static $db=null;//用于保存对象
        public static function init($obj){
           self::$db=new $obj;
           return self::$db->connect();//调用连接对象
        }
        public static function query($sql){
            return self::$db->query($sql);
        }
        public static function count($sql){
            return self::$db->count($sql);
        }
        public static function findAll($sql){
            return self::$db->fetchAll($sql);
        }
        public static function findOne($sql){
            return self::$db->fetchOne($sql);
        }
        public static function insert($table,$arr){
            return self::$db->insert($table,$arr);
        }
        public static function update($table,$arr,$where=null){
            return self::$db->update($table,$arr,$where);
        }
        public static function del($table,$where){
            return self::$db->del($table,$where);
        }
        public static function getLastId(){
            return self::$db->getLastId();
        }
    }
?>
