<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 18:43:31
         compiled from "D:/phpStudy/WWW/template\zz_theme\library\footer.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2554958ad6b53a2e469-03500784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2d707cac2c9d335c7e1905835288f8b4435392' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\library\\footer.lbi',
      1 => 1477898702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2554958ad6b53a2e469-03500784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ad6b53a2e46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad6b53a2e46')) {function content_58ad6b53a2e46($_smarty_tpl) {?><style type="text/css">
.footer {
        height: 75px;
        font-size: 12px;
        clear: both;
        display: none
}
.footer ul {
	height: 75px;
	line-height: 75px;
}
.footer-logo {
	height: 75px;
	line-height: 75px;
}

.cooperative p{
	margin: 0;
}
.cooperative p:nth-child(1) {
	font-size: 12px;
}
.cooperative p:nth-child(2) {
	font-size: 9px;
}

.ab{
	position: absolute;
	bottom: 0;
}
@media (max-width:470px) {
.footer{ position: relative;height: 94px;}
.footer ul { margin-left: 5px;width: 200px;}
.footer ul li a { padding: 5px 2px;}
.footer-logo>a>img{ vertical-align: 14px;}
.footer-nav>li{ line-height: 50px;}
.cooperative>p>a>img{ width: 61px}
.cooperative{ width:100%;position: absolute;top: 8px;right: 7px;}
.hz{ text-align: center;}
.bq{ text-align: center;}

}
</style>
<footer class="footer">
 <div class="footer-warper">
  <div class="footer-logo"><a href="#"><img src="/static/images/logo.png"></a></div>
  <ul class="footer-nav">
   <li><a href="#" target="_blank">关于我们</a><a href="#" target="_blank">用户协议</a><a href="#" target="_blank">友情链接</a></li>
  </ul>
  <div class="cooperative" style="float:right">
   <p class="qq"><a target="blank" href="http://wpa.qq.com/msgrd?V=3&uin=<?php echo $_smarty_tpl->tpl_vars['_lang']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
&Menu=yes"><img src="/static/images/qq_online.png" style="cursor:pointer;"></a></p>
   <div class="clearfix" style="height:5px"></div>
   <p class="hz">合作电话：<?php echo $_smarty_tpl->tpl_vars['_lang']->value['tel'];?>
 </p><p class="bq">Copyright&copy;2016 <?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
 All Rights Reserved   <a style="color: #bfbfbf;text-decoration: underline;" href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['icp'];?>
</a></p>
   </div>
  </div>
</footer>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.form.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/bootbox.js"></script> 
<script language="JavaScript" type="text/javascript" src="/static/js/pager.js"></script> 
<script language="JavaScript" type="text/javascript" src="/static/js/common.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/zui.js"></script>
<script>
	var f_resize_time;
	window.onload = function (){ 
		f_resize_time = setTimeout(resizeFooter,1000);
		// $(window).bind("resize",function(){
		// 	$("footer").hide();
		// 	if(f_resize_time) clearTimeout(f_resize_time);
		// 	f_resize_time = setTimeout(resizeFooter,100);
		// })
		$(document).bind("resize",function(){
			$("footer").hide();
			if(f_resize_time) clearTimeout(f_resize_time);
			f_resize_time = setTimeout(resizeFooter,100);
		})
	} 
	function resizeFooter(){
		if ($(window).height()>$(document.body).height()) {
			$("footer").addClass("ab").show();
		}else{
			$("footer").removeClass("ab").show();
		}
	}
</script>
</body>
</html><?php }} ?>