<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 18:50:14
         compiled from "D:/phpStudy/WWW/data/static_template/tour\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1840589830d0994be7-54721652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01fe70229ee8fccb80abb0b3f62903a4796f824' => 
    array (
      0 => 'D:/phpStudy/WWW/data/static_template/tour\\index.html',
      1 => 1482228004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840589830d0994be7-54721652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_589830d0a2b9e',
  'variables' => 
  array (
    'plugins' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589830d0a2b9e')) {function content_589830d0a2b9e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title></title>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control" />
    <meta content="no-cache" http-equiv="Pragma" />
    <meta content="0" http-equiv="Expires" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <link rel="stylesheet" href="static/css/zui.min.css">
    <link rel="stylesheet" href="static/css/zui-theme.css">
    <link rel="stylesheet" href="static/css/response.css">
    <link rel="stylesheet" href="static/css/redefine.css">
     <link rel="stylesheet" href="static/css/alivideo.css">
    <script language="JavaScript" type="text/javascript" src="static/js/data.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/jquery-1.9.1.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/zui.js"></script>
    <script language="JavaScript" type="text/javascript" src="tour.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/vrshow.js"></script>
    <script language="JavaScript" type="text/javascript" src="static/js/alivideo.js"></script>
     <script language="JavaScript" type="text/javascript" src="static/js/object.js"></script>
    <style>
        @-ms-viewport { width:device-width; }
        @media only screen and (min-device-width:800px) { html { overflow:hidden; } }
        html { height:100%; }
        body { height:100%; overflow:hidden; margin:0; padding:0; font-family:microsoft yahei, Helvetica, sans-serif;  background-color:#000000; }
    </style>
</head>
<body>

    <div id="fullscreenid" style="position:relative;width:100%; height:100%;">
        <div id="panoBtns" style="display:none">
            <div class="vrshow_container_logo">
                <img id="logoImg" src="resource/images/custom_logo.png" style="display: none;" >

                <div class="vrshow_logo_title" id="user_name_wrap"  >
                    <div id="authorDiv" style="display: none;">作者：<span id="user_nickName"><?php echo $_SESSION['user']['nickname'];?>
</span></div>
                    <div style="clear:both;"></div>

                </div><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['view_container']=="left_top"){?><?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/view.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php } ?>
            </div>

            <div class="vrshow_container_1_min">
                <div class="btn_fullscreen" onClick="fullscreen(this)" title="" style="display:none"></div><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['view_container']=="right_top"){?><?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/view.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php } ?>
            </div>
            <div class="vrshow_radar_btn" onClick="toggleKrpSandTable()">
                <!-- <span class="btn_sand_table_text">沙盘</span> -->
            </div>
            <div class="vrshow_tour_btn" onClick="startTourGuide()">
                <span class="btn_tour_text">一键导览</span>
            </div>
            <div class="vrshow_container_2_min"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['view_container']=="right_bottom"&&$_smarty_tpl->tpl_vars['k']->value!='praise'){?><?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/view.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php } ?>
            </div>
            <div class="vrshow_container_3_min">
                <div class="img_desc_container_min scene-choose-width" style="display:none">
                    <img src="static/images/skin1/vr-btn-scene.png" onClick="showthumbs()">
                    <div class="img_desc_min">场景选择</div>
                </div>
            </div>
        </div>
        
        <div id="pano" style="width:100%; height:100%;">
        </div>
		
		<div class="modal" id="pictextModal" data-backdrop="static" data-keyboard="false" style="z-index:2002">
            <div class="modal-dialog">
                <div class="modal-header text-center" >
                    <button type="button" class="close" onClick="hidePictext()"><span>&times;</span></button>
                    <span style="color: #353535;font-weight:700" id="pictextWorkName"></span>
                </div>
                <div class="modal-body" style="height:400px;overflow-y:scroll ">
                    <div class="row">                   
                        <div class="col-sm-offset-1 col-md-offset-1 col-md-10 col-sm-10 col-xs-12" id="pictextContent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="logreg">
        </div><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['view_resource']==1){?><?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/resource.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php } ?>
    </div>
    <div class="modal" id="video_player_modal" data-keyboard="false" style="z-index:2002">
            <div class="modal-dialog">
                <div class="modal-body" style="padding: 0">
                    <a href="javascript:;" onClick="close_video_player()" style="position:absolute;color:white;z-index:99999;right:5px;top: 3px;">关闭</a>
                    <div class="prism-player" id="J_prismPlayer" ></div>
                </div>
            </div>
        </div>
</body>
<!-- <script language="JavaScript" type="text/javascript" src="static/js/kr/object.js"></script> -->
<script>
    $(function(){
        initPano();
        $("#shareDiv img").attr('src','static/images/skin1/vr-btn-share.png');
        $("#profileDiv img").attr('src','static/images/skin1/vr-btn-desc.png');
    })
    function custom_logo_init(data){
        var logoObj = data.custom_logo;
        if(logoObj){
            if(logoObj.useCustomLogo=='1')
                $('.vrshow_container_logo img').attr('src',logoObj.logoImgPath);
            else
                $('.vrshow_container_logo img').attr('src','resource/images/custom_logo.png');
            if(logoObj.logoLink)
                $('.vrshow_container_logo img').attr('onclick','javascript:window.open("'+logoObj.logoLink+'")');
            
        }
    }
    
</script>
</html><?php }} ?>