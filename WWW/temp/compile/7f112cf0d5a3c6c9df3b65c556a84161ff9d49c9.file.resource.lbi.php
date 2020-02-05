<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:23:03
         compiled from "plugin\share\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:166875894a140f24d25-51621796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f112cf0d5a3c6c9df3b65c556a84161ff9d49c9' => 
    array (
      0 => 'plugin\\share\\template\\resource.lbi',
      1 => 1478323764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166875894a140f24d25-51621796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a140f2ce6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a140f2ce6')) {function content_5894a140f2ce6($_smarty_tpl) {?><div class="modal" id="qrCodeModal" data-backdrop="static" data-keyboard="false" style="z-index:2002">
    <div class="modal-dialog" style="height:350px;">
        <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <span style="color: #353535;">用手机扫描二维码分享给你的好友</span>
        </div>
        <div class="modal-body">
            <div class="center-block" style="text-align: center">
                <img id="qrcode" src="/static/images/loading.gif" width="226px" height="226px">
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
         plugins_init_function.push(share_init);
    })
    function share_init(data){
      if(data.hideshare_flag == "1"){
            $("#shareDiv").hide();
        }
    }
    //分享-获取二维码
    function getQRCodePic(){
        $("#qrCodeModal").modal('show');
        $("#qrcode").attr("src",'/qrcode.php?viewid='+work_view_uuid);
    }
</script><?php }} ?>