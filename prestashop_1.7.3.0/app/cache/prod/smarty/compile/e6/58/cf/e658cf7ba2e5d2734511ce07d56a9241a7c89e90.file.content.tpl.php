<?php /* Smarty version Smarty-3.1.19, created on 2018-05-13 21:46:29
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20826286095af8ea75db9292-73630489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e658cf7ba2e5d2734511ce07d56a9241a7c89e90' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/controllers/localization/content.tpl',
      1 => 1521482236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20826286095af8ea75db9292-73630489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af8ea75ddfde5_18136223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af8ea75ddfde5_18136223')) {function content_5af8ea75ddfde5_18136223($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
