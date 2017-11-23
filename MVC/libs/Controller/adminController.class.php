<?php 
class adminController{
    public $auth='';
    public function __construct(){
        //判断用户是否登录
        $authobj=M('auth');
        $this->auth=$authobj->getauth();
        if(empty($this->auth)&&PC::$method!='login'&&PC::$method!='register'){
            $this->showmessage("请登录后操作",'admin.php?controller=admin&method=login');
        }
    }
    public function login(){//用户登录操作
        if($_POST){//如果用户输入数据并提交
            //进行用户登录验证,需要在Model层进行验证
            $this->checklogin();
        }
        //调用视图方法展示login.html
        View::display('admin/login.html');
    }
    public function register(){//用户登录操作
        //调用视图方法展示login.html
        View::display('admin/register.html');
    }
    //退出登录
    public function logout(){//用户登录操作
        $articleobj=M('auth');
        $articleobj->logout();
        $this->showmessage("退出成功",'admin.php?controller=admin&method=login');
    }
    
    //进行用户验证处理
    public function checklogin(){
        $authobj=M('auth');
        if($authobj->loginsubmit()){
            $this->showmessage("登录成功",'admin.php?controller=admin&method=index');
        }else{
            $this->showmessage("登录失败",'admin.php?controller=admin&method=login');
        }
    }
    //用于用户登录后的提示
    public function showmessage($str,$url){
        echo "<script>alert('$str');window.location.href='$url'</script>";
    }
    //主页展示
    public function index(){
        $articleobj=M('article');
        $articlenum=$articleobj->count('article');
        $data=$articleobj->articlelist();
        View::assign(array('data'=>$data));
        View::assign(array('articlenum'=>$articlenum));
        View::display('admin/index.html');
    }
    //评论展示
    public function articlemessage(){
        $articleobj=M('article');
        $articlenum=$articleobj->count('comments');
        $data=$articleobj->articlelist('comments');
        View::assign(array('data'=>$data));
        View::assign(array('articlenum'=>$articlenum));
        View::display('admin/message.html');
    }
    //添加文章
    public function articleadd(){
        if(empty($_POST)){
            if(!empty($_GET['id'])){
                $articleobj=M('article');
                $data=$articleobj->articleinfo("id={$_GET['id']}");
            }else{
                $data=array();
            }
            View::assign(array('data'=>$data));
            View::display('temp/admin/article.html');
        }else{
            //将获取到的POST数据进一步处理
            $this->articlesubmit();
        }
    }
    //判断返回值输出对应内容
    private function articlesubmit(){
        $articleobj=M('article');
        $result=$articleobj->articlesubmit($_POST);
        if($result==0){
            $this->showmessage("请输入标题和内容",'admin.php?controller=admin&method=articleadd&id='.$_POST['id']);
        }elseif($result==1){
            $this->showmessage("插入成功",'admin.php?controller=admin&method=index');
        }elseif($result==2){
            $this->showmessage("更新成功",'admin.php?controller=admin&method=index');
        }
    }
    //删除操作
    public function articledel(){
        $table='article';
        $params='index';
        if(!empty($_GET['type'])&&$_GET['type']=='message'){
            $table='comments';
            $params='articlemessage';
        }
        if(intval($_GET['id'])){
            $articleobj=M('article');
            $result=$articleobj->articledel($table,$_GET['id']);
            if($result){
                $this->showmessage("删除成功","admin.php?controller=admin&method={$params}");
            }else{
                $this->showmessage("删除失败","admin.php?controller=admin&method={$params}");
            }
        }else{
            $this->showmessage("没有传递id","admin.php?controller=admin&method={$params}");
        }
    }
    
}
?>
