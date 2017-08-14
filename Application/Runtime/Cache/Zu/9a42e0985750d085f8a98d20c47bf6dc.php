<?php if (!defined('THINK_PATH')) exit();?><html xmlns=""><head>
<meta name="Robots" contect="none">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>History</title>
<link rel="stylesheet" href="/Public/css/mem_body_ft.css" type="text/css">
<link rel="stylesheet" href="/Public/css/scroll.css" type="text/css">

</head>
<body id="MSG" class="bodyset" onload="init_scroll()" ;="" onkeydown="checkKey(event.keyCode)">

<table border="0" cellpadding="0" cellspacing="0" id="box_top">
  <tbody><tr class="msg_top">
    <td>
      <div id="General" onclick="chg_important(this,0)" class="scr_on msg_left_on">一般公告</div>
      <div id="Important" onclick="chg_important(this,1)" class="scr_out">重要公告</div>
      <div id="Personal" onclick="chg_important(this,2)" class="scr_out">个人公告
        <span id="PersonalMessage" class="msg_text" style="display: none;"></span>
      </div>
    </td>
  </tr>
  <tr>
    <td class="mem his_top"><div>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu_set">
        <tbody><tr class="table_main_settings_tr">
          <td id="page_no2"><span id="pg_txt"></span> <span style="display: none;" id="t_pge"></span>
            <!--<span id="today" onClick="chg_date(0);">今日</span>-->
            <span onclick="chg_date('all');"><a href="#"><font id="all" color="#ffffff" class="scr_on">全部</font></a></span> / <span onclick="chg_date(0);"><a href="#"><font id="today" color="#ffffff" class="scr_out">今日</font></a></span> / <span onclick="chg_date(-1);"><a href="#"><font id="yesterday" color="#ffffff" class="scr_out">昨日</font></a></span> / <span onclick="chg_date(-2);"><a href="#"><font id="before" color="#ffffff" class="scr_out">昨日之前</font></a></span>
          </td><td class="search"><input type="text" id="findField" name="" value="" class="ccroll_input">
          <input type="button" id="findbutton" name="" onclick="FindNext();" value="搜寻" class="ccroll_btn">
          </td>
          <td class="rsu_refresh"><div onclick="reload_var();"><font id="refreshTime"></font></div></td>
          <!--td width="50"><input type="submit" name="button" id="button" value="" onClick="reload_var();" class="his_refresh" /></td-->
        </tr>
      </tbody></table>
    </div>
      <table border="0" cellspacing="0" cellpadding="4" class="game">
        <tbody><tr>
          <th width="40">序号</th>
          <th width="70">日期</th>
          <th align="left" class="info">公告内容</th>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>


<table border="0" cellpadding="0" cellspacing="0" id="box">
  <tbody><tr>
    <td class="mem his_body">
    
    <table border="0" cellspacing="0" cellpadding="4" class="game">
        <tbody><tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">1</td>
          <td width="70" class="m_cen">17-07-25</td>
          <td class="m_lef">电子竞技:07月25日 ProDotA Cup(DOTA2)(3场2胜) (SG e-sports VS Light Out) 因队伍(SG e-sports)弃权, 除所有的注单一律取消.过关以 (1) 计算.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">2</td>
          <td width="70" class="m_cen">17-07-25</td>
          <td class="m_lef">电子竞技:07月25日 ProDotA Cup(DOTA2)(3场2胜) (SG e-sports VS Wheel Whreck While Whistling) 因队伍(SG e-sports)弃权, 除所有的注单一律取消.过关以 (1) 计算.</td>
        </tr>
        <tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">3</td>
          <td width="70" class="m_cen">17-07-25</td>
          <td class="m_lef">敬请注意:07月25日 [电子竞技] (Space Soldiers&nbsp; VS FlipSid3), 因赛果未能确定, 有关账目将会调至07月26日计算. 如有不便之处, 敬请见谅.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">4</td>
          <td width="70" class="m_cen">17-07-25</td>
          <td class="m_lef">足球赛事:07月25日 球会友谊赛 (苏达迪罗尔 VS 柏萨士邦) 因赛事延迟至12:15开赛, 所有的注单本公司依然视为有效.</td>
        </tr>
        <tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">5</td>
          <td width="70" class="m_cen">17-07-25</td>
          <td class="m_lef">网球赛事:07月25日 ATP汉堡公开赛 (罗傑里奥.杜特拉.席尔瓦 VS 阿利亚兹.本登内) 因选手更换,所有的注单一律取消,过关以 (1)计算.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">6</td>
          <td width="70" class="m_cen">17-07-24</td>
          <td class="m_lef">电子竞技:07月24日 KOD League(DOTA2)(3场系列赛) (Midas Club Elite VS STARS) 主办当局默认比分为2-0(主队胜出), 本公司视该场球赛为无效的赛事, 所有的注单一律取消.过关以 (1) 计算!!</td>
        </tr>
        <tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">7</td>
          <td width="70" class="m_cen">17-07-24</td>
          <td class="m_lef">网球赛事:07月24日 ATP坦佩雷挑战赛 (马克西姆.哈穆 VS 里卡尔多.贝尔洛) 因选手更换,所有的注单一律取消,过关以 (1)计算.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">8</td>
          <td width="70" class="m_cen">17-07-24</td>
          <td class="m_lef">足球赛事:07月23日, [澳洲维多利亚女子国家超级联赛] (阿拉门 VS 吉隆格拉西联) 因赛果未能确定, 账目已移至07月24日计算. 如有不便之处, 敬请见谅.</td>
        </tr>
        <tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">9</td>
          <td width="70" class="m_cen">17-07-23</td>
          <td class="m_lef">足球赛事:07月22日 球会友谊赛 (柏林联 VS 昆士柏流浪) 因赛事在12分钟(比分:0-0)腰斩, 除了已有明确结果的注单以外, 所有的注单一律取消, 过关以 (1) 计算.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">10</td>
          <td width="70" class="m_cen">17-07-23</td>
          <td class="m_lef">足球赛事:07月23日 委内瑞拉乙组联赛 (瓜纳雷竞技 VS 提坦斯) 因赛事延迟至15:22开赛, 所有的注单本公司依然视为有效.</td>
        </tr>
        <tr class="color_bg2" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg2')">
          <td width="40" class="m_cen">11</td>
          <td width="70" class="m_cen">17-07-23</td>
          <td class="m_lef">足球赛事:07月23日 绍因斯兰瑞森杯(在德国)(1 x 45分钟) 赛事将进行(45分钟x1), 所有的注单本公司视为有效.</td>
        </tr>
        <tr class="color_bg1" style="display: " onmouseover="overbars(this,'color_bg3');" onmouseout="outbars(this,'color_bg1')">
          <td width="40" class="m_cen">12</td>
          <td width="70" class="m_cen">17-07-23</td>
          <td class="m_lef">足球赛事:07月22日, [球会友谊赛] (柏林联 VS 昆士柏流浪) 因赛果未能确定, 账目已移至07月23日计算. 如有不便之处, 敬请见谅.</td>
        </tr>

      </tbody></table> 
	</td>
  </tr>
  <tr><td id="foot"><b>&nbsp;</b></td></tr>
</tbody>
</table>
<script>
function chg_important(obj,id){
  $(obj).parent("td").find("div").removeClass("scr_on msg_left_on").addClass("scr_out");
  $(obj).addClass("scr_on msg_left_on")
};
(function(event){
  overbars(this,'color_bg3');
});
(function(event){
  init_scroll();
})
</script>



</body>
</html>