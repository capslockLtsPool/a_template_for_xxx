<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:30:34
         compiled from "templates/mail/register/confirm_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12580582052bea84a1a18a7-52997862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a8966735cc55dd8e5dfea205e4d2da6f49c5212' => 
    array (
      0 => 'templates/mail/register/confirm_email.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12580582052bea84a1a18a7-52997862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea84a1d7dd0_26474423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea84a1d7dd0_26474423')) {function content_52bea84a1d7dd0_26474423($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have create a new account. In order to complete the registration process please follow this link:</p>
<p>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p></p>
<p>Cheers,</p>
<p>Website Administration</p>
</body>
</html>
<?php }} ?>