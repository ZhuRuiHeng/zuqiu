<?php if (!defined('THINK_PATH')) exit();?><body>
<html>
<link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
<link rel="stylesheet" type="text/css" href="/Public/css/order.css">
<div class="ord_main" id="div_ord_main">
    <!-- <div class="ord_memu">
      <span id="title_menu" onclick="showMenu('menu')" class="ord_memuBTN_on">目录</span>
      <span id="title_betslip" onclick="showMenu('betslip')" class="ord_memuBTN">交易单</span>
      <span id="title_mybets" onclick="showMenu('mybets')" class="ord_memuBTN no_margin">我的注单<span id="count_mybet" class="ord_msg">0</span></span>
    </div> -->
    <!--menu-->
    <div id="div_menu" name="div_menu" class="ord_DIV">
      <!--过关下注数-->
      <div id="show_parlay" class="ord_parlyG noFloat" onclick="showMenu('betslip')" style="display:none">
       <ul><li>过关串数</li></ul>
       <span id="count_parlay" class="ord_parlyNUM">0</span>
      </div>

      <!--滚球区-->
      <div id="euro_open" style="display:block;" class="ord_sportMenu_InPlayG">
        <h1>滚球中</h1>
          <div id="div_rb" class="ord_sportMenu_InPlay">
	          <div id="FT_div_rb"  class="ord_sportFT_nor_off noFloat" onclick="Go_RB_page('FT',this);"><span class="ord_sportName">足球</span><span id="RB_FT_games" class="ord_sportDigit">22</span></div>
	          <div id="BK_div_rb" class="ord_sportBK_nor_off noFloat" onclick="Go_RB_page('BK',this);"><span class="ord_sportName">篮球 &amp; 美式足球</span><span id="RB_BK_games" class="ord_sportDigit">7</span></div>
	          <div id="TN_div_rb"  class="ord_sportTN_nor_off noFloat" onclick="Go_RB_page('TN',this);"><span class="ord_sportName">网球</span><span id="RB_TN_games" class="ord_sportDigit">0</span></div>
	          <div id="VB_div_rb"  class="ord_sportVB_nor_off noFloat" onclick="Go_RB_page('VB',this);"><span class="ord_sportName">排球</span><span id="RB_VB_games" class="ord_sportDigit">0</span></div>
	          <div id="BM_div_rb"  class="ord_sportBM_nor_off noFloat" onclick="Go_RB_page('BM',this);"><span class="ord_sportName">羽毛球</span><span id="RB_BM_games" class="ord_sportDigit">1</span></div>
	          <div id="TT_div_rb"  class="ord_sportTT_nor_off noFloat" onclick="Go_RB_page('TT',this);"><span class="ord_sportName">乒乓球</span><span id="RB_TT_games" class="ord_sportDigit">0</span></div>
	          <div id="BS_div_rb"  class="ord_sportBS_nor_off noFloat" onclick="Go_RB_page('BS',this);"><span class="ord_sportName">棒球</span><span id="RB_BS_games" class="ord_sportDigit">0</span></div>
	          <div id="SK_div_rb"  class="ord_sportSK_nor_off noFloat" onclick="Go_RB_page('SK',this);"><span class="ord_sportName">斯诺克/台球</span><span id="RB_SK_games" class="ord_sportDigit">0</span></div>
	          <div id="OP_div_rb"  class="ord_sportOT_nor_off noFloat" onclick="Go_RB_page('OP',this);"><span class="ord_sportName">其他</span><span id="RB_OP_games" class="ord_sportDigit">0</span></div> 
         </div>
        <div id="RB_nodata" style="display:block;" class="ord_noInPlay">现在没有进行的赛事</div><!--没赛-->
      </div>

      <!-- 特殊赛事 -->
      <div id="sp_game" style="display: none;" class="ord_sportMenu_WorldCupG" >
          <h1 id="sp_name">国际足联联合会杯2017</h1>

          <div id="sp_show" class="ord_sportMenu_WorldCup">
                <div id="sp_game_RB" style="display:block"  onclick="goToSPGame('RB','FT');" class="noFloat"><span class="ord_sportName">滚球赛事</span><span class="ord_sportDigitWC">0</span></div>
              <div id="sp_game_FT" style="display:block"  onclick="goToSPGame('FT','FT');" class="noFloat"><span class="ord_sportName">今日赛事</span><span class="ord_sportDigitWC">0</span></div>
              <div id="sp_game_FU" =""="" onclick="goToSPGame('FU','FT');" class="noFloat"><span class="ord_sportName">早盘赛事</span><span class="ord_sportDigitWC">4</span></div>
              <div id="sp_game_P3" =""="" onclick="goToSPGame('P3','FT');" class="noFloat"><span class="ord_sportName">综合过关</span><span class="ord_sportDigitWC">2</span></div>
              <div id="sp_game_FS" =""="" onclick="goToSPGame('FS','FT');" class="noFloat"><span class="ord_sportName">冠军盘口</span><span class="ord_sportDigitWC">1</span></div>
          </div>

          <div id="sp_model" style="display:none;">
                <div id="sp_game_RB"  onclick="goToSPGame('RB','*GTYPE*');" class="noFloat"><span class="ord_sportName">滚球赛事</span><span class="ord_sportDigitWC">*RB_COUNT*</span></div>
              <div id="sp_game_FT"  onclick="goToSPGame('FT','*GTYPE*');" class="noFloat"><span class="ord_sportName">今日赛事</span><span class="ord_sportDigitWC">*FT_COUNT*</span></div>
              <div id="sp_game_FU"  onclick="goToSPGame('FU','*GTYPE*');" class="noFloat"><span class="ord_sportName">早盘赛事</span><span class="ord_sportDigitWC">*FU_COUNT*</span></div>
              <div id="sp_game_P3"  onclick="goToSPGame('P3','*GTYPE*');" class="noFloat"><span class="ord_sportName">综合过关</span><span class="ord_sportDigitWC">*P3_COUNT*</span></div>
              <div id="sp_game_FS"  onclick="goToSPGame('FS','*GTYPE*');" class="noFloat"><span class="ord_sportName">冠军盘口</span><span class="ord_sportDigitWC">*FS_COUNT*</span></div>
          </div>

      </div>
      <!-- 特殊赛事 End -->



      <!-- 精选赛事 -->
      <div id="hot_game" style="display: none;" class="ord_sportMenu_highG">
          <h1 id="hot_name">精选赛事</h1>

          <div id="hot_show" class="ord_sportMenu_high">
              <div class="ord_sportFT_high noFloat" =""="" onclick="showHotDiv('FT');"> <!-- class="ord_sportFT_high noFloat" -->
                <span class="ord_sportName"><span class="ordH3">足球</span><span class="ordH4">亚洲赛事</span></span><span id="arrow_FT" class="ord_sportArr" =""=""></span>
              </div>
              <ul id="hot_div_FT" style="display:block">
                <li id="hot_game_RB_FT"  onclick="goToHotGame('RB','FT');"><h5>滚球赛事</h5><h6>2</h6></li>
                <li id="hot_game_FT_FT"  onclick="goToHotGame('FT','FT');"><h5>今日赛事</h5><h6>40</h6></li>
                <li id="hot_game_FU_FT"  onclick="goToHotGame('FU','FT');"><h5>早盘赛事</h5><h6>8</h6></li>
                <li id="hot_game_P3_FT"  onclick="goToHotGame('P3','FT');"><h5>综合过关</h5><h6>25</h6></li>
                <li id="hot_game_FS_FT" style="display:block" =""="" onclick="goToHotGame('FS','FT');"><h5>冠军盘口</h5><h6>0</h6></li>
              </ul>
          </div>

          <div id="hot_model" style="display:none;">
              <div *gtype_style*="" onclick="showHotDiv('*GTYPE*');"> <!-- class="ord_sportFT_high noFloat" -->
                <span class="ord_sportName"><span class="ordH3">*GTYPE_NAME*</span><span class="ordH4">*GAME_NAME*</span></span><span id="arrow_*GTYPE*" *arrow_class*=""></span>
              </div>
              <ul id="hot_div_*GTYPE*" *div_display*="">
                <li id="hot_game_RB_*GTYPE*" *rb_display*="" onclick="goToHotGame('RB','*GTYPE*');"><h5>滚球赛事</h5><h6>*RB_COUNT*</h6></li>
                <li id="hot_game_FT_*GTYPE*" *ft_display*="" onclick="goToHotGame('FT','*GTYPE*');"><h5>今日赛事</h5><h6>*FT_COUNT*</h6></li>
                <li id="hot_game_FU_*GTYPE*" *fu_display*="" onclick="goToHotGame('FU','*GTYPE*');"><h5>早盘赛事</h5><h6>*FU_COUNT*</h6></li>
                <li id="hot_game_P3_*GTYPE*" *p3_display*="" onclick="goToHotGame('P3','*GTYPE*');"><h5>综合过关</h5><h6>*P3_COUNT*</h6></li>
                <li id="hot_game_FS_*GTYPE*" *fs_display*="" onclick="goToHotGame('FS','*GTYPE*');"><h5>冠军盘口</h5><h6>*FS_COUNT*</h6></li>
              </ul>
          </div>

      </div>
      <!-- 精选赛事 End -->



      <!--球类有下拉区-->
      <div class="ord_sportMenu_TodayG">
        <h1>体育</h1>
        <div class="ord_memu2">
            <span id="title_today" onclick="chgShowType('today');" class="ord_memuBTN_on">今日</span>
            <span id="title_early" onclick="chgShowType('early');" class="ord_memuBTN">早盘</span>
            <span id="title_parlay" onclick="chgShowType('parlay');" class="ord_memuBTN no_margin">综合过关</span></div>
        <div id="sportMenu_Today" class="ord_sportMenu_Today">


            <div id="title_FT" style="" onclick="chgTitle('FT');" class="ord_sportFT_off noFloat active"><span class="ord_sportName">足球</span><span id="FT_games" class="ord_sportDigit">249</span></div>
            <ul id="wager_FT" select="wtype_FT_r" class="On" style="display: block;">
                <li id="wtype_FT_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,'');">独赢 &amp; 让球 &amp; 大小</li>
                <li id="wtype_FT_pd" onclick="chgWtype(this.id);chg_type(this.id,parent.FT_lid_type);">波胆</li>
                <li id="wtype_FT_t" onclick="chgWtype(this.id);chg_type(this.id,parent.FT_lid_type);">总入球</li>
                <li id="wtype_FT_f" onclick="chgWtype(this.id);chg_type(this.id,parent.FT_lid_type);">半场 / 全场</li>
                <li id="wtype_FT_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>

            <div id="title_BK" style="" onclick="chgTitle('BK');" class="ord_sportBK_off noFloat"><span class="ord_sportName">篮球 &amp; 美式足球</span><span id="BK_games" class="ord_sportDigit">22</span></div>
            <ul id="wager_BK" select="wtype_BK_r" style="display:none">
                <li id="wtype_BK_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,parent.BK_lid_type);">赛事</li>
                <li id="wtype_BK_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>



            <div id="title_TN" style="" onclick="chgTitle('TN');" class="ord_sportTN_off noFloat"><span class="ord_sportName">网球</span><span id="TN_games" class="ord_sportDigit">10</span></div>
            <ul id="wager_TN" select="wtype_TN_r" style="display:none">
                <li id="wtype_TN_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,'');">赛事</li>
                <li id="wtype_TN_pd35" onclick="chgWtype(this.id);chg_type(this.id,parent.TN_lid_type);">波胆</li>
                <li id="wtype_TN_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>



            <div id="title_VB" style="" onclick="chgTitle('VB');" class="ord_sportVB_off noFloat"><span class="ord_sportName">排球</span><span id="VB_games" class="ord_sportDigit">10</span></div>
            <ul id="wager_VB" select="wtype_VB_r" style="display:none">
                <li id="wtype_VB_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,'');">赛事</li>
                <li id="wtype_VB_pd35" onclick="chgWtype(this.id);chg_type(this.id,parent.VB_lid_type);">波胆</li>
                <li id="wtype_VB_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>


            <div id="title_BM" style="" onclick="chgTitle('BM');" class="ord_sportBM_off noFloat"><span class="ord_sportName">羽毛球</span><span id="BM_games" class="ord_sportDigit">4</span></div>
            <ul id="wager_BM" select="wtype_BM_r" style="display:none">
                <li id="wtype_BM_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,'');">赛事</li>
                <li id="wtype_BM_pd35" onclick="chgWtype(this.id);chg_type(this.id,parent.BM_lid_type);">波胆</li>
                <li id="wtype_BM_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>


            <div id="title_TT" style="display:block;" onclick="chgTitle('TT');" class="ord_sportTT_off noFloat"><span class="ord_sportName">乒乓球</span><span id="TT_games" class="ord_sportDigit">0</span></div>
            <ul id="wager_TT" select="wtype_TT_r" style="display:none">
                <li id="wtype_TT_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,'');">赛事</li>
                <li id="wtype_TT_pd57" onclick="chgWtype(this.id);chg_type(this.id,parent.TT_lid_type);">波胆</li>
                <li id="wtype_TT_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>


            <div id="title_BS" style="" onclick="chgTitle('BS');" class="ord_sportBS_off noFloat"><span class="ord_sportName">棒球</span><span id="BS_games" class="ord_sportDigit">19</span></div>
            <ul id="wager_BS" select="wtype_BS_r" style="display:none">
                <li id="wtype_BS_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,parent.BS_lid_type);">赛事</li>
                <li id="wtype_BS_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>
            
            <div id="title_SK" style="" onclick="chgTitle('SK');" class="ord_sportSK_off noFloat"><span class="ord_sportName">斯诺克/台球</span><span id="SK_games" class="ord_sportDigit">2</span></div>
            <ul id="wager_SK" select="wtype_SK_r" style="display:none">
                <li id="wtype_SK_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,parent.SK_lid_type);">赛事</li>
                <li id="wtype_SK_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>

            <div id="title_OP" style="" onclick="chgTitle('OP');" class="ord_sportOT_off noFloat"><span class="ord_sportName">其他</span><span id="OP_games" class="ord_sportDigit">24</span></div>
            <ul id="wager_OP" select="wtype_OP_r" style="display:none">
                <li id="wtype_OP_r" class="On" onclick="chgWtype(this.id);chg_type(this.id,parent.OP_lid_type);">赛事</li>
                <li id="wtype_OP_fs" onclick="chgWtype(this.id);chg_type(this.id,'');parent.sel_league='';parent.sel_area='';top.hot_game='';" class="no_margin">冠军</li>
            </ul>

        </div>
        <div id="FT_today_nodata" style="display:block;" class="ord_noInSports">今天没有赛事</div><!--没赛-->
        <div id="FT_early_nodata" style="display:block;" class="ord_noInSports">没有可供早盘的赛事</div><!--没赛-->
        <div id="FT_parlay_nodata" style="display:block;" class="ord_noInSports">没有综合过关</div><!--没赛-->
        
        <!--小广告-->
      <div id="hideAD" class="ord_adG">
        <span><img src="/Public/images/member/order_ad03_cn.jpg"></span>
        <span><a href="javascript:;" target="_blank"><img src="/Public/images/member/order_ad01_cn.jpg"></a></span>
        <!--span><a href="http://www.433.com/" target="_blank"><img src="/images/member/order_ad02_tw.jpg"/></a></span-->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">

  // 体育项目折叠
function chgTitle(name){
	$("#sportMenu_Today").find("ul").hide();
	$("#sportMenu_Today>div").removeClass("active");
	$("#title_"+name).addClass("active");
	$("#wager_"+name).toggle();
	var url = "/index.php/Home/Content/"+name;
	window.parent.document.getElementById('body').src=url;
    //alert($("#body").attr('src'));
   
}
 //滚球中
  function Go_RB_page(name,obj){
	  $("#euro_open div.noFloat").removeClass("active");
  	  $(obj).addClass("active");
  	  var url = "/index.php/Home/Content/"+name;
	window.parent.document.getElementById('body').src=url;
}
function chgWtype(id){
	$("#"+id).parent("ul").find("li").removeClass("On");
	$("#"+id).addClass("On");
}
function chg_type(id){
	
};

//window.parent.paramMethod();

</script>
</body>
</html>