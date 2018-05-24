<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 14:34:04
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17758018755b07059c62fb59-04244394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbc0d0b4aeef948e627cdc69aad58b921553142' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/modules/stripe_official/views/templates/admin/faq.tpl',
      1 => 1522465950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17758018755b07059c62fb59-04244394',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07059c6d2079_00864280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07059c6d2079_00864280')) {function content_5b07059c6d2079_00864280($_smarty_tpl) {?>

<div class="clearfix"></div>
<h3><i class="icon-info-sign"></i> <?php echo smartyTranslate(array('s'=>'THANKS FOR CHOOSING STRIPE','mod'=>'stripe_official'),$_smarty_tpl);?>
</h3>
<div class="form-group">
    <br>
    <?php echo smartyTranslate(array('s'=>'If you run into any issue after having installed this plugin, please first read our below FAQ and make sure :','mod'=>'stripe_official'),$_smarty_tpl);?>

    <br>
    <ol type="1">
        <li><?php echo smartyTranslate(array('s'=>'You have entered your API keys in the “Connection” tab of the Stripe module (we recommend checking that there is no space in the field).','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
        <li><?php echo smartyTranslate(array('s'=>'You are using test cards in Test mode and live cards in Live mode.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
        <li><?php echo smartyTranslate(array('s'=>'If you’ve recently updated the module, you have refreshed your cache.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
        <li><?php echo smartyTranslate(array('s'=>'You’re not using any other plugin that could impact payments.','mod'=>'stripe_official'),$_smarty_tpl);?>
</li>
    </ol>
    <br>
    <?php echo smartyTranslate(array('s'=>'You can also check out our support website:','mod'=>'stripe_official'),$_smarty_tpl);?>

    <a href="https://support.stripe.com" target="_blank">https://support.stripe.com</a>
    <br><br>
    <?php echo smartyTranslate(array('s'=>'If you have any additional question or remaining issue related to Stripe and this plugin, please contact our support team:','mod'=>'stripe_official'),$_smarty_tpl);?>

    <a href="https://support.stripe.com/email" target="_blank">https://support.stripe.com/email</a>
</div>

<div class="clearfix"></div>
<h3><i class="icon-info-sign"></i> <?php echo smartyTranslate(array('s'=>'Frequently Asked Questions','mod'=>'stripe_official'),$_smarty_tpl);?>
</h3>
 <div class="faq items">

	  <ul id="basics" class="faq-items">
        <li class="faq-item">
            <span class="faq-trigger"><?php echo smartyTranslate(array('s'=>'What are the required elements to use the module?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
            <span class="expand pull-right">+</span>
            <div class="faq-content">
                <p>
                    <?php echo smartyTranslate(array('s'=>'To use this module and process credit card payments, you will need to have the following before going any further:','mod'=>'stripe_official'),$_smarty_tpl);?>

                </p>

                <ul>
                    <li>
                        <?php echo smartyTranslate(array('s'=>'An installed SSL certificate. In order to get it, please contact your web hosting service or a SSL certificate provider.','mod'=>'stripe_official'),$_smarty_tpl);?>

                    </li>

                    <li>
                        <?php echo smartyTranslate(array('s'=>'A PHP version >= 5.3.3 environment (Stripe prerequisite). If you have an older PHP version, please ask your hosting provider to','mod'=>'stripe_official'),$_smarty_tpl);?>

                        <?php echo smartyTranslate(array('s'=>'upgrade it to match the requirement.','mod'=>'stripe_official'),$_smarty_tpl);?>

                    </li>
                </ul>
            </div>
        </li>

        <li class="faq-item">
            <span class="faq-trigger"><?php echo smartyTranslate(array('s'=>'How can I get Stripe test secret and publishable keys for the connection tab?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
            <span class="expand pull-right">+</span>
            <div class="faq-content">
                <?php echo smartyTranslate(array('s'=>'First, you need to create and administrate a Stripe account. Then, you’ll find your API keys located in your account settings.','mod'=>'stripe_official'),$_smarty_tpl);?>

            </div>
        </li>

        <li class="faq-item">
            <span class="faq-trigger"><?php echo smartyTranslate(array('s'=>'What is Stripe pricing?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
            <span class="expand pull-right">+</span>
            <div class="faq-content">
                <p>
                    <?php echo smartyTranslate(array('s'=>'For European companies, Stripe charges (per successful transaction): ','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
                    - <?php echo smartyTranslate(array('s'=>'1.4% + €0.25/£0.20 with a European card ','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
                    - <?php echo smartyTranslate(array('s'=>'2.9% + €0.25/£0.20 with a non-European card','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
                    <?php echo smartyTranslate(array('s'=>'Stripe has no setup fees, no monthly fees, no validation fees, no refund fees, and no card storage fees. There’s no additional fee for failed charges or refunds.','mod'=>'stripe_official'),$_smarty_tpl);?>
<br>
                </p>

                <p>
                    <?php echo smartyTranslate(array('s'=>'If you’d like to learn more about our simple pricing, please check our website: ','mod'=>'stripe_official'),$_smarty_tpl);?>

                    <a href="http://stripe.com/pricing" target="_blank">http://stripe.com/pricing</a><br>
                    <?php echo smartyTranslate(array('s'=>'We offer customized pricing for larger businesses. If you accept more than €30,000 per month,','mod'=>'stripe_official'),$_smarty_tpl);?>

                    <a target="_blank" href="https://stripe.com/contact/sales"> <?php echo smartyTranslate(array('s'=>'get in touch','mod'=>'stripe_official'),$_smarty_tpl);?>
</a>
                </p>
            </div>
        </li>

        <li class="faq-item">
            <span class="faq-trigger"><?php echo smartyTranslate(array('s'=>'What is the difference between Test and Live Mode?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
            <span class="expand pull-right">+</span>
            <div class="faq-content">
                <p>
                    <?php echo smartyTranslate(array('s'=>'Every account is divided into two universes: one for testing, and one for running on your live website.','mod'=>'stripe_official'),$_smarty_tpl);?>

                </p>

                <p>
                    <?php echo smartyTranslate(array('s'=>'In test mode, credit card transactions don\'t go through the actual credit card network — instead, they go through simple checks in','mod'=>'stripe_official'),$_smarty_tpl);?>

                    <?php echo smartyTranslate(array('s'=>'Stripe to validate that they look like they might be credit cards.','mod'=>'stripe_official'),$_smarty_tpl);?>

                </p>

                <p>
                    <?php echo smartyTranslate(array('s'=>'In order to activate Live mode, you only need to click No in “Test mode” configuration.','mod'=>'stripe_official'),$_smarty_tpl);?>

                </p>
            </div>
        </li>

        <li class="faq-item">
            <span class="faq-trigger"><?php echo smartyTranslate(array('s'=>'How can I make test payments using Stripe payment gateway on my store?','mod'=>'stripe_official'),$_smarty_tpl);?>
</span>
            <span class="expand pull-right">+</span>
            <div class="faq-content">
                <p>
                    <?php echo smartyTranslate(array('s'=>'When the module is in test mode, you are able to click any of the credit card buttons (VISA, MasterCard, etc. logos) on the','mod'=>'stripe_official'),$_smarty_tpl);?>

                    <?php echo smartyTranslate(array('s'=>'payment page to generate a sample credit card number for testing purposes.','mod'=>'stripe_official'),$_smarty_tpl);?>

                </p>
            </div>
        </li>


	  </ul>
</div>
<?php }} ?>
