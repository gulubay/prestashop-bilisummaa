<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 13:20:59
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10055888755b06f47b629678-02318419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e7e6a11b480baf0cde782f566b36a60d48575c' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1521482236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10055888755b06f47b629678-02318419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06f47b64e243_29012650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06f47b64e243_29012650')) {function content_5b06f47b64e243_29012650($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
