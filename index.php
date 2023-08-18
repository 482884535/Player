<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta charset="UTF-8">
<title> 残月解析 - 弹幕播放器</title>
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
    var dmapi = 'https://api.noome.cn/dmku',vodurl = '<?php echo $_GET['url']; ?>',vodid="",vodsid="",vodpic="https://api.mysqil.com/API/bing.php",vodname="",next = "";
    var pic="https://api.mysqil.com/API/bing.php";
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