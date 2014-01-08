<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:44:07
         compiled from "./templates/mpos/statistics/round/block_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139337488652beab77de7c62-23704239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be498a4e3a52e3a225c36e3b036c6051ac78758e' => 
    array (
      0 => './templates/mpos/statistics/round/block_stats.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139337488652beab77de7c62-23704239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKDETAILS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52beab77eedc83_09838982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beab77eedc83_09838982')) {function content_52beab77eedc83_09838982($_smarty_tpl) {?><article class="module width_full">
  <header><h3>Block Statistics</h3></header>
  <table class="tablesorter">
    <tbody>
      <tr>
        <td align="left">
          <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&prev=1"><i class="icon-left-open"></i></a>
        </td>
        <td colspan="7" align="right">
          <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&next=1"><i class="icon-right-open"></i></a>
        </td>
      </tr>
      <tr class="odd">
        <td>ID</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['id'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Height</td>
	<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']){?>
      	<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['blockhash'];?>
" target="_new"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
	<?php }else{ ?>
      	<td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
	<?php }?>
        <td>Amount</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['amount']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Confirmations</td>
        <td><?php if ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']){?>
          <font color="green">Confirmed</font>
        <?php }elseif($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==-1){?>
          <font color="red">Orphan</font>
        <?php }elseif($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==0){?>0
        <?php }else{ ?><?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']))===null||$tmp==='' ? "0" : $tmp);?>
 left<?php }?></td>
      </tr>
      <tr class="even">
        <td>Difficulty</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['difficulty'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Time</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['time'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Shares</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Finder</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['finder'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
      </tr>
    </tbody>
  </table>
  <footer>
    <div class="submit_link">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST" id='search'>
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="text" class="pin" name="search" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['height'])===null||$tmp==='' ? "%" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="submit" value="Search" class="alt_btn">
      </form>
    </div>
  </footer>
</article>
<?php }} ?>