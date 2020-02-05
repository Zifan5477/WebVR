<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:21:08
         compiled from "D:/phpStudy/WWW/template\default\member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307225894a25098b6a2-99873696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba2cbe0e3df49d8022c58ea1d98c3cb52fe3dde' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\member.tpl',
      1 => 1475814472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307225894a25098b6a2-99873696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a2509dd6e',
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a2509dd6e')) {function content_5894a2509dd6e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/member/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>