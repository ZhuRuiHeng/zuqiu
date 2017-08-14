<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>内容足球</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/order.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/bet_maincotrol.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/live.css">
</head>
<body>
  <div>
    <span id="time1">600</span>
    <span id="time2" >500</span>
    <span id="time3" >400</span>
    <span id="time4" >300</span>
  </div>

</body>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
function formatTime(shijain,id) {
  //return [parseInt(second / 60 / 60), second / 60 % 60, second % 60].join(":").replace(/\b(\d)\b/g, "0$1");
 return Math.floor(shijain/60)+"分"+(shijain-Math.floor(shijain/60)*60)+"秒";
//alert( "时间:"+Math.floor(s/60))+"分"+(s-Math.floor(s/60)*60)+"秒";
  console.log(id)
}
  //alert(formatTime(700));
  var time1 = formatTime(700);
  var time2 = formatTime(600);
  var time3 = formatTime(500);
  var time4 = formatTime(400);
  //alert(time1);
  $("#time1").html(time1);
  $("#time2").html(time2);
  $("#time3").html(time3);
  $("#time4").html(time4);


// var s = 60;
// function showtime(){
//     document.getElementById('m').innerHTML = m;
//     document.getElementById('s').innerHTML = s;
//     s = s-1;
//     if(s==0){
//         m = m -1;
//         s = 60
//     }
//     if(m==0){
//         window.location='http://www.ewceo.com';//倒计时结束跳转到www.ewceo.com
//     }
// }
// clearInterval(settime);
// var settime = setInterval(function(){
//     showtime();
// },1000);

</script>
</body>
</html>