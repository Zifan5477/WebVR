<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:20:20
         compiled from "D:/phpStudy/WWW/template\default\passport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62865894a0ec692b69-76853390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a632f1c269723f89e5bc3e8095ff75806d6e6bc' => 
    array (
      0 => 'D:/phpStudy/WWW/template\\default\\passport.tpl',
      1 => 1475814472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62865894a0ec692b69-76853390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a0ec6d77d',
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a0ec6d77d')) {function content_5894a0ec6d77d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/passport_header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/passport/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>