<?php /* Smarty version Smarty-3.1.13, created on 2013-12-30 18:04:05
         compiled from "./templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48556284552bea781a35413-94889297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4ecc0570d36f5d354d7eac0b75cf13124eccf4' => 
    array (
      0 => './templates/mpos/global/userinfo.tpl',
      1 => 1388397844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48556284552bea781a35413-94889297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea781a56234_13858349',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea781a56234_13858349')) {function content_52bea781a56234_13858349($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)){?>
            <p>欢迎(Welcome) <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php }else{ ?>
            <p>欢迎 游客(Welcome)</p>
<?php }?>
    </div>
<?php }} ?>