<?php /* Smarty version Smarty-3.1.7, created on 2017-03-04 18:37:00
         compiled from "D:/phpStudy/WWW/template\zz_theme\library\m_header.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2950258ba98cc0f5ef9-85427468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '479d9b0e00ee21cd94bc77a0883eba4d8a39a559' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\library\\m_header.lbi',
      1 => 1478155408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2950258ba98cc0f5ef9-85427468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    '_lang' => 0,
    'video_tag' => 0,
    'p_tags' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ba98cc1ad0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba98cc1ad0b')) {function content_58ba98cc1ad0b($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/zui-theme.css">
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/redefine.css">
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/common.css">
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-1.9.1.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/datetimepicker.js"></script>
</head>

<body>
<header>
	<nav class="navbar m_navbar" >


	  <div class="">
	    	<div class="row">
                <div class="col-xs-12 m_nav_title text-center">
                    <div class="col-xs-4 all_cate_span">
                        <span>全部分类</span>
                        <span class="pull-right" style="margin-right: 15px;"><i id="cate_up_down" class="icon-chevron-down"></i></span>
                        <div class="sub_cate">
                            <ul>
                                <?php if ($_smarty_tpl->tpl_vars['video_tag']->value){?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <li><a href="/videos?tag=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                                    <?php } ?>

                                    <?php }else{ ?>

                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <li><a href="/pictures?tag=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                                    <?php } ?>

                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-2 harder-back"><a href="/" style="clear: both;">首页</a></div>
                    <div class="col-xs-3 harder-back" style=""><a href="/videos" style="clear: both;">全景视频</a></div>
                    <div class="col-xs-3 harder-back"><a href="/#jxpp" style="clear: both">精选品牌</a></div>
                    <div style="display:none"  class="col-xs-4"><a href="/#new_join" style="clear: both">最新入驻</a></div>
                </div>
	    	</div>
	  </div>
	</nav>
</header>
	</div>
    <div class="container" >
        <div class="row ">
            <div class="col-xs-12" style="margin-top:6px">
                <div class="">
                <style>
                    .all_cate_span{ padding:0;height: 35px;}
                    .m_nav_title *{ font-size:12px;color:#FFF}
                    .sub_cate ul li a{ padding-left: 0px;}
                    .m_nav_title  div a { line-height: 37px;}
                    .harder-back{ height: 35px;background: #353535;}
                </style>
                </div>
            </div>
        </div>
    </div>

	<div style="height: 29px;"></div>
	<script>
		$(function(){
			$(".all_cate_span").click(function(){
				$(".all_cate_span .sub_cate ul").toggle();
			})

			$('#menus').click(function(){
				$('.m_nav_cate').toggle();
			})

			$('.m_nav_cate ul li').click(function(){
				$('.m_nav_cate').hide();
			});
		})
        function toPage(_url){
            $("#m-iframe").prop('src', _url);
        }
	</script><?php }} ?>