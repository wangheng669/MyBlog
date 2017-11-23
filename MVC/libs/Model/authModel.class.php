<?php 
    class authModel{//主要用于查询用户传入的数据是否正确
        private $auth='';//保存登录用户信息
        public function __construct(){
            if(!empty($_SESSION['auth'])&&isset($_SESSION['auth'])){
                $this->auth=$_SESSION['auth'];
            }
        }
        public function loginsubmit(){//用于进行登录验证
            if(empty($_POST['username'])||empty($_POST['userpassword'])){//判断传入是否为空
                return false;
            }
            //对传入结果进行转义
            $username=daddslashes($_POST['username']);
            $userpassword=daddslashes($_POST['userpassword']);
            if($this->auth=$this->checkuser($username,$userpassword)){//将checkuser的返回值赋给保存的用户信息
                $_SESSION['auth']=$this->auth;
                return true;
            }else{//如果用户的值为false
                return false;
            }
        }
        //用于获取用户信息
        public function getauth(){
            return $this->auth;
        }
        //用于用户传入用户名及密码的验证
        public function checkuser($username,$userpassword){
            $adminobj=M('admin');
            $auth=$adminobj->findOne_by_name($username);
            if((!empty($auth))&&$auth['userpassword']==md5($userpassword)){
                return $auth;
            }else{
                return false;
            }
        }
        //退出登录
        public function logout(){
            unset($_SESSION['auth']);
            $this->auth='';
        }
    }
?>