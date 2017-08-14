<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的账户</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
</head>
    <body  class="index_accBody">
        <table id="ACC_W" class="index_accMainTB" border="0" cellpadding="0" cellspacing="0"> 
            <tbody>
                <tr>
                    <td class="index_accTD_left">
                        <!-- 左侧 -->
                        <link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<table cellspacing="0" cellpadding="0" class="acc_TB_main">
  <tbody>
    <tr>
      <!--左边选单区-->
      <td>
        <div class="acc_right_menuDIV">
            <h1>我的帐户</h1>
            <ul>
                <li id="history_data" onclick="linkEvent(this,this.id);" class="on">帐户历史</li>
                <li id="today_wagers" onclick="linkEvent(this,this.id);">交易状况</li>
                <li id="mem_conf"     onclick="linkEvent(this,this.id);">详细设定</li>
                <li id="set_email"    onclick="linkEvent(this,this.id);">密码恢复</li>
                <li id="chg_passwd"   onclick="linkEvent(this,this.id);">更改密码</li>
                <li id="scroll_history" onclick="linkEvent(this,this.id);">公告栏</li>
              </ul>
            <h1>帮助</h1> 
            <ul>
                <li id="sport_rules" onclick="linkEvent(this,this.id);">体育规则</li>
                <li id="terms" onclick="linkEvent(this,this.id);">规则与条款</li>
                <li id="result" onclick="linkEvent(this,this.id);">赛果</li>
                <li id="tutorials" onclick="linkEvent(this,this.id);">指南</li>
                <li id="new_features" onclick="linkEvent(this,this.id);">新功能</li>
                <li id="odds" onclick="linkEvent(this,this.id);">赔率计算列表</li>
                <li id="contact_us" onclick="linkEvent(this,this.id);">联系我们</li>
                <li id="troubleshooting" onclick="linkEvent(this,this.id);">故障疑难排解</li>
            </ul>   
        </div>
      </td>
      
    </tr>
  </tbody>
</table> 
                    </td>
                    <td class="index_accTD_right">
                        <div id="body_view" name="body_view" style="display:;width:100%;height:100%;">
                            <!-- 右侧 <?php echo U('Log/forget');?>-->
                            <iframe src="<?php echo U('Mes/history_data');?>" frameborder="0" width="100%" height="100%"></iframe> 
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
    <script type="text/javascript">
    	//模拟进来点击
    	var newstr="<?php echo ($_GET[id]); ?>";
    	function dangqian(){
    		lujing = $("iframe").attr("src","/index.php/Home/Mes/"+newstr);
            $(".acc_right_menuDIV li").removeClass('on');
            $("#"+newstr).addClass("on");
    	}dangqian();
    	
        //路径
        function linkEvent(obj,yemian){
            
            var url = "/index.php/Home/Mes/"+yemian;
                lujing = $("iframe").attr("src",url);
                //console.log(lujing);
            $(".acc_right_menuDIV li").removeClass('on');
            $(obj).addClass("on");
        }
        
    </script>
</html>