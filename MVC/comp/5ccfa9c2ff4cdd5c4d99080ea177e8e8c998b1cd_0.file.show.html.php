<?php
/* Smarty version 3.1.30, created on 2017-11-23 13:29:11
  from "C:\wamp64\www\MVC\temp\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a165ca7e91266_10102968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ccfa9c2ff4cdd5c4d99080ea177e8e8c998b1cd' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\index\\show.html',
      1 => 1511414949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/leftmenu.html' => 1,
  ),
),false)) {
function content_5a165ca7e91266_10102968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="right_article">
			<div class='user_article'>
				<div class='user_title'>
					<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
</h2>
					<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['dateline'])===null||$tmp==='' ? '' : $tmp);?>
</p>
				</div>
				<div class='user_description'><i style='display: none;'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
</i><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</p></div>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
