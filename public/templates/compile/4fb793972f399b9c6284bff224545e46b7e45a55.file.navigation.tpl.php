<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 22:12:40
         compiled from "./templates/mobile/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93246752c17f58ca7212-01166789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb793972f399b9c6284bff224545e46b7e45a55' => 
    array (
      0 => './templates/mobile/global/navigation.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93246752c17f58ca7212-01166789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c17f58d1f228_64702866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c17f58d1f228_64702866')) {function content_52c17f58d1f228_64702866($_smarty_tpl) {?>
        <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
        <a href="#left-sidebar" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Left Sidebar</a>
        <?php }?>
        <div data-role="navbar">
          <ul>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=dashboard" data-icon="grid" data-ajax="false">Dashboard</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers" data-icon="grid" data-ajax="false">Worker</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool" data-icon="grid" data-ajax="false">Statistics</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=logout" data-icon="gear" data-ajax="false">Logout</a></li>
            <?php }else{ ?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
" data-icon="info" data-ajax="false">News</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" data-icon="gear" data-ajax="false">Login</a></li>
            <?php }?>
          </ul>
        </div>
<?php }} ?>