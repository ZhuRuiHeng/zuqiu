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
<body onload="load()">
  <div id="max_leg">
      <!--title  -->
      <div id="fixhead_layer" class="fixhead_layer" style="position: fixed;">
          <!-- head -->
          <div class="bet_head">
            <!--左侧按钮-->
            <div class="bet_left">
              <span id="showNull" title="无收藏" class="bet_star_btn_out">
                <tt class="bet_star_text">
                  0
                </tt>
              </span>
              <span id="showAll" title="所有赛事" onclick="showAllGame('FT');" style="display:none;"
              class="bet_star_btn_all">
                <tt class="bet_star_All">
                  全部
                </tt>
                <tt id="live_num_all" class="bet_star_text" style="display: none;">
                  0
                </tt>
              </span>
              <span id="showMy" title="我收藏赛事" onclick="showMyLove('FT');" style="display:none;"
              class="bet_star_btn_on">
                <tt id="live_num" class="bet_star_text" style="display: none;">
                  0
                </tt>
              </span>
              <span id="sel_league" onclick="chg_league();" class="bet_league_btn">
                <tt class="bet_normal_text">
                  选择联赛&nbsp;
                  <tt id="str_num" class="bet_yellow">
                    (全部)
                  </tt>
                </tt>
              </span>
              <span id="sel_Market" class="bet_view_btn" onclick="chgMarket();">
                <tt id="SpanMarket" class="bet_normal_text">
                  主要盘口
                </tt>
              </span>
              <span id="sel_filters" class="bet_Special_btn" onclick="show_filters();">
                <tt id="SpanFilter" class="bet_normal_text">
                  隐藏特殊
                </tt>
                <!--span class="bet_btn_rednew">新</span-->
              </span>
            </div>
            <!--右侧按钮-->
            <div class="bet_right">
              <span id="pg_txt" class="bet_page_btn" style="display:none;">
              </span>
              <span id="sel_sort" class="bet_sort_btn">
                <tt class="bet_sort_text">
                  排序
                </tt>
                <div id="show_sort" onmouseleave="hideDiv(this.id);" class="bet_sort_bg"
                style="display:none;" tabindex="100">
                  <span class="bet_arrow">
                  </span>
                  <span class="bet_arrow_text">
                    赛事排序
                  </span>
                  <ul id="SortSel" selvalue="C">
                    <li id="sort_time" onclick="chgSortValue('T');" class="bet_sort_time">
                      按时间排序
                    </li>
                    <li id="sort_leg" onclick="chgSortValue('C');" class="bet_sort_comp">
                      按联盟排序
                    </li>
                  </ul>
                </div>
              </span>
              <span id="sel_odd" class="bet_odds_btn">
                <tt id="chose_odd" class="bet_normal_text">
                  香港盘
                </tt>
                <div id="show_odd" onmouseleave="hideDiv(this.id);" class="bet_odds_bg"
                style="display:none;" tabindex="100">
                  <span class="bet_arrow">
                  </span>
                  <span class="bet_arrow_text">
                    盘口类型
                  </span>
                  <ul id="myoddType" selvalue="H" seltext="香港盘">
                    <li id="odd_H" value="H" text="香港盘" class="bet_odds_contant">
                      香港盘
                    </li>
                    <li id="odd_M" value="M" text="马来盘" class="bet_odds_contant">
                      马来盘
                    </li>
                    <li id="odd_I" value="I" text="印尼盘" class="bet_odds_contant">
                      印尼盘
                    </li>
                    <li id="odd_E" value="E" text="欧洲盘" class="bet_odds_contant">
                      欧洲盘
                    </li>
                  </ul>
                </div>
              </span>
              <span class="bet_time_btn" onclick="javascript:refreshReload('',true)">
                <tt id="refreshTime" class="bet_time_text">
                  0
                </tt>
              </span>
            </div>
          </div>
          <!--Special-head-->
          <div class="bet_head_more" id="filter_div" style="display:none" tabindex="100">
            <div class="bet_left_more">
              <label>
                <input type="checkbox" class="bet_selsect_box" value="C" id="box_C">
                <span>
                </span>
                <span class="bet_more_chk">
                  显示角球
                </span>
              </label>
              <label>
                <input type="checkbox" class="bet_selsect_box" value="B" id="box_B">
                <span>
                </span>
                <span class="bet_more_chk">
                  显示罚牌
                </span>
              </label>
              <span id="" class="bet_Apply_btn" onclick="set_filters();">
                <tt id="" class="bet_normal_text">
                  应用
                </tt>
              </span>
            </div>
            <div class="bet_right_more">
              <span class="bet_cursor" onClick="set_allbox('Sel');">全选</span>
              <span>|</span>
              <span class="bet_cursor" onClick="set_allbox('Del');">全不选</span>
            </div>
          </div>
      </div>
      <!-- 返回顶部 -->
      <div id="backTOP" style="top: 276px; z-index: 1; display: none;" onclick="backtop();" class="bet_top_bg"></div>
      <!--内容  -->
      <div id="showtable" class="showtable_normal">
          <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table">
              <tbody>
                  <!-- 选择球类 -->
                  <tr id="title_tr" name="fixhead_copy" class="bet_game_title">
                      <td colspan="2" id="mylovegtype" style="display:none;" class="bet_game_name">足球<br><tt class="bet_game">我的收藏:滚球</tt></td>
                      <td colspan="2" id="mygtype" class="bet_game_name">足球<br><tt class="bet_game">滚球</tt></td>
                      <td class="bet_title_1X2"><span>全场<br><tt>独赢</tt></span></td>
                      <td class="bet_title_hdp"><span>全场<br><tt>让球</tt></span></td>
                      <td class="bet_title_ou"><span>全场<br><tt>大小</tt></span></td>
                      <td class="bet_title_oe"><span>全场<br><tt>单双</tt></span></td>
                      <td class="bet_title_1X2"><span>半场<br><tt>独赢</tt></span></td>
                      <td class="bet_title_dp"><span>半场<br><tt>让球</tt></span></td>
                      <td class="bet_title_hou"><span>半场<br><tt>大小</tt></span></td>
                  </tr>
                  <!--  赛况-->
                  <tr class="bet_game_league_down" style="display: ;" id="LEG_07-0160088">
                      <td colspan="9" onclick="showLeg('日本J1联赛')">日本J1联赛</td>
                  </tr>
                  <!-- 1 -->
                  <tr id="TR_07-0160088" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);" class="bet_game_tr_top">
                    <td rowspan="3" class="bet_game_time">
                      <div class="bet_time_score">
                        <tt class="bet_score">0</tt>-
                        <tt class="bet_score_og"> 1</tt>
                      </div>
                      <div>半场</div>
                      <div style="display:none" class="bet_game_n">
                      </div>
                    </td>
                    <td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
                      <div class="bet_team_div_ft">
                        <span class="bet_text_tdl"> 仙台维加泰&nbsp;</span>
                        <span class="bet_text_tdred">
                          <span style="display:none;" class="bet_red_card">*REDCARD_H*</span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <span id="RMH2787958" class="bet_bg_color">
                        <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RM','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=H&amp;gnum=60088&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RMH2787958');"
                        title="仙台维加泰">
                          8.00
                        </a>
                      </span>
                    </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl"><tt class="bet_text_thin"></tt></span>
                        <span class="bet_text_tdr">
                          <span id="REH2787958" class="bet_bg_color">
                            <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RE','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=H&amp;gnum=60088&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REH2787958');"
                            title="仙台维加泰">
                              0.95
                            </a>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue">大</tt>
                          <tt class="bet_text_thin">2.5 </tt>
                        </span>
                        <span class="bet_text_tdr">
                          <span id="ROUC2787958" class="bet_bg_color">
                            <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROU','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=C&amp;gnum=60087&amp;langx=zh-cn&amp;ptype=&amp;imp=N','ROUC2787958');"
                            title="大">
                              1.08
                            </a>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue"> 单</tt>
                        </span>
                        <span class="bet_text_tdr">
                          <span id="REOO2787958" class="bet_bg_color">
                            <a href="javascript://" onclick="parent.mem_order.betOrder('FT','REO','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REOO2787958');"
                            title="单">
                              1.86
                            </a>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td id="TR_07-0160088_text_1" class="bet_text_left_bg">
                    </td>
                    <td id="TR_07-0160088_text_2" class="bet_text_bg">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_thin_bg"></tt>
                        </span>
                        <span class="bet_text_tdr"></span>
                      </div>
                    </td>
                    <td id="TR_07-0160088_text_3" class="bet_text_right_bg">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue"></tt>
                          <tt class="bet_text_thin_bg"></tt>
                        </span>
                        <span class="bet_text_tdr"></span>
                      </div>
                    </td>
                  </tr>
                  <!-- 2 -->
                  <tr id="TR1_07-0160088" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);" class="bet_game_tr_other bet_game_bg">
                      <td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
                        <div class="bet_team_div_ft">
                          <span class="bet_text_tdl">大阪飞脚&nbsp;</span>
                          <span class="bet_text_tdred">
                            <span style="display:none;" class="bet_red_card"> *REDCARD_C*</span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text">
                        <span id="RMC2787958" class="bet_bg_color">
                          <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RM','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=C&amp;gnum=60087&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RMC2787958');"
                          title="大阪飞脚">
                            1.40
                          </a>
                        </span>
                      </td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_thin"> 0</tt>
                          </span>
                          <span class="bet_text_tdr">
                            <span id="REC2787958" class="bet_bg_color">
                              <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RE','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=C&amp;gnum=60087&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REC2787958');"
                              title="大阪飞脚">
                                0.95
                              </a>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue">小</tt>
                            <tt class="bet_text_thin">2.5</tt>
                          </span>
                          <span class="bet_text_tdr">
                            <span id="ROUH2787958" class="bet_bg_color">
                              <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROU','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=H&amp;gnum=60088&amp;langx=zh-cn&amp;ptype=&amp;imp=N','ROUH2787958');"
                              title="小">0.81</a>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue">双</tt>
                          </span>
                          <span class="bet_text_tdr">
                            <span id="REOE2787958" class="bet_bg_color">
                              <a href="javascript://" onclick="parent.mem_order.betOrder('FT','REO','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=REVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REOE2787958');"
                              title="双">2.03</a>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td id="TR1_07-0160088_text_1" class="bet_text_left_bg bet_game_rbg_l">
                      </td>
                      <td id="TR1_07-0160088_text_2" class="bet_text_bg bet_game_rbg">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_thin_bg"></tt>
                          </span>
                          <span class="bet_text_tdr"></span>
                        </div>
                      </td>
                      <td id="TR1_07-0160088_text_3" class="bet_text_right_bg bet_game_rbg">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue"> </tt>
                            <tt class="bet_text_thin_bg"></tt>
                          </span>
                          <span class="bet_text_tdr"></span>
                        </div>
                      </td>
                  </tr>
                  <!-- 3 -->
                  <tr id="TR2_07-0160088" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);" class="bet_game_tr_other">
                    <td class="bet_team">
                      <div class="bet_text_table_star">
                        <span class="bet_text_tdl">和局</span>
                        <span class="bet_text_tdstar">
                          <span id="love07-0160088_none" class="bet_game_star_none"> </span>
                          <span id="love07-0160088" style="display: none;" class="bet_game_star_out"
                          title="赛事收藏" onclick="addShowLoveI('60088','07-01<br>06:00a','日本J1联赛','仙台维加泰','大阪飞脚','1710735');">
                          </span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <span id="RMN2787958" class="bet_bg_color">
                        <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RM','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=N&amp;gnum=60087&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RMN2787958');"
                        title="和">
                          4.10
                        </a>
                      </span>
                    </td>
                    <td colspan="3">
                      <span style="display:" onclick="show_allbets('id',event,'',0);" class="bet_more_btn">
                        所有玩法&nbsp;&nbsp;
                        <tt> 28</tt>
                      </span>
                    </td>
                    <td id="TR2_07-0160088_text_1" class="bet_text_left_bg"></td>
                    <td id="TR2_07-0160088_text_2" class="bet_td_bg"></td>
                    <td id="TR2_07-0160088_text_3" class="bet_td_bg">
                      <span title="可以观看在线直播" class="bet_TV_btn_on" onclick="OpenLive('88CCBABCB7CCBABCBBBCB6CCB6CCB38ACCC8CFCEC8CECBA9B3','FT')">
                      </span>
                    </td>
                  </tr>
                  <!-- 实物贸易 -->
                  <tr class="bet_game_league" style="display: none;" id="LEG_07-0160090">
                    <td colspan="9" onclick="showLeg('日本J1联赛')">
                      日本J1联赛
                    </td>
                  </tr>
                  <!-- 1 -->
                  <tr id="TR_07-0160090" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);" class="bet_game_tr_top_color">
                    <td rowspan="2" class="bet_game_time">
                      <div class="bet_time_score"></div>
                      <div></div>
                      <div style="display:none" class="bet_game_n"></div>
                    </td>
                    <td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
                      <div class="bet_team_div_ft">
                        <span class="bet_text_tdl"> 仙台维加泰&nbsp;</span>
                        <span class="bet_text_tdred">
                          <span style="display:none;" class="bet_red_card"> *REDCARD_H*</span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text"> </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_thin"></tt>
                        </span>
                        <span class="bet_text_tdr">
                          <span id="REH2787960" class="bet_bg_color">
                            <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RE','gid=2787960&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=H&amp;gnum=60090&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REH2787960');"
                            title="仙台维加泰">
                              0.64
                            </a>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue"> 大</tt>
                          <tt class="bet_text_thin"> 2 / 2.5</tt>
                        </span>
                        <span class="bet_text_tdr">
                          <span id="ROUC2787960" class="bet_bg_color">
                            <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROU','gid=2787960&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=C&amp;gnum=60089&amp;langx=zh-cn&amp;ptype=&amp;imp=N','ROUC2787960');"
                            title="大">
                              0.76
                            </a>
                          </span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue"></tt>
                        </span>
                        <span class="bet_text_tdr"></span>
                      </div>
                    </td>
                    <td id="TR_07-0160090_text_1" class="bet_text_left_bg"></td>
                    <td id="TR_07-0160090_text_2" class="bet_text_bg">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_thin_bg"></tt>
                        </span>
                        <span class="bet_text_tdr"></span>
                      </div>
                    </td>
                    <td id="TR_07-0160090_text_3" class="bet_text_right_bg">
                      <div class="bet_text_table">
                        <span class="bet_text_tdl">
                          <tt class="bet_text_oue"></tt>
                          <tt class="bet_text_thin_bg"></tt>
                        </span>
                        <span class="bet_text_tdr"></span>
                      </div>
                    </td>
                  </tr>
                  <!-- 2 -->
                  <tr id="TR1_07-0160090" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);" class="bet_game_tr_other bet_game_bg">
                      <td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
                        <div class="bet_team_div_ft">
                          <span class="bet_text_tdl">大阪飞脚&nbsp;</span>
                          <span class="bet_text_tdred">
                            <span style="display:none;" class="bet_red_card"> *REDCARD_C*</span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text"></td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_thin">0 / 0.5</tt>
                          </span>
                          <span class="bet_text_tdr">
                            <span id="REC2787960" class="bet_bg_color">
                              <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RE','gid=2787960&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=C&amp;gnum=60089&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','REC2787960');"
                              title="大阪飞脚">
                                1.35
                              </a>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue">小</tt>
                            <tt class="bet_text_thin">2 / 2.5</tt>
                          </span>
                          <span class="bet_text_tdr">
                            <span id="ROUH2787960" class="bet_bg_color">
                              <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROU','gid=2787960&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=H&amp;gnum=60090&amp;langx=zh-cn&amp;ptype=&amp;imp=N','ROUH2787960');"
                              title="小">
                                1.14
                              </a>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td class="bet_text">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue"></tt>
                          </span>
                          <span class="bet_text_tdr"></span>
                        </div>
                      </td>
                      <td id="TR1_07-0160090_text_1" class="bet_text_left_bg bet_game_rbg_l"></td>
                      <td id="TR1_07-0160090_text_2" class="bet_text_bg bet_game_rbg">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_thin_bg"></tt>
                          </span>
                          <span class="bet_text_tdr"></span>
                        </div>
                      </td>
                      <td id="TR1_07-0160090_text_3" class="bet_text_right_bg bet_game_rbg">
                        <div class="bet_text_table">
                          <span class="bet_text_tdl">
                            <tt class="bet_text_oue"></tt>
                            <tt class="bet_text_thin_bg"></tt>
                          </span>
                          <span class="bet_text_tdr"></span>
                        </div>
                      </td>
                  </tr>
                  <!-- 3 -->
                  <tr id="TR2_07-0160090_sub" style="display: block;" onmouseover="mouseEnter_pointer(this.id);" class="bet_game_tr_other">
                    <td class="bet_team">
                      <div class="bet_text_table_star">
                        <span class="bet_text_tdl"> 和局</span>
                        <span class="bet_text_tdstar">
                          <span id="" style="display: none;" class="bet_game_star_none"></span>
                          <span id=""></span>
                        </span>
                      </div>
                    </td>
                    <td class="bet_text"> </td>
                    <td colspan="3">
                      <span style="display:none" class="bet_more_btn">
                        所有玩法&nbsp;&nbsp;
                        <tt>0</tt>
                      </span>
                    </td>
                    <td id="TR2_07-0160090_text_1" class="bet_text_left_bg"> </td>
                    <td id="TR2_07-0160090_text_2" class="bet_td_bg"></td>
                    <td id="TR2_07-0160090_text_3" class="bet_td_bg">
                      <span title="可以观看在线直播" ></span>
                    </td>
                  </tr>
                  <!-- 4 -->
                  <tr id="OBT_07-0160088">
                    <td colspan="9">
                      <div class="bet_game_more_div">
                        <table style="display:none" cellpadding="0" cellspacing="0" border="0"
                        class="bet_game_more_title ">
                          <tbody>
                            <tr>
                              <td class="bet_game_time">
                              </td>
                              <td colspan="10" class="bet_team bet_more_text">
                                加时赛
                              </td>
                              <td>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table_obt ">
                          <tbody>
                            <tr class="bet_game_tr_top_obt bet_topline_none">
                              <td rowspan="3" class="bet_game_time">
                              </td>
                              <td class="bet_team bet_more_text" *tr_event*="">
                                波胆
                              </td>
                              <td class="bet_obt_pdw">
                                1-0
                              </td>
                              <td class="bet_obt_pdw">
                                2-0
                              </td>
                              <td class="bet_obt_pdw">
                                2-1
                              </td>
                              <td class="bet_obt_pdw">
                                3-0
                              </td>
                              <td class="bet_obt_pdw">
                                3-1
                              </td>
                              <td class="bet_obt_pdw">
                                3-2
                              </td>
                              <td class="bet_obt_pdw">
                                4-0
                              </td>
                              <td class="bet_obt_pdw">
                                4-1
                              </td>
                              <td class="bet_obt_pdw">
                                4-2
                              </td>
                              <td class="bet_obt_pdw">
                                4-3
                              </td>
                              <td class="bet_obt_pdw">
                                0-0
                              </td>
                              <td class="bet_obt_pdw">
                                1-1
                              </td>
                              <td class="bet_obt_pdw">
                                2-2
                              </td>
                              <td class="bet_obt_pdw">
                                3-3
                              </td>
                              <td class="bet_obt_pdw">
                                4-4
                              </td>
                              <td class="bet_obt_pdw">
                                其他
                              </td>
                            </tr>
                            <tr class="bet_game_tr_other_obt">
                              <td class="bet_team" *tr_event*="">
                                主
                              </td>
                              <td class="bet_text">
                                <span class="bet_obt_color">
                                  -
                                </span>
                              </td>
                              <td class="bet_text">
                                <span class="bet_obt_color">
                                  -
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH2C12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH2C1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH2C12787958');"
                                  title="2-1">
                                    13.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span class="bet_obt_color">
                                  -
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH3C12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH3C1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH3C12787958');"
                                  title="3-1">
                                    48.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH3C22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH3C2&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH3C22787958');"
                                  title="3-2">
                                    61.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span class="bet_obt_color">
                                  -
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH4C12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH4C1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH4C12787958');"
                                  title="4-1">
                                    201.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH4C22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH4C2&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH4C22787958');"
                                  title="4-2">
                                    201.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH4C32787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH4C3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH4C32787958');"
                                  title="4-3">
                                    201.00
                                  </a>
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span class="bet_obt_color">
                                  -
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span id="RPDRH1C12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH1C1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH1C12787958');"
                                  title="1-1">
                                    5.00
                                  </a>
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span id="RPDRH2C22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH2C2&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH2C22787958');"
                                  title="2-2">
                                    16.00
                                  </a>
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span id="RPDRH3C32787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH3C3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH3C32787958');"
                                  title="3-3">
                                    141.00
                                  </a>
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span id="RPDRH4C42787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH4C4&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH4C42787958');"
                                  title="4-4">
                                    201.00
                                  </a>
                                </span>
                              </td>
                              <td rowspan="2" class="bet_text">
                                <span id="RPDROVH2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=ROVH&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDROVH2787958');"
                                  title="其他比分">
                                    71.00
                                  </a>
                                </span>
                              </td>
                            </tr>
                            <tr class="bet_game_tr_other_obt">
                              <td class="bet_team" *tr_event*="">
                                客
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH0C12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH0C1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH0C12787958');"
                                  title="0-1">
                                    4.30
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH0C22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH0C2&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH0C22787958');"
                                  title="0-2">
                                    5.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH1C22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH1C2&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH1C22787958');"
                                  title="1-2">
                                    6.40
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH0C32787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH0C3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH0C32787958');"
                                  title="0-3">
                                    13.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH1C32787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH1C3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH1C32787958');"
                                  title="1-3">
                                    16.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH2C32787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH2C3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH2C32787958');"
                                  title="2-3">
                                    41.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH0C42787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH0C4&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH0C42787958');"
                                  title="0-4">
                                    47.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH1C42787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH1C4&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH1C42787958');"
                                  title="1-4">
                                    51.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH2C42787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH2C4&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH2C42787958');"
                                  title="2-4">
                                    131.00
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text">
                                <span id="RPDRH3C42787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RPD','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RH3C4&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RPDRH3C42787958');"
                                  title="3-4">
                                    201.00
                                  </a>
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table_obt_h">
                          <tbody>
                            <tr class="bet_game_tr_top_obt">
                              <td rowspan="3" class="bet_game_time">
                              </td>
                              <td class="bet_team bet_more_text bet_more_w" *tr_event*="">
                                第二个进球
                              </td>
                              <td class="bet_text bet_more_lineh">
                                <span class="bet_more_f">
                                  主
                                </span>
                                <br>
                                <span id="BRGH2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','BRG','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=BRGH&amp;wtype=BRG&amp;ptype=&amp;imp=N','BRGH2787958');"
                                  title="主">
                                    2.37
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lineh">
                                <span class="bet_more_f">
                                  客
                                </span>
                                <br>
                                <span id="BRGC2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','BRG','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=BRGC&amp;wtype=BRG&amp;ptype=&amp;imp=N','BRGC2787958');"
                                  title="客">
                                    2.35
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lineh">
                                <span class="bet_more_f">
                                  无
                                </span>
                                <br>
                                <span id="BRGN2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','BRG','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=BRGN&amp;wtype=BRG&amp;ptype=&amp;imp=N','BRGN2787958');"
                                  title="无">
                                    4.30
                                  </a>
                                </span>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td class="bet_more_title_text">
                                总进球数
                              </td>
                              <td class="bet_obt_point">
                                0 - 1
                              </td>
                              <td class="bet_text bet_obt_right">
                                <span id="RTHT02787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RT','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=R0~1&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RTHT02787958');"
                                  title="0- 1">
                                    4.30
                                  </a>
                                </span>
                              </td>
                              <td class="bet_obt_point">
                                2 - 3
                              </td>
                              <td class="bet_text bet_obt_right">
                                <span id="RTHT12787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RT','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=R2~3&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RTHT12787958');"
                                  title="2- 3">
                                    1.49
                                  </a>
                                </span>
                              </td>
                              <td class="bet_obt_point">
                                4 - 6
                              </td>
                              <td class="bet_text bet_obt_right">
                                <span id="RTHT22787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RT','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=R4~6&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RTHT22787958');"
                                  title="4- 6">
                                    4.25
                                  </a>
                                </span>
                              </td>
                              <td class="bet_obt_point">
                                7+
                              </td>
                              <td class="bet_text bet_obt_right">
                                <span id="RTHTOV2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RT','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=ROVER&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RTHTOV2787958');"
                                  title="7或以上">
                                    41.00
                                  </a>
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table_obt_h">
                          <tbody>
                            <tr class="bet_game_tr_top_obt">
                              <td rowspan="3" class="bet_game_time">
                              </td>
                              <td class="bet_team bet_more_text bet_more_w" *tr_event*="">
                                双方球队进球
                              </td>
                              <td class="bet_text bet_more_con_w">
                                <span class="bet_more_f">
                                  是
                                </span>
                                &nbsp;&nbsp;
                                <span id="RTSY2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RTS','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RTSY&amp;langx=zh-cn&amp;wtype=RTS&amp;ptype=&amp;imp=N','RTSY2787958');"
                                  title="是">
                                    0.76
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text bet_more_con_w">
                                <span class="bet_more_f">
                                  不是
                                </span>
                                &nbsp;&nbsp;
                                <span id="RTSN2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RTS','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RTSN&amp;langx=zh-cn&amp;wtype=RTS&amp;ptype=&amp;imp=N','RTSN2787958');"
                                  title="不是">
                                    1.04
                                  </a>
                                </span>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td class="bet_more_title_text">
                                零失球获胜
                              </td>
                              <td class="bet_text bet_more_lineh_right">
                                <span class="bet_lineh_right">
                                  <span class="bet_more_f">
                                    主
                                  </span>
                                  <br>
                                  <span class="bet_obt_color">
                                    -
                                  </span>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lineh_right">
                                <span class="bet_lineh_right">
                                  <span class="bet_more_f">
                                    客
                                  </span>
                                  <br>
                                  <span id="RWNC2787958" class="bet_bg_color">
                                    <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RWN','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RWNC&amp;langx=zh-cn&amp;wtype=RWN&amp;ptype=&amp;imp=N','RWNC2787958');"
                                    title="客">
                                      1.99
                                    </a>
                                  </span>
                                </span>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td class="bet_more_title_text2">
                                零失球
                              </td>
                              <td class="bet_text bet_more_lineh_right">
                                <span class="bet_lineh_right">
                                  <span class="bet_more_f">
                                    主
                                  </span>
                                  <br>
                                  <span class="bet_obt_color">
                                    -
                                  </span>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lineh_right">
                                <span class="bet_lineh_right">
                                  <span class="bet_more_f">
                                    客
                                  </span>
                                  <br>
                                  <span id="RCSC2787958" class="bet_bg_color">
                                    <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RCS','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;rtype=RCSC&amp;langx=zh-cn&amp;wtype=RCS&amp;ptype=&amp;imp=N','RCSC2787958');"
                                    title="客">
                                      1.99
                                    </a>
                                  </span>
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table_obt_h">
                          <tbody>
                            <tr class="bet_game_tr_top_obt">
                              <td rowspan="3" class="bet_game_time">
                              </td>
                              <td class="bet_team bet_more_text bet_more_w" *tr_event*="">
                                球队进球数 大/小
                                <span class="bet_game_more_i">
                                  <div class="bet_more_i_bg">
                                    <span class="bet_more_iarrow">
                                    </span>
                                    <span class="bet_more_iarrow_text">
                                      预测各球队的总入球数。
                                    </span>
                                  </div>
                                </span>
                              </td>
                              <td class="bet_more_text_w">
                                主
                              </td>
                              <td class="bet_text bet_more_lon_w">
                                <span class="bet_text_oue">
                                  大
                                </span>
                                <span class="bet_text_thin">
                                  0.5
                                </span>
                                <span id="ROUHO2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROUH','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=O&amp;langx=zh-cn&amp;gnum=60088&amp;rtype=ROUHO&amp;wtype=ROUH&amp;ptype=&amp;imp=N','ROUHO2787958');"
                                  title="大">
                                    0.80
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lon_w">
                                <span class="bet_text_oue">
                                  小
                                </span>
                                <span class="bet_text_thin">
                                  0.5
                                </span>
                                <span id="ROUHU2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROUH','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=U&amp;langx=zh-cn&amp;gnum=60088&amp;rtype=ROUHU&amp;wtype=ROUH&amp;ptype=&amp;imp=N','ROUHU2787958');"
                                  title="小">
                                    1.09
                                  </a>
                                </span>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td class="bet_more_text_w">
                                客
                              </td>
                              <td class="bet_text bet_more_lon_w">
                                <span class="bet_text_oue">
                                  大
                                </span>
                                <span class="bet_text_thin">
                                  1.5
                                </span>
                                <span id="ROUCO2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROUC','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=O&amp;langx=zh-cn&amp;gnum=60087&amp;rtype=ROUCO&amp;wtype=ROUC&amp;ptype=&amp;imp=N','ROUCO2787958');"
                                  title="大">
                                    0.79
                                  </a>
                                </span>
                              </td>
                              <td class="bet_text bet_more_lon_w">
                                <span class="bet_text_oue">
                                  小
                                </span>
                                <span class="bet_text_thin">
                                  1.5
                                </span>
                                <span id="ROUCU2787958" class="bet_bg_color">
                                  <a href="javascript://" onclick="parent.mem_order.betOrder('FT','ROUC','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;type=U&amp;langx=zh-cn&amp;gnum=60087&amp;rtype=ROUCU&amp;wtype=ROUC&amp;ptype=&amp;imp=N','ROUCU2787958');"
                                  title="小">
                                    1.11
                                  </a>
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table *dis_mou*="" cellpadding="0" cellspacing="0" border="0" class="bet_game_table_obt_h">
                          <tbody>
                            <tr class="bet_game_tr_top_obt">
                              <td rowspan="3" class="bet_game_time">
                              </td>
                              <td class="bet_team bet_more_text bet_more_w" *tr_event*="">
                                独赢 &amp; 进球 大/小
                                <span class="bet_game_more_i">
                                  <div class="bet_more_i_bg">
                                    <span class="bet_more_iarrow">
                                    </span>
                                    <span class="bet_more_iarrow_text">
                                      预测各球队的赛果和总入球数。
                                    </span>
                                  </div>
                                </span>
                              </td>
                              <td colspan="2" class="bet_text bet_more_lineh2">
                                <div class="bet_text_table_obt">
                                  <span class="bet_text_tdl">
                                    <span class="bet_more_f">
                                      主&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      大
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                    <br>
                                    <span class="bet_more_f">
                                      主&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      小
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                  </span>
                                  <span class="bet_text_tdr">
                                    <span id="RMUAHO2787958" class="bet_bg_color">
                                      <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RMUA','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=RMUAHO&amp;wtype=RMUA&amp;ptype=&amp;imp=N','RMUAHO2787958');"
                                      title="主&amp; 大">
                                        8.20
                                      </a>
                                    </span>
                                    <br>
                                    <span class="bet_obt_color">
                                      -
                                    </span>
                                  </span>
                                </div>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td colspan="2" class="bet_text bet_more_lineh2">
                                <div class="bet_text_table_obt">
                                  <span class="bet_text_tdl">
                                    <span class="bet_more_f">
                                      和局&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      大
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                    <br>
                                    <span class="bet_more_f">
                                      和局&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      小
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                  </span>
                                  <span class="bet_text_tdr">
                                    <span id="RMUANO2787958" class="bet_bg_color">
                                      <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RMUA','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=RMUANO&amp;wtype=RMUA&amp;ptype=&amp;imp=N','RMUANO2787958');"
                                      title="和局&amp; 大">
                                        4.10
                                      </a>
                                    </span>
                                    <br>
                                    <span class="bet_obt_color">
                                      -
                                    </span>
                                  </span>
                                </div>
                              </td>
                              <td class="bet_more_brown_line">
                              </td>
                              <td colspan="2" class="bet_text bet_more_lineh2">
                                <div class="bet_text_table_obt">
                                  <span class="bet_text_tdl">
                                    <span class="bet_more_f">
                                      客&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      大
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                    <br>
                                    <span class="bet_more_f">
                                      客&nbsp;&amp;
                                    </span>
                                    <span class="bet_text_oue">
                                      小
                                    </span>
                                    <span class="bet_text_thin">
                                      1.5
                                    </span>
                                  </span>
                                  <span class="bet_text_tdr">
                                    <span id="RMUACO2787958" class="bet_bg_color">
                                      <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RMUA','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=RMUACO&amp;wtype=RMUA&amp;ptype=&amp;imp=N','RMUACO2787958');"
                                      title="客&amp; 大">
                                        1.97
                                      </a>
                                    </span>
                                    <br>
                                    <span id="RMUACU2787958" class="bet_bg_color">
                                      <a href="javascript://" onclick="parent.mem_order.betOrder('FT','RMUA','gid=2787958&amp;uid=sorw6d4m17041417l1956918&amp;odd_f_type=H&amp;langx=zh-cn&amp;rtype=RMUACU&amp;wtype=RMUA&amp;ptype=&amp;imp=N','RMUACU2787958');"
                                      title="客&amp; 小">
                                        4.30
                                      </a>
                                    </span>
                                  </span>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="bet_game_more_btn" onclick="show_allbets('2787958',event,'',2787958);">
                          览看所有玩法
                        </div>
                      </div>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  <!--所有玩法-->
<iframe id="more_iframe_w" name="more_iframe_w" style="display:none;width:100%;height:inherit;position:relative;z-index:999;margin:0 auto;" src="<?php echo U('Content/more_iframe_w');?>"></iframe>
</body>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
   //排序
   $("#sel_sort").click(function(){
   		$("#show_sort").toggle();
   });
   //香港盘
   $("#sel_odd").click(function(){
   		$("#show_odd").toggle();
   });
   $("#myoddType li").click(function(){
   	var pan = $(this).text();
   	$("#chose_odd").text(pan);
   });
 function mouseEnter_pointer(){
 	
 };
 function mouseOut_pointer(){
 	
 };
 //选择联赛
function chg_league(){
	var url = "/index.php/Home/Content/more_iframe_w";
	$("#more_iframe_w").show();
};
  	
function back(){
	alert(11111);
	parent.document.getElementById('more_iframe_w').style.display="none";
};  	
//window.parent.show_allbets();
function show_allbets(){
$('.more_iframe_w').show();
  	body.window.back(); 
 };
 
 
 //////////////////////////////////////////////
 
</script>
</body>
</html>