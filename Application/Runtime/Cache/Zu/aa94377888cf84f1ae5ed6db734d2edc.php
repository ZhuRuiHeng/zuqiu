<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta name="Robots" contect="none">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			修改密码
		</title>
		<link rel="stylesheet" href="/Public/css/mem_pass.css"
		type="text/css">
	</head>
	<body id="CHG" onload="onLoads();">
		<script>
			var str_meta = "gb2312";
			var LS = "g";
			var pass = "aabb3388";
		</script>
		<script language="JavaScript" src="/Public/js/zh-cn.js">
		</script>
		<script language="JavaScript" src="/Public/js/mem_chk_pass.js">
		</script>
		<div class="main">
			<h1>
				<span>
					更改密码
				</span>
				<!--<span class="close_box" onClick="window.close();">关闭</span>-->
			</h1>
			<form method="post" onsubmit="return SubChk();" target="chg_pwd">
				<input type="hidden" name="msg" value="">
				<input type="hidden" name="action" value="1">
				<input type="hidden" name="uid" value="">
				<input type="hidden" name="flag" value="1">
				<input type="hidden" name="langx" value="zh-cn">
				<div class="main_bg" id="chg_pwd_main">
					<table border="0" cellpadding="0" cellspacing="0" class="main_bg_w">
						<tbody>
							<tr>
								<td class="text_box">
									<div class="text_1">
										为了您的帐户安全, 我们强烈建议修改密码.
									</div>
									<div class="text_2">
										说明：
									</div>
									<div class="text_3">
										<tt>
											<strong>
												1.
											</strong>
										</tt>
										您的新密码必须由 6-12个字母和数字 (A-Z 或 0-9)组成.
									</div>
									<div class="text_4">
										<tt>
											<strong>
												2.
											</strong>
										</tt>
										您的新密码不能和现用密码相同.
									</div>
								</td>
							</tr>
							<tr>
								<td class="keyin">
									<p>
										<span class="keyin_txt">
											现用密码
										</span>
										<input type="PASSWORD" id="oldpassword" name="oldpassword" value="" size="12"
										maxlength="12" class="txt" onfocus="inputFocus(this,'oldpassword');" onblur="inputBlur(this,'oldpassword');">
									</p>
									<p>
										<span class="keyin_txt">
											新密码
										</span>
										<input type="PASSWORD" id="password" name="password" value="" size="12"
										maxlength="12" class="txt" onfocus="inputFocus(this,'password');" onblur="inputBlur(this,'password');">
									</p>
									<p>
										<span class="keyin_txt">
											确认新密码
										</span>
										<input type="PASSWORD" id="REpassword" name="REpassword" value="" size="12"
										maxlength="12" class="txt" onfocus="inputFocus(this,'REpassword');" onblur="inputBlur(this,'REpassword');">
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<div id="err_info" class="err_info" style="display:none;">
						<font id="hr_info">
							请输入现用密码.
						</font>
					</div>
					<div class="foot">
						<input type="button" name="cancel" value="取消" class="no" onclick="do_cancel('1');">
						<input type="submit" name="OK" value="提交" class="yes">
						<input name="day" type="button" value="30天候再提醒" style="display:none;">
					</div>
				</div>
				<!--现已推出密码恢复-->
				<div class="mail_main Smail_h" id="SetMyEmail" style="display:none;">
					<table border="0" cellpadding="0" cellspacing="0" class="mail_table">
						<tbody>
							<tr>
								<td>
									<div class="for_chtext_2">
										现已推出密码恢复
									</div>
									<div class="maill_title2">
										请注册您的电子邮件以使用忘记密码功能。
									</div>
								</td>
							</tr>
							<tr>
								<td class="mail_err_td" style="display:none;">
									<div id="err_info" class="mail_err_info">
										<font id="msg_err">
											您输入的帐户或登入帐号跟电子邮件不匹配, 请再尝试输入。
										</font>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="changeBTN">
						<input type="button" name="cancel" value="关闭" onclick="do_cancel('1');"
						class="chg_no">
						<input id="go_setEmail" type="button" value="现在注册" onclick="set_Email();"
						class="chg_yes">
					</div>
				</div>
				<iframe id="chg_pwd" name="chg_pwd" scrolling="NO" frameborder="NO" border="0"
				width="200" height="0" allowtransparency="true" style="display: none;">
				</iframe>
			</form>
		</div>
	</body>

</html>