<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<?php if(($_SESSION['isopen']) == "0"): ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
	body {
		background: url("/Public/home/images/bg.gif"); font: 12px/180% Arial, Helvetica, sans-serif, Verdana; margin: 0px; color: rgb(90, 90, 90); font-size-adjust: none; font-stretch: normal;
	}
	html {
		-webkit-text-size-adjust: none;
	}
	body {
		-webkit-text-size-adjust: none;
	}
	table {
		font: 12px/180% Arial, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); font-size-adjust: none; font-stretch: normal;
	}
	td {
		font: 12px/180% Arial, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); font-size-adjust: none; font-stretch: normal;
	}
	table {
		border-collapse: collapse; border-spacing: 0; empty-cells: show;
	}
	th {
		border-collapse: collapse;
	}
	td {
		border-collapse: collapse;
	}
	a:link {
		color: rgb(90, 90, 90); text-decoration: none;
	}
	a:visited {
		color: rgb(90, 90, 90); text-decoration: none;
	}
	a:hover {
		color: rgb(255, 78, 0); text-decoration: none;
	}
	img {
		border: 0px currentColor;
	}
	div {
		margin: 0px; padding: 0px;
	}
	p {
		margin: 0px; padding: 0px;
	}
	img {
		margin: 0px; padding: 0px;
	}
	ul {
		margin: 0px; padding: 0px;
	}
	li {
		margin: 0px; padding: 0px;
	}
	form {
		margin: 0px; padding: 0px;
	}
	input {
		margin: 0px; padding: 0px;
	}
	label {
		margin: 0px; padding: 0px;
	}
	span {
		margin: 0px; padding: 0px;
	}
	dl {
		margin: 0px; padding: 0px;
	}
	dt {
		margin: 0px; padding: 0px;
	}
	dd {
		margin: 0px; padding: 0px;
	}
	h1 {
		margin: 0px; padding: 0px;
	}
	h2 {
		margin: 0px; padding: 0px;
	}
	h3 {
		margin: 0px; padding: 0px;
	}
	h4 {
		margin: 0px; padding: 0px;
	}
	h5 {
		margin: 0px; padding: 0px;
	}
	h6 {
		margin: 0px; padding: 0px;
	}
	ol {
		list-style-type: none;
	}
	ul {
		list-style-type: none;
	}
	li {
		list-style-type: none;
	}
	.overz {
		overflow: auto; overflow-x: hidden; overflow-y: hidden; zoom: 1;
	}
	.mn_12 {
		margin-bottom: 12px;
	}
	.font_14 {
		font-size: 14px;
	}
	.font_15 {
		font-size: 14px;
	}
	.font_16 {
		font-size: 16px;
	}
	.orange_fontc {
		color: rgb(255, 78, 0);
	}
	.site_under {
		margin: 0px auto; text-align: center;
	}
</style>
</head>

<body>
<div class="site_under"><img width="960" height="449" src="/Public/home/images/site_under_main.jpg" alt=""></div>
</body>
</html>


<?php else: ?>

