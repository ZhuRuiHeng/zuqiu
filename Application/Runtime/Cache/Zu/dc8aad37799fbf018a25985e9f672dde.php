<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Robots" contect="none">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" href="/Public/css/mem_header_ft_cn.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Public/css/mem_body_olympics_cn.css">
<script language="JavaScript" src="/Public/js/header.js"></script>

<style>
ul { display: inline;}
li { display: inline;}
</style>

</head>
<body id="HFT" class="bodyset" onload="SetRB('FT','c00ahhyrb6m17041417l153432');onloaded();" style="background-color:#AA6508;">
<div style="z-index:3000;float: left; display:none;">
	<iframe id="memOnline" name="memOnline" scrolling="NO" frameborder="NO" border="0" height="500" width="800"></iframe>
</div>
<div id="container">
  <input type="hidden" id="uid" name="uid" value="c00ahhyrb6m17041417l153432">
  <input type="hidden" id="langx" name="langx" value="zh-cn">


  <span id="welcome">
	<ul class="level1">
  	  <!--会员帐号-->
      <li class="name">您好, <strong id="userid">heming3</strong><br>
      	<span id="head_date" style=""><span id="head_year">2017</span>年<span id="head_month">7</span>月<span id="head_day">12</span>日 <span id="head_hour">10</span>:<span id="head_min">32</span></span>
      </li>
      <li class="rb" id="rb_btn" style="visibility: visible;"><span id="rbType"></span><a href="#" onclick="chg_head('http://66.133.87.55/app/member/FT_browse/index.php?rtype=re&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2'); chg_button_bg('FT','rb');" id="rbyshow" style="display:;">滚球</a>
      
        <!-- 滚球Menu Start -->
        <!--
           <ul id="RB_MENU" class="level2">
               <li class="rb_bg_left"></li>
               <li id="RB_FT" class="rb_out"><span><a href="#" onClick="Go_RB_page('FT');">足球 (<strong class="game_sum" id="RB_FT_games"></strong>)</a></span></li>
               <li id="RB_BK" class="rb_out"><span><a href="#" onClick="Go_RB_page('BK');">篮球&amp;美式足球&amp;橄榄球 (<strong class="game_sum" id="RB_BK_games"></strong>)</a></span></li>
               <li id="RB_TN" class="rb_out"><span><a href="#" onClick="Go_RB_page('TN');">网球 (<strong class="game_sum" id="RB_TN_games"></strong>)</a></span></li>
               <li id="RB_VB" class="rb_out"><span><a href="#" onClick="Go_RB_page('VB');">排球&amp;羽毛球&amp;乒乓球 (<strong class="game_sum" id="RB_VB_games"></strong>)</a></span></li>
               <li id="RB_BS" class="rb_out"><span><a href="#" onClick="Go_RB_page('BS');">棒球 (<strong class="game_sum" id="RB_BS_games"></strong>)</a></span></li>
               <li id="RB_OP" class="rb_out"><span><a href="#" onClick="Go_RB_page('OP');">其他 (<strong class="game_sum" id="RB_OP_games"></strong>)</a></span></li>
               <li class="rb_bg_right"></li>
           </ul>
				-->
        <!-- 滚球Menu End-->      
 
      
      </li>    
          
      <li class="today_on" id="today_btn"><span id="todayType" style="display:none;">今日赛事</span><a href="#" onclick="chg_head('http://66.133.87.55/app/member/FT_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_button_bg('FT','today');" id="todayshow" style="display:;">今日赛事</a></li> 
      <li class="early" id="early_btn"><span id="earlyType" style="display:none;">早盘</span> <a href="javascript:chg_button_bg('FT','early');chg_index_head('http://66.133.87.55/app/member/FT_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=future&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/FT_future/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FU_lid_type,'SI2');" id="earlyshow" style="display:'';cursor:hand;">早盘</a></li> 
      <!--Live TV-->
      <li class="live_tv"><a href="<?php echo U('Old/live');?>" target="_blank">&nbsp;</a></li>
      
    </ul>
        
    <div class="pass_div">
    <span class="pass"><a href="<?php echo U('Old/chg_passwd');?>" target="_blank" id="chg_pwd">更改密码</a></span>
    <span class="pass_for"><a href="<?php echo U('Old/set_email');?>" target="_blank" id="chg_pwd" >密码恢复<span id="mail_status" class="rednew_btn"></span></a></span>
 </div>
  </span>

  <!-- Today Menu Start -->  
  <span id="nav">
    <ul class="level1">
      <li class="ft"><span class="ball"><a href="javascript:chg_button_bg('FT','today');chg_index('http://66.133.87.55/app/member/FT_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/FT_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');">足球 (<strong class="game_sum" id="FT_games">110</strong>)</a></span></li>
      <li class="bk"><span class="ball"><a href="javascript:chg_button_bg('BK','today');chg_index('http://66.133.87.55/app/member/BK_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/BK_browse/index.php?rtype=r_main&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.BK_lid_type,'SI2');">篮球 / <span class="ball_nf"></span>美式足球<!--<span class="ball_rl"></span>橄榄球--> (<strong class="game_sum" id="BK_games">18</strong>)</a></span></li>                           
      <li class="tn"><span class="ball"><a href="javascript:chg_button_bg('TN','today');chg_index('http://66.133.87.55/app/member/TN_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/TN_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.TN_lid_type,'SI2');">网球 (<strong class="game_sum" id="TN_games">32</strong>)</a></span></li>
      <li class="vb"><span class="ball"><a href="javascript:chg_button_bg('VB','today');chg_index('http://66.133.87.55/app/member/VB_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/VB_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.VB_lid_type,'SI2');">排球 (<strong class="game_sum" id="VB_games">0</strong>)</a></span></li>
      <li class="bm"><span class="ball"><a href="javascript:chg_button_bg('BM','today');chg_index('http://66.133.87.55/app/member/BM_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/BM_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.BM_lid_type,'SI2');">羽毛球 (<strong class="game_sum" id="BM_games">0</strong>)</a></span></li>
      <li class="tt"><span class="ball"><a href="javascript:chg_button_bg('TT','today');chg_index('http://66.133.87.55/app/member/TT_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/TT_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.TT_lid_type,'SI2');">乒乓球 (<strong class="game_sum" id="TT_games">0</strong>)</a></span></li>
      <li class="bs"><span class="ball"><a href="javascript:chg_button_bg('BS','today');chg_index('http://66.133.87.55/app/member/BS_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/BS_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.BS_lid_type,'SI2');">棒球 (<strong class="game_sum" id="BS_games">0</strong>)</a></span></li>
      <li class="sk"><span class="ball"><a href="javascript:chg_button_bg('SK','today');chg_index('http://66.133.87.55/app/member/SK_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/SK_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.SK_lid_type,'SI2');">斯诺克 / 台球 (<strong class="game_sum" id="SK_games">0</strong>)</a></span></li>
      <li class="op"><span class="ball"><a href="javascript:chg_button_bg('OP','today');chg_index('http://66.133.87.55/app/member/OP_header.php?uid=c00ahhyrb6m17041417l153432&amp;showtype=&amp;langx=zh-cn&amp;mtype=4','http://66.133.87.55/app/member/OP_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4',parent.OP_lid_type,'SI2');">其他 (<strong class="game_sum" id="OP_games">11</strong>)</a></span></li>
    </ul>
  </span>
    
  <div id="type">
    <ul>
      <!--li class="rb"><a id="rb_class" class="type_out" href="#" onClick="chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=re&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=',parent.FT_lid_type,'SI2'); chg_button_bg('FT','rb');chg_type_class('rb_class');" >滚球<span class="rb_sum"> (<span class="game_sum" id="subRB_games"></span>)</span></a></li-->
      <li class="re re_left"><a id="re_class" class="type_on" href="javascript:void(0);" onclick="chg_button_bg('FT','today');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=r&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=','','SI2');chg_type_class('re_class');">独赢 ＆ 让球 ＆ 大小 &amp; 单 / 双</a></li>
      <!--li class="hr"><a href="javascript:void(0);" onClick="chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=hr&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=',parent.FT_lid_type,'SI2');">上半场</a></li-->
      <!--li class="rb"><a href="http://66.133.87.55/app/member/FT_browse/index.php?rtype=re&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=" target="body">滚球</a></li-->
      <li class="pd"><a id="pd_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','today');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=pd&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('pd_class');">波胆</a></li>
      <!--li class="hrp"><a href="javascript:void(0);" onClick="chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=hpd&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=',parent.FT_lid_type,'SI2');">上半波胆</a></li-->
      <li class="to"><a id="to_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','today');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=t&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('to_class');">总入球</a></li>
      <li class="hf"><a id="hf_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','today');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=f&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('hf_class');">半场 / 全场</a></li>
      <!--<li class="par"><a href="http://66.133.87.55/app/member/FT_browse/index.php?rtype=p&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=" target="body">标准过关</a></li>
			<li class="hpa"><a href="http://66.133.87.55/app/member/FT_browse/index.php?rtype=pr&uid=c00ahhyrb6m17041417l153432&langx=zh-cn&mtype=4&showtype=" target="body">让球过关</a></li>-->
      <li class="hp3"><a id="hp3_class" class="type_out" href="http://66.133.87.55/app/member/FT_browse/index.php?rtype=p3&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=" target="body" onclick="chg_button_bg('FT','today');chg_type_class('hp3_class');">综合过关</a></li>
      <li class="fs"><a id="fs_class" class="type_out" href="http://66.133.87.55/app/member/browse_FS/loadgame_R.php?uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;FStype=FT&amp;mtype=4" onclick="chg_button_bg('FT','today');parent.sel_league='';parent.sel_area='';chg_type_class('fs_class');top.hot_game='';" target="body">冠军</a></li>
      
      <li class="result"><a id="result_class" class="type_out" href="http://66.133.87.55/app/member/result/result.php?game_type=FT&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn" target="body" onclick="chg_button_bg('FT','today','result');chg_type_class('result_class');">赛果</a></li>
    </ul>
  </div>
  <!-- Today Menu End -->

  <!-- 滚球Menu Start -->
  <span id="nav_re" style="display:none;">
    <ul class="level1">
      <li class="ft"><span class="ball"><a href="#" onclick="Go_RB_page('FT');chg_button_bg('FT','rb');">足球 (<strong class="game_sum" id="RB_FT_games">6</strong>)</a></span></li>
      <li class="bk"><span class="ball"><a href="#" onclick="Go_RB_page('BK');chg_button_bg('BK','rb');">篮球 / <span class="ball_nf"></span>美式足球<!--<span class="ball_rl"></span>橄榄球--> (<strong class="game_sum" id="RB_BK_games">3</strong>)</a></span></li>                           
      <li class="tn"><span class="ball"><a href="#" onclick="Go_RB_page('TN');chg_button_bg('TN','rb');">网球 (<strong class="game_sum" id="RB_TN_games">4</strong>)</a></span></li>
      <li class="vb"><span class="ball"><a href="#" onclick="Go_RB_page('VB');chg_button_bg('VB','rb');">排球 (<strong class="game_sum" id="RB_VB_games">0</strong>)</a></span></li>
      <li class="bm"><span class="ball"><a href="#" onclick="Go_RB_page('BM');chg_button_bg('BM','rb');">羽毛球 (<strong class="game_sum" id="RB_BM_games">0</strong>)</a></span></li>
      <li class="tt"><span class="ball"><a href="#" onclick="Go_RB_page('TT');chg_button_bg('TT','rb');">乒乓球 (<strong class="game_sum" id="RB_TT_games">0</strong>)</a></span></li>
      <li class="bs"><span class="ball"><a href="#" onclick="Go_RB_page('BS');chg_button_bg('BS','rb');">棒球 (<strong class="game_sum" id="RB_BS_games">0</strong>)</a></span></li>
      <li class="sk"><span class="ball"><a href="#" onclick="Go_RB_page('SK');chg_button_bg('SK','rb');">斯诺克 / 台球 (<strong class="game_sum" id="RB_SK_games">0</strong>)</a></span></li>
      <li class="op"><span class="ball"><a href="#" onclick="Go_RB_page('OP');chg_button_bg('OP','rb');">其他 (<strong class="game_sum" id="RB_OP_games">0</strong>)</a></span></li>  
    </ul>
  </span>
  
   <div id="type_re" style="display:none;">
    <ul>
      <li class="re re_left"><a id="rb_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','rb');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=re&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('rb_class');">独赢 ＆ 让球 ＆ 大小 &amp; 单 / 双</a></li>
      <li class="pd"><a id="rpd_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','rb');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=rpd&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('rpd_class');">波胆</a></li>
      <li class="to"><a id="rto_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','rb');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=rt&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('rto_class');">总入球</a></li>
      <li class="hf"><a id="rhf_class" class="type_out" href="javascript:void(0);" onclick="chg_button_bg('FT','rb');chg_type('http://66.133.87.55/app/member/FT_browse/index.php?rtype=rf&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn&amp;mtype=4&amp;showtype=',parent.FT_lid_type,'SI2');chg_type_class('rhf_class');">半场 / 全场</a></li>
      <li class="result"><a id="rb_result_class" class="type_out" href="http://66.133.87.55/app/member/result/result.php?game_type=FT&amp;uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn" target="body" onclick="chg_button_bg('FT','rb','result');chg_type_class('rb_result_class');">赛果</a></li>
    </ul>
   </div>
	<!-- 滚球Menu End -->
  
