<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 01:56:45
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20590510225b06541dcccd07-39244037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087c4f2d224bc43cfe3d84d9eca485b6cb6315b0' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20590510225b06541dcccd07-39244037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06541dce0e49_00206029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06541dce0e49_00206029')) {function content_5b06541dce0e49_00206029($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
