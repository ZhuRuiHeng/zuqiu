<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<title>内容足球</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/order.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/bet_maincotrol.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/live.css">
	<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
	<script type="text/javascript" src="/Public/js/commin.js"></script>
 
</head>
<body   class="bet_r_FT">
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
            <div class="bet_right_more" style="display: none;">
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
				<tr id="title_tr" name="fixhead_copy" class="bet_game_title">
					<td colspan="2" id="mylovegtype" style="display:none;" class="bet_game_name">
						足球
						<br>
						<tt class="bet_game">
							我的收藏:今日
						</tt>
					</td>
					<td colspan="2" id="mygtype" class="bet_game_name">
						足球
						<br>
						<tt class="bet_game">
							今日
						</tt>
					</td>
					<td class="bet_title_1X2">
						<span>
							全场
							<br>
							<tt>
								独赢
							</tt>
						</span>
					</td>
					<td class="bet_title_hdp">
						<span>
							全场
							<br>
							<tt>
								让球
							</tt>
						</span>
					</td>
					<td class="bet_title_ou">
						<span>
							全场
							<br>
							<tt>
								大小
							</tt>
						</span>
					</td>
					<td class="bet_title_oe">
						<span>
							全场
							<br>
							<tt>
								单双
							</tt>
						</span>
					</td>
					<td class="bet_title_1X2">
						<span>
							半场
							<br>
							<tt>
								独赢
							</tt>
						</span>
					</td>
					<td class="bet_title_dp">
						<span>
							半场
							<br>
							<tt>
								让球
							</tt>
						</span>
					</td>
					<td class="bet_title_hou">
						<span>
							半场
							<br>
							<tt>
								大小
							</tt>
						</span>
					</td>
				</tr>
				 
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010010" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'挪威超级联赛')">
						挪威超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010010" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							13:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							萨普斯堡08
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2795186" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2795186');"
							title="萨普斯堡08">
								1.82
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795186');"
									title="萨普斯堡08">
										1.09
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795186');"
									title="大">
										0.83
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2795186');"
									title="单">
										1.98
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010010_text_1" class="bet_text_left_bg">
						<span id="HMH2795187" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2795187');"
							title="萨普斯堡08">
								2.38
							</span>
						</span>
					</td>
					<td id="TR_07-1010010_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795187" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795187');"
									title="萨普斯堡08">
										0.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010010_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795187" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795187');"
									title="大">
										0.79
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010010" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						利尼史特朗
					</td>
					<td class="bet_text">
						<span id="MC2795186" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2795186');"
							title="利尼史特朗">
								4.25
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795186');"
									title="利尼史特朗">
										0.83
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795186');"
									title="小">
										1.07
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2795186" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2795186');"
									title="双">
										1.91
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010010_text_1" class="bet_text_left_bg">
						<span id="HMC2795187" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2795187');"
							title="利尼史特朗">
								4.20
							</span>
						</span>
					</td>
					<td id="TR1_07-1010010_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795187" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10009&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795187');"
									title="利尼史特朗">
										0.91
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010010_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795187" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10010&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795187');"
									title="小">
										1.12
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010010" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010010_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010010_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010010" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10010','07-10<br>01:00p<br><font color=red>滚球</font>','挪威超级联赛','萨普斯堡08','利尼史特朗','1716580');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2795186" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795186&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2795186');"
							title="和">
								3.75
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2795186',8,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								68
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010010_text_1" class="bet_text_left_bg">
						<span id="HMN2795187" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795187&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10009&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2795187');"
							title="和">
								2.25
							</span>
						</span>
					</td>
					<td id="TR2_07-1010010_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010010_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010012" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'挪威超级联赛')">
						挪威超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010012" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							萨普斯堡08
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795188" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795188&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10012&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795188');"
									title="萨普斯堡08">
										0.83
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795188" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795188&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10011&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795188');"
									title="大">
										1.04
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010012_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010012_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795189" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795189&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10012&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795189');"
									title="萨普斯堡08">
										1.40
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010012_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795189" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795189&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10011&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795189');"
									title="大">
										1.26
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010012" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						利尼史特朗
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795188" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795188&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10011&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795188');"
									title="利尼史特朗">
										1.09
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795188" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795188&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10012&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795188');"
									title="小">
										0.86
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010012_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010012_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795189" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795189&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10011&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795189');"
									title="利尼史特朗">
										0.61
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010012_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795189" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795189&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10012&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795189');"
									title="小">
										0.69
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010012_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010012_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010012_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010012_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010012_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010014" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'挪威超级联赛')">
						挪威超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010014" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							萨普斯堡08
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795190" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10014&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795190');"
									title="萨普斯堡08">
										0.58
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795190" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10013&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795190');"
									title="大">
										1.36
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010014_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010014_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010014_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010014" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						利尼史特朗
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795190" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10013&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795190');"
									title="利尼史特朗">
										1.51
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795190" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10014&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795190');"
									title="小">
										0.63
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010014_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010014_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010014_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010014_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010014_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010014_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010014_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010014_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010018" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010018" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							13:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							IFK哥德堡
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2795332" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2795332');"
							title="IFK哥德堡">
								1.46
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795332');"
									title="IFK哥德堡">
										1.05
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795332');"
									title="大">
										0.85
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2795332');"
									title="单">
										1.97
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010018_text_1" class="bet_text_left_bg">
						<span id="HMH2795333" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2795333');"
							title="IFK哥德堡">
								1.96
							</span>
						</span>
					</td>
					<td id="TR_07-1010018_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795333" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795333');"
									title="IFK哥德堡">
										0.97
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010018_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795333" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795333');"
									title="大">
										1.09
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010018" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						咸史泰斯
					</td>
					<td class="bet_text">
						<span id="MC2795332" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2795332');"
							title="咸史泰斯">
								6.90
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795332');"
									title="咸史泰斯">
										0.87
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795332');"
									title="小">
										1.05
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2795332" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2795332');"
									title="双">
										1.92
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010018_text_1" class="bet_text_left_bg">
						<span id="HMC2795333" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2795333');"
							title="咸史泰斯">
								6.30
							</span>
						</span>
					</td>
					<td id="TR1_07-1010018_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795333" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10017&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795333');"
									title="咸史泰斯">
										0.93
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010018_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795333" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10018&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795333');"
									title="小">
										0.81
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010018" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010018_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010018_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010018" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10018','07-10<br>01:00p<br><font color=red>滚球</font>','瑞典超级联赛','IFK哥德堡','咸史泰斯','1716684');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2795332" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795332&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2795332');"
							title="和">
								4.50
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2795332',12,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								68
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010018_text_1" class="bet_text_left_bg">
						<span id="HMN2795333" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795333&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10017&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2795333');"
							title="和">
								2.30
							</span>
						</span>
					</td>
					<td id="TR2_07-1010018_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010018_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010020" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010020" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							IFK哥德堡
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795334" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795334&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10020&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795334');"
									title="IFK哥德堡">
										0.78
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795334" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795334&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10019&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795334');"
									title="大">
										1.09
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010020_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010020_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795335" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795335&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10020&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795335');"
									title="IFK哥德堡">
										1.40
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010020_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795335" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795335&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10019&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795335');"
									title="大">
										0.65
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010020" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						咸史泰斯
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795334" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795334&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10019&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795334');"
									title="咸史泰斯">
										1.16
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795334" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795334&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10020&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795334');"
									title="小">
										0.81
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010020_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010020_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795335" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795335&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10019&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795335');"
									title="咸史泰斯">
										0.61
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010020_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795335" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795335&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10020&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795335');"
									title="小">
										1.33
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010020_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010020_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010020_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010020_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010020_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010022" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010022" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							IFK哥德堡
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795336" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795336&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10022&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795336');"
									title="IFK哥德堡">
										1.29
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795336" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795336&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10021&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795336');"
									title="大">
										0.68
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010022_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010022_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010022_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010022" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						咸史泰斯
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795336" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795336&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10021&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795336');"
									title="咸史泰斯">
										0.69
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795336" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795336&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10022&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795336');"
									title="小">
										1.28
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010022_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010022_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010022_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010022_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010022_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010022_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010022_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010022_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010026" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010026" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							13:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							佐加顿斯
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2795340" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2795340');"
							title="佐加顿斯">
								1.35
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795340');"
									title="佐加顿斯">
										1.06
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795340');"
									title="大">
										1.02
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2795340');"
									title="单">
										1.97
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010026_text_1" class="bet_text_left_bg">
						<span id="HMH2795341" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2795341');"
							title="佐加顿斯">
								1.81
							</span>
						</span>
					</td>
					<td id="TR_07-1010026_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795341" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795341');"
									title="佐加顿斯">
										0.82
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010026_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795341" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795341');"
									title="大">
										1.01
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010026" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						松兹瓦尔
					</td>
					<td class="bet_text">
						<span id="MC2795340" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2795340');"
							title="松兹瓦尔">
								8.80
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795340');"
									title="松兹瓦尔">
										0.86
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795340');"
									title="小">
										0.88
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2795340" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2795340');"
									title="双">
										1.92
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010026_text_1" class="bet_text_left_bg">
						<span id="HMC2795341" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2795341');"
							title="松兹瓦尔">
								7.00
							</span>
						</span>
					</td>
					<td id="TR1_07-1010026_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795341" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10025&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795341');"
									title="松兹瓦尔">
										1.08
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010026_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795341" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10026&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795341');"
									title="小">
										0.89
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010026" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010026_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010026_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010026" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10026','07-10<br>01:00p<br><font color=red>滚球</font>','瑞典超级联赛','佐加顿斯','松兹瓦尔','1716688');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2795340" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2795340');"
							title="和">
								5.00
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2795340',15,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								68
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010026_text_1" class="bet_text_left_bg">
						<span id="HMN2795341" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795341&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10025&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2795341');"
							title="和">
								2.45
							</span>
						</span>
					</td>
					<td id="TR2_07-1010026_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010026_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010028" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010028" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							佐加顿斯
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795342" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795342&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10028&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795342');"
									title="佐加顿斯">
										0.82
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795342" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795342&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10027&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795342');"
									title="大">
										0.79
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010028_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010028_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795343" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795343&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10028&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2795343');"
									title="佐加顿斯">
										1.14
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010028_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795343" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795343&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10027&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2795343');"
									title="大">
										1.40
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010028" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						松兹瓦尔
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795342" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795342&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10027&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795342');"
									title="松兹瓦尔">
										1.11
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795342" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795342&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10028&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795342');"
									title="小">
										1.12
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010028_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010028_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795343" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795343&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10027&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2795343');"
									title="松兹瓦尔">
										0.77
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010028_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795343" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795343&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10028&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2795343');"
									title="小">
										0.61
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010028_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010028_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010028_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010028_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010028_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010030" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛')">
						瑞典超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010030" style="display: ;"  class="bet_game_tr_top_color">
					<td rowspan="2" class="bet_game_time">
						<div>
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							佐加顿斯
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1.5 / 2
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795344" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795344&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10030&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2795344');"
									title="佐加顿斯">
										1.35
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin">
									3 / 3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795344" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795344&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10029&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2795344');"
									title="大">
										1.31
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010030_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010030_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010030_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010030" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						松兹瓦尔
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2795344" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795344&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10029&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2795344');"
									title="松兹瓦尔">
										0.66
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin">
									3 / 3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795344" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795344&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10030&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2795344');"
									title="小">
										0.66
									</span>
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010030_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010030_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010030_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
								</tt>
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010030_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010030_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="" style="display: none;" class="bet_game_star_none">
								</span>
								<span id="">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:none" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								0
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010030_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010030_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010030_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				 
			</tbody>
          </table>
      </div>
  </div>
  <!--所有玩法-->

