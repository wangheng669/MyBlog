<?php
/* Smarty version 3.1.30, created on 2017-11-23 16:03:25
  from "C:\wamp64\www\MVC\admin\leftmenu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1680cdeaf535_28395017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee7e6b6662dba784664a184750ee03ea6931986' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\admin\\leftmenu.html',
      1 => 1511424183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1680cdeaf535_28395017 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>文章发布系统</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="common/css/reset.css">
	<link rel="stylesheet" type="text/css" href="common/css/article.css">
</head>
<body>
	<div id="main">
		<div id="top">
			<h1>文章发布系统</h1>
			<span>一一后台管理系统</span>
			<a href='admin.php?controller=admin&method=login'>退出</a>
			<a href='admin.php?controller=index' style="float: right;">返回首页</a>
		</div>
		<div id="left-list">
			<h2><i class="fa fa-list-ul fa-2x"></i></h2>
			<ul>
				<a href="admin.php?controller=admin&method=articleadd"><li>发布文章</li></a>
				<a href="admin.php?controller=admin&method=index"><li>管理文章</li></a>
				<a href="admin.php?controller=admin&method=articlemessage"><li>管理评论</li></a>
			</ul>
		</div><?php }
}
