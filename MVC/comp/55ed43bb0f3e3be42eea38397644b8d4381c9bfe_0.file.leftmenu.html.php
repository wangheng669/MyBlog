<?php
/* Smarty version 3.1.30, created on 2017-11-23 16:00:05
  from "C:\wamp64\www\MVC\index\leftmenu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a168005d43c85_98307041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ed43bb0f3e3be42eea38397644b8d4381c9bfe' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\index\\leftmenu.html',
      1 => 1511424001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a168005d43c85_98307041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章首页</title>
	<link rel="stylesheet" type="text/css" href="common/css/reset.css">
	<link rel="stylesheet" type="text/css" href="common/css/main.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="common/js//jq.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="common/js/ajax.js"><?php echo '</script'; ?>
>

</head>
<body>
	<div class="main">
		<div class="left_user">
			<div class="user_head" onclick="window.location.href='index.php?controller=index'">
				<img src="common/img/head.png">
			</div>
			<div class="user_info">
				<h2>QQ:2658803113&nbsp;<a href="admin.php?controller=admin&method=login" style="color: #fff;text-align: center;">登录</a></h2>
				<p>我是一个17岁的学生,目前在家自学编程,希望明年可以找到工作,平常的爱好是看电影,喜欢新鲜事物</p>
			</div>
			<form action="" method="post" id="search">
					<input class="search" type="text" name="key" placeholder="search">
			</form>
			<div class="message">
				<a style="color: #fff;text-align: center;">写留言</a>
			</div>
		</div><?php }
}
