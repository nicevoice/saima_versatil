<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($info["title"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo RES;?>/css/Photo/css/photo.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/Photo/css/photoswipe.css" type="text/css" rel="stylesheet" />
<script src="<?php echo RES;?>/css/Photo/js/klass.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/Photo/js/code.photoswipe-3.0.5.min.js" type="text/javascript"></script>
<script type="text/javascript">
(function(window, PhotoSwipe){
document.addEventListener('DOMContentLoaded', function(){
var
options = {},
instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
}, false);
}(window, window.Code.PhotoSwipe));
</script>
</head>

<body id="photo">
<div class="qiandaobanner"> <a ><img src="<?php echo ($headpic); ?>" ></a> </div>
<div  id="main" role="main">
      <ul id="Gallery" class="gallery">

        <li><a href="<?php echo ($housetype['type1']); ?>"><img src="<?php echo ($housetype['type1']); ?>" alt="  "></a></li>
        <li><a href="<?php echo ($housetype['type2']); ?>"><img src="<?php echo ($housetype['type2']); ?>" alt="  "></a></li>
        <li><a href="<?php echo ($housetype['type3']); ?>"><img src="<?php echo ($housetype['type3']); ?>" alt="  "></a></li>
        <li><a href="<?php echo ($housetype['type4']); ?>"><img src="<?php echo ($housetype['type4']); ?>" alt="  "></a></li>

      </ul>
</div>

<!--jquery.min-->
<script src="<?php echo RES;?>/css/Photo/js/jquery.min.js" type="text/javascript"></script>
<!--下面是瀑布流js-->
<script src="<?php echo RES;?>/css/Photo/js/jquery.imagesloaded.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/Photo/js/jquery.wookmark.min.js" type="text/javascript"></script>
<script type="text/javascript">
    (function ($){
      $('#Gallery').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 4, // Optional, the distance between grid items
          itemWidth: 150 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#Gallery li');

        // Call the layout function.
        handler.wookmark(options);


      });
    })(jQuery);
  </script>
</body>
<script type="text/javascript">
window.shareData = {
            "moduleName":"Estate",
            "moduleID":"0",
            "imgUrl": "<?php echo ($headpic); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Estate/show_album',array('token'=>$token,'id'=>$shareid));?>",
            "tTitle": "<?php echo ($housetype['title']); ?>",
            "tContent": "<?php echo (mb_substr(strip_tags(html_entity_decode($housetype['description'])),0,89,'utf-8')); ?>..."
        };
</script>
<?php echo ($shareScript); ?>
</html>