<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 13:00:11
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19942971485b02fb1b2a2656-22529064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0108a5f5afde82c2c85f31864edb93d819b53ba3' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/cart-detailed-actions.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19942971485b02fb1b2a2656-22529064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02fb1b2e6503_66633516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02fb1b2e6503_66633516')) {function content_5b02fb1b2e6503_66633516($_smarty_tpl) {?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?action=show&checkout" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

      </div>
    <?php }?>
  </div>

<?php }} ?>
