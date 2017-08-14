<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script>
      var uid = 'tyzgwqspm16963210l3757878';
      var langx = 'zh-cn';
      var mtvid = 'C8CAC8CCC397C8C7m16';
      var eventid = '';
      var eventlive = '';
      var mcurrency = '人民币';
      var videoData = '';
      var GameDate = new Array('2017-08-07', '2017-08-08', '2017-08-09', '2017-08-10', '2017-08-11', '2017-08-12', '2017-08-13');
      var o_path = '';
      top.autoOddCheck = ('' + top.autoOddCheck != 'undefined') ? top.autoOddCheck: true;
    </script>
    <meta name="Robots" contect="none">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
      live TV
    </title>
    <link rel="stylesheet" href="/Public/css/mem_live.css"
    type="text/css">
    <script language="javascript" src="/Public/js/live.js">
    </script>
    <script language="javascript" src="/Public/js/zh-cn.js">
    </script>
  </head>
  <body onload="onloads();" scrolling="no" onunload="unLoad();" onselectstart="self.event.returnValue=false"
  oncontextmenu="self.event.returnValue=false;window.event.returnValue=false;">
    <!--Head-->
    <div id="top_div" class="head">
      <span class="live_text">
        观看现场
      </span>
      <span id="DemoLink" onclick="ShowVideo();" class="demo" style="display: none;">
        <a href="#">
          样本
        </a>
      </span>
      <span onclick="GoToQAPage();" class="FQ">
        <a href="#">
          常见问题
        </a>
      </span>
      <img id="alone_btn" src="/Public/images/member/live_Obut.gif" width="33" height="18"
      onclick="independent();" style="cursor:hand" class="Obut">
    </div>
    <!--Demo img -->
    <div valign="top" id="DemoImgLayer" style="display: none;">
      <div class="demoIMG">
      </div>
    </div>
    <!--Flash Start-->
    <div id="FlahLayer" class="FlahLayer">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="league_name">
        <tbody>
          <tr>
            <td align="center" valign="top" width="495" height="85" background="/Public/images/member/live_Ltop.gif"
            style="background-repeat:no-repeat;">
              <div id="video_msg" style="">
                <font id="league" class="mag_league">
                  捷克联赛U21
                  <br>
                </font>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td valign="top">
                        <img id="team_h" src="/Public/images/member/T_FFFFFF.gif">
                      </td>
                      <td id="team" class="mag_team">
                        布拉格斯拉维亚U21&nbsp;4&nbsp; - &nbsp;1&nbsp;贾布朗尼U21
                      </td>
                      <td valign="top">
                        <img id="team_c" src="/Public/images/member/T_33CC00.gif">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--div id="demo_msg" style="display:none;"></div-->
            </td>
          </tr>
          <tr>
            <td>
              <div id="videoFrame" class="dome_L">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="myFlashPlayer"
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0"
                width="480" height="408">
                  <param name="movie" value="unasplayer.swf?src=partnerid%3d48%26streamid%3d940224%26label%3d2%26timestamp%3d20170807102353%26auth%3d62543fcd2a02ae30f7a21a76c06ec428">
                  <param name="quality" value="high">
                  <param name="bgcolor" value="black">
                  <param name="loop" value="false">
                  <param name="FlashVars" value="secretdebug=false">
                  <embed src="unasplayer.swf?src=partnerid%3d48%26streamid%3d940224%26label%3d2%26timestamp%3d20170807102353%26auth%3d62543fcd2a02ae30f7a21a76c06ec428"
                  id="myFlashPlayer_em" width="480" height="408" quality="high" bgcolor="black"
                  loop="false" flashvars="secretdebug=false" type="application/x-shockwave-flash"
                  pluginspage="http://www.macromedia.com/go/getflashplayer">
                </object>
              </div>
              <div class="dome_L">
                <iframe id="DefLive" name="DefLive" width="480" height="408" src="about:blank"
                scrolling="no" frameborder="0" framespacing="0" cellspacing="0" cellpadding="0"
                style="display:none;">
                </iframe>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--Flash End-->
    <!-- 右选单-日程表 Start -->
    <div id="main" style="overflow: hidden; display: none;">
      <div id="menu">
        <div class="list_on" id="TVbut" onclick="go_livepage();">
          直播日程表
        </div>
        <div class="bet_out" id="BEbut" onclick="go_betpage();">
          立即投注
        </div>
      </div>
      <!-- 选择日期 -->
      <div id="sel_game">
        <span id="game_type">
          <select id="gameOpt" name="gameOpt" onchange="chggype()" class="select">
            <option value="All" selected="">
              所有球类
            </option>
            <option value="FT">
              足球
            </option>
            <option value="BK">
              篮球 / 美式足球
            </option>
            <option value="TN">
              网球
            </option>
            <option value="VB">
              排球
            </option>
            <option value="BM">
              羽毛球
            </option>
            <option value="TT">
              兵乓球
            </option>
            <option value="BS">
              棒球
            </option>
            <option value="SK">
              斯诺克/台球
            </option>
            <option value="OP">
              其他
            </option>
          </select>
        </span>
        <span id="date_list">
          <select class="se_date" id="gdate" name="gdate" onchange="chgdate()">
            <option class="se_date" id="se_date" value="All">
              所有日期
            </option>
            <option class="se_date" id="se_date" value="2017-08-07">
              2017-08-07
            </option>
            <option class="se_date" id="se_date" value="2017-08-08">
              2017-08-08
            </option>
            <option class="se_date" id="se_date" value="2017-08-09">
              2017-08-09
            </option>
            <option class="se_date" id="se_date" value="2017-08-10">
              2017-08-10
            </option>
            <option class="se_date" id="se_date" value="2017-08-11">
              2017-08-11
            </option>
            <option class="se_date" id="se_date" value="2017-08-12">
              2017-08-12
            </option>
            <option class="se_date" id="se_date" value="2017-08-13">
              2017-08-13
            </option>
          </select>
        </span>
        <span class="re_time">
          <span id="timer_str">
            30&nbsp;
          </span>
          <!-- 更新秒数 -->
        </span>
      </div>
      <!-- 有赛事列表 外框 -->
      <div id="even_box" class="even_box">
        <!-- 无赛事列表 -->
        <div id="even_none" class="even_none" style="display:none">
          - 目前暂无现场赛事 -
        </div>
        <!-- 列表 -->
        <div id="even_list" class="even_list" style="">
          <!--第1笔投注 -->
          <div id="showlayers" class="game_list">
            <table border="0" cellspacing="0" cellpadding="0" id="even_detail" class="even_detail_1">
              <!--tr>
              <td>
              <div-->
              <tbody>
                <tr style="display:">
                  <td class="even_date">
                    2017-08-07
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('0');" style="cursor:hand">
                      </span>
                    </div>
                    <div class="even_leag">
                      捷克联赛U21
                      <br>
                      <span class="even_team">
                        布拉格斯拉维亚U21&nbsp;vs&nbsp;贾布朗尼U21
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      07:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      捷克联赛U21
                      <br>
                      <span class="even_team">
                        史洛特U21&nbsp;vs&nbsp;奥斯泰华U21
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      07:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      捷克联赛U21
                      <br>
                      <span class="even_team">
                        普利布兰U21&nbsp;vs&nbsp;布咸麦恩斯1905U21
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      拉脱维亚超级联赛
                      <br>
                      <span class="even_team">
                        利加斯斯科拉&nbsp;vs&nbsp;美塔里加
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        克利丝提娜.姆拉德诺维奇(法国)&nbsp;vs&nbsp;巴伯拉.扎赫拉沃娃·斯特里科娃(捷克)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        达里娅.卡斯特娜(俄罗斯)&nbsp;vs&nbsp;罗伯塔.文奇(意大利)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        达里亚.加夫里洛娃(澳洲)&nbsp;vs&nbsp;拉拉.阿鲁纳巴瑞纳.贝西诺(西班牙)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        大阪內奧米(日本)&nbsp;vs&nbsp;希瑟.沃特森(大不列颠)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        波蒂蒙尼斯&nbsp;vs&nbsp;博维斯塔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      波兰超级联赛
                      <br>
                      <span class="even_team">
                        阿卡&nbsp;vs&nbsp;哥罗那
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        安娜.科恩卓(克罗地亚)&nbsp;vs&nbsp;克斯顿.菲利普肯斯(比利时)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        多米妮卡.齐步尔科娃(斯洛伐克)&nbsp;vs&nbsp;莱斯雅.特苏雷科(乌克兰)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        沙迦.维克里(美国)&nbsp;vs&nbsp;爱卡特琳娜.亚历山德罗娃(俄罗斯)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        利汾瑞&nbsp;vs&nbsp;里德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:35
                      <span class="even_type">
                        篮球 / 美式足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      FIBA美洲女子篮球杯(在阿根廷)
                      <br>
                      <span class="even_team">
                        巴拉圭(女)&nbsp;vs&nbsp;古巴(女)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      挪威超级联赛
                      <br>
                      <span class="even_team">
                        史卓加斯特&nbsp;vs&nbsp;华拿伦加
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞典超级联赛
                      <br>
                      <span class="even_team">
                        IFK诺科平&nbsp;vs&nbsp;AFC艾基图纳
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞典超级联赛
                      <br>
                      <span class="even_team">
                        佐加顿斯&nbsp;vs&nbsp;马模
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        劳伦.戴维斯(美国)&nbsp;vs&nbsp;安娜斯塔西娅.塞娃斯托娃(拉脱维亚)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        瓦娃拉.勒普琴科(美国)&nbsp;vs&nbsp;叶连娜.奥斯塔佩科(拉脱维亚)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯-双打
                      <br>
                      <span class="even_team">
                        拉克尔.阿塔沃(美国)/达里亚.加夫里洛娃(澳洲)&nbsp;vs&nbsp;蒂美亚.贝波丝(匈牙利)/安德烈娅.哈拉娃科娃(捷克)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      保加利亚甲组联赛
                      <br>
                      <span class="even_team">
                        多恼&nbsp;vs&nbsp;伊塔尔大特尔诺沃
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        费伦斯&nbsp;vs&nbsp;通迪拉
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        布格勒斯特戴拿模&nbsp;vs&nbsp;加斯梅登
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        温特图尔&nbsp;vs&nbsp;阿劳
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        卡拉.苏亚雷兹.纳瓦罗(西班牙)&nbsp;vs&nbsp;佩特拉.科维托娃(捷克)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯-双打
                      <br>
                      <span class="even_team">
                        青山修子(日本)/塔里贾.尤拉克(克罗地亚)&nbsp;vs&nbsp;奈迪雅.基切洛克(乌克兰)/安娜斯塔西娅.罗迪奥诺娃(澳洲)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯-双打
                      <br>
                      <span class="even_team">
                        克里斯蒂娜.麦克海尔/阿西娅.穆罕墨德(美国)&nbsp;vs&nbsp;巴伯拉.卡雷茨科娃(捷克)/莫妮卡.尼库莱斯库(罗马尼亚)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      德国乙组联赛
                      <br>
                      <span class="even_team">
                        圣保利&nbsp;vs&nbsp;特雷斯登
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      甘伯杯
                      <br>
                      <span class="even_team">
                        巴塞罗那&nbsp;vs&nbsp;乔沛高恩斯SC
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      15:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      克罗地亚甲组联赛
                      <br>
                      <span class="even_team">
                        奥斯积克&nbsp;vs&nbsp;里耶卡
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      15:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      玻利维亚甲组联赛
                      <br>
                      <span class="even_team">
                        欧里恩特&nbsp;vs&nbsp;瑟克雷
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      15:05
                      <span class="even_type">
                        篮球 / 美式足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      FIBA美洲女子篮球杯(在阿根廷)
                      <br>
                      <span class="even_team">
                        委内瑞拉(女)&nbsp;vs&nbsp;美属维尔京群岛(女)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      16:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        里奥阿维&nbsp;vs&nbsp;比兰伦斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      16:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯-双打
                      <br>
                      <span class="even_team">
                        安德雷雅.卡勒柏奇(斯洛文尼亚)/玛丽亚.何塞.马丁内兹.桑切斯(西班牙)&nbsp;vs&nbsp;约翰娜.孔达(大不列颠)/埃利娜.史维托琳娜(乌克兰)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      17:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        尤利娅.普丁斯娃(哈萨克斯坦)&nbsp;vs&nbsp;斯隆.史蒂芬斯(美国)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      17:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯-双打
                      <br>
                      <span class="even_team">
                        穗积惠理/加藤美忧(日本)&nbsp;vs&nbsp;加布里埃拉.达布洛斯奇(加拿大)/叶连娜.奥斯塔佩科(拉脱维亚)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      17:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      玻利维亚甲组联赛
                      <br>
                      <span class="even_team">
                        圣乔希奥鲁罗&nbsp;vs&nbsp;邦明
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      17:35
                      <span class="even_type">
                        篮球 / 美式足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      FIBA美洲女子篮球杯(在阿根廷)
                      <br>
                      <span class="even_team">
                        哥伦比亚(女)&nbsp;vs&nbsp;巴西(女)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      18:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        卡捷琳娜.斯尼科娃(捷克)&nbsp;vs&nbsp;马里亚纳.杜悫.马里诺(哥伦比亚)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      19:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        伊琳娜.卡梅利亚.柏古(罗马尼亚)&nbsp;vs&nbsp;维纳斯.威廉姆斯(美国)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      20:00
                      <span class="even_type">
                        网球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      WTA罗杰斯杯
                      <br>
                      <span class="even_team">
                        露西.萨法洛娃(捷克)&nbsp;vs&nbsp;弗朗索丝.阿班达(加拿大)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:05
                      <span class="even_type">
                        篮球 / 美式足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      FIBA美洲女子篮球杯(在阿根廷)
                      <br>
                      <span class="even_team">
                        加拿大(女)&nbsp;vs&nbsp;波多黎各(女)
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:">
                  <td class="even_date">
                    2017-08-08
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      04:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        SKA哈巴罗夫斯克&nbsp;vs&nbsp;安芝
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      09:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        博托沙尼&nbsp;vs&nbsp;ACS蒂米索拉
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      10:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        阿马卡&nbsp;vs&nbsp;乌法
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        马里迪莫&nbsp;vs&nbsp;费利拿
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      爱沙尼亚杯
                      <br>
                      <span class="even_team">
                        雷瓦狄亚&nbsp;vs&nbsp;派德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        维托鲁康斯坦萨&nbsp;vs&nbsp;沃鲁塔瑞
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        佛罗里德斯多弗尔&nbsp;vs&nbsp;华登斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        华卡迪路&nbsp;vs&nbsp;奥地利路斯登洛
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        卡芬堡&nbsp;vs&nbsp;布劳伟斯林兹
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        维也纳新城&nbsp;vs&nbsp;哈特堡格
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        维京格&nbsp;vs&nbsp;IBV韦斯文尼查
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      15:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        阿简尼斯&nbsp;vs&nbsp;KR雷克查域克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      15:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        夏拿佐杜亚&nbsp;vs&nbsp;华路
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        河床&nbsp;vs&nbsp;瓜拉尼
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:">
                  <td class="even_date">
                    2017-08-09
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        新泻天鹅&nbsp;vs&nbsp;川崎前锋
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        清水心跳&nbsp;vs&nbsp;大阪樱花
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        神户胜利船&nbsp;vs&nbsp;鹿岛鹿角
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        广岛三箭&nbsp;vs&nbsp;大阪飞脚
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        札幌冈萨多&nbsp;vs&nbsp;横滨水手
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        仙台维加泰&nbsp;vs&nbsp;磐田山叶
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        大宫松鼠&nbsp;vs&nbsp;东京
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        柏雷素尔&nbsp;vs&nbsp;鸟栖沙根
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J1联赛
                      <br>
                      <span class="even_team">
                        甲府风林&nbsp;vs&nbsp;浦和红钻
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        圣彼德斯堡戴拿模 [中]&nbsp;vs&nbsp;奥林匹克斯诺夫哥罗德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      08:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        席比尔&nbsp;vs&nbsp;库班
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      08:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        唐姆斯基&nbsp;vs&nbsp;沃尔加
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      09:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        辛历克 [中]&nbsp;vs&nbsp;苏维杜夫
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      10:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        阿斯特拉吉尔古&nbsp;vs&nbsp;康戈迪亚齐安
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      10:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        坦波夫&nbsp;vs&nbsp;法克尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      10:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        图们&nbsp;vs&nbsp;卢兹恩吉亚
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      10:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        奥伦堡&nbsp;vs&nbsp;维洛格瑞德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      10:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      拉脱维亚超级联赛
                      <br>
                      <span class="even_team">
                        云特史比斯&nbsp;vs&nbsp;祖玛拿斯巴达克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      10:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        乌拉尔&nbsp;vs&nbsp;圣彼德斯堡泽尼特
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        凯美京斯&nbsp;vs&nbsp;伊尔韦斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        HIFK赫尔辛基&nbsp;vs&nbsp;VPS华沙
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        希姆基&nbsp;vs&nbsp;艾文嘉德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        布格勒斯特祖雲达斯&nbsp;vs&nbsp;CS卡拉奥华大学
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        莫斯科斯巴达&nbsp;vs&nbsp;阿森纳图拉
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        鲁宾卡赞&nbsp;vs&nbsp;莫斯科火车头
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        图斯诺&nbsp;vs&nbsp;莫斯科中央陆军
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        罗斯托夫&nbsp;vs&nbsp;莫斯科戴拿模
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        巴提卡&nbsp;vs&nbsp;克拉斯诺亚尔斯克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      德国乙组联赛
                      <br>
                      <span class="even_team">
                        海登海默&nbsp;vs&nbsp;艾格比治
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        波图&nbsp;vs&nbsp;伊斯托里尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士超级联赛
                      <br>
                      <span class="even_team">
                        洛桑体育队&nbsp;vs&nbsp;卢加诺
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士超级联赛
                      <br>
                      <span class="even_team">
                        圣加伦&nbsp;vs&nbsp;卢森
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士超级联赛
                      <br>
                      <span class="even_team">
                        年青人&nbsp;vs&nbsp;杜安
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        基亚索&nbsp;vs&nbsp;瑞普斯威尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        塞维特&nbsp;vs&nbsp;韦尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        韦伦&nbsp;vs&nbsp;纳沙泰尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        富佐尼&nbsp;vs&nbsp;阿古雷利
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        布格勒斯特星队&nbsp;vs&nbsp;拉斯理工体育会
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      15:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        维吉欧拉维克&nbsp;vs&nbsp;格连戴域克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      16:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        宾菲加&nbsp;vs&nbsp;布拉加
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      16:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      冰岛超级联赛
                      <br>
                      <span class="even_team">
                        斯塔尔南&nbsp;vs&nbsp;贝雷达比历克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      18:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        甘美奥RS&nbsp;vs&nbsp;葛度尔古斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      19:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      玻利维亚甲组联赛
                      <br>
                      <span class="even_team">
                        波托西&nbsp;vs&nbsp;皇家帕托斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      智利杯
                      <br>
                      <span class="even_team">
                        卡托利卡&nbsp;vs&nbsp;流浪者
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美洲球会杯
                      <br>
                      <span class="even_team">
                        法林明高RJ&nbsp;vs&nbsp;帕勒斯蒂诺
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        米内罗竞技&nbsp;vs&nbsp;约治
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        彭美拉斯SP&nbsp;vs&nbsp;巴塞隆拿SC
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:">
                  <td class="even_date">
                    2017-08-10
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      08:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯甲组联赛
                      <br>
                      <span class="even_team">
                        莫斯科斯巴达II队&nbsp;vs&nbsp;圣彼德斯堡泽尼特II队
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      立陶宛甲组联赛
                      <br>
                      <span class="even_team">
                        乌特尼斯&nbsp;vs&nbsp;施登巴斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        路云尼米&nbsp;vs&nbsp;马利汉姆
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        拉迪&nbsp;vs&nbsp;英特杜古
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        古比斯&nbsp;vs&nbsp;韦斯屈莱
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        加斯梅登&nbsp;vs&nbsp;斯普希圣乔治
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞典超级联赛
                      <br>
                      <span class="even_team">
                        IFK哥德堡&nbsp;vs&nbsp;AIK苏纳
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      芬兰超级联赛
                      <br>
                      <span class="even_team">
                        SJK塞那乔其&nbsp;vs&nbsp;赫尔辛基
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      俄罗斯超级联赛
                      <br>
                      <span class="even_team">
                        阿科马特&nbsp;vs&nbsp;克拉斯诺达尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      立陶宛甲组联赛
                      <br>
                      <span class="even_team">
                        阿兰达斯&nbsp;vs&nbsp;莱塔维
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士超级联赛
                      <br>
                      <span class="even_team">
                        苏黎世&nbsp;vs&nbsp;锡昂
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士超级联赛
                      <br>
                      <span class="even_team">
                        巴素利&nbsp;vs&nbsp;草蜢
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      罗马尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        克卢日&nbsp;vs&nbsp;布格勒斯特戴拿模
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        阿劳&nbsp;vs&nbsp;沙夫豪森
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      瑞士甲组联赛
                      <br>
                      <span class="even_team">
                        华杜兹&nbsp;vs&nbsp;温特图尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      16:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        甘马雷斯&nbsp;vs&nbsp;查维斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      18:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        博塔福格RJ&nbsp;vs&nbsp;蒙特维多国民队
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        山度士SP&nbsp;vs&nbsp;帕拉尼恩斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      南美自由杯
                      <br>
                      <span class="even_team">
                        圣罗伦素&nbsp;vs&nbsp;尹美利克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:">
                  <td class="even_date">
                    2017-08-11
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        爱媛&nbsp;vs&nbsp;水户霍利克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        山形蒙迪奥&nbsp;vs&nbsp;泽维真金泽
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        草津温泉群马&nbsp;vs&nbsp;卡马塔马尔赞岐
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        千叶市原&nbsp;vs&nbsp;雷诺法山口
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        岐阜&nbsp;vs&nbsp;冈山雉鸡
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      05:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        京都不死鸟&nbsp;vs&nbsp;福冈黄蜂
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      05:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        东京日视&nbsp;vs&nbsp;熊本深红
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        大分三神&nbsp;vs&nbsp;町田泽维亚
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        德岛沃堤&nbsp;vs&nbsp;横滨
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      06:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      日本J2联赛
                      <br>
                      <span class="even_team">
                        V瓦仁长崎&nbsp;vs&nbsp;湘南比马
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      11:15
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      保加利亚甲组联赛
                      <br>
                      <span class="even_team">
                        查洛摩利&nbsp;vs&nbsp;索菲亚斯拉维亚
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      爱沙尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        科罗拉&nbsp;vs&nbsp;维尔扬迪土勒维克
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      爱沙尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        FCI泰连尼&nbsp;vs&nbsp;雷瓦狄亚
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      爱沙尼亚甲组联赛
                      <br>
                      <span class="even_team">
                        派德&nbsp;vs&nbsp;纳尔瓦
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        哈特堡格&nbsp;vs&nbsp;利汾瑞
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        奥地利路斯登洛&nbsp;vs&nbsp;卡芬堡
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        布劳伟斯林兹&nbsp;vs&nbsp;里德
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      12:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        佛罗里德斯多弗尔&nbsp;vs&nbsp;维也纳新城
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法國甲組聯賽
                      <br>
                      <span class="even_team">
                        奈斯&nbsp;vs&nbsp;特鲁瓦
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      挪威超级联赛
                      <br>
                      <span class="even_team">
                        桑德菲杰&nbsp;vs&nbsp;桑恩达
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      13:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      荷兰甲组联赛
                      <br>
                      <span class="even_team">
                        海牙&nbsp;vs&nbsp;乌德勒支
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        华伦西恩斯&nbsp;vs&nbsp;克莱蒙特
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        布雷斯特&nbsp;vs&nbsp;加泽莱克阿些斯奥
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        尼欧特&nbsp;vs&nbsp;欧塞尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        奥尔良&nbsp;vs&nbsp;阿些斯奥
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        克维伊鲁昂&nbsp;vs&nbsp;布尔格布雷斯普瑞兰斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      法国乙组联赛
                      <br>
                      <span class="even_team">
                        托尔司&nbsp;vs&nbsp;威姆斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      保加利亚甲组联赛
                      <br>
                      <span class="even_team">
                        瑟特曼维里索菲亚&nbsp;vs&nbsp;索菲亚中央陆军
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      比利时甲组联赛A
                      <br>
                      <span class="even_team">
                        威尔郡&nbsp;vs&nbsp;布鲁日
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      奥地利乙组联赛
                      <br>
                      <span class="even_team">
                        华登斯&nbsp;vs&nbsp;华卡迪路
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      波兰超级联赛
                      <br>
                      <span class="even_team">
                        历基亚&nbsp;vs&nbsp;派雅斯特
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      14:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      苏格兰超级联赛
                      <br>
                      <span class="even_team">
                        巴特里&nbsp;vs&nbsp;些路迪
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      14:45
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      土耳其超级联赛
                      <br>
                      <span class="even_team">
                        伊斯坦堡巴萨希尔&nbsp;vs&nbsp;柏萨士邦
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      15:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      爱尔兰足总杯
                      <br>
                      <span class="even_team">
                        费恩夏普&nbsp;vs&nbsp;布咸美恩斯
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      15:30
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      葡萄牙超级联赛
                      <br>
                      <span class="even_team">
                        士砵亭&nbsp;vs&nbsp;塞图巴尔
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      墨西哥超级联赛
                      <br>
                      <span class="even_team">
                        普埃布拉&nbsp;vs&nbsp;提华纳
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      20:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      智利甲组联赛
                      <br>
                      <span class="even_team">
                        希金斯&nbsp;vs&nbsp;艾斯潘诺拉
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_1">
                  <td class="even_info">
                    <div class="even_time">
                      20:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      墨西哥甲组联赛
                      <br>
                      <span class="even_team">
                        麦拉斯萨卡特卡斯&nbsp;vs&nbsp;奥哈卡
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--tr>
                <td>
                <div-->
                <tr style="display:none">
                  <td class="even_date">
                  </td>
                </tr>
                <tr id="list_color" class="even_detail_2">
                  <td class="even_info">
                    <div class="even_time">
                      22:00
                      <span class="even_type">
                        足球
                      </span>
                      <span id="tv_icon" class="tv_icon" onclick="OpenTV('');" style="display:none">
                      </span>
                    </div>
                    <div class="even_leag">
                      墨西哥超级联赛
                      <br>
                      <span class="even_team">
                        艾特莱&nbsp;vs&nbsp;阿美利加会
                      </span>
                    </div>
                  </td>
                </tr>
                <!--tr>
                <td class="even_leag">
                *LEAGUE*<br>
                <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
                </td>
                </tr-->
                <!--td valign="top">
                </td>
                </tr-->
              </tbody>
            </table>
          </div>
        </div>
        <!-- 列表 End-->
      </div>
      <!-- 有赛事列表 外框 End-->
    </div>
    <!-- 右选单 End -->
    <iframe id="reloadPHP" name="reloadPHP" src="<?php echo U('Old/ok');?>" style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <iframe id="reloadgame" name="reloadgame" src="<?php echo U('Old/ok');?>" style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <iframe id="registLive" name="registLive" src="<?php echo U('Old/ok');?>" style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <div id="tb_layer" style="display:none">
      <xmp>
        <table border="0" cellspacing="0" cellpadding="0" id="even_detail" class="even_detail_1">
          *GAMELIST*
          <!--td valign="top">
          </td>
          </tr-->
        </table>
      </xmp>
    </div>
    <div id="tr_layer" style="display:none">
      <xmp>
        <!--tr>
        <td>
        <div-->
        <tr style="display:*SHOW_TR*">
          <td class="even_date">
            *GAMEDATE_TR*
          </td>
        </tr>
        <tr id="list_color" *list_color*>
          <td class="even_info">
            <div class="even_time">
              *TIME*
              <span class="even_type">
                *GTYPE*
              </span>
              <span id="tv_icon" class="tv_icon" onClick="OpenTV('*ID*');" *STYLE*>
              </span>
            </div>
            <div class="even_leag">
              *LEAGUE*
              <br>
              <span class="even_team">
                *TEAMH*&nbsp;vs&nbsp;*TEAMC*
              </span>
            </div>
          </td>
        </tr>
        <!--tr>
        <td class="even_leag">
        *LEAGUE*<br>
        <span class="even_team">*TEAMH*&nbsp;vs&nbsp;*TEAMC*</span>
        </td>
        </tr-->
      </xmp>
    </div>
    <!--/td>
    </tr-->
    <!-- 右选单-立即投注 Start -->
    <div id="main_bet" style="overflow: hidden;">
      <div id="menu_bet">
        <div class="list_out" id="TVbut" onclick="go_livepage();">
          直播日程表
        </div>
        <div class="bet_on" id="BEbut" onclick="go_betpage();">
          立即投注
        </div>
      </div>
      <!-- 无赛下注画面 -->
      <div id="bet_none" class="bet_none" style="display:none; overflow:hidden;">
        <table border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td>
                -
              </td>
              <td>
                您所选的赛事暂时无法投注
              </td>
              <td>
                -
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- 盘面 外框 Start-->
      <div id="bet_box" class="bet_box">
        <!-- 注解 -->
        <!--div id="bet_ps" class="bet_ps" style="display:none">请点选下列赔率并加到您的投注单中</div-->
        <!-- 盘面 Start -->
        <div id="bet_mem" class="bet_mem">
          <div id="bet_div" style="display:none">
            <iframe id="bet_order_frame" name="bet_order_frame" src="<?php echo U('Old/ok');?>" scrolling="NO"
            frameborder="NO" border="0" width="240" height="0">
            </iframe>
          </div>
          <div>
            <iframe id="Live_mem" name="Live_mem" src="<?php echo U('Old/ok');?>" scrolling="NO" frameborder="NO"
            border="0" width="240" height="280">
            </iframe>
          </div>
        </div>
        <!-- 盘面 End -->
        <!-- <td align="right" valign="top" id="table_Live_order"> -->
        <!--<table border="0" cellspacing="0" cellpadding="0">-->
        <!--<tr><td><iframe id="mem_order" src="/ok.html" frameborder=0 width="300"scrolling="NO"  class="Live_order" ></iframe></td></tr> -->
        <!--<tr><td><iframe id="Live_mem" src="/ok.html" scrolling="NO" frameborder="NO" border="0"></iframe></td></tr>-->
        <!--</table>-->
        <!--</td>-->
      </div>
      <!-- 盘面 外框 End -->
    </div>
    <!-- 右选单立即投注 End -->
  </body>

</html>