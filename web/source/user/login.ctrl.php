<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */
defined('IN_IA') or exit('Access Denied');
define('IN_GW', true);
if(checksubmit()) {
	_login($_GPC['referer']);
}
$setting = $_W['setting'];
template('user/login');

function _login($forward = '') {
	global $_GPC, $_W;
	load()->model('user');
	$member = array();
	$username = trim($_GPC['username']);
	pdo_query('DELETE FROM'.tablename('users_failed_login'). ' WHERE lastupdate < :timestamp', array(':timestamp' => TIMESTAMP-300));
	$failed = pdo_get('users_failed_login', array('username' => $username, 'ip' => CLIENT_IP));
	if ($failed['count'] >= 5) {
		message('输入密码错误次数超过5次，请在5分钟后再登录',referer(), 'info');
	}
	if (!empty($_W['setting']['copyright']['verifycode'])) {
		$verify = trim($_GPC['verify']);
		if(empty($verify)) {
			message('请输入验证码');
		}
		$result = checkcaptcha($verify);
		if (empty($result)) {
			message('输入验证码错误');
		}
	}
	if(empty($username)) {
		message('请输入要登录的用户名');
	}
	$member['username'] = $username;
	$member['password'] = $_GPC['password'];
	if(empty($member['password'])) {
		message('请输入密码');
	}
	$record = user_single($member);
	if(!empty($record)) {
		if($record['status'] == 1) {
			message('您的账号正在审核或是已经被系统禁止，请联系网站管理员解决！');
		}
		$founders = explode(',', $_W['config']['setting']['founder']);
		$_W['isfounder'] = in_array($record['uid'], $founders);
		if (!empty($_W['siteclose']) && empty($_W['isfounder'])) {
			message('站点已关闭，关闭原因：' . $_W['setting']['copyright']['reason']);
		}
		$cookie = array();
		$cookie['uid'] = $record['uid'];
		$cookie['lastvisit'] = $record['lastvisit'];
		$cookie['lastip'] = $record['lastip'];
		$cookie['hash'] = md5($record['password'] . $record['salt']);
		$session = base64_encode(json_encode($cookie));
		isetcookie('__session', $session, !empty($_GPC['rember']) ? 7 * 86400 : 0, true);
		$status = array();
		$status['uid'] = $record['uid'];
		$status['lastvisit'] = TIMESTAMP;
		$status['lastip'] = CLIENT_IP;
		user_update($status);
				if($record['type'] == ACCOUNT_OPERATE_CLERK) {
			header('Location:' . url('account/switch', array('uniacid' => $record['uniacid'])));
			die;
		}
		if(empty($forward)) {
			$forward = $_GPC['forward'];
		}
		if(empty($forward)) {
			if($cookie['uid'] == 1) {
				$uniaccounts = pdo_fetchall("SELECT uniacid FROM " . tablename('account') . " WHERE isdeleted=0", array(), 'uniacid');
				if($uniaccounts) {
					$unians = array_column($uniaccounts, 'uniacid');
				} else {
					$unians = '';
				}
				$rand_uniacid = array_rand($unians);
				$forward = './index.php?c=account&a=switch&uniacid='.$unians[$rand_uniacid];
			} else {
				$forward = './index.php?c=account&a=display';
			}
		}
		if ($record['uid'] != $_GPC['__uid']) {
			isetcookie('__uniacid', '', -7 * 86400);
			isetcookie('__uid', '', -7 * 86400);
		}
		pdo_delete('users_failed_login', array('id' => $failed['id']));
		message("欢迎回来，{$record['username']}。", $forward);
	} else {
		if (empty($failed)) {
			pdo_insert('users_failed_login', array('ip' => CLIENT_IP, 'username' => $username, 'count' => '1', 'lastupdate' => TIMESTAMP));
		} else {
			pdo_update('users_failed_login', array('count' => $failed['count'] + 1, 'lastupdate' => TIMESTAMP), array('id' => $failed['id']));
		}
		message('登录失败，请检查您输入的用户名和密码！');
	}
}

