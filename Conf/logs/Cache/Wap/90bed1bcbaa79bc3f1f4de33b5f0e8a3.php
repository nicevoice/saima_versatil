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
<script type="text/javascript" src="<?php echo RES;?>/car/js/jquery152_min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/jquery_easing.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/com_clanmo_gallery_min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/swipe.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/Tabs/css/easy-responsive-tabs.css" media="all">
<script type="text/javascript" src="<?php echo RES;?>/car/Tabs/js/easyResponsiveTabs.js"></script>

<title><?php echo ($title); ?>-车型－车系</title>
        <style>
            img{width:100%!important;}
        </style>
    <meta content="clickberry-extension-here">
    </head>
    <body onselectstart="return true;" ondragstart="return false;" class="portrait">


    <div class="header">
        <div class="logo">
           <?php echo ($title); ?> <img src="<?php echo ($logo); ?>"width="213" height="29" alt="" style="width:auto!important;max-width:213px;">
        </div>
        <!-- <div style="clear: both;"></div>-->
    </div>
    <span class="gradient_h_wbw"></span>

<!-- 车系列表 begin -->
<!--- 车型列表 begin -->
        <div class="main" style="padding-top: 10px;">
        <!--Horizontal Tab-->
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <?php if(is_array($series)): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo['shortname']); ?> </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="resp-tabs-container">
            <?php if(is_array($series)): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>

                <img alt="<?php echo ($vo['name']); ?>" style="width:100%;max-height:400px;" src="<?php echo ($vo['picture']); ?>" data-touchable="touchable"/>
            <div class="main" style="padding-top: 10px;padding-bottom: 10px;">
                    <?php echo (html_entity_decode($vo['info'])); ?>
           </div>
            <div class="main" style="padding-top: 10px;">
            <ul class="car_detail">

                <li class="box group_btn">
                    <div><a href="<?php echo U('Car/smodelList',array('token'=>$token,'wecha_id'=>$wecha_id,'sid'=>$vo['id'],'bid'=>$vo['brand_id'],'getlist'=>1,'title'=>$title));?>" class="gray" style="width:200px;"><?php echo (preg_replace('/^[0-9]*?@/','',$vo['brand'])); ?> <?php echo ($vo['name']); ?></a></div>

                </li>
            </ul>
        </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        </div>

<!-- 车型详情 begin -->
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
 <p><br /><br /><br /><br /></p>


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
                    <div mark="stat_code" style="width:0px; height:0px; display:none;">
                    </div>

</body></html>