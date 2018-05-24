<?php /* Smarty version Smarty-3.1.19, created on 2018-05-13 21:52:14
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/controllers/currencies/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19662436345af8ebce54cc13-26018458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89faae743192e8f0dd86add8ff826916297b26c4' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/controllers/currencies/content.tpl',
      1 => 1521482235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19662436345af8ebce54cc13-26018458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'isForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af8ebce5787d9_53116456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af8ebce5787d9_53116456')) {function content_5af8ebce5787d9_53116456($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div>
<?php }} ?>
