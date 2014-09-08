<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/review.css" media="all">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/review.js"></script>
<title>专家点评•房友印象</title>

<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/wap/back.css" media="all">

<!-- <script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/common.js"></script> -->
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/wap/index.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/waphome.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/jQuery.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/swipe.js"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/zepto.js"></script>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<script>


    function iswitch_panel(obj){
        var ipm = $('#impress');
        var pro = $('#professional');

        if(obj==0){
            ipm.show();
            pro.hide();
        }else{
            ipm.hide();
            pro.show();
        }
    }
</script>

</head>
    <body onselectstart="return true;" ondragstart="return false;" id="cate1">
        <style type="text/css">
    .review_man h3{font-size:18px;}
    #impress a{
        overflow:hidden;
    }
    .review_man h3{font-size:18px;}
    .is_1 a[style*='flex:0'], .is_2 a[style*='flex:0']{
        display:none;
    }
</style>

<div class="wrapper">
    <!-- start -->
        <ul class="nav_top" id="navTop" style="display: -webkit-box;">
            <li><a href="javascript:void(0);" onclick="iswitch_panel(0);return false;" class="current">房友印象</a></li>
            <li><a href="javascript:void(0);" onclick="iswitch_panel(1);return false;">专家点评</a></li>
        </ul>
    <!-- end -->
    <div id="impress" class="impress" style="display: block;">
    <h3>选择您的楼盘印象，喜欢就赞我吧</h3>


 <style>
html, body {
    color:#222;
    font-family:Microsoft YaHei,Helvitica,Verdana,Tohoma,Arial,san-serif;
    margin:0;
    padding: 0;
    text-decoration: none;
}
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
    margin:0;
    padding:0;
}
img {
    border:0;
}
ol, ul {
    list-style: none outside none;
    margin:0;
    padding: 0;
}
a {
    color:#000000;
    text-decoration: none;
}
.clr {
    display:block;
    clear:both;
    height:0;
    overflow:hidden;
}
 /*cate1*/
#cate1{background-color:#FBF5E0;overflow-x: hidden;}
#cate1 .mainmenu {
    display: block;
    margin: 0 auto;
    padding:0 0 5px 5px;

}
#cate1 .mainmenu li {
    width:50%;
    float:left;
    display: block;
    -moz-user-select:none;
    -webkit-user-select:none;
    -ms-user-select:none;
}
#cate1 .mainmenu li .menubtn {
    display: block;
    overflow: hidden;
    text-decoration:none;
    color:#000;
    background-color: #ffffff;
    border-radius: 5px;
    margin: 5px 5px 0 0;
    box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.25);
    -moz-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.25);
    -webkit-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.25);
}
#cate1 .mainmenu li .menubtn:hover {
    background-color: #f5f5f5;
}
#cate1 .mainmenu li a {
    display:block;
    padding:0px;
    font-size:14px;
    color: #000000;
    text-decoration: none;
    -moz-user-select:none;
    -webkit-user-select:none;
    -ms-user-select:none;
}
#cate1 .mainmenu li .menubtn .menumesg {
    padding:0px
}
#cate1 .mainmenu li .menubtn .menuimg {
    /*max-height:106px;*/
    overflow:hidden;

}
#cate1 .mainmenu li div img {
    border:0;
    width:100%;
}
#cate1 .mainmenu li .menutitle {
    text-align:center;
    line-height: 25px;
    text-decoration: none;
    color:#000;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
            #cate1 .mainmenu li .menutitle { font-size: 18px;
                                             padding: 20px 0; color:#ffffff;
                                             position: inherit;background-color: rgba(0, 0, 0, 0);}
            #cate1 .mainmenu li .menubtn {
                box-shadow: none;-moz-box-shadow:none;-webkit-box-shadow:none;
            }
            #cate1 .mainmenu li .menubtn .menumesg {
                position: inherit;
            }
            #cate1 .mainmenu li .menubtn .menuimg {
                display:none
            }
            #cate1 .mainmenu li .menubtn {
                border-radius:0;
                margin: 0;
            }
            #cate1 .mainmenu {
                padding: 0;
            }
            #cate1 .mainmenu li {
                margin-right:0;
            }
            #cate1 .mainmenu li:nth-child(10n+1) .menubtn{
                background-color:#fd9e0c;
            }
            #cate1 .mainmenu li:nth-child(10n+2) .menubtn{
                background-color:#474548;
            }
            #cate1 .mainmenu li:nth-child(10n+3) .menubtn{
                background-color:#d43316;
            }
            #cate1 .mainmenu li:nth-child(10n+4) .menubtn{
                background-color:#034e78;
            }
            #cate1 .mainmenu li:nth-child(10n+5) .menubtn{
                background-color:#436773;
            }
            #cate1 .mainmenu li:nth-child(10n+6) .menubtn{
                background-color:#2cb9b3;
            }
            #cate1 .mainmenu li:nth-child(10n+7) .menubtn{
                background-color:#2bba67;
            }
            #cate1 .mainmenu li:nth-child(10n+8) .menubtn{
                background-color:#037863;
            }
            #cate1 .mainmenu li:nth-child(10n+9) .menubtn{
                background-color:#844F00;
            }
            #cate1 .mainmenu li:nth-child(10n+10) .menubtn{
                background-color:#B88E2C;
            }

