<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<form id="myform" method="post" onsubmit="return SubChk();" target="chg_pwd">
        <input type="hidden" name="msg" value="">
        <input type="hidden" name="action" value="1">
        <input type="hidden" name="uid" value="">
        <input type="hidden" name="flag" value="1">
        <input type="hidden" name="langx" value="zh-cn">
    <div class="acc_leftMain">
        <!--header-->
        <div class="acc_header noFloat"><h1>更改密码</h1></div>
        
        <!--main-->
        <div class="acc_password_DataMain" id="chg_pwd_main" style="display:;">
            <ul>
                <li>为了您的帐户安全,  我们强烈建议修改密码.</li>
                <li>说明：</li>
                <li>1. 您的新密码必须由 6-12个字母和数字 (A-Z 或 0-9)组成.</li>
                <li class="acc_lastli">2. 您的新密码不能和现用密码相同.</li>
            </ul>
            
            <table cellspacing="0" cellpadding="0" class="acc_passwordTB">
              <tbody>
                  <tr>
                    <td>现用密码</td>
                    <td><input id="oldpassword" name="oldpassword" type="password" class="acc_password_txt"></td>
                  </tr>
                  <tr>
                    <td>新密码</td>
                    <td><input id="password" name="password" type="password" class="acc_password_txt"></td>
                  </tr>
                  <tr>
                    <td>确认新密码</td>
                    <td><input id="REpassword" name="REpassword" type="password" class="acc_password_txt"></td>
                  </tr>
                   <tr>
                  <td colspan="2" id="err_info" style="display:none;">
                  <div class="acc_err_info"><font id="hr_info">请输入现用密码.</font></div>
                  </td>
                  </tr>
                  <tr>
                  <td colspan="2">
                    <span class="acc_passCancelBTN" onclick="do_cancel1('1');">取消</span>
                    <span class="acc_passSubmitBTN" onclick="do_submit1();">提交</span>
                  </td>
                  </tr>
                </tbody>
            </table>
            <input type="submit" id="OK" name="OK" style="display:none">
        </div>

      <!-- 密码恢复 -->
      <div class="acc_password_forMain" id="SetMyEmail" style="display:none;">
        <ul>
          <li class="big_title">现已推出密码恢复</li>
          <li>请注册您的电子邮件以使用忘记密码功能。</li>
        </ul>
        
          <div class="acc_fgBTNG noFloat">
            <span class="acc_passCancelBTN" onclick="do_cancel2('1');">关闭</span>
            <span id="go_setEmail" class="acc_passSubmitBTN" onclick="parent.order.linkEvent('set_email');">现在注册</span>
          </div>

      </div>
        
    </div> 
    </form>
    <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
    <script type="text/javascript">
        function do_cancel1(){
            $("#chg_pwd_main").hide();
        };
        function do_submit1(){
            $("#chg_pwd_main").hide();
            $("#SetMyEmail").show();
        }
    </script>