</body>
<script type="text/javascript">
   //排序
   $("#sel_sort").click(function(){
   		$("#show_sort").toggle();
   });
   function chgSortValue(name){
   //console.log(name);
	   if(name == "T"){
	   		$("#sel_sort").removeClass("bet_sort_btn").addClass("bet_sort_time_btn");
	   }else{
	   		$("#sel_sort").removeClass("bet_sort_time_btn").addClass("bet_sort_btn");
	   }
   		
   };
   //折叠
	function showLeg(obj,neirong){
		var str_num = $(obj).parent().attr("id");
	 	var	num = str_num.slice(3, str_num.length);

		console.log(num);
		$("."+str_num).toggle();
		$(obj).parent().toggleClass('bet_game_league_down');
		$(obj).parent().siblings('#TR'+num).toggle();
		for(var i = 1; i < 3; i++){
			$(obj).parent().siblings('#TR'+i+num).toggle();
		}
    	
	};

   function hideDiv(title){
   };
   //香港盘
   $("#sel_odd").click(function(){
   		$("#show_odd").toggle();
   });
   $("#myoddType li").click(function(){
   	var pan = $(this).text();
   	$("#chose_odd").text(pan);
   });
 function mouseEnter_pointer(id){
 	
 };
 function mouseOut_pointer(id){
 	
 };
 //选择联赛
