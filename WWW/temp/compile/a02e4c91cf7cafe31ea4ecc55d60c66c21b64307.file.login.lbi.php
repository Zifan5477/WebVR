<?php /* Smarty version Smarty-3.1.7, created on 2017-03-04 17:44:25
         compiled from "D:/phpStudy/WWW/template\zz_theme\passport\login.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2523558ba8c79c92d61-84690217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a02e4c91cf7cafe31ea4ecc55d60c66c21b64307' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\passport\\login.lbi',
      1 => 1476759766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523558ba8c79c92d61-84690217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ba8c79c92d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba8c79c92d6')) {function content_58ba8c79c92d6($_smarty_tpl) {?><div class="container">
	<div class="passport_container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<a href="/"><img src="/static/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
"></a>
			</div>
		</div>
		<div class="row top15">
			<h3>与世界分享你的全景</h3>
		</div>
		<div class="row top15">
			<div class="col-md-3 col-md-offset-3"><strong><a href="/passport/register">注册</a></strong></div> <div class="col-md-3"><strong><a href="#">登录</a></strong></div>
		</div>
		<div class="row ">
			<div class="col-md-12 top15">
			<form id="login_form" action="/passport/login?act=do_login" method="post">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
" name="redirectUrl">
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-tablet"></i></span>
				  <input type="text" id="phone" name="phone" class="form-control" placeholder="手机号" width="200">
				</div>
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-key"></i></span>
				  <input type="password" id="password" name='password' class="form-control" placeholder="密码" width="200">
				</div>
				<div class="checkbox row top15">
					<div class="col-md-6" >
					  <label>
					    <input type="checkbox" name="remember" value="1"> 7天免登录
					  </label>
				  </div>
				  <div class="col-md-6" >
					  <label>
					   <a href="/passport/findpwd">忘记密码?</a>
					  </label>
				  </div>
				</div>
				<button class="btn btn-block btn-primary top15" type="button" id="login_btn" onclick="ajaxFormSubmit('login_form','login_btn');">立即登录</button>
				</form>
			</div>
		</div>
	</div>

</div>
<script>
	$(function(){
		$('#password').bind('keyup', function(event) {
			if (event.keyCode == "13") {
				//回车执行查询
				$('#login_btn').click();
			}
		});
	})
</script><?php }} ?>