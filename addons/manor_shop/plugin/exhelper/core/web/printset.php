<?php

if (!defined('IN_IA')) {
	exit('Access Denied');
}
global $_W, $_GPC;
////check_shop_auth
$op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
if ($op == 'display') {
	ca('exhelper.printset.view');
	$printset = pdo_fetch('SELECT * FROM ' . tablename('manor_shop_exhelper_sys') . ' WHERE uniacid=:uniacid limit 1', array(':uniacid' => $_W['uniacid']));
}
if ($_W['ispost']) {
	ca('exhelper.printset.save');
	$port = $_GPC['port'];
	$ip = 'localhost';
	if (empty($printset)) {
		pdo_insert('manor_shop_exhelper_sys', array('port' => $port, 'ip' => $ip, 'uniacid' => $_W['uniacid']));
	} else {
		pdo_update('manor_shop_exhelper_sys', array('port' => $port, 'ip' => $ip), array('uniacid' => $_W['uniacid']));
	}
	message('保存成功！', $this->createPluginWebUrl('exhelper/printset', array('op' => 'display')), 'success');
}
load()->func('tpl');
include $this->template('printset');