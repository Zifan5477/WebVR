<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 21:58:16
         compiled from "plugin\gyro\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:495358954fde5245f2-51426726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e1f22738a51af3965d404ffc307771bfbcbbad' => 
    array (
      0 => 'plugin\\gyro\\template\\edit.lbi',
      1 => 1478431616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '495358954fde5245f2-51426726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58954fde536d2',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58954fde536d2')) {function content_58954fde536d2($_smarty_tpl) {?> <div class="col-md-4">
     <label name="gyro_lable"  class="col-md-6 control-label">开启陀螺仪</label>
    <div name="gyro_wrap"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="开启/关闭陀螺仪"<?php }?>>
        <input id="gyro" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(gyro_init);
		plugins_config_get_function.push(gyro_get);
	})
	function gyro_init(){
    	$("#gyro").bootstrapSwitch('state', panoConfig.gyro=='1'?true:false);
	}
	function gyro_get(panoConfig){
	    panoConfig.gyro =  $("#gyro").bootstrapSwitch('state')?1:0;
	}
</script>
<?php }} ?>