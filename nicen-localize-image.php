<?php
/**
Plugin Name: nicen-localize-image
Plugin URI:https://nicen_make.cn/2893.html
Description: 用于本地化文章的外部图片，启用之后会给新增两个功能：编辑器增加在前端本地化外部图片的插件和文章保存时在后端自动本地化外部图片的功能（区别在于一个是发布前本地化和发布后本地化）
Version: 1.2.0
Author: 友人a丶
Author URI: https://nicen_make.cn
Text Domain: nicen-localize-image
License: GPLv2 or later
 */

namespace nicen\plugin;

define('nicen_make_PATH',plugin_dir_path(__FILE__)); //插件目录
define('nicen_make_URL',plugin_dir_url(__FILE__)); //插件URL
date_default_timezone_set('PRC');

include_once nicen_make_PATH . '/admin/preload.php'; //加载插件配置
include_once nicen_make_PATH . '/config.php'; //加载插件配置
include_once nicen_make_PATH . '/admin/install.php'; //安装时触发
register_activation_hook(__FILE__ , "nicen_make_install" );//初始化插件

/*导入类库*/
include_once nicen_make_PATH . '/class/log.php'; //错误日志封装类
include_once nicen_make_PATH . '/class/local.php'; //图片本地化封装类

/*导入模块*/
include_once nicen_make_PATH . '/admin/common.php'; //公共变量和方法
include_once nicen_make_PATH . '/admin/when-post.php'; //文章保存时触发的钩子
include_once nicen_make_PATH . '/response/response.php'; //接口响应

/*
 * 只在后台才触发
 * */
/*
 * 只在后台才触发
 * */
if(is_admin()) {
	include_once nicen_make_PATH . '/admin/load.php'; //加载后台插件资源
	include_once nicen_make_PATH . '/admin/form.php'; //加载后台设置表单
	include_once nicen_make_PATH . '/admin/setting.php';//渲染表单
	include_once nicen_make_PATH . '/admin/initialize.php'; //初始化插件功能
}


/*
 * 错误信息调试
 *
	add_action('activated_plugin','save_error');
	function save_error(){
		update_option('install_error',ob_get_contents());
	}
	echo get_option('install_error');
	update_option('install_error',"");
*/

