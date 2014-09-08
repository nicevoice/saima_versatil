<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/waphome.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/wap/estate/house.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/index.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/jQuery.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/swipe.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/zepto.js"></script>
<title>楼盘户型 <?php echo ($estatindex['title']); ?></title>
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
        <div class="act_top" id="actTop">
            <div class="act_top_show">
                <img src="<?php echo ($es_data['house_banner']); ?>" width="100%" >
            </div>
        </div>
        <div id="roomDetails"> <div class="box box_up box_up3" id="box0">
        <h3><?php echo ($es_data['title']); ?></h3>
        <div class="box_type" style=" height:auto;">
            <ul class="house_type">
<?php if(is_array($housetype)): $i = 0; $__LIST__ = $housetype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="boxLi<?php echo ($i); ?>" class=""> <a href="javascript:void(0);" onclick="List.toggleList(<?php echo ($i); ?>,0);"><strong><?php echo ($vo['name']); ?></strong>  <span><?php echo ($vo['title']); ?></span> <em><?php echo ($vo['fang']); ?>房<?php echo ($vo['ting']); ?>厅  <?php echo ($vo['area']); ?></em> </a>
                <div class="house_photo" style="display: none;"> <a href="<?php echo U('Estate/show_album',array('token'=>$token,'id'=>$vo['id'],'wecha_id'=>$wecha_id));?>"  class="ico_type"  class="ico_type">户型图</a>
<?php if($vo['panorama_id'] != 0): ?><a href="<?php echo U('Panorama/item',array('token'=>$token,'id'=>$vo['panorama_id'],'wecha_id'=>$wecha_id,'sgssz'=>'mp.weixin.qq.com'));?>"  class="ico_360">全景图</a><?php endif; ?>
                 </div>

<?php if($vo['desc_son'] != ''): ?><div class="house_photo" style="display: none;background-color:#fff"> <p style="padding:5px;display: inline;">
    <strong style="color:red">楼盘介绍:</strong>     <?php echo (mb_substr(trim(html_entity_decode($vo['desc_son'])),0,60,'utf-8')); ?> </p></div><?php endif; ?>
<?php if($vo['description'] != ''): ?><div class="house_photo" style="display: none;background-color:#fff"> <p style="padding:5px;display: inline;">
        <strong style="color:red">户型介绍:</strong><?php echo (mb_substr(trim(html_entity_decode($vo['description'])),0,60,'utf-8')); ?> </p></div><?php endif; ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
<style>
    #boxLi2008 div a{
        display:initial;
    }
</style>
<p>&nbsp;<br></p>
<?php echo ($page); ?>
</ul>
        </div>
        </div>
        </div>
        <p>&nbsp;</p>

</div>


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
</body></html>