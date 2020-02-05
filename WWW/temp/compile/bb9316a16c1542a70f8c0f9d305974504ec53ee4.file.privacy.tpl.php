<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 00:44:30
         compiled from "D:/phpStudy/WWW/template\default\privacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258235898439d424a44-79240714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb9316a16c1542a70f8c0f9d305974504ec53ee4' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\privacy.tpl',
      1 => 1482227968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258235898439d424a44-79240714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5898439d58a45',
  'variables' => 
  array (
    'title' => 0,
    '_lang' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5898439d58a45')) {function content_5898439d58a45($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-ch">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['subtitle'];?>
<?php }?></title>
<link rel="stylesheet" href="/static/css/zui.min.css">
<link rel="stylesheet" href="/static/css/zui-theme.css">
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-1.9.1.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/zui.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/common.js"></script>
</head>

<body>


<div class="modal fade in" data-backdrop="static" data-keyboard="false" aria-hidden="false" style="display: block;">
    <div class="modal-dialog" style="margin-top: 68.3333px;">
        <div class="modal-content" style="min-height: 200px">
            <div class="modal-header">
                <h4 class="modal-title text-center">请输入3到20位访问密码</h4>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-top:20px">
                    <div class="col-md-6 col-md-offset-3 ">
                        <input type="text" class="form-control" value="" id="pwd" placeholder="只能输入英文和数字">
                    </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-6 col-md-offset-3 ">
                         <a class="btn btn-block btn-primary" target="_blank" href="javascript:;" onclick="javascript:privacySubmit();">确  定</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function privacySubmit(){
	var pwd = $.trim($("#pwd").val());
	if(pwd.length<3||pwd.length>20){
		alert_notice("请输入3到20位密码");
		return;
	}
	$.post("/tour.php",{
		'act':'privacyAccess',
		'pid':<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
,
		'pwd':pwd
	},function(res){
		if(res.status==1){
			window.location.href = res.url;
		}else{
			alert_notice(res.msg);
		}
	},'json')
}
</script>
</body>
</html><?php }} ?>