<?php /* Smarty version Smarty-3.1.13, created on 2013-12-28 18:27:13
         compiled from "./templates/mpos/global/navjs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181013357152bea781ddb939-25483673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577cfe4e1aaa5fc4f404ec97203a963892c8fcad' => 
    array (
      0 => './templates/mpos/global/navjs.tpl',
      1 => 1388225756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181013357152bea781ddb939-25483673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bea781e6b4f8_70985750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bea781e6b4f8_70985750')) {function content_52bea781e6b4f8_70985750($_smarty_tpl) {?><script>

$(document).ready(function(){
  var g1, g2;

  // Ajax API URL
  var url = "<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=getnavbardata";

  // Store our data globally
  var storedHashrate=[];
  var storedWorkers=[];

  g1 = new JustGage({
    id: "mr",
    value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
).toFixed(0),
    min: 0,
    max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
 * 2),
    title: "Miners",
    gaugeColor: '#6f7a8a',
    labelFontColor: '#555',
    titleFontColor: '#555',
    valueFontColor: '#555',
    label: "Active Miners",
    relativeGaugeSize: true,
    showMinMax: true,
    shadowOpacity : 0.8,
    shadowSize : 0,
    shadowVerticalOffset : 10
  });

  g2 = new JustGage({
    id: "hr",
    value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
).toFixed(2),
    min: 0,
    max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
 * 2),
    title: "Pool Hashrate",
    gaugeColor: '#6f7a8a',
    labelFontColor: '#555',
    titleFontColor: '#555',
    valueFontColor: '#555',
    label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
",
    relativeGaugeSize: true,
    showMinMax: true,
    shadowOpacity : 0.8,
    shadowSize : 0,
    shadowVerticalOffset : 10
  });

  <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar'])===null||$tmp==='' ? "0" : $tmp)!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api'])===null||$tmp==='' ? "0" : $tmp)!=1){?>
  // Helper to refresh graphs
  function refreshInformation(data) {
    g1.refresh(parseFloat(data.getnavbardata.data.pool.workers).toFixed(0));
    g2.refresh(parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(2));
    if (storedWorkers.length > 20) { storedWorkers.shift(); }
    if (storedHashrate.length > 20) { storedHashrate.shift(); }
    timeNow = new Date().getTime();
    storedWorkers[storedWorkers.length] = [timeNow, data.getnavbardata.data.raw.pool.workers];
    storedHashrate[storedHashrate.length] = [timeNow, data.getnavbardata.data.raw.pool.hashrate];
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshInformation(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "1000" : $tmp);?>
)
      }
  });
  <?php }?>
 })();
});

</script>
<?php }} ?>