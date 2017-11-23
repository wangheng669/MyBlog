<?php
/* Smarty version 3.1.30, created on 2017-11-23 14:51:00
  from "C:\wamp64\www\MVC\temp\admin\article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a166fd4ee3a91_43128309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2fa7eddb3feab3d8db71f5c59e21d0aaa2411bc' => 
    array (
      0 => 'C:\\wamp64\\www\\MVC\\temp\\admin\\article.html',
      1 => 1511412870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_5a166fd4ee3a91_43128309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div id="right-content">
			<h2>发布文章</h2>
			<div class="content">
				<form action="admin.php?controller=admin&method=articleadd" method="post" name="all">
					<div class="data">
						<label>标题</label>
						<input type="text"  style='display:none' name='id'  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
						<input type="text" name="title" placeholder="标题"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
					</div>
					<div class="data">
						<label>作者</label>
						<input type="text" name="author" placeholder="作者" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
">
					</div>
					<div class="data">
						<label>简介</label>
						<textarea cols="121" rows="10" name="description"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
					</div>
					<div class="data">
						<label>内容</label>
						<textarea cols="121" rows="23" name="content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
					</div>
						<button class="submit" >提交</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
