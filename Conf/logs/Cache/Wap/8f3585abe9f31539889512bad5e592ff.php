<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title><?php echo $tenant['name'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/style.css" />
	<script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>

<body>
	
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
<div class="main">
	<div class="p_map">
    <div id="container"></div>
        <script type="text/javascript">
        $(function(){
        	var wh = $(window).height();
        	var bh = $('body').height();
        	var mh = $('#container').css('height');
        	mh = mh.replace('px', '');
        	oh = bh - wh;
        	nmh = mh - oh;
        	$('#container').css('height', nmh+'px');
        
        	var sContent = function(id, name, imgsrc, address, tel){
        		return "<h2 style='margin:0 0 7px 0;padding:0 0'>"+name+"</h2>" + 
        		"<img style='float:right;margin:0px 0px 0px 4px' id='imgDemo' src='"+imgsrc+"' width='120' height='80' />" + 
        		"<p style='padding-right:10px'>地址："+address+"</p>" +
        		"<p style=''>电话："+tel+"</p>" +
        		"" +
        		"</div>";
        	}
        	var storeList = [{"id":"<?php echo $tenant['id'];?>","title":"<?php echo $tenant['name'];?>","top_pic":"<?php echo $tenant['logourl'];?>","address":"<?php echo $tenant['address'];?>","tel":"<?php echo $tenant['tel'];?>","longitude":"<?php echo $tenant['longitude'];?>","latitude":"<?php echo $tenant['latitude'];?>"}<?php if(is_array($branchStores)): $i = 0; $__LIST__ = $branchStores;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>,{"id":"<?php echo $c['id'];?>","name":"<?php echo $c['name'];?>","top_pic":"<?php echo $c['top_pic'];?>","address":"<?php echo $c['address'];?>","tel":"<?php echo $c['tel'];?>","longitude":"<?php echo $c['longitude'];?>","latitude":"<?php echo $c['latitude'];?>"}<?php endforeach; endif; else: echo "" ;endif; ?>];
        	// 编写自定义函数,创建标注
        	function addMarker(point, content){
        	  var marker = new BMap.Marker(point);  // 创建标注
        	  map.addOverlay(marker);
        	  var infoWindow = new BMap.InfoWindow(content);
        	  map.openInfoWindow(infoWindow,point); //开启信息窗口
        	  marker.addEventListener("click", function(){          
        		   this.openInfoWindow(infoWindow);
        		   //图片加载完毕重绘infowindow
        		   document.getElementById('imgDemo').onload = function (){
        		       infoWindow.redraw();
        		   }
        		});
        	}
        	var map = new BMap.Map("container");
        	var point = new BMap.Point(<?php echo $tenant['longitude'];?>, <?php echo $tenant['latitude'];?>);
        	map.centerAndZoom(point, 13);
        	var user_marker = new BMap.Marker(point);  // 创建标注
        	map.addOverlay(user_marker);
            	   
        	for (var i = 0, l=storeList.length; i < l; i ++) {
        	  var point = new BMap.Point(storeList[i].longitude, storeList[i].latitude);
        	  var content = sContent(storeList[i].id,storeList[i].title,storeList[i].top_pic,storeList[i].address,storeList[i].tel);
        	  addMarker(point, content);
        	}
            
        });
        </script>
	</div>
</div>
 <script type="text/javascript">
window.shareData = {  
            "moduleName":"Market",
            "moduleID":"<?php echo ($thisForm["market_id"]); ?>",
            "imgUrl": "<?php echo ($thisForm["logo_pic"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Market/tenant_maps',array('token'=>$token,'latitude'=>$thisForm['latitude'],'longitude'=>$thisForm['longitude']));?>",
            "tTitle": "<?php echo ($thisForm["title"]); ?>",
            "tContent": "<?php echo ($thisForm["address"]); ?>"
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