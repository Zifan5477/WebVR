<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:23:26
         compiled from "D:/phpStudy/WWW/vradmin/template\lib\login.lbi" */ ?>
<?php /*%%SmartyHeaderCode:237545894b60b700072-12948586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf1368cfa6fa516926d5e606230dc4d8ecb25bf' => 
    array (
      0 => 'D:/phpStudy/WWW/vradmin/template\\lib\\login.lbi',
      1 => 1476095720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237545894b60b700072-12948586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894b60b70890',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894b60b70890')) {function content_5894b60b70890($_smarty_tpl) {?><div id="login">
  <div class="dologo"></div>
  <form id="admin_login" action="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=login" method="post" enctype="multipart/form-data">
   <div id="wrong_text" class="warning" style="display:none"></div>
   <ul>  
    <li class="inpLi"><b>登录账号</b><input type="text" name="admin_name" class="inpLogin"></li>
    <li class="inpLi"><b>登录密码</b><input type="password" name="passwd" class="inpLogin"></li>
    <li style="height:auto"><label><input type="checkbox" name="remember" value="1"> 7天内免登录</label></li>
    <li class="sub"><input type="button" id="sub_btn" value="确认登录" class="btn" style="width:100%;" onclick="javascript:ajaxFormSubmit('admin_login','登录');"></li> 
   </ul>
  </form>
</div>
<?php }} ?>