function chg_league(){
	window.parent.document.getElementById('legFrame').style.display="block";
};
 //所有玩法
 function show_allbets(sum,id,obj){
 	window.parent.document.getElementById('more_iframe_w').style.display="block";
 };
function back(){
	parent.document.getElementById('more_iframe_w').style.display="none";
	parent.document.getElementById('legFrame').style.display="none";
};  	

 //隐藏特殊
 function show_filters(){
 	$("#filter_div").toggle();
 };
 function closeClickEvent(){
 	$("#legFrame").hide();
 };

//function mem_order.betOrder(leibie,id,inform,sum){
//	alert(sum);
//};
function onmouseover(){
};
function onmouseout(){
};
function mouseOut_pointer(id){
	//console.log(id);
};
function mouseEnter_pointer(id){
	//console.log(id);
};
function iornameMouseOver(){
};

function betOrder(leibie,id,inform,sum){
	$(".ord_memu span").removeClass("ord_memuBTN_on").addClass("ord_memuBTN");
	$("#title_betslip").addClass("ord_memuBTN_on");
	parent.showMenu('betslip');
	
	
};
function btnClickEvent(shijain){
	
};
//主要盘口
function chgMarket(){
	console.log("主要盘口");
};
function set_filters(){
	var checkbox = $(".bet_left_more input[type='checkbox']").is(':checked'); 
	alert(checkbox);
	if(checkbox == true){
	   // alert($(this).val())
	}else{	
		//alert($(this).val())
	};
	$("#filter_div").hide();
}

 
</script>
</body>
</html>