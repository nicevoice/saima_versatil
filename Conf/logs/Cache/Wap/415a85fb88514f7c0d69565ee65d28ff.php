<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>团购</title>
    <meta name="description" content="">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no"  />
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="full-screen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="tpl/static/groupon/wap/css.css" />
<script src="/tpl/Wap/default/common/css/product/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/tpl/Wap/default/common/css/product/js/main.js"></script>
</head>
<body id='index'>
<a name="top"></a>
    <header  class="clearfix">
        <h1 class="hd-logo">
            <a class="hd-logo-text" gaevent="imt/hd/logo" href="<?php echo U('Groupon/grouponIndex',array('token'=>$token,'wecha_id'=>$wecha_id));?>" style="font-family:Microsoft Yahei">团购</a>
        </h1>
        
        <div class="hd-nav">
            <a class="icon icon-account account"  gaevent="imt/hd/account" href="<?php echo U('Groupon/my',array('token'=>$token,'wecha_id'=>$wecha_id));?>">我的订单</a>
            <a class="icon icon-wsearch" gaevent="imt/hd/search" href="<?php echo U('Groupon/search',array('token'=>$token,'wecha_id'=>$wecha_id));?>">搜索</a>
        </div>
    </header>
    <div id="deal-bizinfo" class="box-style deal-bizinfo">
        <h2><span class="icon-fonts">H</span>总店信息</h2>

            <div class="biz-info">
                <a href="<?php echo U('Groupon/company',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'id'=>$product['id']));?>">
                    <div class="biz-detail">
                        <p class="title ell"> <?php echo ($thisCompany["name"]); ?></p>

                        <p class="address ell"><?php echo ($thisCompany["address"]); ?></p>
                    </div>
                </a>

                <div class="icon-fonts call">
                    <a href="tel:<?php echo ($thisCompany["tel"]); ?>">E</a>
                </div>
            </div>
            <a class="more" href="<?php echo U('Groupon/companyMap',array('token'=>$_GET['token'],'id'=>$_GET['id'],'companyid'=>$thisCompany['id'],'wecha_id'=>$_GET['wecha_id']));?>">查看地图</a>
            
    </div>
    
    <?php if($branchStoreCount > 0): ?><div id="deal-bizinfo" class="box-style deal-bizinfo">
        <h2><span class="icon-fonts">H</span>分店信息</h2>
        <?php if(is_array($branchStores)): $i = 0; $__LIST__ = $branchStores;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><div class="biz-info">
                <a href="<?php echo U('Groupon/company',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'id'=>$product['id']));?>">
                    <div class="biz-detail">
                        <p class="title ell"> <?php echo ($s["name"]); ?></p>

                        <p class="address ell"><?php echo ($s["address"]); ?></p>
                    </div>
                </a>

                <div class="icon-fonts call">
                    <a href="tel:<?php echo ($s["tel"]); ?>">E</a>
                </div>
            </div>
            
            <a class="more" href="<?php echo U('Groupon/companyMap',array('token'=>$_GET['token'],'id'=>$_GET['id'],'companyid'=>$s['id'],'wecha_id'=>$_GET['wecha_id']));?>">查看地图</a><br><?php endforeach; endif; else: echo "" ;endif; ?>
            
    </div><?php endif; ?>
<nav class="pageinator clearfix">
    <div id="nav-page" class="pg-next">
    </div>
    <?php if($hideTopButton != 1): ?><div id="nav-top" class="pg-top">
        <span class="btn btn-top"><span class="icon icon-top"><a href="#top" style="color:#666">回到顶部</a></span></span>
    </div><?php endif; ?>
</nav>
<footer>
<div class="ft-copyright"><span class="ft-copyright-text"> &copy;<?php echo date('Y',time());?> </span></div>
</footer>

<script type="text/javascript">
window.shareData = {  
            "moduleName":"Groupon",
            "moduleID":"0",
            "imgUrl": "", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Groupon/grouponIndex',array('token'=>$token));?>",
            "tTitle": "团购",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>