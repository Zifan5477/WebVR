<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 18:43:53
         compiled from "D:/phpStudy/WWW/template\zz_theme\index\videos.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1060158ad6b6915b703-93311196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df1725cb8ed3e2ac4c9dd9914ee0acd6b43a7a4' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\index\\videos.lbi',
      1 => 1477898702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1060158ad6b6915b703-93311196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    '_lang' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ad6b6919879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad6b6919879')) {function content_58ad6b6919879($_smarty_tpl) {?><div class="container" style="padding: 0">

<div class="clearfix"></div>

<!--一个卡片列表行-->
<div class="row">
	<div class="cards" style="margin:0;">
		<!--卡片列表循环-->
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
		   <div class="card" href="###">
			 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['cdn_host'];?>
video/play.html?vid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"></a>
			 <div class="card-heading">
				<div class="col-md-9 col-xs-8 of_hide padding0">
					<strong class="text-primary"><?php echo $_smarty_tpl->tpl_vars['v']->value['vname'];?>
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