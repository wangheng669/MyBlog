<?php
/* Smarty version 3.1.30, created on 2017-11-22 00:44:01
  from "C:\wamp64\www\MVC\admin\login.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1457d191d650_16772852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955db278f6c0c3661b3f74f9213c2b1b1e78e34e' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\admin\\login.php',
      1 => 1511282640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1457d191d650_16772852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
	';?>session_start();
	if(isset($_POST['username'])||isset($_POST['userpassword'])){
		$_SESSION['username']=$_POST['username'];
		$_SESSION['userpassword']=$_POST['userpassword'];
		if(!empty($_SESSION['username'])||!empty($_SESSION['userpassword'])){
			header("location:../article/admin/article.list.php");
		}
	}
<?php echo '?>';?>
<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="admin/css/reset.css">
	<link rel="stylesheet" type="text/css" href="admin/css/main.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="admin/js/jq.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="admin/js/ajax.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="loginmain">
		<div class="login">
			<form action="login.php" method="post">
				<input type="text" name="username" placeholder="账号">
				<input type="password" name="userpassword" placeholder="密码">
				<button>登录</button>
				<p>还没有账号？<a id="register">注册</a></p>
			</form>
		</div>
	</div>
</body>
</html><?php }
}
