<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/peak-3.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/home-menu.css" media="all" />
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/jQuery.js"></script>
<title>关于我们</title>
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/style.css" media="all">
<!-- <script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script> -->
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/waphome.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/swipe.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/zepto.js"></script>

        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="小猪cms、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />
        <meta name="Description" content="小猪cms，国内最大的微信公众智能服务平台，小猪cms八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->

        <style>
            /*img{width:100%!important;}*/
           /* a{color:#000;text-decoration:none; }
            a:hover {color:#24ac32;text-decoration:underline;}
            a:visited { color: #000;text-decoration:none; }*/
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">


<div class="body" style="padding-bottom:60px;">

    <div class="top_bar footer_bar">
        </div>
        <section class="news_article">
        <header>
            <h3 style="font-size:14px;"><?php echo ($about['name']); ?></h3>

            <p><img src="<?php echo ($about['logourl']); ?>" alt=""  style="width:100%!important;"></p>
        </header>
        <article>
            <p>
                  <a style="text" href="http://chabus.duapp.com/mapapi.php?lng=<?php echo ($about['longitude']); ?>&lat=<?php echo ($about['latitude']); ?>&title=我们的位置&info=温馨提示：楼盘大概位置">

    <span color="#2c2c2c">地址：<br/> <?php echo ($about['address']); ?></span>


   <img  src="http://api.map.baidu.com/staticimage?width=600&height=235&center=&markers=|<?php echo ($about['longitude']); ?>,<?php echo ($about['latitude']); ?>&zoom=10&markerStyles=s,A,0xff0000"  height="235" style="max-height: 250px;max-width: 390px;"/>
      </a>

<p>
    <strong><span style="color:#009900;font-size:16px;">
    免费热线：<a href="tel:<?php echo ($about['tel']); ?>"><?php echo ($about['tel']); ?></a></span></strong><br />
    地址：<?php echo ($about['address']); ?><br />
    公司简介：<br />
<p style="width:100%!important;">
 <?php echo (trim(html_entity_decode($about['intro']))); ?>
</p></P>
        </article>
    </section>

<div style="padding-bottom:0!important;">
    <a href="javascript:window.scrollTo(0,0);" style="font-size:12px;margin:5px auto;display:block;color:#fff;text-align:center;line-height:35px;background:#333;margin-bottom:-10px;">返回顶部</a>
</div></div>

<style>
    #navList_box ol>a{
        margin-top:38px;
    }

</style>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/black/font-awesome.css?v=2013122318" media="all" />
<p><br/><br/><br/><br/></p>
<section>
            <div style="visibility: visible;" id="navList_box" class="box_swipe">
                <ul style="list-style: none; width: 1280px; transition: 0ms; -webkit-transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                <a href="<?php echo U('Estate/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>">
                    <span class="icon-home"></span>
                       <img src="<?php echo ($estatindex['picurl1']); ?>" alt="楼盘简介">
                        <div>楼盘简介</div>
                </a>
                <a href="<?php echo U('Estate/album',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                    <span class="icon-picture"></span>
                    <img src="<?php echo ($estatindex['picurl2']); ?>" alt="">
                    <div>楼盘画册</div>
                            </a>
                <a href="<?php echo U('Estate/housetype',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                        <span class="icon-building"></span>
                        <img src="" alt="户型全景">
                        <div>户型全景</div>
                </a>
                <a href="<?php echo U('Estate/impress',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                    <span class="icon-check"></span>
                        <img src="" alt="专家点评">
                        <div>点评•印象</div>
                </a>
                </li>
                    <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="<?php echo U('Estate/news',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                        <span class="icon-rss-sign"></span>
                        <img src="" alt="新闻动态">
                        <div>新闻动态</div>
                    </a>
                    <a href="<?php echo U('Reservation/index',array('token'=>$token,'wecha_id'=>$wecha_id,'rid'=>$rid));?>" class="pigcms-list-item">
                    <span class="icon-edit"></span>
                        <img src="" alt="预约看房">
                        <div>预约看房</div>
                    </a>
                    <a href="<?php echo U('Card/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                    <span class="icon-credit-card"></span>
                    <img src="" alt="会员尊享">
                    <div>会员尊享</div>
                    </a>
                    <a href="<?php echo U('Estate/aboutus',array('token'=>$token,'wecha_id'=>$wecha_id));?>" class="pigcms-list-item">
                    <span class="icon-phone"></span>
                    <img src="" alt="关于我们">
                    <div>关于我们</div>
                    </a>
                        </li>
                </ul>
                <ol>
                    <a href="javascript:navList_box.prev();">&nbsp;</a>
                    <a href="javascript:navList_box.next();">&nbsp;</a>
                </ol>
            </div>
        </section>
        <script>
            $(document).ready(function(){
                window.navList_box = new Swipe(document.getElementById('navList_box'), {auto:0});
            });
        </script>
    </body>
</html>