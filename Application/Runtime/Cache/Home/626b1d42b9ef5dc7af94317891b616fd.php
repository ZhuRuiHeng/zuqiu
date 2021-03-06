<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
</head>

<body>
<div class="FG_passAll">
      <div class="FG_title">密码恢复</div>
    <!-- 帐号及电子邮件输入 -->
      <div class="FG_passG" id="div_set_email">
        <h5 class="FG_note"><tt>注意：</tt>您必须已注册密码恢复才能使用此功能。&nbsp;&nbsp;如果您尚未注册电子邮件，请联系您的上线。</h5>
        <h4 class="FG_txt02">请输入以下信息，我们会帮您重置密码。</h4>
        <table cellspacing="0" cellpadding="0" class="FG_TB">
          <tbody><tr>
            <td>
              <span>帐号&nbsp;&nbsp;或&nbsp;&nbsp;登入账号</span>
              <div class="FG_codeG02"><input id="username" type="txt" name="" class="FG_input" onkeydown="key_value(event,'getVerify')"></div>
            </td>
          </tr>
          <tr>
            <td>
              <span>电子邮件</span>
              <div class="FG_codeG"><input id="setEmail" type="txt" name="" class="FG_input" onkeydown="key_value(event,'getVerify')"></div>
            </td>
          </tr>
          <tr>
            <td id="err_info" class="FG_errG" style="display:none;">
              <div class="acc_err_info"><font id="hr_info">ERR</font></div>
            </td>
          </tr>
          <tr>
            <td>
                <input type="button" name="cancel" value="取消" class="FG_calBTN" onclick="do_cancel('2');">
                <input type="submit" name="OK" value="下一步" class="FG_okBTN" onclick="do_submit('getVerify');">
            </td>
          </tr>
        </tbody></table>
      </div>
    
    <!-- 验证码输入 -->
      <div class="FG_passG" id="div_set_verify" style="display: none">
        <!-- <h4 class="FG_txt">验证码已发送到您的电子邮件</h4> -->
        <table cellspacing="0" cellpadding="0" class="FG_TB">
          <tbody><tr>
            <td>
              <span>请输入验证码</span>
              <div class="FG_codeG noFloat">
                <input type="txt" id="myVerify" name="myVerify" class="FG_input codeIP" style="text-transform:uppercase" onkeydown="key_value(event,'chkVerify')">
                <span class="FG_codeBTN" onclick="do_submit('getVerify');">产生验证码</span>
              </div>
            </td>
          </tr>
          <tr id="verify_show_info" style="display:none;">
            <td class="FG_errTD"><div class="acc_err_info"><tt id="verify_info"></tt></div></td>
          </tr>
          <tr>
            <td>
                <input type="button" name="cancel" value="取消" class="FG_calBTN" onclick="do_cancel();">
                <input type="submit" name="OK" value="提交" class="FG_okBTN" onclick="do_submit('chkVerify');">
            </td>
          </tr>
        </tbody></table>
      </div>
    
    
    <!-- 新密码输入 -->
      <div class="FG_passG" id="div_set_pwd" style="display: none">
        <h4 class="FG_txt">请输入新密码</h4>
        <table cellspacing="0" cellpadding="0" class="FG_TB">
          <tbody><tr>
            <td>
              <span>密码</span>
              <div class="FG_codeG"><input type="password" id="passwd" name="passwd" class="FG_input" onkeydown="key_value(event,'setPwd')"></div>
            </td>
          </tr>
          <tr>
            <td>
              <span>确认密码</span>
              <div class="FG_codeG"><input type="password" id="pwd_chk" name="pwd_chk" class="FG_input" onkeydown="key_value(event,'setPwd')"></div>
            </td>
          </tr>
          <tr id="pwd_show_info" style="display:none;">
            <td class="FG_errTD"><div class="acc_err_info"><tt id="pwd_info">请输入现用密码.</tt></div></td>
          </tr>
          <tr>
            <td>
                <input type="button" name="cancel" value="取消" class="FG_calBTN" onclick="do_cancel();">
                <input type="submit" name="OK" value="提交" class="FG_okBTN" onclick="do_submit('setPwd');">
            </td>
          </tr>
        </tbody></table>
      </div>

    <!-- 成功讯息 -->
      <div class="FG_passG" id="div_set_done" style="display: none">
        <h4 class="FG_txt03 txtC">已成功更改密码<br>请使用新密码登入</h4>        
        <input id="to_login" type="submit" name="OK" value="继续登入" class="FG_cunBTN" onclick="do_cancel('2');">
      </div>
    
    </div>


<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
    //居中
    showDiv($('.FG_passAll'));
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
</body>
</html>