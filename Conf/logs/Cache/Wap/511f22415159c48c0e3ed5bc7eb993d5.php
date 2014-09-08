<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ><head>
        <meta charset="utf-8">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all">
<script type="text/javascript" src="<?php echo RES;?>/car/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/jquery_easing.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/com_clanmo_gallery_min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/swipe.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/Tabs/css/easy-responsive-tabs.css" media="all">
<script type="text/javascript" src="<?php echo RES;?>/car/Tabs/js/easyResponsiveTabs.js"></script>

<title>全部车型－品牌</title>
        <style>
            .main img{width:100%!important;}
            .logohead{
                padding:5px;
                text-align: center;
            }
        </style>
    <meta content="clickberry-extension-here">
    </head>
    <body onselectstart="return true;" ondragstart="return false;" class="portrait">



    <div class="header">
        <div class="logohead">
            <h1>品牌列表</h1>
        </div>
        <div style="clear: both;"></div>
    </div>
    <span class="gradient_h_wbw"></span>

        <div class="main" style="padding-top: 10px;">

             <div id="horizontalTab">
            <ul class="resp-tabs-list">
            <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($vo['logo']); ?>" width="140" height="29" alt="" style="width:auto!important;max-width:180px;"> <?php echo ($vo['name']); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="resp-tabs-container">
             <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
                    <div style="margin:5px;border: 1px solid #ccc;line-height:35px;text-indent:10px;border-radius:5px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#eee));-webkit-box-shadow: 0 1px 1px #fff;">
                    <a href="<?php echo U('Car/carseries',array('token'=>$token,'wecha_id'=>$wecha_id,'bid'=>$vo['id'],'title'=>$vo['name']));?>" style="color:#666;display:block;text-align: center">查看车系</a>
                    </div>
                    <p style="padding:15px;">

                    <?php echo (trim(html_entity_decode($vo['info']))); ?>
                    </p><br />
                    <?php if($vo['www'] != ''): ?><div style="margin:5px;border: 1px solid #ccc;line-height:35px;text-indent:10px;border-radius:5px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#eee));-webkit-box-shadow: 0 1px 1px #fff;">
                    <a href="<?php echo ($vo['www']); ?>" style="color:#666;display:block;text-align: center"><?php echo ($vo['name']); ?> 官网</a>
                    </div><?php endif; ?>

                    </p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        </div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'accordion', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });
    });
</script>
<!-- end -->

 <p><br /><br /><br /></p>
       

    <span class="copyright" >
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>

<script type="text/javascript">
window.shareData = {
            "moduleName":"Car",
            "moduleID":"0",
            "imgUrl": "",
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Car/index',array('token'=>$token));?>",
            "tTitle": "微汽车",
            "tContent": "微汽车"
        };
</script>
<?php echo ($shareScript); ?>
<div mark="stat_code" style="width:0px; height:0px; display:none;"></div>

</body></html>