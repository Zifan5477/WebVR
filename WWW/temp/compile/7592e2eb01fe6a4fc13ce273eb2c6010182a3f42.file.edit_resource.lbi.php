<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 21:58:16
         compiled from "plugin\custom_right_button\template\edit_resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:122558954fde864199-80886939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7592e2eb01fe6a4fc13ce273eb2c6010182a3f42' => 
    array (
      0 => 'plugin\\custom_right_button\\template\\edit_resource.lbi',
      1 => 1478570736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122558954fde864199-80886939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58954fde86aa3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58954fde86aa3')) {function content_58954fde86aa3($_smarty_tpl) {?><div class="modal fade" id="myCustomRightModal" data-backdrop="static" data-keyboard="false" data-position="5%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">自定义右键菜单</h2>
            </div>
            <div class="modal-body" style="padding:10px">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" onclick="addCustomRightItem()">添加网站链接(或电话号码)</button>
                        <span class="text-muted">可自定义三个网站地址或电话号码</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span><button class="btn btn-primary" onclick="customRightOkClick()">完成</button></span>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/custom_right_button/js/custom_right.js"></script><?php }} ?>