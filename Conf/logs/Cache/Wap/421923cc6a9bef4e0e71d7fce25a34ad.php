<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/waphome.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/index.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/jQuery.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/swipe.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/zepto.js"></script>

<title><?php echo ($estatindex['title']); ?></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body onselectstart="return true;" ondragstart="return false;">
<div class="wrapper" id="container">

<?php if($estatindex['banner'] != ''): ?><div class="act_top" id="actTop" style="">
    <div class="act_top_show">
        <img src="<?php echo ($estatindex['banner']); ?>" width="100%" >
    </div>
</div><?php endif; ?>
<div class="box box_up">

     <h3>楼盘简介</h3>
        <div class="box_time">
            <?php echo (trim(html_entity_decode($estatindex['estate_desc']))); ?>
        </div><a href="javascript:void(0);" onclick="Index.switchIndex(this);return false;" class="btn_more"><span>更多</span></a>
        </div>

        <div class="box">
        <h3>地图</h3>
        <div class="box_map">
        <div class="map_area"><a  href="http://chabus.duapp.com/mapapi.php?lng=<?php echo ($estatindex['lng']); ?>&lat=<?php echo ($estatindex['lat']); ?>&title=预约&info=温馨提示：楼盘大概位置"><img  src="http://api.map.baidu.com/staticimage?width=600&height=235&center=<?php echo ($estatindex['address']); ?>&markers=<?php echo ($estatindex['address']); ?>|<?php echo ($estatindex['lng']); ?>,<?php echo ($estatindex['lat']); ?>&zoom=10&markerStyles=s,A,0xff0000"  height="90" style="max-height: 100px;width: 100%"/></a></div>
         <p><?php echo ($estatindex['place']); ?></p> </div>
        </div>

        <div class="box" <?php if($estatindex['video'] != ''): ?>style="display: block;"<?php else: ?> style="display: none;"<?php endif; ?>>
          <h3>视频欣赏</h3>
           <div class="box_type" style="text-align:center;" id="">
<div class="video-box tpl-video"  id="content" style="display:block;"><?php echo ($estatindex['video']); ?></div>
<script src="tpl/Wap/default/common/wedding/js/play.js" type="text/javascript"></script>
           </div><p>&nbsp;</p>
           </div>

        <div class="box box_up" style="display:">
        <h3>项目简介</h3>
         <div class="box_info"><?php echo (trim(html_entity_decode($estatindex['project_brief']))); ?> </div>
         <a href="javascript:void(0);" onclick="Index.switchIndex(this);return false;" class="btn_more"><span>更多</span></a>
          </div>

        <div class="box" style="display:">    <h3>交通配套</h3>
          <div class="box_info">
           <?php echo (trim(html_entity_decode($estatindex['traffic_desc']))); ?>
            </div> <a href="javascript:void(0);" onclick="Index.switchIndex(this);return false;" class="btn_more"><span>收起</span></a>   </div> </div>
                <p>&nbsp;</p>



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
 <div mark="stat_code" style="width:0px; height:0px; display:none;"> </div>
</body></html>