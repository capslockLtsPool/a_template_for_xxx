<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 17:58:00
         compiled from "./templates/mpos/register/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101432722052bea80e636f66-45732661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9c57db9ca30753be8f0dad2d7c5ef4e9765204' => 
    array (
      0 => './templates/mpos/register/default.tpl',
      1 => 1388397479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101432722052bea80e636f66-45732661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea80e731ea4_62589658',
  'variables' => 
  array (
    'RECAPTCHA' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea80e731ea4_62589658')) {function content_52bea80e731ea4_62589658($_smarty_tpl) {?><article class="module width_quarter">
  <header><h3>注册新用户(Register new account)</h3></header>
  <div class="module_content">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)){?>
 §  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
    <input type="hidden" name="action" value="register">
    <fieldset>
      <label>用户名(User)</label>
      <input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>密码(Pwd)</label>
      <input type="password" class="text tiny" name="password1" value="" size="15" maxlength="20" required>
      <label>重复密码(Verify)</label>
      <input type="password" class="text tiny" name="password2" value="" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>邮箱(Email)</label>
      <input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
      <label>重复邮箱(Email Repeat)</label>
      <input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
    </fieldset>
    <fieldset>
      <label>密保(PIN)</label>  <font size="1">(4位数字：提币验证码)</font> 
      <input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><!--p value="50"><font size="1" maxlength="14"> (4位数字:提币验证码)</font></p-->
    </fieldset>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>

    <footer>
      <div class="submit_link">
        <input type="submit" value="注册(Register)" class="alt_btn">
      </div>
    </footer>
  </form>
  </div>
</article>
<?php }} ?>