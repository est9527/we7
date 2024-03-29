<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<title>城市定位</title>
<style type="text/css">
    body {margin:0px; background:#f8f8f8;width:100%;}
    .city_top{width: 100%;height: 44px;background:#fff;text-align: center;line-height: 44px;color: #333333;}
    .city_top i{color: #fdac27;font-size: 18px;margin-right: 5px;}
    .accordion {
        width: 100%;
        max-width: 480px;
        margin: 3px auto;
        background: #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .accordion .link {
        cursor: pointer;
        display: block;
        padding: 15px 15px 15px 14px;
        color: #4D4D4D;
        font-size: 14px;
        font-weight: 700;
        border-bottom: 1px solid #CCC;
        position: relative;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .accordion li:last-child .link {
        border-bottom: 0;
    }

    .accordion li i {
        position: absolute;
        top: 16px;
        left: 12px;
        font-size: 18px;
        color: #595959;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .accordion li i.fa-chevron-down {
        right: 12px;
        left: auto;
        font-size: 16px;
    }

    .accordion li.open .link {
        color: #b63b4d;
    }

    .accordion li.open i {
        color: #b63b4d;
    }
    .accordion li.open i.fa-chevron-down {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    /**
     * Submenu
     -----------------------------*/
    .submenu {
        padding: 5px;
        font-size: 14px;
        text-align: center;
        height: auto;
        overflow: scroll;
    }

    .submenu li {
        display: inline;
    }

    .submenu a {
        color: #333;
        text-decoration: none;
        /*padding: 13px;*/
        width: 25%;
        line-height: 30px;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
        float: left;
        width:25%;
    /*float: left;width: 25%;text-align: center;height: 34px;line-height: 34px;text-decoration: none;font-size: 15px;color: #666666;*/
    }

    .submenu a:hover {
        background: green;
        color: #FFF;
    }
</style>
<div class="city_top">
    <i class="fa fa-map-marker"></i>当前城市—<span id="current_city">北京</span>
</div>
<div>
    <ul id="accordion" class="accordion">
        <li class="open">
            <div class="link">热门城市<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu" style="display:block;">
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">北京</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">上海</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">重庆</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">深圳</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">广州</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">杭州</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">南京</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">苏州</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">天津</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">成都</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">南昌</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">三亚</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">青岛</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">厦门</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">西安</a></li>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)">长沙</a></li>
            </ul>
        </li>
        <!--<p style="color: green;font-size: 14px;padding: 5px 15px 0px;font-weight: bold;">其他城市<span style="float:right">*按首字母筛选</span></p>-->
        <?php  if(is_array($new_address)) { foreach($new_address as $index => $item) { ?>
        <li>
            <div class="link"><?php  echo $index?><i class="fa fa-chevron-down"></i></div>
            <ul class="submenu" style="display:none;">
                <?php  if(is_array($item)) { foreach($item as $k => $city) { ?>
                <li><a href="javascript:void (0);" onclick="chooseCity(this)"><?php  echo $city['name'];?></a></li>
                <?php  } } ?>
            </ul>
        </li>
        <?php  } } ?>
    </ul>
</div>
<!--<div class="city_content">
    <?php  if(is_array($new_address)) { foreach($new_address as $index => $item) { ?>
    <div class='province'>
        <h3 class="geo_title"><?php  echo $index;?></h3>
        <div class="geo_cities">
            <?php  if(is_array($item)) { foreach($item as $k => $city) { ?>
            <a class="city" href="javascript:void(0)" onclick="chooseCity(this)"><?php  echo $city['name'];?></a>
            <?php  } } ?>
        </div>
    </div>
    <?php  } } ?>
</div>-->
<script language="javascript">
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                    $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });

    var current_city = document.getElementById('current_city');
    current_city.innerHTML = localStorage.getItem('current_city');
    function chooseCity(obj) {
        var chooseCity = obj.innerHTML.replace(/(^\s*)|(\s*$)/g,"");
        require(['core'], function (core) {
            core.tip.confirm('<div style="text-align: center;line-height: 28px;padding: 0;">您选择的城市是:<span style="color: red;">'+chooseCity+"</span><br/>确定切换到该城市吗?</div>", function () {
                var chooseCity = obj.innerHTML.replace(/(^\s*)|(\s*$)/g,"");
                current_city.innerHTML = chooseCity;
                localStorage.setItem('current_city', chooseCity);
                location.href = "<?php  echo $this->createMobileUrl('shop/index')?>";
            });
        });
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
