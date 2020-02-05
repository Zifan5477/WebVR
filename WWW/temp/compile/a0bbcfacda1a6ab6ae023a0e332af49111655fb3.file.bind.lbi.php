<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 22:23:53
         compiled from "D:/phpStudy/WWW/template\default\member\bind.lbi" */ ?>
<?php /*%%SmartyHeaderCode:924158982f50a19999-96554790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bbcfacda1a6ab6ae023a0e332af49111655fb3' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\member\\bind.lbi',
      1 => 1475814472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924158982f50a19999-96554790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58982f50b78ac',
  'variables' => 
  array (
    '_lang' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58982f50b78ac')) {function content_58982f50b78ac($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<div class="works-container">
	<div class="container container_works" style="margin-top: 0;">
		<div class="row row_margin_bottom" style="margin-top: 0px;">
			<div class="col-md-10 advanced-setting-block" style="padding-top:10px;padding-bottom:10px;">
				   <img src="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/images/icon/weixin.png" class="fl">
					<div class="fl" style="margin-left:10px">
					<?php if (empty($_smarty_tpl->tpl_vars['user']->value['openid'])){?>
						你还没有绑定微信账号，绑定后可以使用微信扫码快捷登录<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
<br>
						<a href="/member/bind?act=weixin">立即绑定</a>
					<?php }else{ ?>
						你已绑定微信账号，可以使用微信扫码快捷登录<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>

					<?php }?>
				    </div>
			</div>
		</div>
	</div>
</div><?php }} ?>