<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<style type="text/css">
  .acc_selectMS_options{display: none}
  .shijain{border: none;width: 100%;}
</style>
<div id="div_state" class="acc_leftMain HIS_data">
    <!--header-->
        <div class="acc_header noFloat"><h1>赛果</h1></div>
    
        <form method="post" id="myform" onsubmit="return on_Submit()" style="display:none;">
              <input id="gtype" name="gtype" type="hidden">
              <input id="gdate" name="gdate" type="hidden">
              <input id="gdate1" name="gdate1" type="hidden">
        </form> 
        <!-- 头部 -->
        <div class="acc_state_head">
            <span class="acc_state_title">按体育查看记录</span>
            <ul class="acc_selectMS" onclick="showDiv(this,1);">
              <li id="sel_gtype" name="sel_gtype" value="ALL" class="acc_selectMS_first">所有体育</li>
              <ul id="chose_gtype" class="acc_selectMS_options acc_selectMS_options1">
                  <li id="gtype_ALL" value="ALL">所有体育</li>
                  <li id="gtype_FT" value="FT">足球</li>
                  <li id="gtype_BK" value="BK" class="acc_selectBK">篮球 / 美式足球</li>
                  <li id="gtype_TN" value="TN">网球</li>
                  <li id="gtype_VB" value="VB">排球</li>
                  <li id="gtype_BM" value="BM">羽毛球</li>
                  <li id="gtype_TT" value="TT">乒乓球</li>
                  <li id="gtype_BS" value="BS">棒球</li>
                  <li id="gtype_SK" value="SK">斯诺克/台球</li>
                  <li id="gtype_FS" value="FS">冠军</li>
                  <li id="gtype_OP" value="OP">其他</li>
                </ul>
              </ul>

             <span class="acc_state_date">
                <span class="acc_state_title">日期</span>
                <ul class="acc_selectMS" >
                    <!-- 时间 -->
                    <li id="sel_date_s" name="sel_date_s" value="2017-06-21" class="acc_selectMS_first" onclick="WdatePicker({el:'d12'})">
                      <input class="shijain" type="text" id="d12"  placeholder="开始时间">
                    </li>
                </ul>
            </span>

            <span class="acc_state_to">
                <span class="acc_state_title">到</span>          
                <ul class="acc_selectMS">
                    <li id="sel_date_e" name="sel_date_e" value="2017-06-28" class="acc_selectMS_first" onclick="WdatePicker({el:'d13'})">
                      <input class="shijain" type="text" id="d13" placeholder="结束时间">
                    </li>
                </ul>
            </span>

            <span class="acc_ann_searchBTN" onclick="searchEvent();">搜寻</span>
        </div>
        <!--内容  -->
        <div>
            <!-- 标题 -->
            <table style="width: 100%">
                <tbody cellpadding="0" cellspacing="0" border="0" id="results_tableLine" class="acc_results_table">
                    <tr class="acc_results_tr_title">
                        <td class="acc_results_timew"></td>
                        <td class="acc_results_teamw"></td>
                        <td class="acc_results_otherw">全场</td>
                        <td class="acc_results_otherw">上半场</td>
                        <td class="acc_results_otherw"></td>
                    </tr>
                     <!-- list -->
                     <!-- list1开始 -->
                    <tr class="acc_results_league">
                        <td colspan="5" id="S_107700_2783802" onclick="showLEG('107700');"><span>国际梦想杯U16(在日本)</span></td>
                    </tr>
                    <tr class="acc_result_tr_top" id="TR_107700_2783802">
                        <td rowspan="2" class="acc_result_time">06-14<br>02:00a</td>
                        <td class="acc_result_team">几内亚U16 &nbsp;&nbsp;</td>
                        <td class="acc_result_full"><span class="acc_cont_bold">2</span></td>
                        <td class="acc_result_bg"><span class="acc_cont_bold">1</span></td>
                        <td rowspan="2" class="acc_result_bg"><span class="acc_result_btn" onclick="showResult_new()">所有赛果</span></td>
                     </tr>
                     <tr class="acc_result_tr_other" id="TR_1_107700_2783802">
                        <td class="acc_result_team">美国U16 &nbsp;&nbsp;</td>
                        <td class="acc_result_full"><span class="BlackWord">1</span></td>
                        <td class="acc_result_bg"><span class="BlackWord">0</span></td>
                     </tr>
                     <!-- list1结束 -->
                </tbody>
            </table>
        </div>
        <div class="acc_select_bg" style="z-index: 6">
            <!-- 右侧按钮 -->
            <div class="acc_right_btn">
                <ul class="acc_right_ul">
                   <li class="acc_right_refresh" onclick="dataReload();">刷新</li>
                   <li class="acc_right_close" onclick="closeIframe();">关闭</li>
                   <li class="acc_right_top" onclick="goTop();"><tt>返回顶部</tt></li>
               </ul>
            </div>
            <!-- 右侧按钮结束 -->
            <!-- 弹窗所有赛果 -->
            <div id="div_result_data" class="acc_select_content">
                <table class="acc_select_table_top" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr class="acc_select_title">
                            <td colspan="4">
                               <div class="acc_select_left" id="leagues_name">国际梦想杯U16</div>
                               
                               <div class="acc_select_right">
                                  <span class="acc_select_close" onclick="closeIframe();"></span>       
                               </div>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="4" class="acc_select_text">
                           <div class="acc_select_team"><span id="tean_name_H">几内亚U16</span>  v  <span id="tean_name_C">美国U16</span></div>
                           <span class="acc_select_text_number" id="game_time">2017-06-14 02:00a</span>
                           </td>
                        </tr>
                        <tr id="tr_EGM" class="acc_cont_tr" >
                           <td class="acc_cont_name">60:00 – 74:59 分钟</td>
                           <td id="result_EGM"></td>
                           <td id="score_h_EGM">0</td>
                           <td id="score_c_EGM">1</td>
                        </tr>

                        <tr id="tr_FGM" class="acc_cont_tr" >
                           <td class="acc_cont_name">75:00分钟 - 全场完场</td>
                           <td id="result_FGM"></td>
                           <td id="score_h_FGM">2</td>
                           <td id="score_c_FGM">0</td>
                        </tr>

                        <tr id="tr_GM" class="acc_cont_tr">
                           <td class="acc_cont_name">全场</td>
                           <td id="result_GM"></td>
                           <td id="score_h_GM" class="acc_cont_bold">2</td>
                           <td id="score_c_GM" class="">1</td>
                        </tr>
                    </tbody>
                </table>

                 <table id="tableCorner" class="acc_select_table" cellpadding="0" cellspacing="0" border="0" onclick="">
                    <tbody><tr class="acc_select_tr" onclick="showTR('Corner');">
                       <td colspan="2" class="acc_all_titlew">下个角球</td>
                    </tr>

                    <tr id="tr_RNC1" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第一个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC1">没有角球</td>
                    </tr>
                    <tr id="tr_RNC2" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第二个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC2">没有角球</td>
                    </tr>
                    <tr id="tr_RNC3" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第三个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC3">没有角球</td>
                    </tr>
                    <tr id="tr_RNC4" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第四个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC4">没有角球</td>
                    </tr>
                    <tr id="tr_RNC5" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第五个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC5">没有角球</td>
                    </tr>
                    <tr id="tr_RNC6" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第六个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC6">没有角球</td>
                    </tr>
                    <tr id="tr_RNC7" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第七个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC7">没有角球</td>
                    </tr>
                    <tr id="tr_RNC8" class="acc_cont_two_tr" >
                       <td class="acc_cont_namew">第八个角球</td>
                       <td class="acc_cont_bgw" id="result_typeRNC8">没有角球</td>
                    </tr>
                 </tbody>
                </table>         
            </div>
        </div>
  <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
  <!-- 时间插件 -->
  <script type="text/javascript" src="/Public/js/My97DatePicker/WdatePicker.js"></script>
  <script type="text/javascript">
      //下拉
      function showDiv(obj,id){
          $(obj).children(".acc_selectMS_options").toggle();
      };
      $(".acc_selectMS_options li").click(function() {
         var zhi = $(this).html();
          $(this).parents(".acc_selectMS_options ").siblings(".acc_selectMS_first").text(zhi)
         // alert(zhi)      
      });
      function searchEvent(){
        console.log("搜索");
      };
      //关闭弹窗
      function closeIframe(){
        $(".acc_select_bg").hide();
      }
      //刷新
      function dataReload(){
        console.log("刷新");
      }
       //回到顶部
      function goTop(){
           $("html,body").animate({scrollTop:0}, 500);  
      }
      //所有赛果
      function showResult_new(){
        $(".acc_select_bg").show();
      }
      // 弹窗居中
    showDiv($('.acc_select_bg'));
    function center(obj){
        var windowWidth = document.documentElement.clientWidth;   
        var windowHeight = document.documentElement.clientHeight;   
        var popupHeight = $(obj).height();   
        var popupWidth = $(obj).width();    
        $(obj).css({   
         "position": "absolute",   
         "top": (windowHeight-popupHeight)/2+$(document).scrollTop(),   
         "left": (windowWidth-popupWidth)/2   
        });  
    }
    function showDiv(obj){
        $(obj).show();
        center(obj);
        $(window).scroll(function(){
            center(obj);
        });
        $(window).resize(function(){
            center(obj);
        }); 
     }
  </script>