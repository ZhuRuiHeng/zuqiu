<?php if (!defined('THINK_PATH')) exit();?>
	<link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
<style>
  .coffee{
      background: #725945;
  }
  .wt{
      background: #FFF;
  }
</style>
<!-- 公共头部 -->
 <tr class="wt">
  <td id="header" class="index_headTD" colspan="3" url="">
    <div>
      <div class="head_main noFloat">
        <!--帐户区-->
        <div class="head_accDIV">
          <span class="head_acc">
            <span id="sel_div_acc" class="head_accBTN">
            </span>
            <!--将按钮图案取出-->
            <div id="div_acc" class="head_MINImenu" style="display:none" onmouseleave="hideDiv('div_acc');"
            tabindex="100">
              <span class="head_MINImenu_arr">
              </span>
              <h1>
                我的帐户
              </h1>
              <ul class="head_MINIul">
                <li id="hide_balance" onclick="showDiv('div_acc');setBalanceVisible(false);"
                onmouseover="showOn(this);" onmouseout="showOut(this);">
                  隐藏余额
                </li>
                <li id="show_balance" onclick="showDiv('div_acc');setBalanceVisible(true);"
                style="display:none;" onmouseover="showOn(this);" onmouseout="showOut(this);">
                  显示余额
                </li>
                <li onclick="showDiv('div_acc');showMyAccount('Account');" onmouseover="showOn(this);"
                onmouseout="showOut(this);">
                  详细设定
                </li>
                <li onclick=" showDiv('div_acc');showMyAccount('setEmail');" onmouseover="showOn(this);"
                onmouseout="showOut(this);">
                  密码恢复
                  <span id="mail_status" class="head_annouTD_new">
                  </span>
                </li>
                <li onclick="showDiv('div_acc');showMyAccount('ChgPass');" onmouseover="showOn(this);"
                onmouseout="showOut(this);">
                  更改密码
                </li>
                <li onclick="logOut('http://66.133.87.20');" onmouseover="showOn(this);"
                onmouseout="showOut(this);">
                  退出
                </li>
              </ul>
            </div>
          </span>
          <div class="head_cre">
            <h1 id="head_cre">
              heming1
            </h1>
            <!--隐藏余额class="head_hideCre"-->
            <h2 id="credit">
              人民币 100
            </h2>
            <span class="head_refresh" onclick="reloadCrditFunction();">
            </span>
          </div>
        </div>
        <div class="head_Right noFloat">
          <!--功能按钮区-->
          <ul id="head_MINI" class="head_OUTmenu noFloat CN">
            <li class="head_lan no_margin" title="语言转换">
              <span id="sel_div_langx" class="head_lanBTN">
              </span>
              <!--将按钮图案取出-->
              <span class="head_lanTxt">
                简
              </span>
              <div id="div_langx" class="head_MINImenu" style="display:none" onmouseleave="hideDiv('div_langx');"
              tabindex="100">
                <span class="head_MINImenu_arr">
                </span>
                <h1>
                  语言
                </h1>
                <ul class="head_MINIul">
                  <li class="head_en" onclick="showDiv('div_langx');changeLangx('en-us')"
                  onmouseover="showOn(this);" onmouseout="showOut(this);">
                    English
                  </li>
                  <li class="head_tw" onclick="showDiv('div_langx');changeLangx('zh-tw')"
                  onmouseover="showOn(this);" onmouseout="showOut(this);">
                    繁体
                  </li>
                  <li class="head_cn" onclick="showDiv('div_langx');changeLangx('zh-cn')"
                  onmouseover="showOn(this);" onmouseout="showOut(this);">
                    简体
                  </li>
                  <li style="display:none" class="head_kr" onclick="showDiv('div_langx');changeLangx('ko-kr')"
                  onmouseover="showOn(this);" onmouseout="showOut(this);">
                    한국어
                  </li>
                </ul>
              </div>
            </li>
            <li class="head_help" title="帮助">
              <span id="sel_div_help" class="head_helpBTN">
              </span>
              <!--将按钮图案取出-->
              <div id="div_help" class="head_MINImenu" style="display:none" onmouseleave="hideDiv('div_help');"
              tabindex="100">
                <span class="head_MINImenu_arr">
                </span>
                <h1>
                  帮助
                </h1>
                <ul class="head_MINIul">
                  <li onclick="showDiv('div_help');showMyAccount('Rules');" onmouseover="showOn(this);"
                  onmouseout="showOut(this);">
                    体育规则
                  </li>
                  <li onclick="showDiv('div_help');showMyAccount('Terms');" onmouseover="showOn(this);"
                  onmouseout="showOut(this);">
                    规则与条款
                  </li>
                  <li onclick="showDiv('div_help');showMyAccount('NewFeatures');" onmouseover="showOn(this);"
                  onmouseout="showOut(this);">
                    新功能
                  </li>
                  <li onclick="showDiv('div_help');showMyAccount('OddsConversion');" onmouseover="showOn(this);"
                  onmouseout="showOut(this);">
                    赔率计算列表
                  </li>
                </ul>
              </div>
            </li>
            <li class="head_con" onclick="showDiv('');showMyAccount('Contactus');"
            title="联系我们">
            </li>
            <li id="head_live" style="disply:none" class="head_live" onclick="showDiv('');showLive();"
            title="在线直播">
            </li>
            <li id="head_ann" class="head_ann" title="公告">
              <span id="head_annBTN" class="head_annGIF" onclick="showDiv('annou');">
                <span id="count_ann" class="head_annMINI">
                  5
                </span>
              </span>
              <!--将按钮图案取出-->
              <span id="head_ann_arr" class="head_MINImenu_arr" style="display:none">
              </span>
              <iframe id="annou" name="annou" class="head_annouDIV" style="display:none;"
              onmouseleave="hideDiv('annou');">
              </iframe>
            </li>
          </ul>
          <ul class="head_Left">
            <li class="head_time" id="head_date" style="">
              <span id="head_year" class="head_space">
                2017年
              </span>
              <span id="head_month" class="head_space">
                6月
              </span>
              <span id="head_day" class="head_space">
                28日
              </span>
              <span id="head_hour">
                09
              </span>
              :
              <span id="head_min">
                09
              </span>
            </li>
            <li id="chg_site">
              切换至旧版
            </li>
            <li id="btn_openbets">
              交易状况
            </li>
            <li id="btn_history">
              帐户历史
            </li>
            <li id="btn_result">
              赛果
            </li>
          </ul>
        </div>
      </div>
      <div>
        <div id="showURL">
        </div>
        <iframe id="memOnline" name="memOnline" height="0" width="0" style="display:none;">
        </iframe>
        <iframe id="reloadPHP" name="reloadPHP" width="0" height="0" style="display:none;">
        </iframe>
        <iframe id="reloadPHP1" name="reloadPHP1" width="0" height="0" style="display:none;">
        </iframe>
      </div>
    </div>
  </td>
</tr>

<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
    
</script>