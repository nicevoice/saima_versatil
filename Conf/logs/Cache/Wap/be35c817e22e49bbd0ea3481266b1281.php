<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($thisMarket["title"]); ?>-<?php echo ($tenant["name"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/css/style/css/hotels.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/card/style/style.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/style/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>
<style>
.cardexplain {
    margin: 11px 10px 20px 9px;
    min-width: 301px;
}
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}

.detailcontent .content .mark{text-align: center;}
.detailcontent .content img,.detailcontent .content .mark .img{max-width: 99%;}
    .qiandaobanner .title{position: absolute;top:12px;left: 15px;font-size: 20px;color:#ffffff;}
</style>

</head>

<body id="wrap">

<div class="qiandaobanner">
    <a href="javascript:history.go(-1);">
        <img src="/tpl/static/market/banner.jpg">
        <div class="title"><font><?php echo ($tenant["name"]); ?></font></div>
    </a>
</div>


<div class="cardexplain">

<!--intro-->
<ul class="round">
<li class="userinfo">
<a href="javascript:void(0);">
<span><?php echo ($tenant["name"]); ?></span>
</a>
</li>
<li class="tel">
<a href="tel:<?php echo ($tenant["tel"]); ?>">
<span><?php echo ($tenant["tel"]); ?></span>
</a>
</li>
<li class="address">
<a href="/index.php?g=Wap&m=Market&a=tenant_maps&token=<?php echo ($token); ?>&id=<?php echo ($tenant["id"]); ?>">
<span><?php echo ($tenant["address"]); ?></span>
</a>
</li>
<!--
<li class="detail">
<span>查看详情</span>
</li>-->
</ul>
<div class="detailcontent" style="padding:0;">
<h2 style="line-height: 32px;">商家详情介绍</h2>
<div class="content">
    <div class="mark">
    <?php if($tenant["mark_url"] != ''): ?><img class="img" src="<?php echo ($tenant["mark_url"]); ?>" alt="<?php echo ($tenant["name"]); ?>">
	   <br /><?php endif; ?>
    </div>
	<?php echo (htmlspecialchars_decode($tenant["intro"])); ?>
</div>
</div>
</div>

<script type="text/javascript">
window.shareData = {  
            "moduleName":"Market",
            "moduleID":"<?php echo ($thisMarket["id"]); ?>",
            "imgUrl": "<?php echo ($thisMarket["logourl"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Selfform/index',array('token'=>$token,'id'=>$thisMarket['id']));?>",
            "tTitle": "<?php echo ($thisMarket["name"]); ?>",
            "tContent": ""
};
</script>

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
<?php echo ($shareScript); ?>
</body>
</html>