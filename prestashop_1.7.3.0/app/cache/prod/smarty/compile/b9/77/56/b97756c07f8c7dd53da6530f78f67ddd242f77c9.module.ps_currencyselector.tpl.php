<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:30:18
         compiled from "module:ps_currencyselector/ps_currencyselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15886857645b0704ba2d9d30-05869856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselector/ps_currencyselector.tpl',
      1 => 1525909101,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15886857645b0704ba2d9d30-05869856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_currency' => 0,
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0704ba3795f1_73478137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0704ba3795f1_73478137')) {function content_5b0704ba3795f1_73478137($_smarty_tpl) {?>
<div class="nav-options">   
<div class="col-lg-6 col-md-6 mobile-col">
<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown col-lg-12">
<!--    <span id="currency-selector-label"><?php echo smartyTranslate(array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>-->
    <button data-target="#" data-toggle="dropdown" class="btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo smartyTranslate(array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
      <span class="expand-more _gray-darker mobile-font-curr"><span class="hidden-sm-down"><span class="hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span> </span>
        <img class="currency-selector-label" src="themes/bilisummaa/assets/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/>
      <i class="material-icons expand-more">&#xE5C5;</i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="currency-selector-label">
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <img class="currency-flags select-flag" style="margin-left:15px;" src="themes/bilisummaa/assets/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/></a>
        </li>
      <?php } ?>
    </ul>
    <!-- 
    <select class="link hidden-md-up" aria-labelledby="currency-selector-label">
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</option>
      <?php } ?>
    </select> -->

    <!-- <button data-target="#" data-toggle="dropdown" class="hidden-md-up btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo smartyTranslate(array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
      <span class="expand-more _gray-darker"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
        <img class="currency-selector-label" src="themes/bilisummaa/assets/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/>
      <i class="material-icons expand-more">&#xE5C5;</i>
    </button>
    <ul class="dropdown-menu hidden-md-up" aria-labelledby="currency-selector-label">
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <img class="currency-flags select-flag" style="margin-left:15px;" src="themes/bilisummaa/assets/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/></a>
        </li>
      <?php } ?>
    </ul> -->
  </div>
</div>
<?php }} ?>
