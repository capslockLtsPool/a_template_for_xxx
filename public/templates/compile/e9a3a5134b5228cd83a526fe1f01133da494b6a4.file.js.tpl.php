<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:33:37
         compiled from "./templates/mpos/statistics/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52145649552bea9010df6f5-08291736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a3a5134b5228cd83a526fe1f01133da494b6a4' => 
    array (
      0 => './templates/mpos/statistics/js.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52145649552bea9010df6f5-08291736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea90110aac8_90289154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea90110aac8_90289154')) {function content_52bea90110aac8_90289154($_smarty_tpl) {?><script>

$(document).ready(function(){

  // Ajax API URL
  var url = "<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=getnavbardata";

  function refreshStaticData(data) {
     $('#b-workers').html((parseFloat(data.getnavbardata.data.pool.workers).toFixed(0)));
     $('#b-hashrate').html((parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(3)));
     $('#b-target').html(data.getnavbardata.data.pool.estimated + " (done: " + data.getnavbardata.data.pool.progress + "%)");
     $('#b-diff').html(data.getnavbardata.data.network.difficulty);
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
     }
   });
 })();
});

</script>
<?php }} ?>