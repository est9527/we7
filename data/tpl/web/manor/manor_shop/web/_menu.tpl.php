<?php defined('IN_IA') or exit('Access Denied');?><style type='text/css'>
    .topmenu { position: relative; width:100%;float:left;background:#efefef;margin-bottom:20px;}
    .topmenu ul li a { color:#000}
    .topmenu .dropdown-menu li a { color:#666}
    .topmenu ul li { content:'|'}
	.splitter { text-align: center;background:#ccc;color:#039702;padding-top:10px; padding-bottom:10px;font-size:12px;}
	.splitter{background:#fff;}
    @media (min-width: 768px){.height60{height: 65px}}
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px;
    }
    @media (min-width: 768px){.navbar-nav>li>a {
        padding-top: 23px;
        padding-bottom: 22px;
        z-index: 999;
    }}
</style>
<div class='topmenu'>
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php  echo url('home/welcome/ext',array('m'=>'manor_shop'))?>"><i class='fa fa-home'></i> <?php  echo $this->module['title']?></a> 
        </li> 
        <?php if(cv('shop')) { ?>
        <li class="dropdown">
            <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-shopping-cart'></i> 商城管理 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <?php if(cv('shop.goods')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/goods')?>">商品管理</a></li><?php  } ?>
                <?php if(cv('shop.activity')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/activity')?>">活动管理</a></li><?php  } ?>
                 <?php if(cv('shop.navigation')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/navigation')?>">导航管理</a></li><?php  } ?>
                 <?php if(cv('shop.live_video')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/live_video')?>">直播管理</a></li><?php  } ?>
                <?php if(cv('shop.category')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/category')?>">分类管理</a></li><?php  } ?>
                <?php if(cv('shop.dispatch')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/dispatch')?>">配送方式</a></li><?php  } ?>
                <?php if(cv('shop.adv')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/adv')?>">幻灯片管理</a></li><?php  } ?>
                <?php if(cv('shop.notice')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/notice')?>">公告管理</a></li><?php  } ?>
                <?php if(cv('shop.comment')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/comment')?>">评价管理</a></li><?php  } ?>
                <?php if(cv('shop.refundaddress')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/refundaddress')?>">退货地址</a></li><?php  } ?>
                <?php if(cv('verify.store.view')) { ?><li><a href="<?php  echo $this->createPluginWebUrl('verify/store')?>">门店管理</a></li><?php  } ?>
                <?php if(cv('shop.feedback.view')) { ?><li><a href="<?php  echo $this->createWebUrl('shop/feedback')?>">反馈管理</a></li><?php  } ?>
            </ul>
        </li>
        <?php  } ?>
        <?php if(cv('member')) { ?>
         <li class="dropdown">
            <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-user'></i> 会员管理 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                 <?php if(cv('member.member')) { ?><li><a href="<?php  echo $this->createWebUrl('member/list')?>">会员管理</a></li><?php  } ?>
                 <?php if(cv('member.level')) { ?><li><a href="<?php  echo $this->createWebUrl('member/level')?>">会员等级</a></li><?php  } ?>
                 <?php if(cv('member.group')) { ?><li><a href="<?php  echo $this->createWebUrl('member/group')?>">会员分组</a></li><?php  } ?>
            </ul>
        </li> 
        <?php  } ?>
        <?php if(cv('order')) { ?>
        <li>
            <a href='javascript;:' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-file-text-o'></i> 订单管理 <i class="fa fa-angle-down"></i></a>
             <ul class="dropdown-menu">
                <?php if(cv('order.view.status0|order.view.status1|order.view.status2|order.view.status3|order.view.status4|order.view.status_1')) { ?>
                <li><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display'))?>">全部订单</a></li>
                <?php  } ?>
                <?php if(cv('order.view.status0')) { ?><li><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 0))?>">待付款</a></li><?php  } ?>
                <?php if(cv('order.view.status1')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 1))?>">待发货</a></li><?php  } ?>
                <?php if(cv('order.view.status2')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 2))?>">待收货</a></li><?php  } ?>
                <?php if(cv('order.view.status3')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 3))?>">已完成</a></li><?php  } ?>
                <?php if(cv('order.view.status_1')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => -1))?>">已关闭</a></li><?php  } ?>
                <?php if(cv('order.view.status4')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 4))?>">退款申请</a></li><?php  } ?>
                <?php if(cv('order.view.status5')) { ?><li ><a href="<?php  echo $this->createWebUrl('order', array('op' => 'display', 'status' => 5))?>">已退款</a></li><?php  } ?>
            </ul>
        </li>
        <?php  } ?>
          <?php if(cv('finance')) { ?>
         <li class="dropdown">
            <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-money'></i> 财务管理 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                 <?php if(cv('finance.recharge')) { ?><li><a href="<?php  echo $this->createWebUrl('finance/log',array('type'=>0))?>">充值记录</a></li><?php  } ?>
                 <?php if(cv('finance.withdraw')) { ?><li><a href="<?php  echo $this->createWebUrl('finance/log',array('type'=>1))?>">余额提现</a></li><?php  } ?>
                 <?php if(cv('finance.downloadbill')) { ?><li><a href="<?php  echo $this->createWebUrl('finance/downloadbill')?>">下载对账单</a></li><?php  } ?>
                 
            </ul>
        </li> 
        <?php  } ?> 
        
        <?php if(cv('statistics')) { ?>
        <li class="dropdown">
            <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-bar-chart-o '></i> 数据统计 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <?php if(cv('statistics.view.sale')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/sale')?>">销售统计</a></li><?php  } ?>
                <?php if(cv('statistics.view.sale_analysis')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/sale_analysis')?>">销售指标</a></li><?php  } ?>
                <?php if(cv('statistics.view.order')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/order')?>">订单统计</a></li><?php  } ?>
                <?php if(cv('statistics.view.goods')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/goods')?>">商品销售明细</a></li><?php  } ?>
                <?php if(cv('statistics.view.goods_rank')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/goods_rank')?>">商品销售排行</a></li><?php  } ?>
                <?php if(cv('statistics.view.goods_trans')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/goods_trans')?>">商品销售转化率</a></li><?php  } ?>
                <?php if(cv('statistics.view.member_cost')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/member_cost')?>">会员消费排行</a></li><?php  } ?>
                <?php if(cv('statistics.view.member_increase')) { ?><li><a href="<?php  echo $this->createWebUrl('statistics/member_increase')?>">会员增长趋势</a></li><?php  } ?>
	       <?php  if(p('commission')) { ?><?php if(cv('commission.increase')) { ?><li><a href="<?php  echo $this->createPluginWebUrl('commission/increase')?>">分销商增长趋势</a></li><?php  } ?><?php  } ?>
            </ul>
        </li>
        <?php  } ?>
           
        <?php  $plugins = m('plugin')->getAll()?>
        <li class="dropdown">
           <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-cubes'></i> 插件管理 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <?php  if(is_array($plugins)) { foreach($plugins as $plugin) { ?>
                <?php if(cp($plugin['identity'])) { ?>
		   <?php  if($plugin['identity']=='system') { ?>
			<?php  continue;?>
		   <?php  } ?>
                     <li><a href="<?php  echo $this->createWebUrl('plugin',array('p'=>$plugin['identity']))?>"><?php  echo $plugin['name'];?></a></li>
                <?php  } ?>
                <?php  } } ?>
				
		<?php  if($_W['isfounder']) { ?> 
                  <li class='splitter'>----以下超级管理员可见----</li>	     
                  <?php  if($_W['isfounder']) { ?> 
                      <?php  if(is_array($plugins)) { foreach($plugins as $plugin) { ?>
			<?php if(cp($plugin['identity'])) { ?>
			   <?php  if($plugin['identity']!='system') { ?>
				<?php  continue;?>
			   <?php  } ?>
			<li><a href="<?php  echo $this->createWebUrl('plugin',array('p'=>$plugin['identity']))?>"><?php  echo $plugin['name'];?></a></li>
		          <?php  } ?>
		 <?php  } } ?>
                  <?php  } ?>
				  <?php  } ?>
				  
            </ul>
        </li>
          <?php if(cv('sysset')) { ?>
         <li class="dropdown">
            <a href='javascript:;' class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-cog'></i> 系统设置 <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                  <?php if(cv('sysset.view.shop')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'shop'))?>">商城设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.follow')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'follow'))?>">引导及分享设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.notice')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'notice'))?>">模板消息设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.trade')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'trade'))?>">交易设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.pay')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'pay'))?>">支付方式</a></li><?php  } ?>
                  <?php if(cv('sysset.view.template')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'template'))?>">模板设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.member')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'member'))?>">会员设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.category')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'category'))?>">分类层级设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.contact')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'contact'))?>">联系方式设置</a></li><?php  } ?>
                  <?php if(cv('sysset.view.activity')) { ?><li><a href="<?php  echo $this->createWebUrl('sysset',array('op'=>'activity', 'pp'=>'haier'))?>">活动设置</a></li><?php  } ?>

                  <?php  if($_W['isfounder']) { ?> 
                  <li class='splitter'>----以下超级管理员可见----</li>
                  <li><a href="<?php  echo $this->createPluginWebUrl('perm/setting')?>">插件信息设置</a></li>
                  <li><a href="<?php  echo $this->createPluginWebUrl('perm/plugins')?>">公众号插件权限设置</a></li>
                  <li><a href="<?php  echo $this->createPluginWebUrl('perm/set')?>">插件分权开关设置</a></li>
                  <!-- <li><a href="<?php  echo $this->createWebUrl('auth')?>">授权管理</a></li>-->
                  <li><a href="./index.php?c=system&a=database&do=database" target="_blank">数据库维护中心</a></li>
                  <?php  } ?>
            </ul>
        </li>
        <?php  } ?>
    </ul>
</div>
