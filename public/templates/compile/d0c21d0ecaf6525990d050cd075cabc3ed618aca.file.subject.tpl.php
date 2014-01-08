<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:30:34
         compiled from "templates/mail/subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192859300352bea84a136b87-32208962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c21d0ecaf6525990d050cd075cabc3ed618aca' => 
    array (
      0 => 'templates/mail/subject.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192859300352bea84a136b87-32208962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'SUBJECT' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea84a19ba68_40616026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea84a19ba68_40616026')) {function content_52bea84a19ba68_40616026($_smarty_tpl) {?>[ <?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 ] <?php echo $_smarty_tpl->tpl_vars['SUBJECT']->value;?>

<?php }} ?>