<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:01
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/started.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11412300795b0705998ca493-56610737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9605c774db58507e22958aeb84e2648bff7228e6' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/started.tpl',
      1 => 1522465950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11412300795b0705998ca493-56610737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b070599977359_65316670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b070599977359_65316670')) {function content_5b070599977359_65316670($_smarty_tpl) {?>

<div class="stripe-module-wrapper">
	<div class="stripe-module-header">
	   <span class="stripe-module-intro"><?php echo smartyTranslate(array('s'=>'Improve your conversion rate and securely charge your customers with Stripe, the easiest payment platform','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
	</div>
	<div class="stripe-module-wrap">
		 <div class="stripe-module-col1 floatRight"></div>
		 <div class="stripe-module-col2">
		 	<div class="stripe-module-col1inner">
			 	- <span><a href="https://partners-subscribe.prestashop.com/stripe/connect.php?params[return_url]=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" rel="external" target="_blank"><?php echo smartyTranslate(array('s'=>'Create your Stripe account in 10 minutes','mod'=>'stripe_official'),$_smarty_tpl);?>
</a> </span>
				<?php echo smartyTranslate(array('s'=>'and immediately start accepting payments via Visa, MasterCard and American Express (no additional contract/merchant ID needed from your bank)','mod'=>'stripe_official'),$_smarty_tpl);?>
.<br>
				<div class="connect_btn">
					<a href="https://partners-subscribe.prestashop.com/stripe/connect.php?params[return_url]=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" class="stripe-connect">
						<span><?php echo smartyTranslate(array('s'=>'Connect with Stripe','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
					</a>
				</div>
				- <span><?php echo smartyTranslate(array('s'=>'Improve your conversion rate','mod'=>'stripe_official'),$_smarty_tpl);?>
 </span>
				<?php echo smartyTranslate(array('s'=>'by offering a seamless payment experience to your customers: Stripe lets you host the payment form on your own pages, without redirection to a bank third-part page.','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
				- <span><?php echo smartyTranslate(array('s'=>'Keep your fraud under control','mod'=>'stripe_official'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'thanks to customizable 3D-Secure and','mod'=>'stripe_official'),$_smarty_tpl);?>

				<a target="_blank" href="https://stripe.com/radar"><?php echo smartyTranslate(array('s'=>'Stripe Radar','mod'=>'stripe_official'),$_smarty_tpl);?>
</a><?php echo smartyTranslate(array('s'=>', our suite of anti-fraud tools.','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
				- <span><?php echo smartyTranslate(array('s'=>'Easily refund ','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
				<?php echo smartyTranslate(array('s'=>'your orders through your PrestaShop’s back-office (and automatically update your PrestaShop order status).','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
				- <?php echo smartyTranslate(array('s'=>'Start selling abroad by offering payments in ','mod'=>'stripe_official'),$_smarty_tpl);?>

				<span><?php echo smartyTranslate(array('s'=>'135+ currencies','mod'=>'stripe_official'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'and 4 local payment methods (iDEAL, Bancontact, SOFORT, Giropay).','mod'=>'stripe_official'),$_smarty_tpl);?>
<br><br>
				<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/started.png" style="width:100%;">
				<br><br>
				<p><?php echo smartyTranslate(array('s'=>'Find out more about Stripe on our website: ','mod'=>'stripe_official'),$_smarty_tpl);?>

				<a target="_blank" href="https://stripe.com/fr">www.stripe.com</a></p>
				<br>
				<p><span><?php echo smartyTranslate(array('s'=>'How much does Stripe cost?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span></p>
				<p>
					<?php echo smartyTranslate(array('s'=>'Stripe has not setup fees, no monthly fees and no storage fees.','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					<?php echo smartyTranslate(array('s'=>'There’s no additional fee for failed charges.','mod'=>'stripe_official'),$_smarty_tpl);?>
<br><br>
					<?php echo smartyTranslate(array('s'=>'For European companies, Stripe charges (per successful transaction) :','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					- <?php echo smartyTranslate(array('s'=>'1.4% + €0.25/£0.20 with a European card','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					- <?php echo smartyTranslate(array('s'=>'2.9% + €0.25/£0.20 with a non-European card','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
					<?php echo smartyTranslate(array('s'=>'For other payment methods, non-European merchants pricing and additional information, please check our website:','mod'=>'stripe_official'),$_smarty_tpl);?>
 <a target="_blank" href="https://www.stripe.com/pricing">www.stripe.com/pricing</a>.</p><br>
				<p><?php echo smartyTranslate(array('s'=>'We offer customized pricing for larger businesses. If you accept more than €30,000 per month,','mod'=>'stripe_official'),$_smarty_tpl);?>

					<a target="_blank" href="https://stripe.com/contact/sales"> <?php echo smartyTranslate(array('s'=>'get in touch','mod'=>'stripe_official'),$_smarty_tpl);?>
</a>.</p>
				<div class="connect_btn">
					<a href="https://partners-subscribe.prestashop.com/stripe/connect.php?params[return_url]=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" class="stripe-connect">
						<span><?php echo smartyTranslate(array('s'=>'Connect with Stripe','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
					</a>
				</div>
			</div>
			<!--<div class="stripe-module-col2inner">
				<h3><?php echo smartyTranslate(array('s'=>'Accept payments worldwide using all major credit cards','mod'=>'stripe_official'),$_smarty_tpl);?>
</h3>
				<p><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/stripe-cc.png" alt="stripe" class="stripe-cc" /><a href="https://stripe.com/signup" class="stripe-module-btn" target="_blank">
				<strong><?php echo smartyTranslate(array('s'=>'Create a FREE Account!','mod'=>'stripe_official'),$_smarty_tpl);?>
</strong></a></p>
			</div>-->
		</div>
	</div>
</div>
<?php }} ?>
