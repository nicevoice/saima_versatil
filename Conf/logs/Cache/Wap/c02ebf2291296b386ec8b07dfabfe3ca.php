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
           <?php echo ($model[0]['brand_serise']); ?>
        </div>
        <!-- <div style="clear: both;"></div>-->
    </div>
    <span class="gradient_h_wbw"></span>
<!--- 车型列表 begin -->
        <div class="main" style="padding-top: 10px;">
        <!--Horizontal Tab-->
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo['name']); ?> &nbsp;&nbsp;&nbsp;&nbsp;RMB <?php echo ($vo['dealer_price']); ?>万元 起 </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="resp-tabs-container">
            <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>

                <img alt="<?php echo ($vo['name']); ?>" style="width:100%;max-height:640px;" src="<?php echo ($vo['pic_url']); ?>" data-touchable="touchable"/>
            <div class="main" style="padding-top: 10px;">
            <ul class="car_detail">
<?php if($vo['panorama_id'] != 0): ?><div style="margin:5px;border: 1px solid #ccc;line-height:35px;text-indent:10px;border-radius:5px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#eee));-webkit-box-shadow: 0 1px 1px #fff;">
                    <a href="<?php echo U('Panorama/item',array('token'=>$token,'id'=>$vo['panorama_id'],'wecha_id'=>$wecha_id,'sgssz'=>'mp.weixin.qq.com'));?>" style="color:#666;display:block;">内部设计：360全景看车</a>
                </div><?php endif; ?>
                <table>
                    <tbody><tr>
                        <td>指导价：</td>
                        <td><strong><?php echo ($vo['guide_price']); ?></strong> 万</td>
                    </tr>
                    <tr>
                        <td>经销商报价：</td>
                        <td><strong><?php echo ($vo['dealer_price']); ?></strong> 万</td>
                    </tr>
                    <tr>
                        <td>排量：</td>
                        <td><?php echo ($vo['emission']); ?> <?php if($carmodel['type'] == 1): ?>L<?php else: ?>T<?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>年款：</td>
                        <td><?php echo ($vo['model_year']); ?></td>
                    </tr>
<?php if($vo['stalls'] != 0): ?><tr>
                        <td>档位：</td>
                        <td><?php echo ($vo['stalls']); ?>档</td>
                    </tr><?php endif; ?>
                    <tr>
                        <td>变速箱：</td>
                        <td>
                        <?php if($vo['box'] == 1): ?>自动变速箱(AT)
                        <?php elseif($vo['box'] == 2): ?>
                        手动变速箱(MT)
                        <?php elseif($vo['box'] == 3): ?>
                        手自一体
                        <?php elseif($vo['box'] == 4): ?>
                        无级变速箱(CVT)
                        <?php elseif($vo['box'] == 5): ?>
                        无级变速(VDT)
                        <?php elseif($vo['box'] == 6): ?>
                        双离合变速箱(DCT)
                        <?php elseif($vo['box'] == 7): ?>
                        序列变速箱(AMT)<?php endif; ?>
                        </td>
                    </tr>
                </tbody></table>
                <li class="box group_btn">
                    <div><a href="<?php echo U('Car/salers',array('token'=>$token,'wecha_id'=>$wecha_id,'sid'=>$vo['id'],'bid'=>$vo['brand_id'],'getlist'=>1,'title'=>$title));?>" class="gray">联系销售</a></div>
                    <div><a href="<?php echo U('Car/CarReserveBook',array('token'=>$token,'wecha_id'=>$wecha_id,'sid'=>$vo['id'],'bid'=>$vo['brand_id'],'getlist'=>1,'title'=>$title,'addtype'=>'drive'));?>">预约试驾</a></div>
                </li>
                <li><br /><br /><br /></li>
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