<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 15:10:00
         compiled from "D:/phpStudy/WWW/template\default\member\passwd.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2236858982f4f81c3a1-93295119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5757390f626283e14d7990d540dd164396cc10d1' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\member\\passwd.lbi',
      1 => 1475814472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2236858982f4f81c3a1-93295119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58982f4f875cd',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58982f4f875cd')) {function content_58982f4f875cd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<div class="works-container">
	<div class="container container_works" style="margin-top: 0;">
		<div class="row row_margin_bottom" style="margin-top: 0px;">
			<div class="col-md-10 advanced-setting-block" style="padding-bottom:10px;">
			   <div style="width:300px;">
				<form id="passwd" action="/member/passwd" method="post">
					<div class="input-group top15">
					 <span class="input-group-addon">原&ensp;密&ensp;码</span>
					  <input type="password" name="oldpwd" class="form-control" placeholder="为保证安全性，请输入原密码">
					</div>
					<div class="input-group top15">
					 <span class="input-group-addon">新&ensp;密&ensp;码</span>
					  <input type="password" name="newpwd" class="form-control" placeholder="请输入要修改为的密码">
					</div>
					<div class="input-group top15">
					 <span class="input-group-addon">重复密码</span>
					  <input type="password" name="repwd" class="form-control" placeholder="请再一次输入新密码">
					</div>
					<button class="btn btn-block btn-primary top15" type="button" id="subbtn" onclick="ajaxFormSubmit('passwd','subbtn');">确认修改</button>
				</form>
			   </div>	
			</div>	
		</div>
	</div>
</div><?php }} ?>