</div>
<!--input  id=downloadBTN type=button style="width:80px;visibility:'hidden'"  onclick="onclickDown()" value="下载"-->
    <!--主选单-->
    <div id="back">
    	<ul>
   		  <li class="lang_top"><a href="#">简体<!--[if IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->

                <ul class="pd">
                    <li class="cn" onclick="OnMouseOverEvent();"><a href="javascript:void(0);" onclick="changeLangx('zh-cn')">简体</a></li>
                    <li class="tw" onclick="OnMouseOverEvent();"><a href="javascript:void(0);" onclick="changeLangx('zh-tw')">繁體</a></li>
                    <li class="us" onclick="OnMouseOverEvent();"><a href="javascript:void(0);" onclick="changeLangx('en-us')">English</a></li>
       	    </ul>
             <!--[if lte IE 6]></td></tr></table></a><![endif]-->
         </li>
           <li class="mail" onclick="OnMouseOverEvent();"><a href="javascript:void(0);" onclick="window.open('<?php echo U('Old/QA_conn');?>')">联系我们</a></li> 
           <li class="qa" onclick="OnMouseOverEvent();"><a href="#">帮助<!--[if IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->

                <ul class="pd">
                       <li class="qa_on"><a href="#">帮助</a></li>
                       <li class="msg"><a href="#" onclick="parent.mem_order.showMoreMsg();">公告栏</a></li>
                       <li class="roul"><a href="#" onclick="window.open('<?php echo U('Old/QA_sport');?>')">体育规则</a></li>
                       <!--li class="wap"><a href="#" OnClick="window.open('/tpl/member/zh-cn/roul_mp.html','WAP','location=no,status=no,width=680,height=500,toolbar=no,top=0,left=0,scrollbars=no,resizable=no,personalbar=yes').focus();">Wap指南</a></li-->
                       <li class="odd"><a href="http://66.133.87.55/app/member/mem_conf.php?uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn" target="body">详细设定</a></li>
         	 </ul>
             <!--[if lte IE 6]></td></tr></table></a><![endif]-->
          </li>
   		  <li class="home" onmouseover="OnMouseOutEvent()"><a href="http://66.133.87.55/app/member/logout.php?uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn" target="_top">退出</a></li>
	  </ul>
  </div>   


<div id="mem_box">
  <div id="mem_main"><span class="his"><a href="<?php echo U('history/history_data');?>" target="body">帐户历史</a></span> | <span class="wag"><a href="http://66.133.87.55/app/member/today/today_wagers.php?uid=c00ahhyrb6m17041417l153432&amp;langx=zh-cn" target="body">交易状况</a></span></div>
  <div id="credit_main"><span id="credit">人民币 20</span><input name="" type="button" class="re_credit" value="" onclick="javascript:reloadCrditFunction();"></div>
</div>

<!--帮助视窗-->
<div id="qaView" style="display:none;" class="qaView">
    <!--div class="leg_head" onMousedown="initializedragie('legView')"></div-->
    <div><iframe id="qaFrame" frameborder="no" border="0" allowtransparency="true"></iframe></div>
    <div class="qa_foot"></div>
</div>


<div id="extra2"><a href="http://live228.com/app/member/mem_add.php?langx=zh-cn" target="_blank"></a></div>
<iframe id="reloadPHP" name="reloadPHP" width="0" height="0"></iframe>
<iframe id="reloadPHP" name="reloadPHP1" width="0" height="0"></iframe>




</body>
</html>