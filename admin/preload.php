<?php
/*
* @author 友人a丶
* @date 2022/8/27
* 预加载数据
*/


const NICEN_VERSION='1.2.0'; //插件版本
/*
 * 定时任务接口
 * */
$crontab = site_url() . '/?nicen_crontab=1&private=' . get_option( "nicen_make_plugin_private" );
/*
 * 获取自动发布相关信息
 * */
function getAutoInfo() {

	$count_posts = wp_count_posts();
	if ( $count_posts ) {
		$draft_posts = $count_posts->draft;
	} else {
		$draft_posts = 0;
	}

	$last=get_option( 'nicen_last_auto_publish'); //上一次的运行日志

	return "当前草稿总数：" . $draft_posts . '篇，上一次自动发布运行时间为：' . (empty($last)?'暂未运行':$last);
}