<head>
    <title><?php echo ($config["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($config["description"]); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <!--ZTE CSS begin-->
    <link href="/Public/home/css/basic.css" rel="stylesheet" />
    <link href="/Public/home/css/common.css" rel="stylesheet" />
    <link href="/Public/home/css/fontello.css" rel="stylesheet" />   
    <!--ZTE CSS end-->
    <!--ZTE JS begin-->
    <script type="text/javascript" src="/Public/home/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery.dbcMessage.js"></script>
   
    <script type="text/javascript" src="/Public/home/js/cloud-zoom.1.0.1.js"></script>
    <script type="text/javascript" src="/Public/home/js/js.js" charset="utf-8"></script>
    <script type="text/javascript" src="/Public/home/js/layout.js-t=201205310959.js" > </script>

    <!--ZTE JS end-->

      <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "/Public/home/js/hm.js-2460548f7273e134eeec7ceec2087037.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
     </script>
   
    <script language="javascript" type="text/javascript">
        $(function () {
            //DBCMvcLayout.LoadGlobalJs();
            //DBCMvcLayout.LoadCategoryJs();
            var isCheckCode = '';
            if (isCheckCode == '1') {
                //var isMaskCodeCheck = DBCMvcLayout.readCookie('MaskCodeCheck');
                if (isMaskCodeCheck != '1') {
                    $.blockUI({
                        message: $('#initMask'),
                        overlayCSS: {
                            backgroundColor: '#000',
                            opacity: '0.7'
                        }
                    });
                }
            }
            var sk = getUrlParam('sk');
            if (sk && sk.toLowerCase() != "none") {
                //DBCMvcLayout.createCookie('sk', sk, 500 * 365);
            }
        });
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
            var r = window.location.search.substr(1).match(reg);  //匹配目标参数
            if (r != null) return unescape(r[2]); return null; //返回参数值
        }
        
    </script>




</head>
<body>
  <div class="weibox">
  <ul>
    <li class="weixin">
      <div class="weixin-logo"></div>
    </li>
    <li class="idea"></li>
    <li class="app">
      <div class="app-logo"></div>
    </li>
  </ul>
</div>

<!--header start-->
<div id="header">
	<div class="header">
		<a href="javascript:void(0)" class="shop_Name">中兴手机商城</a>
		<div id="logininfo" class="login_register">
			<?php echo W("UserInfo/getUserInfo");?>
		</div>
		<ul class="header_List">
			<li class="my_Order">
				<?php if($_SESSION['isLogin']): ?><a href="/index.php/person/myorder.html" target="_blank"><i></i>我的订单</a>
				<?php else: ?>
				<a href="/index.php/login/index.html" target="_blank"><i></i>我的订单</a><?php endif; ?>
			</li>
			<li class="header_Service">
				<a href="/index.php/help/after_sale.html" target="_blank">售后服务<i></i></a>
				<div class="down_List" style="width: 94px;">
					<a href="/index.php/help/repair_policy.html">保修政策</a>
					<a href="/index.php/help/exchange.html">退换货政策</a>
					<a href="/index.php/help/exchange_policy.html">退换货流程</a>
					<a href="/index.php/help/after_sale.html">售后网点</a>
				</div>
			</li>
			<li class="help_Center_Down">
				<a href="/index.php/help/shopping_item.html" target="_blank">帮助中心<i></i></a>
				<div class="down_List" style="width: 93px;">
					<a href="/index.php/help/shopping_item.html">购物指南</a>
					<a href="/index.php/help/send_item.html">配送指南</a>
					<a href="/index.php/help/pay_method.html">支付方式</a>
				</div>
			</li>
		</ul>
		<div class="telephone">
			<i></i>全年无休热线
		</div>
	</div>
</div>
<link href="/Public/home/css/Site1024.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/Public/home/css/LayoutHelp.chirp.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/Public/home/css/article.chirp.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/Public/home/css/help.css" rel="stylesheet" type="text/css" media="screen" />
<script src="/Public/home/js/help.min.js" type="text/javascript"> </script>

<!--header_Middle start-->
<div id="header_Middle">
    <div class="header_Middle">
        <div class="logo">
            <a href="javascript:void(0)">
                <img src="/Public/home/images/logo1.png" alt="" border="0" />
			</a>
        </div>
        <div class="keyword_Search">
            
            <div class="search_Area" onkeypress="javascript:return DBCMvcLayout.WebForm_FireDefaultButton(event, 'btnProductSearch');">
<!--             <form id="sous" action="/index.php/index/month_sale.html" >
 -->            <input type="text" id="txtsearchinput" name="search" class="search_Box" onfocus="DBCMvcLayout.CheckSearchText(this)" onblur="DBCMvcLayout.InitSearchText(this)" placeholder="请输入品牌或商品进行搜" maxlength="50" autocomplete="off" />
                <button id="btnProductSearch" class="search_Btn" title="搜索" value=""></button>
            
            </div>
            <div class="shopping_Cart">
                <a href="cart.html" class="cartBtn"></a>
                <div id="showcartlist">
					<div class="cart_Box">
						<div class="itemno">亲，您的购物车中暂无商品</div>
						<?php echo W("Cartinfo/cartinfo");?>
					</div>
				</div>
            </div>
          <div class="keyword clearFix">
				<a href="/index.php/index/month_sale/search/星星" style="color: rgb(0, 0, 0);">星星2号</a>
				<a href="/index.php/index/month_sale/search/天机" style="color: rgb(0, 0, 0);">天机</a>
				<a href="/index.php/index/month_sale/search/spr"  style="color: rgb(255, 0, 0);">SPRO2</a>
				<a href="/index.php/index/month_sale/search/axon" style="color: rgb(255, 0, 0);">AXON</a>
				<a href="/index.php/index/month_sale/search/儿童" style="color: rgb(0, 0, 0);">儿童机</a>
            </div>
        </div>
    </div>
</div>

<div id="nav" name="nav">
    <div class="nav_Left po">
        <b>所有商品分类</b>
        <div class="all" style="z-index:999;display:none;">
			<div class="classification">
				<h3><a href="/index.php/index/phones/rance/S">手机</a></h3>
				<a href="/index.php/index/large_screen/vest/S1" class="kind">旗舰机</a>
				<a href="/index.php/index/large_screen/vest/S3" class="kind">大屏机</a>
				<a href="/index.php/index/large_screen/vest/S2" class="kind">千元机</a>
				<a href="/index.php/index/large_screen/vest/S4" class="kind">儿童机</a>
				<div class="clearFix"></div>
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/S1">旗舰机</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/S1/postfix/S1_1">天机</a><span>|</span>
								<a href="/index.php/index/sky/vest/S1/postfix/S1_2">星星</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/S3">大屏机</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/S3/postfix/S3_1">MEMO/S6</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/S2">千元机</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/S2/postfix/S2_1">青漾&小鲜</a><span>|</span>
								<a href="/index.php/index/sky/vest/S2/postfix/S2_2">Q系列</a><span>|</span>
								<a href="/index.php/index/sky/vest/S2/postfix/S2_3">U系列</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/S4">儿童机</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/S4/postfix/S4_1">儿童机</a><span>|</span>
								<a href="/index.php/index/sky/vest/S4/postfix/S4_2">老人机</a>
							</dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
			<div class="classification">
				<h3><a href="/index.php/index/saler_mode/rance/Y">运营商</a></h3>
				<a href="/index.php/index/saler/vest/Y1" class="kind">移动制式</a>
				<a href="/index.php/index/saler/vest/Y2" class="kind">联通制式</a>
				<a href="/index.php/index/saler/vest/Y3" class="kind">电信制式</a>
				<div class="clearFix"></div>
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/saler/vest/Y1">移动制式</a></dt>
							<dd><a href="/index.php/index/saler/vest/Y1">移动制式</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/saler/vest/Y2">联通制式</a></dt>
							<dd><a href="/index.php/index/saler/vest/Y2">联通制式</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/saler/vest/Y3">电信制式</a></dt>
							<dd><a href="/index.php/index/saler/vest/Y3">电信制式</a></dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
			<div class="classification">
				<h3><a href="/index.php/index/phones/rance/P">配件</a></h3>
				<a href="/index.php/index/large_screen/vest/P1" class="kind">存储产品</a>
				<a href="/index.php/index/large_screen/vest/P2" class="kind">电池充电</a>
				<a href="/index.php/index/large_screen/vest/P3" class="kind">外饰保护</a>
				<a href="/index.php/index/large_screen/vest/P4" class="kind">其他配件</a>
				<div class="clearFix"></div>
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/P1">存储产品</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/P1/postfix/P1_1">读卡器</a><span>|</span>
								<a href="/index.php/index/sky/vest/P1/postfix/P1_2">存储卡</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/P2">电池充电</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/P2/postfix/P2_1">充电器</a><span>|</span>
								<a href="/index.php/index/sky/vest/P2/postfix/P2_2">电池</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/P3">外饰保护</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/P3/postfix/P3_1">皮套</a><span>|</span>
								<a href="/index.php/index/sky/vest/P3/postfix/P3_2">贴膜</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/P4">其他配件</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/P4/postfix/P4_1">保护袋</a><span>|</span>
								<a href="/index.php/index/sky/vest/P4/postfix/P4_2">车载支架</a><span>|</span>
								<a href="/index.php/index/sky/vest/P4/postfix/P4_3">数据线</a>
							</dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
			<div class="classification">
				<h3><a href="/index.php/index/phones/rance/E">耳机音频</a></h3>
				<a href="/index.php/index/large_screen/vest/E1" class="kind">蓝牙耳机</a>
				<a href="/index.php/index/large_screen/vest/E2" class="kind">蓝牙音箱</a>
				<a href="/index.php/index/large_screen/vest/E3" class="kind">有线耳机</a>
				<div class="clearFix"></div>
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/E1">蓝牙耳机</a></dt>
							<dd>
								<a href="/index.php/index/sky/vest/E1/postfix/E1_1">入耳式</a><span>|</span>
								<a href="/index.php/index/sky/vest/E1/postfix/E1_2">耳塞式</a>
							</dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/E2">蓝牙音箱</a></dt>
							<dd><a href="/index.php/index/sky/vest/E2/postfix/E2_1">蓝牙音箱</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/E3">有线耳机</a></dt>
							<dd><a href="/index.php/index/sky/vest/E3/postfix/E3_1">有线耳机</a></dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
			<div class="classification">
				<h3><a href="/index.php/index/phones/rance/K">宽带终端</a></h3>
				<a href="/index.php/index/large_screen/vest/K1" class="kind">摄像头</a>
				<a href="/index.php/index/large_screen/vest/K2" class="kind">无线路由</a>
				<a href="/index.php/index/large_screen/vest/K3" class="kind">网络盒子</a>
				<a href="/index.php/index/large_screen/vest/K4" class="kind">便携投影</a>
				<div class="clearFix"></div>;
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/K1">摄像头</a></dt>
							<dd><a href="/index.php/index/sky/vest/K1/postfix/K1_1">摄像头</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/K2">无线路由</a></dt>
							<dd><a href="/index.php/index/sky/vest/K2/postfix/K2_1">无线路由</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/K3">网络盒子</a></dt>
							<dd><a href="/index.php/index/sky/vest/K3/postfix/K3_1">网络盒子</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/K4">便携投影</a></dt>
							<dd><a href="/index.php/index/sky/vest/K4/postfix/K4_1">便携投影</a></dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
			<div class="classification">
				<h3><a href="/index.php/index/phones/rance/Z">增值服务</a></h3>
				<a href="/index.php/index/large_screen/vest/Z1" class="kind">保修服务</a>
				<a href="/index.php/index/large_screen/vest/Z2" class="kind">移动办公</a>
				<div class="clearFix"></div>
				<div class="line"></div>
				<div class="nav_Show">
					<div class="nav_Show_Left">
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/Z1">保修服务</a></dt>
							<dd><a href="/index.php/index/sky/vest/Z1/postfix/Z1_1">保修服务</a></dd>
						</dl>
						<dl>
							<dt><a href="/index.php/index/large_screen/vest/Z2">移动办公</a></dt>
							<dd><a href="/index.php/index/sky/vest/Z2/postfix/Z2_1">BYOD移动办公</a></dd>
						</dl>
					</div>
					<div class="nav_Show_Right"></div>
				</div>
			</div>
        </div>
    </div>

	<ul class="nav_List">
		<li>
			<a href="/index.php/index/zte_first.html">
			<b>首页</b></a>
		</li>
		<li>
			<a href="/index.php/index/hot_store/vest/S1">
			<b>旗舰热门机</b></a>
		</li>
		<li>
			<a href="/index.php/index/month_sale.html">
			<b>本月特惠</b></a>
		</li>
		<li class="pull_Down"><a href=""><i></i>
			<b>星星论坛</b></a><dl class="pull_Down_List">
			<dd><a href="/index.php/help/star_discuz.html">星星论坛</a></dd>
			<dd><a href="/index.php/help/sina.html">新浪微博</a></dd></dl>
		</li>
	</ul>
</div>

<script type="text/javascript">
    $(function () {
        $(".nav_Left").hover(
            function () {
                $(".all").show();
             
        },
            function () {
                $(".all").hide();
            });
    })
//判断购物车里面是否有商品存在切换状态栏	
if($('.goodsinfo_big').length >=1){
$('.itemno').css('display','none');
}else{
$('.itemno').css('display','block');
$('.goodsinfo').css('display','none');
}

//去购物车点击事件
$('.goodsub').click(function(){
window.location.href = "/index.php/index/cart";

});
$('.search_Btn').click(function (){
   var  sec=$('.search_Box').val();
    if($('.search_Box').val()==""){
      alert("请输入搜索内容");
      return false;
    }else{
     window.location.href="/index.php/index/month_sale/search/"+sec;
    }
})
    

</script>


<link href="/Public/home/css/product.css"  rel="stylesheet" />
<link href="/Public/home/css/fang.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/home/js/jquery.cycle.all.min.js" ></script>	
<script src="/Public/home/js/jquery-1.2.6.pack.js"></script>
<script src="/Public/home/js/base.js"></script>
<script src="/Public/home/js/lib.js"></script>
<script src="/Public/home/js/163css.js"></script>
<script src="/Public/home/js/layout.js-t=201205310959.js"></script>


    <div id="main">
    <div class="crumb">
        <i></i> 
         您最近的位置是：<a href="/index.php/index/zte_first" >首页</a> > <a href="javascript:void(0)" >手机</a> > <a href="javascript:void(0)" >详情</a>
    </div>
	
<!--产品详细-->
<div class="product_Detail">
	  <div id="preview">
		<div class="jqzoom" id="spec-n1">
		<img height=350 src="/Public/upload/<?php echo ($data1["firstpic"]); ?>" width=350>
		</div>
			<div id="spec-list">
			
					<img src="/Public/upload/<?php echo ($pic[0]); ?>" width=80 height=80>
					<img src="/Public/upload/<?php echo ($pic[1]); ?>" width=80 height=80>
					<img src="/Public/upload/<?php echo ($pic[2]); ?>" width=80 height=80>
					<img src="/Public/upload/<?php echo ($pic[3]); ?>" width=80 height=80>
					<img src="/Public/upload/<?php echo ($pic[4]); ?>" width=80 height=80>
				
			</div>
		</div>  
		
		<div class="detail_Intro">
			<h3><?php echo ($data1["goodsname"]); ?></h3><h2></h2>
				<h4><?php echo ($data1["message"]); ?></h4><br />
				<dl class="price">
					<dt style="margin:2px 0 0 80px;">中兴价：</dt>
					<dd class="zhongxing_Price">￥<?php echo ($data1["price"]); ?></dd>
				</dl>
				 
			<div class="spread"></div><br />
			<dl class="intro_List">
				<dt>商品编号：</dt>
				<dd><?php echo ($data1["goodsnum"]); ?></dd>
			</dl>
			<dl class="intro_List">
				<dt>运　　费：</dt>
				
				<dd>满 150 免运费</dd>
			</dl>
			<dl class="intro_List">
				<dt>服　　务：</dt>
				<dd>由中兴商城负责发货，并提供售后服务</dd>
			</dl>

				<dl class="intro_List">
					<dt>商品评分：</dt>
					<dd>
			  <img src="/Public/home/images/yLeft.png"  class="small_img" /><img src="/Public/home/images/yRight.png"  class="small_img"/><img src="/Public/home/images/yLeft.png"  class="small_img" /><img src="/Public/home/images/yRight.png"  class="small_img"/><img src="/Public/home/images/yLeft.png"  class="small_img" /><img src="/Public/home/images/yRight.png"  class="small_img"/><img src="/Public/home/images/yLeft.png"  class="small_img" /><img src="/Public/home/images/yRight.png"  class="small_img"/><img src="/Public/home/images/yLeft.png"  class="small_img" /><img src="/Public/home/images/yRight.png"  class="small_img"/>                </dd>
				</dl>
			<!--关联商品-->

			<dl class="intro_List" data=<?php echo ($data1["id"]); ?>>
					<dt>购买数量：</dt>
					<dd>
						<a href="javascript:void(0)" onclick="javascript:ZTEMvcLayout.AddReduce(0);" class="reduce"></a>
						<input name="txtQty" id="txtQty" type="text" style="height:22px;" value="1" />
						<a href="javascript:void(0)" onclick="javascript:ZTEMvcLayout.AddNum(0);" class="add"></a>
					</dd>
			</dl>
				<button  class="buy_Btn addCart" id="cart">加入购物车</button><div id="stock" data="<?php echo ($data1["stocks"]); ?>">库存 : <?php echo ($data1["stocks"]); ?>件</div>
		</div>
</div>
    <!--优惠套餐-->
<script>
    $(function () {
        var a = $('.choose input[type=checkbox]');
        for (var idx = 0; idx < a.length; idx++) {
            var ele = a[idx];
            ele.checked = false;
        }
    })
</script>
<!--优惠套餐-->
<div style="clear:both"></div>

<div class="package tabArea">
<div style="clear:both"></div>
    <div class="tabhd">
        <ul>
            <li class="cur" id="t1">优惠套餐 1</li>
            <li id="t2">优惠套餐 2</li>
        </ul>
    </div>
	<div style="clear:both;"></div>
    <div class="tabbd">

	 <div class="item" style="display:block">
	  <div class="package_left">
	  
       <ul>
            	<li>
						
				<img src="/Public/upload/<?php echo ($data1["firstpic"]); ?>" style="width:100px;height:110px;"/>
                <p><?php echo ($data1["goodsname"]); ?>× 1</p>
						
                </li>

                <li class="add"><img src="/Public/upload/add.jpg"  /></li>
                <?php if(empty($data6)): ?><li>
                        
							<a href="#">
				<img src="/Public/upload/first_f3_13.jpg" style="width:110px;height:110px;" />
				<p>中兴手机延保服务 A类 全国联保贴心服务。自购机之日起延保服务自动激活。 × 1</p>
				<span>￥158.00</span>
                    </a>
                        
                </li>
                  <?php else: ?>  
                  <li>                        
							<img src="/Public/upload/<?php echo ($data6["pic1"]); ?>" style="width:110px;height:110px;" />                    
                  </li>
                            <li class="add"><img src="/Public/upload/add.jpg"  /></li>
                  <li>                        
							<img src="/Public/upload/<?php echo ($data6["pic2"]); ?>" style="width:110px;height:110px;" />                    
                  </li><?php endif; ?>
        </ul>
		
       </div>
	   
		<div class="package_Right">
			<p>原   价：￥<?php echo ($data1["price"]); ?></p>
			<em>中兴套装价：￥<?php echo ($data1['price']+158-46); ?></em>
			<p>立即节省：￥46.00</p>
			
			<button class="buy_Btn" onclick="gets('46')">加入购物车</button>
		</div>
	</div>
	<div style="clear:both;"></div>
	<div class="item" style="display:none">
		<div class="package_left">
			<ul>
						<li>
						
								<img src="/Public/upload/<?php echo ($data1["firstpic"]); ?>" style="width:100px;height:110px;"/>
								<p><?php echo ($data1["goodsname"]); ?>× 1</p>
						
						</li>

					<li class="add"><img src="/Public/upload/add.jpg"  /></li>
					<li>
					
							<img src="/Public/upload/sui.jpg" style="width:110px;height:110px;" />
							<p>意外碎屏服务 × 1</p>
							<span>￥58.00</span>
					</li>
			</ul>
		</div>
		<div class="package_Right">
			<p>原   价：￥<?php echo ($data1["price"]); ?></p>
			<em>中兴套装价：￥<?php echo ($data1['price']+30); ?></em>
			<p>立即节省：￥28.00</p>
			
			<button class="buy_Btn" onclick="gets('28')">加入购物车</button>
		</div>
	</div>
	<div style="clear:both;"></div>
    </div>
</div>
<div style="clear:both"></div>  

    <div class="bottom_Bar">
    <div class="bottom_Left">
            <!--热销榜-->
            <!-- 同价位热销商品列表-->
			<div class="hot_Sale">
				<h2><b>HOT</b> 热销商品排行榜</h2>
				<ul class="hot_List">
				<?php if(is_array($data)): foreach($data as $key=>$goods): if(in_array(($goods["id"]), explode(',',"8,10,13,7,11"))): ?><li>
							<a href="/index.php/Index/detail/id/<?php echo ($goods["id"]); ?>"  target="_blank" >
								<img src="/Public/upload/<?php echo ($goods["firstpic"]); ?>" height="220" width="220" />
								<p><?php echo ($goods["goodsname"]); ?></p>
								<em></em>
								<b>￥<?php echo ($goods["price"]); ?></b>
							</a>
						</li><?php endif; endforeach; endif; ?>
				  </ul>
			</div>
			<?php if($looked): ?><div class="hot_Sale">
				<h2>最近浏览过的商品</h2>
				 <ul class="hot_List">
				 <?php if(is_array($looked)): foreach($looked as $key=>$goods): ?><li>
							<a href="/index.php/Index/detail/id/<?php echo ($goods["id"]); ?>"  target="_self">
								<img src="/Public/upload/<?php echo ($goods["firstpic"]); ?>" height="220" width="220" />
								<p><?php echo ($goods["goodsname"]); ?></p>
								<em></em>
								<b>￥<?php echo ($goods["price"]); ?></b>
							</a>
						</li><?php endforeach; endif; ?>
				  </ul>
			</div><?php endif; ?>
     </div>
        <!-- 商品详情、规格参数、包装清单、售后服务、客户评价 -->
   <div class="bottom_Right tabArea"  id="pagenav">
    <ul class="tabhd">
        <li class="cur" id="det1" onclick="get(1)">产品简介</li>
        <li onclick="get(2)" id="det2">规格参数</li>
        <li onclick="get(3)" id="det3" >用户评论<span>（<?php echo ($count); ?>）</span></li>
        <li onclick="get(4)" id="det4">售后服务</li>
        <li onclick="get(5)" id="det5" style="width:163px;">包装清单</li>
    </ul>
    <div class="tabb" style="border:1px solid #CCC">
        <!--产品简介-->
        <div class="d1">
            <p style="text-align: center"><img src="/Public/upload/d1.jpg"></p>
        </div>
		<!--产品简介-->
		<!--规格参数-->
        <div class="d2" style="display:none">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="parameters_Table">
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>主体</strong>
                            </th>
                            <tr>
                                <td class="first">颜色</td>
                                <td></td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">操作系统版本</td>
                                <td>Android4.4</td>
                            </tr>
                            <tr>
                                <td class="first">用户界面</td>
                                <td>MF3.0UI</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">CPU品牌</td>
                                <td>高通</td>
                            </tr>
                            <tr>
                                <td class="first">CPU型号</td>
                                <td>骁龙8974AC</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">CPU频率</td>
                                <td>2.5Ghz</td>
                            </tr>
                            <tr>
                                <td class="first">CPU核数</td>
                                <td>四核</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>网络</strong>
                            </th>
                            <tr class="oddTd">
                                <td class="first">双卡机类型</td>
                                <td>双卡双待双通双4G</td>
                            </tr>
                            <tr>
                                <td class="first">4G网络制式</td>
                                <td>移动4G、联通4G、电信4G</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">3G网络制式</td>
                                <td>移动3G、联通3G、电信3G</td>
                            </tr>
                            <tr>
                                <td class="first">2G网络制式</td>
                                <td>移动2G、联通2G、电信2G</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>存储</strong>
                            </th>
                            <tr class="oddTd">
                                <td class="first">机身内存</td>
                                <td>16GB</td>
                            </tr>
                            <tr>
                                <td class="first">运行内存</td>
                                <td>3GB</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">最大存储扩展</td>
                                <td>128GB</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>显示</strong>
                            </th>
                            <tr>
                                <td class="first">屏幕尺寸</td>
                                <td>5.5英寸</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">分辨率</td>
                                <td>1920*1080</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>感应器</strong>
                            </th>
                            <tr>
                                <td class="first">GPS模块</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">重力感应</td>
                                <td>支持</td>
                            </tr>
                            <tr>
                                <td class="first">光线感应</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">距离感应</td>
                                <td>支持</td>
                            </tr>
                            <tr>
                                <td class="first">电子罗盘</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">陀螺仪</td>
                                <td>支持</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>摄像功能</strong>
                            </th>
                            <tr>
                                <td class="first">后置摄像头</td>
                                <td>1600万</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">前置摄像头</td>
                                <td>800万</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>传输功能</strong>
                            </th>
                            <tr>
                                <td class="first">Wi-Fi</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">蓝牙</td>
                                <td>支持</td>
                            </tr>
                            <tr>
                                <td class="first">WIFI热点</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">OTG</td>
                                <td>支持</td>
                            </tr>
                            <th colspan="2" style="text-align:center;line-height:38px;">
                                <strong>其他</strong>
                            </th>
                            <tr>
                                <td class="first">SIM卡尺寸</td>
                                <td>micro SIM</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">电池容量（mAh）</td>
                                <td>3100</td>
                            </tr>
                            <tr>
                                <td class="first">电池更换</td>
                                <td>支持</td>
                            </tr>
                            <tr class="oddTd">
                                <td class="first">机身尺寸（mm）</td>
                                <td>154mm x 77mm x 9.8mm</td>
                            </tr>
            </table>
        </div>
		<!--规格参数-->
		<!--用户评论-->
		<div class="d3" style="display:none">
			<ul class="comment_Tabhd" style="background-color: #FFF;">
				<li><a href="javascript:;" onclick=>全部评论（<?php echo ($count); ?>）</a></li>
				<li><a href="javascript:;" onclick=>好评（<?php echo ($count0); ?>）</a></li>
				<li><a href="javascript:;" onclick=>中评（<?php echo ($count1); ?>）</a></li>
                <li><a href="javascript:;" onclick=>差评（<?php echo ($count2); ?>）</a></li>
				<li><a href="javascript:;" onclick=>有晒单的评论（0）</a></li></a>
			<li class="mytradecomment" style="font-size:14px; float:left;"><a href="javascript:;" onclick="DBCMvcLayout.CheckLogin('/UserHome/MytradeComment?productId=311',3,311)">我要评论</a></li>
		   </ul>
           <div class="lun">
			<div class="comment_Tabbd">
				<div class="item2" id="item2">
                
				</div>
               
                <div  class="com" style="display:none"  >
               评论 <input name="good[]" type="radio" value="1">好评
               <input name="good[]" type="radio" value="2">中评
               <input name="good[]" type="radio" value="3">差评<br>
			   <div class="xinxin" style="margin:0 35px;">
               <img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>
               </div>                       
			   <textarea rows="5" cols="70" style="resize:none;overflow:hidden;border-radius:20px;"></textarea><br>
               <button class="comtj">提交</button>
               </div>
			   </div>
          
           
           </div> 
		</div>
		<!--用户评论-->
		<!--售后服务-->
        <div class="d4" style="display:none">
            <div class="on_sale">售后服务守则</div>
            <div class="rule">
                自商品售出之日（以实际收货日期为准）起7日内可以退换货，15日内可以换货，您可在线提交返修/退换申请办理退换货事宜。具体退换货标准如下：
            </div>
            <div class="rule_Content">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="rule_Table">
                    <col width="154" />
                    <col width="154" />
                    <col width="154" />
                    <col width="154" />
                    <col width="154" />
                    <col width="154" />
                    <thead>
                        <tr>
                            <th>退换类别</th>
                            <th>具体描述</th>
                            <th>是否支持7天<br />
                                （含）内退换货</th>
                            <th>是否支持15天<br />
                                （含）内换货</th>
                            <th>返回运费</th>
                            <th>备注</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>国家法律所规定的功能性故障或商品质量问题</td>
                            <td>经由厂家指定或特约售后服务中心检测确认，并出具检测报告或经厂家售后确认属于商品质量问题。</td>
                            <td class="tc">是</td>
                            <td class="tc">是</td>
                            <td class="tc">否</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>到货物流损、缺件或商品描述与网站不符等原因</td>
                            <td>物流损指在运输过程中造成的损坏、破碎、性能故障，经售后人员核查情况属实。缺件指商品原装配件缺失。</td>
                            <td class="tc">是</td>
                            <td class="tc">是</td>
                            <td class="tc">否</td>
                            <td>审核期间可能需要快递人员证明或要求您提供实物照片等，以便售后快速做出判断并及时处理。</td>
                        </tr>
                        <tr>
                            <td>其他原因</td>
                            <td>除以上两种原因之外，如个人原因导致的退换货，未使用且不影响二次销售（商品原包装未拆封）。</td>
                            <td class="tc">是</td>
                            <td class="tc">是</td>
                            <td class="tc">否</td>
                            <td>由客户承担商品返回的运费。</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rule_Intro">
                <h2><em>1.</em><p>判断实际收货日期规则：</p>
                </h2>
                <div class="answer">
                    <p>以客户实际签收日期为准，客户没有直接签收的以物流送达或订单/发票日期为准；</p>
                </div>
                <h2>
                    <em>2.</em>
                    <p>
                        在商品无任何问题情况下，MYZTE承诺：自您实际收到货物日期起7日内，只要未使用且不影响二次销售，
                            商品返回运费由您承担的情况下，可以全额退货。 特别说明，以下情况不予办理退换货：
                    </p>
                </h2>
                <div class="answer">
                    <p><em>1、</em><span>任何非MYZTE出售的商品（序列号不符）；</span></p>
                    <p><em>2、</em><span>过保商品（超过三包保修期的商品）；</span></p>
                    <p><em>3、</em><span>未经授权的维修、误用、碰撞、疏忽、滥用、进液、事故、改动、不正确的安装所造的商品质量问题，或撕毁、涂改标贴、机器序号、防伪标记；</span></p>
                    <p><em>4、</em><span>无法提供商品的发票、保修卡等三包凭证或者三包凭证信息与商品不符及被涂改的；</span></p>
                    <p><em>5、</em><span>产品已使用（质量问题除外）；</span></p>
                    <p><em>6、</em><span>其他依法不应办理退换货的。</span></p>
                </div>
            </div>
            <div class="rule_Intro">
                <h3>售后服务细则</h3>
                <h2>退换货时限</h2>
                <div class="answer">
                    <p>产品自售出之日（以实际收货日期为准）起7日内可退货，15日内可换货；</p>
                </div>
                <h2>退换货原因</h2>
                <div class="answer">
                    <p>商品质量问题或不影响二次销售的退货；</p>
                </div>
                <h2>处理流程</h2>
                <div class="answer">
                    <p>
                        <em>1、</em>
                        <span>属于质量问题的，将厂家售后服务中心开具的检测报告（维修检验单据）、附件、说明书、发票、保卡、购物凭证、包装、
                                问题商品（主板类产品需写明故障原因），一并返回我司办理退换货手续。
                        </span>
                    </p>
                    <p>
                        <em>2、</em>
                        <span>如果顾客在使用时对商品质量表示置疑，请出具书面鉴定，我们会按照国家法律规定予以处理。</span>
                    </p>
                    <p>
                        <em>3、</em>
                        <span>对于存储类商品，厂家概不提供数据导出服务，请务必在返修前将里面的数据自行导出，否则若有数据遗失、损坏等厂家概
                                不承担相应的责任。
                        </span>
                    </p>
                </div>
                <h2>注意事项</h2>
                <div class="answer">
                    <p>
                        <em>1、</em>
                        <span>手机等通过软件升级可以排除的故障，只要送至当地生产厂家指定或特约售后服务中心升级即可，不予退换货。</span>
                    </p>
                    <p>
                        <em>2、</em>
                        <span>如当地无ZTE授权检测、维修中心的，退回工厂帮助顾客代检代修，检测周期为：代检7到15天，代修30天，自售后收货时间起算。</span>
                    </p>
                </div>
            </div>
        </div>
        <!--售后服务-->
		<!--包装清单-->
         <div class="d5" style="display:none">
                <span>商家还没有给出清单哦！</span>
         </div>
		<!--包装清单-->
     </div>
    </div>
<!--传值参数：1.商品信息  2.商品清单-->

    </div>
</div>
<div class="clr"></div>


<script type="text/javascript">
    function get(ob){
	      switch(ob){
		     case 1:
			    $('#det1').siblings().css('background','#FFFFFF');
			    $('#det1').css('background','#F6F6F6');
				$('.d1').css('display','block');
				$('.tabb>div:not(.d1,)').css('display','none');
			 break;
			 case 2:
			    $('#det2').siblings().css('background','#FFFFFF');
			    $('#det2').css('background','#F6F6F6');
				$('.d2').css('display','block');
				$('.tabb>div:not(.d2)').css('display','none');
				
			 break;
			 case 3:
			    $('#det3').siblings().css('background','#FFFFFF');
			    $('#det3').css('background','#F6F6F6');
				$('.d3').css('display','block');
				$('.tabb>div:not(.d3)').css('display','none');
			 break; 
		     case 4:
			    $('#det4').siblings().css('background','#FFFFFF');
			    $('#det4').css('background','#F6F6F6');
				$('.d4').css('display','block');
				$('.tabb>div:not(.d4)').css('display','none');
			 break; 
		     case 5:
			    $('#det5').siblings().css('background','#FFFFFF');
			    $('#det5').css('background','#F6F6F6');
				$('.d5').css('display','block');
				$('.tabb>div:not(.d5)').css('display','none');
			 break; 		  	  
		  }  
	   }
    $("#det3").click(function(){   
        var typeid=<?php echo ($_GET['id']); ?>;
        getlun(typeid);        
       }) 
    function getlun(typeid){     
       var data={"gid":typeid};
       $.post("/index.php/comment/comment.html",data,function(d){
                   var html = '';                   
                   for(var i in d){
         
                   if(d[i].com_level=="1"){
                        
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  }                 
                  if(d[i].com_level=="2"){
                        
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  } 
                  if(d[i].com_level=="3"){
                        
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  } 
                   }
                 
                    $(".item2").html(html);
                    $(".comlist:even").css("background","#fff");
                    $(".comlist:odd").css("background","#F5F5F8"); 
                 $(".d3").find("li:first").addClass("papapa").siblings().removeClass("papapa");
                    },"json");}
        $(".d3 li").click(function(){
                $(this).addClass("papapa").siblings().removeClass("papapa");
                });
        $(".d3" ).find("li:first").click(function(){
                var typeid=<?php echo ($_GET['id']); ?>;          
                var papa='';
            papa +="<div style='margin:50px 50%'><img style='width:20px'src='/xm1/Public/home/images/progressBar_s.gif' ></div>"
            $(".item2").html(papa);
                getlun(typeid);
        })
        
        $(".d3 li").eq(1).click(function(){
            var typeid=<?php echo ($_GET['id']); ?>; 
            var level=1    
         
             var   papa='';
             
            papa +="<div style='margin:50px 50%'><img style='width:20px'src='/xm1/Public/home/images/progressBar_s.gif' ></div>"
            $(".item2").html(papa);
            getlun1(level);
        })
        $(".d3 li").eq(2).click(function(){
                    

            var typeid=<?php echo ($_GET['id']); ?>; 
             var  level=2      
             var   papa='';
            papa +="<div style='margin:50px 50%'><img style='width:20px'src='/xm1/Public/home/images/progressBar_s.gif' ></div>"
            $(".item2").html(papa);
            getlun2(level);
        })
           function getlun2(level){
        var typeid=<?php echo ($_GET['id']); ?>; 
        var data={"gid":typeid,"level":level};
       $.post("/index.php/comment/comment1.html",data,function(d){
                   var html = '';                   
                   for(var i in d){    
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  }                 
              
                 
                    $(".item2").html(html);
                    $(".comlist:even").css("background","#fff");
                    $(".comlist:odd").css("background","#F5F5F8"); 
                    $(".d3 li").eq(2).addClass("papapa").siblings().removeClass("papapa");
                    },"json");}
        
        $(".d3 li").eq(3).click(function(){
            var typeid=<?php echo ($_GET['id']); ?>; 
             var  level=3
             var   papa='';
            papa +="<div style='margin:50px 50%'><img style='width:20px'src='/xm1/Public/home/images/progressBar_s.gif' ></div>"
            $(".item2").html(papa);
            getlun3(level);
        })
           function getlun3(level){
        var typeid=<?php echo ($_GET['id']); ?>; 
        var data={"gid":typeid,"level":level};
       $.post("/index.php/comment/comment1.html",data,function(d){
                   var html = '';                   
                   for(var i in d){    
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  }                 
              
                 
                    $(".item2").html(html);
                    $(".comlist:even").css("background","#fff");
                    $(".comlist:odd").css("background","#F5F5F8"); 
                    $(".d3 li").eq(3).addClass("papapa").siblings().removeClass("papapa");
                    },"json");}
        
           function getlun1(level){
        var typeid=<?php echo ($_GET['id']); ?>; 
        var data={"gid":typeid,"level":level};
       $.post("/index.php/comment/comment1.html",data,function(d){
                   var html = '';                   
                   for(var i in d){    
                    var gg= "<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
                    html +="<div class=\"comlist\" >"+"<div class='left'>"+" <p style='color:orange'>"+d[i].username+"</p>"+"<p>"+d[i].ptime+"</p></div>"+"<div class='right'>"
                    + "<div class='message'>"+"<b>评分：</b>"
                    +gg+"</div>" 
                    +"<div class='message'>"+"<b>评论：</b>"+ d[i].com_contain+"</div>"
                     +"<div class='message'>"+"<b>商城回复：</b> 您好，感谢您对中兴手机商城的支持和关注，祝您生活愉快"+"</div>"+"</div>"+"</div>"
                  }                 
              
                 
                    $(".item2").html(html);
                    $(".comlist:even").css("background","#fff");
                    $(".comlist:odd").css("background","#F5F5F8"); 
                    $(".d3 li").eq(1).addClass("papapa").siblings().removeClass("papapa");
                    },"json");}
                    
        $(".d3 li").eq(2).click(function(){
            var papa='';
        $('.item2').empty();
        })
       
       
        $(".d3 li").eq(5).click(function(){
            var user="<?php echo ($_SESSION['user']); ?>"
          if (user==""){
            alert("请先登录再评论")
            return false;
          }else{
                    $('.com').css("display","block");       
          }
            
        })
        $(".d3 button").click(function(){
         var user="<?php echo ($_SESSION['user']['id']); ?>"
         var gid="<?php echo ($_GET['id']); ?>"
          var good=  $("input[checked]").val();  
     
         var typeid=gid;
         var content=$(".d3 textarea").val();
		  alert('评论成功') 
         $(".com textarea").val("");
         var  data={"uid":user,"content":content,"gid":gid,"good":good};
           $.post("/index.php/comment/add.html",data,function(d){
      
            var  html=""
            html +="全部评论（"+d[0]+"）"
            var  htmla=""
            htmla +="好评（"+d[1]+"）"
            var  htmlb=""
            htmlb +="中评（"+d[2]+"）"
            var  htmlc=""
            htmlc +="差评（"+d[3]+"）"
            
            $(".d3 a").eq(0).html(html)
            $(".d3 a").eq(1).html(htmla)
            $(".d3 a").eq(2).html(htmlb)
            $(".d3 a").eq(3).html(htmlc)
            $(".tabhd span").html("("+d[0]+")")  
			getlun(typeid);  
           },"json")
          
        })
		  $(".com input").eq(0).click(function(){
           var  html=""
            html +="<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
            $(".xinxin").html(html);
        }) 
        $(".com input").eq(1).click(function(){
           var  html=""
            html +="<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'><img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
            $(".xinxin").html(html);
        }) 
        $(".com input").eq(2).click(function(){
           var  html=""
            html +="<img src='/xm1/Public/home/images/yLeft.png'><img src='/xm1/Public/home/images/yRight.png'>"
            $(".xinxin").html(html);
        })
</script>

<script type="text/javascript">
	$(function(){			
	   $(".jqzoom").jqueryzoom({
			xzoom:400,
			yzoom:400,
			offset:10,
			position:"right",
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:350,
			height:56,
			step:2,
			speed:4,
			delay:10,
			control:true,
			_front:"#spec-right",
			_back:"#spec-left"
		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});				
	})
	

var id = $('#cart').prev().attr('data');


//判断商品的库存
$('#cart').click(function(){
var uid = "<?php echo ($_SESSION['user']['id']); ?>";
if(!uid){
window.location.href = "/index.php/Login/index";
return false;
}
var nums = $('#txtQty').val();
var urll = "/index.php/Index/cart";
var qtys = $('#stock').attr('data');
var num = parseInt(nums);
var qty = parseInt(qtys);
if(num > qty){
alert('亲,此款商品库存不足');
}else{
	$.ajax({
	   type: "POST",
	   url: "/index.php/Index/cart",
	   data: {'id':id,'num':num},
	   dataType:'json',
	   async:false});
}
window.location.href = urll;
});

//判断套餐的选择
$('#t1').click(function(){
	$(this).css('background','#F6F6F6');
	$('#t2').css('background','#FFFFFF');
	$('.item:eq(0)').css('display','block');
	$('.item:eq(1)').css('display','none');
});
$('#t2').click(function(){
	$(this).css('background','#F6F6F6');
	$('#t1').css('background','#FFFFFF');
	$('.item:eq(1)').css('display','block');
	$('.item:eq(0)').css('display','none');
});


//套餐加入购物车确认
function gets(ob){
var uid = "<?php echo ($_SESSION['user']['id']); ?>";
if(!uid){
window.location.href = "/index.php/Login/index";
return false;
}
var nums = $('#txtQty').val();
var qtys = $('#stock').attr('data');
var num = parseInt(nums);
var qty = parseInt(qtys);
var urll = "/index.php/Index/cart";

if(num > qty){
alert('亲,此款商品库存不足');
}else{
	if(ob == 28){
		$.ajax({
			type: "POST",
			url: "/index.php/Index/cart",
			data: {'id':id,'num':num,'tc':'30'},
			dataType:'json',
			async:false});
	}
	if(ob == 46){
	     $.ajax({
			type: "POST",
			url: "/index.php/Index/cart",
			data: {'id':id,'num':num,'tc':'112'},
			dataType:'json',
			async:false});
	}
}
window.location.href = urll;
}
</script>
  

<!--footer start-->
<div id="footer">
    <div class="footer">
        <div class="guarantee">
            <p class="seven_M">
                <i class="seven"></i>
                7 天退货保障
            </p>
            <p class="promise_M">
                <i class="promise"></i>
                30 天换货承诺
            </p>
            <p class="postage">
                <i class="free_Postage"></i>
                150 元起全场免运费
            </p>
            <p class="service">
                <i class="customer_Service"></i>
                1300 余家售后服务点
            </p>
        </div>
        <div class="quick_Link">
            <div class="quick_Link_Content contact_Us">
                <h2><a href="/index.php/help/connect_us.html" target="_blank">联系我们</a></h2>
                <a href="/index.php/help/sina.html" target="_blank">新浪微博</a>
                <a href="/index.php/help/current_wx.html" target="_blank">官方微信</a>
                <a href="/index.php/help/star_discuz.html" target="_blank">星星论坛</a>
            </div>
            <p class="spread_Line"></p>
            <div class="quick_Link_Content help_Center">
                <h2><a href="/index.php/help/shopping_item.html" target="_blank">帮助中心</a></h2>
                <a href="/index.php/help/shopping_item.html" target="_blank">购物指南</a>
                <a href="/index.php/help/send_item.html" target="_blank">配送指南</a>
                <a href="/index.php/help/pay_method.html" target="_blank">支付方式</a>
            </div>
            <p class="spread_Line"></p>
            <div class="quick_Link_Content after_Service">
                <h2><a href="" target="_blank">售后服务</a></h2>
                <a href="/index.php/help/repair_policy.html" target="_blank">保修政策</a>
                <a href="/index.php/help/exchange_policy.html" target="_blank">退换货政策</a>
                <a href="/index.php/help/exchange.html" target="_blank">退换货流程</a>
                <a href="/index.php/help/after_sale.html" target="_blank">售后网点</a>
            </div>
            <p class="spread_Line"></p>
            <div class="quick_Link_Content about_Us">
                <h2><a href="/index.php/help/about_us.html" target="_blank">关于我们</a></h2>
                <a href="/index.php/help/about_zte.html" target="_blank">关于中兴</a>
                <a href="/index.php/help/xinglianda.html" target="_blank">兴联达</a>
                <a href="/index.php/help/shop_discribe.html" target="_blank">商城简介</a>
                <a href="/index.php/help/connect_us.html" target="_blank">联系我们</a>
            </div>
            <div class="hotline">
                <strong>400-880-9999</strong>
                <em>周一到周日 8:30 - 20:30（全年无休）</em>
                <a href="javascript:void(0)" target="_blank">在线客服</a>
            </div>
        </div>

        <div class="clearFix friend_Link">
            <dl>
                <dt>友情链接：</dt>
				<?php echo W('Flink/getFlink');?>
            </dl>
        </div>
        <div class="copyright">
            <p>
                <a href="">星星论坛</a>|
				<a href="">中兴通讯</a>|
				<a href="">汇天地</a>|
				<a href="">中兴云服务</a>|
				<a href="">中兴手机</a>
            </p>
            <p>&copy;<?php echo ($config["copyright"]); ?> 中兴通讯股份有限公司 版权所有，并保留所有权利。 ICP备案证书号：
				<a href=""><?php echo ($config["icpno"]); ?></a>
			</p>
        </div>
    </div>
</div>
<script src="/Public/home/js/jquery.lazyload.min.js-t=.js" type="text/javascript"> </script>
</body><?php endif; ?>
</html>