<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/order.css">
<div id="ord_main">
      <!-- <div class="ord_memu">
        <span id="title_menu" onclick="showMenu('menu')" class="ord_memuBTN">目录</span>
        <span id="title_betslip" onclick="showMenu('betslip')" class="ord_memuBTN">交易单</span>
        <span id="title_mybets" onclick="showMenu('mybets')" class="ord_memuBTN no_margin ord_memuBTN_on">我的注单<span id="count_mybet" class="ord_msg" style="display: none;">0</span></span>
      </div> -->
      <div class="ord_DIV">
        <!--未结算注单-->
        <div class="ord_unsetDIV">
          <div id="unord_setTitle" class="ord_setTitle_off noFloat"><!--关起来class="ord_setTitle_off"-->
            <ul>
              <li>未结算注单</li>
              <li class="ord_setTitle_miniTxt">最新20笔交易</li>
            </ul>
            <!--未結算和已結算 不用秀統計量了-->
            <!--<span id="unord_setNUM" class="ord_setNUM">0</span>-->
          </div>

          <!--没单-->
          <div id="unord_noMyBet" class="ord_noMyBet" style="display:none">您没有未结算注单</div>

          <!--有单-->
          <div id="unord_setTxT" class="ord_setTxT" style="display:none">
            您有注单注单列表
          </div>

          <!--单子钮-->
          <div id="unord_viewG" class="ord_viewG" style="display:none;" onclick="showPage('OpenBets');">
            <span class="ord_viewBTN">查看所有未结算注单</span>
          </div>
        </div>

        <!--已结算注单-->
        <div class="ord_setDIV">
          <div id="ord_setTitle" class="ord_setTitle_off noFloat"><!--关起来class="ord_setTitle_off"-->
            <ul>
              <li>已结算注单</li>
              <li class="ord_setTitle_miniTxt">今日</li>
            </ul>
            <!--未結算和已結算 不用秀統計量了-->
            <!--<span id="ord_setNUM" class="ord_setNUM">0</span>-->
          </div>

          <!--没单-->
          <div id="ord_noMyBet" class="ord_noMyBet" style="display:none;">您今天没有已结算注单.</div>

          <!--有单-->
          <div id="ord_setTxT" class="ord_setTxT" style="display:none;"></div>

          <!--单子钮-->
          <div id="ord_viewG" class="ord_viewG" style="display:none" onclick="showPage('Statement');">
            <span class="ord_viewBTN">查看所有已结算注单</span>
          </div>
        </div>

        <!--弹出遮罩-->
       <!--样板-->
        <!--危险球未确认ord_mybet_dangerN 危险球已确认ord_mybet_dangerY 普通状态ord_mybet_nomal 取消单ord_mybet_cancel-->
        <div id="unsettled_model" style="display:none;">
          <div class="ord_mybet_*BETSTATE*" onclick="Refresh('*CR*');">
            <span class="ord_crossBTN" onclick="showMore('*TYPES*','*BETID*');"></span>

            <div class="ord_betSucc_general_List*SP*">
              <ul class="ord_betArea_wordTop">
                <li class="BlueWordS">*WTYPE*</li>
                <li class="dark_BrownWord *SHOWVS*">*HOME*<tt class="RedWord fatWord">*RATIO_H*</tt><tt class="ord_vWordNO"> v </tt>*AWAY*<tt class="RedWord fatWord">*RATIO_A*</tt> <span class="org_score">*ORGSCORE*</span><span class="BlueWordS">*SCORE*</span></li>
              </ul>

              *BETCONTENT*
            </div>

            <table cellspacing="0" cellpadding="0" class="ord_betSucc_TB">
              <tbody><tr>
                <td width="40%">投注额:</td>
                <td width="60%" class="ord_betSucc_stake Word_Paddright">*STAKE*</td>
              </tr>
              <tr>
                <td>可赢金额:</td>
                <td class="ord_betSucc_stake Word_Paddright">*GOLD*</td>
              </tr>
              <tr>
                <td colspan="2" class="ord_Danger_word">*BETINFO*</td>
              </tr>
            </tbody></table>
          </div>
        </div>
        <div id="settled_model" style="display:none;">
          <div class="ord_mybet_*BETSTATE*">
            <span class="ord_crossBTN" onclick="showMore('*TYPES*','*BETID*');"></span>

            <div class="ord_betSucc_general_List*SP*">
              <ul class="ord_betArea_wordTop">
                <li class="BlueWordS">*WTYPE*</li>
                <li class="dark_BrownWord *SHOWVS*">*HOME*<tt class="RedWord fatWord">*RATIO_H*</tt><tt class="ord_vWordNO"> v </tt>*AWAY*<tt class="RedWord fatWord">*RATIO_A*</tt> <span class="org_score">*ORGSCORE*</span><span class="BlueWordS">*SCORE*</span></li>
              </ul>

              *BETCONTENT*
            </div>

            <table cellspacing="0" cellpadding="0" class="ord_betSucc_TB">
              <tbody><tr>
                <td width="40%">投注额:</td>
                <td width="60%" class="ord_betSucc_stake Word_Paddright">*STAKE*</td>
              </tr>
              <tr>
                <td>赢 / 输:</td>
                <td class="Word_Paddright fatWord *WLCOLORGOLD*">*GOLD*</td>
              </tr>
              <tr>
                <td colspan="2" class="ord_Danger_word *SHOWBETINFO*">*BETINFO*</td>
              </tr>
              <tr class="*SHOWRESULT*">
                <td colspan="2">
                  <ul class="ord_timeEvent noFloat">
                    <li class="*WLCOLOR* ord_timeEventL*SB*">*RESULT*</li>
                    <li class="Word_Paddright ord_timeEventR*SB*">*MS*</li>
                  </ul>
                </td>
              </tr>
            </tbody></table>
          </div>
        </div>

        <div id="betcontent_model" style="display:none;">
          <ul class="ord_betArea_wordBottom *ULCANCEL*">
            <li class="dark_BrownWord *BETICON*">
              <span class="*ICONCLASS*">*CHOOSE* <tt class="RedWord fatWord">*BETRATIO*</tt> @ <span class="*IORCLASS*">*IORATIO*</span></span>
            </li>
          </ul>
        </div>

        <div id="unsettled_detail_model" style="display:none;">
          <div class="ord_winlossDIV *SHOWCANCEL*" id="*MODEL*_detail_model">
            *ALLDETAIL*

            <table cellspacing="0" cellpadding="0" class="ord_betSucc_TB">
              <tbody><tr>
                <td width="40%">投注额:</td>
                <td width="60%" class="ord_betSucc_stake Word_Paddright">*STAKE*</td>
              </tr>
              <tr>
                <td>赢 / 输:</td>
                <td class="Word_Paddright ord_betSucc_stake">*GOLD*</td>
              </tr>
              <tr>
                <td>下注时间:</td>
                <td class="dark_BrownWord Word_Paddright">*BETTIME*</td>
              </tr>
              <tr class="*NOMALSHOW*">
                <td>赛事时间:</td>
                <td class="dark_BrownWord Word_Paddright">*GAMETIME*</td>
              </tr>
              <tr>
                <td>下注单号:</td>
                <td class="dark_BrownWord Word_Paddright">*BETID*</td>
              </tr>
            </tbody></table>

            <span class="ord_viewBTN" onclick="closeMore();">关闭</span>
          </div>
        </div>
        <div id="settled_detail_model" style="display:none;">
          <div class="ord_winlossDIV *SHOWCANCEL*" id="*MODEL*_detail_model">
            *ALLDETAIL*

            <table cellspacing="0" cellpadding="0" class="ord_betSucc_TB">
              <tbody><tr>
                <td width="40%">投注额:</td>
                <td width="60%" class="ord_betSucc_stake Word_Paddright">*STAKE*</td>
              </tr>
              <tr>
                <td>赢 / 输:</td>
                <td class="Word_Paddright fatWord *WLCOLORGOLD*">*GOLD*</td>
              </tr>
              <tr class="*SHOWBETINFO*">
                <td colspan="2">
                  <ul class="ord_timeEvent noFloat">
                    <li class="*WLCOLOR* ord_timeEventL*SB*">*BETINFO*</li>
                    <li class="Word_Paddright ord_timeEventR*SB*">*MS*</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>下注时间:</td>
                <td class="dark_BrownWord Word_Paddright">*BETTIME*</td>
              </tr>
              <tr class="*NOMALSHOW*">
                <td>赛事时间:</td>
                <td class="dark_BrownWord Word_Paddright">*GAMETIME*</td>
              </tr>
              <tr>
                <td>下注单号:</td>
                <td class="dark_BrownWord Word_Paddright">*BETID*</td>
              </tr>
            </tbody></table>

            <span class="ord_viewBTN" onclick="closeMore();">关闭</span>
          </div>
        </div>

        <div id="betdetail_model" style="display:none">
          <div class="ord_winlossG">
            <ul class="ord_betArea_wordTop">
              <li class="BlueWordS">*WTYPE*</li>
              <li class="light_BrownWord upperWord">*LEAGUE*</li>
              <li class="dark_BrownWord *SHOWVS*">*HOME*<tt class="RedWord fatWord">*RATIO_H*</tt><tt class="ord_vWordNO"> v </tt>*AWAY*<tt class="RedWord fatWord">*RATIO_A*</tt> <span class="org_score">*ORGSCORE*</span><span class="BlueWordS">*SCORE*</span></li>
            </ul>

            <ul class="ord_betArea_wordBottom">
              <li class="dark_BrownWord">*CHOOSE* <tt class="RedWord fatWord">*BETRATIO*</tt> @ <tt class="*IORCLASS*">*IORATIO*</tt></li>
              <li class="*COLOR*">*BETDETAIL*</li>
            </ul>
          </div>
        </div>

        <div id="betdetail_model_p" style="display:none">
          <div class="ord_winlossG *ISCANCEL*">
            <ul class="ord_betArea_wordTop">
              <li class="BlueWordS">*WTYPE*</li>
              <li class="light_BrownWord upperWord">*LEAGUE*</li>
              <li class="dark_BrownWord">*HOME*<tt class="RedWord fatWord">*RATIO_H*</tt><tt class="ord_vWordNO"> v </tt>*AWAY*<tt class="RedWord fatWord">*RATIO_A*</tt> <span class="org_score">*ORGSCORE*</span><span class="BlueWordS">*SCORE*</span></li>
              <li class="dark_BrownWord">*CHOOSE* <tt class="RedWord fatWord">*BETRATIO*</tt> @ <tt class="RedWord fatWord">*IORATIO*</tt></li>

              <ul class="ord_timeEvent noFloat *IT*">
                <li class="ord_timeEventL*SB* *COLOR*">*BETDETAIL*</li>
                <li class="ord_timeEventR*SB*">*MS*</li>
              </ul>

              <li class="GrayWord">赛事时间: <tt class="dark_BrownWord">*GAMETIME*</tt></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
    <script type="text/javascript">
      //未结算注单
      $("#unord_setTitle").click(function(){
          //声明注单
          var zhudan = 1;
          var unord_noMyBet
          if(zhudan == 1){
              $("#unord_noMyBet").toggle();
              // if($("#unord_noMyBet").show()){
              //     $(this).siblings('unord_setTitle').removeClass("ord_setTitle_off").addClass("ord_setTitle");
              // }else{
              //     $(this).siblings('unord_setTitle').removeClass("ord_setTitle").addClass("ord_setTitle_off");
              // }
          }else{
              $("#unord_setTxT").toggle();
          }
      });
      //已结算注单
      $("#ord_setTitle").click(function(){
          var zhudan = 1;
          if(zhudan == 1){
              $("#ord_noMyBet").toggle();
          }else{
              $("#ord_noMyBet").toggle();
          }
      });
    </script>