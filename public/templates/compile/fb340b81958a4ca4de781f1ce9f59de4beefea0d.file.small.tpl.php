<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:27:13
         compiled from "./templates/mpos/login/small.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74301820652bea7819fd9d7-09592439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb340b81958a4ca4de781f1ce9f59de4beefea0d' => 
    array (
      0 => './templates/mpos/login/small.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74301820652bea7819fd9d7-09592439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea781a2d600_79939760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea781a2d600_79939760')) {function content_52bea781a2d600_79939760($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==0){?>
<div class="login_small">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" id="loginForm">
    <input type="hidden" name="page" value="login" />
    <input type="hidden" name="to" value="<?php echo $_SERVER['PHP_SELF'];?>
?page=dashboard" />
    <fieldset2 class="small">
      <label>Username</label>
      <input type="text" name="username" size="22" maxlength="100" required />
      <fieldset2 class="small">
        <label>Password</label>
        <input type="password" name="password" size="22" maxlength="100" required />
      </fieldset2>
    </fieldset2>
    <input type="submit" value="Login" class="alt_btn" />
  </form>
</div>
<?php }?>
<?php }} ?>