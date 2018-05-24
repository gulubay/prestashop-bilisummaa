<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:01
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1211748835b070599988767-98276070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aec6bb57ece53500215782180d689308abb8dfa' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/configuration.tpl',
      1 => 1522465950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1211748835b070599988767-98276070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ideal' => 0,
    'bancontact' => 0,
    'sofort' => 0,
    'giropay' => 0,
    'url_webhhoks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b070599a40cb9_19081615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b070599a40cb9_19081615')) {function content_5b070599a40cb9_19081615($_smarty_tpl) {?>

<div id="conf-payment-methods">
	<p><b><?php echo smartyTranslate(array('s'=>'Testing Stripe','mod'=>'stripe_official'),$_smarty_tpl);?>
</b></p>
	<ul>
		<li><?php echo smartyTranslate(array('s'=>'Toggle the button above to Test Mode.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
		<li><?php echo smartyTranslate(array('s'=>'To perform test payments, you can use test card numbers available in our','mod'=>'stripe_official'),$_smarty_tpl);?>

		<a target="_blank" href="http://www.stripe.com/docs/testing"><?php echo smartyTranslate(array('s'=>'documentation.','mod'=>'stripe_official'),$_smarty_tpl);?>
</a></li>
		<li><?php echo smartyTranslate(array('s'=>'In Test Mode, you can not run live charges.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
	</ul>
	<p><b><?php echo smartyTranslate(array('s'=>'Using Stripe Live','mod'=>'stripe_official'),$_smarty_tpl);?>
</b></p>
	<ul>
		<li><?php echo smartyTranslate(array('s'=>'Toggle the button above to Live Mode.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
		<li><?php echo smartyTranslate(array('s'=>'In Live Mode, you can not run test charges.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
	</ul>

	<p><b><?php echo smartyTranslate(array('s'=>'Additional payment methods (For users in Europe only): iDEAL, Bancontact, SOFORT and Giropay.','mod'=>'stripe_official'),$_smarty_tpl);?>
</b></p>
	<p><?php echo smartyTranslate(array('s'=>'These payment methods are available within this plugin for our European users only. To activate them, follow these','mod'=>'stripe_official'),$_smarty_tpl);?>

	<b> <?php echo smartyTranslate(array('s'=>'three steps:','mod'=>'stripe_official'),$_smarty_tpl);?>
</b></p>
	<ol item="1">
		<li>
			<?php echo smartyTranslate(array('s'=>'Select below each payment method you wish to offer on your website :','mod'=>'stripe_official'),$_smarty_tpl);?>

			<br><br>
			<div class="form-group">
				<input type="checkbox" id="ideal" name="ideal" <?php if ($_smarty_tpl->tpl_vars['ideal']->value) {?>checked="checked"<?php }?>/>
				<label><?php echo smartyTranslate(array('s'=>'Activate iDEAL (if you have Dutch customers)','mod'=>'stripe_official'),$_smarty_tpl);?>
</label><br>
				<input type="checkbox" id="bancontact" name="bancontact" <?php if ($_smarty_tpl->tpl_vars['bancontact']->value) {?>checked="checked"<?php }?>/>
				<label><?php echo smartyTranslate(array('s'=>'Activate Bancontact (if you have Belgian customers)','mod'=>'stripe_official'),$_smarty_tpl);?>
</label><br>
				<input type="checkbox" id="sofort" name="sofort" <?php if ($_smarty_tpl->tpl_vars['sofort']->value) {?>checked="checked"<?php }?>/>
				<label><?php echo smartyTranslate(array('s'=>'Activate SOFORT (if you have German, Austrian or Swiss customers)','mod'=>'stripe_official'),$_smarty_tpl);?>
</label><br>
				<input type="checkbox" id="giropay" name="giropay" <?php if ($_smarty_tpl->tpl_vars['giropay']->value) {?>checked="checked"<?php }?>/>
				<label><?php echo smartyTranslate(array('s'=>'Activate Giropay (if you have German, Austrian or Swiss customers)','mod'=>'stripe_official'),$_smarty_tpl);?>
</label>
			</div>

		</li>
		<li>
			<?php echo smartyTranslate(array('s'=>'To track correctly charges performed with these payment methods, you’ll need to add a “webhook”. A webhook is a way to be notified when an event (such as a successful payment) happens on your website.','mod'=>'stripe_official'),$_smarty_tpl);?>

			<br><br>
			<ul>
				<li><?php echo smartyTranslate(array('s'=>'Go on the webhook page of your Stripe dashboard:','mod'=>'stripe_official'),$_smarty_tpl);?>

					<a target="_blank" href="https://dashboard.stripe.com/account/webhooks">https://dashboard.stripe.com/account/webhooks</a>
				</li>
				<li><?php echo smartyTranslate(array('s'=>'Click on "Add Endpoint" and copy/paste this URL in the "URL to be called" field:','mod'=>'stripe_official'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['url_webhhoks']->value;?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Set the "Events to send" radion button to "Live events"','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Set the "Filter event" radio button to "Send all event types"','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Click on "Add endpoint"','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					<img class="img-example1" src="/modules/stripe_official//views/img/example1.png">
				</li>
				<li><?php echo smartyTranslate(array('s'=>'Ultimately, your webhook dashboard page should look like this:','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					<img class="img-example2" src="/modules/stripe_official//views/img/example2.png">
				</li>
			</ul>
		</li>
		<br>
		<li><?php echo smartyTranslate(array('s'=>'Activate these payment methods on your','mod'=>'stripe_official'),$_smarty_tpl);?>

			<a target="_blank" href="https://dashboard.stripe.com/account/payments/settings"><?php echo smartyTranslate(array('s'=>'Stripe dashboard.','mod'=>'stripe_official'),$_smarty_tpl);?>
</a>
		</li>
		<p><?php echo smartyTranslate(array('s'=>'After clicking "Activate", the payment method is shown as pending with an indication of how long it might take to activate.','mod'=>'stripe_official'),$_smarty_tpl);?>

			<?php echo smartyTranslate(array('s'=>'Once you\'ve submitted this form, the payment method will move from pending to live within 10 minutes.','mod'=>'stripe_official'),$_smarty_tpl);?>
</p>
	</ol>
</div><?php }} ?>
