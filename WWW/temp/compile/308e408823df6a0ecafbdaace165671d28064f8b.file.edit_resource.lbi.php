<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 21:58:16
         compiled from "plugin\custom_user\template\edit_resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3067058954fde86eda1-40024677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308e408823df6a0ecafbdaace165671d28064f8b' => 
    array (
      0 => 'plugin\\custom_user\\template\\edit_resource.lbi',
      1 => 1476095720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067058954fde86eda1-40024677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58954fde87548',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58954fde87548')) {function content_58954fde87548($_smarty_tpl) {?><div id="userModal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title">自定义作者名</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">作者名称不能超过20个字符</p>
                <div class="row" style="margin-top:10px">
                    <label class="col-md-3 text-right" style="height:32px;line-height:32px;">作者姓名：</label>
                    <div class="col-md-8">
                        <input type="text" name="user" placeholder="请输入作者姓名" class="form-control" maxlength="20">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">完成</button>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/custom_user/js/custom_user.js"></script><?php }} ?>