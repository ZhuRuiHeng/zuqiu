<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script>
			var liveTV = 'Y';
			var uid = 'tyzgwqspm16963210l3757878';
			var odd_f_type = 'H';
			var odd_f_str = 'H,M,I,E';
			var Format = new Array();
			Format[0] = new Array('H', '香港盘', 'Y');
			Format[1] = new Array('M', '马来盘', 'Y');
			Format[2] = new Array('I', '印尼盘', 'Y');
			Format[3] = new Array('E', '欧洲盘', 'Y');
			var game_gidm = '1762146';
			var gidmstr = ',2844584,,2844585,,2844586,,2844587,';
			var iorpoints = 2;
			var show_ior = 100;
			var title_strbig = '大';
			var title_strsmall = '小';
			var flash_ior_set = 'Y';
			var str_even = '和局';
			var str_submit = '确认';
			var str_reset = '重设';
			var langx = 'zh-cn';
			var GameData = new Array();
			var GameFT = new Array();
			var o_path = './game_ioratio.php?uid=tyzgwqspm16963210l3757878&langx=zh-cn&gtype=FT&gdate=All';
		</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
		</title>
		<link href="/Public/css/mem_betroom.css" rel="stylesheet" type="text/css">
		<script language="javascript" src="/Public/js/game_ioratio.js">
		</script>
		<script language="javascript" src="/Public/js/get_ioratio.js">
		</script>
		<script language="javascript" src="/Public/js/flash_ior_mem.js">
		</script>
	</head>
	<body onload="onloads();">
		<table border="0" cellspacing="0" cellpadding="0" class="box">
			<tbody>
				<tr>
					<td class="game">
						<div id="td_none" style="display:none">
							未选择交易赛事。
						</div>
						<div id="td_nogame" style="display:none">
							无提供交易。
						</div>
						<div id="right_div">
							<!--table width="240" border="0" cellpadding="2" cellspacing="0">
							<tr>
							<td class="mem_league">捷克联赛U21</td>
							</tr>
							<tr>
							<td class="mem_team">布拉格斯拉维亚U21<BR>贾布朗尼U21</td>
							</tr>
							<tr>
							<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
							<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
							<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
							<td align="right">*SELECT_MEM* </td></tr></table>
							</td>
							</tr>
							</table-->
							<div class="top">
								<div id="showtype_FT" class="showtype_w">
									足球
								</div>
								<div class="tiTimer" onclick="javascript:reloadioratio();">
									<span id="timer_FT">
										29&nbsp;
									</span>
								</div>
								<div id="showScore_FT">
									比分: 4 -
									<font color="red">
										1
									</font>
								</div>
							</div>
							<div class="game_tab">
								<!--全场走地 -->
								<table border="0" cellpadding="1" cellspacing="0" class="mem_bg">
									<tbody>
										<tr>
											<th class="h_1x2">
												独赢
											</th>
											<th class="h_r">
												让球
											</th>
											<th class="h_ou">
												大小
											</th>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_re.php?gid=2844584&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10260&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="布拉格斯拉维亚U21">
															<font true="">
															</font>
														</a>
													</span>
												</div>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_rou.php?gid=2844584&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10259&amp;odd_f_type=H&quot;)"
														title="大">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_re.php?gid=2844584&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10259&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="贾布朗尼U21">
															<font true="">
															</font>
														</a>
													</span>
												</div>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_rou.php?gid=2844584&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10260&amp;odd_f_type=H&quot;)"
														title="小">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td colspan="2">
												&nbsp;
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_re.php?gid=2844586&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10262&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="布拉格斯拉维亚U21">
															<font true="">
															</font>
														</a>
													</span>
												</div>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_rou.php?gid=2844586&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10261&amp;odd_f_type=H&quot;)"
														title="大">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_re.php?gid=2844586&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10261&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="贾布朗尼U21">
															<font true="">
															</font>
														</a>
													</span>
												</div>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														<font true="">
														</font>
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_rou.php?gid=2844586&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10262&amp;odd_f_type=H&quot;)"
														title="小">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td colspan="2">
												&nbsp;
											</td>
										</tr>
									</tbody>
								</table>
								<!--上半走地-->
								<table border="0" cellpadding="1" cellspacing="0" class="mem_1st">
									<tbody>
										<tr>
											<th class="h_1x2">
												独赢
											</th>
											<th class="h_r">
												让球
											</th>
											<th class="h_ou">
												大小
											</th>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hre.php?gid=2844585&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10260&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="布拉格斯拉维亚U21">
															<font true="">
															</font>
														</a>
													</span>
													<font true="">
													</font>
												</div>
												<font true="">
												</font>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hrou.php?gid=2844585&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10259&amp;odd_f_type=H&quot;)"
														title="大">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hre.php?gid=2844585&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10259&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="贾布朗尼U21">
															<font true="">
															</font>
														</a>
													</span>
													<font true="">
													</font>
												</div>
												<font true="">
												</font>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hrou.php?gid=2844585&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10260&amp;odd_f_type=H&quot;)"
														title="小">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td colspan="2">
												&nbsp;
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hre.php?gid=2844587&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10262&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="布拉格斯拉维亚U21">
															<font true="">
															</font>
														</a>
													</span>
													<font true="">
													</font>
												</div>
												<font true="">
												</font>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hrou.php?gid=2844587&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10261&amp;odd_f_type=H&quot;)"
														title="大">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
														&nbsp;
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hre.php?gid=2844587&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=C&amp;gnum=10261&amp;strong=H&amp;odd_f_type=H&quot;)"
														title="贾布朗尼U21">
															<font true="">
															</font>
														</a>
													</span>
													<font true="">
													</font>
												</div>
												<font true="">
												</font>
											</td>
											<td>
												<div class="b_rig">
													<span class="con">
													</span>
													<span class="ratio">
														<a href="javascript:void(0);" onclick="gethref(&quot;../FT_order/FT_order_hrou.php?gid=2844587&amp;uid=tyzgwqspm16963210l3757878&amp;langx=zh-cn&amp;type=H&amp;gnum=10262&amp;odd_f_type=H&quot;)"
														title="小">
															<font true="">
															</font>
														</a>
														&nbsp;
													</span>
												</div>
											</td>
										</tr>
										<tr class="b_rig">
											<td>
												<b>
													&nbsp;
												</b>
											</td>
											<td colspan="2">
												&nbsp;
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="table_FT" style="display:none">
			<xmp>
				<!--table width="240" border="0" cellpadding="2" cellspacing="0">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table-->
				<div class="top">
					<div id="showtype_FT" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_FT">
						</span>
					</div>
					<div id="showScore_FT">
					</div>
				</div>
				<div class="game_tab">
					<!--全场走地 -->
					<table border="0" cellpadding="1" cellspacing="0" class="mem_bg">
						<tr>
							<th class="h_1x2">
								独赢
							</th>
							<th class="h_r">
								让球
							</th>
							<th class="h_ou">
								大小
							</th>
						</tr>
						*GAMEDATA*
					</table>
					<!--上半走地-->
					<table border="0" cellpadding="1" cellspacing="0" class="mem_1st">
						<tr>
							<th class="h_1x2">
								独赢
							</th>
							<th class="h_r">
								让球
							</th>
							<th class="h_ou">
								大小
							</th>
						</tr>
						*HGAMEDATA*
					</table>
				</div>
			</xmp>
		</div>
		<div id="table_BK" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="0">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_BK" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_BK">
						</span>
					</div>
					<div id="showScore_BK">
					</div>
				</div>
				<table id="BK" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<tr>
						<td colspan='2' class="mem_colspan">
							全场走地
						</td>
					</tr>
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
					<!--<tr>
					<td colspan='2' class="mem_colspan">上半走地</td>
					</tr>
					<tr>
					<th class="h_r">让球</th>
					<th class="h_ou">大小</th>
					</tr>-->
					*HGAMEDATA*
					<!--<tr>
					<td colspan='2' class="mem_colspan">下半走地</td>
					</tr>
					<tr >
					<th class="h_r">让球</th>
					<th class="h_ou">大小</th>
					</tr>-->
					*SGAMEDATA*
				</table>
			</xmp>
		</div>
		<div id="table_BS" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="0">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_BS" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_BS">
						</span>
					</div>
					<div id="showScore_BS">
					</div>
				</div>
				<table id="BS" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<!--SK-->
		<div id="table_SK" style="display:none">
			<xmp>
				<div class="top">
					<div id="showtype_SK" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_SK">
						</span>
					</div>
					<div id="showScore_SK">
					</div>
				</div>
				<table id="SK" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让局
						</th>
						<th class="h_ou">
							大/小
						</th>
					</tr>
					<tr class="b_1st">
						<td colspan="2">
							全场
						</td>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<!--SK-end-->
		<div id="table_VB" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="2">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_VB" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_VB">
						</span>
					</div>
					<div id="showScore_VB">
					</div>
				</div>
				<table id="VB" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<div id="table_TN" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="2">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_TN" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_TN">
						</span>
					</div>
					<div id="showScore_TN">
					</div>
				</div>
				<table id="TN" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<div id="table_BM" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="2">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_BM" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_BM">
						</span>
					</div>
					<div id="showScore_BM">
					</div>
				</div>
				<table id="BM" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<div id="table_TT" style="display:none">
			<xmp>
				<!--<table width="240" border="0" cellpadding="2" cellspacing="2">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table>-->
				<div class="top">
					<div id="showtype_TT" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_TT">
						</span>
					</div>
					<div id="showScore_TT">
					</div>
				</div>
				<table id="BM" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
					<!--tr>
					<td colspan='2' class="mem_colspan">全场走地</td>
					</tr-->
					<tr>
						<th class="h_r">
							让球
						</th>
						<th class="h_ou">
							大小
						</th>
					</tr>
					*GAMEDATA*
				</table>
			</xmp>
		</div>
		<div id="table_OP" style="display:none">
			<xmp>
				<!--table width="240" border="0" cellpadding="2" cellspacing="0">
				<tr>
				<td class="mem_league">*LEAGUE*</td>
				</tr>
				<tr>
				<td class="mem_team">*TEAM*</td>
				</tr>
				<tr>
				<td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td class="timer"> 			
				<img src="/images/member/live_icon02.gif" border="0"><span id="timer_str"></span>
				<input name="wgCancel" type="button" class="new" onClick="javascript:reloadioratio();" value="更新" ></td>
				<td align="right">*SELECT_MEM* </td></tr></table>
				</td>
				</tr>
				</table-->
				<div class="top">
					<div id="showtype_OP" class="showtype_w">
					</div>
					<div class="tiTimer" onClick="javascript:reloadioratio();">
						<span id="timer_OP">
						</span>
					</div>
					<div id="showScore_OP">
					</div>
				</div>
				<div class="game_tab">
					<!--全场走地 -->
					<table id="OP" border="0" cellpadding="1" cellspacing="0" class="mem_bg">
						<tr>
							<th class="h_r">
								让球
							</th>
							<th class="h_ou">
								大小
							</th>
						</tr>
						*GAMEDATA*
					</table>
					<!--上半走地-->
					<table border="0" cellpadding="1" cellspacing="0" class="mem_1st">
						<tr>
							<th class="h_r">
								让球
							</th>
							<th class="h_ou">
								大小
							</th>
						</tr>
						*HGAMEDATA*
					</table>
				</div>
			</xmp>
		</div>
		<div id="tr_ioratio" style="display:none">
			<xmp>
				<tr class="b_rig">
					<td>
						<b>
							*MH*
						</b>
					</td>
					<td>
						*REH*
					</td>
					<td>
						*ROUH*
					</td>
				</tr>
				<tr class="b_rig">
					<td>
						<b>
							*MC*
						</b>
					</td>
					<td>
						*REC*
					</td>
					<td>
						*ROUC*
					</td>
				</tr>
				<tr class="b_rig">
					<td>
						<b>
							*MN*
						</b>
					</td>
					<td colspan='2'>
						&nbsp;
					</td>
				</tr>
			</xmp>
		</div>
		<div id="tr_ioratio2" style="display:none">
			<xmp>
				<tr class="b_rig">
					<td>
						*REH*
					</td>
					<td>
						*ROUH*
					</td>
				</tr>
				<tr class="b_rig">
					<td>
						*REC*
					</td>
					<td>
						*ROUC*
					</td>
				</tr>
			</xmp>
		</div>
		<div id="tr_ioratio3" style="display:none">
			<xmp>
				<!-- 2017-0206-johnson-2056.新舊會員端-彈出tv&tv視窗-網,排,羽,桌當有開子盤時,同一玩法子盤和母盤只需要一條格線,現在多了一個標題(BGM-303)-->
				*GMAE_MS*
				<tr class="b_rig">
					<td>
						*REH*
					</td>
					<td>
						*ROUH*
					</td>
				</tr>
				<tr class="b_rig">
					<td>
						*REC*
					</td>
					<td>
						*ROUC*
					</td>
				</tr>
			</xmp>
		</div>
		<div id="td_ioratio" style="display:none">
			<xmp>
				<div class="b_rig">
					<span class="con">
						*RATIO*
					</span>
					<span class="ratio">
						*IOR*
					</span>
				</div>
			</xmp>
		</div>
		<iframe id="reloadPHP" name="reloadPHP" src="<?php echo U('Old/ok');?>" style="display:none"
		width="0" height="0">
		</iframe>
	</body>

</html>