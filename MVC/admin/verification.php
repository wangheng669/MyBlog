<?php
	session_start();
	require_once '../pc.php';
	require_once 'swiftmailer-master/lib/swift_required.php';
	require_once 'comment.class.php';
	PC::init_db();
	//接受信息
	$verifystr=empty($_SESSION['str'])?null:$_SESSION['str'];
	$regexTool=new regexTool();
	$regexTool->toggleReturnType(false);
	if(isset($_POST['username'])&&isset($_POST['userpassword'])&&isset($_POST['email'])&&isset($_POST['verify'])){
		if(!$regexTool->setregex('qq',$_POST['username'])){
			echo json_encode('用户输入不合法');
			exit();
		}elseif(!$regexTool->setregex('english',$_POST['userpassword'])){
			echo json_encode('密码输入不合法');
			exit();
		}elseif(!$regexTool->setregex('email',$_POST['email'])){
			echo json_encode('邮箱输入不合法');
			exit();
		}
		if($verifystr!=strtolower($_POST['verify'])){
			echo json_encode('验证码错误');
			exit();
		}
	}
	$username=isset($_POST['username'])?addslashes($_POST['username']):null;//过滤用户输入的内容
	$userpassword=isset($_POST['userpassword'])?md5($_POST['userpassword']):null;//对用户输入的密码进行加密
	$email=isset($_POST['email'])?$_POST['email']:null;//对用户输入的密码进行加密
	$act=isset($_POST['act'])?$_POST['act']:null;//得到你要完成的功能
	$act1=isset($_GET['act1'])?$_GET['act1']:null;//得到你要完成的功能
	//插入记录的数据表
	$tables='login';
	//我的邮箱密码
	$emailPassword='ammpmjilntuddifj';
	//获取最后插入的ID
	$lastInsertId=DB::getLastId();
	//检测传入的值是否存在于数据库
	if(DB::findOne("SELECT * FROM login WHERE username='{$username}'")){
		echo json_encode("用户已存在");
		exit();
	};
	if($act=='reg'){
		//得到激活码
		$username=trim($username,"'");
		$token=md5($username.$userpassword.$email);
		//注册时间
		$regtime=time();
		//激活码有效期
		$token_exptime=$regtime+24*3600;
		//想数据库中添加用户
		$data=compact('username','userpassword','email','token','token_exptime','regtime');//该函数可将变量中的值和变量名转换成数组
		$res=DB::insert($tables,$data);
			if($res){
			//发送邮件，以QQ邮箱为例
			//配置邮件服务器，得到传输对象
			$transport=Swift_SmtpTransport::newInstance('smtp.qq.com',465,'ssl');
			//设置登陆帐号和密码
			$transport->setUsername('2658803113@qq.com');
			$transport->setPassword($emailPassword);
			//得到发送邮件对象Swift_Mailer对象
			$mailer=Swift_Mailer::newInstance($transport);
			//得到邮件信息对象
			$message=Swift_Message::newInstance();
			//设置管理员的信息
			$message->setFrom(array('2658803113@qq.com'=>'wangheng669'));
			//将邮件发给谁
			$message->setTo(array($email=>'2658803113@qq.com'));
			//设置邮件主题
			$message->setSubject('激活邮件');
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?act1=active&token={$token}";
			$urlencode=urlencode($url);
			$str=<<<EOF
			亲爱的{$username}您好~！感谢您注册我们网站<br/>
			请点击此链接激活帐号即可登陆！<br/>
			<a href="{$url}">{$urlencode}</a>
			<br/>
			如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。		
EOF;
			$message->setBody("{$str}",'text/html','utf-8');
			try{
				if($mailer->send($message)){
					echo json_encode("邮件已发送,请激活后登录");
					exit();
				}else{
					DB::del($tables,'id='.$lastInsertId);
					echo json_encode("用户注册失败");
					exit();
				}
			}catch(Swift_IoException $e){
				echo '邮件发送错误'.$e->getMessage();
			}
		}else{
			echo json_encode("用户注册失败");
			exit();
		}
	}elseif($act1==='active'){
	$token=addslashes($_GET['token']);
	$row=DB::findOne("SELECT * FROM login WHERE token='{$token}' AND status=0");
	$now=time();
	if($now>$row['token_exptime']){
		echo $row['token_exptime'];
	}else{
		$res=DB::update($tables,array('status'=>1),'id='.$row['id']);
		if($res){
			exit('<script>alert("激活成功,跳转到登录界面");window.location.href="../admin.php?controller=admin&method=login"</script>');
		}else{
			exit('<script>alert("激活失败,重新注册");window.location.href="../admin.php?controller=admin&method=login"</script>');
		}
	}
	
}
?>