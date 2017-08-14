<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<div class="acc_leftMain">
        <!--header-->
        <div class="acc_header noFloat"><span onclick="reload_var();" class="acc_refreshBTN"></span><h1>公告栏</h1></div>

        <!--main-->
        <div class="acc_ann_DataMain">
        <!--搜寻区-->
         <div class="acc_searchDIV noFloat">
         
         <ul class="acc_selectSP">
          <li id="sel_type" onclick="showOption();" class="acc_selectSP_first">全部</li>
            <ul id="chose_type" class="acc_selectSP_options" style="display:none;">
            <li id="all" value="all" class="On">全部</li>
            <li id="today" value="0">今日</li>
            <li id="yesterday" value="-1">昨日</li>
            <li id="before" value="-2">昨日之前</li>
          </ul>
         </ul>

            <div class="acc_ann_input"><input type="text" id="findField"><span id="acc_ann_delBTN" class="acc_ann_delBTN" style="display:none"></span></div>
            <span id="findbutton" name="" onclick="FindNext();" class="acc_ann_searchBTN">搜寻</span>
         </div>

        <!--文字区选项卡-->
        <div class="acc_ann_header noFloat">
            <div id="Important" class="acc_ann_msgBTN_on" onclick="chg_important(this,1)"><span>重要</span><span id="ImportantMessage" class="acc_ann_icon">5</span></div>
            <div id="Personal" class="acc_ann_msgBTN" onclick="chg_important(this,2)"><span>个人</span><span id="PersonalMessage" class="acc_ann_icon" style="display:none"></span></div>
            <div id="General" class="acc_ann_msgBTN" onclick="chg_important(this,3)">一般</div>
        </div>
        <!-- 重要 -->
        <table cellspacing="0" cellpadding="0" class="acc_ann_msgTXT acc_ann_msgTXT1">
          <tbody>
              <tr style="display: ">
                <td><h1>16-05-30<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>尊贵的客户，本公司已提供修复DNS的软件於所有会员下载，如您无法正常访问本公司网站，请到http://180.94.224.94/ 或新版会员端的“故障及疑难排解”下载此软件。 </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>16-02-25<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>微软已经宣佈停止支援10和以下的IE浏览器版本.这意味着如果您还在使用IE 6, 7, 8, 9或10的版本,您是在使用微软已经不再支援的浏览器.一旦浏览器不再被支援,保护您的网络安全程式将不会是最新的,这也会增加您被骇和资料被盗取的可能性.最新的浏览器能比较有效的保护您被网络诈骗,病毒,木马程式,网络钓鱼和其他等的威胁.而且,最新的浏览器也会经常修补您在使用的浏览器的网络安全漏洞.我们强烈的建议您下载最新的浏览器如Chrome, FireFox 或 Safari以保持目前最完善的网络安全级别. </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>15-09-27<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>敬请注意: 为了提高个人帐号密码的安全性, 请不要透过网址导航, 网址大全, 资讯网等等网站的超链接登录至我们的网站, 来路不明的第三方网站会使您的帐号密码被盗用的风险提高!!! </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>15-09-27<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>敬请注意: 基於法律风险以及安全上的考量，本公司严格禁止来自美国和新加坡地区的投注， 如有发现任何来自美国和新加坡IP地址的注单，本公司将保留赛前或赛后取消注单的权利。 </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>15-09-27<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>敬请注意: 本公司对於不正常获利行为如抄水, 软件投注, 或集团出货均视为非正常投注. 对於此类注单本公司有保留或取消注单的权利, 无论在赛前，赛中，或赛后. </h2>
                </td>
              </tr>

            </tbody>
        </table>
        <!-- 个人 -->
        <table cellspacing="0" cellpadding="0" class="acc_ann_msgTXT acc_ann_msgTXT2">
          <tbody>
              <tr style="display: ">
                <td><h1>16-05-30个人<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>个人本公司已提供修复DNS的软件於所有会员下载，如您无法正常访问本公司网站，请到http://180.94.224.94/ 或新版会员端的“故障及疑难排解”下载此软件。 </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>16-02-25<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>微软已经宣佈停止支援10和以下的IE浏览器版本.这意味着如果您还在使用IE 6, 7, 8, 9或10的版本,您是在使用微软已经不再支援的浏览器.一旦浏览器不再被支援,保护您的网络安全程式将不会是最新的,这也会增加您被骇和资料被盗取的可能性.最新的浏览器能比较有效的保护您被网络诈骗,病毒,木马程式,网络钓鱼和其他等的威胁.而且,最新的浏览器也会经常修补您在使用的浏览器的网络安全漏洞.我们强烈的建议您下载最新的浏览器如Chrome, FireFox 或 Safari以保持目前最完善的网络安全级别. </h2>
                </td>
              </tr>
             
              <tr style="display: ">
                <td><h1>15-09-个人<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>敬请注意: 本公司对於不正常获利行为如抄水, 软件投注, 或集团出货均视为非正常投注. 对於此类注单本公司有保留或取消注单的权利, 无论在赛前，赛中，或赛后. </h2>
                </td>
              </tr>

            </tbody>
        </table>
        <!-- 一般 -->
        <table cellspacing="0" cellpadding="0" class="acc_ann_msgTXT acc_ann_msgTXT3">
          <tbody>
              <tr style="display: ">
                <td><h1>16-05-一般<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>一般，本公司已提供修复DNS的软件於所有会员下载，如您无法正常访问本公司网站，请到http://180.94.224.94/ 或新版会员端的“故障及疑难排解”下载此软件。 </h2>
                </td>
              </tr>
              <tr style="display: ">
                <td><h1>15-09-27<span style="display: " class="acc_ann_msgNew"></span></h1>
                        <h2>敬请注意: 本公司对於不正常获利行为如抄水, 软件投注, 或集团出货均视为非正常投注. 对於此类注单本公司有保留或取消注单的权利, 无论在赛前，赛中，或赛后. </h2>
                </td>
              </tr>

            </tbody>
        </table>

        <!--無訊息-->
        <div class="acc_ann_NO" style="display: none">您选择的项目暂时没有信息.</div>
        </div>

    </div>
     <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
    <script type="text/javascript">
   
        function chg_important(obj,id){
            $(".acc_ann_msgTXT").hide();
            $(".acc_ann_msgTXT"+id).show();
        }
        function showOption(){
            $(".acc_selectSP_options").show();
        }
        $(".acc_selectSP_options li").click(function() {
            var zhi = $(this).html();
            $(this).parents(".acc_selectSP_options").siblings(".acc_selectSP_first").text(zhi);   
            $(".acc_selectSP_options").hide(); 
        });
        function FindNext(){
            console.log("搜索");
        }
    </script>