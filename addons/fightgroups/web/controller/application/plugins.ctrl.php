<?php 
/**
 * [MicroEngine Mall] Copyright (c) 2014 WE7.CC
 * MicroEngine Mall is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */

defined('IN_IA') or exit('Access Denied');

$ops = array('list');
$op_names = array('插件列表');
foreach($ops as$key=>$value){
	permissions('do', 'ac', 'op', 'application', 'plugins', $ops[$key], '应用与营销', '插件列表', $op_names[$key]);
}
$op = in_array($op, $ops) ? $op : 'list';

if ($op == 'list') {
	$_W['page']['title'] = '应用和营销  - 应用列表';
	
	include wl_template('application/plugins_list');
}
