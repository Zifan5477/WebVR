<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 21:58:16
         compiled from "plugin\showvrglass\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1514658954fde74e9a4-87948646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4845f7dbbcbd40d45780f698ea4cfbf33097aee8' => 
    array (
      0 => 'plugin\\showvrglass\\template\\edit.lbi',
      1 => 1476501296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514658954fde74e9a4-87948646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58954fde762cc',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58954fde762cc')) {function content_58954fde762cc($_smarty_tpl) {?> <div class="col-md-4">
     <label name="namehot"  class="col-md-6 control-label">隐藏VR眼镜</label>
    <div name="namehot"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="隐藏VR眼镜"<?php }?>>
        <input id="showvrglass" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(showvrglass_init);
		plugins_works_get_function.push(showvrglass_get);
	})
	function showvrglass_init(){
    	$("#showvrglass").bootstrapSwitch('state', worksmain.hidevrglasses_flag=='1'?true:false);
	}
	function showvrglass_get(worksMaindata){
	    worksMaindata.hidevrglasses_flag =  $("#showvrglass").bootstrapSwitch('state')?1:0;
	}
</script>
<?php }} ?>