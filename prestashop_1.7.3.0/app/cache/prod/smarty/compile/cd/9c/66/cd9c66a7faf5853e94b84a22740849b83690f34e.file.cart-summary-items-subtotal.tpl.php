<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 13:00:11
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4229131985b02fb1b233fb1-47150466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9c66a7faf5853e94b84a22740849b83690f34e' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4229131985b02fb1b233fb1-47150466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02fb1b24bd79_16187352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02fb1b24bd79_16187352')) {function content_5b02fb1b24bd79_16187352($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
