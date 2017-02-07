<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>AXON天机 - 中兴手机官网</title>

<link rel="stylesheet" href="/Public/home/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/Public/home/css/main.css" />
<script type="text/javascript" src="/Public/home/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/js/main.js"></script>
<script type="text/javascript" src="/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/Public/home/js/jquery.mousewheel.min.js'></script>
<script type="text/javascript" src='/Public/home/js/index.js'></script>
<script>
//参数设定
var time=3000;//切换时间
ntime=3000//nav变换时间；
</script>
</head>
<body>
     <div id="header">
	      <img src="/Public/home/images/page01_bg.jpg" class="p1">
	      <img src="/Public/home/images/logo.png" class="p2">
	      <img src="/Public/home/images/page01_title.png" class="p3">
	      <div id="d1">
			  <ul>
		          <li><a href="/index.php/index/index.html">概述</a></li>
		          <li><a href="/index.php/index/index_pro.html">图集</a></li>
		          <li><a href="/index.php/index/index_video.html">视频</a></li>
		          <li><a href="/index.php/index/index_rence.html">发布会</a></li>
                  <a href="/index.php/index/detail/id/23"><button type="button" class="btn btn-warning">立即抢购</button></a>
                  <a href="/index.php/index/zte_first"><button type="button" class="btn btn-warning">终端官网</button></a>			  
		      </ul>  	  
	      </div> 	    
	 </div>
	 <div id="content_1">
	      <img src="/Public/home/images/page02_pro.png" class="p4">
         <div id="c1">
		      <p><h1>驭 · 所型</h1></p>
		      <div id="c2">
		           <div id="c3"></div>
		           <div id="c4"></div>
		           <div id="c5"></div>
		           <div id="c6"></div>
	          </div>
			  <div id="c7">
			     <p><span>美国波音御用设计公司TEAGUE打造</span></p>
			     <p><span>5.1mm视觉厚度</span></p>
			     <p><span>机身正面两端特有奢享云纹设计</span></p>
			     <p><span>机身背面的弧形曲线造就舒适握控手感</span></p>
			  </div>
	      </div>	  
	 </div>
     <div id="content_2">
	        <img src="/Public/home/images/page03_pro.png" class="p5">
			<div id="content_2_1">
	             <p>合金机身，皮纹工艺</p><br><br>
			
			<div id="content_2_2">
			     <span>奢侈品级别皮纹工艺<br>经过320次造色糅色和柔化工程</span>
		    </div>
			<div id="content_2_3">
			     <span>航铝钛合金机身，重量减轻30% ，强度提升80%<br>兼具良好导热性、抗蚀性</span>
	        </div>
			<div id="content_2_4"></div>
			<div id="content_2_5"></div>
			
			</div>
		   <img src="/Public/home/images/page03_data.png" class="p6">
			
	 </div>
     <div id="yuan">
	      <div id="y1" onclick="get(1)"></div>
	      <div id="y2" onclick="get(2)"></div>
	      <div id="y3" onclick="get(3)"></div>
	      <div id="y4" onclick="get(4)"></div>
	      <div id="y5" onclick="get(5)"></div>
	      <div id="y6" onclick="get(6)"></div>
	      <div id="y7" onclick="get(7)"></div>
	      <div id="y8" onclick="get(8)"></div>
	      <div id="y9" onclick="get(9)"></div>
	      <div id="y10"onclick="get(10)"></div>
	    
     </div>
     <div id="content_3">
	      <img src="/Public/home/images/page04_pro.png" class="p7">
	      <img src="/Public/home/images/page04_data.png"class="p8">
		  <div id="c3_1">
		  <p>驭 · 所芯</p>
		  <span>搭载高通骁龙 810处理器</span>
	      </div>
	 </div>
	 <div id="content_4">
	       <div id="c8">
			   <p>4GB内存+128GB存储+128GB可扩展</p>
			   <span>智尊（顶配）版</span>
		   </div>
		   <div id="c9">
			    <br /><br />
			    <h2>RAM4GB</h2>
			    <h2>LPDDR4</h2>
			    <span>内存带宽达到</span><br>
			    <span>前所未有的24.9GB/S</span>
		   </div>
		   <div id="c10">
			    <br /><br />
			    <h2>ROM128GB</h2>
			    <h2>eMCC5.0</h2>
			    <span>eMCC5.0读取比</span><br>
			    <span>eMCC4.5速度提升1.8倍</span>
		   </div>
		   <div id="c11">
			    <br /><br />
			    <h2>SD扩展卡</h2>
			    <h2>128GB</h2>
			    <span>128GB SD</span><br>
			    <span>可满足4个小时4K高清录制</span>
		   </div>
	  </div>
	  <div id="content5">
	        <img src="/Public/home/images/page06_pro.png" class="p9">
	        <div id="content5_1">
			     <p>驭 · 所见</p>
			</div>
	  </div>
	  <div id="content6">
	       <img src="/Public/home/images/page07_data.png"class="p10">
	       <div id="content6_1">
		        <p>仿生学双摄像头，来自生物的启迪</p>
		   </div>
		   <div id="content6_2">
				<span>搭载双摄像头，仿制人类视网膜呈像原理</span><br>
				<span>主摄像头采用索尼IMX214传感器技术、副摄像头采用OmniVision摄像头芯片</span><br>
				<span>双摄像头中心距离20mm、景深计算范围3m以上，结合景深和虚化效果</span><br>
				<span>单反级别双独立ISP，弱光环境下也能洞悉不凡</span>
		   </div>
		   <div id="content6_3"></div>
		   <div id="content6_4"></div>
		   <div id="content6_5"></div>
		   <div id="content6_6"></div>
	  </div>
	  <div id="content7">
	             <button type="button" class="btn btn-warning" id="c12" onclick="get(12)">超级光圈</button>
			     <button type="button" class="btn btn-warning" id="c13" onclick="get(13)">极速对焦</button>
			     <button type="button"  class="btn btn-warning"id="c14" onclick="get(14)">先拍照后对焦</button>
	        <div id="content7_2">   
			     <img src="/Public/home/images/page08_pro01.jpg" class="p11">
				 <div id="content7_3">
				      <p>超级光圈</p>
				 </div>
				 <div id="content7_4">
				      <p>F1.0到F8.0七档可调光圈，获得背景虚化程度不同的新照片；弱光环境仍能清晰捕捉细节</p>
				 </div>
			</div>
			<div id="content7_5">
			     <img src="/Public/home/images/page08_pro02.jpg" class="p12">
				 <div id="content7_6">
				      <p>0.1秒极速对焦</p>
				 </div>
				 <div id="content7_7">
				      <p>只需0.1秒，绝不错过任何精彩瞬间</p>
				 </div>	 
			</div>
			<div id="content7_8">
			     <img src="/Public/home/images/page08_pro03.jpg" class="p13">
				 <div id="content7_9">
				      <p>先拍照后对焦</p>
				 </div>
				 <div id="content7_10">
				      <p>可在照片呈像后随心选择对焦物体</p>
				 </div>	 
			</div>
	  </div>
	  <div id="content8">
	       <img src="/Public/home/images/page09_bg.jpg" class="p14">
           <div id="content8_1">
		     <p>至清影像极速捕捉</p>
	         <span>能够实现30帧每秒，4k双高清视频录制，HiFi高保真录音</span>
		   </div> 
	  </div>
	  <div id="content9">
	      
	       <img src="/Public/home/images/page18_bg.jpg" class="p15">
	      <div id="content9_1">
		       <span>搭配中兴新一代智能微投SPRO2 , 智能互联、</span>
			   <br><br>
		       <span>语音操控 , 让您的工作生活更带感！</span>
		   </div>
	  </div>
</body>


</html>