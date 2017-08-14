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
				<tr style="display: ;" id="LEG_07-1010136" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'澳洲维多利亚国家超级联赛U20')">
						澳洲维多利亚国家超级联赛U20
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010136" style="display: ;"  class="bet_game_tr_top bet_game_bg">
					<td rowspan="3" class="bet_game_time">
						<div>
							04:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							布琳狮子U20
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809274" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10136&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809274');"
							title="布琳狮子U20">
								1.53
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
								<span id="RH2809274" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
									<span onclick="betOrder('FT','R','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10136&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809274');"
									title="布琳狮子U20">
										0.71
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
								<span id="OUC2809274" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10135&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809274');"
									title="大">
										0.71
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
								<span id="EOO2809274" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809274');"
									title="单">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010136_text_1" class="bet_text_left_bg bet_game_rbg_l">
						&nbsp;
					</td>
					<td id="TR_07-1010136_text_2" class="bet_text_bg bet_game_rbg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010136_text_3" class="bet_text_right_bg bet_game_rbg">
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
				<tr id="TR1_07-1010136" style="display: ;"  class="bet_game_tr_other bet_game_bg">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						班特列U20
					</td>
					<td class="bet_text">
						<span id="MC2809274" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10135&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809274');"
							title="班特列U20">
								4.20
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
								<span id="RC2809274" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
									<span onclick="betOrder('FT','R','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10135&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809274');"
									title="班特列U20">
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
									小
								</tt>
								<tt class="bet_text_thin">
									3 / 3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2809274" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10136&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809274');"
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
								<span id="EOE2809274" class="bet_bg_color_bet">
									<span onclick="betOrder('FT','EO','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809274');"
									title="双">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010136_text_1" class="bet_text_left_bg bet_game_rbg_l">
						&nbsp;
					</td>
					<td id="TR1_07-1010136_text_2" class="bet_text_bg bet_game_rbg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010136_text_3" class="bet_text_right_bg bet_game_rbg">
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
				<tr id="TR2_07-1010136" style="display: ;"  class="bet_game_tr_other bet_game_bg">
					<td class="bet_team" id="TR_07-1010136_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010136_none" class="bet_game_star_none" style="display: none;">
								</span>
								<span id="love07-1010136" class="bet_game_star_out" title="赛事收藏" onclick="addShowLoveI('10136','07-10<br>04:30a<br><font color=red>滚球</font>','澳洲维多利亚国家超级联赛U20','布琳狮子U20','班特列U20','1729873');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809274" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809274&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10135&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809274');"
							title="和">
								4.40
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809274',0,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010136_text_1" class="bet_text_left_bg bet_game_rbg_l">
						&nbsp;
					</td>
					<td id="TR2_07-1010136_text_2" class="bet_td_bg bet_game_rbg">
					</td>
					<td id="TR2_07-1010136_text_3" class="bet_td_bg bet_game_rbg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010268" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'马来西亚甲组联赛')">
						马来西亚甲组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010268" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							04:45
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							玻璃市
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809340" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
							<span onclick="betOrder('FT','M','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10268&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809340');"
							title="玻璃市">
								2.65
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
								<span id="RH2809340" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
									<span onclick="betOrder('FT','R','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10268&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809340');"
									title="玻璃市">
										0.76
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
									3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2809340" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10267&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809340');"
									title="大">
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
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2809340" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809340');"
									title="单">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010268_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010268_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010268_text_3" class="bet_text_right_bg">
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
				<tr id="TR1_07-1010268" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						关丹
					</td>
					<td class="bet_text">
						<span id="MC2809340" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
							<span onclick="betOrder('FT','M','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10267&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809340');"
							title="关丹">
								1.95
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2809340" onmouseover="iornameMouseOver(this.id);" class="bet_text_color">
									<span onclick="betOrder('FT','R','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10267&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809340');"
									title="关丹">
										0.96
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
									3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2809340" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10268&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809340');"
									title="小">
										0.91
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
								<span id="EOE2809340" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809340');"
									title="双">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010268_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010268_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010268_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010268" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010268_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010268_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010268" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10268','07-10<br>04:45a<br><font color=red>滚球</font>','马来西亚甲组联赛','玻璃市','关丹','1730284');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809340" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809340&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10267&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809340');"
							title="和">
								3.85
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809340',1,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010268_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010268_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010268_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010118" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'澳洲布里斯班坎尔杯')">
						澳洲布里斯班坎尔杯
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010118" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							05:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							布里斯班凤凰
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809270" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10118&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809270');"
							title="布里斯班凤凰">
								1.61
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
								<span id="RH2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10118&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809270');"
									title="布里斯班凤凰">
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
									大
								</tt>
								<tt class="bet_text_thin">
									3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10117&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809270');"
									title="大">
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
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809270');"
									title="单">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010118_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010118_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010118_text_3" class="bet_text_right_bg">
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
				<tr id="TR1_07-1010118" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						图旺
					</td>
					<td class="bet_text">
						<span id="MC2809270" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10117&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809270');"
							title="图旺">
								3.70
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
								<span id="RC2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10117&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809270');"
									title="图旺">
										0.97
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
									3.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10118&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809270');"
									title="小">
										0.97
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
								<span id="EOE2809270" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809270');"
									title="双">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010118_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010118_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010118_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010118" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010118_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010118_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010118" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10118','07-10<br>05:30a<br><font color=red>滚球</font>','澳洲布里斯班坎尔杯','布里斯班凤凰','图旺','1729864');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809270" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809270&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10117&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809270');"
							title="和">
								4.30
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809270',2,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010118_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010118_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010118_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010064" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'南韩K挑战联赛')">
						南韩K挑战联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010064" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							06:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							庆南
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2804626" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2804626');"
							title="庆南">
								1.41
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804626');"
									title="庆南">
										0.71
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
								<span id="OUC2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804626');"
									title="大">
										0.71
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
								<span id="EOO2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2804626');"
									title="单">
										1.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010064_text_1" class="bet_text_left_bg">
						<span id="HMH2804627" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2804627');"
							title="庆南">
								1.92
							</span>
						</span>
					</td>
					<td id="TR_07-1010064_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804627" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804627');"
									title="庆南">
										0.93
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010064_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804627" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804627');"
									title="大">
										0.76
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010064" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						安养
					</td>
					<td class="bet_text">
						<span id="MC2804626" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2804626');"
							title="安养">
								6.20
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
								<span id="RC2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804626');"
									title="安养">
										1.14
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
								<span id="OUH2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804626');"
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
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2804626" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2804626');"
									title="双">
										1.90
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010064_text_1" class="bet_text_left_bg">
						<span id="HMC2804627" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2804627');"
							title="安养">
								5.70
							</span>
						</span>
					</td>
					<td id="TR1_07-1010064_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804627" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10063&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804627');"
									title="安养">
										0.91
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010064_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804627" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10064&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804627');"
									title="小">
										1.06
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010064" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010064_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010064_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010064" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10064','07-10<br>06:00a<br><font color=red>滚球</font>','南韩K挑战联赛','庆南','安养','1726275');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2804626" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804626&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2804626');"
							title="和">
								4.00
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2804626',3,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								9
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010064_text_1" class="bet_text_left_bg">
						<span id="HMN2804627" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804627&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10063&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2804627');"
							title="和">
								2.35
							</span>
						</span>
					</td>
					<td id="TR2_07-1010064_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010064_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010082" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'澳洲维多利亚国家超级联赛')">
						澳洲维多利亚国家超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010082" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							06:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							布琳狮子
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2804734" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2804734');"
							title="布琳狮子">
								3.20
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
								<span id="RH2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804734');"
									title="布琳狮子">
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
									大
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804734');"
									title="大">
										0.91
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
								<span id="EOO2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2804734');"
									title="单">
										1.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010082_text_1" class="bet_text_left_bg">
						<span id="HMH2804735" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2804735');"
							title="布琳狮子">
								3.75
							</span>
						</span>
					</td>
					<td id="TR_07-1010082_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804735" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804735');"
									title="布琳狮子">
										0.76
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010082_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804735" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804735');"
									title="大">
										0.99
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010082" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						班特列
					</td>
					<td class="bet_text">
						<span id="MC2804734" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2804734');"
							title="班特列">
								2.04
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804734');"
									title="班特列">
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
									小
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804734');"
									title="小">
										0.97
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
								<span id="EOE2804734" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2804734');"
									title="双">
										1.90
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010082_text_1" class="bet_text_left_bg">
						<span id="HMC2804735" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2804735');"
							title="班特列">
								2.40
							</span>
						</span>
					</td>
					<td id="TR1_07-1010082_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804735" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10081&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804735');"
									title="班特列">
										1.16
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010082_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804735" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10082&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804735');"
									title="小">
										0.89
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010082" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010082_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010082_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010082" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10082','07-10<br>06:30a<br><font color=red>滚球</font>','澳洲维多利亚国家超级联赛','布琳狮子','班特列','1726368');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2804734" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804734&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2804734');"
							title="和">
								3.60
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2804734',4,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								66
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010082_text_1" class="bet_text_left_bg">
						<span id="HMN2804735" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804735&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10081&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2804735');"
							title="和">
								2.40
							</span>
						</span>
					</td>
					<td id="TR2_07-1010082_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010082_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010084" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'澳洲维多利亚国家超级联赛')">
						澳洲维多利亚国家超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010084" style="display: ;"  class="bet_game_tr_top_color">
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
							布琳狮子
						</div>
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
								<span id="RH2804736" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804736&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10084&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804736');"
									title="布琳狮子">
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
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2804736" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804736&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10083&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804736');"
									title="大">
										0.71
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
					<td id="TR_07-1010084_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010084_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804737" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804737&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10084&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804737');"
									title="布琳狮子">
										1.44
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010084_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804737" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804737&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10083&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804737');"
									title="大">
										0.56
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010084" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						班特列
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2804736" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804736&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10083&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804736');"
									title="班特列">
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
									小
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2804736" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804736&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10084&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804736');"
									title="小">
										1.20
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
					<td id="TR1_07-1010084_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010084_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804737" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804737&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10083&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804737');"
									title="班特列">
										0.59
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010084_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804737" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804737&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10084&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804737');"
									title="小">
										1.47
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010084_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010084_1" onmouseover="mouseEnter_pointer(this.id);"
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
					<td id="TR2_07-1010084_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010084_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010084_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010070" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'南韩K挑战联赛')">
						南韩K挑战联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010070" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							06:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							水原
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2804630" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2804630');"
							title="水原">
								2.74
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
								<span id="RH2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804630');"
									title="水原">
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
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804630');"
									title="大">
										0.73
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
								<span id="EOO2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2804630');"
									title="单">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010070_text_1" class="bet_text_left_bg">
						<span id="HMH2804631" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2804631');"
							title="水原">
								3.45
							</span>
						</span>
					</td>
					<td id="TR_07-1010070_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804631" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804631');"
									title="水原">
										1.19
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010070_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804631" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804631');"
									title="大">
										0.96
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010070" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						釜山偶像
					</td>
					<td class="bet_text">
						<span id="MC2804630" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2804630');"
							title="釜山偶像">
								2.19
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804630');"
									title="釜山偶像">
										1.01
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
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804630');"
									title="小">
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
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2804630" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2804630');"
									title="双">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010070_text_1" class="bet_text_left_bg">
						<span id="HMC2804631" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2804631');"
							title="釜山偶像">
								2.80
							</span>
						</span>
					</td>
					<td id="TR1_07-1010070_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804631" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10069&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804631');"
									title="釜山偶像">
										0.68
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010070_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804631" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10070&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804631');"
									title="小">
										0.86
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010070" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010070_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010070_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010070" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10070','07-10<br>06:30a<br><font color=red>滚球</font>','南韩K挑战联赛','水原','釜山偶像','1726278');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2804630" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804630&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2804630');"
							title="和">
								3.35
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2804630',6,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								9
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010070_text_1" class="bet_text_left_bg">
						<span id="HMN2804631" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804631&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10069&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2804631');"
							title="和">
								2.12
							</span>
						</span>
					</td>
					<td id="TR2_07-1010070_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010070_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010220" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'印尼甲组联赛')">
						印尼甲组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010220" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							07:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							PS TNI
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809314" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10220&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809314');"
							title="PSTNI">
								1.79
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
								<span id="RH2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10220&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809314');"
									title="PSTNI">
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
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10219&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809314');"
									title="大">
										0.92
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
								<span id="EOO2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809314');"
									title="单">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010220_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010220_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010220_text_3" class="bet_text_right_bg">
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
				<tr id="TR1_07-1010220" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						巴厘联
					</td>
					<td class="bet_text">
						<span id="MC2809314" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10219&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809314');"
							title="巴厘联">
								3.55
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
								<span id="RC2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10219&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809314');"
									title="巴厘联">
										0.76
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
								<span id="OUH2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10220&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809314');"
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
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2809314" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809314');"
									title="双">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010220_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010220_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010220_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010220" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010220_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010220_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010220" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10220','07-10<br>07:30a<br><font color=red>滚球</font>','印尼甲组联赛','PS TNI','巴厘联','1729915');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809314" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809314&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10219&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809314');"
							title="和">
								3.60
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809314',7,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010220_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010220_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010220_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
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
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010034" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'瑞典超级联赛-特别投注')">
						瑞典超级联赛-特别投注
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010034" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							13:00
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							主场 -星期一-2场赛事
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2795348" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','MH2795348');"
							title="主场-星期一-2场赛事">
								1.15
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;strong=H&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','RH2795348');"
									title="主场-星期一-2场赛事">
										0.96
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
									6
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','OUC2795348');"
									title="大">
										0.99
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
								<span id="EOO2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','EOO2795348');"
									title="单">
										1.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010034_text_1" class="bet_text_left_bg">
						<span id="HMH2795349" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HMH2795349');"
							title="主场-星期一-2场赛事">
								1.40
							</span>
						</span>
					</td>
					<td id="TR_07-1010034_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									1 / 1.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2795349" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;strong=H&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HRH2795349');"
									title="主场-星期一-2场赛事">
										1.05
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010034_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2795349" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HOUC2795349');"
									title="大">
										0.96
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010034" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						客场 -星期一-2场赛事
					</td>
					<td class="bet_text">
						<span id="MC2795348" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','MC2795348');"
							title="客场-星期一-2场赛事">
								9.10
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
								<span id="RC2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;strong=H&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','RC2795348');"
									title="客场-星期一-2场赛事">
										0.94
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
									6
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','OUH2795348');"
									title="小">
										0.89
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
								<span id="EOE2795348" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','EOE2795348');"
									title="双">
										1.94
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010034_text_1" class="bet_text_left_bg">
						<span id="HMC2795349" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HMC2795349');"
							title="客场-星期一-2场赛事">
								6.10
							</span>
						</span>
					</td>
					<td id="TR1_07-1010034_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2795349" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10033&amp;strong=H&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HRC2795349');"
									title="客场-星期一-2场赛事">
										0.83
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010034_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2795349" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10034&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HOUH2795349');"
									title="小">
										0.92
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010034" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010034_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010034_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010034" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10034','07-10<br>01:00p','瑞典超级联赛-特别投注','主场 -星期一-2场赛事','客场 -星期一-2场赛事','1716694');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2795348" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2795348&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','MN2795348');"
							title="和">
								8.50
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2795348',20,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								8
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010034_text_1" class="bet_text_left_bg">
						<span id="HMN2795349" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2795349&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10033&amp;langx=zh-cn&amp;ptype= -星期一-2场赛事&amp;imp=N','HMN2795349');"
							title="和">
								4.10
							</span>
						</span>
					</td>
					<td id="TR2_07-1010034_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010034_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010036" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'冰岛超级联赛')">
						冰岛超级联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010036" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							16:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							阿简尼斯
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2796190" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2796190');"
							title="阿简尼斯">
								3.60
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
								<span id="RH2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2796190');"
									title="阿简尼斯">
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
									大
								</tt>
								<tt class="bet_text_thin">
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2796190');"
									title="大">
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
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2796190');"
									title="单">
										1.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010036_text_1" class="bet_text_left_bg">
						<span id="HMH2796191" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2796191');"
							title="阿简尼斯">
								3.70
							</span>
						</span>
					</td>
					<td id="TR_07-1010036_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2796191" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2796191');"
									title="阿简尼斯">
										0.87
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010036_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2796191" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2796191');"
									title="大">
										0.99
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010036" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						维京格
					</td>
					<td class="bet_text">
						<span id="MC2796190" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2796190');"
							title="维京格">
								1.85
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2796190');"
									title="维京格">
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
									3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2796190');"
									title="小">
										1.00
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
								<span id="EOE2796190" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2796190');"
									title="双">
										1.90
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010036_text_1" class="bet_text_left_bg">
						<span id="HMC2796191" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2796191');"
							title="维京格">
								2.35
							</span>
						</span>
					</td>
					<td id="TR1_07-1010036_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2796191" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10035&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2796191');"
									title="维京格">
										1.03
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010036_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2796191" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10036&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2796191');"
									title="小">
										0.89
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010036" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010036_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010036_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010036" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10036','07-10<br>04:00p<br><font color=red>滚球</font>','冰岛超级联赛','阿简尼斯','维京格','1717677');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2796190" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2796190&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2796190');"
							title="和">
								3.55
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2796190',21,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								62
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010036_text_1" class="bet_text_left_bg">
						<span id="HMN2796191" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2796191&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10035&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2796191');"
							title="和">
								2.35
							</span>
						</span>
					</td>
					<td id="TR2_07-1010036_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010036_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010002" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'巴西甲组联赛')">
						巴西甲组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010002" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							19:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							哥里迪巴PR
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2794582" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2794582');"
							title="哥里迪巴PR">
								1.81
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2794582');"
									title="哥里迪巴PR">
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
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2794582');"
									title="大">
										0.98
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
								<span id="EOO2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2794582');"
									title="单">
										1.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010002_text_1" class="bet_text_left_bg">
						<span id="HMH2794583" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2794583');"
							title="哥里迪巴PR">
								2.47
							</span>
						</span>
					</td>
					<td id="TR_07-1010002_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2794583" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2794583');"
									title="哥里迪巴PR">
										1.01
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010002_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2794583" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2794583');"
									title="大">
										1.19
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010002" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						利斯菲体育会PE
					</td>
					<td class="bet_text">
						<span id="MC2794582" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2794582');"
							title="利斯菲体育会PE">
								4.40
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
								<span id="RC2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2794582');"
									title="利斯菲体育会PE">
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
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2794582');"
									title="小">
										0.91
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
								<span id="EOE2794582" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2794582');"
									title="双">
										1.90
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010002_text_1" class="bet_text_left_bg">
						<span id="HMC2794583" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2794583');"
							title="利斯菲体育会PE">
								4.95
							</span>
						</span>
					</td>
					<td id="TR1_07-1010002_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2794583" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10001&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2794583');"
									title="利斯菲体育会PE">
										0.89
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010002_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2794583" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10002&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2794583');"
									title="小">
										0.73
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010002" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010002_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010002_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010002" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10002','07-10<br>07:00p<br><font color=red>滚球</font>','巴西甲组联赛','哥里迪巴PR','利斯菲体育会PE','1715993');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2794582" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2794582&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2794582');"
							title="和">
								3.30
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2794582',22,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								66
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010002_text_1" class="bet_text_left_bg">
						<span id="HMN2794583" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2794583&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10001&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2794583');"
							title="和">
								2.02
							</span>
						</span>
					</td>
					<td id="TR2_07-1010002_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010002_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010004" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'巴西甲组联赛')">
						巴西甲组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010004" style="display: ;"  class="bet_game_tr_top_color">
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
							哥里迪巴PR
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2794584" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2794584&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10004&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2794584');"
									title="哥里迪巴PR">
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
								<span id="OUC2794584" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2794584&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10003&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2794584');"
									title="大">
										1.23
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
					<td id="TR_07-1010004_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010004_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2794585" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2794585&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10004&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2794585');"
									title="哥里迪巴PR">
										1.49
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010004_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									大
								</tt>
								<tt class="bet_text_thin_bg">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUC2794585" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2794585&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10003&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2794585');"
									title="大">
										0.71
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010004" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						利斯菲体育会PE
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
								<span id="RC2794584" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2794584&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10003&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2794584');"
									title="利斯菲体育会PE">
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
								<span id="OUH2794584" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2794584&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10004&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2794584');"
									title="小">
										0.70
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
					<td id="TR1_07-1010004_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010004_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2794585" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2794585&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10003&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2794585');"
									title="利斯菲体育会PE">
										0.57
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010004_text_3" class="bet_text_right_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_oue">
									小
								</tt>
								<tt class="bet_text_thin_bg">
									0.5 / 1
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HOUH2794585" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2794585&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10004&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2794585');"
									title="小">
										1.21
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010004_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010004_1" onmouseover="mouseEnter_pointer(this.id);"
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
					<td id="TR2_07-1010004_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010004_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010004_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010142" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'巴西丙组联赛')">
						巴西丙组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010142" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							19:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							康菲安卡SE
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809278" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10142&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809278');"
							title="康菲安卡SE">
								2.03
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10142&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809278');"
									title="康菲安卡SE">
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
									大
								</tt>
								<tt class="bet_text_thin">
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10141&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809278');"
									title="大">
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
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809278');"
									title="单">
										1.96
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010142_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010142_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010142_text_3" class="bet_text_right_bg">
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
				<tr id="TR1_07-1010142" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						ASA AL
					</td>
					<td class="bet_text">
						<span id="MC2809278" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10141&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809278');"
							title="ASAAL">
								2.97
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
								<span id="RC2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10141&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809278');"
									title="ASAAL">
										0.91
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
									2 / 2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10142&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809278');"
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
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2809278" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809278');"
									title="双">
										1.93
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010142_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010142_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010142_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010142" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010142_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010142_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010142" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10142','07-10<br>07:30p<br><font color=red>滚球</font>','巴西丙组联赛','康菲安卡SE','ASA AL','1729876');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809278" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809278&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10141&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809278');"
							title="和">
								3.10
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809278',24,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010142_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010142_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010142_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010148" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'巴西丙组联赛')">
						巴西丙组联赛
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010148" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							20:00
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							莫奇米林SP
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2809282" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10148&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2809282');"
							title="莫奇米林SP">
								3.05
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
								<span id="RH2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10148&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2809282');"
									title="莫奇米林SP">
										0.76
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
								<span id="OUC2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10147&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2809282');"
									title="大">
										0.91
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
								<span id="EOO2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2809282');"
									title="单">
										1.96
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010148_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010148_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR_07-1010148_text_3" class="bet_text_right_bg">
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
				<tr id="TR1_07-1010148" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						积安维尔SC
					</td>
					<td class="bet_text">
						<span id="MC2809282" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10147&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2809282');"
							title="积安维尔SC">
								1.95
							</span>
						</span>
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RC2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10147&amp;strong=C&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2809282');"
									title="积安维尔SC">
										0.96
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
								<span id="OUH2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10148&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2809282');"
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
									双
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOE2809282" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2809282');"
									title="双">
										1.93
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010148_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010148_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010148_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010148" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010148_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010148_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010148" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10148','07-10<br>08:00p<br><font color=red>滚球</font>','巴西丙组联赛','莫奇米林SP','积安维尔SC','1729879');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2809282" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2809282&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10147&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2809282');"
							title="和">
								3.25
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2809282',25,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								5
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010148_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010148_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010148_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: ;" id="LEG_07-1010044" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'美国公开赛冠军杯')">
						美国公开赛冠军杯
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010044" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="3" class="bet_game_time">
						<div>
							22:30
						</div>
						<div style="display:" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							圣荷西地震
						</div>
					</td>
					<td class="bet_text">
						<span id="MH2804328" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MH2804328');"
							title="圣荷西地震">
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
								<span id="RH2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804328');"
									title="圣荷西地震">
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
									大
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804328');"
									title="大">
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
									单
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="EOO2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOO2804328');"
									title="单">
										1.99
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010044_text_1" class="bet_text_left_bg">
						<span id="HMH2804329" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMH2804329');"
							title="圣荷西地震">
								2.36
							</span>
						</span>
					</td>
					<td id="TR_07-1010044_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0 / 0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804329" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804329');"
									title="圣荷西地震">
										0.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010044_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804329" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804329');"
									title="大">
										0.76
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010044" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						洛杉矶银河
					</td>
					<td class="bet_text">
						<span id="MC2804328" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MC2804328');"
							title="洛杉矶银河">
								4.00
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
								<span id="RC2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804328');"
									title="洛杉矶银河">
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
									小
								</tt>
								<tt class="bet_text_thin">
									2.5 / 3
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804328');"
									title="小">
										0.84
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
								<span id="EOE2804328" class="bet_bg_color">
									<span onclick="betOrder('FT','EO','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn&amp;ptype=&amp;imp=N','EOE2804328');"
									title="双">
										1.90
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010044_text_1" class="bet_text_left_bg">
						<span id="HMC2804329" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMC2804329');"
							title="洛杉矶银河">
								4.35
							</span>
						</span>
					</td>
					<td id="TR1_07-1010044_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804329" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10043&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804329');"
									title="洛杉矶银河">
										0.95
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010044_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804329" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10044&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804329');"
									title="小">
										1.14
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010044" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010044_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010044_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010044" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10044','07-10<br>10:30p<br><font color=red>滚球</font>','美国公开赛冠军杯','圣荷西地震','洛杉矶银河','1725949');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						<span id="MN2804328" class="bet_bg_color">
							<span onclick="betOrder('FT','M','gid=2804328&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','MN2804328');"
							title="和">
								3.60
							</span>
						</span>
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2804328',26,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								66
							</tt>
						</span>
					</td>
					<td id="TR2_07-1010044_text_1" class="bet_text_left_bg">
						<span id="HMN2804329" class="bet_bg_color">
							<span onclick="betOrder('FT','HM','gid=2804329&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=N&amp;gnum=10043&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HMN2804329');"
							title="和">
								2.25
							</span>
						</span>
					</td>
					<td id="TR2_07-1010044_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010044_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010046" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'美国公开赛冠军杯')">
						美国公开赛冠军杯
					</td>
				</tr>
				<!--SHOW LEGUAGE END-->
				<tr id="TR_07-1010046" style="display: ;"  class="bet_game_tr_top_color">
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
							圣荷西地震
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
								<span id="RH2804330" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804330&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10046&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RH2804330');"
									title="圣荷西地震">
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
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUC2804330" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804330&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10045&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUC2804330');"
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
					<td id="TR_07-1010046_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR_07-1010046_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
									0.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRH2804331" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804331&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10046&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRH2804331');"
									title="圣荷西地震">
										1.38
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR_07-1010046_text_3" class="bet_text_right_bg">
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
								<span id="HOUC2804331" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804331&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10045&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUC2804331');"
									title="大">
										1.23
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR1_07-1010046" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						洛杉矶银河
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
								<span id="RC2804330" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2804330&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10045&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','RC2804330');"
									title="洛杉矶银河">
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
									2.5
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="OUH2804330" class="bet_bg_color">
									<span onclick="betOrder('FT','OU','gid=2804330&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10046&amp;langx=zh-cn&amp;ptype=&amp;imp=N','OUH2804330');"
									title="小">
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
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010046_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010046_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="HRC2804331" class="bet_bg_color">
									<span onclick="betOrder('FT','HR','gid=2804331&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10045&amp;strong=H&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HRC2804331');"
									title="洛杉矶银河">
										0.62
									</span>
								</span>
							</span>
						</div>
					</td>
					<td id="TR1_07-1010046_text_3" class="bet_text_right_bg">
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
								<span id="HOUH2804331" class="bet_bg_color">
									<span onclick="betOrder('FT','HOU','gid=2804331&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10046&amp;langx=zh-cn&amp;ptype=&amp;imp=N','HOUH2804331');"
									title="小">
										0.70
									</span>
								</span>
							</span>
						</div>
					</td>
				</tr>
				<tr id="TR2_07-1010046_sub" style="display: none;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010046_1" onmouseover="mouseEnter_pointer(this.id);"
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
					<td id="TR2_07-1010046_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010046_text_2" class="bet_td_bg">
					</td>
					<td id="TR2_07-1010046_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播">
						</span>
					</td>
				</tr>
				<!--SHOW LEGUAGE START-->
				<tr style="display: none;" id="LEG_07-1010052" class="bet_game_league">
					<td colspan="9" onclick="showLeg(this,'美国公开赛冠军杯')">
						美国公开赛冠军杯
					</td>
				</tr>
				<!--子盘多玩法tr-->
				<tr id="TR_07-1010052" style="display: ;"  class="bet_game_tr_top">
					<td rowspan="4" class="bet_game_time">
						<div>
							22:30
						</div>
						<div style="display:none" class="bet_time_live">
							滚球
						</div>
						<div style="display:none" class="bet_game_n">
						</div>
					</td>
					<td colspan="5" class="bet_team bet_more_text" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div>
							会晋级
						</div>
					</td>
					<td colspan="3" id="TR_07-1010052_text_1" class="bet_text_left_bg">
					</td>
				</tr>
				<tr id="TR1_07-1010052" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_team_div_ft">
							圣荷西地震
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td class="bet_text">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin">
									0
								</tt>
							</span>
							<span class="bet_text_tdr">
								<span id="RH2811896" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2811896&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=H&amp;gnum=10052&amp;strong=H&amp;langx=zh-cn&amp;ptype= -会晋级&amp;imp=Y','RH2811896');"
									title="圣荷西地震-会晋级">
										0.42
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
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
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
					<td id="TR1_07-1010052_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR1_07-1010052_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR1_07-1010052_text_3" class="bet_text_right_bg">
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
				<tr id="TR2_07-1010052" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">
						洛杉矶银河
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
								<span id="RC2811896" class="bet_bg_color">
									<span onclick="betOrder('FT','R','gid=2811896&amp;uid=up5k38uz79m17041417l3079991&amp;odd_f_type=H&amp;type=C&amp;gnum=10051&amp;strong=H&amp;langx=zh-cn&amp;ptype= -会晋级&amp;imp=Y','RC2811896');"
									title="洛杉矶银河-会晋级">
										2.00
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
								<tt class="bet_text_thin">
								</tt>
							</span>
							<span class="bet_text_tdr">
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
					<td id="TR2_07-1010052_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR2_07-1010052_text_2" class="bet_text_bg">
						<div class="bet_text_table">
							<span class="bet_text_tdl">
								<tt class="bet_text_thin_bg">
								</tt>
							</span>
							<span class="bet_text_tdr">
							</span>
						</div>
					</td>
					<td id="TR2_07-1010052_text_3" class="bet_text_right_bg">
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
				<tr id="TR3_07-1010052" style="display: ;"  class="bet_game_tr_other">
					<td class="bet_team" id="TR_07-1010052_1" onmouseover="mouseEnter_pointer(this.id);"
					onmouseout="mouseOut_pointer(this.id);">
						<div class="bet_text_table_draw">
							<span class="bet_text_tdl">
								和局
							</span>
							<span class="bet_text_tdstar">
								<span id="love07-1010052_none" class="bet_game_star_none">
								</span>
								<span id="love07-1010052" style="display:none" class="bet_game_star_out"
								title="赛事收藏" onclick="addShowLoveI('10052','07-10<br>10:30p','美国公开赛冠军杯','圣荷西地震 -会晋级','洛杉矶银河 -会晋级','1725953');">
								</span>
							</span>
						</div>
					</td>
					<td class="bet_text">
						&nbsp;
					</td>
					<td colspan="3">
						<span style="display:" onclick="show_allbets('2811896',28,event);" class="bet_more_btn">
							所有玩法&nbsp;&nbsp;
							<tt>
								2
							</tt>
						</span>
					</td>
					<td id="TR3_07-1010052_text_1" class="bet_text_left_bg">
						&nbsp;
					</td>
					<td id="TR3_07-1010052_text_2" class="bet_td_bg">
					</td>
					<td id="TR3_07-1010052_text_3" class="bet_td_bg">
						<span title="可以观看滚球在线直播" class="bet_TV_btn_out" style="visibility:hidden">
						</span>
					</td>
				</tr>
			</tbody>
          </table>
      </div>
  </div>
  <!--所有玩法-->

</body>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
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
	window.parent.document.getElementById('more_iframe_w').style.display="block";
};
 //所有玩法
 function show_allbets(sum,id,obj){
 	window.parent.document.getElementById('more_iframe_w').style.display="block";
 };
function back(){
	parent.document.getElementById('more_iframe_w').style.display="none";
};  	

 //隐藏特殊
 function show_filters(){
 	$("#filter_div").toggle();
 };
 function closeClickEvent(){
 	$("#more_iframe_w").hide();
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

 
</script>
</body>
</html>