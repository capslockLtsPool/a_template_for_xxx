<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 18:42:47
         compiled from "./templates/mpos/login/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189671263352bea8ef034b45-15710946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3273bee5274e88a8ab10e873a087bafc7a2dbd32' => 
    array (
      0 => './templates/mpos/login/default.tpl',
      1 => 1388399390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189671263352bea8ef034b45-15710946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea8ef0f3ff8_51251352',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea8ef0f3ff8_51251352')) {function content_52bea8ef0f3ff8_51251352($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['PHP_SELF'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
    <header><h3>用户登陆(Login)</h3></header>
    <div class="module_content">
        <fieldset>
          <label>用户名或邮箱(User or Eml)</label>
          <input type="text" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your username or email" required />
        </fieldset>
        <fieldset>
          <label>密码(Password)</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=password"><font size="1">忘记密码?(Forgot your password?)</font></a>
        <input type="submit" value=“登陆(Login)" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>