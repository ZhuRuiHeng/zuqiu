<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/login.css">
</head>

<body>
<div class="title">
<ul class="language">      
      <li id="lang_cn" class="lang2"><a>简体版</a></li>
      <li id="lang_tw" class="lang"><a href="javascript:;">繁體版</a></li>
      <li id="lang_en" class="lang"><a href="javascript:;">English</a></li>
      <li id="lang_ko" class="lang" style="display:none;"><a href="javascript:;">한국어</a></li>
</ul>
</div>
<div class="mem">
    <div class="index_top_pic" onclick="autoClick();"></div>
    <div class="log">
    <form id="LoginForm" name="LoginForm" action="" method="post">
        <input type="HIDDEN" id="uid" name="uid" value="">
        <input type="HIDDEN" id="langx" name="langx" value="zh-cn">
        <input type="HIDDEN" id="mac" name="mac" value="">
        <input type="HIDDEN" id="ver" name="ver" value="">
        <input type="hidden" id="JE" name="JE" value="false">
        <div id="div_site" class="index_on_btn"><span id="oldspan" class="index_old_btn_out">旧网站</span><span id="newspan" class="index_new_btn">新网站</span></div>
       <div class="bordDIV">
        <table border="0" cellpadding="0" cellspacing="0" class="bord">
                <!--tr>
                    <td class="txt">需登入才能使用服务。</td>
                </tr-->
                <tbody><tr>
                    <td width="6">&nbsp;</td>
                    <td class="index_ID index_line"><img src="/Public/images/member/index_ID.jpg"></td>
                    <td class="index_line place_colorTD">
                     	<input type="text" id="username" size="15" class="place_colorBOX" maxlength="20" tabindex="1" placeholder="登录帐号">
                    	<input type="text" id="username_def" size="15" class="place_color" maxlength="20" tabindex="1" placeholder="登录帐号" >
                    </td>
                    <td width="6">&nbsp;</td>
                </tr>
                <tr>
                    <td width="6">&nbsp;</td>
                    <td class="index_ID"><img src="/Public/images/member/index_pass.jpg"></td>
                    <td class="place_colorTD">
						<input type="password" id="passwd" size="15" class="place_colorBOX" maxlength="20" tabindex="2"  placeholder="密码">
                    	<input type="text" id="passwd_def" size="15" class="place_color" maxlength="20" placeholder="密码"></td>
                    <td width="6">&nbsp;</td>
                </tr>
        </tbody></table>
        </div>
            <div id="err_info" class="err_info" style="display:none;"><font id="hr_info">请输入帐号.</font></div>
            <div class="index_re"><span class="err_position"><!--input type="checkbox" id="remember" class="index_box">记住我的帐号--><label><input type="checkbox" id="remember" class="index_box"><span></span>记住我的帐号</label></span><span class="forTXT" onclick="forgot_pwd();">忘记密码?</span></div>
            <div class="btn"><div class="za_button" onclick="do_login();">登入</div></div>
        </form>
        </div>
        
        <a class="CN banner" href="javascript:;"><span>192.168.1.19</span></a>
         <!-- <div class="CN_banner_festival"></div>  -->
</div>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
	//忘记密码
	function forgot_pwd(){
		window.location.href='<?php echo U('Log/forget');?>'
	};
	//登录
	function do_login(){
		window.location.href='<?php echo U('Index/index');?>'
	}
</script>


</body>
</html>