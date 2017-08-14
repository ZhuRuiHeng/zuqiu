<?php if (!defined('THINK_PATH')) exit();?><div class="ord_main" id="div_ord_main">
  <div class="ord_memu">
    <span id="title_menu" onclick="showMenu('menu')" class="ord_memuBTN_on">
      目录
    </span>
    <span id="title_betslip" onclick="showMenu('betslip')" class="ord_memuBTN">
      交易单
    </span>
    <span id="title_mybets" onclick="showMenu('mybets')" class="ord_memuBTN no_margin">
      我的注单
      <span id="count_mybet" class="ord_msg" style="display: block;">
        0
      </span>
    </span>
  </div>
  <!--menu-->
  <div id="div_menu" name="div_menu" class="ord_DIV">
    <iframe src="<?php echo U('Index/menu');?>" id="bet_order_frame" name="bet_order_frame" scrolling="NO" frameborder="NO"
    border="0" width="200" height="0" allowtransparency="true" style="display:block;height:inherit;">
    </iframe>
  </div>

  <!--bet slip-->
  <div id="div_betslip" name="div_bet" class="ord_DIV" style="display: none;">
    <!--没单文字-->
    <h1 id="SIN_BET">
      单一投注
    </h1>
    <h1 id="PAR_BET">
      综合过关
    </h1>
    <div id="bet_nodata" class="ord_noOrder" style="">
      请把选项加入在您的注单。
    </div>
    <iframe src="<?php echo U('Index/betslip');?>" id="bet_order_frame" name="bet_order_frame" scrolling="NO" frameborder="NO"
    border="0" width="200" height="0" allowtransparency="true" >
    </iframe>
  </div>
  <!--my bets-->
  <div id="div_mybets" name="div_mybets" class="ord_mainHight" style="display: none;">
    <!--没单-->
    <!--div id="rec5_nodata" class="ord_noMyBet">您没有未结算注单</div-->
    <iframe src="<?php echo U('Index/mybets');?>" id="rec_frame" name="rec_frame" scrolling="no" frameborder="NO"
    border="0" width="200" height="100%" allowtransparency="true">
    </iframe>
  </div>
</div>

<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
  // 目录交易单我的注单切换
  function showMenu(name){
      $(".ord_DIV").hide();
      $("#div_"+name).show();
  }
 // bet_order_frame
</script>