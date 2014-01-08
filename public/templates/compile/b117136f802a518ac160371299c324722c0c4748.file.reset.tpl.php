<?php /* Smarty version Smarty-3.1.13, created on 2014-01-02 18:22:57
         compiled from "templates/mail/password/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123937412152c53e015ae467-56447695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b117136f802a518ac160371299c324722c0c4748' => 
    array (
      0 => 'templates/mail/password/reset.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123937412152c53e015ae467-56447695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c53e0165fc74_50787165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c53e0165fc74_50787165')) {function content_52c53e0165fc74_50787165($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a password reset through our online form. In order to complete the request please follow this link:</p>
<p>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['PHP_SELF'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p>You will be asked to change your password. You can then use this new password to login to your account.</p>
<p>Cheers,</p>
<p>Website Administration</p>
</body>
</html>
<?php }} ?>