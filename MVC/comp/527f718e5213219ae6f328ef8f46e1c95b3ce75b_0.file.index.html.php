<?php
/* Smarty version 3.1.30, created on 2017-11-22 23:15:41
  from "C:\wamp64\www\MVC\temp\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a15949d079056_61223553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527f718e5213219ae6f328ef8f46e1c95b3ce75b' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\admin\\index.html',
      1 => 1511363734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_5a15949d079056_61223553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div id="right-content">
			<h2>文章管理列表</h2>
			<div class="list">
			<span>总共有<?php echo $_smarty_tpl->tpl_vars['articlenum']->value;?>
篇文章</span>
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
						<span class="list-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</span>
						<span class="list-handle"><a href="admin.php?controller=admin&method=articleadd&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">修改</a>&nbsp;<a href="admin.php?controller=admin&method=articledel&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a></span>
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
</html>
<?php }
}
