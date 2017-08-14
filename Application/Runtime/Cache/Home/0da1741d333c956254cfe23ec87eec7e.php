<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<form id="myform" method="post ">
    <input type="hidden" name="uid" value="fazf31ey3m17041417l1705633">
    <input type="hidden" name="langx" value="zh-cn">
    <div class="acc_leftMain">
        <!--header-->
        <div class="acc_header noFloat">
            <h1>
                密码恢复
            </h1>
        </div>
        <!--输入电子邮件-->
        <div class="acc_password_DataMain" id="div_set_email">
            <ul>
                <li>
                    请输入您要使用于密码恢复的电子邮件地址。
                </li>
            </ul>
            <table cellspacing="0" cellpadding="0" class="acc_maillTB">
                <tbody>
                    <tr>
                        <td>
                            <span class="acc_maill_BRspan">
                                电子邮件
                            </span>
                            <input id="setEmail" name="setEmail" type="text" placeholder="" class="acc_maill_txt"
                            onkeydown="key_value(event,'getVerify')">
                        </td>
                    </tr>
                    <tr>
                        <td id="mail_info" class="FG_errG_top" style="display:none;">
                            <div class="acc_err_info">
                                <font id="mail_info_msg">
                                    ERR
                                </font>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="acc_mailBTN">
                            <span class="acc_passCancelBTN" onclick="do_cancel('1');">
                                取消
                            </span>
                            <span class="acc_passSubmitBTN" onclick="do_submit1('getVerify','setEmail');">
                                下一步
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--输入验证码-->
        <div class="acc_password_DataMain" style="display:none;" id="div_set_verify">
            <!-- <ul>
            <li>验证码已发送到您的电子邮件</li>
            </ul> -->
            <table cellspacing="0" cellpadding="0" class="acc_codeTBt0">
                <tbody>
                    <tr>
                        <td>
                            <span id="myEmail">
                                18749830459
                            </span>
                            <span class="acc_changeBTN" onclick="changeDiv('div_set_email');">
                                更改
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="acc_codeTD">
                            <span class="acc_maill_BRspan">
                                请在此输入验证码
                            </span>
                            <div>
                                <input id="myVerify" name="myVerify" type="text" class="acc_code_txt"
                                style="text-transform:uppercase" onkeydown="key_value(event,'chkVerify')">
                                <span class="acc_codeBTN" onclick="do_submit2('getVerify','myEmail');">
                                    产生验证码
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="err_info" class="acc_mailBTN" style="display: block;">
                            <div class="acc_err_info">
                                <font id="hr_info">
                                    请输入现用密码.
                                </font>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="acc_codeTD">
                            <span class="acc_passCancelBTN" onclick="do_cancel('2');">
                                取消
                            </span>
                            <span class="acc_passSubmitBTN" onclick="do_submit3('chkVerify');">
                                提交
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--密码恢复完成-->
        <div class="acc_password_DataMain" style="display:none;" id="div_set_done">
            <ul>
                <li>
                    密码恢复邮件
                </li>
            </ul>
            <table cellspacing="0" cellpadding="0" class="acc_codeTB">
                <tbody>
                    <tr>
                        <td>
                            <span id="Email_done">
                            </span>
                            <span class="acc_changeBTN" onclick="changeDiv('div_set_email');">
                                更改
                            </span>
                            <span class="acc_changeBTNC" onclick="do_submit('remove');">
                                删除
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="acc_mailBTN">
                            当您使用'忘记密码'功能，验证码将发送到此电子邮件
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--删除电子邮件-->
        <div class="acc_password_DataMainL" style="display:none;" id="div_rm_done">
            <ul>
                <li>
                    密码恢复电子邮件已被删除
                </li>
            </ul>
            <table cellspacing="0" cellpadding="0" class="acc_codeTB">
                <tbody>
                    <tr>
                        <td class="txtC">
                            <span id="">
                            </span>
                            <span id="new_mail" class="acc_changeBTNC" onclick="changeDiv('div_set_email');">
                                增加
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
    //取消密码修改
    function do_cancel(id){
        console.log("取消了密码修改");
    };
    //下一步
    function do_submit1(){
        $("#div_set_email").hide();
        $("#div_set_verify").show();
    };
    //更改邮箱
    function changeDiv(){
        $("#div_set_email").show();
        $("#div_set_verify").hide();
    };
    //产生验证码
    function do_submit2(){
    };
    //提交
    function do_submit3(){
        $("#div_set_verify").hide();
        $("#div_set_done").show();
    };
</script>