<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:04
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8884525055b07059c6e4e20-73774335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b8a0ba8d19d1bb41ef342dccfbcbff467f2a04' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/main.tpl',
      1 => 1522465950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8884525055b07059c6e4e20-73774335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_contents' => 0,
    'tab_nbr' => 0,
    'content' => 0,
    'new_base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059c798d35_86228999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059c798d35_86228999')) {function content_5b07059c798d35_86228999($_smarty_tpl) {?>

<div class="tabs">
  <div class="sidebar navigation col-md-2">
	<?php if (isset($_smarty_tpl->tpl_vars['tab_contents']->value['logo'])) {?>
	  <img class="tabs-logo" src="<?php echo $_smarty_tpl->tpl_vars['tab_contents']->value['logo'];?>
"/>
	<?php }?>
	<nav class="list-group categorieList">
	  <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_nbr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_contents']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_nbr']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
		<a class="list-group-item migration-tab"
		   href="#stripe_step_<?php echo $_smarty_tpl->tpl_vars['tab_nbr']->value+intval(1);?>
">

		  <?php if (isset($_smarty_tpl->tpl_vars['content']->value['icon'])&&$_smarty_tpl->tpl_vars['content']->value['icon']!=false) {?>
			<i class="<?php echo $_smarty_tpl->tpl_vars['content']->value['icon'];?>
 pstab-icon"></i>
		  <?php }?>

		  <?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>


		  <?php if (isset($_smarty_tpl->tpl_vars['content']->value['badge'])&&$_smarty_tpl->tpl_vars['content']->value['badge']!=false) {?>
			<span class="badge-module-tabs pull-right <?php echo $_smarty_tpl->tpl_vars['content']->value['badge'];?>
"></span>
		  <?php }?>

		</a>
	  <?php } ?>
	</nav>
  </div>

  <div class="col-md-10">
	<div class="content-wrap panel">
	  <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_nbr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_contents']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_nbr']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
		<section id="section-shape-<?php echo $_smarty_tpl->tpl_vars['tab_nbr']->value+intval(1);?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value['value'];?>
</section>
		  <!--html code generated-->
	  <?php } ?>
	</div>
  </div>

</div>
<script type="text/javascript">
	var stripe_test_mode = "<?php echo smartyTranslate(array('s'=>'test','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	var live = "<?php echo smartyTranslate(array('s'=>'live','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	var conf_mode_description1 = "<?php echo smartyTranslate(array('s'=>'Now that you have created your Stripe account, you have to enter below your API keys in both test and live mode.','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	var conf_mode_description2 = "<?php echo smartyTranslate(array('s'=>'These API keys can be found and managed from your Stripe','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	var conf_mode_description3 = "<?php echo smartyTranslate(array('s'=>'dashboard','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	var Translation = [];
	Translation[0] = "<?php echo smartyTranslate(array('s'=>'3D-Secure (Verified by VISA, MasterCard SecureCode™) is a system that is used to verify a customer’s identity before an online purchase can be completed, so that merchants can reduce fraud.','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	Translation[1] = "<?php echo smartyTranslate(array('s'=>'With 3D-Secure, customers are redirected to a page provided by their bank, where they are prompted to enter an additional password before their card can be charged.','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	Translation[2] = "<?php echo smartyTranslate(array('s'=>'You can learn more about 3D-Secure on our website: ','mod'=>'stripe_official'),$_smarty_tpl);?>
";
	Translation[3] = "<?php echo smartyTranslate(array('s'=>'For payments by Visa and MasterCard, you can add an additional layer of security by enforcing 3D-Secure authentification.','mod'=>'stripe_official'),$_smarty_tpl);?>
";
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
views/js/PSTabs.js"></script>
<script type="text/javascript">
		(function() {
		[].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
			new PSTabs(el);
		});
	})();
</script><?php }} ?>
