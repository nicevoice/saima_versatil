<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo RES;?>/css/109/iscroll.css" rel="stylesheet" type="text/css" />
        <style>
            #cate1 .mainmenu li .menutitle { font-size: 24px;
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
        </style>
        <script src="<?php echo RES;?>/css/109/iscroll.js" type="text/javascript"></script>
        <script type="text/javascript">
            var myScroll;

            function loaded() {
                myScroll = new iScroll('wrapper', {
                    snap: true,
                    momentum: false,
                    hScrollbar: false,
                    onScrollEnd: function () {
                        document.querySelector('#indicator > li.active').className = '';
                        document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
                    }
                });
            }
            document.addEventListener('DOMContentLoaded', loaded, false);
        </script>

    </head>

    <body id="cate1">

    <!--背景音乐-->
    <?php if($homeInfo['musicurl'] != false): ?><style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('<?php echo RES;?>/images/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 20px;
}
.btn_music.on {
    background-image: url("<?php echo RES;?>/images/stop.png");
}

</style>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>

var playbox = (function(){
	//author:eric_wu
	var _playbox = function(){
		var that = this;
		that.box = null;
		that.player = null;
		that.src = null;
		that.on = false;
		//
		that.autoPlayFix = {
			on: true,
			//evtName: ("ontouchstart" in window)?"touchend":"click"
			evtName: ("ontouchstart" in window)?"touchstart":"mouseover"
			
		}

	}
	_playbox.prototype = {
		init: function(box_ele){
			this.box = "string" === typeof(box_ele)?document.getElementById(box_ele):box_ele;
			this.player = this.box.querySelectorAll("audio")[0];
			this.src = this.player.src;
			this.init = function(){return this;}
			this.autoPlayEvt(true);
			return this;
		},
		play: function(){
			if(this.autoPlayFix.on){
				this.autoPlayFix.on = false;
				this.autoPlayEvt(false);
			}
			this.on = !this.on;
			if(true == this.on){
				this.player.src = this.src;
				this.player.play();
			}else{
				this.player.pause();
				this.player.src = null;
			}
			if("function" == typeof(this.play_fn)){
				this.play_fn.call(this);
			}
		},
		handleEvent: function(evt){
			this.play();
		},
		autoPlayEvt: function(important){
			if(important || this.autoPlayFix.on){
				document.body.addEventListener(this.autoPlayFix.evtName, this, false);
			}else{
				document.body.removeEventListener(this.autoPlayFix.evtName, this, false);
			}
		}
	}
	//
	return new _playbox();
})();

playbox.play_fn = function(){
	this.box.className = this.on?"btn_music on":"btn_music";
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	playbox.init("playbox");
	/*
	setTimeout(function() {
		// IE
		if(document.all) {
			document.getElementById("playbox").click();
		}
		// 其它浏览器
		else {
			var e = document.createEvent("MouseEvents");
			e.initEvent("click", true, true);
			document.getElementById("playbox").dispatchEvent(e);
		}
	}, 2000);
	*/
});

</script>
<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio id="audio" loop src="<?php echo ($homeInfo["musicurl"]); ?>"></audio></span><?php endif; ?>
		   <div class="banner">
		<div id="wrapper">
			<div id="scroller">
				<ul id="thelist"> 
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div id="nav">
			<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
			<ul id="indicator">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			 
			</ul>
			<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
		</div>
		<div class="clr"></div>
		</div>
        <div id="insert1"></div>
        <ul class="mainmenu">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="menubtn">
                        <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
                            <div class="menumesg">
                                <div class="menuimg"><img src="<?php echo ($vo["img"]); ?>" /></div>
                                <div class="menutitle"><?php echo ($vo["name"]); ?></div>
                            </div>
                        </a>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

            <div class="clr"></div>
        </ul>
        <script>
            var count = document.getElementById("thelist").getElementsByTagName("img").length;	

            var count2 = document.getElementsByClassName("menuimg").length;
            for(i=0;i<count;i++){
                document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

            }
            document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

            setInterval(function(){
                myScroll.scrollToPage('next', 0,400,count);
            },3500 );
            window.onresize = function(){ 
                for(i=0;i<count;i++){
                    document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

                }
                document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
            } 


        </script>

        <div id="insert2"></div>
        <div style="display:none"> </div>


    <div class="copyright">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>  
<!-- share -->

	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": "0",
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"NewsList",
				"moduleID": "<?php echo (intval($_GET['classid'])); ?>",
				"imgUrl": "<?php echo ($thisClassInfo["img"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($thisClassInfo["name"]); ?>",
				"tContent": "<?php echo ($thisClassInfo["info"]); ?>"
			};
		</script><?php endif; ?>
	
<?php echo ($shareScript); ?>
</body></html>