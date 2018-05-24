<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:18:07
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14473884255b02f13fa36f37-87100642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf10acca372a20c507f89a8928fd13650da6c579' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/admin078qxdcoc/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1521482236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14473884255b02f13fa36f37-87100642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02f13fa68e04_40598030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02f13fa68e04_40598030')) {function content_5b02f13fa68e04_40598030($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
