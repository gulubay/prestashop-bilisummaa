<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:05
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510848575b07059dd34675-71267378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6d2ac4f9cca1a5220037052c374536faceed2e' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/navbar.tpl',
      1 => 1521482239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510848575b07059dd34675-71267378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059dd4c8f6_57006694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059dd4c8f6_57006694')) {function content_5b07059dd4c8f6_57006694($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
