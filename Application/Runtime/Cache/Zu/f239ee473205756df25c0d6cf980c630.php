<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script language="javascript">
    </script>
    <meta name="Robots" contect="none">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
    </title>
    <link rel="stylesheet" href="/Public/css/mem_pass.css" type="text/css">
    <style type="text/css">
      <!-- iframe { width:0; height:0; border:0; clear:right;} -->
    </style>
    <script language="JavaScript" src="/Public/js/zh-cn.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="/Public/js/HttpRequest.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="/Public/js/setEmail.js">
    </script>
    <script>
      var langx = 'zh-cn';
      var uid = 'tyzgwqspm16963210l3757878';
    </script>
  </head>
  <body oncontextmenu="window.event.returnValue=false" bgcolor="#FFFFFF"
  text="#000000" leftmargin="0" topmargin="0" id="PWD" onload="onLoads();">
    <div class="for_mail">
      <h1>
        <span>
          密码恢复
        </span>
      </h1>
      <!--电子邮件-->
      <div class="mail_main email_h" id="div_set_email">
        <table border="0" cellpadding="0" cellspacing="0" class="mail_table">
          <tbody>
            <tr>
              <td>
                <div class="for_chtext_1">
                  请输入您要使用于密码恢复的电子邮件地址。
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <span class="maill_title">
                  电子邮件
                </span>
                <input id="setEmail" name="setEmail" type="text" placeholder="" class="for_maill_txt"
                onkeydown="key_value(event,'getVerify')">
              </td>
            </tr>
            <tr>
              <td class="mail_err_td" id="mail_info" style="display:none;">
                <div id="mail_info_msg" class="mail_err_info">
                  <font id="msg_err">
                    XXXX.
                  </font>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="mailBTN">
          <input type="button" name="cancel" value="取消" onclick="do_cancel();" class="chg_no">
          <input type="button" value="下一步" onclick="do_submit('getVerify','setEmail');"
          class="chg_yes">
        </div>
      </div>
      <!--输入验证码-->
      <div class="mail_main verify_h" id="div_set_verify" style="display:none;">
        <table border="0" cellpadding="0" cellspacing="0" class="mail_table">
          <!--tr>
          <td>
          <div class="for_chtext_1">验证码已发送到您的电子邮件</div>
          </td>
          </tr-->
          <tbody>
            <tr>
              <td>
                <span id="myEmail">
                </span>
                <span class="mail_change" onclick="changeDiv('div_set_email');">
                  更改
                </span>
              </td>
            </tr>
            <tr>
              <td class="mail_text_td">
                <div class="maill_title">
                  请在此输入验证码
                </div>
                <div>
                  <input type="TEXT" id="myVerify" name="myVerify" value="" size="12" maxlength="12"
                  class="for_code_txt" style="text-transform:uppercase" onkeydown="key_value(event,'chkVerify')">
                  <input type="button" id="check" name="check" value="产生验证码" onclick="do_submit('getVerify','myEmail');"
                  class="for_m_btn">
                </div>
              </td>
            </tr>
            <tr>
              <td class="mail_err_td" id="err_info" style="display:none;">
                <div id="hr_info" class="mail_err_info">
                  <font id="msg_err">
                    您输入的帐户或登入帐号跟电子邮件不匹配, 请再尝试输入。
                  </font>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="changeBTN">
          <input type="button" name="cancel" value="取消" onclick="do_cancel('2');"
          class="chg_no">
          <input type="button" value="提交" onclick="do_submit('chkVerify');" class="chg_yes">
        </div>
      </div>
      <!--密码恢复成功-->
      <div class="mail_main sdone_h" id="div_set_done" style="display: none;">
        <table border="0" cellpadding="0" cellspacing="0" class="mail_table">
          <tbody>
            <tr>
              <td>
                <div class="for_chtext_1">
                  密码恢复邮件
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <span id="Email_done">
                </span>
                <div class="mail_done">
                  <span class="mail_changeS" onclick="changeDiv('div_set_email');">
                    更改
                  </span>
                  <span class="mail_cancelS" onclick="do_submit('remove');">
                    删除
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td class="mail_text_td">
                <div class="maill_title">
                  当您使用‘忘记密码’功能，验证码将发送到此电子邮件
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--密码恢复邮件已被删除-->
      <div class="mail_main rdone_h" id="div_rm_done" style="display:none;">
        <table border="0" cellpadding="0" cellspacing="0" class="mail_table">
          <tbody>
            <tr>
              <td>
                <div class="for_chtext_1">
                  密码恢复电子邮件已被删除。
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="addBTN">
          <input id="new_mail" type="button" name="cancel" value="增加" onclick="changeDiv('div_set_email');"
          class="chg_no">
        </div>
      </div>
      <iframe id="getData" style="height:0px;">
      </iframe>
    </div>
  </body>

</html>