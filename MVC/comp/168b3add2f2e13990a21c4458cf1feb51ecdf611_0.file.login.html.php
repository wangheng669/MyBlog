<?php
/* Smarty version 3.1.30, created on 2017-11-23 15:53:17
  from "C:\wamp64\www\MVC\temp\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a167e6def3a60_34629727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '168b3add2f2e13990a21c4458cf1feb51ecdf611' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\admin\\login.html',
      1 => 1511423595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/top.html' => 1,
  ),
),false)) {
function content_5a167e6def3a60_34629727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="login">
			<form action="admin.php?controller=admin&method=login" method="post">
				<input type="text" name="username" placeholder="账号">
				<input type="password" name="userpassword" placeholder="密码">
				<button>登录</button>
				<p>还没有账号？<a id="register" href="admin.php?controller=admin&method=register">注册</a></p>
			</form>
		</div>
	</div>
</body>
</html><?php }
}
