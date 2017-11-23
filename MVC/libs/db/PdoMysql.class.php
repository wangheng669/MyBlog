<?php 
    //定义封装类,主要对数据库的操作的封装
    /*
     * 1.查询
     * 2.插入
     * 3.连接
     * 4.错误
     * 5.更新
     * 6.查询单个记录
     * 7.获取更新ID
     * 8.获取记录条数
     * 9.执行SQL语句
     */
    class PdoMysql{
        //连接封装,需要引入config.php
        public static $pdo=null;
        public static $PDOStatement='dda';//定义预处理对象
        public function connect(){//参数:1.主机名,2.用户名,3.密码,4.数据库名
            try{
                $dsn='mysql:host=localhost;dbname=imooc';
                $username='root';
                $passwd='wangheng';
                self::$pdo=new PDO($dsn,$username,$passwd);
            }catch(PDOException $e){//捕获错误
                $mes=$e->getMessage();//将错误赋值到mes参数中
                $this->err($mes);//将错误信息传递给err方法
            }
        }
        
        //输出SQL语法错误
        public function err($error){//函数封装的错误作为参数传递
              die('对不起,你的操作有误,原因为:'.$error);
        }
        //获取预处理对象
        public function excute($sql){
            if($sql!=null){
                $pdo=self::$pdo;
                if(!empty(self::$PDOStatement)){
                   $this->free();
                   self::$PDOStatement=$pdo->prepare($sql);
                   $res=self::$PDOStatement->execute();
                   return $res;
                }
            }
        }
        //释放结果集
        public function free(){
            self::$PDOStatement=null;
        }
        //获取数据表中全部信息的封装
        function fetchAll($sql){//参数:sql语句
            $this->excute($sql);
            $res=self::$PDOStatement->fetchAll(constant("PDO::FETCH_ASSOC"));
            return $res;
        }
        //获取数据表中单条信息的封装
        function fetchOne($sql){//参数:sql语句
            $this->excute($sql);
            $res=self::$PDOStatement->fetch(constant("PDO::FETCH_ASSOC"));
            return $res;
        }
        //获取上次插入的ID
        function getLastId(){
            $pdo=self::$pdo;
            $res=$pdo->lastInsertId();
            return $res;
        }
        //获取受影响的记录数
        function getaffected($sql){
            $pdo=self::$pdo;
            $res=$pdo->exec($sql);
            return $res;
        }
        //返回记录条数
        function count($sql){
            $pdo=self::$pdo;
            $q=$pdo->query($sql);
            $rows = $q->fetch();
            $rowCount = $rows[0];
            return $rowCount;
        }
        //插入操作封装
        function Insert($table,$arr){
            $keys=implode(',',array_keys($arr));
            $values=implode("','",array_values($arr));
            $sql="INSERT INTO {$table}({$keys}) VALUES('{$values}')";
            if($res=$this->query($sql)){
                return $this->getLastId();
            }else{
                $this->err("插入错误");
            }
        }
        //更新操作封装
        function update($table,$arr,$where=null){
            $str='';
            $pdo=self::$pdo;
            foreach($arr as $key=>$val){
                $val=$pdo->quote($val);
                $str.="`{$key}`={$val},";
            }
            $str=trim($str,',');
            $sql="UPDATE {$table} SET {$str} where {$where}";
            if($this->query($sql)){
                return true;
            }else{
                $this->err($sql);
            }
        }
        //执行SQL语句封装
        function query($sql){
            $pdo=self::$pdo;
            if($pdo->exec($sql)){
                return true;
            }else{
                return false;
            }
        }
        
        //执行删除操作
        function del($table,$where){
            $sql="DELETE FROM {$table} WHERE {$where}";
            if($res=$this->getaffected($sql)){
                return $res;
            }else{
                $this->err($sql);
            }
        }
    }
/*     $PdoMysql=new PdoMysql();
    $PdoMysql->connect();
    $sql="SELECT * FROM admin WHERE username='wangheng'";
    print_r($PdoMysql->fetchOne($sql)); */
?>