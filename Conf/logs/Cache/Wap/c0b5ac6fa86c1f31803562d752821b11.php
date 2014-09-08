<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all" />

<title>实用工具</title>
        <style>
            img{width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
<body class="portrait">
    <div class="header">
        <div class="logo">
            <img src="<?php echo RES;?>/car/tool-box-preferences.png" width="120" height="100" alt="" style="width:auto!important;max-width:250px;"/>
        </div>
        <div style="clear: both;"></div>
    </div>
    <span class="gradient_h_wbw"></span>
    <div class="top">
        <div id="roundabout_container" class="relative">

        </div>
        <span class="gradient_h_wbw"></span>

    </div>
        <div class="main" style="padding-top: 10px;">
            <ul class="list_ul_common">
<?php if(is_array($utility)): $i = 0; $__LIST__ = $utility;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['url'] != '') OR ($vo['name'] != '')): ?><li>
                    <a href="<?php echo ($vo['url']); ?>">
                        <div>
                            <p><?php echo ($vo['name']); ?></p>
                        </div>
                    </a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                </ul>
        </div>

        

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
    </body>
</html>