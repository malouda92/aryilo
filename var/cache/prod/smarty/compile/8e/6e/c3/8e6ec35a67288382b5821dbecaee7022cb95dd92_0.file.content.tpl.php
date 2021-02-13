<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 16:37:10
  from '/Applications/MAMP/htdocs/admin134qnvzr3/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6023fda6c8f5b7_44443283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6ec35a67288382b5821dbecaee7022cb95dd92' => 
    array (
      0 => '/Applications/MAMP/htdocs/admin134qnvzr3/themes/default/template/content.tpl',
      1 => 1612943222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6023fda6c8f5b7_44443283 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
