<?php
 global $_W, $_GPC;

$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
$set = $this -> getSet();
$leveltype = intval($set['leveltype']);
if ($operation == 'display'){
    ca('commission.level.view');
    $default = array('id' => 'default', 'levelname' => empty($set['levelname'])?'默认等级':$set['levelname'], 'commission1' => $set['commission1'], 'commission2' => $set['commission2'], 'commission3' => $set['commission3']);
    $others = pdo_fetchall('SELECT * FROM ' . tablename('manor_shop_commission_level') . " WHERE uniacid = '{$_W['uniacid']}' ORDER BY commission1 asc");
    $list = array_merge(array($default), $others);
}elseif ($operation == 'post'){
    $id = trim($_GPC['id']);
    if(empty($id)){
        ca('commission.level.add');
    }else{
        ca('commission.level.view|commission.level.edit');
    }
    if($id == 'default'){
        $level = array('id' => 'default', 'levelname' => empty($set['levelname'])?'默认等级':$set['levelname'], 'commission1' => $set['commission1'], 'commission2' => $set['commission2'], 'commission3' => $set['commission3']);
    }else{
        $level = pdo_fetch('SELECT * FROM ' . tablename('manor_shop_commission_level') . ' WHERE id=:id and uniacid=:uniacid limit 1', array(':id' => intval($id), ':uniacid' => $_W['uniacid']));
    }
    if (checksubmit('submit')){
        if (empty($_GPC['levelname'])){
            message('抱歉，请输入分类名称！');
        }
        $data = array('uniacid' => $_W['uniacid'], 'levelname' => trim($_GPC['levelname']), 'commission1' => trim($_GPC['commission1']), 'commission2' => trim($_GPC['commission2']), 'commission3' => trim($_GPC['commission3']), 'commissionmoney' => $_GPC['commissionmoney'], 'ordermoney' => $_GPC['ordermoney'], 'ordercount' => intval($_GPC['ordercount']), 'downcount' => intval($_GPC['downcount']),);
        if (!empty($id)){
            if($id == 'default'){
                $updatecontent = "<br/>等级名称: {$set['levelname']}->{$data['levelname']}" . "<br/>一级佣金比例: {$set['commission1']}->{$data['commission1']}" . "<br/>二级佣金比例: {$set['commission2']}->{$data['commission2']}" . "<br/>三级佣金比例: {$set['commission3']}->{$data['commission3']}";
                $set['levelname'] = $data['levelname'];
                $set['commission1'] = $data['commission1'];
                $set['commission2'] = $data['commission2'];
                $set['commission3'] = $data['commission3'];
                $this -> updateSet($set);
                plog('commission.level.edit', '修改分销商默认等级' . $updatecontent);
            }else{
                $updatecontent = "<br/>等级名称: {$level['levelname']}->{$data['levelname']}" . "<br/>一级佣金比例: {$level['commission1']}->{$data['commission1']}" . "<br/>二级佣金比例: {$level['commission2']}->{$data['commission2']}" . "<br/>三级佣金比例: {$level['commission3']}->{$data['commission3']}";
                pdo_update('manor_shop_commission_level', $data, array('id' => $id, 'uniacid' => $_W['uniacid']));
                plog('commission.level.edit', "修改分销商等级 ID: {$id}" . $updatecontent);
            }
        }else{
            pdo_insert('manor_shop_commission_level', $data);
            $id = pdo_insertid();
            plog('commission.level.add', "添加分销商等级 ID: {$id}");
        }
        message('更新等级成功！', $this -> createPluginWebUrl('commission/level', array('op' => 'display')), 'success');
    }
}elseif ($operation == 'delete'){
    ca('commission.level.delete');
    $id = intval($_GPC['id']);
    $level = pdo_fetch('SELECT id,levelname FROM ' . tablename('manor_shop_commission_level') . " WHERE id = '$id'");
    if (empty($level)){
        message('抱歉，等级不存在或是已经被删除！', $this -> createPluginWebUrl('commission/level', array('op' => 'display')), 'error');
    }
    pdo_delete('manor_shop_commission_level', array('id' => $id, 'uniacid' => $_W['uniacid']));
    plog('commission.level.delete', "删除分销商等级 ID: {$id} 等级名称: {$level['levelname']}");
    message('等级删除成功！', $this -> createPluginWebUrl('commission/level', array('op' => 'display')), 'success');
}
load() -> func('tpl');
include $this -> template('level');
