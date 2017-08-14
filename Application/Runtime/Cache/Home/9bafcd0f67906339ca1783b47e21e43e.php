<?php if (!defined('THINK_PATH')) exit();?><body>
  <link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/live.css">
  <div class="liveTV_main">
    <!-- title -->
    <div class="live_header">
      <h1>
        观看现场
      </h1>
    </div>
    <!-- title End -->
    <!-- body -->
    <div class="liveTVG noFloat">
      <!--左边区域-->
      <div class="liveTV_leftDIV">
        <!--计分板-->
        <div id="div_info" class="live_scoreDIV" style="display: none;">
          <!--足球-->
          <div id="info_FT" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_SC">
              <tbody>
                <tr>
                  <td id="FT_clothes_h" width="20">
                    &nbsp;
                  </td>
                  <td id="FT_sc_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td class="live_score_team">
                    <span id="FT_team_h">
                    </span>
                    <span id="FT_red_h" style="display:none" class="live_score_redCard">
                      0
                    </span>
                  </td>
                </tr>
                <tr>
                  <td id="FT_clothes_c">
                    &nbsp;
                  </td>
                  <td id="FT_sc_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td class="live_score_team">
                    <span id="FT_team_c">
                    </span>
                    <span id="FT_red_c" style="display:none" class="live_score_redCard">
                      0
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--篮球&棒球&其他-->
          <div id="info_BK" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_BK">
              <tbody>
                <tr>
                  <td id="BK_clothes_h" width="20">
                    &nbsp;
                  </td>
                  <td id="BK_sc_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BK_team_h" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td id="BK_clothes_c">
                    &nbsp;
                  </td>
                  <td id="BK_sc_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BK_team_c" class="live_score_team">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="info_BS" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_BS">
              <tbody>
                <tr>
                  <td id="BS_sc_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BS_clothes_h" width="20">
                    &nbsp;
                  </td>
                  <td id="BS_team_h" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td id="BS_sc_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BS_clothes_c">
                    &nbsp;
                  </td>
                  <td id="BS_team_c" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td colspan="6" class="padd0">
                    <table cellspacing="0" cellpadding="0" class="live_scoreTB_inside">
                      <tbody>
                        <tr>
                          <td width="35%">
                            <div class="live_LeiBaoG">
                              <span id="BS_base_1B" class="live_LeiBao01">
                              </span>
                              <span id="BS_base_2B" class="live_LeiBao02">
                              </span>
                              <span id="BS_base_3B" class="live_LeiBao03">
                              </span>
                            </div>
                          </td>
                          <td width="65%" class="Word_Paddright">
                            出局:
                            <tt id="BS_out_count" class="dark_pink">
                            </tt>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <span id="BS_game_count" class="live_FTarr">
            </span>
            <!--场次-->
          </div>
          <div id="info_OP" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_BK">
              <tbody>
                <tr>
                  <td id="OP_clothes_h" width="20">
                    &nbsp;
                  </td>
                  <td id="OP_sc_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td class="live_score_team">
                    <span id="OP_team_h">
                    </span>
                    <span id="OP_red_h" style="display:none" class="live_score_redCard">
                      0
                    </span>
                  </td>
                </tr>
                <tr>
                  <td id="OP_clothes_c">
                    &nbsp;
                  </td>
                  <td id="OP_sc_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td class="live_score_team" <span="" id="OP_team_c">
                    &gt;
                    <span id="OP_red_c" style="display:none" class="live_score_redCard">
                      0
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--网球-->
          <div id="info_TN" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_TN">
              <tbody>
                <tr>
                  <td id="TN_game_h" width="20" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="TN_set_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TN_point_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TN_serve_h" width="21">
                    &nbsp;
                  </td>
                  <td id="TN_team_h" class="live_score_team">
                  </td>
                  <td rowspan="2" id="TN_best" class="live_score_best">
                  </td>
                </tr>
                <tr>
                  <td id="TN_game_c" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="TN_set_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TN_point_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TN_serve_c">
                    &nbsp;
                  </td>
                  <td id="TN_team_c" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td colspan="6" class="padd0">
                    <table cellspacing="0" cellpadding="0" class="live_scoreTB_inside">
                      <tbody>
                        <tr>
                          <td width="35%">
                            <span id="TN_before">
                            </span>
                            <span id="TN_weather" class="RedWord" style="display:none">
                              天气延赛
                            </span>
                          </td>
                          <td width="65%" class="Word_Paddright topTD">
                            总局数
                            <tt id="TN_total" class="dark_pink">
                            </tt>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--羽毛 乒乓 排球-->
          <div id="info_VB" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_TN">
              <tbody>
                <tr>
                  <td id="VB_set_h" width="20" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="VB_point_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="VB_serve_h" width="21" class="live_scoreIcon_a">
                    &nbsp;
                  </td>
                  <td id="VB_team_h" class="live_score_team">
                  </td>
                  <td rowspan="2" id="VB_best" class="live_score_best">
                  </td>
                </tr>
                <tr>
                  <td id="VB_set_c" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="VB_point_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="VB_serve_c" class="live_scoreIcon_b">
                    &nbsp;
                  </td>
                  <td id="VB_team_c" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td colspan="5" class="padd0">
                    <table cellspacing="0" cellpadding="0" class="live_scoreTB_inside">
                      <tbody>
                        <tr>
                          <td id="VB_before" width="35%">
                          </td>
                          <td width="65%" class="Word_Paddright topTD">
                            总分数
                            <tt id="VB_total" class="dark_pink">
                            </tt>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="info_BM" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_TN">
              <tbody>
                <tr>
                  <td id="BM_set_h" width="20" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="BM_point_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BM_serve_h" width="21" class="live_scoreIcon_a">
                    &nbsp;
                  </td>
                  <td id="BM_team_h" class="live_score_team">
                  </td>
                  <td rowspan="2" id="BM_best" class="live_score_best">
                  </td>
                </tr>
                <tr>
                  <td id="BM_set_c" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="BM_point_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="BM_serve_c" class="live_scoreIcon_b">
                    &nbsp;
                  </td>
                  <td id="BM_team_c" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td colspan="5" class="padd0">
                    <table cellspacing="0" cellpadding="0" class="live_scoreTB_inside">
                      <tbody>
                        <tr>
                          <td id="BM_before" width="35%">
                          </td>
                          <td width="65%" class="Word_Paddright topTD">
                            总分数
                            <tt id="BM_total" class="dark_pink">
                            </tt>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="info_TT" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_TN">
              <tbody>
                <tr>
                  <td id="TT_set_h" width="20" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="TT_point_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TT_serve_h" width="21" class="live_scoreIcon_a">
                    &nbsp;
                  </td>
                  <td id="TT_team_h" class="live_score_team">
                  </td>
                  <td rowspan="2" id="TT_best" class="live_score_best">
                  </td>
                </tr>
                <tr>
                  <td id="TT_set_c" class="Word_Paddleft tuhuiWord">
                    0
                  </td>
                  <td id="TT_point_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="TT_serve_c" class="live_scoreIcon_b">
                    &nbsp;
                  </td>
                  <td id="TT_team_c" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td colspan="5" class="padd0">
                    <table cellspacing="0" cellpadding="0" class="live_scoreTB_inside">
                      <tbody>
                        <tr>
                          <td id="TT_before" width="35%">
                          </td>
                          <td width="65%" class="Word_Paddright topTD">
                            总分数
                            <tt id="TT_total" class="dark_pink">
                            </tt>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="info_SK" style="display:none">
            <table cellspacing="0" cellpadding="0" class="live_scoreTB live_BS">
              <tbody>
                <tr>
                  <td id="SK_sc_h" width="10" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="SK_team_h" class="live_score_team">
                  </td>
                </tr>
                <tr>
                  <td id="SK_sc_c" class="TXTnowrap tuhuiWord">
                    0
                  </td>
                  <td id="SK_team_c" class="live_score_team">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--计分板 End-->
        <!--没有TV播放 -->
        <div valign="top" id="DemoImgLayer" class="liveTV_demo" style="display:none">
        </div>
        <!--没有TV播放 End-->
        <!--视讯影片区-->
        <div id="FlahLayer" style="" class="liveTV_movieBIGDIV">
          <!-- 视频 -->
          <div id="videoFrame" style="display:none;" class="dome_L">
              <video width="320" height="240" controls="">
                <source src="http://www.runoob.com/try/demo_source/movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                您的浏览器不支持 HTML5 video 标签。
              </video>
          </div>
          <div class="dome_L">
            <iframe id="DefLive" name="DefLive" width="100%" height="438" src="" scrolling="no" frameborder="0" framespacing="0" cellspacing="0" cellpadding="0" style="display:none;">
            </iframe>
          </div>
          <!--TV未播放假图 -->
          <div id="div_fake" class="live_TVdemoBG_BIG01">
            点击播放。
          </div>
        </div>
        <!--视讯影片区 End-->
      </div>
      <!--左边区域 End-->
      <!--右边区域-->
      <div id="TV_right" class="liveTV_rightDIV" style="overflow-y: hidden;">
        <!--赛事直播日程表-->
        <div id="main" class="live_listG_nomal" style="display: block;">
          <!--head选项卡按钮-->
          <div id="main_head" class="noFloat" style="height: 40px; width: 316px;">
            <span tabindex="1" id="btn_bet_main" class="liveTV_headerBTN_on" title="">
              立即投注
            </span>
            <span tabindex="2" class="liveTV_headerBTN" title="">
              时间表
            </span>
          </div>
          <h1>直播日程表</h1>
          <div id="sel_gtype" class="live_allSportsBTN">
            <tt id="select_gtype">所有体育</tt>
            <div id="show_gtype" style="display:none" class="live_MINImenu" tabindex="100">
              <span class="live_MINImenu_arr">
              </span>
              <h1>
                选择体育
              </h1>
              <!--球类拉霸-->
              <ul id="option_gtype" class="live_MINIul">
                <!-- 程式趴 -->
                <!--li id="gtype_all">所有体育</li>
                <li id="gtype_FT">Soccer</li>
                <li id="gtype_BK" class="live_allSportsLow">Basketball & <br>American Football</li>
                <li id="gtype_TN">Tennis</li>
                <li id="gtype_VB">Volleyball</li>
                <li id="gtype_BM">Badminton</li>
                <li id="gtype_TT">Table Tennis</li>
                <li id="gtype_BS">Baseball</li>
                <li id="gtype_OP">Other Sports</li-->
                <li id="option_All" value="All">
                  所有球类
                </li>
                <li id="option_FT" value="FT">
                  足球
                </li>
                <li id="option_BK" value="BK">
                  篮球 / 美式足球
                </li>
                <li id="option_TN" value="TN">
                  网球
                </li>
                <li id="option_VB" value="VB">
                  排球
                </li>
                <li id="option_BM" value="BM">
                  羽毛球
                </li>
                <li id="option_TT" value="TT">
                  兵乓球
                </li>
                <li id="option_BS" value="BS">
                  棒球
                </li>
                <li id="option_SK" value="SK">
                  斯诺克/台球
                </li>
                <li id="option_OP" value="OP">
                  其他
                </li>
              </ul>
              <!--球类拉霸 End-->
            </div>
          </div>
          <!-- 立即投注 -->
          <div id="touzhu" class="live_scrollBar">
            <div class="live_oddsDIV">
              <table cellspacing="0" cellpadding="0" class="live_oddsTB">
                <!-- 2017-0206-johnson-2056.新舊會員端-彈出tv&tv視窗-網,排,羽,桌當有開子盤時,同一玩法子盤和母盤只需要一條格線,現在多了一個標題(BGM-303)-->
                <tbody>
                  <tr>
                    <th colspan="6">
                      全场
                    </th>
                  </tr>
                  <tr>
                    <td name="team_320" class="live_oddsTD01">
                      主
                    </td>
                    <td name="team_480" style="display:none;" class="live_oddsTD01">
                      廖敏峻/陈晓欢(中华台北)
                    </td>
                    <td class="live_oddsTD02">
                      <span class="live_oddWordG">
                        <span id="RMH117865" onmouseover="iornameMouseOver(this.id);" class="bet_bg_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_rm.php?gid=117865&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=H&amp;gnum=50016&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RM&quot;,&quot;RMH117865&quot;);"
                          title="廖敏峻/陈晓欢(中华台北)">
                            1.23
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD03">
                      <span class="live_odd_rightWord">
                        <span>
                          1.5
                        </span>
                      </span>
                      <span class="live_oddWordG">
                        <span id="REH117865" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_re.php?gid=117865&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=H&amp;gnum=50016&amp;strong=H&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RE&quot;,&quot;REH117865&quot;);"
                          title="廖敏峻/陈晓欢(中华台北)">
                            2.27
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD04">
                      <span class="live_odd_rightWord">
                        <span>
                          <tt style="display:none" class="light_BrownWord03">
                            大
                          </tt>
                        </span>
                      </span>
                      <span class="live_oddWordG">
                      </span>
                    </td>
                  </tr>
                  <tr class="live_oddTR">
                    <td name="team_320" class="live_oddsTD01">
                      客
                    </td>
                    <td name="team_480" style="display:none;" class="live_oddsTD01">
                      提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国)
                    </td>
                    <td class="live_oddsTD02">
                      <span class="live_oddWordG">
                        <span id="RMC117865" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_rm.php?gid=117865&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=C&amp;gnum=50015&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RM&quot;,&quot;RMC117865&quot;);"
                          title="提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国)">
                            3.75
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD03">
                      <span class="live_odd_rightWord">
                        <span>
                          &nbsp;
                        </span>
                      </span>
                      <span class="live_oddWordG">
                        <span id="REC117865" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_re.php?gid=117865&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=C&amp;gnum=50015&amp;strong=H&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RE&quot;,&quot;REC117865&quot;);"
                          title="提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国)">
                            0.16
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD04">
                      <span class="live_odd_rightWord">
                        <span>
                          <tt style="display:none" class="light_BrownWord03">
                            小
                          </tt>
                        </span>
                      </span>
                      <span class="live_oddWordG">
                      </span>
                    </td>
                  </tr>
                  <!-- 2017-0206-johnson-2056.新舊會員端-彈出tv&tv視窗-網,排,羽,桌當有開子盤時,同一玩法子盤和母盤只需要一條格線,現在多了一個標題(BGM-303)-->
                  <tr>
                    <th colspan="6">
                      分数
                    </th>
                  </tr>
                  <tr>
                    <td name="team_320" class="live_oddsTD01">
                      主
                    </td>
                    <td name="team_480" style="display:none;" class="live_oddsTD01">
                      廖敏峻/陈晓欢(中华台北)
                    </td>
                    <td class="live_oddsTD02">
                      <span class="live_oddWordG">
                      </span>
                    </td>
                    <td class="live_oddsTD03">
                      <span class="live_odd_rightWord">
                        <span>
                          8.5
                        </span>
                      </span>
                      <span class="live_oddWordG">
                        <span id="REH117866" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_re.php?gid=117866&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=H&amp;gnum=150016&amp;strong=H&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RE&quot;,&quot;REH117866&quot;);"
                          title="廖敏峻/陈晓欢(中华台北) - (分数)">
                            0.96
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD04">
                      <span class="live_odd_rightWord">
                        <span>
                          <tt style="display:none" class="light_BrownWord03">
                            大
                          </tt>
                        </span>
                      </span>
                      <span class="live_oddWordG">
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td name="team_320" class="live_oddsTD01">
                      客
                    </td>
                    <td name="team_480" style="display:none;" class="live_oddsTD01">
                      提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国)
                    </td>
                    <td class="live_oddsTD02">
                      <span class="live_oddWordG">
                      </span>
                    </td>
                    <td class="live_oddsTD03">
                      <span class="live_odd_rightWord">
                        <span>
                          &nbsp;
                        </span>
                      </span>
                      <span class="live_oddWordG">
                        <span id="REC117866" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
                          <span onclick="gethref(&quot;../BM_order/BM_order_re.php?gid=117866&amp;uid=xunpb54m17041417l1814785&amp;langx=zh-cn&amp;type=C&amp;gnum=150015&amp;strong=H&amp;odd_f_type=H&quot;,&quot;BM&quot;,&quot;RE&quot;,&quot;REC117866&quot;);"
                          title="提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国) - (分数)">
                            0.76
                          </span>
                        </span>
                      </span>
                    </td>
                    <td class="live_oddsTD04">
                      <span class="live_odd_rightWord">
                        <span>
                          <tt style="display:none" class="light_BrownWord03">
                            小
                          </tt>
                        </span>
                      </span>
                      <span class="live_oddWordG">
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6" class="padd0">
                      <span onclick="moreEvent('BM','117865','undefined','undefined');" class="live_allbetBTN">
                        所有玩法
                        <span>
                          5
                        </span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- 时间表 -->
          <!--没有赛事-->
          <div id="even_none" class="live_noList" style="display:none">
            现在还没有现场和未来赛事的直播流。
          </div>
          <!--没有赛事 End-->
          <!-- 赛事列表 -->
          <div id="even_list" class="live_scrollBar" style="display:none">
            <div id="showlayers">
              <h2>
                2017-06-30
              </h2>
              <table cellspacing="0" cellpadding="0" class="live_listTB">
                <tbody>
                  <tr id="live_txt_BM_14292" class="live_txt_nomal" onclick="OpenTV_new('BM_14292');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14292" width="50" class="live_tv_nomal">
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14292" width="30" class="live_bm_nomal">
                      &nbsp;
                    </td>
                    <td>
                      查拉德查拉姆.查亚尼特/帕泰玛斯.姆恩沃(泰国) vs 松本麻佑/永原和可奈(日本)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160519" class="live_txt_off" onclick="OpenTV_new('TN_160519');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160519" width="50" class="live_tv_off">
                      06:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160519" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      希瑟.沃特森(大不列颠) vs 卡罗琳.沃兹尼亚奇(丹麦)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14301" class="live_txt_off" onclick="OpenTV_new('BM_14301');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14301" width="50" class="live_tv_off">
                      06:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14301" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      宋硕芸(中华台北) vs 夏美下田(日本)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14293" class="live_txt_off" onclick="OpenTV_new('BM_14293');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14293" width="50" class="live_tv_off">
                      07:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14293" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      廖敏峻/陈晓欢(中华台北) vs 提恩.伊斯里亚内特/帕冲攀.磋楚翁(泰国)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160531" class="live_txt_off" onclick="OpenTV_new('TN_160531');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160531" width="50" class="live_tv_off">
                      07:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160531" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      简.伦纳德.斯特罗费(德国) vs 安德烈.库兹涅索夫(俄罗斯)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14302" class="live_txt_off" onclick="OpenTV_new('BM_14302');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14302" width="50" class="live_tv_off">
                      07:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14302" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      徐承宰/金荷娜(韩国) vs 熙永凯.特里/谭葳涵(新加坡)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160521" class="live_txt_off" onclick="OpenTV_new('TN_160521');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160521" width="50" class="live_tv_off">
                      08:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160521" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      约翰娜.孔达(大不列颠) vs 卡罗莉娜.普利斯科娃(捷克)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160539" class="live_txt_off" onclick="OpenTV_new('TN_160539');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160539" width="50" class="live_tv_off">
                      08:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160539" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      阿什利.巴特伊/凯西.德拉奎亚(澳洲) vs 蒂美亚.贝波丝(匈牙利)/安德烈娅.哈拉娃科娃(捷克)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14294" class="live_txt_off" onclick="OpenTV_new('BM_14294');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14294" width="50" class="live_tv_off">
                      08:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14294" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      王齐麟/李佳馨(中华台北) vs 丹尼.巴瓦.克里斯南塔/王佳莹(新加坡)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14303" class="live_txt_off" onclick="OpenTV_new('BM_14303');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14303" width="50" class="live_tv_off">
                      08:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14303" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      李梓嘉(马来西亚) vs 科希特.佩普拉达布(泰国)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160541" class="live_txt_off" onclick="OpenTV_new('TN_160541');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160541" width="50" class="live_tv_off">
                      09:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160541" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      妮可.梅里查尔(美国)/安娜.史密斯(大不列颠) vs 詹咏然(中华台北)/玛蒂娜.辛吉斯(瑞士)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14295" class="live_txt_off" onclick="OpenTV_new('BM_14295');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14295" width="50" class="live_tv_off">
                      09:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14295" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      全奕陈(韩国) vs 刘国伦(马来西亚)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160533" class="live_txt_off" onclick="OpenTV_new('TN_160533');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160533" width="50" class="live_tv_off">
                      09:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160533" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      尼克.基里奥斯(澳洲) vs 维克托.特洛西奇(塞尔维亚)
                    </td>
                  </tr>
                  <tr id="live_txt_BM_14304" class="live_txt_off" onclick="OpenTV_new('BM_14304');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_BM_14304" width="50" class="live_tv_off">
                      09:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_BM_14304" width="30" class="live_bm_off">
                      &nbsp;
                    </td>
                    <td>
                      崔帅圭/蔡侑玎(韩国) vs 曾敏豪/胡绫芳(中华台北)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160535" class="live_txt_off" onclick="OpenTV_new('TN_160535');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160535" width="50" class="live_tv_off">
                      10:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160535" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      罗伯托.包蒂斯塔.阿古特(西班牙) vs 本笃.帕尔雷(法国)
                    </td>
                  </tr>
                  <tr id="live_txt_TN_160537" class="live_txt_off" onclick="OpenTV_new('TN_160537');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_TN_160537" width="50" class="live_tv_off">
                      11:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_TN_160537" width="30" class="live_tn_off">
                      &nbsp;
                    </td>
                    <td>
                      阿尔伯特.拉莫斯.维诺拉斯(西班牙) vs 丹尼斯.萨波瓦洛夫(加拿大)
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1720839" class="live_txt_off" onclick="OpenTV_new('FT_1720839');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1720839" width="50" class="live_tv_off">
                      12:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1720839" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      SV格罗迪格 vs 阿科马特
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1719607" class="live_txt_off" onclick="OpenTV_new('FT_1719607');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1719607" width="50" class="live_tv_off">
                      12:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1719607" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      奥地利维也纳 vs 阿森纳图拉
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1719611" class="live_txt_off" onclick="OpenTV_new('FT_1719611');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1719611" width="50" class="live_tv_off">
                      12:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1719611" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      莫斯科火车头 vs 里耶卡
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1720010" class="live_txt_off" onclick="OpenTV_new('FT_1720010');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1720010" width="50" class="live_tv_off">
                      12:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1720010" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      LASK宁斯 vs 乌比斯
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1719737" class="live_txt_off" onclick="OpenTV_new('FT_1719737');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1719737" width="50" class="live_tv_off">
                      12:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1719737" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      明斯克 vs 克鲁姆卡其
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1718699" class="live_txt_off" onclick="OpenTV_new('FT_1718699');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1718699" width="50" class="live_tv_off">
                      12:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1718699" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      派德 vs 维尔扬迪土勒维克
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710691" class="live_txt_off" onclick="OpenTV_new('FT_1710691');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710691" width="50" class="live_tv_off">
                      14:45
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710691" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      布雷 vs 登克尔克
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710699" class="live_txt_off" onclick="OpenTV_new('FT_1710699');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710699" width="50" class="live_tv_off">
                      14:45
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710699" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      杜希达联 vs 立麦立克
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710703" class="live_txt_off" onclick="OpenTV_new('FT_1710703');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710703" width="50" class="live_tv_off">
                      14:45
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710703" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      圣巴特里 vs 戈尔韦联
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717766" class="live_txt_off" onclick="OpenTV_new('FT_1717766');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717766" width="50" class="live_tv_off">
                      20:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717766" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      坎图劳 vs 皇家加西拉索
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1720704" class="live_txt_off" onclick="OpenTV_new('FT_1720704');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1720704" width="50" class="live_tv_off">
                      21:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1720704" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      库恩卡 vs 瓦伦独立
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711031" class="live_txt_off" onclick="OpenTV_new('FT_1711031');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711031" width="50" class="live_tv_off">
                      21:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711031" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      皇家盐湖城 vs 奥兰多市
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>
                2017-07-01
              </h2>
              <table cellspacing="0" cellpadding="0" class="live_listTB">
                <tbody>
                  <tr id="live_txt_FT_1710728" class="live_txt_off" onclick="OpenTV_new('FT_1710728');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710728" width="50" class="live_tv_off">
                      01:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710728" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      札幌冈萨多 vs 清水心跳
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710793" class="live_txt_off" onclick="OpenTV_new('FT_1710793');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710793" width="50" class="live_tv_off">
                      05:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710793" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      山形蒙迪奥 vs 町田泽维亚
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710798" class="live_txt_off" onclick="OpenTV_new('FT_1710798');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710798" width="50" class="live_tv_off">
                      05:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710798" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      千叶市原 vs 大分三神
                    </td>
                  </tr>
                  
                  <tr id="live_txt_FT_1717401" class="live_txt_off" onclick="OpenTV_new('FT_1717401');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717401" width="50" class="live_tv_off">
                      09:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717401" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      斯鲁特斯克 vs 迪尼普莫吉莱夫
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1694258" class="live_txt_off" onclick="OpenTV_new('FT_1694258');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1694258" width="50" class="live_tv_off">
                      10:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1694258" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      马模 vs AFC艾基图纳
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717769" class="live_txt_off" onclick="OpenTV_new('FT_1717769');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717769" width="50" class="live_tv_off">
                      13:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717769" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      科美西欧 vs 圣马丁
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710877" class="live_txt_off" onclick="OpenTV_new('FT_1710877');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710877" width="50" class="live_tv_off">
                      14:15
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710877" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      桑恩达 vs 阿利辛特
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1713261" class="live_txt_off" onclick="OpenTV_new('FT_1713261');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1713261" width="50" class="live_tv_off">
                      15:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1713261" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      彭美拉斯SP vs 甘美奥RS
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717772" class="live_txt_off" onclick="OpenTV_new('FT_1717772');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717772" width="50" class="live_tv_off">
                      16:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717772" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      祖安奥里兹 vs 慕尼斯帕尔
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1713265" class="live_txt_off" onclick="OpenTV_new('FT_1713265');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1713265" width="50" class="live_tv_off">
                      18:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1713265" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      戈亚尼恩斯 vs 山度士SP
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717775" class="live_txt_off" onclick="OpenTV_new('FT_1717775');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717775" width="50" class="live_tv_off">
                      18:45
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717775" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      罗沙里奥体育 vs 梅加
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711051" class="live_txt_off" onclick="OpenTV_new('FT_1711051');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711051" width="50" class="live_tv_off">
                      19:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711051" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      蒙特利尔冲击 vs 华盛顿联队
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711036" class="live_txt_off" onclick="OpenTV_new('FT_1711036');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711036" width="50" class="live_tv_off">
                      19:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711036" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      芝加哥火焰 vs 温哥华白帽
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711041" class="live_txt_off" onclick="OpenTV_new('FT_1711041');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711041" width="50" class="live_tv_off">
                      19:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711041" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      达拉斯 vs 多伦多
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711046" class="live_txt_off" onclick="OpenTV_new('FT_1711046');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711046" width="50" class="live_tv_off">
                      19:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711046" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      肯萨斯城体育会 vs 波特兰木材
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711056" class="live_txt_off" onclick="OpenTV_new('FT_1711056');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711056" width="50" class="live_tv_off">
                      19:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711056" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      哥伦布机员 vs 亚特兰大联
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711061" class="live_txt_off" onclick="OpenTV_new('FT_1711061');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711061" width="50" class="live_tv_off">
                      21:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711061" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      科罗拉多急流 vs 侯斯顿戴拿模
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717778" class="live_txt_off" onclick="OpenTV_new('FT_1717778');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717778" width="50" class="live_tv_off">
                      21:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717778" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      迪波特斯 vs 科梅次安特斯尤尼杜斯
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711066" class="live_txt_off" onclick="OpenTV_new('FT_1711066');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711066" width="50" class="live_tv_off">
                      22:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711066" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      圣荷西地震 vs 洛杉矶银河
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>
                2017-07-02
              </h2>
              <table cellspacing="0" cellpadding="0" class="live_listTB">
                <tbody>
                  <tr id="live_txt_FT_1710770" class="live_txt_off" onclick="OpenTV_new('FT_1710770');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710770" width="50" class="live_tv_off">
                      05:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710770" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      甲府风林 vs 鸟栖沙根
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710777" class="live_txt_off" onclick="OpenTV_new('FT_1710777');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710777" width="50" class="live_tv_off">
                      05:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710777" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      柏雷素尔 vs 鹿岛鹿角
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1710784" class="live_txt_off" onclick="OpenTV_new('FT_1710784');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1710784" width="50" class="live_tv_off">
                      06:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1710784" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      大阪樱花 vs 东京
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717429" class="live_txt_off" onclick="OpenTV_new('FT_1717429');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717429" width="50" class="live_tv_off">
                      10:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717429" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      明斯克戴拿模 vs 维迪比斯克
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717444" class="live_txt_off" onclick="OpenTV_new('FT_1717444');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717444" width="50" class="live_tv_off">
                      11:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717444" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      斯拉维亚莫兹里 vs 鱼雷佐迪诺
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717784" class="live_txt_off" onclick="OpenTV_new('FT_1717784');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717784" width="50" class="live_tv_off">
                      14:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717784" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      阿里萨竞技 vs 万卡
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1713273" class="live_txt_off" onclick="OpenTV_new('FT_1713273');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1713273" width="50" class="live_tv_off">
                      15:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1713273" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      法林明高RJ vs 圣保罗SP
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1717787" class="live_txt_off" onclick="OpenTV_new('FT_1717787');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1717787" width="50" class="live_tv_off">
                      16:30
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1717787" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      卡加马卡 vs 阿里萨利马
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1711071" class="live_txt_off" onclick="OpenTV_new('FT_1711071');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1711071" width="50" class="live_tv_off">
                      17:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1711071" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      费城联合 vs 新英伦革命
                    </td>
                  </tr>
                  <tr id="live_txt_FT_1713289" class="live_txt_off" onclick="OpenTV_new('FT_1713289');">
                    <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                    <td id="live_tv_FT_1713289" width="50" class="live_tv_off">
                      18:00
                    </td>
                    <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                    <td id="live_gtype_FT_1713289" width="30" class="live_sc_off">
                      &nbsp;
                    </td>
                    <td>
                      哥里迪巴PR vs 华斯高RJ
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- 赛事列表 End-->
          <!-- 赛事模组 -->
          <div id="tb_layer" style="display:none">
            <xmp>
              <h2>
                *GAME_DATE*
              </h2>
              <table cellspacing="0" cellpadding="0" class="live_listTB">
                *GAME_LIST*
              </table>
            </xmp>
          </div>
          <div id="tr_layer" style="display:none">
            <xmp>
              <tr id="live_txt_*ID*" *LIVE_TXT_CLASS* onClick="OpenTV_new('*ID*');">
                <!-- live_txt_on / live_txt_nomal / live_txt_off -->
                <td id="live_tv_*ID*" width="50" *LIVE_TV_CLASS*>
                  *TIME*
                </td>
                <!-- live_tv_on / live_tv_nomal / live_tv_off -->
                <td id="live_gtype_*ID*" width="30" *LIVE_GTYPE_CLASS*>
                  &nbsp;
                </td>
                <td>
                  *TEAMH* vs *TEAMC*
                </td>
              </tr>
            </xmp>
          </div>
          <!-- 赛事模组 End -->
        </div>
        <!--赛事直播日程表 End-->
        <!--无法投注-->
        <div id="bet_none" class="live_closeDIV" style="display:none">
          <span>
            您所选的赛事暂时无法投注。
          </span>
        </div>
        <!--无法投注 End-->
        <!--玩法没开-->
        <div id="wtype_close" class="live_closeDIV">
          <span>
            无提供交易。
          </span>
        </div>
        <div id="none_div" class="live_noList_high" style="display:none">
          现在还没有现场和未来赛事的直播流。
        </div>
        <!-- 盘面 Start -->
        <div id="main_bet" style="display:none">
          <div id="bet_mem" class="bet_mem">
            <div id="mem_div" class="Live_mem">
              <iframe id="Live_mem" name="Live_mem" scrolling="YES" frameborder="NO"
              border="0" width="316" height="0px" allowtransparency="true">
              </iframe>
            </div>
            <div id="bet_div" class="liveTV_DIV_Mask" style="display:none">
              <iframe id="bet_order_frame" class="liveTV_MaskG" name="bet_order_frame"
              scrolling="NO" frameborder="NO" border="0" width="100%" height="483" allowtransparency="true">
              </iframe>
            </div>
          </div>
        </div>
        <!-- 盘面 End -->
      </div>
      <!--右边区域 End-->
    </div>
    <!-- body End -->
    <!-- load data -->
    <iframe id="reloadPHP" name="reloadPHP"  style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <iframe id="reloadgame" name="reloadgame"  style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <iframe id="registLive" name="registLive"  style="display:none"
    width="0" height="0" frameborder="NO" border="0">
    </iframe>
    <!-- load data End-->
  </div>
  <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
  <script type="text/javascript">
  //选项卡
  $("#main_head span").click(function() {
      num = $(this).attr("tabindex");
      if(num==1){
          $("#touzhu").show();
          $("#even_list").hide();
          $(this).siblings('span').removeClass("liveTV_headerBTN_on").addClass("liveTV_headerBTN");
         // $(this).addClass('liveTV_headerBTN_on');
          $(this).addClass('liveTV_headerBTN_on');
      }else{
          $("#even_list").show();
          $("#touzhu").hide();
          $(this).siblings('span').removeClass("liveTV_headerBTN_on").addClass("liveTV_headerBTN");
          $(this).addClass('liveTV_headerBTN_on');
      }
  });
  // 下拉
  $("#select_gtype").click(function() {
      $("#show_gtype").show();
  });
  $("#option_gtype li").click(function(){
    var zhi = $(this).text();
    $("#select_gtype").text(zhi);
    $("#show_gtype").hide();
  });

  //点击播放视频
   $("#div_fake").click(function(){
      $("#videoFrame").show();
      $("#div_fake").hide();
  })
  
 
  </script>
</body>