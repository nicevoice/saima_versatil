<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/pigcms-ui-1-1.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/common.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/car_reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/list-8.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/menu-2.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/wap/estate/jQuery.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/back.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/share.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/index.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/waphome.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all">

<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/swipe.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/zepto.js"></script>

<title><?php echo ($classify['name']); ?></title>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">



    </head>
    <body onselectstart="return true;" ondragstart="return false;">


<div class="body">

                    <header>
            <div class="head_news">
                <a href="<?php echo ($classify['url']); ?>">
                    <ul>
<?php if($classify['img'] != ''): ?><li><img src="<?php echo ($classify['img']); ?>" style="width:100%; max-height:400px;"></li><?php endif; ?>
                    </ul>
                    <ol><?php echo ($classify['name']); ?></ol>
                </a>
            </div>
        </header>
        <p></p>
            <section>

                    <ul class="list_ul list_ul_news">
                     <?php if(is_array($imgtxt)): $i = 0; $__LIST__ = $imgtxt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a class="tbox" href="<?php echo U('Estate/newlist',array('token'=>$token,'wecha_id'=>$wecha_id,'mid'=>$vo['mid']));?>">
                            <div>
                                <img src="<?php echo ($vo['pic']); ?>" style="width:60px!important; height:60px;">
                            </div>
                            <div>
                                <p><?php echo ($vo['title']); ?></p>
                                <p><?php echo (date("Y年m月d日",$vo['createtime'])); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </section>
</div>
<!-- 
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
        </script> -->
</body></html>