<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 23:23:03
         compiled from "plugin\custom_logo\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:155695894a140e721f6-49779464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73d2718a02369aa13ca589bbf06db20eda50a0c' => 
    array (
      0 => 'plugin\\custom_logo\\template\\resource.lbi',
      1 => 1478155408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155695894a140e721f6-49779464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5894a140e7530',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894a140e7530')) {function content_5894a140e7530($_smarty_tpl) {?><script>
$(function(){
    $("#logoImg").show();
	plugins_init_function.push(custom_logo_init);
})
function custom_logo_init(data){
	var logoObj = data.custom_logo;
	if(logoObj){
		if(logoObj.useCustomLogo)
        	$('.vrshow_container_logo img').attr('src',logoObj.logoImgPath);
        if(logoObj.logoLink)
            $('.vrshow_container_logo img').attr('onclick','javascript:window.open("'+logoObj.logoLink+'")');
        
    }
}
</script>

<?php }} ?>