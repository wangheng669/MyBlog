<?php
/* Smarty version 3.1.30, created on 2017-11-23 16:01:19
  from "C:\wamp64\www\MVC\temp\index\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a16804fc7b788_01979706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbfd333b73ce2b5815d2a702416cc4fcea565f09' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\index\\message.html',
      1 => 1511424078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/leftmenu.html' => 1,
  ),
),false)) {
function content_5a16804fc7b788_01979706 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\MVC\\libs\\ORG\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:index/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="right_article">
			<div class='usermessage' id='usermessage'>
				<div class='message_head'>
					<img src='common/img/head.png'>
				</div>
				<form action='index.php?controller=index&method=postcomments' method='post' id='addCommentForm'>
					<input type='text' name='username' placeholder='请输入你的昵称' id='username'>
					<textarea cols='45' rows='3' id='usercontent' name="content"></textarea>
					<button class='issue' id='submit'>发布</button>
					<span class='error' style='color: red;display: none;'>输入不合法</span>
				</form>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
				<div class='usermessage'>
					<div class='message_head'>
						<img src='common/img/head.png'>
					</div>
					<p style='margin-left: 140px;'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['val']->value['username'])===null||$tmp==='' ? '' : $tmp);?>
</p>
					<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['val']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</p>
					<span><?php echo (($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['face'],"%Y-%m-%d %H:%M:%S"))===null||$tmp==='' ? '' : $tmp);?>
</span>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<?php }?>
		</div>
	</div>
</body>
</html><?php }
}
