<?php /* Smarty version Smarty-3.1.7, created on 2017-04-17 21:04:34
         compiled from "D:/phpStudy/WWW/vradmin/template\lib\index.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2642058969d9a9e45c8-50007538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff980607c5c910913cff17016cd920aae641c2a' => 
    array (
      0 => 'D:/phpStudy/WWW/vradmin/template\\lib\\index.lbi',
      1 => 1489922639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2642058969d9a9e45c8-50007538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58969d9ab29e7',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58969d9ab29e7')) {function content_58969d9ab29e7($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['_lang']->value['customvip']){?>
<?php }?>
	
<script type="text/javascript">
$(document).ready(function(){
	//根据当前版本信息获取升级信息
	$.post("/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=upgrade&act=check",{},function(data){
		var data = json_decode(data);
		//显示下载链接
		if(data.status==1){
			var str = "当前版本："+data.cur_version+"　";
			str += "<a  href='/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=upgrade&act=step_1' ><font color='red'>"+data.version+"版本（"+data.pubtime+"）发布，立即升级>></font></a>";
			str += "<p>---------------------------------------------------</p>";
			for(var i=0; i<data.info.length; i++){
				str += "<p>"+(i+1)+"："+data.info[i]+"</p>";
			}
			str += "<p>---------------------------------------------------</p>";
			str += "<p>请按照自动升级提示逐步升级，<strong>不可跨代升级</strong>，跨代升级将会对程序造成致命性错误！</p>";
			$("#upgrade-box").html(str);
		}
		//已被请求过，当前请求非法
		else if(data.status==2){
			$("#upgrade-box").html("<span style='color:red;font-size:14px;'>"+data.message+"</span>");
		}
		//customid不存在
		else if(data.status==3){
			$("#upgrade-box").html("<span style='color:red;font-size:14px;'>"+data.message+"</span>");
		}
		//已是最新版本
		else{
			$("#upgrade-box").html("当前版本："+data.cur_version+"，已是最新版本！");
		}
		$("#upgrade-box").show();
	});
});
</script><?php }} ?>