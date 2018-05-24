<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 13:00:11
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-summary-totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19314331875b02fb1b252e09-98141514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e93baee945b9531a853d67caf046e7a24e8238f' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19314331875b02fb1b252e09-98141514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02fb1b29ab94_28352895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02fb1b29ab94_28352895')) {function content_5b02fb1b29ab94_28352895($_smarty_tpl) {?>
<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

</div>
<?php }} ?>
