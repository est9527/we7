<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-base', TEMPLATE_INCLUDEPATH)) : (include template('common/header-base', TEMPLATE_INCLUDEPATH));?>
<style>
    .gw-container .navbar-nav .tile {background: cornflowerblue !important;}
    .gw-container .navbar-nav .tile.active {background: #3578f1 !important;}
    @media (min-width: 768px){.height60{height: 65px}}
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px;
    }
   /* .navbar-inverse {
        background-color: darkslategrey;
        border-color: #080808;
    }*/
    /*.navbar-inverse .navbar-nav>li>a {
        color: #f5f5f5;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
        color: #f5f5f5;
    }*/
    @media (min-width: 768px){.navbar-nav>li>a {
        padding-top: 23px;
        padding-bottom: 15px;
    }}
    /*.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
        color: #fff;
        background-color: cadetblue;
    }
    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
        color: #f5f5f5;
        background-color: cadetblue;
    }*/
</style>
<div class="gw-container " style="background: #f5f5f5 !important;">
	<?php  if(!empty($_W['uniacid']) && !defined('IN_MESSAGE')) { ?>
	<div class="navbar navbar-inverse navbar-static-top height60 animated fadeInDown" role="navigation" style="z-index:1001; margin-bottom:0;">
		<div class="container-fluid height60">
			<ul class="nav navbar-nav height60">
				<li class="active height60"><a href="./?refresh" class="height60"><i class="fa fa-cogs"></i>系统管理</a></li>
				<li class="height60"><a class="height60" href="<?php  echo url('home/welcome/platform');?>" target="_blank"><i class="fa fa-share"></i>继续管理公众号（<?php  echo $_W['account']['name'];?>）</a></li>
				<?php  if(IMS_FAMILY != 'x') { ?>
				<!--<li><a href="http://bbs.fresh.tangshengmanor.com"><i class="fa fa-comment"></i>唐盛庄园论坛</a></li>
				<li><a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODAwMzEzOV8xNzEwOTZfNDAwMDgyODUwMl8yXw"><i class="fa fa-suitcase"></i>联系客服</a></li>-->
				<?php  } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right height60">
				<li class="dropdown topbar-notice">
					<a type="button" data-toggle="dropdown">
						<i class="fa fa-bell"></i>
						<span class="badge" id="notice-total">0</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dLabel">
						<div class="topbar-notice-panel">
							<div class="topbar-notice-arrow"></div>
							<div class="topbar-notice-head">
								<span>系统公告</span>
								<a href="<?php  echo url('article/notice-show/list');?>" class="pull-right">更多公告>></a>
							</div>
							<div class="topbar-notice-body">
								<ul id="notice-container"></ul>
							</div>
						</div>
					</div>
				</li>
				<li class="dropdown height60">
					<a  href="javascript:;" class="dropdown-toggle height60" data-toggle="dropdown"  style="display:block; max-width:150px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><i class="fa fa-group"></i><?php  echo $_W['account']['name'];?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php  if($_W['role'] != 'operator') { ?>
						<li><a href="<?php  echo url('account/post', array('uniacid' => $_W['uniacid']));?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 编辑当前账号资料</a></li>
						<?php  } ?>
						<li><a href="<?php  echo url('account/display');?>" target="_blank"><i class="fa fa-cogs fa-fw"></i> 管理其它公众号</a></li>
						<li><a href="<?php  echo url('utility/emulator');?>" target="_blank"><i class="fa fa-mobile fa-fw"></i> 模拟测试</a></li>
					</ul>
				</li>
				<li class="dropdown height60">
					<a href="javascript:;" class="dropdown-toggle height60" data-toggle="dropdown" style="display:block; max-width:185px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><i class="fa fa-user"></i><?php  echo $_W['user']['username'];?> (<?php  if($_W['role'] == 'founder') { ?>系统管理员<?php  } else if($_W['role'] == 'manager') { ?>公众号管理员<?php  } else { ?>公众号操作员<?php  } ?>) <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php  echo url('user/profile/profile');?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 我的账号</a></li>
						<?php  if($_W['role'] == 'founder') { ?>
						<li class="divider"></li>
						<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i> 系统选项</a></li>
						<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i> 自动更新</a></li>
						<li><a href="<?php  echo url('system/updatecache');?>" target="_blank"><i class="fa fa-refresh fa-fw"></i> 更新缓存</a></li>
						<li class="divider"></li>
						<?php  } ?>
						<li><a href="<?php  echo url('user/logout');?>"><i class="fa fa-sign-out fa-fw"></i> 退出系统</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<?php  } ?>

	<div class="navbar navbar-static-top animated fadeIn" role="navigation" style="padding-top:20px;">
		<div class="container-fluid">
            <a class="navbar-brand gw-logo" href="./?refresh" <?php  if(!empty($_W['setting']['copyright']['blogo'])) { ?>style="background:url('<?php  echo tomedia($_W['setting']['copyright']['blogo']);?>') no-repeat;"<?php  } ?>></a>
			<!--<a class="navbar-brand gw-logo" href="./?refresh" style="color: #fff;font-size: 40px;background: none !important;text-align: left;line-height: 60px;">唐盛庄园系统</a>-->
			<ul class="nav navbar-nav pull-right" style="padding-top:10px;">
				<a href="<?php  echo url('account/display');?>" class="tile img-rounded<?php  if($controller == 'account') { ?> active<?php  } ?>">
					<i class="fa fa-comments"></i>
					<span>公众号管理</span>
				</a>
				<a href="<?php  echo url('system/welcome');?>" class="tile img-rounded<?php  if($controller == 'system') { ?> active<?php  } ?>">
					<i class="fa fa-sitemap"></i>
					<span>系统</span>
				</a>
				<?php  if($_W['uid']) { ?>
				<a href="<?php  echo url('user/logout');?>" class="tile img-rounded">
					<i class="fa fa-sign-out"></i>
					<span>退出</span>
				</a>
				<?php  } ?>
			</ul>
		</div>
	</div>
	
	<div class="container-fluid animated fadeIn">
		<?php  if(defined('IN_MESSAGE')) { ?>
		<div>
			<div class="jumbotron clearfix alert alert-<?php  echo $label;?>">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						<i class="fa fa-5x fa-<?php  if($label=='success') { ?>check-circle<?php  } ?><?php  if($label=='danger') { ?>times-circle<?php  } ?><?php  if($label=='info') { ?>info-circle<?php  } ?><?php  if($label=='warning') { ?>exclamation-triangle<?php  } ?>"></i>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
						<?php  if(is_array($msg)) { ?>
							<h2>MYSQL 错误：</h2>
							<p><?php  echo cutstr($msg['sql'], 300, 1);?></p>
							<p><b><?php  echo $msg['error']['0'];?> <?php  echo $msg['error']['1'];?>：</b><?php  echo $msg['error']['2'];?></p>
						<?php  } else { ?>
						<h2><?php  echo $caption;?></h2>
						<p><?php  echo $msg;?></p>
						<?php  } ?>
						<?php  if($redirect) { ?>
						<p><a href="<?php  echo $redirect;?>" class="alert-link">如果你的浏览器没有自动跳转，请点击此链接</a></p>
						<script type="text/javascript">
							setTimeout(function () {
								location.href = "<?php  echo $redirect;?>";
							}, 3000);
						</script>
						<?php  } else { ?>
							<p>[<a href="javascript:history.go(-1);" class="alert-link">点击这里返回上一页</a>] &nbsp; [<a href="./?refresh" class="alert-link">首页</a>]</p>
						<?php  } ?>
					</div>
				</div>
			</div>
		<?php  } else { ?>
		<div class="well">
		<?php  } ?>
<script>
	var h = document.documentElement.clientHeight;
	$(".gw-container").css('min-height',h);
</script>