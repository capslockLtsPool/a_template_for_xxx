<?php /* Smarty version Smarty-3.1.13, created on 2013-12-31 17:14:28
         compiled from "./templates/mpos/account/edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165415980052beac1fa0e5b0-95094712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb39eca0ba6dd04012cc9d7657a3529e5a0ceae' => 
    array (
      0 => './templates/mpos/account/edit/default.tpl',
      1 => 1388481241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165415980052beac1fa0e5b0-95094712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52beac1fc439c8_29048624',
  'variables' => 
  array (
    'GLOBAL' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beac1fc439c8_29048624')) {function content_52beac1fc439c8_29048624($_smarty_tpl) {?><form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updateAccount">
  <article class="module width_half">
    <header><h3>账户信息(Account Details)</h3></header>
    <div class="module_content">
      <fieldset>
        <label>用户名(Username)</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
" readonly />
      </fieldset>
      <fieldset>
        <label>用户序列号(User Id)</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
" readonly />
      </fieldset>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']){?>
      <fieldset>
        <label>API Key</label>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=getuserstatus&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
</a>
      </fieldset>
      <?php }?>
      <fieldset>
        <label>电子邮件(E-Mail)</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['email'], ENT_QUOTES, 'UTF-8', true);?>
" size="20" />
      </fieldset>
      <fieldset>
        <label>付款地址(Payment Address)</label>
        <input type="text" name="paymentAddress" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['paymentAddress'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="40" />
      </fieldset>
      <fieldset>
        <label>捐款(Donation Percentage)</label>
        <font size="1"> Donation amount in percent (example: 0.5)</font>
        <input type="text" name="donatePercent" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['donatePercent'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="4" />
      </fieldset>
      <fieldset>
        <label>自动提现(Automatic Payout Threshold)</label>
        <font size="1"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min'];?>
-<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
. Set to '0' for no auto payout.</font>
        <input type="text" name="payoutThreshold" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['payoutThreshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['ap_threshold'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="<?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']);?>
" maxlength="<?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']);?>
" />
      </fieldset>
      <fieldset>
        <label>隐藏身份(Anonymous Account)</label>
        Hide username on website from others. Admins can still get your user information.
        <label class="checkbox" for="is_anonymous">
        <input class="ios-switch" type="hidden" name="is_anonymous" value="0" />
        <input class="ios-switch" type="checkbox" name="is_anonymous" value="1" id="is_anonymous" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_anonymous']){?>checked<?php }?> />
        <div class="switch"></div>
        </label>
      </fieldset>
      <fieldset>
        <label>4位数密保(4 digit PIN)</label>
        <font size="1">The 4 digit PIN you chose when registering</font>
        <input type="password" name="authPin" size="4" maxlength="4">
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Update Account" class="alt_btn">
      </div>
    </footer>
  </article>
</form>

<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['disable_payouts']){?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="cashOut">
  <article class="module width_half">
    <header>
      <h3>提现(Cash Out)</h3>
    </header>
    <div class="module_content">
      <p style="padding-left:30px; padding-redight:30px; font-size:10px;">
        Please note: a <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 transaction will apply when processing "On-Demand" manual payments
      </p>
      <fieldset>
        <label>账户已确认余额(Account Balance)</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 readonly/>
      </fieldset>
      <fieldset>
        <label>付款地址(Payout to)</label>
        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
" readonly/>
      </fieldset>
      <fieldset>
        <label>4位数密保(4 digit PIN)</label>
        <input type="password" name="authPin" size="4" maxlength="4" />
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Cash Out" class="alt_btn">
      </div>
    </footer>
  </article>
</form>
<?php }?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post"><input type="hidden" name="act" value="updatePassword">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updatePassword">
  <article class="module width_half">
    <header>
      <h3>修改密码(Change Password)</h3>
    </header>
    <div class="module_content">
      <p style="padding-left:30px; padding-redight:30px; font-size:10px;">
      Note: You will be redirected to login on successful completion of a password change
      </p>
      <fieldset>
        <label>旧密码(Current Password)</label>
        <input type="password" name="currentPassword" />
      </fieldset>
      <fieldset>
        <label>新密码(New Password)</label>
        <input type="password" name="newPassword" />
      </fieldset>
      <fieldset>
        <label>再次输入(New Password Repeat)</label>
        <input type="password" name="newPassword2" />
      </fieldset>
      <fieldset>
        <label>4位数密保(4 digit PIN)</label>
        <input type="password" name="authPin" size="4" maxlength="4" />
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Change Password" class="alt_btn">
      </div>
    </footer>
  </article>
</form>
<?php }} ?>