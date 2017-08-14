<?php if (!defined('THINK_PATH')) exit();?><body id="LEG" onload="onLoad();" onselectstart="self.event.returnValue=false" oncontextmenu="self.event.returnValue=false
">
<link rel="stylesheet" href="/Public/css/mem_body_ft.css">
<form name="lid_form">
	
<table border="0" cellpadding="0" cellspacing="0" id="box">
  <tbody><tr>
    <td class="leg_top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="30%"><h1><input type="checkbox" value="all" id="sall" onclick="selall();"><label class="all_sel">全选</label></h1></td>
            <td class="btn_td">
            <input type="submit" name="button" id="button" value="取消" class="enter_btn" onclick="back();">&nbsp;
            <input type="submit" name="button" id="button" value="提交" class="enter_btn" onclick="chk_league();">
            </td>
            <td class="close_td"><span class="close_box" onclick="back();">关闭</span></td>
          </tr>
        </tbody></table>
  	  
	</td>
  </tr>
  <tr>
    <td>
    <div class="leg_mem">
      <table border="0" cellspacing="1" cellpadding="0" class="leg_game">
        <!--tr> 
          <td colspan=3 class="league_all"><input type=checkbox value=all id=sall onClick="selall();">全部选取</td>
        </tr-->
        <tbody><tr>
          <td class="league"><div><input type="checkbox" value="国际冠军杯" id="LID106648" onclick="chk_all(this.checked);"><font title="国际冠军杯">国际冠军杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="苏格兰联赛杯" id="LID100797" onclick="chk_all(this.checked);"><font title="苏格兰联赛杯">苏格兰联赛杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="南美洲球会杯" id="LID100801" onclick="chk_all(this.checked);"><font title="南美洲球会杯">南美洲球会杯</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="国际冠军杯-特别投注" id="LID106672" onclick="chk_all(this.checked);"><font title="国际冠军杯-特别投注">国际冠军杯-特别投注</font></div></td>
          <td class="league"><div><input type="checkbox" value="俄罗斯甲组联赛" id="LID101367" onclick="chk_all(this.checked);"><font title="俄罗斯甲组联赛">俄罗斯甲组联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="美国职业大联盟" id="LID100857" onclick="chk_all(this.checked);"><font title="美国职业大联盟">美国职业大联盟</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="美洲金杯2017(在美国)" id="LID101449" onclick="chk_all(this.checked);"><font title="美洲金杯2017(在美国)">美洲金杯2017(在美国)</font></div></td>
          <td class="league"><div><input type="checkbox" value="哈萨克斯坦超级联赛" id="LID103244" onclick="chk_all(this.checked);"><font title="哈萨克斯坦超级联赛">哈萨克斯坦超级联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="巴西杯" id="LID100798" onclick="chk_all(this.checked);"><font title="巴西杯">巴西杯</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="欧洲女子足球锦标赛2017(在荷兰)" id="LID103204" onclick="chk_all(this.checked);"><font title="欧洲女子足球锦标赛2017(在荷兰)">欧洲女子足球锦标赛2017(在荷兰)</font></div></td>
          <td class="league"><div><input type="checkbox" value="瑞典杯" id="LID100786" onclick="chk_all(this.checked);"><font title="瑞典杯">瑞典杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="巴西杯-特别投注" id="LID103953" onclick="chk_all(this.checked);"><font title="巴西杯-特别投注">巴西杯-特别投注</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="欧洲女子足球锦标赛2017(在荷兰)-特别投注" id="LID106607" onclick="chk_all(this.checked);"><font title="欧洲女子足球锦标赛2017(在荷兰)-特别投注">欧洲女子足球锦标赛2017(在荷兰)-特别投注</font></div></td>
          <td class="league"><div><input type="checkbox" value="立陶宛甲组联赛" id="LID101524" onclick="chk_all(this.checked);"><font title="立陶宛甲组联赛">立陶宛甲组联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="哥伦比亚杯" id="LID102774" onclick="chk_all(this.checked);"><font title="哥伦比亚杯">哥伦比亚杯</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="欧洲冠军杯外围赛" id="LID102416" onclick="chk_all(this.checked);"><font title="欧洲冠军杯外围赛">欧洲冠军杯外围赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="瑞典甲组联赛U19" id="LID103779" onclick="chk_all(this.checked);"><font title="瑞典甲组联赛U19">瑞典甲组联赛U19</font></div></td>
          <td class="league"><div><input type="checkbox" value="墨西哥杯" id="LID106048" onclick="chk_all(this.checked);"><font title="墨西哥杯">墨西哥杯</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="国际友谊赛" id="LID100808" onclick="chk_all(this.checked);"><font title="国际友谊赛">国际友谊赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="乌克兰杯" id="LID100821" onclick="chk_all(this.checked);"><font title="乌克兰杯">乌克兰杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="挪威丙组联赛" id="LID107667" onclick="chk_all(this.checked);"><font title="挪威丙组联赛">挪威丙组联赛</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="博尔托洛蒂锦标赛" id="LID103356" onclick="chk_all(this.checked);"><font title="博尔托洛蒂锦标赛">博尔托洛蒂锦标赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="阿拉伯球会冠军杯2017(在埃及)" id="LID108422" onclick="chk_all(this.checked);"><font title="阿拉伯球会冠军杯2017(在埃及)">阿拉伯球会冠军杯2017(在埃及)</font></div></td>
          <td class="league"><div><input type="checkbox" value="巴西里约州乙组一联赛" id="LID107477" onclick="chk_all(this.checked);"><font title="巴西里约州乙组一联赛">巴西里约州乙组一联赛</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="德国巴伐利亚联赛" id="LID106022" onclick="chk_all(this.checked);"><font title="德国巴伐利亚联赛">德国巴伐利亚联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="RFEF杯" id="LID104275" onclick="chk_all(this.checked);"><font title="RFEF杯">RFEF杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="秘鲁甲组联赛" id="LID102898" onclick="chk_all(this.checked);"><font title="秘鲁甲组联赛">秘鲁甲组联赛</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="球会友谊赛" id="LID100816" onclick="chk_all(this.checked);"><font title="球会友谊赛">球会友谊赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="尼日利亚超级联赛" id="LID103374" onclick="chk_all(this.checked);"><font title="尼日利亚超级联赛">尼日利亚超级联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="巴西锦标赛U20" id="LID104295" onclick="chk_all(this.checked);"><font title="巴西锦标赛U20">巴西锦标赛U20</font></div></td>
        </tr>
        <tr>
          <td class="league"><div><input type="checkbox" value="波兰杯" id="LID101274" onclick="chk_all(this.checked);"><font title="波兰杯">波兰杯</font></div></td>
          <td class="league"><div><input type="checkbox" value="马来西亚超级联赛" id="LID101201" onclick="chk_all(this.checked);"><font title="马来西亚超级联赛">马来西亚超级联赛</font></div></td>
          <td class="league"><div><input type="checkbox" value="立陶宛乙组联赛" id="LID103313" onclick="chk_all(this.checked);"><font title="立陶宛乙组联赛">立陶宛乙组联赛</font></div></td>
        </tr>

      </tbody></table> 
      </div>
	</td>
  </tr>
</tbody></table>
<div class="btn_box">
    <input type="submit" name="button" id="button" value="取消" class="enter_btn" onclick="back();">&nbsp;
    <input type="submit" name="button" id="button" value="提交" class="enter_btn" onclick="chk_league();">
</div>


</form>





</body>