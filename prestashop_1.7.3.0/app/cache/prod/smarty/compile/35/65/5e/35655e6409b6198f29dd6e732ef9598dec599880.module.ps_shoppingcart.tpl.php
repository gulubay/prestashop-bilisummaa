<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:30:18
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13650102515b0704ba3c9372-41671244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1525936711,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '13650102515b0704ba3c9372-41671244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0704ba402917_22189357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0704ba402917_22189357')) {function content_5b0704ba402917_22189357($_smarty_tpl) {?>
<div id="_desktop_cart" class="col-lg-4 col-md-3">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart">shopping_cart</i>
        <span class="hidden-md-down"><?php echo smartyTranslate(array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        </a>
      <?php }?>
    </div>
  </div>
  <i class="material-icons search  shop-search-nav">search</i>
</div>

<!-- </div> -->
<?php }} ?>
