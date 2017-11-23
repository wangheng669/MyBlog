<?php
/* Smarty version 3.1.30, created on 2017-11-23 15:01:05
  from "C:\wamp64\www\MVC\temp\admin\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1672319b1807_06007352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3066322b1dee8e3f41a264083d9556abf0ae54a6' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\admin\\register.html',
      1 => 1511420464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/top.html' => 1,
  ),
),false)) {
function content_5a1672319b1807_06007352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="register">
		<form action="" method="post">
					<span></span>
					<input type="text" name="username" placeholder="用户名" class="username">
					<input type="password" name="userpassword" placeholder="密码" class="userpassword">
					<input type="text" name="email" placeholder="邮箱" class="email">
					<input type="text" name="verify" placeholder="验证码" class="verify">
					<img id="captcha_img" src="admin/verify.php"/>
					<button class="register_button">注册</button>
		</form>
	</div>
</div>
</div>
</body>
</html><?php }
}
