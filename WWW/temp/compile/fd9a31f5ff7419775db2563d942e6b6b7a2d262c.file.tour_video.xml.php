<?php /* Smarty version Smarty-3.1.7, created on 2017-02-21 19:35:04
         compiled from "D:/phpStudy/WWW/tour\tour_video.xml" */ ?>
<?php /*%%SmartyHeaderCode:931058985bf3adf572-67622008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9a31f5ff7419775db2563d942e6b6b7a2d262c' => 
    array (
      0 => 'D:/phpStudy/WWW/tour\\tour_video.xml',
      1 => 1477118778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '931058985bf3adf572-67622008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58985bf3b77c8',
  'variables' => 
  array (
    'project' => 0,
    'cdn_host' => 0,
    'v' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58985bf3b77c8')) {function content_58985bf3b77c8($_smarty_tpl) {?><krpano version="1.19" title="<?php echo $_smarty_tpl->tpl_vars['project']->value['vname'];?>
">

	<security cors="anonymous">
		<crossdomainxml url="<?php echo $_smarty_tpl->tpl_vars['cdn_host']->value;?>
crossdomain.xml" />
		<allowdomain domain="<?php echo $_smarty_tpl->tpl_vars['cdn_host']->value;?>
" />
	</security>
	
	<action name="startup" autorun="onstart">
		
		if(device.panovideosupport == false,
			error('Sorry, but panoramic videos are not supported by your current browser!');
		  ,
			loadscene(videopano);
		  );
		  jscall(calc('update_title("<?php echo $_smarty_tpl->tpl_vars['project']->value['vname'];?>
")'));
	</action>

	<scene name="videopano" title="VR视频">

		<!-- include the videoplayer interface / skin (with VR support) -->
		<!--固定路径-->
		<include url="<?php echo $_smarty_tpl->tpl_vars['cdn_host']->value;?>
video/skin/videointerface.xml" />

		<!-- include the videoplayer plugin -->
		<plugin name="video"
		        url.html5="%SWFPATH%/plugins/videoplayer.js"
		        url.flash="%SWFPATH%/plugins/videoplayer.swf"
		        pausedonstart="true"
		        loop="false"
		        volume="1.0"
		        onloaded="add_video_sources();"
		        />

		<!-- use the videoplayer plugin as panoramic image source -->
		<image>
			<sphere url="plugin:video" />
		</image>

		<!-- set the default view -->
		<view hlookat="0" vlookat="0" fovtype="DFOV" fov="130" fovmin="75" fovmax="150" distortion="0.0" />
        
		<!--include url="/test.php" /-->
		<!-- add the video sources and play the video -->
		<action name="add_video_sources">			
			if(device.desktop || device.chrome,
				start_play(),
				calc(layer[skin_error_msg].html, '提示: '+'为了更好的观看体验，建议您使用谷歌浏览器打开，点此继续播放');
				set(layer[skin_error].ondown, start_play());	
				set(layer[skin_error].visible, true);	
			 	);
			
	    </action>
		<action name="start_play">  
			set(layer[skin_error].ondown, '');   	        
			<?php if (!empty($_smarty_tpl->tpl_vars['project']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project']->value['videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					videointerface_addsource('<?php if (empty($_smarty_tpl->tpl_vars['v']->value['progressive'])){?>标清<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['progressive'];?>
<?php }?>', "<?php echo $_smarty_tpl->tpl_vars['_lang']->value['cdn_host'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['location'];?>
");
				<?php } ?>
				videointerface_play('<?php if (empty($_smarty_tpl->tpl_vars['project']->value['videos'][0]['progressive'])){?>标清<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['project']->value['videos'][0]['progressive'];?>
<?php }?>');
			<?php }?>
		</action>
	</scene>
    
	<contextmenu fullscreen="false" versioninfo="false">
        <item name="logo" caption="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
" separator="true" onclick="openurl('<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
')" devices="html5"/>
	</contextmenu>

</krpano>
<?php }} ?>