<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:04
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15736838475b07059c5435b9-14345714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f71ac4cd075708a34803e9bc96ac04a366fac6' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/transaction.tpl',
      1 => 1522465950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15736838475b07059c5435b9-14345714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refresh' => 0,
    'path' => 0,
    'id_employee' => 0,
    'token_stripe' => 0,
    'tenta' => 0,
    'v' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059c606644_48239765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059c606644_48239765')) {function content_5b07059c606644_48239765($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['refresh']->value==0) {?>
	<div class="col-lg-2" style="float:right"><a class="close refresh"><i class="process-icon-refresh" style="font-size:1em"></i></a></div>
	<script>
        var validate = "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
";
        var id_employee = "<?php echo $_smarty_tpl->tpl_vars['id_employee']->value;?>
";
        var token_stripe = "<?php echo $_smarty_tpl->tpl_vars['token_stripe']->value;?>
";
    </script>
<?php }?>
<table class="table">
	<tr>
		<th><?php echo smartyTranslate(array('s'=>'Date (last update)','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	   	<th><?php echo smartyTranslate(array('s'=>'Stripe Payment ID','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	   	<th><?php echo smartyTranslate(array('s'=>'Name','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
      <th><?php echo smartyTranslate(array('s'=>'Payment method','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	   	<th><?php echo smartyTranslate(array('s'=>'Amount Paid','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	   	<th><?php echo smartyTranslate(array('s'=>'Balance','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	   	<th><?php echo smartyTranslate(array('s'=>'Result','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Mode','mod'=>'stripe_official'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tenta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id_stripe'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
		<td><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/cc-<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
.png" alt="payment method" style="width:43px;"/></td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['refund'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['result']==2) {?>
			<td><?php echo smartyTranslate(array('s'=>'Refund','mod'=>'stripe_official'),$_smarty_tpl);?>
</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['result']==3) {?>
			<td><?php echo smartyTranslate(array('s'=>'Partial Refund','mod'=>'stripe_official'),$_smarty_tpl);?>
</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['result']==4) {?>
			<td><?php echo smartyTranslate(array('s'=>'Waiting','mod'=>'stripe_official'),$_smarty_tpl);?>
</td>
		<?php } else { ?>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/<?php echo $_smarty_tpl->tpl_vars['v']->value['result'];?>
ok.gif" alt="result" /></td>
		<?php }?>
		<td class="uppercase"><?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>
