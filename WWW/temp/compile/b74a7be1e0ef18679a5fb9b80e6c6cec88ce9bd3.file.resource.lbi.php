<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:23:03
         compiled from "plugin\showuser\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:7825894a140f1c922-37539481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74a7be1e0ef18679a5fb9b80e6c6cec88ce9bd3' => 
    array (
      0 => 'plugin\\showuser\\template\\resource.lbi',
      1 => 1476095720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7825894a140f1c922-37539481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a140f2054',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a140f2054')) {function content_5894a140f2054($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showuser_init);
})
function showuser_init(data){
	if(data.hideuser_flag=='1'){
        $("#authorDiv").hide();
    }else{
    	$("#authorDiv").show();
    }
}
</script><?php }} ?>