<?php
/*
 * Krpano100 oss工厂类
 * ============================================================================
 * 技术支持：2015-2099 成都世纪川翔科技有限公司
 * 官网地址: http://www.krpano100.com
 * ----------------------------------------------------------------------------
 * $Author: wanghao 932625974#qq.com $
 * $Id: index.php 28028 2016-03-09Z wanghao $
*/
if(!defined('IN_T'))
{
   die('hacking attempt');
}
require_once __DIR__ ."/../../config/config.php";
require_once 'autoload.php';
use OSS\OssClient;
class Oss_Factory 
{
	private static $ossClient;
	private static $ossMts;
	public static function getOssClient(){
		if (empty($ossClient)) {
			$ossClient = new OssClient($GLOBALS['_lang']['oss_config']['access_id'], $GLOBALS['_lang']['oss_config']['access_secret'], $GLOBALS['_lang']['oss_config']['internal_url']);
		}
		return $ossClient;
	}

	public static function getOssMts(){
		if(empty($ossMts)){
			require_once 'cls_oss_mts.php';
			$ossMts = new Oss_mts($GLOBALS['_lang']['oss_config']['access_id'], $GLOBALS['_lang']['oss_config']['access_secret']);
		}
		return $ossMts;
	}
}

?>