<?php /* Smarty version Smarty-3.1.13, created on 2013-12-31 01:29:52
         compiled from "./templates/mpos/statistics/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188046161052c1ad9089caa6-91567329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c1c9c4291b1de76030d8e760e696abdaa7ae9f2' => 
    array (
      0 => './templates/mpos/statistics/default.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188046161052c1ad9089caa6-91567329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'DIFFICULTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c1ad90927ca5_73387176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c1ad90927ca5_73387176')) {function content_52c1ad90927ca5_73387176($_smarty_tpl) {?><article class="module width_full">
  <header><h3>General Statistics</h3></header>
  <div class="module_content">
    <table class="" width="50%" style="font-size:14px;">
      <tbody>
        <tr>
          <td class="leftheader">Pool Hash Rate</td>
          <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
        </tr>
        <tr>
          <td class="leftheader">Current Total Miners</td>
          <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
        </tr>
        <tr>
          <td class="leftheader">Current Block</td>
          <td><a href="http://explorer.litecoin.net/search?q=<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
</a></td>
        </tr>
        <tr>
          <td class="leftheader">Current Difficulty</td>
          <td><a href="http://allchains.info/" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <footer>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']){?><ul><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=public" target="_api">HERE</a></li><?php }?>
  </footer>
</article>
<?php }} ?>