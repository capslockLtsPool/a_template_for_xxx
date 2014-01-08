<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 20:25:34
         compiled from "./templates/mpos/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208274776052bea781b05e08-37437992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22412f73ff56d100263e8e5c0122889635e94214' => 
    array (
      0 => './templates/mpos/global/navigation.tpl',
      1 => 1388406333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208274776052bea781b05e08-37437992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea781dd3cc1_93088073',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea781dd3cc1_93088073')) {function content_52bea781dd3cc1_93088073($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['PHP_SELF'];?>
">主页(Home)</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
    <h3>账 户(Account)</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=dashboard">仪表盘(DB)</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit">修改账户(EA)</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">矿工(MW)</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=transactions">提款记录(Trans)</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']){?><!--li class="icon-megaphone"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']){?><li class="icon-plus"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=invitations">Invitations</a></li><?php }?>
      <li class="icon-barcode"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=qrcode">QR Codes</a></li-->
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1){?>
    <h3>Admin Panel</h3>
    <ul class="toggle">
      <li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=monitoring">Monitoring</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=user">User Info</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=wallet">Wallet Info</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=transactions">Transactions</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=settings">Settings</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=news">News</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=reports">Reports</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=poolworkers">Pool Workers</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=templates">Templates</a></li>
    </ul>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
    <h3>矿池状态(Statistics)</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">矿池(Pool)</a></li>
      <li class="icon-th-large"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">区块(Blocks)</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=graphs">图表(Graphs)</a></li>
      <li class="icon-record"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=round"> 记录(Round)</a></li>
      <li class="icon-search"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blockfinder">Finder</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)){?><!--li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=uptime">Uptime</a></li--><?php }?>
    </ul>
    <?php }else{ ?>
    <h3>矿池状态(Statistics)</h3>
    <ul class="toggle">
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']){?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">矿池(Pool)</a></li>
     <?php }else{ ?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics">状态(Statistics)</a>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']){?>
     <li class="icon-th-large"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">区块(Blocks)</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']){?>
     <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=round">记录(Round)</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']){?>
     <li class="icon-search"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blockfinder">Finder</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']){?>
     <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)){?><!--li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=uptime">Uptime</a></li--><?php }?>
     <?php }?>
    </ul>
    <?php }?>
    <h3>帮助(Help)</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=gettingstarted">挖矿导航(Get Started)</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['about']['disabled']){?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=pool">About</a></li>
      <?php }?>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['donors']['disabled']){?>
      <li class="icon-money"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=donors">Donors</a></li>
      <?php }?>
    </ul>
    <h3>其他(Other)</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
      <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)==1){?>
      <!--li class="icon-mail"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=contactform">Support</a></li-->
      <?php }?>
      <li class="icon-off"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=logout">退 出(Logout)</a></li>
      <?php }else{ ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=login">登 陆(Login)</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">注 册(Sign Up)</a></li>
      <!-- li class="icon-mail"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=support">Support</a></li-->
      <?php }?>
    </ul>
    <ul>
      <hr/>
    </ul>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
     <br />
    <?php }else{ ?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']){?>
    <ul>
     <center>
      <div style="display: inline-block;">
      <i><u><b><font size="2"> 实时数据</font></b></u></i>
      <div id="mr" style="width:180px; height:120px;"></div>
      <div id="hr" style="width:180px; height:120px;"></div>
      </div>
     </center>
    </ul>
      <hr/>
    <?php echo $_smarty_tpl->getSubTemplate ("global/navjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php }?>
<?php }} ?>