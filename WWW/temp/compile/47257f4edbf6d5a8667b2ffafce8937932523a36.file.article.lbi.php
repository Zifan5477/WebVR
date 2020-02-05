<?php /* Smarty version Smarty-3.1.7, created on 2017-02-19 10:42:39
         compiled from "D:/phpStudy/WWW/template\default\index\article.lbi" */ ?>
<?php /*%%SmartyHeaderCode:156245894cdc55d33f6-50744083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47257f4edbf6d5a8667b2ffafce8937932523a36' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\index\\article.lbi',
      1 => 1478942756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156245894cdc55d33f6-50744083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894cdc560f7b',
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894cdc560f7b')) {function content_5894cdc560f7b($_smarty_tpl) {?><style type="text/css">
h2.art-tit{
margin:0;color:#888;font-weight:normal;padding:10px;background:#fff;border-bottom:1px solid #e4e4e4;
}
.art-box{
border:1px solid #e4e4e4;margin-bottom:20px;
}
.art-content{
padding:10px;overflow:hidden;
}
.art-content img{
max-width:100%;
}
</style>

<div class="container">

	<div class="art-box">
	
		<h2 class="art-tit">
		<?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>

		</h2>
	
		<div class="clearfix"></div>
	
		<div class="art-content">
		<?php echo $_smarty_tpl->tpl_vars['a']->value['content'];?>

		</div>
	
	</div>

</div><?php }} ?>