.sup {
    vertical-align: baseline;
    position: relative;
    top: -0.7em;
    margin-left:2px;
    font-size:0.2em;
    color:#ffffff;
    font-weight:700;
}
</style>
        </style>
<ul class="mainmenu">
            <?php if(is_array($impress)): $i = 0; $__LIST__ = $impress;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="menubtn">
                        <a href="javascript:void(0);" id="<?php echo ($vo['id']); ?>" onclick="getMyId(this,<?php echo ($vo['id']); ?>);return false;">
                            <div class="menumesg">
                                <div class="menuimg"></div>
                                <div class="menutitle"><?php echo ($vo['title']); ?><sup class="sup"><?php echo ($vo['comment']); ?>赞</sup>  </div>
                            </div>
                        </a>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

            <div class="clr"></div>
        </ul>
<p><br></p>
<?php if($thiscount > 12): echo ($page2); endif; ?>
    <p><br><br><br></p>

     </div>

    <div id="professional" style="display: none;" jqmoldstyle="block">
 <?php if(is_array($expert)): $i = 0; $__LIST__ = $expert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$exp): $mod = ($i % 2 );++$i;?><div class="review_box">
    <div class="review_man"> <img src="<?php echo ($exp['face']); ?>" width="70" height="70" style="width:70px!important; height:70px!important; " alt="">  <h3><?php echo ($exp['name']); ?><em><br><?php echo ($exp['position']); ?></em></h3><p><?php echo ($exp['description']); ?></p></div>
    <div class="review_word"> <h2><?php echo ($exp['title']); ?></h2> <p><?php echo ($exp['comment']); ?></p>    </div>
   </div><?php endforeach; endif; else: echo "" ;endif; ?>

    <p>
    <?php if($tcount > 5): echo ($page); endif; ?>
    <br><br><br></p>

  </div>
</div>

<script>
function getMyId(obj,id){
    var imp_id   = id;
    var token    ="<?php echo ($token); ?>";
    var wecha_id ="<?php echo ($wecha_id); ?>";
    if (wecha_id == '') {
        alert("请关注后再重新点赞哦。");
        return
    }

    var submitData ={
        imp_id  : imp_id,
        token   : token,
        wecha_id:wecha_id,
    };

    var myurl="<?php echo U('Estate/impress_add',array('token'=>$token,'wecha_id'=>$wecha_id));?>";
    $.post(myurl,submitData,function(retuandata){
        var xobj=eval('('+retuandata+')');
         if(xobj.errno == 1){
            alert(xobj.msg);
            window.location.reload();
         }else if(xobj.errno == 2){
             alert(xobj.msg + ' '+ xobj.thiscom);

         }else if(xobj.errno == 0){
            alert(xobj.msg);
         }
    });

}
</script>

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