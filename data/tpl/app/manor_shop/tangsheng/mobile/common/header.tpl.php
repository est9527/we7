<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../addons/manor_shop/static/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
        <script language="javascript" src="../addons/manor_shop/static/js/require.js"></script>
        <script language="javascript" src="../addons/manor_shop/static/js/app/config.js?v=3"></script>
        <script language="javascript" src="../addons/manor_shop/static/js/dist/jquery-1.11.1.min.js"></script>
        <script language="javascript" src="../addons/manor_shop/static/js/dist/jquery.gcjs.js"></script>
        <link rel="stylesheet" type="text/css" href="../addons/manor_shop/template/mobile/tangsheng/static/css/style.css">
    </head>
    <body>
<script language="javascript">
    require(['core','tpl'],function(core,tpl){
        core.init({
            siteUrl: "<?php  echo $_W['siteroot'];?>",
            baseUrl: "<?php  echo $this->createMobileUrl('ROUTES')?>"
        });
    })
</script>
<?php  if(is_array($this->header) && $this->header && $this->header['url']) { ?>
<script>
    location.href = "<?php  echo $this->header['url']?>";
</script>
<!-- <div class="follow_topbar">
    <div class="close">x</div>
    <div class="headimg"><img src="<?php  echo $this->header['icon']?>"></div>
    <div class="info" style="margin-left: 10px">
        <div class="i"><?php  echo $this->header['text']?></div>
        <div class="i">关注公众号，享专属服务</div>
    </div>
    <div class="sub" onclick="location.href='<?php  echo $this->header['url']?>'">立即关注</div>
</div>-->
<!-- <div style='height:44px;'>&nbsp;</div>-->
<?php  } ?>
