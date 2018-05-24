<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:05
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16563171725b07059dd57760-86629358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e40d733b888c850ce2fcf24e591dff15618990' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/welcome/views/templates/lost.tpl',
      1 => 1521482239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16563171725b07059dd57760-86629358',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059dd74ba1_87622127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059dd74ba1_87622127')) {function content_5b07059dd74ba1_87622127($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
