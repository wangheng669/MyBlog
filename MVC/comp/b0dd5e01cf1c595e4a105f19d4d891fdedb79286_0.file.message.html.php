<?php
/* Smarty version 3.1.30, created on 2017-11-23 16:03:52
  from "C:\wamp64\www\MVC\temp\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1680e8114ed1_86465448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dd5e01cf1c595e4a105f19d4d891fdedb79286' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\admin\\message.html',
      1 => 1511424231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_5a1680e8114ed1_86465448 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<?php $_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div id="right-content">
			<h2>评论管理列表</h2>
			<div class="list">
			<span>总共有<?php echo $_smarty_tpl->tpl_vars['articlenum']->value;?>
条评论</span>
				<dl>
					<dt>
						<span class="list-id">编号</span>
						<span class="list-title">标题</span>
						<span class="list-handle">操作</span>
					</dt>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
			        <dd>
				        <span class="list-id"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</span>
						<span class="list-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</span>
						<span class="list-handle"><a href="admin.php?controller=admin&method=articledel&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
&type=message">删除</a></span>
					</dd>
			    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</dl>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
