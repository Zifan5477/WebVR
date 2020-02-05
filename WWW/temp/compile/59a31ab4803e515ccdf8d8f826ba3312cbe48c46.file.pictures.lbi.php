<?php /* Smarty version Smarty-3.1.7, created on 2017-03-04 17:04:50
         compiled from "D:/phpStudy/WWW/template\zz_theme\index\pictures.lbi" */ ?>
<?php /*%%SmartyHeaderCode:59258ba8332661933-82787749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a31ab4803e515ccdf8d8f826ba3312cbe48c46' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\index\\pictures.lbi',
      1 => 1477898702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59258ba8332661933-82787749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag' => 0,
    'picture_tags' => 0,
    'v' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ba83326dba5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba83326dba5')) {function content_58ba83326dba5($_smarty_tpl) {?><style type="text/css">
.channel-box{
font-family:"Hiragino Sans GB","arial","Tahoma";border-radius:5px;background:#f3f3f3;padding-left:20px;
color:#888;padding-bottom:18px;
}
.channel-box h2{
font-weight:normal;
}
ul.channel{
padding:0;
}
ul.channel li{
float:left;list-style-type:none;font-size:15px;width:50%;line-height:30px
}
ul.channel li a{
color:#888;
}
ul.channel li a:hover{
text-decoration:underline;
}
ul.channel li a.active{
color:#00a3d8;
}
</style>

<div class="container" style="padding:0">

<!--一个卡片列表行-->
<div class="row">
	<div class="cards" style="margin:0;">
		<!--卡片列表循环-->
		<!-- <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
		 <div class="card channel-box">
		  <h2>频道</h2>
		  <ul class="channel">
		   <li><a href="/pictures?tag=0" <?php if ($_smarty_tpl->tpl_vars['tag']->value===0){?>class="active"<?php }?>>全部</a></li>
		   <li><a href="/pictures?tag=-1" <?php if ($_smarty_tpl->tpl_vars['tag']->value===-1){?>class="active"<?php }?>>编辑推荐</a></li>
		   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['picture_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		   	<li><a href="/pictures?tag=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tag']->value==$_smarty_tpl->tpl_vars['v']->value['id']){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
		   <?php } ?>
		   </ul>
		   <div class="clearfix"></div>
		  </div>
		 </div> -->
		 
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
		   <div class="card" href="###">
			 <a target="_blank" href="/tour/<?php echo $_smarty_tpl->tpl_vars['v']->value['view_uuid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" style="width: 100%"></a>
			 <div class="card-heading">
				<div class="col-md-9 col-xs-8 of_hide padding0">
					<strong class="text-primary"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</strong> 
				</div>
				<div class="col-md-3 col-xs-4 of_hide padding0">
					<div class="pull-right text-danger"><i class="icon-heart-empty"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value['browsing_num'];?>
</div>
				</div>
			 </div>
			 
		   </div>
		 </div>
		<?php } ?>	         
		<!--卡片列表循环结束-->	
	</div>
</div>
<!--一个卡片列表行结束-->
<div class="list-page"><?php echo $_smarty_tpl->getSubTemplate ("../library/pages.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
</div><?php }} ?>