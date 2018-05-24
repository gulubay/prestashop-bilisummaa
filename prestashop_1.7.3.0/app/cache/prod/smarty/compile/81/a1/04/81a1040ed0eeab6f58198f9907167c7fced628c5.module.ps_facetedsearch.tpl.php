<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:30:18
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19756091785b0704ba51eac0-46483156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1521497310,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '19756091785b0704ba51eac0-46483156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0704ba544069_24123980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0704ba544069_24123980')) {function content_5b0704ba544069_24123980($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons rtl-no-flip">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<?php }} ?>
