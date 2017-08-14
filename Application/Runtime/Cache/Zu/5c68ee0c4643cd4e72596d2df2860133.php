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
    <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
</head>

  <body marginwidth="0" marginheight="0">
     <div id="div_show" class="bet_select_bg"><!--最外层-->



      <!--right buttons-->
      <div id="right_div" class="bet_right_btn">
	      <ul class="bet_right_ul">
	         <li class="bet_right_refresh" onclick="btnClickEvent('Refresh');">刷新</li>
	         <li class="bet_right_close" onclick="btnClickEvent('Close');">关闭</li>
	         <li class="bet_right_top" onclick="btnClickEvent('BackToTop');">返回顶部</li>
	      </ul>
      </div>
      <!--right buttons-->


      <div id="more_div" class="bet_more_div">
      <div id="tab_show" class="bet_select_content"><!--白底层-->

           <!--title层-->
           <div class="bet_all_title_w">

             <div class="bet_all_select_title">
               <div id="title_league" class="bet_select_left">球会友谊赛</div>

               <div class="bet_select_right">
                     <span id="live_tv" onclick="liveTVClickEvent();" class="bet_select_TV_close" style="display: none;"></span><!-- bet_select_TV -->
                     <span id="sel_more_odd" class="bet_all_odds_btn"><tt id="chose_odd" class="bet_normal_text">香港盘</tt>

                         <div id="show_odd" class="bet_all_odds_bg" style="display:none;" onmouseleave="close_odd(this.id)" tabindex="100">
                            <span class="bet_arrow"></span>
                            <span class="bet_arrow_text">盘口类型</span>
                            <ul id="myoddType"><li id="odd_H" value="H" text="香港盘" class="bet_odds_contant">香港盘</li><li id="odd_M" value="M" text="马来盘" class="bet_odds_contant">马来盘</li><li id="odd_I" value="I" text="印尼盘" class="bet_odds_contant">印尼盘</li><li id="odd_E" value="E" text="欧洲盘" class="bet_odds_contant">欧洲盘</li></ul>
                         </div>

                     </span>

                    <span class="bet_all_time_btn" onclick="reFreshClickEvent();"><tt id="refreshTime">29</tt></span>
                    <span class="bet_select_close" onclick="closeClickEvent();"></span>
               </div>
               <script type="text/javascript">
               	//香港盘
				   $("#sel_more_odd").click(function(){
				   		$("#show_odd").toggle();
				   });
				   $("#myoddType li").click(function(){
				   	var pan = $(this).text();
				   	$("#chose_odd").text(pan);
				   });
               </script>
           </div>



           <!-- game info -->
           <table id="gameInfo" cellpadding="0" cellspacing="0" border="0" class="bet_all_table">
              <tbody><tr class="bet_all_tr_title">
                 <td id="title_showtype" class="bet_all_live"><span class="bet_all_live_r" =""="">滚球</span><span =""="" class="bet_all_game_n"></span></td>
                 <td></td>
                 <td class="bet_all_date">04 / 07  08:00</td>
              </tr>

              <tr class="bet_all_tr_point">
                 <td class="bet_all_point_1">施克堡</td>
                 <td class="bet_all_point_v">V</td>
                 <td class="bet_all_point_2">斯基夫</td>
              </tr>
           </tbody></table>



           <div id="mod_table" class="bet_all_title_btn">
              <span id="ALL_Markets" onclick="mod_sel('ALL_Markets',this);" onmouseover="mod_OnOver('ALL_Markets');" onmouseout="mod_OnOut('ALL_Markets');" class="bet_all_mark_out">所有盘口</span>
              <span id="Pop_Markets" onclick="mod_sel('Pop_Markets',this);" onmouseover="mod_OnOver('Pop_Markets');" onmouseout="mod_OnOut('Pop_Markets');" class="bet_all_pop_out">热门盘口</span>
              <span id="HDP_OU" onclick="mod_sel('HDP_OU',this);" onmouseover="mod_OnOver('HDP_OU');" onmouseout="mod_OnOut('HDP_OU');" class="bet_all_hdp_out">让球&amp;大小</span>
              <span id="first_Half" onclick="mod_sel('first_Half',this);" onmouseover="mod_OnOver('first_Half');" onmouseout="mod_OnOut('first_Half');" class="bet_all_1st_out">上半场</span>
              <span id="Socore" onclick="mod_sel('Socore',this);" onmouseover="mod_OnOver('Socore');" onmouseout="mod_OnOut('Socore');" class="bet_all_score_out">比分盘口</span>
              <span id="Specials" onclick="mod_sel('Specials',this);" onmouseover="mod_OnOver('Specials');" onmouseout="mod_OnOut('Specials');" class="bet_all_special_none">特别玩法</span>
              <span id="Corners" style="display:none;" onclick="mod_sel('Corners',this);" onmouseover="mod_OnOver('Corners');" onmouseout="mod_OnOut('Corners');" class="bet_all_special_none">角球</span>
              <span id="Others" style="display:none;" onclick="mod_sel('Others',this);" onmouseover="mod_OnOver('Others');" onmouseout="mod_OnOut('Others');" class="bet_all_special_none">其他盘口</span>
           </div>

            <!-- markets -->
            <div class="bet_all_markets">
                <!------------------------ my markets ------------------------>
                <div id="head_myMarkets" onclick="playCssEvent('myMarkets',this);" class="bet_all_title_bg">
                    <span id="mark_myMarkets" class="bet_all_arrow_up"></span>
                    <span>我的盘口</span>
                </div>

                <div id="movie_myMarkets">
                  <div id="movie_myMarkets_nodata" class="bet_all_click">点击 <span class="bet_all_click_star"></span> 图示添加赛事至我的盘口</div>


                  <div id="favorites_R" style="display: none;"></div>
                  <div id="favorites_HR" style="display: none;"></div>
                  <div id="favorites_OU" style="display: none;"></div>
                  <div id="favorites_HOU" style="display: none;"></div>
                  <div id="favorites_M" style="display: none;"></div>
                  <div id="favorites_HM" style="display: none;"></div>
                  <div id="favorites_PD" style="display: none;"></div>
                  <div id="favorites_HPD" style="display: none;"></div>
                  <div id="favorites_AR" style="display: none;"></div>
                  <div id="favorites_AOU" style="display: none;"></div>
                  <div id="favorites_AM" style="display: none;"></div>
                  <div id="favorites_T" style="display: none;"></div>
                  <div id="favorites_HT" style="display: none;"></div>
                  <div id="favorites_TS" style="display: none;"></div>
                  <div id="favorites_HTS" style="display: none;"></div>
                  <div id="favorites_OUH" style="display: none;"></div>
                  <div id="favorites_OUC" style="display: none;"></div>
                  <div id="favorites_HOUH" style="display: none;"></div>
                  <div id="favorites_HOUC" style="display: none;"></div>
                  <div id="favorites_EO" style="display: none;"></div>
                  <div id="favorites_HEO" style="display: none;"></div>
                  <div id="favorites_EOH" style="display: none;"></div>
                  <div id="favorites_EOC" style="display: none;"></div>
                  <div id="favorites_HEOH" style="display: none;"></div>
                  <div id="favorites_HEOC" style="display: none;"></div>
                  <div id="favorites_PG" style="display: none;"></div>
                  <div id="favorites_RC" style="display: none;"></div>
                  <div id="favorites_F" style="display: none;"></div>
                  <div id="favorites_WM" style="display: none;"></div>
                  <div id="favorites_DC" style="display: none;"></div>
                  <div id="favorites_MW" style="display: none;"></div>
                  <div id="favorites_MQ" style="display: none;"></div>
                  <div id="favorites_SFS" style="display: none;"></div>
                  <div id="favorites_CS" style="display: none;"></div>
                  <div id="favorites_WN" style="display: none;"></div>
                  <div id="favorites_MOU" style="display: none;"></div>
                  <div id="favorites_MTS" style="display: none;"></div>
                  <div id="favorites_OUT" style="display: none;"></div>
                  <div id="favorites_MPG" style="display: none;"></div>
                  <div id="favorites_CN" style="display: none;"></div>
                  <div id="favorites_YC" style="display: none;"></div>
                  <div id="favorites_GA" style="display: none;"></div>
                  <div id="favorites_CD" style="display: none;"></div>
                  <div id="favorites_RCD" style="display: none;"></div>
                  <div id="favorites_F2G" style="display: none;"></div>
                  <div id="favorites_F3G" style="display: none;"></div>
                  <div id="favorites_HG" style="display: none;"></div>
                  <div id="favorites_MG" style="display: none;"></div>
                  <div id="favorites_SB" style="display: none;"></div>
                  <div id="favorites_FG" style="display: none;"></div>
                  <div id="favorites_T3G" style="display: none;"></div>
                  <div id="favorites_T1G" style="display: none;"></div>
                  <div id="favorites_OG" style="display: none;"></div>
                  <div id="favorites_DU" style="display: none;"></div>
                  <div id="favorites_DS" style="display: none;"></div>
                  <div id="favorites_DG" style="display: none;"></div>
                  <div id="favorites_OUE" style="display: none;"></div>
                  <div id="favorites_OUP" style="display: none;"></div>
                  <div id="favorites_W3" style="display: none;"></div>
                  <div id="favorites_BH" style="display: none;"></div>
                  <div id="favorites_WE" style="display: none;"></div>
                  <div id="favorites_WB" style="display: none;"></div>
                  <div id="favorites_TK" style="display: none;"></div>
                  <div id="favorites_PA" style="display: none;"></div>
                  <div id="favorites_OT" style="display: none;"></div>
                  <div id="favorites_ST" style="display: none;"></div>
                  <div id="favorites_OS" style="display: none;"></div>
                  <div id="favorites_BR" style="display: none;"></div>
                  <div id="favorites_BOU" style="display: none;"></div>
                  <div id="favorites_BM" style="display: none;"></div>
                  <div id="favorites_CR" style="display: none;"></div>
                  <div id="favorites_COU" style="display: none;"></div>
                  <div id="favorites_CM" style="display: none;"></div>
                  <div id="favorites_DR" style="display: none;"></div>
                  <div id="favorites_DOU" style="display: none;"></div>
                  <div id="favorites_DM" style="display: none;"></div>
                  <div id="favorites_ER" style="display: none;"></div>
                  <div id="favorites_EOU" style="display: none;"></div>
                  <div id="favorites_EM" style="display: none;"></div>
                  <div id="favorites_FR" style="display: none;"></div>
                  <div id="favorites_FOU" style="display: none;"></div>
                  <div id="favorites_FM" style="display: none;"></div>
                </div>
                <!------------------------ my markets ------------------------>




                <!------------------------ main markets ------------------------>
                <div id="head_mainMarkets" onclick="playCssEvent('mainMarkets',this);" class="bet_all_title_bg">
                  <span id="mark_mainMarkets" class="bet_all_arrow_up"></span>
                  <span>主盘口</span>
                </div>


                <div id="movie_mainMarkets">
                    <div id="body_R"><table id="model_R" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">让球</span><span id="star_R" name="star_R" onclick="addFavorites('R');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              
              <tr class="bet_all_game_h">
                 <td id="RH_2801554" onclick="betEvent('2801554','RH','0.89','R');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡</span><span class="bet_all_middle">1 / 1.5</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡" =""=""><font id="RH2801554" class="bet_all_bg_bet">0.89</font></span></span></div></td>

                 <td id="RC_2801554" onclick="betEvent('2801554','RC','0.95','R');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">斯基夫</span><span class="bet_all_middle"></span><span class="bet_all_bet"><span class="bet_all_bg" title="斯基夫" =""=""><font id="RC2801554" class="bet_all_bg_bet">0.95</font></span></span></div></td>
              </tr>


              

            </tbody></table></div>
                    <div id="body_HR"><table id="model_HR" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">让球<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HR" name="star_HR" onclick="addFavorites('HR');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              
              <tr class="bet_all_game_h">
                 <td id="HRH_2801555" onclick="betEvent('2801555','HRH','0.89','HR');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡</span><span class="bet_all_middle">0.5</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡" =""=""><font id="HRH2801555" class="bet_all_bg_bet">0.89</font></span></span></div></td>
                 <td id="HRC_2801555" onclick="betEvent('2801555','HRC','0.95','HR');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">斯基夫</span><span class="bet_all_middle"></span><span class="bet_all_bet"><span class="bet_all_bg" title="斯基夫" =""=""><font id="HRC2801555" class="bet_all_bg_bet">0.95</font></span></span></div></td>
              </tr>
              

            </tbody></table></div>
                    <div id="body_OU"><table id="model_OU" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">大 / 小</span><span id="star_OU" name="star_OU" onclick="addFavorites('OU');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              
              <tr class="bet_all_game_h">
                  <td id="OUC_2801554" onclick="betEvent('2801554','OUC','0.66','OU');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">3</span><span class="bet_all_bet"><span class="bet_all_bg" title="大"><font id="OUC2801554" class="bet_all_bg_bet">0.66</font></span></span></div></td>

                  <td id="OUH_2801554" onclick="betEvent('2801554','OUH','1.19','OU');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">3</span><span class="bet_all_bet"><span class="bet_all_bg" title="小"><font id="OUH2801554" class="bet_all_bg_bet">1.19</font></span></span></div></td>


              </tr>


              

            </tbody></table></div>
                    <div id="body_HOU"><table id="model_HOU" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">大 / 小<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HOU" name="star_HOU" onclick="addFavorites('HOU');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              
              <tr class="bet_all_game_h">
                  <td id="HOUC_2801555" onclick="betEvent('2801555','HOUC','0.76','HOU');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">1 / 1.5</span><span class="bet_all_bet"><span class="bet_all_bg" title="大"><font id="HOUC2801555" class="bet_all_bg_bet">0.76</font></span></span></div></td>

                  <td id="HOUH_2801555" onclick="betEvent('2801555','HOUH','1.06','HOU');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">1 / 1.5</span><span class="bet_all_bet"><span class="bet_all_bg" title="小"><font id="HOUH2801555" class="bet_all_bg_bet">1.06</font></span></span></div></td>


              </tr>


              

            </tbody></table></div>
                    <div id="body_M"><table id="model_M" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">独赢</span><span id="star_M" name="star_M" onclick="addFavorites('M');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
                </tr>

                
                <tr class="bet_all_game_h">
                   <td id="MH_2801554" onclick="betEvent('2801554','MH','1.380','M');" class="bet_all_three_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡" =""=""><font id="MH2801554" class="bet_all_bg_bet">1.38</font></span></span></div></td>

                   <td id="MN_2801554" onclick="betEvent('2801554','MN','4.500','M');" class="bet_all_three_middle bet_cursor"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局"><font id="MN2801554" class="bet_all_bg_bet">4.50</font></span></span></div></td>

                   <td id="MC_2801554" onclick="betEvent('2801554','MC','5.700','M');" class="bet_all_three bet_cursor"><div class="bet_all_div"><span class="bet_all_team">斯基夫</span><span class="bet_all_bet"><span class="bet_all_bg" title="斯基夫" =""=""><font id="MC2801554" class="bet_all_bg_bet">5.70</font></span></span></div></td>
                </tr>
                


             </tbody></table></div>
                    <div id="body_HM"><table id="model_HM" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">独赢<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HM" name="star_HM" onclick="addFavorites('HM');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
                </tr>

                
                <tr class="bet_all_game_h">
                   <td id="HMH_2801555" onclick="betEvent('2801555','HMH','1.880','HM');" class="bet_all_three_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡" =""=""><font id="HMH2801555" class="bet_all_bg_bet">1.88</font></span></span></div></td>

                   <td id="HMN_2801555" onclick="betEvent('2801555','HMN','2.500','HM');" class="bet_all_three_middle bet_cursor"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局"><font id="HMN2801555" class="bet_all_bg_bet">2.50</font></span></span></div></td>

                   <td id="HMC_2801555" onclick="betEvent('2801555','HMC','5.200','HM');" class="bet_all_three bet_cursor"><div class="bet_all_div"><span class="bet_all_team">斯基夫</span><span class="bet_all_bet"><span class="bet_all_bg" title="斯基夫" =""=""><font id="HMC2801555" class="bet_all_bg_bet">5.20</font></span></span></div></td>
                </tr>
                


             </tbody></table></div>
                    <div id="body_PD" style="display: none;"></div>
                    <div id="body_HPD" style="display: none;"></div>
                    <div id="body_AR" style="display: none;"></div>
                    <div id="body_AOU" style="display: none;"></div>
                    <div id="body_AM" style="display: none;"></div>
                    <div id="body_T" style="display: none;"></div>
                    <div id="body_HT" style="display: none;"></div>
                    <div id="body_TS" style="display: none;"></div>
                    <div id="body_HTS" style="display: none;"></div>
                    <div id="body_OUH" style="display: none;"></div>
                    <div id="body_OUC" style="display: none;"></div>
                    <div id="body_HOUH" style="display: none;"></div>
                    <div id="body_HOUC" style="display: none;"></div>
                    <div id="body_EO"><table id="model_EO" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">单 / 双</span><span id="star_EO" name="star_EO" onclick="addFavorites('EO');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              

              <tr class="bet_all_game_h">
                 <td id="EOO_2801554" onclick="betEvent('2801554','ODD','1.97','EO');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_bet"><span class="bet_all_bg" title="单"><font id="EOO2801554" class="bet_all_bg_bet">1.97</font></span></span></div></td>
                 <td id="EOE_2801554" onclick="betEvent('2801554','EVEN','1.92','EO');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_bet"><span class="bet_all_bg" title="双"><font id="EOE2801554" class="bet_all_bg_bet">1.92</font></span></span></div></td>
              </tr>
              

            </tbody></table></div>
                    <div id="body_HEO"><table id="model_HEO" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">单 / 双<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HEO" name="star_HEO" onclick="addFavorites('HEO');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              

              <tr class="bet_all_game_h">
                 <td id="HEOO_2801555" onclick="betEvent('2801555','HODD','2.04','HEO');" class="bet_all_two_left bet_cursor"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_bet"><span class="bet_all_bg" title="单"><font id="HEOO2801555" class="bet_all_bg_bet">2.04</font></span></span></div></td>
                 <td id="HEOE_2801555" onclick="betEvent('2801555','HEVEN','1.83','HEO');" class="bet_all_two bet_cursor"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_bet"><span class="bet_all_bg" title="双"><font id="HEOE2801555" class="bet_all_bg_bet">1.83</font></span></span></div></td>
              </tr>
              

            </tbody></table></div>
                    <div id="body_EOH" style="display: none;"></div>
                    <div id="body_EOC" style="display: none;"></div>
                    <div id="body_HEOH" style="display: none;"></div>
                    <div id="body_HEOC" style="display: none;"></div>
                    <div id="body_PG" style="display: none;"></div>
                    <div id="body_F" style="display: none;"></div>
                    <div id="body_WM" style="display: none;"></div>
                    <div id="body_DC"><table id="model_DC" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">双重机会</span><span id="star_DC" name="star_DC" onclick="addFavorites('DC');" class="bet_all_game_star_out" title="加到&quot;我的盘口&quot;"></span></td>
              </tr>

              
              <tr class="bet_all_game_h">
                 <td id="DCHN_2801554" onclick="betEvent('2801554','DCHN','1.06','DC');" class="bet_all_one bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡 / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡 / 和局"><font id="DCHN2801554" class="bet_all_bg_bet">1.06</font></span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="DCCN_2801554" onclick="betEvent('2801554','DCCN','2.51','DC');" class="bet_all_one bet_cursor"><div class="bet_all_div"><span class="bet_all_team">斯基夫 / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="斯基夫 / 和局"><font id="DCCN2801554" class="bet_all_bg_bet">2.51</font></span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="DCHC_2801554" onclick="betEvent('2801554','DCHC','1.11','DC');" class="bet_all_one bet_cursor"><div class="bet_all_div"><span class="bet_all_team">施克堡 / 斯基夫</span><span class="bet_all_bet"><span class="bet_all_bg" title="施克堡 / 斯基夫"><font id="DCHC2801554" class="bet_all_bg_bet">1.11</font></span></span></div></td>
              </tr>
              


           </tbody></table></div>
                    <div id="body_MW" style="display: none;"></div>
                    <div id="body_MQ" style="display: none;"></div>
                    <div id="body_SFS" style="display: none;"></div>
                    <div id="body_CS" style="display: none;"></div>
                    <div id="body_WN" style="display: none;"></div>
                    <div id="body_MOU" style="display: none;"></div>
                    <div id="body_MTS" style="display: none;"></div>
                    <div id="body_OUT" style="display: none;"></div>
                    <div id="body_MPG" style="display: none;"></div>
                </div>
                <!------------------------ main markets ------------------------>


                <!------------------------ corners ------------------------>
                <div id="head_corners" onclick="playCssEvent('corners',this);" class="bet_all_title_bg" style="display: none;">
                  <span id="mark_corners" class="bet_all_arrow_up"></span>
                  <span>角球</span>
                </div>


                <div id="movie_corners">
                    <div id="body_CN" style="display: none;"></div>
                </div>
                <!------------------------ corners ------------------------>



                <!------------------------ bookings ------------------------>
                <div id="head_bookings" onclick="playCssEvent('bookings',this);" class="bet_all_title_bg" style="display: none;">
                  <span id="mark_bookings" class="bet_all_arrow_up"></span>
                  <span>罚牌</span>
                </div>


                <div id="movie_bookings">
                    <div id="body_CD" style="display: none;"></div>
                    <div id="body_RCD" style="display: none;"></div>
                </div>
                <!------------------------ bookings ------------------------>



                <!------------------------ goal markets ------------------------>
                <div id="head_goalMarkets" onclick="playCssEvent('goalMarkets',this);" class="bet_all_title_bg" style="display: none;">
                  <span id="mark_goalMarkets" class="bet_all_arrow_up"></span>
                  <span>进球盘口</span>
                </div>


                <div id="movie_goalMarkets">
                    <div id="body_F2G" style="display: none;"></div>
                    <div id="body_F3G" style="display: none;"></div>
                    <div id="body_HG" style="display: none;"></div>
                    <div id="body_MG" style="display: none;"></div>
                    <div id="body_SB" style="display: none;"></div>
                    <div id="body_FG" style="display: none;"></div>
                    <div id="body_T3G" style="display: none;"></div>
                    <div id="body_T1G" style="display: none;"></div>
                    <div id="body_OG" style="display: none;"></div>
                    <div id="body_DU" style="display: none;"></div>
                    <div id="body_DS" style="display: none;"></div>
                    <div id="body_DG" style="display: none;"></div>
                    <div id="body_OUE" style="display: none;"></div>
                    <div id="body_OUP" style="display: none;"></div>
                </div>
                <!------------------------ goal markets ------------------------>



                <!------------------------ specials ------------------------>
                <div id="head_specials" onclick="playCssEvent('specials',this);" class="bet_all_title_bg" style="display: none;">
                  <span id="mark_specials" class="bet_all_arrow_up"></span>
                  <span>特别玩法</span>
                </div>


                <div id="movie_specials">
                </div>
                <!------------------------ specials ------------------------>



                <!------------------------ other markets ------------------------>
                <div id="head_otherMarkets" onclick="playCssEvent('otherMarkets',this);" class="bet_all_title_bg" style="display: none;">
                  <span id="mark_otherMarkets" class="bet_all_arrow_up"></span>
                  <span>其他盘口</span>
                </div>


                <div id="movie_otherMarkets">
                    <div id="body_W3" style="display: none;"></div>
                    <div id="body_BH" style="display: none;"></div>
                    <div id="body_WE" style="display: none;"></div>
                    <div id="body_WB" style="display: none;"></div>
                    <div id="body_TK" style="display: none;"></div>
                    <div id="body_PA" style="display: none;"></div>
                    <div id="body_OT" style="display: none;"></div>
                    <div id="body_ST" style="display: none;"></div>
                    <div id="body_OS" style="display: none;"></div>
                    <div id="body_RC" style="display: none;"></div>
                    <div id="body_YC" style="display: none;"></div>
                    <div id="body_GA" style="display: none;"></div>
                    <div id="body_BR" style="display: none;"></div>
                    <div id="body_BOU" style="display: none;"></div>
                    <div id="body_BM" style="display: none;"></div>
                    <div id="body_CR" style="display: none;"></div>
                    <div id="body_COU" style="display: none;"></div>
                    <div id="body_CM" style="display: none;"></div>
                    <div id="body_DR" style="display: none;"></div>
                    <div id="body_DOU" style="display: none;"></div>
                    <div id="body_DM" style="display: none;"></div>
                    <div id="body_ER" style="display: none;"></div>
                    <div id="body_EOU" style="display: none;"></div>
                    <div id="body_EM" style="display: none;"></div>
                    <div id="body_FR" style="display: none;"></div>
                    <div id="body_FOU" style="display: none;"></div>
                    <div id="body_FM" style="display: none;"></div>
                </div>
                <!------------------------ other markets ------------------------>


            </div>


           <!--赛程已关闭-->
           <div id="gameOver" style="display:none;">
            <table border="0" cellpadding="0" cellspacing="0" class="bet_all_no_table">
              <tbody><tr class="bet_all_no_text"><td>
                此赛事暂时停止收注或已关闭
              </td></tr>
            </tbody></table>
           </div>

          </div><!--title层-->





          <div id="div_model" style="display:none;" class="bet_all_game"><!--玩法层-->




            <!---------- R ---------->
            <table id="model_R_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">让球</span><span id="star_R_bak" name="star_R" onclick="addFavorites('R');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: R -->
              <tr class="bet_all_game_h">
                 <td id="*RH_GID*" onclick="betEvent('*GID*','RH','*IORATIO_RH*','R');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_RH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_RH*</span></span></div></td>

                 <td id="*RC_GID*" onclick="betEvent('*GID*','RC','*IORATIO_RC*','R');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_RC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_RC*</span></span></div></td>
              </tr>


              <!-- END DYNAMIC BLOCK: R -->

            </tbody></table>
            <!---------- R ---------->





            <!---------- HR ---------->
            <table id="model_HR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">让球<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HR_bak" name="star_HR" onclick="addFavorites('HR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HR -->
              <tr class="bet_all_game_h">
                 <td id="*HRH_HGID*" onclick="betEvent('*HGID*','HRH','*IORATIO_HRH*','HR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_HRH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_HRH*</span></span></div></td>
                 <td id="*HRC_HGID*" onclick="betEvent('*HGID*','HRC','*IORATIO_HRC*','HR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_HRC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_HRC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HR -->

            </tbody></table>
            <!---------- HR ---------->




            <!---------- OU ---------->
            <table id="model_OU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">大 / 小</span><span id="star_OU_bak" name="star_OU" onclick="addFavorites('OU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OU -->
              <tr class="bet_all_game_h">
                  <td id="*OUC_GID*" onclick="betEvent('*GID*','OUC','*IORATIO_OUC*','OU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_OUC*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_OUC*</span></span></div></td>

                  <td id="*OUH_GID*" onclick="betEvent('*GID*','OUH','*IORATIO_OUH*','OU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_OUH*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_OUH*</span></span></div></td>


              </tr>


              <!-- END DYNAMIC BLOCK: OU -->

            </tbody></table>
            <!---------- OU ---------->





            <!---------- HOU ---------->
            <table id="model_HOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">大 / 小<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HOU_bak" name="star_HOU" onclick="addFavorites('HOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HOU -->
              <tr class="bet_all_game_h">
                  <td id="*HOUC_HGID*" onclick="betEvent('*HGID*','HOUC','*IORATIO_HOUC*','HOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_HOUC*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_HOUC*</span></span></div></td>

                  <td id="*HOUH_HGID*" onclick="betEvent('*HGID*','HOUH','*IORATIO_HOUH*','HOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_HOUH*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_HOUH*</span></span></div></td>


              </tr>


              <!-- END DYNAMIC BLOCK: HOU -->

            </tbody></table>
            <!---------- HOU ---------->




             <!---------- M ---------->
             <table id="model_M_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">独赢</span><span id="star_M_bak" name="star_M" onclick="addFavorites('M');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: M -->
                <tr class="bet_all_game_h">
                   <td id="*MH_GID*" onclick="betEvent('*GID*','MH','*IORATIO_MH*','M');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_MH*</span></span></div></td>

                   <td id="*MN_GID*" onclick="betEvent('*GID*','MN','*IORATIO_MN*','M');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_MN*</span></span></div></td>

                   <td id="*MC_GID*" onclick="betEvent('*GID*','MC','*IORATIO_MC*','M');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_MC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: M -->


             </tbody></table>
             <!---------- M ---------->




             <!---------- HM ---------->
             <table id="model_HM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">独赢<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HM_bak" name="star_HM" onclick="addFavorites('HM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: HM -->
                <tr class="bet_all_game_h">
                   <td id="*HMH_HGID*" onclick="betEvent('*HGID*','HMH','*IORATIO_HMH*','HM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_HMH*</span></span></div></td>

                   <td id="*HMN_HGID*" onclick="betEvent('*HGID*','HMN','*IORATIO_HMN*','HM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_HMN*</span></span></div></td>

                   <td id="*HMC_HGID*" onclick="betEvent('*HGID*','HMC','*IORATIO_HMC*','HM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_HMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: HM -->


             </tbody></table>
             <!---------- HM ---------->



            <!---------- AR ---------->
            <table id="model_AR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 开场&nbsp;- 14:59 分钟 - 让球</span><span id="star_AR" name="star_AR" onclick="addFavorites('AR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: AR -->
              <tr class="bet_all_game_h">
                 <td id="*ARH_GID*" onclick="betEvent('*GID*','ARH','*IORATIO_ARH*','AR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_ARH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_ARH*</span></span></div></td>
                 <td id="*ARC_GID*" onclick="betEvent('*GID*','ARC','*IORATIO_ARC*','AR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_ARC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_ARC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: AR -->

            </tbody></table>
            <!---------- AR ---------->




            <!---------- BR ---------->
            <table id="model_BR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 15:00 - 29:59 分钟 - 让球</span><span id="star_BR" name="star_BR" onclick="addFavorites('BR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: BR -->
              <tr class="bet_all_game_h">
                 <td id="*BRH_GID*" onclick="betEvent('*GID*','BRH','*IORATIO_BRH*','BR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_BRH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_BRH*</span></span></div></td>
                 <td id="*BRC_GID*" onclick="betEvent('*GID*','BRC','*IORATIO_BRC*','BR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_BRC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_BRC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: BR -->

            </tbody></table>
            <!---------- BR ---------->



            <!---------- CR ---------->
            <table id="model_CR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 30:00 分钟 - 半场 - 让球</span><span id="star_CR" name="star_CR" onclick="addFavorites('CR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: CR -->
              <tr class="bet_all_game_h">
                 <td id="*CRH_GID*" onclick="betEvent('*GID*','CRH','*IORATIO_CRH*','CR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_CRH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CRH*</span></span></div></td>
                 <td id="*CRC_GID*" onclick="betEvent('*GID*','CRC','*IORATIO_CRC*','CR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_CRC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CRC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: CR -->

            </tbody></table>
            <!---------- CR ---------->


            <!---------- DR ---------->
            <table id="model_DR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 下半场开始&nbsp;- 59:59 分钟 - 让球</span><span id="star_DR" name="star_DR" onclick="addFavorites('DR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: DR -->
              <tr class="bet_all_game_h">
                 <td id="*DRH_GID*" onclick="betEvent('*GID*','DRH','*IORATIO_DRH*','DR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_DRH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_DRH*</span></span></div></td>
                 <td id="*DRC_GID*" onclick="betEvent('*GID*','DRC','*IORATIO_DRC*','DR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_DRC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_DRC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: DR -->

            </tbody></table>
            <!---------- DR ---------->


            <!---------- ER ---------->
            <table id="model_ER_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 60:00 - 74:59 分钟 - 让球</span><span id="star_ER" name="star_ER" onclick="addFavorites('ER');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: ER -->
              <tr class="bet_all_game_h">
                 <td id="*ERH_GID*" onclick="betEvent('*GID*','ERH','*IORATIO_ERH*','ER');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_ERH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_ERH*</span></span></div></td>
                 <td id="*ERC_GID*" onclick="betEvent('*GID*','ERC','*IORATIO_ERC*','ER');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_ERC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_ERC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: ER -->

            </tbody></table>
            <!---------- ER ---------->


            <!---------- FR ---------->
            <table id="model_FR_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 75:00 分钟 - 全场 - 让球</span><span id="star_FR" name="star_FR" onclick="addFavorites('FR');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: FR -->
              <tr class="bet_all_game_h">
                 <td id="*FRH_GID*" onclick="betEvent('*GID*','FRH','*IORATIO_FRH*','FR');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_middle">*RATIO_FRH*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_FRH*</span></span></div></td>
                 <td id="*FRC_GID*" onclick="betEvent('*GID*','FRC','*IORATIO_FRC*','FR');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_middle">*RATIO_FRC*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_FRC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: FR -->

            </tbody></table>
            <!---------- FR ---------->




            <!---------- AOU ---------->
            <table id="model_AOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 开场&nbsp;- 14:59 分钟 - 大 / 小</span><span id="star_AOU" name="star_AOU" onclick="addFavorites('AOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: AOU -->
              <tr class="bet_all_game_h">
                 <td id="*AOUO_GID*" onclick="betEvent('*GID*','AOUO','*IORATIO_AOUO*','AOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_AOUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_AOUO*</span></span></div></td>
                 <td id="*AOUU_GID*" onclick="betEvent('*GID*','AOUU','*IORATIO_AOUU*','AOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_AOUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_AOUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: AOU -->

            </tbody></table>
            <!---------- AOU ---------->





            <!---------- BOU ---------->
            <table id="model_BOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 15:00 - 29:59 分钟 - 大 / 小</span><span id="star_BOU" name="star_BOU" onclick="addFavorites('BOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: BOU -->
              <tr class="bet_all_game_h">
                 <td id="*BOUO_GID*" onclick="betEvent('*GID*','BOUO','*IORATIO_BOUO*','BOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_BOUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_BOUO*</span></span></div></td>
                 <td id="*BOUU_GID*" onclick="betEvent('*GID*','BOUU','*IORATIO_BOUU*','BOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_BOUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_BOUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: BOU -->

            </tbody></table>
            <!---------- BOU ---------->




            <!---------- COU ---------->
            <table id="model_COU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 30:00 分钟 - 半场 - 大 / 小</span><span id="star_COU" name="star_COU" onclick="addFavorites('COU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: COU -->
              <tr class="bet_all_game_h">
                 <td id="*COUO_GID*" onclick="betEvent('*GID*','COUO','*IORATIO_COUO*','COU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_COUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_COUO*</span></span></div></td>
                 <td id="*COUU_GID*" onclick="betEvent('*GID*','COUU','*IORATIO_COUU*','COU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_COUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_COUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: COU -->

            </tbody></table>
            <!---------- COU ---------->



            <!---------- DOU ---------->
            <table id="model_DOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 下半场开始&nbsp;- 59:59 分钟 - 大 / 小</span><span id="star_DOU" name="star_DOU" onclick="addFavorites('DOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: DOU -->
              <tr class="bet_all_game_h">
                 <td id="*DOUO_GID*" onclick="betEvent('*GID*','DOUO','*IORATIO_DOUO*','DOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_DOUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_DOUO*</span></span></div></td>
                 <td id="*DOUU_GID*" onclick="betEvent('*GID*','DOUU','*IORATIO_DOUU*','DOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_DOUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_DOUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: DOU -->

            </tbody></table>
            <!---------- DOU ---------->



            <!---------- EOU ---------->
            <table id="model_EOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 60:00 - 74:59 分钟 - 大 / 小</span><span id="star_EOU" name="star_EOU" onclick="addFavorites('EOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: EOU -->
              <tr class="bet_all_game_h">
                 <td id="*EOUO_GID*" onclick="betEvent('*GID*','EOUO','*IORATIO_EOUO*','EOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_EOUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_EOUO*</span></span></div></td>
                 <td id="*EOUU_GID*" onclick="betEvent('*GID*','EOUU','*IORATIO_EOUU*','EOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_EOUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_EOUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: EOU -->

            </tbody></table>
            <!---------- EOU ---------->




            <!---------- FOU ---------->
            <table id="model_FOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">15 分钟盘口: 75:00 分钟 - 全场 - 大 / 小</span><span id="star_FOU" name="star_FOU" onclick="addFavorites('FOU');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: FOU -->
              <tr class="bet_all_game_h">
                 <td id="*FOUO_GID*" onclick="betEvent('*GID*','FOUO','*IORATIO_FOUO*','FOU');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_FOUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_FOUO*</span></span></div></td>
                 <td id="*FOUU_GID*" onclick="betEvent('*GID*','FOUU','*IORATIO_FOUU*','FOU');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_FOUU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_FOUU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: FOU -->

            </tbody></table>
            <!---------- FOU ---------->




            <!---------- AM ---------->
             <table id="model_AM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 开场&nbsp;- 14:59 分钟 - 独赢</span><span id="star_AM" name="star_AM" onclick="addFavorites('AM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: AM -->
                <tr class="bet_all_game_h">
                   <td id="*AMH_GID*" onclick="betEvent('*GID*','AMH','*IORATIO_AMH*','AM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_AMH*</span></span></div></td>

                   <td id="*AMN_GID*" onclick="betEvent('*GID*','AMN','*IORATIO_AMN*','AM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_AMN*</span></span></div></td>

                   <td id="*AMC_GID*" onclick="betEvent('*GID*','AMC','*IORATIO_AMC*','AM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_AMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: AM -->


             </tbody></table>
             <!---------- AM ---------->




             <!---------- BM ---------->
             <table id="model_BM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 15:00 - 29:59 分钟 - 独赢</span><span id="star_BM" name="star_BM" onclick="addFavorites('BM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: BM -->
                <tr class="bet_all_game_h">
                   <td id="*BMH_GID*" onclick="betEvent('*GID*','BMH','*IORATIO_BMH*','BM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_BMH*</span></span></div></td>

                   <td id="*BMN_GID*" onclick="betEvent('*GID*','BMN','*IORATIO_BMN*','BM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_BMN*</span></span></div></td>

                   <td id="*BMC_GID*" onclick="betEvent('*GID*','BMC','*IORATIO_BMC*','BM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_BMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: BM -->


             </tbody></table>
             <!---------- BM ---------->




             <!---------- CM ---------->
             <table id="model_CM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 30:00 分钟 - 半场 - 独赢</span><span id="star_CM" name="star_CM" onclick="addFavorites('CM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: CM -->
                <tr class="bet_all_game_h">
                   <td id="*CMH_GID*" onclick="betEvent('*GID*','CMH','*IORATIO_CMH*','CM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CMH*</span></span></div></td>

                   <td id="*CMN_GID*" onclick="betEvent('*GID*','CMN','*IORATIO_CMN*','CM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_CMN*</span></span></div></td>

                   <td id="*CMC_GID*" onclick="betEvent('*GID*','CMC','*IORATIO_CMC*','CM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: CM -->


             </tbody></table>
             <!---------- CM ---------->



             <!---------- DM ---------->
             <table id="model_DM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 下半场开始&nbsp;- 59:59 分钟 - 独赢</span><span id="star_DM" name="star_DM" onclick="addFavorites('DM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: DM -->
                <tr class="bet_all_game_h">
                   <td id="*DMH_GID*" onclick="betEvent('*GID*','DMH','*IORATIO_DMH*','DM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_DMH*</span></span></div></td>

                   <td id="*DMN_GID*" onclick="betEvent('*GID*','DMN','*IORATIO_DMN*','DM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_DMN*</span></span></div></td>

                   <td id="*DMC_GID*" onclick="betEvent('*GID*','DMC','*IORATIO_DMC*','DM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_DMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: DM -->


             </tbody></table>
             <!---------- DM ---------->



             <!---------- EM ---------->
             <table id="model_EM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 60:00 - 74:59 分钟 - 独赢</span><span id="star_EM" name="star_EM" onclick="addFavorites('EM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: EM -->
                <tr class="bet_all_game_h">
                   <td id="*EMH_GID*" onclick="betEvent('*GID*','EMH','*IORATIO_EMH*','EM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_EMH*</span></span></div></td>

                   <td id="*EMN_GID*" onclick="betEvent('*GID*','EMN','*IORATIO_EMN*','EM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_EMN*</span></span></div></td>

                   <td id="*EMC_GID*" onclick="betEvent('*GID*','EMC','*IORATIO_EMC*','EM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_EMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: EM -->


             </tbody></table>
             <!---------- EM ---------->



             <!---------- FM ---------->
             <table id="model_FM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">15 分钟盘口: 75:00 分钟 - 全场 - 独赢</span><span id="star_FM" name="star_FM" onclick="addFavorites('FM');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: FM -->
                <tr class="bet_all_game_h">
                   <td id="*FMH_GID*" onclick="betEvent('*GID*','FMH','*IORATIO_FMH*','FM');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_FMH*</span></span></div></td>

                   <td id="*FMN_GID*" onclick="betEvent('*GID*','FMN','*IORATIO_FMN*','FM');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_FMN*</span></span></div></td>

                   <td id="*FMC_GID*" onclick="betEvent('*GID*','FMC','*IORATIO_FMC*','FM');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_FMC*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: FM -->


             </tbody></table>
             <!---------- FM ---------->









            <!---------- PD ---------->
           <table id="model_PD_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="5"><span class="bet_all_name">波胆</span><span id="star_PD" name="star_PD" onclick="addFavorites('PD');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: PD -->
              <tr class="bet_all_team_title">
                  <td colspan="2" class="bet_all_col5_w">*TEAM_H*</td>
                  <td class="bet_all_coldraw_w">和局</td>
                  <td colspan="2" class="bet_all_col5_w">*TEAM_C*</td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*H1C0_GID*" onclick="betEvent('*GID*','H1C0','*IORATIO_H1C0*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H1C0*</span></span></td>
                 <td id="*H2C0_GID*" onclick="betEvent('*GID*','H2C0','*IORATIO_H2C0*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H2C0*</span></span></td>
                 <td id="*H0C0_GID*" onclick="betEvent('*GID*','H0C0','*IORATIO_H0C0*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">0 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H0C0*</span></span></td>
                 <td id="*H0C1_GID*" onclick="betEvent('*GID*','H0C1','*IORATIO_H0C1*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">0 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H0C1*</span></span></td>
                 <td id="*H0C2_GID*" onclick="betEvent('*GID*','H0C2','*IORATIO_H0C2*','PD');" class="bet_all_five"><span class="bet_all_any_text">0 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H0C2*</span></span></td>
              </tr>




              <tr class="bet_all_game_h">
                 <td id="*H2C1_GID*" onclick="betEvent('*GID*','H2C1','*IORATIO_H2C1*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H2C1*</span></span></td>
                 <td id="*H3C0_GID*" onclick="betEvent('*GID*','H3C0','*IORATIO_H3C0*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H3C0*</span></span></td>
                 <td id="*H1C1_GID*" onclick="betEvent('*GID*','H1C1','*IORATIO_H1C1*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H1C1*</span></span></td>
                 <td id="*H1C2_GID*" onclick="betEvent('*GID*','H1C2','*IORATIO_H1C2*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H1C2*</span></span></td>
                 <td id="*H0C3_GID*" onclick="betEvent('*GID*','H0C3','*IORATIO_H0C3*','PD');" class="bet_all_five"><span class="bet_all_any_text">0 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H0C3*</span></span></td>
              </tr>






              <tr class="bet_all_game_h">
                 <td id="*H3C1_GID*" onclick="betEvent('*GID*','H3C1','*IORATIO_H3C1*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H3C1*</span></span></td>
                 <td id="*H3C2_GID*" onclick="betEvent('*GID*','H3C2','*IORATIO_H3C2*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H3C2*</span></span></td>
                 <td id="*H2C2_GID*" onclick="betEvent('*GID*','H2C2','*IORATIO_H2C2*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H2C2*</span></span></td>
                 <td id="*H1C3_GID*" onclick="betEvent('*GID*','H1C3','*IORATIO_H1C3*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H1C3*</span></span></td>
                 <td id="*H2C3_GID*" onclick="betEvent('*GID*','H2C3','*IORATIO_H2C3*','PD');" class="bet_all_five"><span class="bet_all_any_text">2 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H2C3*</span></span></td>
              </tr>




              <tr class="bet_all_game_h">
                 <td id="*H4C0_GID*" onclick="betEvent('*GID*','H4C0','*IORATIO_H4C0*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">4 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H4C0*</span></span></td>
                 <td id="*H4C1_GID*" onclick="betEvent('*GID*','H4C1','*IORATIO_H4C1*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">4 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H4C1*</span></span></td>
                 <td id="*H3C3_GID*" onclick="betEvent('*GID*','H3C3','*IORATIO_H3C3*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H3C3*</span></span></td>
                 <td id="*H0C4_GID*" onclick="betEvent('*GID*','H0C4','*IORATIO_H0C4*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">0 - 4</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H0C4*</span></span></td>
                 <td id="*H1C4_GID*" onclick="betEvent('*GID*','H1C4','*IORATIO_H1C4*','PD');" class="bet_all_five"><span class="bet_all_any_text">1 - 4</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H1C4*</span></span></td>
              </tr>




              <tr class="bet_all_game_h">
                 <td id="*H4C2_GID*" onclick="betEvent('*GID*','H4C2','*IORATIO_H4C2*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">4 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H4C2*</span></span></td>
                 <td id="*H4C3_GID*" onclick="betEvent('*GID*','H4C3','*IORATIO_H4C3*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">4 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H4C3*</span></span></td>
                 <td id="*H4C4_GID*" onclick="betEvent('*GID*','H4C4','*IORATIO_H4C4*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">4 - 4</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H4C4*</span></span></td>
                 <td id="*H2C4_GID*" onclick="betEvent('*GID*','H2C4','*IORATIO_H2C4*','PD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 4</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H2C4*</span></span></td>
                 <td id="*H3C4_GID*" onclick="betEvent('*GID*','H3C4','*IORATIO_H3C4*','PD');" class="bet_all_five"><span class="bet_all_any_text">3 - 4</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_H3C4*</span></span></td>
              </tr>



              <tr class="bet_all_game_h">
                 <td id="*OVH_GID*" onclick="betEvent('*GID*','OVH','*IORATIO_OVH*','PD');" colspan="5" class="bet_all_five_last"><span class="bet_all_five_other">其他比分</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_OVH*</span></span></td>
              </tr>
              <!-- END DYNAMIC BLOCK: PD -->


           </tbody></table>
           <!---------- PD ---------->



           <!---------- HPD ---------->
           <table id="model_HPD_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="5"><span class="bet_all_name">波胆<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HPD" name="star_HPD" onclick="addFavorites('HPD');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: HPD -->
              <tr class="bet_all_team_title">
                  <td colspan="2" class="bet_all_col5_w">*TEAM_H*</td>
                  <td class="bet_all_coldraw_w">和局</td>
                  <td colspan="2" class="bet_all_col5_w">*TEAM_C*</td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*HH1C0_HGID*" onclick="betEvent('*HGID*','HH1C0','*IORATIO_HH1C0*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH1C0*</span></span></td>
                 <td id="*HH2C0_HGID*" onclick="betEvent('*HGID*','HH2C0','*IORATIO_HH2C0*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH2C0*</span></span></td>
                 <td id="*HH0C0_HGID*" onclick="betEvent('*HGID*','HH0C0','*IORATIO_HH0C0*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">0 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH0C0*</span></span></td>
                 <td id="*HH0C1_HGID*" onclick="betEvent('*HGID*','HH0C1','*IORATIO_HH0C1*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">0 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH0C1*</span></span></td>
                 <td id="*HH0C2_HGID*" onclick="betEvent('*HGID*','HH0C2','*IORATIO_HH0C2*','HPD');" class="bet_all_five"><span class="bet_all_any_text">0 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH0C2*</span></span></td>
              </tr>




              <tr class="bet_all_game_h">
                 <td id="*HH2C1_HGID*" onclick="betEvent('*HGID*','HH2C1','*IORATIO_HH2C1*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH2C1*</span></span></td>
                 <td id="*HH3C0_HGID*" onclick="betEvent('*HGID*','HH3C0','*IORATIO_HH3C0*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 0</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH3C0*</span></span></td>
                 <td id="*HH1C1_HGID*" onclick="betEvent('*HGID*','HH1C1','*IORATIO_HH1C1*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH1C1*</span></span></td>
                 <td id="*HH1C2_HGID*" onclick="betEvent('*HGID*','HH1C2','*IORATIO_HH1C2*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH1C2*</span></span></td>
                 <td id="*HH0C3_HGID*" onclick="betEvent('*HGID*','HH0C3','*IORATIO_HH0C3*','HPD');" class="bet_all_five"><span class="bet_all_any_text">0 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH0C3*</span></span></td>
              </tr>






              <tr class="bet_all_game_h">
                 <td id="*HH3C1_HGID*" onclick="betEvent('*HGID*','HH3C1','*IORATIO_HH3C1*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH3C1*</span></span></td>
                 <td id="*HH3C2_HGID*" onclick="betEvent('*HGID*','HH3C2','*IORATIO_HH3C2*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH3C2*</span></span></td>
                 <td id="*HH2C2_HGID*" onclick="betEvent('*HGID*','HH2C2','*IORATIO_HH2C2*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">2 - 2</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH2C2*</span></span></td>
                 <td id="*HH1C3_HGID*" onclick="betEvent('*HGID*','HH1C3','*IORATIO_HH1C3*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">1 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH1C3*</span></span></td>
                 <td id="*HH2C3_HGID*" onclick="betEvent('*HGID*','HH2C3','*IORATIO_HH2C3*','HPD');" class="bet_all_five"><span class="bet_all_any_text">2 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH2C3*</span></span></td>
              </tr>




              <tr class="bet_all_game_h">
                 <td class="bet_all_five_left"></td>
                 <td class="bet_all_five_left"></td>
                 <td id="*HH3C3_HGID*" onclick="betEvent('*HGID*','HH3C3','*IORATIO_HH3C3*','HPD');" class="bet_all_five_left"><span class="bet_all_any_text">3 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HH3C3*</span></span></td>
                 <td class="bet_all_five_left"></td>
                 <td class="bet_all_five"></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*HOVH_HGID*" onclick="betEvent('*HGID*','HOVH','*IORATIO_HOVH*','HPD');" colspan="5" class="bet_all_five_last"><span class="bet_all_five_other">其他比分</span><span class="bet_all_any_bold"><span class="bet_all_bg">*IORATIO_HOVH*</span></span></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HPD -->


           </tbody></table>
           <!---------- HPD ---------->



           <!---------- T ---------->
           <table id="model_T_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="5"><span class="bet_all_name">总进球数</span><span id="star_T" name="star_T" onclick="addFavorites('T');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: T -->
              <tr class="bet_all_game_h">
                 <td id="*T01_GID*" onclick="betEvent('*GID*','0~1','*IORATIO_T01*','T');" class="bet_all_four_left"><span class="bet_all_any_text">0 - 1</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="0 - 1">*IORATIO_T01*</span></span></td>
                 <td id="*T23_GID*" onclick="betEvent('*GID*','2~3','*IORATIO_T23*','T');" class="bet_all_four_left"><span class="bet_all_any_text">2 - 3</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="2 - 3">*IORATIO_T23*</span></span></td>
                 <td id="*T46_GID*" onclick="betEvent('*GID*','4~6','*IORATIO_T46*','T');" class="bet_all_four_left"><span class="bet_all_any_text">4 - 6</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="4 - 6">*IORATIO_T46*</span></span></td>
                 <td id="*OVER_GID*" onclick="betEvent('*GID*','OVER','*IORATIO_OVER*','T');" class="bet_all_four"><span class="bet_all_any_text_long">7<tt class="bet_all_text_small">或以上</tt></span><span class="bet_all_any_bold"><span class="bet_all_bg" title="7或以上">*IORATIO_OVER*</span></span></td>
              </tr>
              <!-- END DYNAMIC BLOCK: T -->

           </tbody></table>
           <!---------- T ---------->




          <!---------- HT ---------->
          <table id="model_HT_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
             <tbody><tr class="bet_all_game_tr">
                <td colspan="5"><span class="bet_all_name">总进球数<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HT" name="star_HT" onclick="addFavorites('HT');" class="bet_all_game_star_out"></span></td>
             </tr>

             <!-- START DYNAMIC BLOCK: HT -->
             <tr class="bet_all_game_h">
                <td id="*HT0_HGID*" onclick="betEvent('*HGID*','HT0','*IORATIO_HT0*','HT');" class="bet_all_four_left"><span class="bet_all_any_text">0</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="0">*IORATIO_HT0*</span></span></td>
                <td id="*HT1_HGID*" onclick="betEvent('*HGID*','HT1','*IORATIO_HT1*','HT');" class="bet_all_four_left"><span class="bet_all_any_text">1</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="1">*IORATIO_HT1*</span></span></td>
                <td id="*HT2_HGID*" onclick="betEvent('*HGID*','HT2','*IORATIO_HT2*','HT');" class="bet_all_four_left"><span class="bet_all_any_text">2</span><span class="bet_all_any_bold"><span class="bet_all_bg" title="2">*IORATIO_HT2*</span></span></td>
                <td id="*HTOV_HGID*" onclick="betEvent('*HGID*','HTOV','*IORATIO_HTOV*','HT');" class="bet_all_four"><span class="bet_all_any_text_long">3<tt class="bet_all_text_small">或以上</tt></span><span class="bet_all_any_bold"><span class="bet_all_bg" title="3或以上">*IORATIO_HTOV*</span></span></td>
             </tr>
             <!-- END DYNAMIC BLOCK: HT -->

          </tbody></table>
          <!---------- HT ---------->





            <!---------- F ---------->
           <table id="model_F_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">半场 / 全场</span><span id="star_F" name="star_F" onclick="addFavorites('F');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: F -->

              <tr class="bet_all_game_h">
                 <td id="*FHH_GID*" onclick="betEvent('*GID*','FHH','*IORATIO_FHH*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* / *TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* / *TEAM_H*">*IORATIO_FHH*</span></span></div></td>
                 <td id="*FNH_GID*" onclick="betEvent('*GID*','FNH','*IORATIO_FNH*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">和局 / *TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局 / *TEAM_H*">*IORATIO_FNH*</span></span></div></td>
                 <td id="*FCH_GID*" onclick="betEvent('*GID*','FCH','*IORATIO_FCH*','F');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* / *TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* / *TEAM_H*">*IORATIO_FCH*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*FHN_GID*" onclick="betEvent('*GID*','FHN','*IORATIO_FHN*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* / 和局">*IORATIO_FHN*</span></span></div></td>
                 <td id="*FNN_GID*" onclick="betEvent('*GID*','FNN','*IORATIO_FNN*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">和局 / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局 / 和局">*IORATIO_FNN*</span></span></div></td>
                 <td id="*FCN_GID*" onclick="betEvent('*GID*','FCN','*IORATIO_FCN*','F');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* / 和局">*IORATIO_FCN*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*FHC_GID*" onclick="betEvent('*GID*','FHC','*IORATIO_FHC*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* / *TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* / *TEAM_C*">*IORATIO_FHC*</span></span></div></td>
                 <td id="*FNC_GID*" onclick="betEvent('*GID*','FNC','*IORATIO_FNC*','F');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">和局 / *TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局 / *TEAM_C*">*IORATIO_FNC*</span></span></div></td>
                 <td id="*FCC_GID*" onclick="betEvent('*GID*','FCC','*IORATIO_FCC*','F');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* / *TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* / *TEAM_C*">*IORATIO_FCC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: F -->

           </tbody></table>
           <!---------- F ---------->




           <!---------- WM ---------->
           <table id="model_WM_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">净胜球数</span><span id="star_WM" name="star_WM" onclick="addFavorites('WM');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: WM -->
              <tr class="bet_all_team_title">
                  <td class="bet_all_col5_w">*TEAM_H*</td>
                  <td class="bet_all_coldraw_w">和局</td>
                  <td class="bet_all_col5_w">*TEAM_C*</td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*WMH1_GID*" onclick="betEvent('*GID*','WMH1','*IORATIO_WMH1*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">净胜1球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜1球">*IORATIO_WMH1*</span></span></div></td>
                 <td id="*WM0_GID*" onclick="betEvent('*GID*','WM0','*IORATIO_WM0*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">0 - 0 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="0 - 0 和局">*IORATIO_WM0*</span></span></div></td>
                 <td id="*WMC1_GID*" onclick="betEvent('*GID*','WMC1','*IORATIO_WMC1*','WM');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">净胜1球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜1球">*IORATIO_WMC1*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*WMH2_GID*" onclick="betEvent('*GID*','WMH2','*IORATIO_WMH2*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">净胜2球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜2球">*IORATIO_WMH2*</span></span></div></td>
                 <td id="*WMN_GID*" onclick="betEvent('*GID*','WMN','*IORATIO_WMN*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">任何进球和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="任何进球和局">*IORATIO_WMN*</span></span></div></td>
                 <td id="*WMC2_GID*" onclick="betEvent('*GID*','WMC2','*IORATIO_WMC2*','WM');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">净胜2球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜2球">*IORATIO_WMC2*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*WMH3_GID*" onclick="betEvent('*GID*','WMH3','*IORATIO_WMH3*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">净胜3球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜3球">*IORATIO_WMH3*</span></span></div></td>
                 <td class="bet_all_three_left_2"></td>
                 <td id="*WMC3_GID*" onclick="betEvent('*GID*','WMC3','*IORATIO_WMC3*','WM');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">净胜3球</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜3球">*IORATIO_WMC3*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*WMHOV_GID*" onclick="betEvent('*GID*','WMHOV','*IORATIO_WMHOV*','WM');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">净胜4球或更多</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜4球或更多">*IORATIO_WMHOV*</span></span></div></td>
                 <td class="bet_all_three_left_2"></td>
                 <td id="*WMCOV_GID*" onclick="betEvent('*GID*','WMCOV','*IORATIO_WMCOV*','WM');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">净胜4球或更多</span><span class="bet_all_bet"><span class="bet_all_bg" title="净胜4球或更多">*IORATIO_WMCOV*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: WM -->
           </tbody></table>
           <!---------- WM ---------->


           <!---------- MOU ---------->
           <table id="model_MOU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">独赢 &amp; 进球 大 / 小</span><span id="star_MOU" name="star_MOU" onclick="addFavorites('MOU');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: MOU -->
              <tr class="bet_all_team_title *DISPLAY_MOU*">
                  <td>*TEAM_H*</td>
                  <td>和局</td>
                  <td>*TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h_line *DISPLAY_MOU*">
                 <td id="*MOUHO_GID*" onclick="betEvent('*GID*','*MOUHO_RTYPE*','*IORATIO_MOUHO*','*MOU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUHO*">*IORATIO_MOUHO*</span></span></div></td>
                 <td id="*MOUNO_GID*" onclick="betEvent('*GID*','*MOUNO_RTYPE*','*IORATIO_MOUNO*','*MOU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUNO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUNO*">*IORATIO_MOUNO*</span></span></div></td>
                 <td id="*MOUCO_GID*" onclick="betEvent('*GID*','*MOUCO_RTYPE*','*IORATIO_MOUCO*','*MOU_WTYPE*');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUCO*">*IORATIO_MOUCO*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h *DISPLAY_MOU*">
                 <td id="*MOUHU_GID*" onclick="betEvent('*GID*','*MOUHU_RTYPE*','*IORATIO_MOUHU*','*MOU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUHU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUHU*">*IORATIO_MOUHU*</span></span></div></td>
                 <td id="*MOUNU_GID*" onclick="betEvent('*GID*','*MOUNU_RTYPE*','*IORATIO_MOUNU*','*MOU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUNU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUNU*">*IORATIO_MOUNU*</span></span></div></td>
                 <td id="*MOUCU_GID*" onclick="betEvent('*GID*','*MOUCU_RTYPE*','*IORATIO_MOUCU*','*MOU_WTYPE*');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*STR_MOUCU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_MOUCU*">*IORATIO_MOUCU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: MOU -->
           </tbody></table>
           <!---------- MOU ---------->




           <!---------- MTS ---------->
           <table id="model_MTS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">独赢 &amp; 双方球队进球</span><span id="star_MTS" name="star_MTS" onclick="addFavorites('MTS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: MTS -->
              <tr class="bet_all_team_title">
                  <td>*TEAM_H*</td>
                  <td>和局</td>
                  <td>*TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*MTSHY_GID*" onclick="betEvent('*GID*','MTSHY','*IORATIO_MTSHY*','MTS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_MTSHY*</span></span></div></td>
                 <td id="*MTSNY_GID*" onclick="betEvent('*GID*','MTSNY','*IORATIO_MTSNY*','MTS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_MTSNY*</span></span></div></td>
                 <td id="*MTSCY_GID*" onclick="betEvent('*GID*','MTSCY','*IORATIO_MTSCY*','MTS');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_MTSCY*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*MTSHN_GID*" onclick="betEvent('*GID*','MTSHN','*IORATIO_MTSHN*','MTS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_MTSHN*</span></span></div></td>
                 <td id="*MTSNN_GID*" onclick="betEvent('*GID*','MTSNN','*IORATIO_MTSNN*','MTS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_MTSNN*</span></span></div></td>
                 <td id="*MTSCN_GID*" onclick="betEvent('*GID*','MTSCN','*IORATIO_MTSCN*','MTS');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_MTSCN*</span></span></div></td>
              </tr>

              <!-- END DYNAMIC BLOCK: MTS -->
           </tbody></table>
           <!---------- MTS ---------->




           <!---------- OUT ---------->
            <table id="model_OUT_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">进球 大 / 小 &amp; 双方球队进球</span><span id="star_OUT" name="star_OUT" onclick="addFavorites('OUT');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: OUT -->
              <tr class="bet_all_team_title *DISPLAY_OUT*">
                  <td class="bet_all_col2_w">是</td>
                  <td class="bet_all_col2_w">不是</td>
              </tr>

              <tr class="bet_all_game_h_line *DISPLAY_OUT*">
                 <td id="*OUTOY_GID*" onclick="betEvent('*GID*','*OUTOY_RTYPE*','*IORATIO_OUTOY*','*OUT_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUTOY*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUTOY*">*IORATIO_OUTOY*</span></span></div></td>
                 <td id="*OUTON_GID*" onclick="betEvent('*GID*','*OUTON_RTYPE*','*IORATIO_OUTON*','*OUT_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUTON*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUTON*">*IORATIO_OUTON*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h *DISPLAY_OUT*">
                 <td id="*OUTUY_GID*" onclick="betEvent('*GID*','*OUTUY_RTYPE*','*IORATIO_OUTUY*','*OUT_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUTUY*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUTUY*">*IORATIO_OUTUY*</span></span></div></td>
                 <td id="*OUTUN_GID*" onclick="betEvent('*GID*','*OUTUN_RTYPE*','*IORATIO_OUTUN*','*OUT_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUTUN*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUTUN*">*IORATIO_OUTUN*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OUT -->

            </tbody></table>
            <!---------- OUT ---------->




           <!---------- MPG ---------->
           <table id="model_MPG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">独赢 &amp; 最先进球</span><span id="star_MPG" name="star_MPG" onclick="addFavorites('MPG');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: MPG -->
              <tr class="bet_all_team_title">
                  <td>*TEAM_H*</td>
                  <td>和局</td>
                  <td>*TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h_line">
                 <td id="*MPGHH_GID*" onclick="betEvent('*GID*','MPGHH','*IORATIO_MPGHH*','MPG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H*">*IORATIO_MPGHH*</span></span></div></td>
                 <td id="*MPGNH_GID*" onclick="betEvent('*GID*','MPGNH','*IORATIO_MPGNH*','MPG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H*">*IORATIO_MPGNH*</span></span></div></td>
                 <td id="*MPGCH_GID*" onclick="betEvent('*GID*','MPGCH','*IORATIO_MPGCH*','MPG');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H*">*IORATIO_MPGCH*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*MPGHC_GID*" onclick="betEvent('*GID*','MPGHC','*IORATIO_MPGHC*','MPG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C*">*IORATIO_MPGHC*</span></span></div></td>
                 <td id="*MPGNC_GID*" onclick="betEvent('*GID*','MPGNC','*IORATIO_MPGNC*','MPG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C*">*IORATIO_MPGNC*</span></span></div></td>
                 <td id="*MPGCC_GID*" onclick="betEvent('*GID*','MPGCC','*IORATIO_MPGCC*','MPG');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C*">*IORATIO_MPGCC*</span></span></div></td>
              </tr>

              <!-- END DYNAMIC BLOCK: MPG -->
           </tbody></table>
           <!---------- MPG ---------->




           <!---------- DC ---------->
           <table id="model_DC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">双重机会</span><span id="star_DC_bak" name="star_DC" onclick="addFavorites('DC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: DC -->
              <tr class="bet_all_game_h">
                 <td id="*DCHN_GID*" onclick="betEvent('*GID*','DCHN','*IORATIO_DCHN*','DC');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* / 和局">*IORATIO_DCHN*</span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="*DCCN_GID*" onclick="betEvent('*GID*','DCCN','*IORATIO_DCCN*','DC');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* / 和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* / 和局">*IORATIO_DCCN*</span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="*DCHC_GID*" onclick="betEvent('*GID*','DCHC','*IORATIO_DCHC*','DC');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* / *TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* / *TEAM_C*">*IORATIO_DCHC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: DC -->


           </tbody></table>
           <!---------- DC ---------->



           <!---------- MW ---------->
           <table id="model_MW_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="4"><span class="bet_all_name">胜出方法</span><span id="star_MW" name="star_MW" onclick="addFavorites('MW');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: MW -->
              <tr class="bet_all_team_title">
                  <td colspan="2" class="bet_all_col2_w">*TEAM_H*</td>
                  <td colspan="2" class="bet_all_col2_w">*TEAM_C*</td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*MWH_GID*" onclick="betEvent('*GID*','MWH','*IORATIO_MWH*','MW');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">90分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="90分钟">*IORATIO_MWH*</span></span></div></td>
                 <td id="*MWHOT_GID*" onclick="betEvent('*GID*','MWHOT','*IORATIO_MWHOT*','MW');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">加时赛</span><span class="bet_all_bet"><span class="bet_all_bg" title="加时赛">*IORATIO_MWHOT*</span></span></div></td>
                 <td id="*MWC_GID*" onclick="betEvent('*GID*','MWC','*IORATIO_MWC*','MW');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">90分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="90分钟">*IORATIO_MWC*</span></span></div></td>
                 <td id="*MWCOT_GID*" onclick="betEvent('*GID*','MWCOT','*IORATIO_MWCOT*','MW');" class="bet_all_four"><div class="bet_all_div"><span class="bet_all_team">加时赛</span><span class="bet_all_bet"><span class="bet_all_bg" title="加时赛">*IORATIO_MWCOT*</span></span></div></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*MWHPK_GID*" onclick="betEvent('*GID*','MWHPK','*IORATIO_MWHPK*','MW');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">点球大战</span><span class="bet_all_bet"><span class="bet_all_bg" title="点球大战">*IORATIO_MWHPK*</span></span></div></td>
                 <td class="bet_all_four_left"></td>
                 <td id="*MWCPK_GID*" onclick="betEvent('*GID*','MWCPK','*IORATIO_MWCPK*','MW');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">点球大战</span><span class="bet_all_bet"><span class="bet_all_bg" title="点球大战">*IORATIO_MWCPK*</span></span></div></td>
                 <td class="bet_all_four"></td>
              </tr>
              <!-- END DYNAMIC BLOCK: MW -->


           </tbody></table>
           <!---------- MW ---------->



            <!---------- MQ ---------->
           <table id="model_MQ_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="4"><span class="bet_all_name">晋级方法</span><span id="star_MQ" name="star_MQ" onclick="addFavorites('MQ');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: MQ -->
              <tr class="bet_all_team_title">
                  <td colspan="2" class="bet_all_col2_w">*TEAM_H*</td>
                  <td colspan="2" class="bet_all_col2_w">*TEAM_C*</td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*MQH_GID*" onclick="betEvent('*GID*','MQH','*IORATIO_MQH*','MQ');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">90分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="90分钟">*IORATIO_MQH*</span></span></div></td>
                 <td id="*MQHOT_GID*" onclick="betEvent('*GID*','MQHOT','*IORATIO_MQHOT*','MQ');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">加时赛</span><span class="bet_all_bet"><span class="bet_all_bg" title="加时赛">*IORATIO_MQHOT*</span></span></div></td>
                 <td id="*MQC_GID*" onclick="betEvent('*GID*','MQC','*IORATIO_MQC*','MQ');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">90分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="90分钟">*IORATIO_MQC*</span></span></div></td>
                 <td id="*MQCOT_GID*" onclick="betEvent('*GID*','MQCOT','*IORATIO_MQCOT*','MQ');" class="bet_all_four"><div class="bet_all_div"><span class="bet_all_team">加时赛</span><span class="bet_all_bet"><span class="bet_all_bg" title="加时赛">*IORATIO_MQCOT*</span></span></div></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*MQHPK_GID*" onclick="betEvent('*GID*','MQHPK','*IORATIO_MQHPK*','MQ');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">点球大战</span><span class="bet_all_bet"><span class="bet_all_bg" title="点球大战">*IORATIO_MQHPK*</span></span></div></td>
                 <td class="bet_all_four_left"></td>
                 <td id="*MQCPK_GID*" onclick="betEvent('*GID*','MQCPK','*IORATIO_MQCPK*','MQ');" class="bet_all_four_left"><div class="bet_all_div"><span class="bet_all_team">点球大战</span><span class="bet_all_bet"><span class="bet_all_bg" title="点球大战">*IORATIO_MQCPK*</span></span></div></td>
                 <td class="bet_all_four"></td>
              </tr>
              <!-- END DYNAMIC BLOCK: MQ -->


           </tbody></table>
           <!---------- MQ ---------->




           <!---------- W3 ---------->
           <table id="model_W3_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">三项让球投注</span><span id="star_W3" name="star_W3" onclick="addFavorites('W3');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: W3 -->
              <tr class="bet_all_game_h">
                 <td id="*W3H_GID*" onclick="betEvent('*GID*','W3H','*IORATIO_W3H*','W3');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*<span class="bet_all_3way">*RATIO_W3H*</span></span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H*">*IORATIO_W3H*</span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="*W3C_GID*" onclick="betEvent('*GID*','W3C','*IORATIO_W3C*','W3');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*<span class="bet_all_3way">*RATIO_W3C*</span></span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C*">*IORATIO_W3C*</span></span></div></td>
                 </tr>
              <tr class="bet_all_game_h">
                 <td id="*W3N_GID*" onclick="betEvent('*GID*','W3N','*IORATIO_W3N*','W3');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">让球和局<span class="bet_all_3way">*RATIO_W3N*</span></span><span class="bet_all_bet"><span class="bet_all_bg" title="让球和局">*IORATIO_W3N*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: W3 -->


           </tbody></table>
           <!---------- W3 ---------->






           <!---------- BH ---------->
            <table id="model_BH_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">落后反超获胜</span><span id="star_BH" name="star_BH" onclick="addFavorites('BH');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: BH -->
              <tr class="bet_all_game_h">
                 <td id="*BHH_GID*" onclick="betEvent('*GID*','BHH','*IORATIO_BHH*','BH');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_BHH*</span></span></div></td>

                 <td id="*BHC_GID*" onclick="betEvent('*GID*','BHC','*IORATIO_BHC*','BH');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_BHC*</span></span></div></td>
              </tr>


              <!-- END DYNAMIC BLOCK: BH -->

            </tbody></table>
            <!---------- BH ---------->






            <!---------- WE ---------->
            <table id="model_WE_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">赢得任一半场</span><span id="star_WE" name="star_WE" onclick="addFavorites('WE');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: WE -->
              <tr class="bet_all_game_h">
                 <td id="*WEH_GID*" onclick="betEvent('*GID*','WEH','*IORATIO_WEH*','WE');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_WEH*</span></span></div></td>

                 <td id="*WEC_GID*" onclick="betEvent('*GID*','WEC','*IORATIO_WEC*','WE');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_WEC*</span></span></div></td>
              </tr>


              <!-- END DYNAMIC BLOCK: WE -->

            </tbody></table>
            <!---------- WE ---------->






            <!---------- WB ---------->
            <table id="model_WB_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">赢得所有半场</span><span id="star_WB" name="star_WB" onclick="addFavorites('WB');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: WB -->
              <tr class="bet_all_game_h">
                 <td id="*WBH_GID*" onclick="betEvent('*GID*','WBH','*IORATIO_WBH*','WB');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_WBH*</span></span></div></td>

                 <td id="*WBC_GID*" onclick="betEvent('*GID*','WBC','*IORATIO_WBC*','WB');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_WBC*</span></span></div></td>
              </tr>


              <!-- END DYNAMIC BLOCK: WB -->

            </tbody></table>
            <!---------- WB ---------->





            <!---------- PG ---------->
           <table id="model_PG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">最先 / 最后进球</span><span id="star_PG" name="star_PG" onclick="addFavorites('PG');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: PG -->
              <tr class="bet_all_team_title">
                  <td>最先进球</td>
                  <td>最后进球</td>
                  <td>无进球</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*PGFH_GID*" onclick="betEvent('*GID*','PGFH','*IORATIO_PGFH*','SP');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_PGFH*</span></span></div></td>
                 <td id="*PGLH_GID*" onclick="betEvent('*GID*','PGLH','*IORATIO_PGLH*','SP');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_PGLH*</span></span></div></td>

                 <td rowspan="2" id="*PGFN_GID*" onclick="betEvent('*GID*','PGFN','*IORATIO_PGFN*','SP');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">无进球</span><span class="bet_all_bet"><span class="bet_all_bg" title="无进球">*IORATIO_PGFN*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*PGFC_GID*" onclick="betEvent('*GID*','PGFC','*IORATIO_PGFC*','SP');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_PGFC*</span></span></div></td>
                 <td id="*PGLC_GID*" onclick="betEvent('*GID*','PGLC','*IORATIO_PGLC*','SP');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_PGLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: PG -->
           </tbody></table>
           <!---------- PG ---------->




            <!---------- RC ---------->
            <table id="model_RC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后任意球</span><span id="star_RC" name="star_RC" onclick="addFavorites('RC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: RC -->
              <tr class="bet_all_team_title">
                  <td>最先任意球</td>
                  <td>最后任意球</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*RCFH_GID*" onclick="betEvent('*GID*','RCFH','*IORATIO_RCFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_RCFH*</span></span></div></td>
                 <td id="*RCLH_GID*" onclick="betEvent('*GID*','RCLH','*IORATIO_RCLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_RCLH*</span></span></div></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*RCFC_GID*" onclick="betEvent('*GID*','RCFC','*IORATIO_RCFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_RCFC*</span></span></div></td>
                 <td id="*RCLC_GID*" onclick="betEvent('*GID*','RCLC','*IORATIO_RCLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_RCLC*</span></span></div></td>
              </tr>

              <!-- END DYNAMIC BLOCK: RC -->

            </tbody></table>
            <!---------- RC ---------->




             <!---------- TS ---------->
            <table id="model_TS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">双方球队进球</span><span id="star_TS" name="star_TS" onclick="addFavorites('TS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: TS -->

              <tr class="bet_all_game_h">
                 <td id="*TSY_GID*" onclick="betEvent('*GID*','TSY','*IORATIO_TSY*','TS');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_TSY*</span></span></div></td>
                 <td id="*TSN_GID*" onclick="betEvent('*GID*','TSN','*IORATIO_TSN*','TS');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_TSN*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: TS -->

            </tbody></table>
            <!---------- TS ---------->



            <!---------- HTS ---------->
            <table id="model_HTS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">双方球队进球<tt class="bet_name_color">&nbsp;- 上半場</tt></span><span id="star_HTS" name="star_HTS" onclick="addFavorites('HTS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HTS -->

              <tr class="bet_all_game_h">
                 <td id="*HTSY_GID*" onclick="betEvent('*HGID*','HTSY','*IORATIO_HTSY*','HTS');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_HTSY*</span></span></div></td>
                 <td id="*HTSN_GID*" onclick="betEvent('*HGID*','HTSN','*IORATIO_HTSN*','HTS');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_HTSN*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HTS -->

            </tbody></table>
            <!---------- HTS ---------->



             <!---------- OUH ---------->
            <table id="model_OUH_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_H*</tt> -  大 / 小</span><span id="star_OUH" name="star_OUH" onclick="addFavorites('OUH');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OUH -->

              <tr class="bet_all_game_h">
                 <td id="*OUHO_GID*" onclick="betEvent('*GID*','OUHO','*IORATIO_OUHO*','OUH');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_OUHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_OUHO*</span></span></div></td>
                 <td id="*OUHU_GID*" onclick="betEvent('*GID*','OUHU','*IORATIO_OUHU*','OUH');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_OUHU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_OUHU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OUH -->

            </tbody></table>
            <!---------- OUH ---------->




             <!---------- OUC ---------->
            <table id="model_OUC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_C*</tt> -  大 / 小</span><span id="star_OUC" name="star_OUC" onclick="addFavorites('OUC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OUC -->

              <tr class="bet_all_game_h">
                 <td id="*OUCO_GID*" onclick="betEvent('*GID*','OUCO','*IORATIO_OUCO*','OUC');" class="bet_all_two_left">
                  <div class="bet_all_div">
                    <span class="bet_all_team">大</span>
                    <span class="bet_all_middle">*RATIO_OUCO*</span>
                    <span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_OUCO*</span></span>
                  </div>
                 </td>
                <td id="*OUCU_GID*" onclick="betEvent('*GID*','OUCU','*IORATIO_OUCU*','OUC');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_OUCU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_OUCU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OUC -->

            </tbody></table>
            <!---------- OUC ---------->



             <!---------- HOUH ---------->
            <table id="model_HOUH_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_H*</tt> -  大 / 小<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HOUH" name="star_HOUH" onclick="addFavorites('HOUH');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HOUH -->

              <tr class="bet_all_game_h">
                 <td id="*HOUHO_HGID*" onclick="betEvent('*HGID*','HOUHO','*IORATIO_HOUHO*','HOUH');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_HOUHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_HOUHO*</span></span></div></td>
                 <td id="*HOUHU_HGID*" onclick="betEvent('*HGID*','HOUHU','*IORATIO_HOUHU*','HOUH');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_HOUHU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_HOUHU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HOUH -->

            </tbody></table>
            <!---------- HOUH ---------->




             <!---------- HOUC ---------->
            <table id="model_HOUC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_C*</tt> -  大 / 小<tt class="bet_name_color">&nbsp;- 上半场</tt></span><span id="star_HOUC" name="star_HOUC" onclick="addFavorites('HOUC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HOUC -->

              <tr class="bet_all_game_h">
                 <td id="*HOUCO_HGID*" onclick="betEvent('*HGID*','HOUCO','*IORATIO_HOUCO*','HOUC');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">大</span><span class="bet_all_middle">*RATIO_HOUCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="大">*IORATIO_HOUCO*</span></span></div></td>
                 <td id="*HOUCU_HGID*" onclick="betEvent('*HGID*','HOUCU','*IORATIO_HOUCU*','HOUC');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">小</span><span class="bet_all_middle">*RATIO_HOUCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="小">*IORATIO_HOUCU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HOUC -->

            </tbody></table>
            <!---------- HOUC ---------->






             <!---------- EO ---------->
            <table id="model_EO_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">单 / 双</span><span id="star_EO_bak" name="star_EO" onclick="addFavorites('EO');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: EO -->

              <tr class="bet_all_game_h">
                 <td id="*EOO_GID*" onclick="betEvent('*GID*','ODD','*IORATIO_EOO*','EO');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_EOO*</span></span></div></td>
                 <td id="*EOE_GID*" onclick="betEvent('*GID*','EVEN','*IORATIO_EOE*','EO');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_EOE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: EO -->

            </tbody></table>
            <!---------- EO ---------->




             <!---------- HEO ---------->
            <table id="model_HEO_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">单 / 双<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HEO_bak" name="star_HEO" onclick="addFavorites('HEO');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HEO -->

              <tr class="bet_all_game_h">
                 <td id="*HEOO_HGID*" onclick="betEvent('*HGID*','HODD','*IORATIO_HEOO*','HEO');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_HEOO*</span></span></div></td>
                 <td id="*HEOE_HGID*" onclick="betEvent('*HGID*','HEVEN','*IORATIO_HEOE*','HEO');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_HEOE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HEO -->

            </tbody></table>
            <!---------- HEO ---------->


             <!---------- EOH ---------->
            <table id="model_EOH_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_H*</tt> -  单 / 双</span><span id="star_EOH" name="star_EOH" onclick="addFavorites('EOH');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: EOH -->

              <tr class="bet_all_game_h">
                 <td id="*EOHO_GID*" onclick="betEvent('*GID*','EOHO','*IORATIO_EOHO*','EOH');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_middle">*RATIO_EOHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_EOHO*</span></span></div></td>
                 <td id="*EOHE_GID*" onclick="betEvent('*GID*','EOHE','*IORATIO_EOHE*','EOH');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_middle">*RATIO_EOHE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_EOHE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: EOH -->

            </tbody></table>
            <!---------- EOH ---------->

            <!---------- EOC ---------->
            <table id="model_EOC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_C*</tt> -  单 / 双</span><span id="star_EOC" name="star_EOC" onclick="addFavorites('EOC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: EOC -->

              <tr class="bet_all_game_h">
                 <td id="*EOCO_GID*" onclick="betEvent('*GID*','EOCO','*IORATIO_EOCO*','EOC');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_middle">*RATIO_EOCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_EOCO*</span></span></div></td>
                 <td id="*EOCE_GID*" onclick="betEvent('*GID*','EOCE','*IORATIO_EOCE*','EOC');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_middle">*RATIO_EOCE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_EOCE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: EOC -->

            </tbody></table>
            <!---------- EOC ---------->


            <!---------- HEOH ---------->
            <table id="model_HEOH_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_H*</tt> -  单 / 双<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HEOH" name="star_HEOH" onclick="addFavorites('HEOH');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HEOH -->

              <tr class="bet_all_game_h">
                 <td id="*HEOHO_GID*" onclick="betEvent('*HGID*','HEOHO','*IORATIO_HEOHO*','HEOH');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_middle">*RATIO_HEOHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_HEOHO*</span></span></div></td>
                 <td id="*HEOHE_GID*" onclick="betEvent('*HGID*','HEOHE','*IORATIO_HEOHE*','HEOH');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_middle">*RATIO_HEOHE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_HEOHE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HEOH -->

            </tbody></table>
            <!---------- HEOH ---------->

            <!---------- HEOC ---------->
            <table id="model_HEOC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">球队进球数: <tt class="bet_name_color">*TEAM_C*</tt> -  单 / 双<tt class="bet_name_color"> - 上半场</tt></span><span id="star_HEOC" name="star_HEOC" onclick="addFavorites('HEOC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HEOC -->

              <tr class="bet_all_game_h">
                 <td id="*HEOCO_GID*" onclick="betEvent('*HGID*','HEOCO','*IORATIO_HEOCO*','HEOC');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">单</span><span class="bet_all_middle">*RATIO_HEOCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="单">*IORATIO_HEOCO*</span></span></div></td>
                 <td id="*HEOCE_GID*" onclick="betEvent('*HGID*','HEOCE','*IORATIO_HEOCE*','HEOC');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">双</span><span class="bet_all_middle">*RATIO_HEOCE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="双">*IORATIO_HEOCE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HEOC -->

            </tbody></table>
            <!---------- HEOC ---------->




             <!---------- CS ---------->
            <table id="model_CS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">零失球</span><span id="star_CS" name="star_CS" onclick="addFavorites('CS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: CS -->

              <tr class="bet_all_game_h">
                 <td id="*CSH_GID*" onclick="betEvent('*GID*','CSH','*IORATIO_CSH*','CS');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CSH*</span></span></div></td>
                 <td id="*CSC_GID*" onclick="betEvent('*GID*','CSC','*IORATIO_CSC*','CS');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CSC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: CS -->

            </tbody></table>
            <!---------- CS ---------->





             <!---------- WN ---------->
            <table id="model_WN_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">零失球获胜</span><span id="star_WN" name="star_WN" onclick="addFavorites('WN');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: WN -->

              <tr class="bet_all_game_h">
                 <td id="*WNH_GID*" onclick="betEvent('*GID*','WNH','*IORATIO_WNH*','WN');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_WNH*</span></span></div></td>
                 <td id="*WNC_GID*" onclick="betEvent('*GID*','WNC','*IORATIO_WNC*','WN');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_WNC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: WN -->

            </tbody></table>
            <!---------- WN ---------->




             <!---------- F2G ---------->
            <table id="model_F2G_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">先进2球的一方</span><span id="star_F2G" name="star_F2G" onclick="addFavorites('F2G');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: F2G -->
              <tr class="bet_all_game_h">
                 <td id="*F2GH_GID*" onclick="betEvent('*GID*','F2GH','*IORATIO_F2GH*','F2G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_F2GH*</span></span></div></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*F2GC_GID*" onclick="betEvent('*GID*','F2GC','*IORATIO_F2GC*','F2G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_F2GC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: F2G -->

            </tbody></table>
            <!---------- F2G ---------->




             <!---------- F3G ---------->
            <table id="model_F3G_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">先进3球的一方</span><span id="star_F3G" name="star_F3G" onclick="addFavorites('F3G');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: F3G -->
              <tr class="bet_all_game_h">
                 <td id="*F3GH_GID*" onclick="betEvent('*GID*','F3GH','*IORATIO_F3GH*','F3G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_F3GH*</span></span></div></td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*F3GC_GID*" onclick="betEvent('*GID*','F3GC','*IORATIO_F3GC*','F3G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_F3GC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: F3G -->

            </tbody></table>
            <!---------- F3G ---------->





             <!---------- HG ---------->
            <table id="model_HG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最多进球的半场</span><span id="star_HG" name="star_HG" onclick="addFavorites('HG');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: HG -->
              <tr class="bet_all_game_h">
                 <td id="*HGH_GID*" onclick="betEvent('*GID*','HGH','*IORATIO_HGH*','HG');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">上半场</span><span class="bet_all_bet"><span class="bet_all_bg" title="上半场">*IORATIO_HGH*</span></span></div></td>

                 <td id="*HGC_GID*" onclick="betEvent('*GID*','HGC','*IORATIO_HGC*','HG');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">下半场</span><span class="bet_all_bet"><span class="bet_all_bg" title="下半场">*IORATIO_HGC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: HG -->

            </tbody></table>
            <!---------- HG ---------->




            <!---------- MG ---------->
             <table id="model_MG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">最多进球的半场 - 独赢</span><span id="star_MG" name="star_MG" onclick="addFavorites('MG');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: MG -->
                <tr class="bet_all_game_h">
                   <td id="*MGH_GID*" onclick="betEvent('*GID*','MGH','*IORATIO_MGH*','MG');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">上半场</span><span class="bet_all_bet"><span class="bet_all_bg" title="上半场">*IORATIO_MGH*</span></span></div></td>

                   <td id="*MGC_GID*" onclick="betEvent('*GID*','MGC','*IORATIO_MGC*','MG');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">下半场</span><span class="bet_all_bet"><span class="bet_all_bg" title="下半场">*IORATIO_MGC*</span></span></div></td>

                   <td id="*MGN_GID*" onclick="betEvent('*GID*','MGN','*IORATIO_MGN*','MG');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">和局</span><span class="bet_all_bet"><span class="bet_all_bg" title="和局">*IORATIO_MGN*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: MG -->


             </tbody></table>
             <!---------- MG ---------->



             <!---------- SB ---------->
            <table id="model_SB_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">双半场进球</span><span id="star_SB" name="star_SB" onclick="addFavorites('SB');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: SB -->
              <tr class="bet_all_game_h">
                 <td id="*SBH_GID*" onclick="betEvent('*GID*','SBH','*IORATIO_SBH*','SB');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_SBH*</span></span></div></td>

                 <td id="*SBC_GID*" onclick="betEvent('*GID*','SBC','*IORATIO_SBC*','SB');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_SBC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: SB -->

            </tbody></table>
            <!---------- SB ---------->




            <!---------- FG ---------->
             <table id="model_FG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">首个进球方式</span><span id="star_FG" name="star_FG" onclick="addFavorites('FG');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: FG -->
                <tr class="bet_all_game_h">
                   <td id="*FGS_GID*" onclick="betEvent('*GID*','FGS','*IORATIO_FGS*','FG');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">射门</span><span class="bet_all_bet"><span class="bet_all_bg" title="射门">*IORATIO_FGS*</span></span></div></td>

                   <td id="*FGH_GID*" onclick="betEvent('*GID*','FGH','*IORATIO_FGH*','FG');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">头球</span><span class="bet_all_bet"><span class="bet_all_bg" title="头球">*IORATIO_FGH*</span></span></div></td>

                   <td id="*FGN_GID*" onclick="betEvent('*GID*','FGN','*IORATIO_FGN*','FG');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">无进球</span><span class="bet_all_bet"><span class="bet_all_bg" title="无进球">*IORATIO_FGN*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*FGP_GID*" onclick="betEvent('*GID*','FGP','*IORATIO_FGP*','FG');" class="bet_all_three_left"><div class="bet_all_div"><span class="bet_all_team">点球大战</span><span class="bet_all_bet"><span class="bet_all_bg" title="点球大战">*IORATIO_FGP*</span></span></div></td>

                   <td id="*FGF_GID*" onclick="betEvent('*GID*','FGF','*IORATIO_FGF*','FG');" class="bet_all_three_middle"><div class="bet_all_div"><span class="bet_all_team">任意球</span><span class="bet_all_bet"><span class="bet_all_bg" title="任意球">*IORATIO_FGF*</span></span></div></td>

                   <td id="*FGO_GID*" onclick="betEvent('*GID*','FGO','*IORATIO_FGO*','FG');" class="bet_all_three"><div class="bet_all_div"><span class="bet_all_team">乌龙球</span><span class="bet_all_bet"><span class="bet_all_bg" title="乌龙球">*IORATIO_FGO*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: FG -->


             </tbody></table>
             <!---------- FG ---------->






             <!---------- T3G ---------->
             <table id="model_T3G_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="3"><span class="bet_all_name">首个进球时间-3项</span><span id="star_T3G" name="star_T3G" onclick="addFavorites('T3G');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: T3G -->
                <tr class="bet_all_game_h">
                   <td id="*T3G1_GID*" onclick="betEvent('*GID*','T3G1','*IORATIO_T3G1*','T3G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">第26分钟或之前</span><span class="bet_all_bet"><span class="bet_all_bg" title="第26分钟或之前">*IORATIO_T3G1*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*T3G2_GID*" onclick="betEvent('*GID*','T3G2','*IORATIO_T3G2*','T3G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">第27分钟或之后</span><span class="bet_all_bet"><span class="bet_all_bg" title="第27分钟或之后">*IORATIO_T3G2*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*T3GN_GID*" onclick="betEvent('*GID*','T3GN','*IORATIO_T3GN*','T3G');" class="bet_all_one"><div class="bet_all_div"><span class="bet_all_team">无进球</span><span class="bet_all_bet"><span class="bet_all_bg" title="无进球">*IORATIO_T3GN*</span></span></div></td>
                </tr>
                <!-- END DYNAMIC BLOCK: T3G -->


             </tbody></table>
             <!---------- T3G ---------->




             <!---------- T1G ---------->
             <table id="model_T1G_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
                <tbody><tr class="bet_all_game_tr">
                   <td colspan="2"><span class="bet_all_name">首个进球时间</span><span id="star_T1G" name="star_T1G" onclick="addFavorites('T1G');" class="bet_all_game_star_out"></span></td>
                </tr>

                <!-- START DYNAMIC BLOCK: T1G -->
                <tr class="bet_all_game_h">
                   <td id="*T1G1_GID*" onclick="betEvent('*GID*','T1G1','*IORATIO_T1G1*','T1G');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">上半场开场 - 14:59分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="上半场开场 - 14:59分钟">*IORATIO_T1G1*</span></span></div></td>
                   <td id="*T1G2_GID*" onclick="betEvent('*GID*','T1G2','*IORATIO_T1G2*','T1G');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">15:00分钟 - 29:59分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="15:00分钟 - 29:59分钟">*IORATIO_T1G2*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*T1G3_GID*" onclick="betEvent('*GID*','T1G3','*IORATIO_T1G3*','T1G');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">30:00分钟 - 半场</span><span class="bet_all_bet"><span class="bet_all_bg" title="30:00分钟 - 半场">*IORATIO_T1G3*</span></span></div></td>
                   <td id="*T1G4_GID*" onclick="betEvent('*GID*','T1G4','*IORATIO_T1G4*','T1G');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">下半场开场 - 59:59分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="下半场开场 - 59:59分钟">*IORATIO_T1G4*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*T1G5_GID*" onclick="betEvent('*GID*','T1G5','*IORATIO_T1G5*','T1G');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">60:00分钟 - 74:59分钟</span><span class="bet_all_bet"><span class="bet_all_bg" title="60:00分钟 - 74:59分钟">*IORATIO_T1G5*</span></span></div></td>
                   <td id="*T1G6_GID*" onclick="betEvent('*GID*','T1G6','*IORATIO_T1G6*','T1G');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">75:00分钟 - 全场完场</span><span class="bet_all_bet"><span class="bet_all_bg" title="75:00分钟 - 全场完场">*IORATIO_T1G6*</span></span></div></td>
                </tr>

                <tr class="bet_all_game_h">
                   <td id="*T1GN_GID*" onclick="betEvent('*GID*','T1GN','*IORATIO_T1GN*','T1G');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">无进球</span><span class="bet_all_bet"><span class="bet_all_bg" title="无进球">*IORATIO_T1GN*</span></span></div></td>
                   <td></td>
                </tr>
                <!-- END DYNAMIC BLOCK: T1G -->


             </tbody></table>
             <!---------- T1G ---------->



             <!---------- OG ---------->
            <table id="model_OG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">乌龙球</span><span id="star_OG" name="star_OG" onclick="addFavorites('OG');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OG -->

              <tr class="bet_all_game_h">
                 <td id="*OGY_GID*" onclick="betEvent('*GID*','OGY','*IORATIO_OGY*','OG');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_OGY*</span></span></div></td>
                 <td id="*OGN_GID*" onclick="betEvent('*GID*','OGN','*IORATIO_OGN*','OG');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_OGN*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OG -->

            </tbody></table>
            <!---------- OG ---------->



             <!---------- DU ---------->
           <table id="model_DU_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">双重机会 &amp; 进球 大 / 小</span><span id="star_DU" name="star_DU" onclick="addFavorites('DU');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: DU -->
              <tr class="bet_all_team_title *DISPLAY_DU*">
                  <td>*TEAM_H* / 和局</td>
                  <td>*TEAM_C* / 和局</td>
                  <td>*TEAM_H* / *TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h_line *DISPLAY_DU*">
                 <td id="*DUHO_GID*" onclick="betEvent('*GID*','*DUHO_RTYPE*','*IORATIO_DUHO*','*DU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUHO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUHO*">*IORATIO_DUHO*</span></span></div></td>
                 <td id="*DUCO_GID*" onclick="betEvent('*GID*','*DUCO_RTYPE*','*IORATIO_DUCO*','*DU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUCO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUCO*">*IORATIO_DUCO*</span></span></div></td>
                 <td id="*DUSO_GID*" onclick="betEvent('*GID*','*DUSO_RTYPE*','*IORATIO_DUSO*','*DU_WTYPE*');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUSO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUNO*">*IORATIO_DUSO*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h *DISPLAY_DU*">
                 <td id="*DUHU_GID*" onclick="betEvent('*GID*','*DUHU_RTYPE*','*IORATIO_DUHU*','*DU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUHU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUHU*">*IORATIO_DUHU*</span></span></div></td>
                 <td id="*DUCU_GID*" onclick="betEvent('*GID*','*DUCU_RTYPE*','*IORATIO_DUCU*','*DU_WTYPE*');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUCU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUCU*">*IORATIO_DUCU*</span></span></div></td>
                 <td id="*DUSU_GID*" onclick="betEvent('*GID*','*DUSU_RTYPE*','*IORATIO_DUSU*','*DU_WTYPE*');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*STR_DUSU*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_DUNU*">*IORATIO_DUSU*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: DU -->
           </tbody></table>
           <!---------- DU ---------->




           <!---------- DS ---------->
           <table id="model_DS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">双重机会 &amp; 双方球队进球</span><span id="star_DS" name="star_DS" onclick="addFavorites('DS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: DS -->
              <tr class="bet_all_team_title">
                  <td>*TEAM_H* / 和局</td>
                  <td>*TEAM_C* / 和局</td>
                  <td>*TEAM_H* / *TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*DSHY_GID*" onclick="betEvent('*GID*','DSHY','*IORATIO_DSHY*','DS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_DSHY*</span></span></div></td>
                 <td id="*DSCY_GID*" onclick="betEvent('*GID*','DSCY','*IORATIO_DSCY*','DS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_DSCY*</span></span></div></td>
                 <td id="*DSSY_GID*" onclick="betEvent('*GID*','DSSY','*IORATIO_DSSY*','DS');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_DSSY*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*DSHN_GID*" onclick="betEvent('*GID*','DSHN','*IORATIO_DSHN*','DS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_DSHN*</span></span></div></td>
                 <td id="*DSCN_GID*" onclick="betEvent('*GID*','DSCN','*IORATIO_DSCN*','DS');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_DSCN*</span></span></div></td>
                 <td id="*DSSN_GID*" onclick="betEvent('*GID*','DSSN','*IORATIO_DSSN*','DS');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_DSSN*</span></span></div></td>
              </tr>

              <!-- END DYNAMIC BLOCK: DS -->
           </tbody></table>
           <!---------- DS ---------->




           <!---------- DG ---------->
           <table id="model_DG_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="3"><span class="bet_all_name">双重机会 &amp; 最先进球</span><span id="star_DG" name="star_DG" onclick="addFavorites('DG');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: DG -->
              <tr class="bet_all_team_title">
                  <td>*TEAM_H* / 和局</td>
                  <td>*TEAM_C* / 和局</td>
                  <td>*TEAM_H* / *TEAM_C*</td>
              </tr>

              <tr class="bet_all_game_h_line">
                 <td id="*DGHH_GID*" onclick="betEvent('*GID*','DGHH','*IORATIO_DGHH*','DG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* (最先进球)">*IORATIO_DGHH*</span></span></div></td>
                 <td id="*DGCH_GID*" onclick="betEvent('*GID*','DGCH','*IORATIO_DGCH*','DG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* (最先进球)">*IORATIO_DGCH*</span></span></div></td>
                 <td id="*DGSH_GID*" onclick="betEvent('*GID*','DGSH','*IORATIO_DGSH*','DG');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_H* (最先进球)">*IORATIO_DGSH*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h">
                 <td id="*DGHC_GID*" onclick="betEvent('*GID*','DGHC','*IORATIO_DGHC*','DG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* (最先进球)">*IORATIO_DGHC*</span></span></div></td>
                 <td id="*DGCC_GID*" onclick="betEvent('*GID*','DGCC','*IORATIO_DGCC*','DG');" class="bet_all_three_left_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* (最先进球)">*IORATIO_DGCC*</span></span></div></td>
                 <td id="*DGSC_GID*" onclick="betEvent('*GID*','DGSC','*IORATIO_DGSC*','DG');" class="bet_all_three_2"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C* (最先进球)</span><span class="bet_all_bet"><span class="bet_all_bg" title="*TEAM_C* (最先进球)">*IORATIO_DGSC*</span></span></div></td>
              </tr>

              <!-- END DYNAMIC BLOCK: DG -->
           </tbody></table>
           <!---------- DG ---------->




           <!---------- OUE ---------->
            <table id="model_OUE_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">进球 大 / 小 &amp; 进球 单 / 双</span><span id="star_OUE" name="star_OUE" onclick="addFavorites('OUE');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: OUE -->
              <tr class="bet_all_team_title *DISPLAY_OUE*">
                  <td class="bet_all_col2_w">单</td>
                  <td class="bet_all_col2_w">双</td>
              </tr>

              <tr class="bet_all_game_h_line *DISPLAY_OUE*">
                 <td id="*OUEOO_GID*" onclick="betEvent('*GID*','*OUEOO_RTYPE*','*IORATIO_OUEOO*','*OUE_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUEOO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUEOO*">*IORATIO_OUEOO*</span></span></div></td>
                 <td id="*OUEOE_GID*" onclick="betEvent('*GID*','*OUEOE_RTYPE*','*IORATIO_OUEOE*','*OUE_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUEOE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUEOE*">*IORATIO_OUEOE*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h *DISPLAY_OUE*">
                 <td id="*OUEUO_GID*" onclick="betEvent('*GID*','*OUEUO_RTYPE*','*IORATIO_OUEUO*','*OUE_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUEUO*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUEUO*">*IORATIO_OUEUO*</span></span></div></td>
                 <td id="*OUEUE_GID*" onclick="betEvent('*GID*','*OUEUE_RTYPE*','*IORATIO_OUEUE*','*OUE_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUEUE*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUEUE*">*IORATIO_OUEUE*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OUE -->

            </tbody></table>
            <!---------- OUE ---------->




            <!---------- OUP ---------->
            <table id="model_OUP_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">进球 大 / 小 &amp; 最先进球</span><span id="star_OUP" name="star_OUP" onclick="addFavorites('OUP');" class="bet_all_game_star_out"></span></td>
              </tr>


              <!-- START DYNAMIC BLOCK: OUP -->
              <tr class="bet_all_team_title *DISPLAY_OUP*">
                  <td class="bet_all_col2_w">*TEAM_H* (最先进球)</td>
                  <td class="bet_all_col2_w">*TEAM_C* (最先进球)</td>
              </tr>

              <tr class="bet_all_game_h_line *DISPLAY_OUP*">
                 <td id="*OUPOH_GID*" onclick="betEvent('*GID*','*OUPOH_RTYPE*','*IORATIO_OUPOH*','*OUP_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUPOH*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUPOH*">*IORATIO_OUPOH*</span></span></div></td>
                 <td id="*OUPOC_GID*" onclick="betEvent('*GID*','*OUPOC_RTYPE*','*IORATIO_OUPOC*','*OUP_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUPOC*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUPOC*">*IORATIO_OUPOC*</span></span></div></td>
              </tr>
              <tr class="bet_all_game_h *DISPLAY_OUP*">
                 <td id="*OUPUH_GID*" onclick="betEvent('*GID*','*OUPUH_RTYPE*','*IORATIO_OUPUH*','*OUP_WTYPE*');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*STR_OUPUH*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUPUH*">*IORATIO_OUPUH*</span></span></div></td>
                 <td id="*OUPUC_GID*" onclick="betEvent('*GID*','*OUPUC_RTYPE*','*IORATIO_OUPUC*','*OUP_WTYPE*');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*STR_OUPUC*</span><span class="bet_all_bet"><span class="bet_all_bg" title="*STR_OUPUC*">*IORATIO_OUPUC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OUP -->

            </tbody></table>
            <!---------- OUP ---------->




             <!---------- TK ---------->
            <table id="model_TK_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">开球球队</span><span id="star_TK" name="star_TK" onclick="addFavorites('TK');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: TK -->
              <tr class="bet_all_game_h">
                 <td id="*TKH_GID*" onclick="betEvent('*GID*','TKH','*IORATIO_TKH*','TK');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_TKH*</span></span></div></td>

                 <td id="*TKC_GID*" onclick="betEvent('*GID*','TKC','*IORATIO_TKC*','TK');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_TKC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: TK -->

            </tbody></table>
            <!---------- TK ---------->




            <!---------- PA ---------->
            <table id="model_PA_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">点球荣获（除开点球大战）</span><span id="star_PA" name="star_PA" onclick="addFavorites('PA');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: PA -->
              <tr class="bet_all_game_h">
                 <td id="*PAH_GID*" onclick="betEvent('*GID*','PAH','*IORATIO_PAH*','PA');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_PAH*</span></span></div></td>

                 <td id="*PAC_GID*" onclick="betEvent('*GID*','PAC','*IORATIO_PAC*','PA');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_PAC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: PA -->

            </tbody></table>
            <!---------- PA ---------->




            <!---------- OT ---------->
            <table id="model_OT_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">加时赛</span><span id="star_OT" name="star_OT" onclick="addFavorites('OT');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OT -->

              <tr class="bet_all_game_h">
                 <td id="*OTY_GID*" onclick="betEvent('*GID*','OTY','*IORATIO_OTY*','OT');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_OTY*</span></span></div></td>
                 <td id="*OTN_GID*" onclick="betEvent('*GID*','OTN','*IORATIO_OTN*','OT');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_OTN*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OT -->

            </tbody></table>
            <!---------- OT ---------->




            <!---------- RCD ---------->
            <table id="model_RCD_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">红卡（球员）</span><span id="star_RCD" name="star_RCD" onclick="addFavorites('RCD');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: RCD -->
              <tr class="bet_all_game_h">
                 <td id="*RCDH_GID*" onclick="betEvent('*GID*','RCDH','*IORATIO_RCDH*','RCD');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">是</span><span class="bet_all_bet"><span class="bet_all_bg" title="是">*IORATIO_RCDH*</span></span></div></td>

                 <td id="*RCDC_GID*" onclick="betEvent('*GID*','RCDC','*IORATIO_RCDC*','RCD');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">不是</span><span class="bet_all_bet"><span class="bet_all_bg" title="不是">*IORATIO_RCDC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: RCD -->

            </tbody></table>
            <!---------- RCD ---------->





            <!---------- CN ---------->
            <table id="model_CN_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后角球</span><span id="star_CN" name="star_CN" onclick="addFavorites('CN');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: CN -->
              <tr class="bet_all_team_title">
                  <td>最先角球</td>
                  <td>最后角球</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*CNFH_GID*" onclick="betEvent('*GID*','CNFH','*IORATIO_CNFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CNFH*</span></span></div></td>

                 <td id="*CNLH_GID*" onclick="betEvent('*GID*','CNLH','*IORATIO_CNLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CNLH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*CNFC_GID*" onclick="betEvent('*GID*','CNFC','*IORATIO_CNFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CNFC*</span></span></div></td>

                 <td id="*CNLC_GID*" onclick="betEvent('*GID*','CNLC','*IORATIO_CNLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CNLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: CN -->

            </tbody></table>
            <!---------- CN ---------->



            <!---------- CD ---------->
            <table id="model_CD_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">第一张 / 最后一张罚牌</span><span id="star_CD" name="star_CD" onclick="addFavorites('CD');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: CD -->
              <tr class="bet_all_team_title">
                  <td>第一张罚牌</td>
                  <td>最后一张罚牌</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*CDFH_GID*" onclick="betEvent('*GID*','CDFH','*IORATIO_CDFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CDFH*</span></span></div></td>

                 <td id="*CDLH_GID*" onclick="betEvent('*GID*','CDLH','*IORATIO_CDLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_CDLH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*CDFC_GID*" onclick="betEvent('*GID*','CDFC','*IORATIO_CDFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CDFC*</span></span></div></td>

                 <td id="*CDLC_GID*" onclick="betEvent('*GID*','CDLC','*IORATIO_CDLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_CDLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: CD -->

            </tbody></table>
            <!---------- CD ---------->




            <!---------- YC ---------->
            <table id="model_YC_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后界外球</span><span id="star_YC" name="star_YC" onclick="addFavorites('YC');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: YC -->
              <tr class="bet_all_team_title">
                  <td>最先界外球</td>
                  <td>最后界外球</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*YCFH_GID*" onclick="betEvent('*GID*','YCFH','*IORATIO_YCFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_YCFH*</span></span></div></td>

                 <td id="*YCLH_GID*" onclick="betEvent('*GID*','YCLH','*IORATIO_YCLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_YCLH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*YCFC_GID*" onclick="betEvent('*GID*','YCFC','*IORATIO_YCFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_YCFC*</span></span></div></td>

                 <td id="*YCLC_GID*" onclick="betEvent('*GID*','YCLC','*IORATIO_YCLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_YCLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: YC -->

            </tbody></table>
            <!---------- YC ---------->





            <!---------- GA ---------->
            <table id="model_GA_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后球门球</span><span id="star_GA" name="star_GA" onclick="addFavorites('GA');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: GA -->
              <tr class="bet_all_team_title">
                  <td>最先球门球</td>
                  <td>最后球门球</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*GAFH_GID*" onclick="betEvent('*GID*','GAFH','*IORATIO_GAFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_GAFH*</span></span></div></td>

                 <td id="*GALH_GID*" onclick="betEvent('*GID*','GALH','*IORATIO_GALH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_GALH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*GAFC_GID*" onclick="betEvent('*GID*','GAFC','*IORATIO_GAFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_GAFC*</span></span></div></td>

                 <td id="*GALC_GID*" onclick="betEvent('*GID*','GALC','*IORATIO_GALC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_GALC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: GA -->

            </tbody></table>
            <!---------- GA ---------->



            <!---------- ST ---------->
            <table id="model_ST_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后替补</span><span id="star_ST" name="star_ST" onclick="addFavorites('ST');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: ST -->
              <tr class="bet_all_team_title">
                  <td>最先替补</td>
                  <td>最后替补</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*STFH_GID*" onclick="betEvent('*GID*','STFH','*IORATIO_STFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_STFH*</span></span></div></td>

                 <td id="*STLH_GID*" onclick="betEvent('*GID*','STLH','*IORATIO_STLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_STLH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*STFC_GID*" onclick="betEvent('*GID*','STFC','*IORATIO_STFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_STFC*</span></span></div></td>

                 <td id="*STLC_GID*" onclick="betEvent('*GID*','STLC','*IORATIO_STLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_STLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: ST -->

            </tbody></table>
            <!---------- ST ---------->




            <!---------- OS ---------->
            <table id="model_OS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">最先 / 最后越位</span><span id="star_OS" name="star_OS" onclick="addFavorites('OS');" class="bet_all_game_star_out"></span></td>
              </tr>

              <!-- START DYNAMIC BLOCK: OS -->
              <tr class="bet_all_team_title">
                  <td>最先越位</td>
                  <td>最后越位</td>
              </tr>

              <tr class="bet_all_game_h">
                 <td id="*OSFH_GID*" onclick="betEvent('*GID*','OSFH','*IORATIO_OSFH*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_OSFH*</span></span></div></td>

                 <td id="*OSLH_GID*" onclick="betEvent('*GID*','OSLH','*IORATIO_OSLH*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_H*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_h*="">*IORATIO_OSLH*</span></span></div></td>
              </tr>


              <tr class="bet_all_game_h">
                 <td id="*OSFC_GID*" onclick="betEvent('*GID*','OSFC','*IORATIO_OSFC*','SP');" class="bet_all_two_left"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_OSFC*</span></span></div></td>

                 <td id="*OSLC_GID*" onclick="betEvent('*GID*','OSLC','*IORATIO_OSLC*','SP');" class="bet_all_two"><div class="bet_all_div"><span class="bet_all_team">*TEAM_C*</span><span class="bet_all_bet"><span class="bet_all_bg" *title_team_c*="">*IORATIO_OSLC*</span></span></div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: OS -->

            </tbody></table>
            <!---------- OS ---------->



            <!---------- SFS ---------->
            <table id="model_SFS_bak" cellpadding="0" cellspacing="0" border="0" class="bet_all_game_table">
              <tbody><tr class="bet_all_game_tr">
                 <td colspan="2"><span class="bet_all_name">进球球员</span><span id="star_SFS" name="star_SFS" onclick="addFavorites('SFS');" class="bet_all_game_star_out"></span></td>
              </tr>
              <tr class="bet_all_team_title">
                  <td class="bet_all_col2_w">*TEAM_H*</td>
                  <td class="bet_all_col2_w">*TEAM_C*</td>
              </tr>

              <tr class="bet_all_player">
                 <td class="bet_all_player_title"><span>球员</span><tt class="bet_all_player_First">*TITLE_A0*</tt><tt class="bet_all_player_Last">*TITLE_A1*</tt><tt class="bet_all_player_right">*TITLE_A2*</tt></td>
                 <td class="bet_all_player_title"><span>球员</span><tt class="bet_all_player_First">*TITLE_B0*</tt><tt class="bet_all_player_Last">*TITLE_B1*</tt><tt class="bet_all_player_right">*TITLE_B2*</tt></td>
              </tr>

              <!-- START DYNAMIC BLOCK: SFS -->
              <tr class="bet_all_game_h">
                 <td class="bet_all_two_left"><div class="bet_all_div">
                    <span class="bet_all_team_sf">*SFS_NAME_A0*</span>
                    <span class="bet_all_bet_player">
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDA0*" onclick="betEvent('*SFS_GID_A0*','*SFS_RTYPE_A0*','*SFS_IOR_A0*','NFS');" class="bet_all_bg" *title_sfs_name_a0*="">*SFS_IOR_A0*</span></span>
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDA1*" onclick="betEvent('*SFS_GID_A1*','*SFS_RTYPE_A1*','*SFS_IOR_A1*','NFS');" class="bet_all_bg" *title_sfs_name_a0*="">*SFS_IOR_A1*</span></span>
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDA2*" onclick="betEvent('*SFS_GID_A2*','*SFS_RTYPE_A2*','*SFS_IOR_A2*','NFS');" class="bet_all_bg" *title_sfs_name_a0*="">*SFS_IOR_A2*</span></span>
                    </span>
                 </div></td>
                 <td class="bet_all_two"><div class="bet_all_div">
                    <span class="bet_all_team_sf">*SFS_NAME_B0*</span>
                    <span class="bet_all_bet_player">
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDB0*" onclick="betEvent('*SFS_GID_B0*','*SFS_RTYPE_B0*','*SFS_IOR_B0*','NFS');" class="bet_all_bg" *title_sfs_name_b0*="">*SFS_IOR_B0*</span></span>
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDB1*" onclick="betEvent('*SFS_GID_B1*','*SFS_RTYPE_B1*','*SFS_IOR_B1*','NFS');" class="bet_all_bg" *title_sfs_name_b0*="">*SFS_IOR_B1*</span></span>
                       <span class="bet_all_sfs_w"><span id="*RTYPE_SGIDB2*" onclick="betEvent('*SFS_GID_B2*','*SFS_RTYPE_B2*','*SFS_IOR_B2*','NFS');" class="bet_all_bg" *title_sfs_name_b0*="">*SFS_IOR_B2*</span></span>
                    </span>
                 </div></td>
              </tr>
              <!-- END DYNAMIC BLOCK: SFS -->

              <tr class="bet_all_player_btn *DIS_PLAY_MORE_SFS*">
                 <td id="show_more_SFS" colspan="2"><div onclick="SFS_show('more')">显示更多</div></td>
              </tr>
              <tr class="bet_all_player_btn *DIS_PLAY_LESS_SFS*">
                 <td id="show_more_SFS" colspan="2"><div onclick="SFS_show('less')">显示精简</div></td>
              </tr>


           </tbody></table>
           <!---------- SFS ---------->





           </div><!--玩法层-->



      </div><!--白底层-->
      </div>


     </div><!--最外层-->



</body>

</body>

<script type="text/javascript">
	function btnClickEvent(name){
		if(name == "Close"){
			parent.document.getElementById('more_iframe_w').style.display="none";
		}
	}
	//关闭选择联赛弹窗
  	
	function mouseEnter_pointer(){
		
	};
	function mouseOut_pointer(){
		
	};
	function closeClickEvent(){
		parent.document.getElementById('more_iframe_w').style.display="none";
	};
	function mod_OnOut(){
		//alert(1);
		
	};
	function mod_OnOver(){
		
	};
	
//	$("#mod_table span").click(function(){
//		$("#mod_table span").removeClass("bet_all_mark_on").addClass("bet_all_mark_out");
//	});
	function mod_sel(name,obj){
		var lei = $(obj).attr('class');
		//alert(lei);
		$(obj).siblings("span").removeClass("active");
		$(obj).addClass("active");
	};
	function addFavorites(name){
		var lei = $("#star_"+name).attr('class');
		console.log(lei);
		if(lei == "bet_all_game_star_out"){
			$("#star_"+name).attr('class',"bet_all_game_star_on");
		}else{
			$("#star_"+name).attr('class',"bet_all_game_star_out")
		}
	};
	function betEvent(num,name,zhi,title){
		
	};
	 function back(){
		parent.document.getElementById('more_iframe_w').style.display="none";
	};
	
	//window.parent.paramMethod();
	function playCssEvent(name,obj){
		//alert("#mark_"+name);
		var lei = $(obj).find("#mark_"+name).attr("class");
		//alert(lei);
		if(lei == "bet_all_arrow_up"){
			$(obj).find("#mark_"+name).removeClass("bet_all_arrow_up").addClass("bet_all_arrow_down");
		}else{
			$(obj).find("#mark_"+name).removeClass("bet_all_arrow_down").addClass("bet_all_arrow_up");
		}
		
		$("#movie_"+name).toggle();
	}
</script>
</body>
</html>