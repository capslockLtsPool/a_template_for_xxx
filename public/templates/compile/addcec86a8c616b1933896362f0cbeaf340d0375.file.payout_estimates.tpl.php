<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:29:55
         compiled from "./templates/mpos/dashboard/payout_estimates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76543774752bea82302ce58-22250460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addcec86a8c616b1933896362f0cbeaf340d0375' => 
    array (
      0 => './templates/mpos/dashboard/payout_estimates.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76543774752bea82302ce58-22250460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea8230d5686_00164283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea8230d5686_00164283')) {function content_52bea8230d5686_00164283($_smarty_tpl) {?>
         <tr>
           <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Estimates</u></b></td>
         </tr>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps'){?>
         <tr>
           <td><b>Block</b></td>
           <td id="b-block" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['block'];?>
</td>
         </tr>
         <tr>
           <td><b>Fees</b></td>
           <td id="b-fee" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['fee'];?>
</td>
         </tr>
         <tr>
           <td><b>Donation</b></td>
           <td id="b-donation" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['donation'];?>
</td>
         </tr>
         <tr>
           <td><b>Payout</b></td>
           <td id="b-payout" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'];?>
</td>
         </tr>
<?php }else{ ?>
        <tr>
          <td><b>in 1 hour</b></td>
          <td id="b-est1hour" align="left"><?php echo round($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours1'],"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 24 hours</b></td>
          <td id="b-est24hours" align="left"><?php echo round(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours24']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 7 days</b></td>
          <td id="b-est7days" align="left"><?php echo round(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days7']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 14 days</b></td>
          <td id="b-est14days" align="left"><?php echo round(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days14']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 30 days</b></td>
          <td id="b-est30days" align="left"><?php echo round(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days30']),"8");?>
</td>
        </tr>
<?php }?>
<?php }} ?>