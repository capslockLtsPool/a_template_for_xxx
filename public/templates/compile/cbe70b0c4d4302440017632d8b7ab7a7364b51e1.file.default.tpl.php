<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:44:14
         compiled from "./templates/mpos/account/qrcode/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7293574152beab7e05cf73-12859274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe70b0c4d4302440017632d8b7ab7a7364b51e1' => 
    array (
      0 => './templates/mpos/account/qrcode/default.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7293574152beab7e05cf73-12859274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52beab7e0dde44_71560398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beab7e0dde44_71560398')) {function content_52beab7e0dde44_71560398($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.qrcode.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#qrcodeholder').qrcode({
      text    : "|http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? "0" : $tmp)=='1'){?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['PHP_SELF'];?>
?page=api|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
|",
      render    : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
      background : "#ffffff",
      foreground : "#000000",
      width : 250,
      height: 250 
    });
  });
  
</script>
<article class="module width_quarter">
  <header><h3>API String</h3></header>
  <div class="module_content">
    <p>This code will allow you to import the full API string into your mobile application.</p>
    <div id="qrcodeholder"></div>
  </div>
</article>
<?php }?>
<?php }} ?>