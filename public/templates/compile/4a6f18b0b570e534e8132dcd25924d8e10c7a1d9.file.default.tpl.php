<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 23:27:21
         compiled from "./templates/mobile/login/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32964790952c190d9214a32-93751514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6f18b0b570e534e8132dcd25924d8e10c7a1d9' => 
    array (
      0 => './templates/mobile/login/default.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32964790952c190d9214a32-93751514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c190d92c88a5_99390853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c190d92c88a5_99390853')) {function content_52c190d92c88a5_99390853($_smarty_tpl) {?>      <form action="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" method="post" id="loginForm" data-ajax="false">
        <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['PHP_SELF'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
        <p><input type="text" name="username" value="" id="userForm" maxlength="20"></p>
        <p><input type="password" name="password" value="" id="passForm" maxlength="20"></p>
        <center><p><input type="submit" value="Login"></p></center>
      </form>
      <center><p><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=password"><font size="1">Forgot your password?</font></a></p></center>
<?php }} ?>