<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:05
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11894142985b07059dd845e5-51800037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e13cf7934a8540649726c9dc74a131bb6c9b884' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/templates/tooltip.tpl',
      1 => 1521482239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11894142985b07059dd845e5-51800037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059dd93606_84060226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059dd93606_84060226')) {function content_5b07059dd93606_84060226($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
