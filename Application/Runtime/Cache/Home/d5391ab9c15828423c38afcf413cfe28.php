<?php if (!defined('THINK_PATH')) exit();?>
<body >
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
<link rel="stylesheet" type="text/css" href="/Public/css/order.css">
<link rel="stylesheet" type="text/css" href="/Public/css/bet_maincotrol.css">
<link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/live.css">
<form name="LAYOUTFORM" >
<div class="ord_main">
   <div class="ord_DIV">
     

    <!--div class="ord_returnBTN">返回体育项目</div-->
    
		<!--注单文字区-->
		<div class="ord_betAreaG">
			<h1>单一投注</h1>
	    	<div class="ord_noOrder" style="display:block">请把选项加入在您的注单。</div><!--没单文字-->
	    	<!--普通注单--><!--比分改变时ord_betArea_C-->
	    	<div id="ord_bet" class="ord_betArea">
	        <ul class="ord_betArea_wordTop">
	        	<li class="BlueWord">足球 - 冠军</li>
	            <li class="light_BrownWord upperWord">英格兰超级联赛</li>
	            <li class="dark_BrownWord">领头羊在圣诞节2017</li>
	        </ul>
	        <ul class="ord_betArea_wordBottom">
	        	<li class="dark_BrownWord no_margin"><tt>大</tt> <tt class="RedWord fatWord">193.5</tt> <tt style="display:none;" class="RedWord fatWord">+1</tt> @ <span id="ioradio_id" class="redFatWord">0.63</span></li>
	        </ul>
					<div class="ord_Mask" style="display:none"></div><!--不能下注遮罩-->
	      </div>
	        
	        	        
	        
	        <!--注单功能区-->
	      <div class="ord_betFuntion">
	    	<!--手动输入数字-->
	    	<div class="ord_enterNUMG">
	        	<div class="ord_NUM noFloat"><input id="gold" name="gold" type="text" placeholder="投注额"  size="8" maxlength="10"><span class="ord_delBTN" id="order_delBTN"></span>
	            <div class="ord_Mask" style="display:none"></div><!--不能下注遮罩--></div>
	            <div class="ord_SUM"><span class="ord_SUM_L">可赢金额:</span><span id="pc" class="ord_SUM_R">146.16</span></div>
	            
	        </div>
	        
	    	<!--按钮输入数字-->
	    	<div class="ord_enterBTNG noFloat">
	        	<span id="moenyBTN_01" class="">100</span><span id="moenyBTN_02" class="">200</span><span id="moenyBTN_03" class="">500</span><span id="moenyBTN_04" class="">1,000</span><span id="moenyBTN_05" class="">2,500</span><span id="moenyBTN_06" class="off">5,000</span>
	        </div>
	        
	        <!--错误警告-->
	        <div id="ord_warn" class="ord_warnG" style="display:none"><span class="day_text">最低投注额是  人民币 20.</span></div>
	        
	        <!--确定下注区-->
	        <div class="ord_TotalAreaG">
		        	<span id="Submit" class="ord_betBTN" onclick="CountWinGold();">确定交易</span><!--字数两行ord_betBTN02  不能按ord_betBTN_off-->
		            <span id="btnCancel" name="btnCancel" class="ord_cancalBTN" onclick="parent.close_bet();">取消</span>
		            
		            <table cellspacing="0" cellpadding="0" class="ord_TotalTXT">
			              <tbody>
				              <tr>
				                <td width="40%">单注最低:</td>
				                <td width="60%" class="Word_Toright">50</td>
				              </tr>
				              <tr>
				                <td>单注最高:</td>
				                <td class="Word_Toright">3,000</td>
				              </tr>
			            </tbody>
		            </table>
		        </div>
		  </div>  
		</div>
    <!--自动接受更好赔率-->        
		        <div class="ord_AutoOddG noFloat"><input id="autoOdd" name="autoOdd" onclick="onclickReloadAutoOdd()" value="Y" class="ord_checkBox" type="checkbox" style="display: block;"><span>自动接受较佳赔率</span></div>
    
    
    <!--下注成功画面-->
    <div class="ord_betSuccG" style="display:none">
    
    	<div class="ord_checkG noFloat"><input class="ord_checkBox" type="checkbox" id="ord_checkBox"><span>保留选项</span></div>
        <span id="OpenBets" class="ord_cancalBTN" style="display:block">查看我的注单</span>
        <span id="ChkBets" class="ord_cancalBTN">确认</span>
    </div>
    
    
    
    <!--交易遮罩-->
    <div id="confirm_div" class="ord_DIV_Mask" style="display:none" onkeypress="SumbitCheckKey(event)" tabindex="1">
    	<!--交易确认单-->
    	<div id="ord_conf" class="ord_confirmation">
        <h1>投注确认</h1>
        <ul>
        	<li>交易金额: <tt id="confirm_gold" class="dark_BrownWord">50.00</tt></li>
        	<li>可赢金额: <tt id="confirm_wingold" class="GreenWord">45.00</tt></li>
            <li id="confirm_msg">确定进行下注吗?</li>
        </ul>
        <div class="ord_miniBTNG">
        <span id="confirm_bet" onclick="betConfirmEvent();" class="ord_betBTN">确定下注</span>
        <span id="confirm_cancel" onclick="cancelConfirmEvent();" class="ord_cancalBTN">取消</span>
        </div>
        </div>
        
    </div>
    
    
    
    <input type="hidden" name="uid" value="his7v3c8m17041417l3061677">
		<input type="hidden" name="langx" value="zh-cn">
		<input type="hidden" name="active" value="1">
		<input type="hidden" name="line_type" value="4">
		<input type="hidden" name="gid" value="93126">
		<input type="hidden" name="tid" value="">
		<input type="hidden" id="ioradio_fs" name="ioradio_fs" value="4.50">
		<input type="hidden" name="gmax_single" id="gmax_single" value="14280">
		<input type="hidden" name="gmin_single" value="20">
		<input type="hidden" name="singlecredit" value="110000">
		<input type="hidden" name="singleorder" value="55000">
		<input type="hidden" name="restsinglecredit" value="0">
		<input type="hidden" name="wagerstotal" value="110000">
		<input type="hidden" name="restcredit" value="20">
		<input type="hidden" name="pay_type" value="0">
		<input type="hidden" name="gametype" value="FT">
		<input type="hidden" name="rtype" value="FS03">
		<input type="hidden" name="wtype" value="FS">
		<input type="hidden" id="maxgold" name="maxgold" value="1000000">                 
    <input style="display:none;" type="checkbox" id="checkOrder" onclick="onclickReloadTime()" value="10">
     <div id="gWager" style="display: none;position: absolute;"></div>

    

    </div>
</div>
</form>



</body>
    <script src="/Public/js/jquery-1.12.2.js"></script>
    <script type="text/javascript">
      //未结算注单
      $(".ord_enterBTNG span").click(function(){
      	var money = $(this).text();
      	$("#gold").val(money);
      });
      //清除内容
      $("#order_delBTN").click(function(){
      	$("#gold").val('')
      });
     function CountWinGold(){
     		$("#confirm_div").show();
     };
     //确定下注
     function betConfirmEvent(){
     		$("#confirm_div").hide();
     		//判断是否有效错误警告
     		var num = 1;
     		if(num == 1){
     			$(".ord_betSuccG").show();
     		}else{
     			$("#ord_warn").show();
     		}
     		
     		
     }
     function onclickReloadAutoOdd(){
     		
     };
    </script>