<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<style type="text/css">
  .acc_selectMS_options{display: none}
  .shijain{border: none;width: 100%;}
</style>
<div id="div_state" class="acc_leftMain HIS_data">
    <!--header-->
    <div class="acc_header noFloat"><h1>帐户历史</h1></div>
    
      <form method="post" id="myform" onsubmit="return on_Submit()" style="display:none;">
          <input id="gtype" name="gtype" type="hidden">
          <input id="gdate" name="gdate" type="hidden">
          <input id="gdate1" name="gdate1" type="hidden">
      </form> 
        
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
      <div>
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
          $(this).parents(".acc_selectMS_options ").siblings(".acc_selectMS_first").text(zhi);
         // alert(zhi)      
      });
      function searchEvent(){
        console.log("搜索");
      };
  </script>