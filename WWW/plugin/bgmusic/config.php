<?php
/*
 * Krpano100 背景音乐插件
 * ============================================================================
 * 技术支持：2015-2099 成都世纪川翔科技有限公司
 * 官网地址: http://www.krpano100.com
 * ----------------------------------------------------------------------------
 * $Author: wanghao 932625974#qq.com $
 * $Id: bind.php 28028 2016-06-19Z yuanjiang $
*/

$plugins['bgmusic'] = array(
		'plugin_name' => '背景音乐',
		"enable" => 1,    			
		"edit_container" => "setting_group",
		"edit_sort" => 1,
		"edit_resource"=>1,
		"view_container" => "right_top",
		"view_sort" => 2,
		"xml" => 'plugin.xml', 
	);


?>