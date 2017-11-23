<?php 
    class adminModel{//只负责在数据表中调取数据并返回
        public $table='admin';
        public function findOne_by_name($username){//传入表名查询是否存在此用户
            $sql="SELECT * FROM {$this->table} WHERE username='{$username}'";//查询传入的username
            return DB::findOne($sql);//返回一个查询到的数组或false
        }
        //调取另一个模型authModel.class.php
        /* array('username'=>'wangheng','userpassword'=>'wangheng') */
    }
?>