<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 20:56:31
         compiled from "./templates/mpos/password/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149223745852c16d7f1a1097-38612376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf26e4dbf879e2ef88a185a1cccf2fbcec2e0039' => 
    array (
      0 => './templates/mpos/password/default.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149223745852c16d7f1a1097-38612376',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c16d7f21ccc5_20579661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c16d7f21ccc5_20579661')) {function content_52c16d7f21ccc5_20579661($_smarty_tpl) {?><article class="module width_half">
  <form action="" method="POST">
    <input type="hidden" name="page" value="password">
    <input type="hidden" name="action" value="reset">
    <header><h3>Password reset</h3></header>
    <div class="module_content">
      <p>If you have an email set for your account, enter your username to get your password reset</p>
      <fieldset>
        <label>Username or E-Mail</label>
        <input type="text" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="22" maxlength="20" required>
      </fieldset>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Reset" class="alt_btn">
      </div>
    </footer>
  </form>
</article>
<?php }} ?>