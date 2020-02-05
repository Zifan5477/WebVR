<?php /* Smarty version Smarty-3.1.7, created on 2017-03-04 17:44:25
         compiled from "D:/phpStudy/WWW/template\zz_theme\passport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402958ba8c79c18c40-71994123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9512d967ef6ea3b4c9f2dd0aacc246e77fa596a3' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\zz_theme\\passport.tpl',
      1 => 1475906308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402958ba8c79c18c40-71994123',
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
  'unifunc' => 'content_58ba8c79c55cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba8c79c55cd')) {function content_58ba8c79c55cd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/passport_header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/passport/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>