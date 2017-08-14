<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>交易单</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/order.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/bet_maincotrol.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/live.css">
</head>
<body>
 	<div class="bet_select_bg">
     
     <!--right buttons-->
        <div class="bet_right_btn" id="bet_right">
	        <ul class="bet_right_ul">
	           <li class="bet_right_refresh" onclick="reload_lid();">刷新</li>
	           <li class="bet_right_close" onclick="back();">关闭</li>
	           <li class="bet_right_top">返回顶部</li>
	       </ul>
        </div>
     <!--right buttons-->

      <div class="bet_select_content" id="bet_select">
      		<form name="lid_form">
         		<table class="bet_select_table" cellpadding="0" cellspacing="0" border="0">
         			<tbody>
			            <tr class="bet_select_title">
			               <td colspan="6">
			                       <div class="bet_select_left">选择联赛</div>
			                       
			                       <div class="bet_select_right">
			                       		<label><input type="checkbox" class="bet_selsect_box" value="all" id="sall" onclick="selall();"><span></span>  全选</label>
			                          <span class="bet_select_time_btn" onclick="reload_lid();"><tt id="retime">9</tt></span>
			                          <span class="bet_select_close" onclick="back();"></span>
			                       </div>
			               </td>
			            </tr>
		            <tr>
		            	<td colspan="6" class="bet_select_text">热门联赛</td>
		            </tr>
                  <tr class="bet_select_toph"><td colspan="6"></td></tr>
                   <tr style="display:none;">
					   <td colspan="6" class="bet_no_game_lid">您选择的项目暂时没有联盟。</td>
                   </tr>

            
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td class="bet_box_w"><label><input type="checkbox" value="澳洲布里斯班坎尔杯" id="LID103837" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td class="bet_team_w"><span class="bet_select_team">澳洲布里斯班坎尔杯</span></td>
              	<td class="bet_num_w"><span class="bet_select_number">1</span></td>
              	
								<td class="bet_box_w"><label><input type="checkbox" value="球会友谊赛" id="LID100816" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td class="bet_team_w"><span class="bet_select_team">球会友谊赛</span></td>
              	<td class="bet_num_w"><span class="bet_select_number">2</span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       				</tr>
       				
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td class="bet_box_w"><label><input type="checkbox" value="澳洲新南威尔斯女子国家超级联赛" id="LID107709" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td class="bet_team_w"><span class="bet_select_team">澳洲新南威尔斯女子国家超级联赛</span></td>
              	<td class="bet_num_w"><span class="bet_select_number">1</span></td>
              	
								<td class="bet_box_w"><label><input type="checkbox" value="印尼甲组联赛" id="LID104523" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td class="bet_team_w"><span class="bet_select_team">印尼甲组联赛</span></td>
              	<td class="bet_num_w"><span class="bet_select_number">2</span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       				</tr>
       				
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       				</tr>
       				
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       				</tr>
       				
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       				</tr>
       				
                    <tr style="display:none;" class="bet_select_bottomh"><td colspan="6"></td></tr>
       				<tr style="display:none;">
            			<td colspan="6" class="bet_select_text">其他联赛</td>
            	</tr>
                <tr style="display:none;" class="bet_select_toph"><td colspan="6"></td></tr>
                
       				<tr class="bet_select_all">
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
								<td style="display:none;" class="bet_box_w"><label><input type="checkbox" value="" id="LID" onclick="chk_all(this.checked);" class="bet_selsect_box"><span></span></label></td>
              	<td style="display:none;" class="bet_team_w"><span class="bet_select_team"></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number"></span></td>
              	
              	<td style="display:none;" class="bet_box_w"><label></label></td>
              	<td style="display:none;" class="bet_team_w"><span></span></td>
              	<td style="display:none;" class="bet_num_w"><span class="bet_select_number_none"></span></td>
       			</tr>
       				

				<!-- 結尾加一條空白tr-->
				<tr class="bet_select_all">
				</tr>
         </tbody>
        </table>
       </form>

      </div>
      
     <div allowtransparency="true" class="bet_select_center">
     	<span class="bet_select_submit" onclick="chk_league();">送出</span>
     </div>
     
     </div>
</body>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
		//继承index方法
  //window.parent.back();
  parent.load()
	//刷新
	function reload_lid(){
		window.location.reload;
	};
	function chk_all(){

	};
	//全选
	function selall(){
		//判断状态全选
		var zhuangtai = $("#sall").is(':checked');
		var panduan = $(".bet_box_w label").find("input").is(':checked');
		  
		if(zhuangtai == false){
			$(".bet_box_w label").find("input").prop("checked",false);
			zhuangtai.attr("checked",'false');
		}else{
			$(".bet_box_w label").find("input").prop("checked",true);
		};
		
	};
	
   function closeClickEvent(){
   		
  	};
  function back(){
	parent.document.getElementById('legFrame').style.display="none";
  };
	
</script>
</body>
</html>