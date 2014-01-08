<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:29:54
         compiled from "./templates/mpos/dashboard/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150696304352bea822f22a89-38694653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbe1e48e3f0a1b883e2f4c86e06fb2e0e018dfb' => 
    array (
      0 => './templates/mpos/dashboard/round_shares.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150696304352bea822f22a89-38694653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea8230283c7_30486134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea8230283c7_30486134')) {function content_52bea8230283c7_30486134($_smarty_tpl) {?>         <tr>
           <td colspan="2"><b><u>Round Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
         </tr>
         <tr>
           <td><b>Est. Shares</b></td>
           <td id="b-target" class="right"><?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['shares'];?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
         </tr>
         <tr>
           <td><b>Pool Valid</b></td>
           <td id="b-pvalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid'];?>
</td>
         </tr>
         <tr>
           <td><b>Your Valid<b></td>
           <td id="b-yvalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'];?>
</td>
         </tr>
         <tr>
           <td><b>Pool Invalid</b></td>
           <td id="b-pivalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'];?>
</td>
         </tr>
         <tr>
           <td><b>Your Invalid</b></td>
           <td id="b-yivalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'];?>
</td>
         </tr>
<?php }} ?>