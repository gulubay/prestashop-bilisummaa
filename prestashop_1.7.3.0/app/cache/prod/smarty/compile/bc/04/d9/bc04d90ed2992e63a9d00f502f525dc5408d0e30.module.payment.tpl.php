<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 02:05:41
         compiled from "module:stripe_official/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20565818125b06563510f880-00520885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc04d90ed2992e63a9d00f502f525dc5408d0e30' => 
    array (
      0 => 'module:stripe_official/views/templates/hook/payment.tpl',
      1 => 1522465950,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20565818125b06563510f880-00520885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SSL' => 0,
    'module_dir' => 0,
    'publishableKey' => 0,
    'customer_name' => 0,
    'stripe_mode' => 0,
    'currency_stripe' => 0,
    'amount_ttl' => 0,
    'secure_mode' => 0,
    'baseDir' => 0,
    'billing_address' => 0,
    'ajaxUrlStripe' => 0,
    'stripeLanguageIso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0656352258d9_10541026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0656352258d9_10541026')) {function content_5b0656352258d9_10541026($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['SSL']->value) {?>
<div class="row stripe-payment">
  <div class="col-xs-12">
    <div class="payment_module" style="border: 1px solid #d6d4d4; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding-left: 15px; padding-right: 15px; background: #fbfbfb;">
      <input type="hidden" id="stripe-incorrect_number" value="<?php echo smartyTranslate(array('s'=>'The card number is incorrect.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-invalid_number" value="<?php echo smartyTranslate(array('s'=>'The card number is not a valid credit card number.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-invalid_expiry_month" value="<?php echo smartyTranslate(array('s'=>'The card\'s expiration month is invalid.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-invalid_expiry_year" value="<?php echo smartyTranslate(array('s'=>'The card\'s expiration year is invalid.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-invalid_cvc" value="<?php echo smartyTranslate(array('s'=>'The card\'s security code is invalid.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-expired_card" value="<?php echo smartyTranslate(array('s'=>'The card has expired.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-incorrect_cvc" value="<?php echo smartyTranslate(array('s'=>'The card\'s security code is incorrect.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-incorrect_zip" value="<?php echo smartyTranslate(array('s'=>'The card\'s zip code failed validation.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-card_declined" value="<?php echo smartyTranslate(array('s'=>'The card was declined.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-missing" value="<?php echo smartyTranslate(array('s'=>'There is no card on a customer that is being charged.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-processing_error" value="<?php echo smartyTranslate(array('s'=>'An error occurred while processing the car.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-rate_limit" value="<?php echo smartyTranslate(array('s'=>'An error occurred due to requests hitting the API too quickly. Please let us know if you\'re consistently running into this error.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-3d_declined" value="<?php echo smartyTranslate(array('s'=>'The card doesn\'t support 3DS.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <input type="hidden" id="stripe-no_api_key" value="<?php echo smartyTranslate(array('s'=>'There\'s an error with your API keys. If you\'re the administrator of this website, please go on the "Connection" tab of your plugin.','mod'=>'stripe_official'),$_smarty_tpl);?>
">
      <div id="stripe-ajax-loader"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/ajax-loader.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'Transaction in progress, please wait.','mod'=>'stripe_official'),$_smarty_tpl);?>
</div>
      <form id="stripe-payment-form" action="#">

        <h3 class="stripe_title"><?php echo smartyTranslate(array('s'=>'Pay by card','mod'=>'stripe_official'),$_smarty_tpl);?>
</h3>


        <div class="stripe-payment-errors"><?php if (isset($_GET['stripe_error'])) {?><?php echo htmlspecialchars($_GET['stripe_error'], ENT_QUOTES, 'UTF-8');?>
<?php }?></div>

        <!-- Used to display Element errors -->
        <div id="card-errors" role="alert"></div>


        <input type="hidden" id="stripe-publishable-key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['publishableKey']->value, ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="form-row">
          <label for="card-element">
            <?php echo smartyTranslate(array('s'=>'Cardholder\'s Name','mod'=>'stripe_official'),$_smarty_tpl);?>

          </label><label class="required"> </label>
          <input name="cardholder-name" type="text"  autocomplete="off" class="stripe-name" data-stripe="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer_name']->value, ENT_QUOTES, 'UTF-8');?>
"/>
          <label for="card-element">
            <?php echo smartyTranslate(array('s'=>'Card Number','mod'=>'stripe_official'),$_smarty_tpl);?>

          </label><label class="required"> </label>
          <div id="cardNumber-element">
            <!-- a Stripe Element will be inserted here. -->
          </div>
          <div class="block-left stripe-card-expiry">
            <label for="card-element">
              <?php echo smartyTranslate(array('s'=>'Expiry date','mod'=>'stripe_official'),$_smarty_tpl);?>

            </label><label class="required"> </label>
            <div id="cardExpiry-element">
              <!-- a Stripe Element will be inserted here. -->
            </div>
          </div>
          <div class="stripe-card-cvc">
            <label for="card-element">
              <?php echo smartyTranslate(array('s'=>'CVC/CVV','mod'=>'stripe_official'),$_smarty_tpl);?>

            </label><label class="required"> </label>
            <div id="cardCvc-element">
              <!-- a Stripe Element will be inserted here. -->
            </div>
          </div>

        </div>


        <div class="clear"></div>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/verified_by_visa.png"/>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/mastercard_securecode.png"/>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/powered_by_stripe.png"/>
      </form>
    </div>
  </div>
</div>
<div id="modal_stripe"  class="modal" style="display: none">
  <div id="result_3d"> </div></div>
<script type="text/javascript">
  var mode = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_mode']->value, ENT_QUOTES, 'UTF-8');?>
;
  var currency_stripe = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_stripe']->value, ENT_QUOTES, 'UTF-8');?>
";
  var amount_ttl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount_ttl']->value, ENT_QUOTES, 'UTF-8');?>
;
  var secure_mode = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_mode']->value, ENT_QUOTES, 'UTF-8');?>
;
  var baseDir = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['baseDir']->value, ENT_QUOTES, 'UTF-8');?>
";
  var billing_address = <?php echo $_smarty_tpl->tpl_vars['billing_address']->value;?>
;
  var module_dir = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
";
  var ajaxUrlStripe = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxUrlStripe']->value, ENT_QUOTES, 'UTF-8');?>
";
  var StripePubKey = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['publishableKey']->value, ENT_QUOTES, 'UTF-8');?>
";
  var stripeLanguageIso = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripeLanguageIso']->value, ENT_QUOTES, 'UTF-8');?>
";
</script>
<?php } else { ?>
<div class="row stripe-payment">
  <div class="col-xs-12">
    <div class="payment_module" style="border: 1px solid #d6d4d4; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding-left: 15px; padding-right: 15px; background: #fbfbfb;">
      <p class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'SSL is off, please activate it.','mod'=>'stripe_official'),$_smarty_tpl);?>
</p>
    </div>
  </div>
</div>
<?php }?><?php }} ?>
