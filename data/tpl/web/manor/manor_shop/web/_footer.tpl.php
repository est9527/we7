<?php defined('IN_IA') or exit('Access Denied');?> <script language='javascript'>
		require(['bootstrap'], function ($) {
			$('.btn,.tip').each(function(){
				
				if( $(this).closest('td').css('position')=='relative'){
					return true;
				}
				$(this).hover(function () {
					$(this).tooltip('show');
				}, function () {
					$(this).tooltip('hide');
				});
			})
			
		});
                   $('.js-clip').each(function(){
			util.clip(this, $(this).attr('data-url'));
		});
	$(function(){
		$.ajax({
			url: "<?php  echo $this->createWebUrl('runtasks')?>",
			cache:false
		});
	});
</script>
<script type="text/javascript">
    require(['bootstrap']);
    <?php  if($_W['isfounder'] && !defined('IN_MESSAGE')) { ?>
    function check_manor_shop_upgrade() {
  
        require(['util'], function (util) {
            if (util.cookie.get('checkeweishopupgrade_sys')) {
                return;
            }
            $.post('<?php  echo $this->createWebUrl("sysset/upgrade",array("op"=>"check"))?>', function (ret) {
          
                ret = eval("(" + ret + ")");
                
                if (ret && ret.result == '1') { 
                    if(ret.filecount>0){
                        var html = '<div id="ewei-shop-upgrade-tips" class="upgrade-tips" style="top:50px;left:0;position:fixed"><a href="<?php  echo $this->createWebUrl("sysset/upgrade")?>"><?php  echo $this->module["title"]?>检测到新版本 ' + ret.version;
                        html+=',请尽快更新！</a><span class="tips-close" style="background:#ff6600;" onclick="check_manor_shop_upgrade_hide();"><i class="fa fa-times-circle"></i></span></div>';
                        $('body').prepend(html);
                   }
                }
            });
        });
    }

    function check_manor_shop_upgrade_hide() {
        require(['util'], function (util) {
            util.cookie.set('checkeweishopupgrade_sys', 1, 3600);
            $('#ewei-shop-upgrade-tips').hide();
        });
    }
    $(function () {
        check_manor_shop_upgrade();
    });
    <?php  } ?>
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer-base', TEMPLATE_INCLUDEPATH)) : (include template('common/footer-base', TEMPLATE_INCLUDEPATH));?>