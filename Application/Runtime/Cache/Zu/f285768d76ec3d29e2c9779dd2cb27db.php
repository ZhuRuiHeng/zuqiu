<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body id="OHIS" class="bodyset" onselectstart="self.event.returnValue=false" oncontextmenu="self.event.returnValue=false;window.event.returnValue=false;">
<div style="display:none">
<div id="ord" class="ord">
<div class="title"><h1>最新十笔交易</h1><div class="tiTimer" onclick="re_load();"></div></div>
  <div id="show" class="show">
  <!-- BEGIN DYNAMIC BLOCK: row -->
  <input id="pending_tid" type="hidden" value="">
    <div class="tname"><!--em>{ADDTIME}</em><br-->
	    <div style="display:{SHOW_START_P}">
	  		<div onclick="show_tname('{RECID}');">
	  			<span style="cursor:pointer;" class="parlay_span"><b>过关&nbsp;&nbsp;</b>({P_COUNT} 串 1)</span>
	  			<span id="icon_show_{SHOWID}" class="icon_show" style="display:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  			<span id="icon_close_{CLOSEID}" class="icon_close" style="display:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	   		</div>
	  		<div class="order_line"></div>
	  	</div>
		  <div>
				<em id="tname_{TNAMEID}" style="display:{SHOW_TNAME}" class="tname_em"><span class="ord_danger_load" style="{DG_LOADING}"></span>{TNAME}</em>
		    <span class="gold_span"><span>{STAKE}</span> <span class="fin_gold">{GOLD}</span></span>
		    <div {error_style}="">{ERROR_STR}</div>
		    {P_OTHER}
		  </div>
    </div>
  <!-- END DYNAMIC BLOCK: row -->
  </div>
  </div>
</div>
<div id="no_game" style="display:" class="show_info"><span class="show_top"></span>您没有未结算的交易。</div>


<script>parent.refresh_var='N';
parent.tenrec_id='';
</script></body>
</html>