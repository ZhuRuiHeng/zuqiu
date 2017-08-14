<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<div class="acc_leftMain">
  <!--header-->
    <div class="acc_header noFloat">
          <!--伸缩页码-->
            <div id="acc_pg" class="acc_pageDIV">页 <span id="now_page">1</span>/<span id="total_page">1</span>
                <div id="div_page" class="acc_pageG" style="display:none" tabindex="100">
                <span class="acc_MINImenu_arr"></span>
                    <ul id="page">
                        <li id="page_0" class="acc_pageTitle">页</li>
                        <!--li>1</li>
                        <li>2</li>
                        <li>3</li-->
                    </ul>
                </div>
            </div>
        <span onclick="javascript:reload_var()" class="acc_refreshBTN"></span>
        <span id="cancel_str" onclick="chgCW();" class="acc_CancelWord no_pointer">你有 <span id="cancel_strNUM">(0)</span> 张取消单</span>

        <h1 id="WAGERS">交易状况</h1>
        <h1 id="WAGERS_CANCEL" style="display:none">已取消注单</h1>
        </div>


        <!--no data-->
        <div id="div_nodata">
        <table cellspacing="0" cellpadding="0" class="acc_openbetTB">
              <tbody><tr><!--客户坚持使用px宽度-->
                <th width="38">编号</th>
                <th width="115">注单号 / 投注日期</th>
                <th width="95">投注类型</th>
                <th width="228">选项</th>
                <th width="84">投注额</th>
                <th width="83">可赢金额</th>
                <th width="83">注单状态</th>
              </tr>
         </tbody></table>
        <div class="acc_noData">
           您没有未结算的注单。如果本日已有交易，请查看帐户历史。
        </div>
        </div>

        <!--main-->
        <div id="div_show" style="display:none" class="acc_openbetMain"></div>

        <div id="div_model" style="display:none" class="acc_openbetMain">
          <xmp>
          <table cellspacing="0" cellpadding="0" class="acc_openbetTB">
              <tr><!--客户坚持使用px宽度-->
                <th width="38">编号</th>
                <th width="115">注单号 / 投注日期</th>
                <th width="95">投注类型</th>
                <th width="228">选项</th>
                <th width="84">投注额</th>
                <th width="83">可赢金额</th>
                <th width="83">注单状态</th>
              </tr>


              *CONTENT*
        </table>
              <!--结算-->
              <table cellspacing="0" cellpadding="0" class="acc_openbet_totalTB">

              <tr class="acc_openbet_total_top">
                <td width="476" colspan="4" class="acc_openbet_total_txt">此页面统计:</td>
                <td width="84">*PAGE_GOLD*</td>
                <td width="166" colspan="2"></td>
              </tr>
              <tr class="acc_openbet_total_bottom">
                <td colspan="4" class="acc_openbet_total_txt">总计:</td>
                <td>*TOTAL_GOLD*</td>
                <td colspan="2"></td>
              </tr>
              <tr class="acc_openbet_page">
                <td colspan="7"><div class="acc_openbet_pageDIV noFloat">
                  <div id="P_Page" onClick="chgPageEvent(-1)"  class="acc_openbet_pageBTN"><span id="preBTN" class="acc_openbet_page_preBTN"></span><span class="acc_openbet_page_txt">前一页</span></div>
                    <tt>|</tt>
                    <div id="N_Page" onClick="chgPageEvent(1)" class="acc_openbet_pageBTN"><span class="acc_openbet_page_txt">下一页</span><span id="nextBTN" class="acc_openbet_page_nextBTN"></span></div>
                </div></td>
              </tr>
            </table>

            <!--滑过显示时间日期-->
            <div class="acc_timeDIV" style="display:none">下注日期: July 14, 2015 05:00</div>
           </xmp>
        </div>



        <!------------------------ normal model ------------------------>
        <div id="normal_model" style="display:none">
          <xmp>
            <!-- class="acc_openbet_dangerTR"-->
            <tr *ANNOUCEMENT*>
              <td>*ID*</td>
              <td>*W_ID*<br>*ADDTIME*<br>*ODDF_TYPE*</td>
              <td>*GTYPE*<br>*WTYPE* *W_MS*</td>
              <td class="acc_oddDetailTD" *TILTEL_DATE*>
                <ul class="acc_betArea_wordTop">
                      <li class="BlueWord">*WTYPE_TITLE* *W_MS*</li>
                      <li class="light_BrownWord upperWord">*LEAGUE*</li>
                      <li *DIS_TEAM_N* class="dark_BrownWord">*TEAM_H_SHOW* <tt class="RedWord fatWord">*TEAM_H_RATIO*</tt><tt class="acc_vWord">v</tt> *TEAM_C_SHOW* <tt class="RedWord fatWord">*TEAM_C_RATIO*</tt>  <tt class="org_score">*ORG_SCORE*</tt>  <tt class="BlueWord">*SCORE*</tt></li>
                  </ul>
                  <ul class="acc_betArea_wordBottom">
                      <li class="dark_BrownWord">*RESULT* *PNAME*@ <tt class="RedWord fatWord">*IORATIO*</tt><br>
                      <tt *BALL_ACT_CLASS* *DISPLAY_BALL_ACT*>*BALL_ACT_RET*</tt></li>
                  </ul>
              </td>
              <td class="fatWord">*GOLD*</td>
              <td class="fatWord">*WIN_GOLD*</td>
              <td><tt *DIS_CW_N*>未结算</tt><tt *DIS_CW_Y* class="RedWord">*RESULT_DATA*</tt></td>
            </tr>
          </xmp>
        </div>
        <!------------------------ normal model ------------------------>




        <!------------------------ p model ------------------------>
        <div id="p_model" style="display:none">
          <xmp>
            <tr *ANNOUCEMENT*>
              <td>*ID*</td>
              <td>*W_ID*<br>*ADDTIME*</td>
              <td>*GTYPE*<br>综合过关 *W_MS*</td>
              <td class="acc_oddDetailTD">
                  *SUB_CONTENT*
              </td>
              <td class="fatWord">*GOLD*</td>
              <td class="fatWord">*WIN_GOLD*</td>
              <td><tt *DIS_CW_N*>未结算</tt><tt *DIS_CW_Y* class="RedWord">*RESULT_DATA*</tt></td>
            </tr>
          </xmp>
        </div>


        <div id="p_details_model" style="display:none">
          <xmp>
            <!-- acc_betArea_wordTop -->
            <!--第二个与第一个距离不同要换acc_betArea_wordTop_three-->
            <!--最一个没有底线acc_betArea_wordTop_no_line-->
            <ul *LINE_CLASS* >
                <li class="BlueWord">
                <div class="acc_remind"><span class="acc_remind_txt">*ORDERDATE*</span></div>
                *WTYPE_TITLE* *W_MS*</li>
                <li class="light_BrownWord upperWord">*LEAGUE*</li>
                <li class="dark_BrownWord">*TEAM_H_SHOW* <tt class="RedWord fatWord">*TEAM_H_RATIO*</tt><tt class="acc_vWord">v</tt> *TEAM_C_SHOW* <tt class="RedWord fatWord">*TEAM_C_RATIO*</tt></li>
                <li class="dark_BrownWord">*RESULT* *PNAME*@ <tt class="RedWord fatWord">*IORATIO*</tt>
            </ul>
          </xmp>
        </div>
        <!------------------------ p model ------------------------>

  </div>