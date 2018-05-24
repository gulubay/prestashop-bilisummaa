<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 13:00:11
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-voucher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5231233635b02fb1b2ec400-48262129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd56f0dd3cb3528447b2ca39993fb2275c3f2a15' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5231233635b02fb1b2ec400-48262129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'voucher' => 0,
    'urls' => 0,
    'static_token' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02fb1b3a9961_81035787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02fb1b3a9961_81035787')) {function content_5b02fb1b3a9961_81035787($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  
    <div class="block-promo">
      <div class="cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          
            <ul class="promo-name card-block">
              <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                  <div class="float-xs-right">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </li>
              <?php } ?>
            </ul>
          
        <?php }?>

        <p>
          <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
            <?php echo smartyTranslate(array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

          </a>
        </p>

        <div class="promo-code collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?> in<?php }?>" id="promo-code">
          
            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo smartyTranslate(array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
">
              <button type="submit" class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span></button>
            </form>
          

          
            <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
            </div>
          
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </p>
          <ul class="js-discount card-block promo-discounts">
          <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
            <li class="cart-summary-line">
              <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php } ?>
          </ul>
        <?php }?>
      </div>
    </div>
  
<?php }?>
<?php }} ?>
