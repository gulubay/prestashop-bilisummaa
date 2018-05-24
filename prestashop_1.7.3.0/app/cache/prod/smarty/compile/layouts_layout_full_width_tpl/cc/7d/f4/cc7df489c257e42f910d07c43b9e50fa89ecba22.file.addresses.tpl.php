<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12519747845b02f0b39d2dd5-13386309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7df489c257e42f910d07c43b9e50fa89ecba22' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/addresses.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    '4bff741fdd378a00c42ecba7264467a714c2a139' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/page.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    'ae40444e180e57ecc9f2661ac6c9404d9b75a871' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/page.tpl',
      1 => 1522520271,
      2 => 'file',
    ),
    '4654cb54f83d92203bfa4e2afa17875df09e1da7' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/layouts/layout-full-width.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    '4a4fd8e835ccbac4bfbb4133cbb3c63c3cf083b1' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/layouts/layout-both-columns.tpl',
      1 => 1522520688,
      2 => 'file',
    ),
    '9ee1b3a2759c21438507acb250dd23ab4dee09f6' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/stylesheets.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    '078ccda2b92cb185b1e429559ca98f42016b2475' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/javascript.tpl',
      1 => 1524751424,
      2 => 'file',
    ),
    'c47ecb323caf11a86c4d2b6060052c416bd40aea' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/head.tpl',
      1 => 1525938497,
      2 => 'file',
    ),
    '4beba0eed3a783a57f9c3c28c9e38f723dcc6931' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/catalog/_partials/product-activation.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    '3a380719f18e563d051703450a3bf10a90560f49' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/header.tpl',
      1 => 1525938256,
      2 => 'file',
    ),
    'eb881bc8d3c0a763c62b1541e7a0f7a3e1451708' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/notifications.tpl',
      1 => 1524762118,
      2 => 'file',
    ),
    '84bafc63493fde5b5fe6ce21958b8643e372be22' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/breadcrumb.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    'f922280d9a512af0a744375f571a25bdf9a239a7' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/_partials/block-address.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    'fa33d390c7d409bfd445f037c4e5f9bca786da36' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/_partials/my-account-links.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
    '33885199863a7d4b298801798b3f1a169aa45da1' => 
    array (
      0 => '/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/footer.tpl',
      1 => 1521497310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12519747845b02f0b39d2dd5-13386309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02f0b4118b84_49498725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02f0b4118b84_49498725')) {function content_5b02f0b4118b84_49498725($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3ae8767_93093613($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3c3bc29_42764093($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3c5a7e0_39740179($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>

      

      <section id="wrapper">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

        <div class="container">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3d31399_78425558($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Your addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
  <section id="content" class="page-content">
    
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3c8b686_82171397($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
    
    
  <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customer']->value['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
    
      <?php /*  Call merged included template "customer/_partials/block-address.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/block-address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('address'=>$_smarty_tpl->tpl_vars['address']->value), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3e115d3_74606039($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/block-address.tpl" */?>
    
    </div>
  <?php } ?>
  <div class="clearfix"></div>
  <div class="addresses-footer">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address">
      <i class="material-icons">&#xE145;</i>
      <span><?php echo smartyTranslate(array('s'=>'Create new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
    </a>
  </div>

  </section>


    
      <footer class="page-footer">
        
  
    <?php /*  Call merged included template "customer/_partials/my-account-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3e9d3b3_48631583($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/my-account-links.tpl" */?>
  

      </footer>
    

  </section>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
        </div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b40be645_32285592($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3bb0070_94311871($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3ae8767_93093613')) {function content_5b02f0b3ae8767_93093613($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3b68c40_00217921($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



<script src="themes/bilisummaa/assets/js/instafeed.min.js"></script>
  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '12519747845b02f0b39d2dd5-13386309');
content_5b02f0b3bb0070_94311871($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
 



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>





<div id="overlay-search"></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3b68c40_00217921')) {function content_5b02f0b3b68c40_00217921($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3bb0070_94311871')) {function content_5b02f0b3bb0070_94311871($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
<!--   <script src="js/instafeed.min.js"></script>-->
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3c3bc29_42764093')) {function content_5b02f0b3c3bc29_42764093($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3c5a7e0_39740179')) {function content_5b02f0b3c5a7e0_39740179($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>






  <div class="header-top">
    <div class="container-fluid">
       <div class="row header-top-nav">
        <div class="hidden-md-up text-sm-center mobile">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons d-inline">&#xE5D2;</i>
            </div> 
            </div>
        <div class="col-md-1" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
  

        <div class="col-md-11 col-sm-5 position-static nav-options-mobile">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">

          <!-- <div id="_mobile_currency_selector"></div> -->
<!--          <div id="_mobile_language_selector"></div>-->

            <div id="_mobile_user_info"></div>
<!--            <i class="material-icons">&#xE7FF; SIGN IN</i>-->
          <!-- <div id="_desktop_contact_link"></div> -->
        </div>
      </div>
    </div>
  </div>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3c8b686_82171397')) {function content_5b02f0b3c8b686_82171397($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications" class="backgroundColor">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3d31399_78425558')) {function content_5b02f0b3d31399_78425558($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/_partials/block-address.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3e115d3_74606039')) {function content_5b02f0b3e115d3_74606039($_smarty_tpl) {?>

  <article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="address-body">
      <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</h4>
      <address><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</address>
    </div>

    
      <div class="address-footer">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl);?>
" data-link-action="edit-address">
          <i class="material-icons">&#xE254;</i>
          <span><?php echo smartyTranslate(array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl);?>
" data-link-action="delete-address">
          <i class="material-icons">&#xE872;</i>
          <span><?php echo smartyTranslate(array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
      </div>
    
  </article>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:47
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/customer/_partials/my-account-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b3e9d3b3_48631583')) {function content_5b02f0b3e9d3b3_48631583($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 12:15:48
         compiled from "/Users/MurBe/Downloads/prestashop_1.7.3.0/themes/bilisummaa/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02f0b40be645_32285592')) {function content_5b02f0b40be645_32285592($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
