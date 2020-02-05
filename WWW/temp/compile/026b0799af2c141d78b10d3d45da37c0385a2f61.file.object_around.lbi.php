<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 14:54:05
         compiled from "D:/phpStudy/WWW/template\edit\lib\object_around.lbi" */ ?>
<?php /*%%SmartyHeaderCode:206345899511ea14894-84712333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '026b0799af2c141d78b10d3d45da37c0385a2f61' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\edit\\lib\\object_around.lbi',
      1 => 1482227804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206345899511ea14894-84712333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5899511eb8327',
  'variables' => 
  array (
    'obj' => 0,
    '_lang' => 0,
    'imgs' => 0,
    'v' => 0,
    'cdn_host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899511eb8327')) {function content_5899511eb8327($_smarty_tpl) {?><style>
    /* 为可拖动的条目应用可移动光标类型 */
    #sortableList > .col-md-3 {
        cursor: move
    }

    /* 为正在被拖动的条目应用半透明外观 */
    #sortableList > .col-md-3.dragging {
      visibility: visible;
      opacity: .3;
    }
</style>
<div class="works-container">
<div class="container container_works" style="margin-top: 0;">
    <div class="row">
        <div class="col-md-10">
            <ol class="breadcrumb clear_padding_left">
                <li><a href="/member/object_around"><i class="icon icon-home"></i>&nbsp;作品列表</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</li>
            </ol>
        </div>
    </div>

    <div class="row row_margin_bottom" style="margin-top: 0px;">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px;padding-bottom:10px;">
            <div class="row">
                <div class="col-md-4">
                    <img id="thumbpath" style="height:200px;" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value['thumb_path'];?>
">
                    <div class="col-md-12 row_margin_bottom" style="padding: 0">
                        <!-- <input id="picUpload" name="file" type="file" class="file-loading"> -->
                        <button type="button" id="workCover" data-imgtype="custom" data-usetype="workCover" data-modalid="#media_icon" class="btn btn-block">从素材库选择封面</button>
                        <span class="help-block">请选择或上传2M以内封面图片
                        </strong> 支持格式: <strong class="text-warning">JPG / PNG / JPEG </strong></span>
                    </div>
                    <div id="errorMsgDiv" class="col-md-12 text-danger" style="padding: 0;display: none">
                        <i class="icon icon-exclamation-sign"></i>
                        <span id="errorMsg"></span>
                    </div>

                </div>
                <div class="col-md-8">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">

                            <label class="col-md-2 control-label">作品标题</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="oname" name="oname" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
" placeholder="请输入环物作品名称" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">作品地址</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="videolocation" name="videoname" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
obj.php?oid=<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
">
                            </div>
                              <div class="col-md-2">
                                 <button class="btn copyable" type="button">复制</button>
                             </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">公开作品</label>
                               <div class="col-md-2" data-toggle="tooltip" title="若不想作品被浏览，可选择不发布该作品" >
                                  <div class="checkbox">
                                      <label>
                                        <input id="flag_publish" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['obj']->value['flag_publish']){?>checked="checked"<?php }?> > 是
                                      </label>
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-md-2 control-label">二维码</label>
                              <div class="col-md-8">
                                  <img src="/qrcode.php?oid=<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
&act=obj_around" width="150">
                              </div>
                               
                          </div>
                       
                    </form>
                </div>
            </div>
      
        </div>
        <div class="col-md-2">
            <div class="btn_fixed_works">
                <button class="btn btn-block btn-primary" onclick="update_obj(<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
)" type="button" id="save_btn">保存</button>
                <button class="btn btn-block advanced-setting-btn" type="button" onclick="preview_obj('<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
obj.php?oid=<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
')">预览</button>
            </div>
        </div>
    </div>

    <h3>图片列表
        <small>共<?php echo count($_smarty_tpl->tpl_vars['imgs']->value);?>
帧图片</small>
        <small>拖动图片可进行重新排序</small>
        &nbsp;&nbsp;
        <small style="color: #c40000;cursor: pointer;" onclick="showUpBox()">新增环物图片</small>
    </h3>

    <div class="row">
        <div class="col-md-10 advanced-setting-block">
            <div id="sortableList" style="margin-top: 15px;">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <div class="col-md-3" id="pic_<?php echo $_smarty_tpl->tpl_vars['v']->value['index'];?>
" data-imgsrc="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgsrc'];?>
" data-filename="<?php echo $_smarty_tpl->tpl_vars['v']->value['filename'];?>
">
                  <div class="card">
                      <div class="media-wrapper">
                        <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgsrc'];?>
">
                      </div>
                      <div class="card-heading">
                          <span class="pull-right">
                              <a href="javascript:void(0);" onclick="deletepic(<?php echo $_smarty_tpl->tpl_vars['v']->value['index'];?>
);">
                                 <i class="icon-remove-circle"></i>删除
                              </a>
                          </span>
                          <span class="card-scene-name"><?php echo $_smarty_tpl->tpl_vars['v']->value['filename'];?>
</span>
                      </div>
                  </div>
              </div>
            <?php } ?>
            </div>
        </div>
    </div>

</div>
</div>
<div class="modal fade" id="media_icon" data-backdrop="static" data-keyboard="false" data-position="5%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#pic" data-toggle="tab" class="img_tab">图片</a></li>
                    <li><a href="#upload" data-toggle="tab" id="upload_tab">上传</a></li>
                    <div class="btn_confirm">
                        <li>
                            <button class="btn btn-primary confirm-choose" type="button" onclick="confirmChoseCover()">确定选择</button>
                        </li>
                        <li>
                            <button class="btn" type="button" id="cancel_icon" data-dismiss="modal">取消
                            </button>
                        </li>
                    </div>
                </ul>
                <div id="myTabContent" class="tab-content" style="height:410px;overflow: auto;">
                    <div class="tab-pane fade clearfix active in" id="pic">
                    </div>
                    <div class="tab-pane fade" id="upload">
                       <input id="imgUpload" name="file" type="file" class="">
                        <p id="mediaTyPrompt">上传文件格式：png、jpg格式。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="obj_up" data-backdrop="static" data-keyboard="false" data-position="5%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
              <h4 class="modal-title">请上传50帧以内的环物图片</h4>
            </div>
            <div class="modal-body" style="text-align: center;">
                     <input id="objUpload" name="file" type="file" class="">
                     <span >上传文件格式：png、jpg格式。</span>
            </div>
    </div>
</div>
<script>
var cdn_host = "<?php echo $_smarty_tpl->tpl_vars['cdn_host']->value;?>
";
var up_url = "<?php echo $_smarty_tpl->tpl_vars['_lang']->value['up_url'];?>
";
</script>
<script src="/static/js/jquery.zclip.min.js"></script>
<script src="/static/js/kr/choose_cover.js"></script>
<script src="/static/js/kr/obj_edit.js"></script><?php }} ?>