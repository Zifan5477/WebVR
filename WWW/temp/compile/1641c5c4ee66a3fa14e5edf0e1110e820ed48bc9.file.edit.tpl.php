<?php /* Smarty version Smarty-3.1.7, created on 2017-02-20 22:17:52
         compiled from "D:/phpStudy/WWW/template\edit\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065258954fde370687-90529777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1641c5c4ee66a3fa14e5edf0e1110e820ed48bc9' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\edit\\edit.tpl',
      1 => 1482227916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065258954fde370687-90529777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58954fde3d383',
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58954fde3d383')) {function content_58954fde3d383($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="screen-desktop-wide device-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
<title><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
 - 编辑全景项目</title>
<link type="image/x-icon" rel="shortcut icon" href="">
<script language="JavaScript" type="text/javascript" src="/static/js/kr/uhweb.js"></script>
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/redefine.css">
<style type="text/css">
.slider.slider-horizontal {
	width: 190px;
}
.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight {
	border: 2px dotted #fde428;
	color: #777620;
	height:50px;
}
.navbar{
	margin-bottom:0px;
}
.works-container{
	padding-top:20px;
}
</style>
<body style="background-color: rgb(250, 250, 250);">

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/nav.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("edit/lib/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script language="JavaScript" type="text/javascript" src="/static/js/bootbox.js"></script> 
</body>
</html>
<?php }} ?>