<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:47:02
         compiled from "./templates/mpos/statistics/blockfinder/finder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202935015252beac26dcec60-61335432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840e9775992b5980474e609f0710bc713340bde6' => 
    array (
      0 => './templates/mpos/statistics/blockfinder/finder.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202935015252beac26dcec60-61335432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52beac26e4bad7_89324266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beac26e4bad7_89324266')) {function content_52beac26e4bad7_89324266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ALIGN'=>"right",'SHORT'=>true), 0);?>

<?php }?><?php }} ?>