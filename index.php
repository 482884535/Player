<?php
$url = $_GET['url'];
if (empty($url)) {
exit('<html>
<head>
  <meta charset="UTF-8" />
  <title>残月解析 - 弹幕播放器</title>
  <link rel="shortcut icon" href="favicon.ico">
  <meta name="keywords" content="残月解析,弹幕播放器">
  <meta name="description" content="残月解析 - 弹幕播放器 ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="x5-orientation" content="portrait" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <style>
body,html {
	font: 18px"Microsoft Jhenghei",Arial,Lucida Grande,Tahoma,sans-serif;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	overflow-x: hidden;
	overflow-y: hidden;
	background-color: black
}

#loading {
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	text-align: center;
	display: table;
	position: absolute;
	z-index: 10000000001;
	background-size: 100%100%
}

h1 {
	color: #ffffff;
	font-size: 1.2rem;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	display: table-cell
}
</style>
</script>
 </head>
 <body>
  </div>
  <div id="loading" class="center">
<h1 style="text-shadow: 2px 2px 5px #d5ebe1;">仅供内部交流研究，请勿用于任何商业用途 <br><br><br><br><br>    <font size="10">解析失败 URL为空，请稍后再试 ~ </font><br><br><font size="3"><p></p><p><p><br></p><p><br></font><font size="2"><br>本站均来于互联网，请勿用于商业用途，仅供学习交流
<br><a href="/" target="_Blank"> Copyright © 2023 All Rights Reserved </a></font></h1>
</body>
</html>');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta charset="UTF-8">
<title> 残月解析 - 弹幕播放器</title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="keywords" content="残月解析,弹幕播放器">
<meta name="description" content="残月解析 - 弹幕播放器 ">
<link rel="stylesheet" href="./css/canyue.css">
<style> 
.qianyi-full-icon span svg,.qianyi-fulloff-icon span svg{display: none;}
.qianyi-full-icon span,.qianyi-fulloff-icon span{background-size:contain!important;float: left;width: 22px;height: 22px;}
.qianyi-full-icon span{background: url(./img/full.png) center no-repeat;}
.qianyi-fulloff-icon span{background: url(./img/fulloff.webp.jpg) center no-repeat;}
#loading-box {background: #!important;}
</style>
<script src="./js/canyue.js"></script>
<script src="./js/md5.min.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/hls.min.js"></script>
<script src="./js/layer.js"></script>

<script>
var css ='<style type="text/css">';
var d, s ;
d = new Date();
s = d.getHours();
if(s<17 || s>23){ 
css+='#loading-box{background: #fff;}';//白天
}else{
css+='#loading-box{background: #000;}';//晚上
}
css+='</style>';
//$('head').append(css).addClass("");
</script>

</head>
<body>
<div id="player"></div>
<script>
    // 播放器基本设置
    var playlink ="",urlpar ='canyue';
    var dmapi = 'https://api.noome.cn/dmku',vodurl = '<?php echo $_GET['url']; ?>',vodid="",vodsid="",vodpic="https://api.dujin.org/bing/1920.php",vodname="",next = "";
    var pic="https://api.dujin.org/bing/1920.php";
    var playnext = ""+next ;
    var user = '',group = "",color = '#00a1d6',logo ='',autoplay = false;
    var danmuon = 1,laoding = 1,diyvodid = 0,pause_ad = 0,usernum = "<?php echo mt_rand(100,10000); ?>";;
	var pbgjz = ['草','操','妈','逼','滚','网址','网站','支付宝','企','q','n','o','c','m','e','垃圾','微信','qq','卧槽','影视'];
    if(playlink!=''){ }else {var diyvodid = 1;};
    var dmrule = ""
    diyid = md5(vodurl),diysid = 1;
    function video_end() {alert("播放结束啦=。=")};
</script>
<script src="./js/setting.js"></script>

</body>
</html>
