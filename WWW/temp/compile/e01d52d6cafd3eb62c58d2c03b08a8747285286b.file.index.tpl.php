<?php /* Smarty version Smarty-3.1.7, created on 2018-04-17 19:56:50
         compiled from "F:/phpStudy/WWW/template\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127535ad5e1023ac252-88506123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01d52d6cafd3eb62c58d2c03b08a8747285286b' => 
    array (
      0 => 'F:/phpStudy/WWW/template\\default\\index.tpl',
      1 => 1475814472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127535ad5e1023ac252-88506123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ad5e102cfce8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e102cfce8')) {function content_5ad5e102cfce8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/index/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>