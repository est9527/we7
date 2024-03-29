<?php
 if (!defined('IN_IA')){
    exit('Access Denied');
}
global $_W, $_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
$openid = m('user') -> getOpenid();
$member = m('member') -> getMember($openid);
$shop = m('common') -> getSysset('shop');
$uniacid = $_W['uniacid'];
$cateid = intval($_GPC['cate']);
$cate = pdo_fetch('select id,name from ' . tablename('manor_shop_creditshop_category') . ' where id=:id and uniacid=:uniacid limit 1', array(':id' => $cateid, ':uniacid' => $uniacid));
if ($_W['isajax']){
    if ($operation == 'display'){
        $pindex = max(1, intval($_GPC['page']));
        $psize = 10;
        $condition = ' and uniacid = :uniacid and status=1 and deleted=0';
        $params = array(':uniacid' => $_W['uniacid'],);
        if(!empty($cate)){
            $condition .= ' and cate=' . $cateid;
        }
        $sql = 'SELECT COUNT(*) FROM ' . tablename('manor_shop_creditshop_goods') . " where 1 {$condition}";
        $total = pdo_fetchcolumn($sql, $params);
        $list = array();
        if (!empty($total)){
            $sql = 'SELECT id,title,thumb,subtitle,type,credit,money FROM ' . tablename('manor_shop_creditshop_goods') . '  where 1 ' . $condition . ' ORDER BY displayorder desc,id DESC LIMIT ' . ($pindex - 1) * $psize . ',' . $psize;
            $list = pdo_fetchall($sql, $params);
            $list = set_medias($list, 'thumb');
            foreach ($list as & $row){
                if ($row['credit'] > 0 & $row['money'] > 0){
                    $row['acttype'] = 0;
                }else if ($row['credit'] > 0){
                    $row['acttype'] = 1;
                }else if ($goods['money'] > 0){
                    $row['acttype'] = 2;
                }
            }
            unset($row);
        }
        show_json(1, array('total' => $total, 'list' => $list, 'pagesize' => $psize));
    }
}
$_W['shopshare'] = array('title' => $this -> set['share_title'], 'imgUrl' => tomedia($this -> set['share_icon']), 'link' => $this -> createPluginMobileUrl('creditshop'), 'desc' => $this -> set['share_desc']);
$com = p('commission');
if ($com){
    $cset = $com -> getSet();
    if (!empty($cset)){
        if ($member['isagent'] == 1 && $member['status'] == 1){
            $_W['shopshare']['link'] = $this -> createPluginMobileUrl('creditshop', array('mid' => $member['id']));
            if (empty($cset['become_reg']) && (empty($member['realname']) || empty($member['mobile']))){
                $trigger = true;
            }
        }else if (!empty($_GPC['mid'])){
            $_W['shopshare']['link'] = $this -> createPluginMobileUrl('creditshop/detail', array('mid' => $_GPC['mid']));
        }
    }
}
include $this -> template('lists');
