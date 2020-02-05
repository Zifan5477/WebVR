<?php /* Smarty version Smarty-3.1.7, created on 2017-03-04 17:40:32
         compiled from "D:/phpStudy/WWW/template\zz_theme\member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2211858ba8b90c4ffa8-83131864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1367e340d7c989596905cbddb302e68aae1cc3' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\member.tpl',
      1 => 1475906308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2211858ba8b90c4ffa8-83131864',
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
  'unifunc' => 'content_58ba8b90c8d03',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba8b90c8d03')) {function content_58ba8b90c8d03($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/member/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>