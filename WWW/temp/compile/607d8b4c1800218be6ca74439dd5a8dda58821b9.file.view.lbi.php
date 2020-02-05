<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:23:03
         compiled from "plugin\comment\template\view.lbi" */ ?>
<?php /*%%SmartyHeaderCode:192915894a140e58274-90927128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607d8b4c1800218be6ca74439dd5a8dda58821b9' => 
    array (
      0 => 'plugin\\comment\\template\\view.lbi',
      1 => 1478770820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192915894a140e58274-90927128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a140e5f32',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a140e5f32')) {function content_5894a140e5f32($_smarty_tpl) {?><style>
.vrshow_comment {
    position: absolute;
    bottom: 10%;
    left: 50%;
    margin-left: -200px;
    width: 400px;
    min-height: 100px;
    background-color: rgba(51, 51, 51, 0.8);
    z-index: 4300;
    color: #fff;
    border-radius: 5px;
    display: none;
}
@media screen and (max-width: 767px) {
    .vrshow_comment {
        width: 250px;
        margin-left: -125px;
    }

}
</style>
<div class="img_desc_container_min" id="comment_div">
    <img src="/static/images/skin1/vr-btn-comment.png" onClick="show_comment()">
    <div class="img_desc_min">说一说</div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
plugin/comment/js/comment.js"></script><?php }} ?>