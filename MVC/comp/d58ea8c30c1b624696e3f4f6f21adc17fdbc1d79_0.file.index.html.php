<?php
/* Smarty version 3.1.30, created on 2017-11-23 12:53:12
  from "C:\wamp64\www\MVC\temp\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a165438528044_51933783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58ea8c30c1b624696e3f4f6f21adc17fdbc1d79' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\index\\index.html',
      1 => 1511412790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/leftmenu.html' => 1,
  ),
),false)) {
function content_5a165438528044_51933783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="right_article">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
			<div class='user_article'>
				<div class='user_title'>
					<h2><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</h2>
				</div>
				<div class='user_description'><i style='display: none;'><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</i><p><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</p></div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>
</body>
</html><?php }
}
