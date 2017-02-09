<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<title><?php  echo $goods['title'];?></title>
<script language="javascript" src="../addons/manor_shop/template/mobile/tangsheng/static/js/zquery.fly.min.js"></script>
<style type="text/css">
body {margin:0px; background:#fff; font-family:'微软雅黑'; -moz-appearance:none; -webkit-appearance: none;padding-top: 40px;box-sizing:border-box;height: auto;}
ul,li {padding:0px; margin:0px;}
.good_topbar { width:100%;position:fixed; top:0px; height:40px;z-index: 8;line-height:35px;text-align: center;}
.good_topbar .nav{font-size: 16px;color: #525252;padding: 0 5px;text-decoration: none;display: inline-block;line-height: 40px;margin: 0 5px;}
.good_topbar .nav.navon{font-weight: bold;border-bottom:1px solid #525252;}
.good_topbar .left { float:left; width:30px;height:30px;margin-top:5px;}
.good_topbar .right { float:right; width:40px;height:30px;margin-left:10px;margin-top:5px;}

.good_topbar .btn { width:30px;height:30px;margin-left:5px;float:left;color:#525252;line-height:30px;text-align:center; }

.good_img {height:300px; width:100%; background:#ccc;}
.good_img img {height:100%; width:100%;}
.good_info1 {height:auto; width:94%; background:#fff; padding:0px 3% 10px;}
.good_info1 .info1 {height:38px; width:100%; border-bottom:1px dashed #f3f3f3; padding:11px 0px;}
.good_info1 .info1 .name {height:38px; width:65%; border-right:1px solid #e3e3e3; float:left; font-size:14px; color:#666;}
.good_info1 .info1 .sub1 {height:38px; width:30%; background:#ff6500; float:right; border-radius:5px; color:#fff; text-align:center; line-height:38px;}
.good_info1 .info1 .sub1 i {height:16px; width:16px; margin-right:2px; background:#fff; border-radius:5px; color:#ff6500; line-height:18px; font-size:14px;}
.good_info1 .info2  {width:100%; padding:11px 0px;color:#525252;font-size: 17px;}
.good_info1 .info2_subhead{font-size: 14px;color: #525252;padding-bottom: 10px;}
.price_wrap{overflow: hidden;}
.good_info1 .price {width:40%;  font-size:24px; color:#fc1746;float: left;}
.good_info1 .price span {font-size:12px; color:#999;display: block;}
.good_info1 .price_right{width: 60%;float: left;}
.good_info1 .price_right .label{font-size:11px; color:#fc3a71;border:1px solid #fc3a71;padding:3px;float: left;margin-bottom: 8px;margin-right: 8px;min-width: 50px;text-align: center;}
.good_info1 .other {border-top:1px dashed #f3f3f3;  height:34px; width:100%;  line-height:34px; font-size:14px; color:#999;}
.good_info1 .other .left { float:left; text-align:right;}
.good_info1 .other .right { float:right; text-align:right;}
.good_info1 .other1 { border-top:1px dashed #f3f3f3; width:100%;  font-size:14px; color:#999; height:auto; overflow:hidden;line-height:22px;padding:2px 0}
.good_info1 .other1 .left { float:left; text-align:left; width:80px;}
.good_info1 .other1 .right { float:right; text-align:left; margin-left:-80px; width:100%;}
.good_info1 .other1 .right .inner { margin-left:80px;}
.fullCut{background: #f6f6f6;padding:10px 15px 0;overflow: hidden;}
.fullCut .fullCut_list{float: left;font-size: 14px;color: #525252;margin:0 10px 15px 0;line-height: 34px;}
.fullCut .fullCut_list span{border:1px solid #fc5b37;border-radius: 3px;padding:6px 18px;color: #fc5b37;margin-right: 5px;}
.good_speci {height:44px; width:94%; overflow: hidden; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2;  line-height:44px; color:#666; font-size:14px;}

.good_shop {height:130px; width:94%; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2;}
.good_shop .shop1 {height:50px; width:100%; padding:10px 0px; }
.good_shop .shop1 img {height:50px; width:50px; margin-right:10px; float:left;}
.good_shop .shop1 .shop_info {height:50px; width:auto; float:left; font-size:16px; color:#666; line-height:25px;}
.good_shop .shop1 .shop_info span {font-size:14px; color:#ccc;}
.good_shop .shop2 {height:59px; width:100%; padding:10px 0px;}
.good_shop .shop2 .sub1 {height:37px; width:47%; float:left; border:1px solid #e2e2e2; border-radius:3px; text-align:center; line-height:37px; font-size:16px; color:#999;}
.good_shop .shop2 .sub2 {height:37px; width:47%; float:right; border:1px solid #e2e2e2; border-radius:3px; text-align:center; line-height:37px; font-size:16px; color:#999;}


.good_info2 {height:auto; width:100%; background:#fff; }
.good_info2 .menu {height:40px; width:100%;}
.good_info2 .menu .nav {height:37px; width:25%;  float:left; font-size:14px; color:#666; text-align:center; line-height:37px; border-bottom:2px solid #e3e3e3;}
.good_info2 .menu .navon {color:#ff6500; height:37px; line-height:37px; border-bottom:2px solid #ff6500; }
.good_info2 .tab_con {height:auto; width:100%; overflow: hidden;min-height: 700px;}
.good_info2 .tab_con .con {height:auto; display:none;color:#333;word-break:break-all;}
.good_info2 .tab_con .con .param { padding:10px; border-bottom:1px solid #ccc}
/* .good_info2 .tab_con #con_1 img { width:100%;outline-width:0px;  vertical-align:top; display:block}*/
.good_info2 .tab_con #con_1 img { width:100%;height: 300px}


.good_bottom {height:50px; width:100%; background:#f6f6f6; position:fixed; bottom:0px; left:0px;border-top: 1px solid #ddd;}
.good_bottom span {font-size:14px; line-height:10px;}
.good_bottom .buy {height:50px; width:135px; background:#fc0241; float:right; font-size:18px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .no_total {height:50px; width:82%; background:#a0a0a0; float:right; font-size:18px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .add {height: 50px;width: 82%;background: #e84477;float: right; font-size: 18px; line-height: 50px;text-align: center;color: #fff;}
.good_bottom .cart {height:42px; width:15%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666;line-height:10px; position:relative;}
.good_bottom .cart b {height:16px; width:17px; background:#f30; border-radius:8px; position:absolute; top:2px; right:4px; font-size:12px; color:#fff; line-height:18px;}
.good_bottom .like {height:42px; width:14%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; border-right:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666; line-height:10px;}

.good_copyright {font-size:14px; line-height:14px; padding:10px 0px; text-align:center; color:#aaa; padding-bottom:60px;}

/**以下是图片轮播代码**/
.good_img{overflow:hidden;position:relative;width:100%;}
.main_image{width:100%;position:relative;top:0;left:0;width:100%;}
.main_image ul{;position:absolute;top:0;left:0;width:100%;}
.main_image li{float:left;width:100%;}
.main_image li img{width:100%;}
.main_image li a{display:block;width:100%;}
.open_detail{text-align: center;height: 40px;line-height: 40px; font-size: 14px;display: none}
div.flicking_con{position:absolute;bottom:9px;z-index:1;width:100%;height:12px;}
div.flicking_con .inner { width:100%;height:9px;text-align:center;}
div.flicking_con a{position:relative; width:9px;height:9px;background:url('../addons/manor_shop/template/mobile/default/static/images/dot.png') 0 0 no-repeat;display:inline-block;text-indent:-1000px}
div.flicking_con a.on{background-position:0 -9px}

   .comment { padding:5px; border-bottom:1px solid #ccc;overflow:hidden;}
                    .comment .info { padding:5px;height:35px;width:100%;}
                    .comment .info .head { float:left; width:30px;height:30px;}
                    .comment .info .head img { width:100%;height:100%; }
                    .comment .info .nickname { float:left;width:100%;margin-left:-30px;margin-right:-100px;height:30px;line-height:30px;overflow:hidden;}
                    .comment .info .nickname .inner { margin-left:35px;margin-right:100px;overflow:hidden; }
                    .comment .info .level { width:100px;float:right;margin-left:-100px; text-align:right;height:30px;line-height:30px;color:#ff6600}
                    .comment .info .level i {width:13px;}

                    .comment .content { overflow:hidden;color:#555;font-size:13px;padding-left:5px;}
                    .comment .time { padding:5px; color:#666;font-size:13px;padding-left:5px;}
                    .comment .imgs { overflow:hidden;padding-top:5px;padding-left:5px;}
                    .comment .imgs img { padding:1px;border:1px solid #ccc;float:left;margin-right:5px;}
                   #comment_loading { width:94%;padding:10px;color:#666;text-align: center;}
        #recommand_container  {height:auto; width:100%; background:#fff; overflow:hidden;float:left;}
    #recommand_container .good {height:auto; width:46%; padding:0px 2% 10px; float:left;}
    #recommand_container .good img {height:120px; width:100%;}
    #recommand_container .good .name {height:20px; width:100%; font-size:15px; line-height:20px; color:#666; overflow:hidden;}
    #recommand_container .good .price {height:20px; width:100%; color:#f03; font-size:14px;}
    #recommand_container .good .price span {color:#aaa; font-size:12px; text-decoration:line-through;}

.store {height:65px;  background:#fff; padding:5px; border-bottom:1px solid #eaeaea;}
.store .info .ico { float:left;  height:50px; width:30px; line-height:30px; font-size:16px; text-align:center; color:#666}
.store .info .info1 {height:54px; width:100%; float:left;margin-left:-30px;margin-right:-60px;}
.store .info .info1 .inner { margin-left:30px;margin-right:60px;overflow:hidden;}
.store .info .info1 .inner .user {height:25px; width:100%; font-size:14px; color:#333; line-height:25px;overflow:hidden;}
.store .info .info1 .inner .tel {height:20px; width:100%; font-size:13px; color:#999; line-height:20px;overflow:hidden;}
.store .info .info1 .inner .address {height:20px; width:100%; font-size:13px; color:#999; line-height:20px;overflow:hidden;}
.store .info .ico2 {height:50px; width:30px;padding-top:15px; float:right; font-size:24px; text-align:center; color:#ccc;}
.store .info .ico3 {height:50px; width:30px;padding-top:15px; float:right; font-size:24px; text-align:center; color:#ccc;}
.store_more {height:20px;  background:#fff; font-size:14px; color:#999; line-height:20px; padding:5px; border-bottom:1px solid #eaeaea; text-align: center;}

.timestate{text-align: center;color: #fc0241;font-size: 16px;padding:20px 0;}
.timestate span {color:#fff;background:#fc0241 ;font-size: 14px;padding:5px;margin: 0 5px;}
.sort_list {text-align: left;height:auto; width:135px;background:#242428; display:none; position:absolute; top:40px; right:3%; z-index:999;}
.sort_list::before{content: "";width: 0;height: 0;border:8px solid transparent;border-bottom: 8px solid #242428;position: absolute;top: -16px;right: 10px;}
.sort_list .nav {height:38px; padding-left:18px; border-bottom:1px solid #7b8086; color:#adb2b8; line-height:38px; font-size:13px;display: block;}
.sort_list .nav i{width: 25px;}
.label-free {background:#ff6801;color:#fff;padding:3px;border-radius: 5px; font-size:12px;}
.left_input_num {width: 48%;float: left;text-align: center; line-height: 50px; height: 50px;}
.left_input_num .add {width: 32px; height: 20px;  background: #e3e3e3;  color: #949393;  text-align: center;  float: left;  line-height: 20px;  position: absolute;  top: 34%;  left:50%;}
.left_input_num .reduce {width: 32px; height: 20px;  background: #e3e3e3;  color: #949393;  text-align: center;  float: left;  line-height: 20px;  position: absolute;  top: 34%;  left: 20%;}
.left_input_num input {    width: 20%;height: 40%;text-align: center;background: #e3e3e3;color: #3c3c3c;border: none;}
</style>

  <?php  if(!empty($formInfo)) { ?>
<script src="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.core-2.5.2.js" type="text/javascript"></script>
<script src="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.core-2.5.2-zh.js" type="text/javascript"></script>
<link href="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.core-2.5.2.css" rel="stylesheet" type="text/css" />
<link href="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.animation-2.5.2.css" rel="stylesheet" type="text/css" />
<script src="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.datetime-2.5.1.js" type="text/javascript"></script>
<script src="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.datetime-2.5.1-zh.js" type="text/javascript"></script>
<script src="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.android-ics-2.5.2.js" type="text/javascript"></script>
<link href="../addons/manor_shop/static/js/dist/mobiscroll/mobiscroll.android-ics-2.5.2.css" rel="stylesheet" type="text/css" />
<link href="../addons/manor_shop/template/mobile/default/static/js/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="../addons/manor_shop/template/mobile/default/static/js/star-rating.js" type="text/javascript"></script>
<script src="../addons/manor_shop/static/js/dist/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="../addons/manor_shop/static/js/dist/area/cascade.js"></script>
<?php  } ?>

<div id='container'></div>
<div id='cover'><img src='../addons/manor_shop/static/images/guide.png' style='width:100%;' /></div>

<script id='goods_info'  type='text/html'>
    <input type="hidden" id="followed" value="<%followed%>" />
    <input type="hidden" id="needfollow" value="<%goods.needfollow%>" />
    <input type="hidden" id="followurl" value="<%followurl%>" />
    <input type='hidden' id='followtip' value='<%followtip%>'/>
    <div class="good_topbar">
        <a id="nav_1" class="nav navon" onClick="tab(1)">商品</a>
        <a id="nav_2" class="nav" onClick="tab(2)">详情</a>
        <a id="nav_3" class="nav" onClick="tab(3)">评价</a>
        <div class="left">
            <div class="btn back" onclick="history.back();"><i class="fa fa-chevron-left"></i></div>
        </div>
        <div class="right">
            <!-- <div class="btn cart" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'"><i class="fa fa-shopping-cart"></i></div> -->
            <div class="btn func" onclick="menu(this)" ><i class="fa fa-ellipsis-h"></i></div>
        </div>
         <div class="sort_list">
            <div class="nav" onclick="location.href='<%shop.url%>'"><i class='fa fa-home'></i> 首页</div>
            <div class="nav" onclick="location.href='<?php  echo $this->createMobileUrl('shop/category')?>'"><i class='fa fa-list-ul'></i> 分类</div>
            <div class="nav" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'"><i class='fa fa-shopping-cart'></i> 购物车</div>
            <div class="nav" onclick="location.href='<?php  echo $this->createMobileUrl('member')?>'"><i class='fa fa-user'></i> 个人中心
            </div>
          </div>
    </div>
    <div class="good_choose_layer"></div>
    <div class="good_choose">
        <div class="info">
             <div class="left">
                 <img id="chooser_img" src='<%goods.thumb%>'/>
             </div>
             <div class="right">
                   <div class="price">￥<span id='option_price'><%goods.marketprice%></span></div>
                   <div class="stock">库存:<span id='option_stock'><%goods.total%></span>件</span> </div>
                   <div class="option">请选择规格</div>
             </div>
            <div class="close" onClick="closechoose()"><i class="fa fa-remove-o"></i></div>
        </div>
        <div class="other">
            <input type='hidden' id='optionid' value='' />
                <%each specs as spec%>
                <input type='hidden' name="optionid[]" class='optionid optionid_<%spec.id%>' value="" title="<%spec.title%>">
                <div class="spec"><%spec.title%></div>
                <div class="spec_items options_<%spec.id%>"  title="<%spec.title%>">
                      <%each spec.items as o%>
                      <div class="option option_<%spec.id%>" specid='<%spec.id%>' oid="<%o.id%>" sel='false' title='<%o.title%>' thumb='<%o.thumb%>'><%o.title%></div>
                     <%/each%>
                </div>
                <%/each%>

            <!--<span>diyform</span>-->


                <?php  if(!empty($formInfo)) { ?>
                <div id="diyform_container" >
             <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('diyform/formcss', TEMPLATE_INCLUDEPATH)) : (include template('diyform/formcss', TEMPLATE_INCLUDEPATH));?>
             <style type='text/css'>
                     .diyform_main { float:left;}
             </style>
                         <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('diyform/formfields', TEMPLATE_INCLUDEPATH)) : (include template('diyform/formfields', TEMPLATE_INCLUDEPATH));?>
                </div>
                <?php  } ?>

                <div class='number'>
                  <div class='label'>购买数量</div>
                  <div class='num'>
                            <button id='btn_minus' onclick='reduceNum()'><i class='fa fa-minus'></i></button>
                            <input type='text' id='total' value='1' />
                            <button id='btn_plus' onclick='addNum()'><i class='fa fa-plus'></i></button>
                  </div>
               </div>
        </div>
        /*<div class="close" onClick="closechoose()"><i class="fa fa-times-circle-o"></i></div>
        <div class="sub " onClick="choose2()">确认</div>*/
    </div>
    <!-- 门店原来位置-->
   <div id="buytime" class="good_speci" style="display:none"></div>


   <!--<%if goods.canbuy && goods.total!=0 && goods.timebuy=='0' && goods.userbuy=='1'  && goods.groupbuy=='1'  && goods.levelbuy=='1'%>
    <div class="good_speci" onClick="choose()">
                <span id="optiondiv">请选择商品规格及数量</span>
                <i class="fa fa-angle-right" style="float:right; line-height:44px; font-size:26px;"></i>
    </div>
     <%/if%>-->

    <!--<div class="good_shop">
        <div class="shop1" onclick="location.href='<%detail.btnurl2%>'">
        <img src='<%detail.logo%>'/>
        <div class="shop_info"><%detail.shopname%><br><span><%if detail.totaltitle!=''%><%detail.totaltitle%><%else%>全部宝贝 <%goodscount%> 个 <%/if%></span>
        </div>
        </div>
        <div class="shop2">
            <div class="sub1" onclick="location.href='<%detail.btnurl1%>'"><i class="fa fa-list"></i> <%if detail.btntext1!=''%><%detail.btntext1%><%else%>查看全部商品 <%/if%></div>
            <div class="sub2" onclick="location.href='<%detail.btnurl2%>'"> <i class="fa fa-gift" o></i> <%if detail.btntext2!=''%><%detail.btntext2%><%else%>进店逛逛<%/if%></div>
        </div>
    </div>-->
    <div class="good_info2">
        <!--<div class="menu">
            <div id="nav_1" class="nav navon" onClick="tab(1)">商品</div>
            <div id="nav_2" class="nav" onClick="tab(2)">详情</div>
            <div id="nav_3" class="nav" onClick="tab(3)">评价</div>
            <div id="nav_4" class="nav" onClick="tab(4)" style="border-right:0px; width:24%">同店推荐</div>
        </div>-->
        <div class="tab_con">
            <div class="con" id="con_1"  style='display:block'>
                <div class="good_img">
                    <%if pics.length>1%>
                    <div class="flicking_con">
                        <div class="inner">
                        <%each pics as value index %>
                        <a class="<%if index==0%>on<%/if%>" href="#@"><%index%></a>
                        <%/each%>
                        </div>
                    </div>
                    <%/if%>
                    <div class="main_image">
                        <ul>
                            <%each pics as p %>
                            <li> <img src='<%p%>'/></li>
                            <%/each%>
                        </ul>
                    </div>
                </div>
                <div class="good_info1">
                    <%if commission && goods.nocommission==0 && goods.hidecommission==0%>
                    <div class="info1">
                        <div class="name"><%if goods.issendfree==1%><span class='label label-free'>包邮</span>&nbsp;<%/if%><%goods.title%></div>
                        <div class="sub1" onclick="location.href='<?php  echo $this->createPluginMobileUrl('commission/shares',array('goodsid'=>$_GPC['id']))?>'"><i class="fa fa-cny"></i><%commission_text%></div>
                    </div>
                    <%else%>
                    <div class="info2"><%goods.title%></div>
                    <div class="info2_subhead">
                        <%goods.sub_title%>
                    </div>
                    <%/if%>
                    <div class="price_wrap">
                        <div class="price">￥<d id='marketprice'>
                                <%if goods.minprice !=goods.maxprice%>
                                <%goods.minprice%> - <%goods.maxprice%>
                                <%else%>
                                <%goods.marketprice%>
                                <%/if%>
                            </d><span id='productpricecontainer'><%if goods.productprice>0%>原价：<%/if%><s id='productprice'><%if goods.productprice>0%><%goods.productprice%><%/if%></s></span>

                            <!--<span style='float:right'><d id="stockcontainer">库存:<d id="stock"><%goods.total%></d></d> 销量:<%goods.sales%><%goods.unit%></d></span>-->
                        </div>
                        <div class="price_right">
                            <%if goods.reduce_price>0%>
                            <span class="label">直降<%goods.reduce_price%>元</span>
                            <%/if%>
                            <%if goods.isdiscount==1%>
                            <span class="label">促销</span>
                            <%/if%>
                            <%if goods.issendfree==1%>
                            <span class="label">包邮</span>
                            <%/if%>
                            <%if goods.ishot==1%>
                            <span class="label">热销</span>
                            <%/if%>
                            <%if goods.istime==1%>
                            <span class="label">秒杀</span>
                            <%/if%>
                        </div>
                    </div>
                    </div>

                <div class="fullCut">
                    <%if saleset && saleset.enoughfree=='1' && goods.is_full_cat_power == 0 %>
                    <div class="fullCut_list">
                        <%if saleset.enoughorder<=0 && goods.is_full_cat_power==0%>
                        全场包邮
                        <%else if saleset.enoughorder>0 && goods.is_full_cat_power == 0%>
                        <span>包邮</span>单笔订单 满<%saleset.enoughorder%>元
                        <%/if%>
                    </div>
                    <%/if%>
                    <!--满减-->
                    <%if goods.is_full_money == 0 && saleset.enoughs_reduce_power==1%>
                    <%if saleset && saleset.enoughs.length>0%>
                    <%each saleset.enoughs as e i%>
                    <div class="fullCut_list">
                        <% if ( saleset.enoughs.length - 1) == i%>
                        <span>满减</span>满<%e.enough%>元立减<%e.money%>元
                        <%else%>
                        <span>满减</span>满<%e.enough%>元立减<%e.money%>元
                        <%/if%>
                    </div>
                    <%/each%>
                    <%/if%>
                    <%/if%>
                </div>
                <!-- <div class="fullCut">
                  <div class="fullCut_list">
                    <span>包邮</span>满59元包邮
                  </div>
                  <div class="fullCut_list">
                    <span>满减</span>满98元立减10元
                  </div>
                  <div class="fullCut_list">
                    <span>满减</span>满180元立减30元
                  </div>
              </div>-->
                <!--门店-->
                <%if goods.isverify=='2'%>
                <div class="good_speci" onclick="showStores(this)" show="1">适用的门店
                    <i class="fa fa-angle-down" style="float:right; line-height:44px; font-size:26px;"></i>
                </div>
                <div>
                    <%each stores as store index%>
                    <%if index<=1%>
                    <div class="store" >
                        <div class="info">
                            <div class="ico"><i class="fa fa-building-o"></i></div>
                            <div class='info1'>
                                <div class='inner'>
                                    <div class="user"><%store.storename%></div>
                                    <div class="address">地址: <%store.address%></div>
                                    <div class="tel">电话: <%store.tel%></div>
                                </div>
                            </div>
                            <a href="http://api.map.baidu.com/marker?location=<%store.lat%>,<%store.lng%>&title=<%store.storename%>&name=<%store.storename%>&content=<%store.address%>&output=html"><div class="ico2"><i class='fa fa-map-marker'></i></div></a>
                            <a href="tel:<%store.tel%>"><div class="ico3" ><i class='fa fa-phone'></i></div></a>
                        </div>
                    </div>
                    <%/if%>
                    <%/each%>
                    <div id='store_more' style="display:none">
                        <%each stores as store index%>
                        <%if index>1%>
                        <div class="store" >
                            <div class="info">
                                <div class="ico"><i class="fa fa-building-o"></i></div>
                                <div class='info1'>
                                    <div class='inner'>
                                        <div class="user"><%store.storename%></div>
                                        <div class="address">地址: <%store.address%></div>
                                        <div class="tel">电话: <%store.tel%></div>
                                    </div>
                                </div>
                                <a href="http://api.map.baidu.com/marker?location=<%store.lat%>,<%store.lng%>&title=<%store.storename%>&name=<%store.storename%>&content=<%store.address%>&output=html"><div class="ico2"><i class='fa fa-map-marker'></i></div></a>
                                <a href="tel:<%store.tel%>"><div class="ico3" ><i class='fa fa-phone'></i></div></a>
                            </div>
                        </div>
                        <%/if%>
                        <%/each%>
                    </div>
                    <%if stores.length>=3%>
                    <div class="store_more" onclick="$('#store_more').show();$(this).remove()">显示更多 <i class="fa fa-angle-double-down"></i></div>
                    <%/if%>
                </div>
                <%/if%>
              <!-- 限时抢购 -->
                <div id="notbuy" class="good_speci" style="display:none"></div>

            </div>
            <div class="con" id="con_2">
               <%=goods.content%>
            </div>
            <div class="con" id="con_3" ><div id='comment_container'></div></div>
            <div class="open_detail"><i class="fa fa-chevron-down"></i> 滑动查看图文详情</div>
            <!-- <div class="con" id="con_4"><div id='recommand_container'></div></div>-->
        </div>
    </div>


    <%if goods.canbuy && goods.total!=0 && goods.timebuy=='0' && goods.userbuy=='1' && goods.groupbuy=='1'  && goods.levelbuy=='1'%>
    <div class="good_bottom">
        <div class="cart" style="background: #f6f6f6;padding-top:19px;" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'">
            <i class="fa fa-shopping-cart"></i>
            <?php  if($this->footer['cart_num']<=0) { ?>
            <b style="top:9px;display: none;" class="cart_number"></b>
            <?php  } else { ?>
            <b style="top:9px;" class="cart_number"><?php  echo $this->footer['cart_num']?></b>
            <?php  } ?>
        </div>
      <!-- <div class="left_input_num">
          <div id="btn_minus" class="reduce" onclick='reduceNum()'>-</div>
          <input value="1" id="total" class="totalNew" type="text">
          <div id="btn_plus" class="add" onclick='addNum()'>+</div>
      </div> -->
        <%if goods.canaddcart%>
            <div class="add" data-id="<%goods.id%>" onclick="add_cart(this, '<%goods.thumb%>', {left:160,top:570},{left:0,top:750})">加入购物车</div>
        <%else if goods.isverify == 2%>
        <div class="buy" onclick="choose('buy')" <%if !goods.canaddcart%><%/if%>>立即购买</div>
        <%/if%>
            <!-- <div class="buy" onclick="choose('buy')" <%if !goods.canaddcart%><%/if%>>立即购买</div>-->
        </div>
    <%else %>
    <div class="good_bottom">
        <div class="cart" style="background: #f6f6f6;padding-top:19px;" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'">
            <i class="fa fa-shopping-cart"></i>
            <?php  if($this->footer['cart_num']<=0) { ?>
            <b style="top:9px;display: none;" class="cart_number"></b>
            <?php  } else { ?>
            <b style="top:9px;" class="cart_number"><?php  echo $this->footer['cart_num']?></b>
            <?php  } ?>
        </div>
        <!-- <div class="left_input_num">
            <div id="btn_minus" class="reduce" onclick='reduceNum()'>-</div>
            <input value="1" id="total" class="totalNew" type="text">
            <div id="btn_plus" class="add" onclick='addNum()'>+</div>
        </div> -->
        <div class="no_total" onclick="alert('本商品当前无货,正在补货中')">补货中</div>
    </div>
    <%/if%>
</script>
<script id='tpl_comment' type='text/html'>
    <%each list as comment%>
    <div class='comment'>
                    <div class='info'>
                        <div class='head'><img src='<%comment.headimgurl%>' style='width:30px;height:30px;' /></div>
                        <div class='nickname'><div class='inner'><%comment.nickname%></div></div>
                        <div class='level'>
                            <%if comment.level>=1%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=2%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=3%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=4%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=5%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            </div>
                    </div>
                    <div class='content'><%comment.content%></div>
                    <%if comment.images.length>0%>
                       <div class='imgs'>
                          <%each comment.images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                    </div>
                    <%/if%>
                   <%if comment.reply_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[回复]</span><%comment.reply_content%></div>
                        <%if comment.reply_images.length>0%>
                            <div class='imgs'>
                               <%each comment.reply_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                   <%/if%>
                      <%/if%>

                     <%if comment.append_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[追加]</span><%comment.append_content%></div>
                        <%if comment.append_images.length>0%>
                            <div class='imgs'>
                               <%each comment.append_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                      <%/if%>
                     <%/if%>

                  <%if comment.append_reply_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[回复]</span><%comment.append_reply_content%></div>
                        <%if comment.append_reply_images.length>0%>
                            <div class='imgs'>
                               <%each comment.append_reply_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                      <%/if%>
                     <%/if%>
             <div class='time'><%comment.createtime%></div>
     </div>
     <%/each%>
</script>
<script id='tpl_recommand' type='text/html'>
     <%each list as g%>
    <div class="good" data-goodsid='<%g.id%>'>
        <img src='<%g.thumb%>'/>
        <div class="name"><%g.title%></div>
        <div class="price">￥<%g.marketprice%> <%if g.productprice>0 && g.marketprice!=g.productprice%><span>￥<%g.productprice%></span><%/if%></div>
    </div>
    <%/each%>
</script>

<script id="tpl_img" type="text/html">
    <div class='img' data-img='<%filename%>'>
        <img src='<%url%>' />
        <div class='minus'><i class='fa fa-minus-circle'></i></div>
    </div>
</script>

<script language="javascript">
  function showMoreActivity(){
     $('#morebtn').hide();
     $("#moreactivity").fadeIn();
 }

    var hasoption = false;
    var maxbuy = 0;
    var options = [];
    var specs = [];
    var tip = null;
    var action="";
    var alpha = 0;

    function share(){

           $('#cover').fadeIn(200).unbind('click').click(function(){
                    $(this).fadeOut(100);
          })
    }
    function menu(obj){

        if($(obj).attr('show')=='1'){
            $(obj).removeAttr('show');
            $('.sort_list').fadeOut(200);
        }else{
            $(obj).attr('show','1');
            $('.sort_list').fadeIn(200);
        }
    }
    /*$(function(){
        $(document.body).click(function(e){
           var classname = "";

            if($(e.target).get(0) ){
                classname =$(e.target).get(0).className;
            }
            if(classname!='fa fa-ellipsis-v' && classname!='btn func') {

                $('.func').removeAttr('show');
                $('.sort_list').fadeOut(200);
            }
        });
    })*/
    function showStores(obj){
        if($(obj).attr('show')=='1'){
            $(obj).next('div').slideUp(100);
            $(obj).removeAttr('show').find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
        }
        else{
            $(obj).next('div').slideDown(100);
            $(obj).attr('show','1').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
        }
    }
    require(['tpl', 'core','jquery.touchslider','swipe'], function(tpl, core) {
        window.localStorage.setItem('nav_id', 'nav_1');
        $("body").on("touchstart", function(ee) {
            //ee.preventDefault();
            startX = ee.originalEvent.changedTouches[0].pageX,
                    startY = ee.originalEvent.changedTouches[0].pageY;
        });
        $('body').on("touchend",function(ee){
            //ee.preventDefault();
            moveEndX = ee.originalEvent.changedTouches[0].pageX,
                    moveEndY = ee.originalEvent.changedTouches[0].pageY,
                    X = moveEndX - startX,
                    Y = moveEndY - startY;
            var nav_id = $('.navon').attr('id');
            if(!nav_id) {
                window.localStorage.setItem('nav_id', 'nav_1');
            } else if(nav_id == 'nav_1'){
                window.localStorage.setItem('nav_id', 'nav_2');
            } else if(nav_id == 'nav_2'){
                window.localStorage.setItem('nav_id', 'nav_3');
            } else if(nav_id == 'nav_3'){
                window.localStorage.setItem('nav_id', 'nav_1');
            } else {

            }
            /* var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            if(Math.abs(Y) >= scrollTop) {
                var _nav_id = window.localStorage.getItem('nav_id');
                console.log(_nav_id);
                if(_nav_id == 'nav_2') {
                    var go = $('.open_detail').css('display');
                    if(go == 'block') {
                        setTimeout(function () {
                            $('.open_detail').fadeOut();
                            window.localStorage.setItem('nav_id', 'nav_1');
                            tab(2);
                        }, 1000);
                    } else {
                        $('.open_detail').fadeIn();
                    }
                //console.log(scrollTop);
            }
            }*/



            nav_id = window.localStorage.getItem('nav_id');
            if(X > 80) {
                if(nav_id == 'nav_1') {
                    tab(2);
                } else if(nav_id == 'nav_2') {
                    tab(3);
                    $('#nav_3').click();
                } else if(nav_id == 'nav_3') {
                    tab(1);
                }
            } else if(X < -80) {
                if(nav_id == 'nav_1') {
                    tab(1);
                } else if(nav_id == 'nav_2') {
                    tab(2);
                } else if(nav_id == 'nav_3') {
                    tab(3);
                    $('#nav_3').click();
                }
            }
        });
      function setTimer(goods){

            setTimeHtml(goods);
            window.timer = setInterval(function(){
                setTimeHtml(goods);
            },1000);
        }
        function setTimeHtml(goods){
            var current = Math.floor(new Date().getTime()/1000);
                var ts = 0;//计算剩余的毫秒数
                var prefix = '';

                if(goods.timestate=='before'){
                    ts = goods.timestart - current;
                    prefix = "限时购开始倒计时: ";
                    if(ts<=0){
                        location.reload();
                    }
                }
                else if(goods.timestate=='after'){
                    ts = goods.timeend - current;

                    prefix = "限时购结束倒计时:  ";
                     if(ts<=0){
                        location.reload();
                    }
                }
                var dd = parseInt(ts / 60 / 60 / 24, 10);//计算剩余的天数
                var hh = parseInt(ts  / 60 / 60 % 24, 10);//计算剩余的小时数
                var mm = parseInt(ts  / 60 % 60, 10);//计算剩余的分钟数
                var ss = parseInt(ts % 60, 10);//计算剩余的秒数
                dd = checkTime(dd);
                hh = checkTime(hh);
                mm = checkTime(mm);
                ss = checkTime(ss);
                $('.timestate').html(prefix+ "<span>" + dd + "</span>天<span>" + hh + "</span>时<span>" + mm + "</span>分<span>" + ss + "</span>秒");
        }
        function checkTime(i)
            {
               if (i < 10) {
                   i = "0" + i;
                }
               return i;
            }

        core.json('shop/detail',{id:'<?php  echo $_GPC['id'];?>',mid:"<?php  echo $mid;?>"},function(json){

          tip = core.tip;
          if(json.status<=0){
              core.message('没有找到您想要的宝贝哦~',"<?php  echo $this->createMobileUrl('shop/list')?>",'error');
              return;
          }
        $(window).scroll(function(){
            //滑动到详情
            /* var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            var scrollHeight = document.body.scrollHeight;
            var clientHeight = document.body.clientHeight;
            var cha = scrollHeight - clientHeight;
            var _nav_id = window.localStorage.getItem('nav_id');
            if(scrollTop - cha>0 && _nav_id == 'nav_1') {
                var go = $('.open_detail').css('display');
                if(go == 'block') {
                    setTimeout(function () {
                        $('.open_detail').fadeOut();
                        window.localStorage.setItem('nav_id', 'nav_1');
                        tab(2);
                    }, 1000);
                } else {
                    $('.open_detail').fadeIn();
                }
            }else {
                //$('.open_detail').fadeOut();
            }*/
            var top = $(document).scrollTop() ;
           alpha = top/270 ;
           if(alpha>0.5){
               alpha = 0.5;
           }
           $('.good_topbar').css("background","rgba(237,237,237,"+ alpha + ")");
             // $('.good_topbar .btn').css("background","rgba(237,237,237,"+ (0.5-alpha) + ")");
        });
         $('body').on("touchmove",function(ee){
           var top = $(document).scrollTop() ;
           alpha = top/270 ;
           if(alpha>0.6){
               alpha = 0.6;
           }
          $('.good_topbar').css("background","rgba(237,237,237,"+ alpha + ")");
          // $('.good_topbar .btn').css("background","rgba(237,237,237,"+ (0.6-alpha) + ")");
        });

          $('#container').html(  tpl('goods_info',json.result) );

          var bh = $(document.body).height() - 50;
          $('.good_choose').css('max-height',bh);
          $('.good_choose .other').css('max-height',bh-175);

         // alert(document.body.clientWidth);
         //$('.good_img').height( document.body.clientWidth + "px");

          $('#con_2 img,#con_2 table,#con_2 div').width('100%');
           var ua = navigator.userAgent.toLowerCase();
           var isWX = ua.match(/MicroMessenger/i) == "micromessenger";
           var z = [];
           $(".main_image img").each(function() {
                z.push($(this).attr("src"));
            });
            var current;
            if (isWX) {
                $(".main_image img").click(function(e) {
                    e.preventDefault();
                    var startingIndex = $(".main_image img").index($(e.currentTarget));
                    var current = null;
                    $(".main_image img").each(function(B, A) {
                        if (B === startingIndex) {
                            current = $(A).attr("src");
                        }
                    });
                    WeixinJSBridge.invoke("imagePreview", {
                        current: current,
                        urls: z
                    });
                });
            }

              var z1 = [];
           $("#con_2 img").each(function() {
                z1.push($(this).attr("src"));
            });
            var current1;
            if (isWX) {
                $("#con_2 img").click(function(e) {
                    e.preventDefault();
                    var startingIndex = $("#con_2 img").index($(e.currentTarget));
                    var current = null;
                    $("#con_2 img").each(function(B, A) {
                        if (B === startingIndex) {
                            current1 = $(A).attr("src");
                        }
                    });

                    WeixinJSBridge.invoke("imagePreview", {
                        current: current1,
                        urls: z1
                    });
                });
            }



           document.title = json.result.goods.title;
           hasoption = json.result.options.length>0;
           goods = json.result.goods;
           maxbuy = json.result.goods.maxbuy;
           options = json.result.options;
           specs = json.result.specs;

           nothtml = "";
           timehtml = "";
           hastime = false;
            if( goods.canbuy){
                     if(goods.userbuy=='0') {
                               nothtml = "您已超出购买上限~";
                     } else {
                              if( goods.groupbuy=='0' || goods.levelbuy=='0'){
                                         nothtml="您不能购买此商品,请联系客服";
                             } else {
                                        if( goods.total==0){
                                                 nothtml="库存不足，无法购买";
                                        } else {
                                                 if( goods.istime=='1'){
                                                      if( goods.timebuy=='1'){
                                                          nothtml= "限时购活动已经结束，请下次再来~"
                                                      }else{//未开始倒计时或进行中
                                                          nothtml='<span class="timestate"></span>';
                                                          hastime = true;
                                                      }
                                                 }
                                        }
                             }

                    }
                     if( goods.istime=='1'){
                                                      if( goods.timebuy!='1'){

                                                          timehtml = '<span class="timestate"></span>';
                                                      }
                                                 }

        }else{
            nothtml = "商品已下架";
        }
        if( nothtml!=''){
            $('#notbuy').html(nothtml).show();
        }
        if( timehtml!='' && !hastime){
            $('#buytime').html(timehtml).show();
        }
        if($('.timestate').length>0) {
               if(goods.timestate!=''){
                     setTimer(goods);
               }
        }


           if(options.length>0){
             $('#productpricecontainer').html('');
           }

           $('.totalNew').blur(function(){
              var total = $(".totalNew");
    if(!total.isInt()){
         total.val("1");
                       return;
    }
                  if(parseInt(total.val())<=0){
         total.val("1");
                       return;
    }
    var stock = $("#stock").html()==''?-1:parseInt($("#stock").html());
    var num = parseInt(total.val() );
                  if(num>maxbuy && maxbuy>0){
        tip.show("您最多可购买 " + maxbuy + " 件!");
        num = maxbuy;
    }
    else if(num>stock && stock!=-1){
        tip.show("您最多可购买 " + stock + " 件");
        num = stock;
    }

    total.val(num);


           });


                    new Swipe($('.main_image')[0], {
            speed:300,
            auto:4000,
            callback: function(){

                                 $(".flicking_con  .inner  a").removeClass("on").eq(this.index).addClass("on");
        }
      });
            <?php  if(!empty($formInfo)) { ?>
            <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('diyform/common_js', TEMPLATE_INCLUDEPATH)) : (include template('diyform/common_js', TEMPLATE_INCLUDEPATH));?>
            <?php  } ?>

            $(".option").click(function() {

             var specid = $(this).attr("specid");
             var oid = $(this).attr("oid");
            $(".optionid_"+specid).val(oid);
            $(".options_" + specid + "  .option").removeClass("on").attr("sel", "false");
            $(this).addClass("on").attr("sel", "true");

             var titles='已选: ';
                 $('.spec_items').each(function(){
                                 if($(this).find('.on').length>0){
                    titles+= $(this).find('.on').attr('title')+";";
                            }
                 });

                             $('.good_choose .info .right .option').html(titles);
         var thumb = $(this).attr('thumb');
         if(thumb!=''){
             $("#chooser_img").attr('src',thumb);
         }
         else{

             $("#chooser_img").attr('src',json.result.goods.thumb);
         }
         setoptions();
            var optionid = "";
            var stock =0;
            var marketprice = 0;
            var productprice = 0;
             var ret = option_selected();

            if(ret.no==''){
                var len = options.length;
                for(var i=0;i<len;i++) {
                    var o = options[i];
                    var ids = ret.all.join("_");

                                var specarr = o.specs.split('_').sort();
                                var idsarr = ret.all.sort();




                    if(specarr.join('_') ==idsarr.join('_') ){
                        optionid = o.id;
                        stock = o.stock;
                        marketprice = o.marketprice;
                        productprice = o.productprice;
                        break;
                    }

                }

               $("#optionid").val(optionid);

                if(stock!="-1"){
                    $("#stockcontainer").html("库存:<span id='stock'>" + stock + "</span>");
                }
                else{
                  $("#stockcontainer").html("<span id='stock'></span>");
                }
                if(ret.no==''){
                    if(stock==0){
                       $('.sub').addClass('disabled').html('库存不足,无法购买');
                    }
                    else{
                     $('.sub').removeClass('disabled').html('确认');
                    }
                }
                $("#marketprice").html(marketprice);

                $("#option_price").html(marketprice);
                $("#option_stock").html(stock);

                $("#productprice").html(productprice);
                if(productprice<=0){
                $('#productpricecontainer').html("");
                }
                else{

                   $('#productpricecontainer').html("市场价￥<span id='productprice'>" + productprice + "</span>");
                }
            }
        });


                $('.like').click(function(){
                    var self = $(this);
                    require(['core'],function(core){
                       core.json('shop/favorite',{op:'set', id:'<?php  echo $_GPC['id'];?>'},function(ret){
                           if(ret.status==1){

                                if(ret.result.isfavorite){
                                   self.find('i').removeClass('fa-star-o').addClass('fa-star').css('color','#f90');
                                }
                                else{
                                   self.find('i').addClass('fa-star-o').removeClass('fa-star').css('color','#999');
                                }
                           }
                           else{
                               core.tip.show('操作失败');
                           }
                       });
                      },false,true);
                });
                var page = 1;
          function bindCommentImages(){
                var z = [];
                          $(".comment .imgs img").each(function() {
                             z.push($(this).attr("src"));
                         });
                         var current;
                         if (isWX) {
                             $(".comment .imgs  img").click(function(e) {
                                 e.preventDefault();
                                 var startingIndex = $(".comment .imgs  img").index($(e.currentTarget));
                                 var current = null;
                                 $(".comment .imgs  img").each(function(B, A) {
                                     if (B === startingIndex) {
                                         current = $(A).attr("src");
                                     }
                                 });
                                 WeixinJSBridge.invoke("imagePreview", {
                                     current: current,
                                     urls: z
                                 });
                             });
                         }
          }
                $('#nav_3').click(function(){
                    page = 1;
                     core.json('shop/util',{op:'comment', page:page,goodsid:'<?php  echo $_GPC['id'];?>'},function(json){
                         if(json.result.list.length<=0){
                             $('#comment_container').html('<div style="font-size: 13px;margin-top: 8px;width: 100%;text-align: center;">暂时没有任何评价</div>');
                             return;
                         }
                         $('#comment_container').html( tpl('tpl_comment',json.result));
                       bindCommentImages();
                            var loaded = false;
                              var stop=true;
                              $(window).scroll(function(){
                                  if(loaded){
                                      return;
                                  }
                                    totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
                                    if($(document).height() <= totalheight){

                                        if(stop==true){
                                            stop=false;
                                            $('#comment_container').append('<div id="comment_loading"><i class="fa fa-spinner fa-spin"></i> 正在加载...</div>');
                                            page++;
                                            core.json('shop/util', {op:'comment',page:page,goodsid:'<?php  echo $_GPC['id'];?>'}, function(morejson) {
                                                stop = true;
                                                $('#comment_loading').remove();
                                                $("#comment_container").append(tpl('tpl_comment', morejson.result));
                                                  bindCommentImages();
                                                if (morejson.result.list.length <morejson.result.pagesize) {

                                                    $("#comment_container").append('<div id="comment_loading">已经加载完全部评价</div>');
                                                    loaded = true;
                                                    $(window).scroll = null;
                                                    return;
                                                }
                                            },true);
                                        }
                                    }
                                });
                     });
                 });

                 $('#nav_4').click(function(){
                      core.json('shop/util',{op:'recommand'},function(json){
                         if(json.result.list.length<=0){
                             $('#recommand_container').html('暂时没有同店推荐');
                             return;
                         }
                         $('#recommand_container').html( tpl('tpl_recommand',json.result));
                         $('#recommand_container .good').click(function(){
                            location.href = core.getUrl('shop/detail',{id:$(this).data('goodsid') });
                         }).find('img').each(function(){
                             $(this).height($(this).width());
                         });

                     });
                 });
        },true);

    })
</script>
<script type="text/javascript">
    function tab(n){
        console.log(n);
        $('#con_'+n).fadeIn();
        $('#con_'+n).siblings().hide();
        $('#nav_'+n).addClass('navon');
        $('#nav_'+n).siblings().removeClass('navon');
        window.localStorage.setItem('nav_id', 'nav_'+n);
    }
        function closechoose(){
                 $('.good_choose_layer').fadeOut(100);
        $('.good_choose').fadeOut(100);
        }
    function choose(act){

                          if($('#followed').val()=='0'  && $('#needfollow').val()=='1' ){
                                require(['core'],function(core){
                                    core.tip.confirm($('#followtip').val(),function(){
                                        location.href = $('#followurl').val();
                                        return;
                                    })
                                });
                             return;
                          }
                   action = act;
                         if(!action){

                                $('.good_choose_layer').fadeIn(200);
                                          $('.good_choose_layer').unbind('click').click(function(){
                                                    $('.good_choose_layer').fadeOut(100);
                                 $('.good_choose').fadeOut(100);
                                          })
                                $('.good_choose').fadeIn(200);
                                return;
                         }
                         var specselected  = '';
  if( action=='cart'){

             $('.good_choose_layer').fadeIn(200);
                             $('.good_choose_layer').unbind('click').click(function(){
                                   closechoose();
                             })
               $('.good_choose').fadeIn(200);
               return;
             }else{
            <?php  if(!empty($formInfo)) { ?>
                 $('.good_choose_layer').fadeIn(200);
                             $('.good_choose_layer').unbind('click').click(function(){
                                   closechoose();
                             })
               $('.good_choose').fadeIn(200);
               return;
            <?php  } ?>

                $('.spec_items').each(function(){
                             var self = $(this);
                                            if( $(this).find('.on').length<=0){
                                 specselected = self.attr('title');
                                 return false;
                              }
                });
             if(specselected!='') {
               $('.good_choose_layer').fadeIn(200);
                             $('.good_choose_layer').unbind('click').click(function(){
                                   closechoose();
                             })
               $('.good_choose').fadeIn(200);
               return;
             }

         }


                      var diymode = <?php  echo intval($diymode)?>;

                      if(specselected!='' || diymode==1) {
                             if (specselected == '') {
                                 $('#goods_spec').hide();
                             }

                             $('.good_choose_layer').fadeIn(200);
                             $('.good_choose_layer').unbind('click').click(function(){
                                 closechoose();
                             })
                        $('.good_choose').fadeIn(200);
                      } else{
                          if(action=='cart'){
                                                require(['core'],function(core){

                                                                           core.json('shop/cart',{op:'add', id:'<?php  echo $_GPC['id'];?>',optionid:$('#optionid').val(),total:$('.totalNew').val()},function(ret){
                                                                                                        if(ret.status==1){
                                                                                                           core.tip.show(ret.result.message);
                                                                                                           var cartdiv = $('.cart');
                                                                                                                               if( cartdiv.find('b').length<=0){
                                                                                                                                  cartdiv.append('<b>'+ ret.result.cartcount +"</b>");
                                                                                                                               }
                                                                                                                               else {
                                                                                                                                  cartdiv.find('b').html(ret.result.cartcount);
                                                                                                                               }

                                                                                                       } else{
                                                                                                           core.message(ret.result,'','error');
                                                                                                       }
                                                                               },true,true);
                                                 });
                                    }else if(action=='buy'){
                                         location.href = "<?php  echo $this->createMobileUrl('order/confirm')?>&id=<?php  echo $_GPC['id'];?>&optionid=" +$("#optionid").val() + "&total=" + $(".totalNew").val();
                                    }

                      }
    }
        function setoptions(){
             var titles = '';
                 if(hasoption){

             titles+='已选: ';
                 $('.spec_items').each(function(){
                    titles+= $(this).find('.on').attr('title')+";";
                 });
                 }
                                             titles+='数量:' + $('.totalNew').val();
                 $("#optiondiv").html(titles);
        }
    function choose2(direct,close){

         require(['core'],function(core){

            if(close){
                closechoose();
                return;
            }
        if(!direct){
            if($('.sub').hasClass('disabled')){
               return;
            }
            else{
                setoptions();
            }


        } else {
                            action = "";
                      }

                var specselected  = '';

        $('.spec_items').each(function(){

                   var self = $(this);
         if( $(this).find('.on').length<=0){
                                          specselected = self.attr('title');
                                          return false;
                      }
                               });
                                if( specselected!=''){
                                      require(['core'],function(core){
                                         core.tip.show('请选择' + specselected) ;
                                      });
                                      return;
                      }


             action = 'cart';
        if(action=='cart'){
                 var data = {};

                 <?php  if(!empty($formInfo)) { ?>

                    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('diyform/common_js_data', TEMPLATE_INCLUDEPATH)) : (include template('diyform/common_js_data', TEMPLATE_INCLUDEPATH));?>

                         data = {
                        'diyformid': "<?php  echo $goods['diyformid'];?>",
                        'diydata':diydata
                    };
                <?php  } ?>
               core.json('shop/cart',{op:'add', id:'<?php  echo $_GPC['id'];?>',optionid:$('#optionid').val(),total:$('.totalNew').val(),diyformdata:data},function(ret){
                    if(ret.status==1){
                       var url_1 = "javascript:history.back();";
                       var url_2 = "<?php  echo $this->createMobileUrl('shop/cart')?>";
                        core.tip.alert2('加入购物车成功', '继续逛逛', '去购物车', url_1, url_2);
                       var cartdiv = $('.cart');
                                           if( cartdiv.find('b').length<=0){
                                              cartdiv.append('<b>'+ ret.result.cartcount +"</b>");
                                           }
                                           else {
                                              cartdiv.find('b').html(ret.result.cartcount);
                                           } closechoose();

                   } else{
                       core.message(ret.result,'','error');
                   }
                   },true,true);

            }else if(action=='buy'){

               <?php  if(!empty($formInfo)) { ?>

                <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('diyform/common_js_data', TEMPLATE_INCLUDEPATH)) : (include template('diyform/common_js_data', TEMPLATE_INCLUDEPATH));?>

                var data ={
                    'op': 'create',
                    'id': <?php  echo $_GPC['id'];?>,
                    'diydata': diydata
                };

                require(['core'],function(core){
                    core.json('shop/detail', data, function(create_json) {
                        if (create_json.status == 1) {
                            location.href = "<?php  echo $this->createMobileUrl('order/confirm')?>&id=<?php  echo $_GPC['id'];?>&optionid=" +$("#optionid").val() + "&total=" + $(".totalNew").val()+ "&gdid="+create_json.result.goods_data_id;
                        } else {
                            core.tip.show("提交失败!")
                        }

                        return false;

                    }, true, true);
                })

                <?php  } else { ?>
                    location.href = "<?php  echo $this->createMobileUrl('order/confirm')?>&id=<?php  echo $_GPC['id'];?>&optionid=" +$("#optionid").val() + "&total=" + $(".totalNew").val();
                <?php  } ?>

                    } else {
                             closechoose();
        }
  });
    }
  function addNum(){
    var total = $(".totalNew");
    if(!total.isInt()){
        total.val("1");
    }
    var stock = $("#stock").html()==''?-1:parseInt($("#stock").html());
    var num = parseInt(total.val() ) + 1;
                  if(num>maxbuy && maxbuy>0){
        tip.show("您最多可购买 " + maxbuy + " 件!");
        num = maxbuy;
    }
    else if(num>stock && stock!=-1){
        tip.show("您最多可购买 " + stock + " 件");
        num = stock;
    }
    total.val(num);
}
function reduceNum(){
    var total = $(".totalNew");
    if(!total.isInt()){
        total.val("1");
    }
    var num = parseInt( total.val() );
    if(num-1<=0){
        return;
    }
    num--;
    total.val(num);
}

    function option_selected(){
    var ret= {
        no: "",
        all: []
    };
    if(!hasoption){
        return ret;
    }
            $(".optionid").each(function(){
                ret.all.push($(this).val());
                if($(this).val()==''){
                    ret.no = $(this).attr("title");
                    return false;
                }
    })
    return ret;
}
</script>
<?php  $show_copyright=true;$hide_footer=1?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>