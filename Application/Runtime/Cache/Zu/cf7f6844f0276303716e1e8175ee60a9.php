<?php if (!defined('THINK_PATH')) exit();?><html><head>
<meta name="Robots" contect="none">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" href="/Public/css/mem_body_olympics_cn.css" type="text/css" media="screen">

<script>
var frame_broke = 'Y';
var show_ior = '100';
var username='';
var maxcredit='';
var code='';
var pg=0;
var sel_league='';
var uid='c00ahhyrb6m17041417l153432';
var loading = 'Y';
var loading_var = 'Y';
var ShowType = '';
var ltype = '4';
var retime_flag = 'N';
var retime = 0;
var str_even = '和局';
var str_renew = '秒自動更新';
var str_submit = '確認';
var str_reset = '重設';
var num_page = 20;
var now_page = 1;
var pages = 1;
var msg = '';
var gamount = 0;
var GameFT = new Array(512);
var sel_gtype='FT';
var iorpoints=2;
var GameHead=new Array();
var show_more_gid = '';
var rtype='r';
var langx='zh-cn';
var mtype='4';
var delay='';
var league_id='';
var hot_game='';
top.SortType='';
top.odd_f_type='';
var rtype = 'r';
var odd_f_str = 'H,M,I,E';
var lid_arr=new Array();
top.lid_arr=lid_arr;
top.today_gmt = '2017-07-12';
top.showtype = '';
top.sel_gd = 'today';
var Format=new Array();
Format[0]=new Array( 'H','香港盘','Y');
Format[1]=new Array( 'M','马来盘','Y');
Format[2]=new Array( 'I','印尼盘','Y');
Format[3]=new Array( 'E','欧洲盘','Y');
var keepGameData=new Array();
var gidData=new Array();
parent.gamecount=0;
//判斷賠率是否變動
//包td
var motherStr;
try{
	if(frame_broke) motherStr = "";
	
}catch(e){
	try{ console.log("error motherStr set from flash_ior_mem"); }catch(e){};
	motherStr = "parent.";
}	

function checkRatio(rec,index){
 //alert(flash_ior_set);
	//return true;
	if (flash_ior_set =='Y'){

		if (""+keepGameData[rec]=="undefined"||keepGameData[rec]==""){
			keepGameData[rec]=new Array();
			keepGameData[rec][index]=GameFT[rec][index];
		}
		//判斷gid是否相同
		if (gidData[rec]!=GameFT[rec][0]||""+GameFT[rec][0]=="undefined"){
			keepGameData[rec]=new Array();
			gidData[rec]=new Array();
			keepGameData[rec][index]=GameFT[rec][index];
			gidData[rec][0]=GameFT[rec][0];
		}

		if (""+keepGameData[rec][index]=="undefined" ||keepGameData[rec][index]==""){
			keepGameData[rec][index]=GameFT[rec][index];
		}
		//alert("aaa==>"+keepGameData[rec][index]+"bbb==>"+GameFT[rec][index]);
		if (keepGameData[rec][index]!=GameFT[rec][index]&& keepGameData[rec][index] !=""&&GameFT[rec][index]!=""){
	    	//keepGameData[rec][index]=GameFT[rec][index];
	    	keepGameData[rec][index] = "";
	    	//keepGameData[rec]="";
			return " bgcolor=yellow ";
		}
		return true;
	}
}
//包font
function checkRatio_font(rec,index){
//alert(flash_ior_set);
	//return true;
	//alert(GameFT.length+"----"+keepGameData.length)

	if (flash_ior_set =='Y'){
		if (""+keepGameData[rec]=="undefined"||keepGameData[rec]==""){
			keepGameData[rec]=new Array();
			keepGameData[rec][index]=GameFT[rec][index];
		}
		//判斷gid是否相同
		if (gidData[rec]!=GameFT[rec][0]||""+GameFT[rec][0]=="undefined"){
			keepGameData[rec]=new Array();
			gidData[rec]=new Array();
			keepGameData[rec][index]=GameFT[rec][index];
			gidData[rec][0]=GameFT[rec][0];
		}
		if (""+keepGameData[rec][index]=="undefined"||keepGameData[rec][index] ==""){
			keepGameData[rec][index]=GameFT[rec][index];
		}

		//alert("ccc==>"+keepGameData[rec][index]+"ddd==>"+GameFT[rec][index]);
		if (keepGameData[rec][index]!=GameFT[rec][index] && keepGameData[rec][index] !=""&&GameFT[rec][index]!="") {
	    	//keepGameData[rec][index]=GameFT[rec][index];
	    	keepGameData[rec][index] = "";
	    	//keepGameData[rec]="";
			return '  style=\"background-color : yellow\" ';
		}
		return true;
	}
}
function gethighlight(){
	return " style=\"color:red\" style=\"font-weight:bolder\" ";
}
//滑鼠移動帶出索引
//function showMsg(msg, type) {
//	var showHelpMsg = body_browse.document.getElementById("showHelpMsg");
////	var showHelpMsg = parent.body_browse.document.getElementById('showHelpMsg');
//	var helpMsg = body_browse.document.getElementById('helpMsg').innerHTML;
//	var tmpHTML = "";
//	if(type == 1) {
//		tmpHTML = helpMsg;
//		tmpHTML = tmpHTML.replace("*SHOWMSG*", msg);
//		showHelpMsg.innerHTML = tmpHTML;
//		showHelpMsg.style.display = "block";
//		showHelpMsg.style.top = body_browse.document.body.scrollTop+body_browse.event.clientY-10;
//		showHelpMsg.style.left = body_browse.document.body.scrollLeft+body_browse.event.clientX+10;
//	} else showHelpMsg.style.display = "none";
//}

//====== 加入現場轉播功能 2009-04-09
// 開啟轉播
function OpenLive(eventid, gtype){
	if (top.liveid == undefined) {
		parent.self.location = "";
		return;
	}
	var eventlive="Y";
	//關閉主視窗 連子視窗一起關閉
	 //var newWinObj2=new Array();
	 var newWinObj2 = new top.Array(); //使用top的Array原形新增物件
	 for(var i=0;i<top.newWinObj.length;i++){
	  if(!top.newWinObj[i].closed) newWinObj2[newWinObj2.length]=top.newWinObj[i];
	 }
	 top.newWinObj=newWinObj2;

	 var DWinObj= window.open("../live/live.php?langx="+top.langx+"&uid="+top.uid+"&liveid="+top.liveid+"&autoOddCheck="+top.autoOddCheck+"&eventid="+eventid+"&eventlive="+eventlive+"&gtype="+gtype,"Live","width=780,height=585,top=0,left=0,status=no,toolbar=no,scrollbars=no,resizable=no,personalbar=no");
	 top.newWinObj[top.newWinObj.length]=DWinObj;
	 DWinObj.focus();
}

function VideoFun(eventid, hot, play, gtype) {
	var tmpStr = "";
	//play="Y";
	if (play == "Y") {
		//tmpStr+= "<img lowsrc=\"/images/member/video_1.gif\" onClick=\"parent.OpenLive('"+eventid+"','"+gtype+"')\" style=\"cursor:hand\">";
		tmpStr= "<span ><div style=\"cursor:hand\" class=\"tv_icon_on\" onClick=\""+motherStr+"OpenLive('"+eventid+"','"+gtype+"')\"></div></span>";
	} else {
		//tmpStr+= "<img lowsrc=\"/images/member/video_2.gif\">";
		tmpStr= "<span ><div  class=\"tv_icon_out\"></div></span>";
	}
	return tmpStr;
}

function MM_ShowLoveI(gid,getDateTime,getLid,team_h,team_c){
	var txtout="";
	//if(!top.swShowLoveI){
		//alert(chkRepeat(gid));
		if(!chkRepeat(gid,getDateTime)){	
			//txtout = "<span id='sp_"+MM_imgId(getDateTime,gid)+"'><img id='"+MM_imgId(getDateTime,gid)+"' lowsrc=\"/images/member/icon_X2.gif\" vspace=\"0\" style=\"cursor:hand;display:none;\" title=\""+top.str_ShowMyFavorite+"\" onClick=\"addShowLoveI('"+gid+"','"+getDateTime+"','"+getLid+"','"+team_h+"','"+team_c+"'); \"></span>";
			txtout = "<span id='sp_"+MM_imgId(getDateTime,gid)+"'><div id='"+MM_imgId(getDateTime,gid)+"' class=\"fov_icon_out\" style=\"cursor:hand;display:none;\" title=\""+top.str_ShowMyFavorite+"\" onClick=\"addShowLoveI('"+gid+"','"+getDateTime+"','"+getLid+"','"+team_h+"','"+team_c+"'); \"></div></span>";
		}else{
			//txtout = "<span id='sp_"+MM_imgId(getDateTime,gid)+"'><img lowsrc=\"/images/member/love_small.gif\" style=\"cursor:hand\" title=\""+top.str_delShowLoveI+"\" onClick=\"chkDelshowLoveI('"+getDateTime+"','"+gid+"'); \"></span>";
			txtout = "<span id='sp_"+MM_imgId(getDateTime,gid)+"'><div class=\"fov_icon_on\" style=\"cursor:hand\" title=\""+top.str_delShowLoveI+"\" onClick=\"chkDelshowLoveI('"+getDateTime+"','"+gid+"'); \"></div></span>";
		}
	//}else{
		//txtout = "<img lowsrc=\"/images/member/love_small.gif\" style=\"cursor:hand\" title=\""+top.str_delShowLoveI+"\" onClick=\"chkDelshowLoveI('"+getDateTime+"','"+gid+"'); \">";
		//txtout = "<div class=\"fov_icon_on\" style=\"cursor:hand\" title=\""+top.str_delShowLoveI+"\" onClick=\"chkDelshowLoveI('"+getDateTime+"','"+gid+"'); \"></div>";
	//}
	return txtout;
}


function chkRepeat(gid,getDateTime){
	var getGtype =getGtypeShowLoveI();
	var sw =false;
	for (var i=0 ; i < top.ShowLoveIarray[getGtype].length ; i++){
		//if(top.ShowLoveIarray[getGtype][i][0]==gid && top.ShowLoveIarray[getGtype][i][1].substr(0,15) == getDateTime.substr(0,15))
		// 2017-03-22 3054. 新舊會員端-所有球類-當賽事加進我的最愛後再更改時間，我的最愛中賽事只更新時間，星星的小圖示會沒有出現，正確應為時間更新、星星也出現
		if(top.ShowLoveIarray[getGtype][i][0]==gid)
				sw =true;
	}
	return sw;
}


function MM_IdentificationDisplay(time,gid){
	var getGtype = getGtypeShowLoveI();
	var txt_array = top.ShowLoveIOKarray[getGtype];
	if(top.swShowLoveI){
		var tmp = time.split("<br>")[0];
		if(txt_array.length==0)return true;
		if(txt_array.indexOf(tmp+gid +",",0)== -1)
			return true;
	}
}
function getGtypeShowLoveI(){
	var Gtype;
	var getGtype =sel_gtype;
	var getRtype =rtype;
	Gtype =getGtype;
	if(getRtype=="re"){
		Gtype +="RE";
	}
	/*
	if(getGtype =="FU"||getGtype=="FT"){
		Gtype ="FT";
	}else if(getGtype =="OM"||getGtype=="OP"){
		Gtype ="OP";
	}else if(getGtype =="BU"||getGtype=="BK"){
		Gtype ="BK";
	}else if(getGtype =="BSFU"||getGtype=="BS"){
		Gtype ="BS";
	}else if(getGtype =="VU"||getGtype=="VB"){
		Gtype ="VB";
	}else if(getGtype =="TU"||getGtype=="TN"){
		Gtype ="TN";
	}else {
		Gtype ="FT";
	}
	*/
	
	//alert("in==>"+parent.sel_gtype+",out==>"+Gtype);
	return Gtype;
}
function MM_imgId(time,gid){	
	var tmp = time.split("<br>")[0];
	//alert("tmp===>"+tmp+"==="+"gid===>"+gid+"===");
	return tmp+gid;
}


/**
 * 選擇多盤口時 轉換成該選擇賠率
 * @param odd_type 	選擇盤口
 * @param iorH		主賠率
 * @param iorC		客賠率
 * @param show		顯示位數
 * @return		回傳陣列 0-->H  ,1-->C
 */
function  get_other_ioratio(odd_type, iorH, iorC , showior){
	var out=new Array();
	if(iorH!="" ||iorC!=""){
		out =chg_ior(odd_type,iorH,iorC,showior);
	}else{
		out[0]=iorH;
		out[1]=iorC;
	}
	return out;
}
/**
 * 轉換賠率
 * @param odd_f
 * @param H_ratio
 * @param C_ratio
 * @param showior
 * @return
 */
function chg_ior(odd_f,iorH,iorC,showior){
	//console.log("1. "+odd_f+"<>"+iorH+"<>"+iorC+"<>"+showior);
	iorH = Math.floor((iorH*1000)+0.001) / 1000;
	iorC = Math.floor((iorC*1000)+0.001) / 1000;
	
	var ior=new Array();
	if(iorH < 11) iorH *=1000;
	if(iorC < 11) iorC *=1000;
	iorH=parseFloat(iorH);
	iorC=parseFloat(iorC);
	switch(odd_f){
	case "H":	//香港變盤(輸水盤)
		ior = get_HK_ior(iorH,iorC);
		break;
	case "M":	//馬來盤
		ior = get_MA_ior(iorH,iorC);
		break;
	case "I" :	//印尼盤
		ior = get_IND_ior(iorH,iorC);
		break;
	case "E":	//歐洲盤
		ior = get_EU_ior(iorH,iorC);
		break;
	default:	//香港盤
		ior[0]=iorH ;
		ior[1]=iorC ;
	}
	ior[0]/=1000;
	ior[1]/=1000;
	
	ior[0]=printf(Decimal_point(ior[0],showior),iorpoints);
	ior[1]=printf(Decimal_point(ior[1],showior),iorpoints);
	//alert("odd_f="+odd_f+",iorH="+iorH+",iorC="+iorC+",ouH="+ior[0]+",ouC="+ior[1]);
	return ior;
}

/**
 * 換算成輸水盤賠率
 * @param H_ratio
 * @param C_ratio
 * @return
 */
function get_HK_ior( H_ratio, C_ratio){
	var out_ior=new Array();
	var line,lowRatio,nowRatio,highRatio;
	var nowType="";
	if (H_ratio <= 1000 && C_ratio <= 1000){
		out_ior[0]=Math.floor(H_ratio/10+0.0001)*10;;
		out_ior[1]=Math.floor(C_ratio/10+0.0001)*10;;
		//out_ior[0]=H_ratio;
		//out_ior[1]=C_ratio;
		return out_ior;
	}
	line=2000 - ( H_ratio + C_ratio );
	
	if (H_ratio > C_ratio){ 
		lowRatio=C_ratio;
		nowType = "C";
	}else{
		lowRatio = H_ratio;
		nowType = "H";
	}
	if (((2000 - line) - lowRatio) > 1000){
		//對盤馬來盤
		nowRatio = (lowRatio + line) * (-1);
	}else{
		//對盤香港盤
		nowRatio=(2000 - line) - lowRatio;	
	}
	
	if (nowRatio < 0){
		highRatio = Math.floor(Math.abs(1000 / nowRatio) * 1000) ;
	}else{
		highRatio = (2000 - line - nowRatio) ;
	}
	if (nowType == "H"){
		out_ior[0]=Math.floor(lowRatio/10+0.0001)*10;
		out_ior[1]=Math.floor(highRatio/10+0.0001)*10;
		//out_ior[0]=lowRatio;
		//out_ior[1]=highRatio;
	}else{
		out_ior[0]=Math.floor(highRatio/10+0.0001)*10;
		out_ior[1]=Math.floor(lowRatio/10+0.0001)*10;
		//out_ior[0]=highRatio;
		//out_ior[1]=lowRatio;
	}
	return out_ior;
}
/**
 * 換算成馬來盤賠率
 * @param H_ratio
 * @param C_ratio
 * @return
 */
function get_MA_ior( H_ratio, C_ratio){
	var out_ior=new Array();
	var line,lowRatio,highRatio;
	var nowType="";
	if ((H_ratio <= 1000 && C_ratio <= 1000)){
		out_ior[0]=H_ratio;
		out_ior[1]=C_ratio;
		return out_ior;
	}
	line=2000 - ( H_ratio + C_ratio );
	if (H_ratio > C_ratio){ 
		lowRatio = C_ratio;
		nowType = "C";
	}else{
		lowRatio = H_ratio;
		nowType = "H";
	}
	highRatio = (lowRatio + line) * (-1);
	if (nowType == "H"){
		out_ior[0]=lowRatio;
		out_ior[1]=highRatio;
	}else{
		out_ior[0]=highRatio;
		out_ior[1]=lowRatio;
	}
	return out_ior;
}
/**
 * 換算成印尼盤賠率
 * @param H_ratio
 * @param C_ratio
 * @return
 */
function get_IND_ior( H_ratio, C_ratio){
	var out_ior=new Array();
	out_ior = get_HK_ior(H_ratio,C_ratio);
	H_ratio=out_ior[0];
	C_ratio=out_ior[1];
	H_ratio /= 1000;
	C_ratio /= 1000;
	if(H_ratio < 1){
		H_ratio=(-1) / H_ratio;
	}
	if(C_ratio < 1){
		C_ratio=(-1) / C_ratio;
	}
	out_ior[0]=H_ratio*1000;
	out_ior[1]=C_ratio*1000;
	return out_ior;
}
/**
 * 換算成歐洲盤賠率
 * @param H_ratio
 * @param C_ratio
 * @return
 */
function get_EU_ior(H_ratio, C_ratio){
	var out_ior=new Array();
	out_ior = get_HK_ior(H_ratio,C_ratio);
	H_ratio=out_ior[0];
	C_ratio=out_ior[1];       
	out_ior[0]=H_ratio+1000;
	out_ior[1]=C_ratio+1000;
	return out_ior;
}
/*
去正負號做小數第幾位捨去
進來的值是小數值
*/
function Decimal_point(tmpior,show){
	var sign="";
	sign =((tmpior < 0)?"Y":"N");
	tmpior = (Math.floor(Math.abs(tmpior) * show + 1 / show )) / show;
	return (tmpior * ((sign =="Y")? -1:1)) ;
}


/*
 公用 FUNC
*/
function printf(vals,points){ //小數點位數
	vals=""+vals;
	var cmd=new Array();
	cmd=vals.split(".");
	if (cmd.length>1){
		for (ii=0;ii<(points-cmd[1].length);ii++)vals=vals+"0";
	}else{
		vals=vals+".";
		for (ii=0;ii<points;ii++)vals=vals+"0";
	}
	return vals;
}var ObjDataFT=new Array();
var oldObjDataFT=new Array();
//var GameHead=new Array("gid","datetime","league","gnum_h","gnum_c","team_h","team_c","strong","ratio","ior_RH","ior_RC","ratio_o","ratio_u","ior_OUH","ior_OUC","ior_MH","ior_MC","ior_MN","str_odd","str_even","ior_EOO","ior_EOE","hgid","hstrong","hratio","ior_HRH","ior_HRC","hratio_o","hratio_u","ior_HOUH","ior_HOUC","ior_HMH","ior_HMC","ior_HMN","more","eventid","hot","play");
var keepleg="";
var legnum=0;
var NoshowLeg=new Array();
var myLeg=new Array();
var LeagueAry=new Array();
var keepscroll=0;
var step=1;
//that body_browse be self 
body_browse = this;
var keep_loading = true;
function ShowGameList(){
	reTimeNow = retime;
	
	if(""+top.hot_game=="undefined"){
		top.hot_game="";
	}	
	try{
	start_time=body_browse.get_timer();
	}catch(E){}	
	if(loading == 'Y') return;
	if (parent.gamecount!=gamount){
		oldObjDataFT=new Array();
	}
	if(top.odd_f_type==""||""+top.odd_f_type=="undefined") top.odd_f_type="H";
	
	
		
	keepscroll=body_browse.document.body.scrollTop;
	

	var conscroll= body_browse.document.getElementById('controlscroll');
	/*
	if (conscroll.style.display!=""){
		conscroll.style.display="";
		step=step*-1;
		//alert(conscroll.style.top);
		
		conscroll.style.top = keepscroll+step;
		//conscroll.style.width=800;
		//conscroll.style.Height=600;
		conscroll.focus();
}
*/
		//conscroll.blur();
		//conscroll.style.top=parseInt(conscroll.style.top)-1;
	dis_ShowLoveI();
	
	//秀盤面
	showtables(GameFT,GameHead,gamount,top.odd_f_type);
  //conscroll.style.top=top.keepscroll;
	//conscroll.focus();
	
	body_browse.scroll(0,keepscroll);
	
	//設定右方重新整理位置
	setRefreshPos();

	//顯示盤口
	body_browse.ChkOddfDiv();
	//跑馬燈
//	obj_msg = body_browse.document.getElementById('real_msg');
//	obj_msg.innerHTML = '<marquee scrolldelay=\"300\">'+msg+'</marquee>';
	
	//更新秒數
	//只有 讓分/走地 才有更新時間
	//hr_info = body_browse.document.getElementById('hr_info');
	//if(retime){
	//	hr_info.innerHTML = retime+str_renew;
	//}else{
	//	hr_info.innerHTML = str_renew;
	//}
	
	parent.gamecount=gamount;
	//日期下拉霸
	
	/*if (sel_gtype=="FU"){
		if (""+body_browse.document.getElementById('g_date')!="undefined"){
			body_browse.selgdate("r",g_date);
			body_browse.document.getElementById('g_date').value=g_date;
		}
	}*/
	
	if (top.hot_game!=""){
		body_browse.document.getElementById('sel_league').style.display='none';
		show_page();
 	}else{	
 			
		if(top.showtype=='hgft'||top.showtype=='hgfu'){
			obj_sel = body_browse.document.getElementById('sel_league');
			obj_sel.style.display='none';
			try{
				var obj_date='';
				obj_date=body_browse.document.getElementById("g_date").value;
				body_browse.selgdate("",obj_date);
			}catch(E){}
		}else{
			show_page();
	  }
	}

	conscroll.style.display="none";
	coun_Leagues();
	body_browse.showPicLove();
	loadingOK();
	showHOT(gameCount);
	try{
		body_browse.document.getElementById('show_run_time').innerHTML="time:"+((body_browse.get_timer()-start_time)/1000)+"s";
	}catch(E){}
	keep_show_more(show_more_gid,ObjDataFT,gamount);
	if(keep_loading) parent.display_loading(false);
}
var hotgdateArr =new Array();
function hot_gdate(gdate){
	if((""+hotgdateArr).indexOf(gdate)==-1){
		hotgdateArr.push(gdate);
	}
}
function coun_Leagues(){
	var coun=0;
	var str_tmp ="|"+eval('parent.'+sel_gtype+'_lname_ary');
	if(str_tmp=='|ALL'){
		body_browse.document.getElementById("str_num").innerHTML =top.alldata;
	}else{
		var larray=str_tmp.split('|');
		for(var i =0;i<larray.length;i++){
			if(larray[i]!=""){coun++}
		}
		//alert(coun+"---"+LeagueAry.length);
		coun =LeagueAry.length;
		
		body_browse.document.getElementById("str_num").innerHTML =coun;
	}
	
	
}
//------單式顯示------
//function ShowData_OU(obj_table,GameData,data_amount,odd_f_type){
	//showtables();
//}

//var GameFT=new Array();


//表格函數
function showtables(GameData,Game_Head,data_amount,odd_f_type){
//	var conscroll= body_browse.document.getElementById('controlscroll');

	//var conscroll= document.getElementById('controlscroll');
//	conscroll.style.display="block";
//	conscroll.top=keepscroll;
	//alert("kkkk");
	
	
	
	ObjDataFT=new Array();
	myLeg=new Array();
	for (var j=0;j < data_amount;j++){
		if (GameData[j]!=null){
			ObjDataFT[j]=parseArray(Game_Head,GameData[j]);
		}
	}
	//alert("ObjDataFT===>"+ObjDataFT.length);
	var trdata;//=body_browse.document.getElementById('DataTR').innerHTML;
	var showtableData;
	if(body_browse.document.all){
	     	showtableData=body_browse.document.getElementById('showtableData').innerText ;
	     	trdata=body_browse.document.getElementById('DataTR').innerText;
	     	notrdata=body_browse.document.getElementById('NoDataTR').innerText;
	} else{
     		showtableData=body_browse.document.getElementById('showtableData').textContent ;
     	 	trdata=body_browse.document.getElementById('DataTR').textContent;
			notrdata=body_browse.document.getElementById('NoDataTR').textContent;
	}
	//alert(trdata);
	var showtable=body_browse.document.getElementById('showtable');
	var showlayers="";
	keepleg="";
	legnum=0;
	LeagueAry =new Array();
	var chk_Love_I=new Array();
	if(ObjDataFT.length > 0){
	  	for ( i=0 ;i < ObjDataFT.length;i++){
	  		tmp_Str=getLayer(trdata,i,odd_f_type);
	  		showlayers+=tmp_Str;
	  		if (top.swShowLoveI&&tmp_Str!=""){
	  			chk_Love_I.push(ObjDataFT[i]);	
	  		}
	  	}
	  	//if(showlayers=="")showlayers=notrdata;
	  	//沒賽事選擇聯盟要跳回全部
	  	keep_loading=true;
	  	if(showlayers==""){
	  			showlayers=notrdata;
	  			
	  		if(parent[sel_gtype+'_lname_ary']!="ALL"){
	  			parent[sel_gtype+'_lname_ary']="ALL";	
					parent[sel_gtype+'_lid_ary']="ALL";
					parent[sel_gtype+'_lid_type']=(top.swShowLoveI)?"3":"";
					reload_var("");
					keep_loading=false;
					
					
					return;
	  		}
	  	}
	  	//======================
	  	showtableData=showtableData.replace("*showDataTR*",showlayers);
	}else{
			//沒賽事選擇聯盟要跳回全部
			parent[sel_gtype+'_lname_ary']="ALL";	
			parent[sel_gtype+'_lid_ary']="ALL";
			parent[sel_gtype+'_lid_type']=(top.swShowLoveI)?"3":"";
			//======================
	    showtableData=showtableData.replace("*showDataTR*",notrdata);
	  
	}

	if (top.head_FU=="FT"){ 	
	  	if (top.hot_game==""){
	  		  if(top.swShowLoveI){
	  					body_browse.checkLoveCount(chk_Love_I);	
	  			}		
	  	}
	}
	
	showtable.innerHTML=showtableData;
	
	//----------leg圖--------

}

//表格內容
function getLayer(onelayer,gamerec,odd_f_type){
	var open_hot = false;
	if (top.hot_game==""){
		if(MM_IdentificationDisplay(ObjDataFT[gamerec].datetime,ObjDataFT[gamerec].gnum_h)) return "";
	}
	//如果有選我的最愛,選擇聯盟不判斷
	//alert(top.swShowLoveI)

	if (!top.swShowLoveI){
		if (top.hot_game==""){
			if(("|"+eval('parent.'+sel_gtype+'_lname_ary')).indexOf(("|"+ObjDataFT[gamerec].league+"|"),0)==-1&&eval('parent.'+sel_gtype+'_lname_ary')!='ALL'){
return "";
}
			if((""+LeagueAry).indexOf(ObjDataFT[gamerec].league)== -1)LeagueAry.push(ObjDataFT[gamerec].league);
		}
	}
	var tmp_date = ObjDataFT[gamerec].datetime.split("<br>")[0];
	onelayer=onelayer.replace(/\*ID_STR\*/g,tmp_date+ObjDataFT[gamerec].gnum_h);
	onelayer=onelayer.replace(/\*TR_EVENT\*/g,"onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);'");
	//alert(ObjDataFT[gamerec].league+"==="+keepleg+"["+(ObjDataFT[gamerec].league==keepleg)+"]")
	
	if (""+myLeg[ObjDataFT[gamerec].league]=="undefined"){
		myLeg[ObjDataFT[gamerec].league]=ObjDataFT[gamerec].league;
		myLeg[ObjDataFT[gamerec].league]=new Array();
		myLeg[ObjDataFT[gamerec].league][0]=tmp_date+ObjDataFT[gamerec].gnum_h;
	}else{
		myLeg[ObjDataFT[gamerec].league][myLeg[ObjDataFT[gamerec].league].length]=tmp_date+ObjDataFT[gamerec].gnum_h;
	}

	//--------------判斷聯盟名稱列顯示或隱藏----------------
	if (ObjDataFT[gamerec].league==keepleg){
			onelayer=onelayer.replace("*ST*"," style='display: none;'");
	}else{
			onelayer=onelayer.replace("*ST*"," style='display: ;'");
	}
	//---------------------------------------------------------------------
	//--------------判斷聯盟底下的賽事顯示或隱藏----------------
	if (NoshowLeg[ObjDataFT[gamerec].league]==-1){
		onelayer=onelayer.replace(/\*CLASS\*/g,"style='display: none;'");
		onelayer=onelayer.replace("*LegMark*","<span id='LegClose'></span>"); //聯盟的小圖
	}else{
		onelayer=onelayer.replace(/\*CLASS\*/g,"style='display: ;'");
		onelayer=onelayer.replace("*LegMark*","<span id='LegOpen'></span>");  //聯盟的小圖
	}
	//---------------------------------------------------------------------
	
	var R_ior =Array();
	var OU_ior =Array();
	var HR_ior =Array();
	var HOU_ior =Array();
	var EO_ior =Array();
	R_ior  = get_other_ioratio(odd_f_type, ObjDataFT[gamerec].ior_RH   , ObjDataFT[gamerec].ior_RC   , show_ior);
	OU_ior = get_other_ioratio(odd_f_type, ObjDataFT[gamerec].ior_OUH  , ObjDataFT[gamerec].ior_OUC  , show_ior);
	HR_ior = get_other_ioratio(odd_f_type, ObjDataFT[gamerec].ior_HRH  , ObjDataFT[gamerec].ior_HRC  , show_ior);
	HOU_ior= get_other_ioratio(odd_f_type, ObjDataFT[gamerec].ior_HOUH , ObjDataFT[gamerec].ior_HOUC , show_ior);
	
	if((ObjDataFT[gamerec].ior_EOO != 0) && (ObjDataFT[gamerec].ior_EOE != 0)){
		EO_ior= get_other_ioratio("H", ObjDataFT[gamerec].ior_EOO*1-1 , ObjDataFT[gamerec].ior_EOE*1-1 , show_ior);
		ObjDataFT[gamerec].ior_EOO=EO_ior[0]*1+1;
		ObjDataFT[gamerec].ior_EOE=EO_ior[1]*1+1;
	}
	
	ObjDataFT[gamerec].ior_RH=R_ior[0];
	ObjDataFT[gamerec].ior_RC=R_ior[1];
	ObjDataFT[gamerec].ior_OUH=OU_ior[0];
	ObjDataFT[gamerec].ior_OUC=OU_ior[1];
	ObjDataFT[gamerec].ior_HRH=HR_ior[0];
	ObjDataFT[gamerec].ior_HRC=HR_ior[1];
	ObjDataFT[gamerec].ior_HOUH=HOU_ior[0];
	ObjDataFT[gamerec].ior_HOUC=HOU_ior[1];

	//滾球字眼
	ObjDataFT[gamerec].datetime=ObjDataFT[gamerec].datetime.replace("Running Ball",top.str_RB);
	keepleg=ObjDataFT[gamerec].league;
	onelayer=onelayer.replace(/\*LEG\*/gi,ObjDataFT[gamerec].league);
	
		//onelayer=onelayer.replace(/\*LEGM\*/gi,(ObjDataFT[gamerec].league+myLeg[ObjDataFT[gamerec].league].length));
//	onelayer=onelayer.replace(/\*LegID\*/g,"LEG_"+legnum);
	var tmp_date=ObjDataFT[gamerec].datetime.split("<br>");
	if (sel_gtype=="FU"){
		tmp_date_str=tmp_date[0]+"<br>"+change_time(tmp_date[1]);
	}else{
		tmp_date_str=change_time(tmp_date[1]);
	}
	if (tmp_date.length==3){
		tmp_date_str+="<br>"+tmp_date[2];
	}
	
	//ObjDataFT[gamerec].team_h=ObjDataFT[gamerec].team_h.replace("[Mid]","<font color=\"#005aff\">N</font>");
	onelayer=onelayer.replace("*DATETIME*",tmp_date_str);
	onelayer=onelayer.replace("*TEAM_H*",ObjDataFT[gamerec].team_h.replace("[Mid]","<font color=\"#005aff\">[N]</font>").replace("[中]","<font color=\"#005aff\">[中]</font>").replace("#FFFF99",""));
	onelayer=onelayer.replace("*TEAM_C*",ObjDataFT[gamerec].team_c.replace("#FFFF99",""));
	//全場
	//獨贏
	if ((ObjDataFT[gamerec].ior_MH*1 > 0) && (ObjDataFT[gamerec].ior_MC*1 > 0)){
		onelayer=onelayer.replace("*RATIO_MH*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"M"));
		onelayer=onelayer.replace("*RATIO_MC*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"M"));
		if ((ObjDataFT[gamerec].ior_MN*1) > 0){
			onelayer=onelayer.replace("*RATIO_MN*",parseUrl(uid,odd_f_type,"N",ObjDataFT[gamerec],gamerec,"M"));
		}else{
			onelayer=onelayer.replace("*RATIO_MN*","&nbsp;");
		}
	}else{
		onelayer=onelayer.replace("*RATIO_MH*","&nbsp;");
		onelayer=onelayer.replace("*RATIO_MC*","&nbsp;");
		onelayer=onelayer.replace("*RATIO_MN*","&nbsp;");
	}
	//讓球
	if (ObjDataFT[gamerec].strong=="H"){
		onelayer=onelayer.replace("*CON_RH*",ObjDataFT[gamerec].ratio);	/*讓球球頭*/
		onelayer=onelayer.replace("*CON_RC*","");
	}else{
		onelayer=onelayer.replace("*CON_RH*","");
		onelayer=onelayer.replace("*CON_RC*",ObjDataFT[gamerec].ratio);
	}
	
	
	//onelayer=onelayer.replace("*TD_RH_CLASS*",check_ioratio(gamerec,"ior_RH",ObjDataFT[gamerec]));/*讓球sytle*/
	//onelayer=onelayer.replace("*TD_RH_CLASS*","class='b_rig'");/*讓球sytle*/
	
	onelayer=onelayer.replace("*RATIO_RH*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"R"));/*讓球賠率*/
	onelayer=onelayer.replace("*RATIO_RC*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"R"));
	//大小
	if (top.langx=="en-us"){
		onelayer=onelayer.replace("*CON_OUH*",ObjDataFT[gamerec].ratio_o.replace("O","o") );	/*大小球頭*/
		onelayer=onelayer.replace("*CON_OUC*",ObjDataFT[gamerec].ratio_u.replace("U","u") );
	}else{
		onelayer=onelayer.replace("*CON_OUH*",ObjDataFT[gamerec].ratio_o.replace("O",top.strOver));	/*大小球頭*/
		onelayer=onelayer.replace("*CON_OUC*",ObjDataFT[gamerec].ratio_u.replace("U",top.strUnder));
	}
	onelayer=onelayer.replace("*RATIO_OUH*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"OU"));/*大小賠率*/
	onelayer=onelayer.replace("*RATIO_OUC*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"OU"));
	//單雙
	if (top.langx=="en-us"){
	onelayer=onelayer.replace("*RATIO_EOO*",ObjDataFT[gamerec].str_odd+parseUrl(uid,odd_f_type,"O",ObjDataFT[gamerec],gamerec,"EO"));
  	onelayer=onelayer.replace("*RATIO_EOE*",ObjDataFT[gamerec].str_even+parseUrl(uid,odd_f_type,"E",ObjDataFT[gamerec],gamerec,"EO"));
	}else{
	onelayer=onelayer.replace("*RATIO_EOO*",ObjDataFT[gamerec].str_odd+parseUrl(uid,odd_f_type,"O",ObjDataFT[gamerec],gamerec,"EO"));
  	onelayer=onelayer.replace("*RATIO_EOE*",ObjDataFT[gamerec].str_even+parseUrl(uid,odd_f_type,"E",ObjDataFT[gamerec],gamerec,"EO"));	
		}
	//上半場
	//獨贏
	if ((ObjDataFT[gamerec].ior_HMH*1 > 0) && (ObjDataFT[gamerec].ior_HMC*1 > 0)){
		onelayer=onelayer.replace("*RATIO_HMH*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"HM"));
		onelayer=onelayer.replace("*RATIO_HMC*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"HM"));
		if ((ObjDataFT[gamerec].ior_HMN*1) > 0){
			onelayer=onelayer.replace("*RATIO_HMN*",parseUrl(uid,odd_f_type,"N",ObjDataFT[gamerec],gamerec,"HM"));
		}else{
			onelayer=onelayer.replace("*RATIO_HMN*","&nbsp;");
		}
	}else{
		onelayer=onelayer.replace("*RATIO_HMH*","&nbsp;");
		onelayer=onelayer.replace("*RATIO_HMC*","&nbsp;");
		onelayer=onelayer.replace("*RATIO_HMN*","&nbsp;");
		}
		

	//讓球
	if (ObjDataFT[gamerec].hstrong=="H"){
		onelayer=onelayer.replace("*CON_HRH*",ObjDataFT[gamerec].hratio);	/*讓球球頭*/
		onelayer=onelayer.replace("*CON_HRC*","");
	}else{
		onelayer=onelayer.replace("*CON_HRH*","");
		onelayer=onelayer.replace("*CON_HRC*",ObjDataFT[gamerec].hratio);
	}
	onelayer=onelayer.replace("*RATIO_HRH*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"HR"));/*讓球賠率*/
	onelayer=onelayer.replace("*RATIO_HRC*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"HR"));
	//大小
	if (top.langx=="en-us"){
		onelayer=onelayer.replace("*CON_HOUH*",ObjDataFT[gamerec].hratio_o.replace("O","o") );	/*大小球頭*/
		onelayer=onelayer.replace("*CON_HOUC*",ObjDataFT[gamerec].hratio_u.replace("U","u") );
	}else{
		onelayer=onelayer.replace("*CON_HOUH*",ObjDataFT[gamerec].hratio_o.replace("O",top.strOver));	/*大小球頭*/
		onelayer=onelayer.replace("*CON_HOUC*",ObjDataFT[gamerec].hratio_u.replace("U",top.strUnder));
	}
	onelayer=onelayer.replace("*RATIO_HOUH*",parseUrl(uid,odd_f_type,"C",ObjDataFT[gamerec],gamerec,"HOU"));/*大小賠率*/
	onelayer=onelayer.replace("*RATIO_HOUC*",parseUrl(uid,odd_f_type,"H",ObjDataFT[gamerec],gamerec,"HOU"));
	//onelayer=onelayer.replace("*MORE*",parsemore(ObjDataFT[gamerec],game_more));
	onelayer=onelayer.replace("*MORE*",parseAllBets(ObjDataFT[gamerec],game_more));  //2014.03足球多玩法 by Leslie
	//我的最愛
	onelayer=onelayer.replace("*MYLOVE*",parseMyLove(ObjDataFT[gamerec]));
/*
	if (ObjDataFT[gamerec].play=="Y"){
			onelayer=onelayer.replace("*TV_ST*","style='display:block;'");
		
		}else{
				onelayer=onelayer.replace("*TV_ST*","style='display:none;'");
			}

*/
		if (ObjDataFT[gamerec].eventid != "" && ObjDataFT[gamerec].eventid != "null" && ObjDataFT[gamerec].eventid != undefined) {	//判斷是否有轉播
			tmpStr= VideoFun(ObjDataFT[gamerec].eventid, ObjDataFT[gamerec].hot, ObjDataFT[gamerec].play, "FT");
			//alert(tmpStr);
			onelayer=onelayer.replace("*TV*",tmpStr);
		}
		onelayer=onelayer.replace("*TV*","");
	
	//alert(onelayer);
	return onelayer;
}

//----------------------
//取得下注的url
function parseUrl(uid,odd_f_type,betTeam,GameData,gamerec,wtype){
	var urlArray=new Array();
	urlArray['R']=new Array("../FT_order/FT_order_r.php",eval("GameData.team_"+betTeam.toLowerCase()));
	urlArray['HR']=new Array("../FT_order/FT_order_hr.php",eval("GameData.team_"+betTeam.toLowerCase()));
	urlArray['OU']=new Array("../FT_order/FT_order_ou.php",(betTeam=="C" ? top.strOver : top.strUnder));
	urlArray['HOU']=new Array("../FT_order/FT_order_hou.php",(betTeam=="C" ? top.strOver : top.strUnder));
	urlArray['M']=new Array("../FT_order/FT_order_m.php",(betTeam=="N" ? top.str_irish_kiss : eval("GameData.team_"+betTeam.toLowerCase())));
	urlArray['HM']=new Array("../FT_order/FT_order_hm.php",(betTeam=="N" ? top.str_irish_kiss : eval("GameData.team_"+betTeam.toLowerCase())));
	urlArray['EO']=new Array("../FT_order/FT_order_t.php", (betTeam=="O"  ? top.str_o : top.str_e));

	var param=getParam(uid,odd_f_type,betTeam,wtype,GameData);
	var order=urlArray[wtype][0];
	
	var team=urlArray[wtype][1].replace("[Mid]","[N]").replace("<font style=background-color:#FFFF99>","").replace("</font>","");
	
	var tmp_rtype="ior_"+wtype+betTeam;
	var ioratio_str="GameData."+tmp_rtype;
	
	var ioratio=eval(ioratio_str);
	

	if(eval(ioratio_str)!=""){
	ioratio=Mathfloor(ioratio);
	ioratio=printf(ioratio,2);
}


//20121023 max新增 輸水盤 負值顯示藍色
	if (odd_f_type=="M" || odd_f_type=="I"){
		if (ioratio<0) ioratio="<font color=#1f497d>"+ioratio+"</font>";
	
		}
	


 	//var ret="<a href='"+order+"?"+param+"' target='mem_order' title='"+team+"'><font "+check_ioratio(gamerec,tmp_rtype,GameData)+">"+ioratio+"</font></a>";
	//alert(parent.name)
	var ret="<a href='javascript://' onclick=\"parent.mem_order.betOrder('FT','"+wtype+"','"+param+"');\" title='"+team+"'><font "+check_ioratio(gamerec,tmp_rtype,GameData)+">"+ioratio+"</font></a>";
	
	return ret;
	
}
	function Mathfloor(z){
	 var tmp_z;
	 tmp_z=(Math.floor(z*100+0.01))/100;
 	return tmp_z;
}

//--------------------------public function --------------------------------

//取得下注參數
function getParam(uid,odd_f_type,betTeam,wtype,GameData){
	var paramArray=new Array();
	paramArray['R']=new Array("gid","uid","odd_f_type","type","gnum","strong","langx");
	paramArray['HR']=new Array("gid","uid","odd_f_type","type","gnum","strong","langx");
	paramArray['OU']=new Array("gid","uid","odd_f_type","type","gnum","langx");
	paramArray['HOU']=new Array("gid","uid","odd_f_type","type","gnum","langx");
	paramArray['M']=new Array("gid","uid","odd_f_type","type","gnum","langx");
	paramArray['HM']=new Array("gid","uid","odd_f_type","type","gnum","langx");
	paramArray['EO']=new Array("gid","uid","odd_f_type","rtype","langx");

	var param="";
	var gid=((wtype=="R"||wtype=="OU"||wtype=="M"||wtype=="EO") ? GameData.gid : GameData.hgid);
	var gnum=eval("GameData.gnum_"+(betTeam=="N"? "c":betTeam.toLowerCase()));
	var strong=(wtype=="R" ? GameData.strong : GameData.hstrong);
	var rtype=(betTeam=="O" ? "ODD" : "EVEN");
	var type=betTeam;
	
	for (var i=0;i<paramArray[wtype].length;i++){
		if (i>0)  param+="&";
		param+=paramArray[wtype][i]+"="+eval(paramArray[wtype][i]);
	}
	return param;
}

function parsemore(GameData,g_more){
	var ret="";
	if(g_more=='0'||GameData.more=='0'){
		ret="&nbsp;";
	}else{
	 	ret="<A href=javascript: onClick=show_more('"+GameData.gid+"',event);>"+"<font class='total_color'>+"+GameData.more+"&nbsp;</font>"+str_more+"</A>";
	}			
	return ret;	
}
function show_more(gid,evt){
	evt = evt ? evt : (window.event ? window.event : null);
	var mY = evt.pageY ? evt.pageY : evt.y;
	body_browse.document.getElementById('more_window').style.position='absolute';
	body_browse.document.getElementById('more_window').style.top=mY+30;
	body_browse.document.getElementById('more_window').style.left=body_browse.document.body.scrollLeft+10;
	show_more_gid = gid;
	var  url="body_var_r_more.php?gid="+gid+"&uid="+uid+"&ltype="+ltype+"&langx="+top.langx;
	body_browse.showdata.location.href = url;
}
function parseAllBets(GameData,g_more){
	var ret="";
	if(g_more=='0'||GameData.more=='0'){
		ret="&nbsp;";
	}else{
	 	ret="<A href=javascript: onClick=show_allbets('"+GameData.gid+"',event);><font class='total_color'>"+top.str_all_bets+" ("+GameData.more+")</font></A>";
	}			
	return ret;	
}


function show_allbets(gid,evt){
	evt = evt ? evt : (window.event ? window.event : null);
	var mY = evt.pageY ? evt.pageY : evt.y;
	
	top.browse_ScrollY = getScroll(body_browse);//body_browse.scrollY;
	body_browse.document.getElementById('box').style.display="none";	
	body_browse.document.getElementById('right_div').style.display="none";
	body_browse.document.getElementById('refresh_down').style.display="none";
	try{
		body_browse.document.getElementById('p3Title').style.display="none";
	}catch(E){}
		
	if(typeof(g_date) == "undefined"){
		body_browse.document.getElementById('MFT').className="more_bar";
	}
	else {
	  body_browse.document.getElementById('MFU').className="more_bar";
	}
	
	
	body_browse.document.getElementById('more_window').style.position='absolute';
	body_browse.document.getElementById('more_window').style.top="0px";
	body_browse.document.getElementById('more_window').style.left="0px";
	show_more_gid = gid;
	retime_flag = "N"; 
	if(typeof(top.more_fave_wtype) == "undefined" ) top.more_fave_wtype = new (top.Array)();
	//if(typeof(top.more_fave_wtype[show_more_gid]) == "undefined" ) top.more_fave_wtype[show_more_gid] = new (top.Array)();
	var  url="body_var_r_allbets.php?gid="+gid+"&uid="+uid+"&ltype="+ltype+"&langx="+top.langx+"&gtype=FT";

	body_browse.showdata.location.href = url;
}

function getScroll(frameObj){
		return body_browse.scrollY || body_browse.document.body.scrollTop ; 
}




function parseMyLove(GameData){

	var tmpStr="";
	//====== 加入現場轉播功能 2009-04-09, VideoFun 放在 flash_ior_mem.js
	tmpStr = "<table width='99%'   border='0' cellpadding='0' cellspacing='0'><tr><td align='left'>"+str_even+"</td>";				
	tmpStr+= "<td class='hot_td'>";
//	tmpStr+= "<table><tr align='right'><td>";
	tmpStr+=MM_ShowLoveI(GameData.gnum_h,GameData.datetime,GameData.league,GameData.team_h,GameData.team_c);
	tmpStr+= "</td>";
	tmpStr+= "<td class='hot_tv'>";
//	if (top.casino == "SI2") {
		if (GameData.eventid != "" && GameData.eventid != "null" && GameData.eventid != undefined) {	//判斷是否有轉播
		tmpStr+= VideoFun(GameData.eventid, GameData.hot, GameData.play, "FT");
		}
//	}
	tmpStr+= "</td>";
	tmpStr+= "</tr></table>";

	return  tmpStr;
}


var isHot_game = true;//是否為世足賽

//that body_browse be self 


try{
	if(frame_broke) body_browse = this;
	else 			body_browse = body_browse;
}catch(e){
	//try{ console.log("error body_browse set from FT_mem_Function"); }catch(e){};
}


//--------------------------------public function ----------------------------
function checkHideAD(){
		if(top.hide_ad!="Y"){
			var  url="../ads.php?langx="+top.langx;
			document.getElementById('right_iframe').contentWindow.location=url;
		}else{
			var obj = document.getElementById("right_iframe");
				if(obj==null) return;
				var parentObj = obj.parentNode;
				//obj.style.display="none";
				parentObj.removeChild(obj);
		}
}

function Refreshshow(sw){
	
		body_browse.document.getElementById('right_div').style.display=(sw)?"":"none";
}
function setRefreshPos(){
		//2017.0306 Leslie 修正按排序後馬上按allbets，造成廣告又秀出來
		var bodyObj = body_browse.document.body;
		if(bodyObj==undefined || bodyObj.className!="more_bar"){
				var refresh_right;
			
				refresh_right= body_browse.document.getElementById('right_div');
				refresh_right.style.left= body_browse.document.getElementById('myTable').clientWidth*1+20;
				//refresh_right.style.top= 39;
				Refreshshow(true);
		}
	}

function parseArray(gameHead,gameData){
	var gameObj=new Object();
	for (var i=0;i<gameHead.length;i++){
		if (gameHead[i]!=""){	
			eval("gameObj."+gameHead[i]+"='"+gameData[i]+"'");
		}
	}
	return gameObj;
}


function check_ioratio(rec,rtype,GameData){
//alert(flash_ior_set);
	//return true;
	//alert(GameFT.length+"----"+keepGameData.length)

	if (flash_ior_set =='Y'){
		//alert(oldObjDataFT[rec]);
		if (""+oldObjDataFT[rec]=="undefined" || oldObjDataFT[rec].gid != GameData.gid){
			var gameObj=new Object();
			gameObj.gid=GameData.gid;
			oldObjDataFT[rec]=gameObj;
		}
		
		var new_ioratio=eval("GameData."+rtype);
		var old_ioratio=eval("oldObjDataFT[rec]."+rtype);
		
		
		if (""+old_ioratio=="undefined"){
			eval("oldObjDataFT[rec]."+rtype+"=GameData."+rtype);
			old_ioratio=eval("oldObjDataFT[rec]."+rtype);
		}
		
		//alert("old_ioratio==>"+old_ioratio+",new_ioratio==>"+new_ioratio);
		if (""+new_ioratio=="undefined" || new_ioratio==""){
			eval("oldObjDataFT[rec]."+rtype+"=GameData."+rtype);
			return;
		}
		
		/*
		if (parseFloat(old_ioratio)>parseFloat(new_ioratio) ){
			eval("oldObjDataFT[rec]."+rtype+"=GameData."+rtype);
			return "  style='border: 1px solid #FF0000;' ";
		}
		if (parseFloat(old_ioratio)<parseFloat(new_ioratio) ){
			eval("oldObjDataFT[rec]."+rtype+"=GameData."+rtype);
			return "  style='border: 1px solid #00FF00;' ";
		}
		*/
		
		if (old_ioratio!=new_ioratio && old_ioratio !="" && new_ioratio!="") {
	    	eval("oldObjDataFT[rec]."+rtype+"=GameData."+rtype);
			return "  style='background-color : yellow' ";
		}
		
		return true;
	}

}
//--------------判斷聯盟顯示或隱藏----------------
function showLeg(leg){
	for (var i=0;i<myLeg[leg].length;i++){
	if ( body_browse.document.getElementById("TR_"+myLeg[leg][i]).style.display!="none"){
				showLegIcon(leg,"LegClose",myLeg[leg][i],"none");
				
		}else{
			showLegIcon(leg,"LegOpen",myLeg[leg][i],"");
		}
	}
	if ((""+NoshowLeg[leg])=="undefined"){
		NoshowLeg[leg]=-1;
	}else{
		NoshowLeg[leg]=NoshowLeg[leg]*-1;
	}

}
function showLegIcon(leg,state,gnumH,display){
	var  ary=body_browse.document.getElementsByName(leg);
			
	for (var j=0;j<ary.length;j++){
		ary[j].innerHTML="<span id='"+state+"'></span>";
	}
	try{
		body_browse.document.getElementById("TR3_"+gnumH).style.display=display;
	}catch(E){}
	try{
		body_browse.document.getElementById("TR2_"+gnumH).style.display=display;
	}catch(E){}
	try{
		body_browse.document.getElementById("TR1_"+gnumH).style.display=display;
	}catch(E){}
	try{
		body_browse.document.getElementById("TR_"+gnumH).style.display=display;
	}catch(E){}
}
//----------------------

//分頁
function show_page(){
	//alert(rtype)
	pg_str='';
	obj_pg = body_browse.document.getElementById('pg_txt');
//	alert(t_page);
	if (t_page==0){
		t_page=1;
		//obj_pg.innerHTML = "";
		//return;
	}
	var tmp_lid="";
	if (rtype=="re"||rtype.match("^re")){
		tmp_lid=eval("parent."+sel_gtype+"_lid_ary_RE");
	}else{
		tmp_lid=eval("parent."+sel_gtype+"_lid_ary");
	}
	//alert(tmp_lid+"--"+top.swShowLoveI+"--"+t_page)
	if(tmp_lid=='ALL'&&!top.swShowLoveI){
		var disabled="";
		if (t_page==1){
			disabled="disabled";
			}
		var pghtml=(pg*1+1)+" / " +t_page+" "+top.page+"&nbsp;&nbsp; <select  onchange='chg_pg(this.options[this.selectedIndex].value)' "+disabled+">";
		for(var i=0;i<t_page;i++){
			if (pg==i){
		 		pghtml+="<option value='"+i+"' selected>"+(i+1)+"</option>";
		 	}else{
		  		pghtml+="<option value='"+i+"' >"+(i+1)+"</option>";
		  	}
		}
		pghtml+="</select>";
		obj_pg.innerHTML = pghtml;
	}else{
		obj_pg.innerHTML = "";
	}
}

//將時間 轉回 24小時//04:00p
function  change_time(get_time){
	
	if (get_time.indexOf("font") > 0 ) return get_time;
	if (get_time.indexOf("p")>0 || get_time.indexOf("a")>0){
		gtime=get_time.split(":");
		if (gtime[1].indexOf("p")>0){
			
			if (gtime[0]!="12"){
				gtime[0]=gtime[0]*1+12;
			}	
		}
		gtime[1]=gtime[1].replace("a","").replace("p","");
		
	}else{
		return get_time;
	}
	return gtime[0]+":"+gtime[1];
	
}

//隱藏我的最愛選擇聯賽
function dis_ShowLoveI(){

if(top.swShowLoveI){
  body_browse.document.getElementById("sel_league").style.display="none";
 }else{
  body_browse.document.getElementById("sel_league").style.display="";
 }
 
}


function changeTitleStr(s,at){
	if (s.charAt(at)=="H"){
		return "H";
	}else if(s.charAt(at)=="C"){
		return "A";
	}else if(s.charAt(at)=="N"){
		return "D";
	}
	return "";
}


function loadingOK(){
	//alert("loadingOK")
	try{
		body_browse.document.getElementById("refresh_btn").className="refresh_btn";
	}catch(E){}
	try{
	body_browse.document.getElementById("refresh_right").className="refresh_M_btn";
	}catch(E){}
	try{	
	body_browse.document.getElementById("refresh_down").className="refresh_M_btn";
	}catch(E){}
}


var gameCount="";
var recordHash=new Array();
function showHOT(countHOT){	
if( (""+countHOT=="") || (""+countHOT=="undefined") ){
	
	 body_browse.document.getElementById("euro_btn").style.display="none";
	 body_browse.document.getElementById("euro_up").style.display="none";
			
}else{	
		
	if(""+top.hot_game=="undefined"){
		top.hot_game="";
	}	
	var gtypeHOT =new Array("FT","BK","TN","VB","BM","TT","OP","BS");
	var countgames=countHOT.split(",");
	recordHash=new Array();
	var head_str="";
	
	if(rtype == "re"){
		head_str="RB";
	}else{
		head_str=top.head_FU;
	}
	//alert(head_str);
	
	for( var i=0;i<countgames.length;i++){
		var detailgame=countgames[i].split("|");
		recordHash[detailgame[0]+"_"+detailgame[1]]=detailgame[2]*1;
	}
	
	if(recordHash[top.head_gtype+"_"+top.hot_type+"_"+head_str]*1==0){
		body_browse.document.getElementById("euro_btn").style.display="none";
		body_browse.document.getElementById("euro_up").style.display="none";
		//body_browse.document.getElementById("euro_close").style.display="";
		if(top.hot_game!=""){
			top.hot_game="";
			body_browse.reload_var();
		}
	}else{
		if(isHot_game){
			if(top.hot_game!=""){
				body_browse.document.getElementById("euro_btn").style.display="none";
				body_browse.document.getElementById("euro_up").style.display="";
			}else{
				body_browse.document.getElementById("euro_btn").style.display="";
				body_browse.document.getElementById("euro_up").style.display="none";
			}
		}
		//body_browse.document.getElementById("euro_close").style.display="none";	
	}
	//alert(recordHash[top.head_gtype+"_HOT_RB"]);
	//alert(recordHash[top.head_gtype+"_HOT_FT"]);
	//alert(recordHash[top.head_gtype+"_HOT_FU"]);
	//parent.mem_order.showHOT(recordHash[top.head_gtype+"_HOT_FT"],recordHash[top.head_gtype+"_HOT_FU"]);
	//parent.mem_order.showHOT(recordHash["FT_HOT_FT"],recordHash["FT_HOT_FU"]);
	/*
	var today_hot=0;
	var early_hot=0;
	for( var i=0;i<gtypeHOT.length;i++){
		try{
		parent.mem_order.document.getElementById(gtypeHOT[i]+"_FT").innerHTML=eval("top.str_"+gtypeHOT[i]) + "("+recordHash[gtypeHOT[i]+"_HOT_FT"]+")";
		parent.mem_order.document.getElementById(gtypeHOT[i]+"_FU").innerHTML=eval("top.str_"+gtypeHOT[i]) + "("+recordHash[gtypeHOT[i]+"_HOT_FU"]+")";
		}catch(E){}
			
		today_hot +=recordHash[gtypeHOT[i]+"_HOT_FT"];
		early_hot +=recordHash[gtypeHOT[i]+"_HOT_FU"];
	}	
	
		parent.mem_order.showHOT(today_hot,early_hot);
	*/	
	try{
		parent.mem_order.getCountHOT(countHOT);
	}catch(e){}
		
 }		
 	
}

//function getCountHOT(){
//	return recordHash[top.head_gtype+"_HOT_FT"];
//}
function keep_show_more(gid,GameFT,gamount){
	if(gid!=''){
		show_more_gid = '';
		for (var j=0;j < gamount;j++){
			if(gid == GameFT[j].gid  && GameFT[j].more != 0){
				//body_browse.showdata.location.reload();
				show_more_gid = gid;
				return;
			}
		}
	}
	body_browse.document.getElementById('more_window').style.display='none';
}

function showCleanData(gtype,rtype,show){
	body_browse.location.href="../showCleanData.php?uid="+uid+"&ltype="+ltype+"&gtype="+gtype+"&rtype="+rtype+"&show="+show+"&langx="+langx;
}
//在body_browse載入


var ReloadTimeID;
//var sel_gtype=parent.sel_gtype;
var reloadFakeSec = 10;//秒數內做假更新
var LastReloadSec;
var ReloadTimeFake;
var isHot_game = true;//是否為世足賽
var reTimeNow = retime;

//網頁載入
function onLoad(){
	//console.log("wtype:"+rtype+" onLoad start");
	checkHideAD();
	LastReloadSec = 0;
	
	Refreshshow(false);//有日期的盤面loading 會看到刷新扭
		//廣告
	
		obj_layer = document.getElementById('LoadLayer');
		obj_layer.style.display = 'none';
		obj_layer = document.getElementById('controlscroll');
		obj_layer.style.display = 'none';			
	top.swShowLoveI=false;
	//if((""+eval("parent."+sel_gtype+"_lname_ary"))=="undefined") eval("parent."+sel_gtype+"_lname_ary='ALL'");
	//if((""+eval("parent."+sel_gtype+"_lid_ary"))=="undefined") eval("parent."+sel_gtype+"_lid_ary='ALL'");
	if(ShowType==""||rtype=="r") ShowType = 'OU';
	if(rtype=="hr") ShowType = 'OU';
	if(rtype=="re") ShowType = 'RE';
	
	if(rtype=="rpd") ShowType = 'RPD';
	if(rtype=="hrpd") ShowType = 'HRPD';
	if(rtype=="rt") ShowType = 'RT';
	if(rtype=="rf") ShowType = 'RF';
	
	if(rtype=="pd") ShowType = 'PD';
	if(rtype=="hpd") ShowType = 'HPD';
	if(rtype=="t") ShowType = 'EO';
	if(rtype=="f") ShowType = 'F';
	if(parent.leg_flag=="Y"){
		parent.leg_flag="N";
		pg=0;
		//reload_var("");
	}
	//console.log("ShowType:"+ShowType+" ShowType end");
	loading = 'N';
	
	//2015-02-04 過關畫面異動
	if(rtype == "p3"){
		try{
			if(sel_gtype == "FT"){
				showDateSel_FT();
			}
			else{
				showDateSel_FT();
			}
		}catch(E){}
	}
	
	if(loading_var == 'N'){
		ShowGameList();
		//obj_layer = document.getElementById('LoadLayer');
		//obj_layer.style.display = 'none';
	}
	if (retime_flag == 'Y'){
		//ReloadTimeID = setInterval("reload_var()",retime*1000);
		count_down();
	}else{
		var rt=document.getElementById('refreshTime');
		rt.innerHTML=top.refreshTime;	
	}
	document.getElementById("odd_f_window").style.display = "none";
	if(sel_gtype=="FU"){
		
		if (rtype == "r" || rtype == "pd" || rtype == "hpd" || rtype == "t" || rtype == "f"){
			try{
				showDateSel_Future();
			}catch(E){}
		}
		/*else{
			if(top.showtype!='hgft'){
				selgdate(rtype);
			}
		}*/
	}
	//console.log("wtype:"+rtype+" gameSort start");
	
	gameSort();	
	//console.log("wtype:"+rtype+" load start");
	
	document.getElementById("body_var").onload=iframe_onError;
	
	reload_var("");
	try{ console.log(sel_gtype+" load end"); }catch(e){};
}

function iframe_onError(){
	var iframe = document.getElementById("body_var");
	
	try{
		check = iframe.contentWindow.document.body.onload;
	}catch(e){
		check = null;
	}
	
	if(check == null){
		iframe.times = iframe.times || 0;
		showerror(iframe);
	}else{
		iframe.times = 0;
	}
}

function showerror(e){
	//2017-0216-johnson-3.新舊會員端-連線判斷改為無上限 (CRM-197)
	//e.times+=1;
	//if(e.times > 10)	return;
	setTimeout('onLoad()',5000);
}


body_var_onLoad=function(){
	_=window;
	
	if(_.parent.mem_order.location == 'about:blank'){
		_.parent.mem_order.location = '<?php echo BROWSER_IP."/app/member/select.php?uid=$uid&langx=$langx";?>';
	}
	if(_.retime > 0){
		_.retime_flag='Y';
		_.count_down();
	}else{
		_.retime_flag='N';
	}
	_.loading_var = 'N';
	if(_.clean_data_sw=="Y"){
		_.showCleanData("FT",_.rtype,"FT");
	}else{
		if(_.loading == 'N' && _.ShowType != ''){
			_.ShowGameList();
			//parent.body_browse.document.all.LoadLayer.style.display = 'none';
		}
	}
}


window.onscroll = scroll;

function scroll()
{
	var refresh_right;
	try{
		refresh_right= document.getElementById('right_div');
		refresh_right.style.display = refresh_right.style.display;
	}catch(e){
		refresh_right= document.getElementById('refresh_right');
	}
	refresh_right.style.top=document.body.scrollTop+39;
	
	//var refresh_down= document.getElementById('refresh_down');
	
	
	//refresh_down.style.left=-100;
	//refresh_down.style.left=10+document.getElementById('myTable').clientWidth/2+refresh_down.style.width/2;
	//refresh_right.style.top=document.body.scrollTop+21+34+25+10;
	//refresh_right.style.top=document.body.scrollTop+(document.body.clientHeight-118)/2;
	                      // 捲軸位置              +( frame高度                -header高度)/2
	
 //alert("scroll event detected! "+document.body.scrollTop);
// 
	//conscroll.style.display="block";
//conscroll.style.top=document.body.scrollTop;
 // note: you can use window.innerWidth and window.innerHeight to access the width and height of the viewing area
}

function showDateSel(){
	var showDateSel = body_browse.document.getElementById("showDateSel");
	var dateSel = body_browse.document.getElementById("dateSel").innerHTML;
	var tmpShow = "";
	
	for(var i=0; i<DateAry.length; i++){
		var tmp = dateSel;
		var sel_class = "&nbsp;";
		var sel_value = "";
		var sel_str = "";
		
		if(i == 0){
			tmp = tmp.replace("*DATE_SHOWTYPE*","");
			sel_value = DateAry[i];
			sel_str = top.showtoday;
		}else if((i+1) == DateAry.length){
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry[1]+"|"+DateAry[2]+"|"+DateAry[3]+"|"+DateAry[4]+"|"+DateAry[5]+"|"+DateAry[6];
			sel_str = top.showfuture;
		}else{
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry[i];
			sel_str = chgDateStr(DateAry[i]);
		}
		
		if(top.sel_gd=="today" && i==0){
			sel_class = "day_text_red";
		}else{
			var tAry = top.sel_gd.split("|");
			if((tAry.length > 1) && ((i+1) == DateAry.length)){
				sel_class = "day_text_red";
			}else if(sel_value == top.sel_gd){
				sel_class = "day_text_red";
			}
		}
		
		tmp = tmp.replace("*DATE_CLASS*",sel_class);
		tmp = tmp.replace("*DATE_VALUE*",sel_value);
		tmp = tmp.replace("*DATE_SEL*",sel_str);
		
		tmpShow += tmp;
	}
	
	showDateSel.innerHTML = tmpShow;
}

function showDateSel_FT(){
	var showDateSel = body_browse.document.getElementById("showDateSel");
	var dateSel = body_browse.document.getElementById("dateSel").innerHTML;
	var tmpShow = "";
	//console.log("DateAry.length =====>"+DateAry.length);
	for(var i=0; i<=DateAry.length; i++){
		var tmp = dateSel;
		var sel_class = "&nbsp;";
		var sel_value = "";
		var sel_str = "";
		
		if(i == 0){
			tmp = tmp.replace("*DATE_SHOWTYPE*","");
			sel_value = DateAry[i];
			sel_str = top.showtoday;
		}else if((i+1) == DateAry.length){
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry[1]+"|"+DateAry[2]+"|"+DateAry[3]+"|"+DateAry[4]+"|"+DateAry[5]+"|"+DateAry[6];
			sel_str = top.showfuture;
		}else if(i == DateAry.length){
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = 'ALL';
			sel_str = top.date;
		}else{
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry[i];
			sel_str = chgDateStr(DateAry[i]);
		}
		
		if(top.sel_gd=="today" && i==0){
			sel_class = "day_text_red";
		}else{
			var tAry = top.sel_gd.split("|");
			if((tAry.length > 1) && ((i+1) == DateAry.length)){
				sel_class = "day_text_red";
			}else if(sel_value == top.sel_gd){
				sel_class = "day_text_red";
			}
		}
		
		tmp = tmp.replace("*DATE_CLASS*",sel_class);
		tmp = tmp.replace("*DATE_VALUE*",sel_value);
		tmp = tmp.replace("*DATE_SEL*",sel_str);
		
		tmpShow += tmp;
	}
	
	showDateSel.innerHTML = tmpShow;
}


function showDateSel_Future(){
	var showDateSel = body_browse.document.getElementById("showDateSel");
	var dateSel = body_browse.document.getElementById("dateSel").innerHTML;
	var tmpShow = "";
	
	//初始化選擇的日期
	top.sel_gd = g_date;
	//g_date = DateAry[0];
	
	//日期清單要列幾個
	var dateList = 9;
	
	for(var i=0; i<dateList; i++){
		var tmp = dateSel;
		var sel_class = "&nbsp;";
		var sel_value = "";
		var sel_str = "";
		
		if(i == dateList -2){
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry.slice(i).join("|");
			sel_str = top.showfuture;
		}else if(i == dateList -1){
			tmp = tmp.replace("*DATE_SHOWTYPE*","ALL");
			sel_value = "ALL";
			//sel_value = DateAry.join("|");
			sel_str = top.date;
		}else{
			tmp = tmp.replace("*DATE_SHOWTYPE*","FU");
			sel_value = DateAry[i];
			sel_str = chgDateStr(DateAry[i]);
		}
		
		if(sel_value == top.sel_gd){
			sel_class = "day_text_red";
		}else{
			var tAry = top.sel_gd.split("|");
			if((tAry.length > 1) && ((i+1) == DateAry.length)){
				sel_class = "day_text_red";
			}else if(sel_value == top.sel_gd){
				sel_class = "day_text_red";
			}
		}
		
		tmp = tmp.replace("*DATE_CLASS*",sel_class);
		tmp = tmp.replace("*DATE_VALUE*",sel_value);
		tmp = tmp.replace("*DATE_SEL*",sel_str);
		
		tmpShow += tmp;
	}
	
	showDateSel.innerHTML = tmpShow;
}

function chgDateStr(date){
	var showgdate = date.split("-");
	var tmpsdate = showgdate[1]+"-"+showgdate[2];
	
	if(top.langx=="zh-tw" || top.langx=="zh-cn"){
		if((showgdate[1]*1)< 10)	showgdate[1] = showgdate[1]*1;
		if((showgdate[2]*1)< 10)	showgdate[2] = showgdate[2]*1;
		tmpsdate = showgdate[1]+top.showmonth+showgdate[2]+top.showday;
	}
	
	return tmpsdate;
}

function new_chg_gdate(obj,stype,date){
	g_date = date;
	pg = 0;
	
	
	/*try{
		if(g_date != top.sel_gd && (g_date != "" || top.sel_gd != "today") && (top.cgTypebtn == "hp3_class" || top.cgTypebtn == "hpa_class")){
			parent.header.reload_leg();
		}
	}catch(e){}*/
	
	//2015-02-09 綜合過關 選日期換色
	var tmpObj = document.getElementById("showDateSel");
	for(var i=0; i<tmpObj.children.length; i++){
		tmpObj.children[i].className = "";
	}
	obj.className = "day_text_red";
	
	parent.display_loading(true);
	
	reload_var("",stype);
}

function reload_fake(){
	//parent.display_loading(true);
	//console.log(" under 10 ");
	reTimeNow = retime;
	ReloadTimeFake = setTimeout("ShowGameList()",200);
}


function reload_chk(time){
		if(ReloadTimeFake){
			clearTimeout(ReloadTimeFake);
		}
		
		var nowReloadSec = new Date().getTime();
		var nowSec = Math.round(nowReloadSec/1000);
		//console.log("now >> "+nowSec);
		
		if(LastReloadSec == 0){
			LastReloadSec = nowSec;
		}else{
			var lastSec = LastReloadSec;
			//console.log("last >> "+lastSec);
			//console.log(" > "+(nowSec-lastSec));
			
			if((nowSec - lastSec) >= time){
				//console.log(" over "+time+" ");
				//LastReloadSec = 0;
				LastReloadSec = nowSec;
				return true
			}else{
				return false;
			}
		}
}

function reload_var(Level,p3_sel){
	loading_var = "Y";
	
	var tmp_sel_gtype = sel_gtype;
	var showt = "";
	var l_id ;
	if(rtype == "p3"){
		tmp_sel_gtype = (top.sel_gd == "today")?"FT":"FU";
		var tmp_s = (top.sel_gd == "today")?"":"FU";
		
		if(p3_sel != undefined){
			if(p3_sel == ""){
				tmp_sel_gtype = "FT";
			}else{
				tmp_sel_gtype = "FU";
			}
			tmp_s = p3_sel;
		}
		
		showt = "&showgtype="+tmp_s;
		var tmp = "./body_var.php";
		l_id =  parent[sel_gtype+"_lid_type"];
	}else{
		if(Level == "up"){
			var tmp = "./"+tmp_sel_gtype+"_browse/body_var.php";
			if(tmp_sel_gtype == "FU"){
				tmp = "./FT_future/body_var.php";
			}
		}else{
			var tmp = "./body_var.php";
		}
		l_id =  parent[sel_gtype+"_lid_type"];
	}
	
	
	if(top.showtype=="hgft" && tmp_sel_gtype=="FU"){
		l_id = 3;
	}
	
	if(top.hot_game == undefined)	top.hot_game = "";
	if(rtype == "p3")	top.hot_game = "";
	
	var homepage = tmp+"?uid="+uid+"&rtype="+rtype+"&langx="+langx+"&mtype="+mtype+"&page_no="+pg+"&league_id="+l_id+"&hot_game="+top.hot_game+showt;
	
	if(tmp_sel_gtype == "FU"){
		homepage += "&g_date="+g_date;
	}
	
	//try{
	//	console.log("homepage >> "+homepage);
	//}catch(E){}
	
	document.getElementById("body_var").contentWindow.location.href = homepage;
}




var cntTimer;
//倒數自動更新時間
function count_down(){
	if(cntTimer) clearTimeout(cntTimer);
	var rt=document.getElementById('refreshTime');
	cntTimer = setTimeout('count_down()',1000);
	if (retime_flag == 'Y'){
		if(reTimeNow <= 0){
			if(loading_var == 'N')
				reload_var("");
				return;
		}
		reTimeNow--;
		rt.innerHTML=reTimeNow;
		//alert(retime);
		//obj_cd = document.getElementById('cd');
		//obj_cd.innerHTML = retime;
	}
}



//賽事換頁
function chg_pg(mypg){
	if (mypg==pg) {return;}
	pg=mypg;
	reload_var("");
}

function chg_wtype(wtype){
	//parent.display_loading(true);
		var l_id =eval("parent."+sel_gtype+"_lid_type");
	if(top.swShowLoveI) l_id=3;
	if(top.showtype=='hgft'&&sel_gtype=="FU"){
		l_id=3;	
	}
	//console.log("wtype:"+wtype);
	location.href="index.php?uid="+uid+"&rtype="+wtype+"&langx="+langx+"&mtype="+mtype+"&league_id="+l_id+"&hot_game="+top.hot_game;
	
	//<frame name="body_var" scrolling="NO" noresize src="body_var.php?uid=<?echo $uid?>&rtype=<?echo $rtype?>&langx=<?echo $langx?>&mtype=<?echo $mtype;?>&delay=<?echo $delay;?>&league_id=<?echo $league_id?>">
	//<frame name="body_browse" src="body_browse.php?uid=<?echo $uid?>&rtype=<?echo $rtype?>&langx=<?echo $langx?>&mtype=<?echo $mtype;?>&delay=<?echo $delay;?>&showtype=<?echo $showtype?>">
	
	
}

//選擇聯盟=================start
function chg_league(){
//	var legframe= document.getElementById('legFrame');
	var legview =document.getElementById('legView');
	var parlayType = "";
	if(rtype == "p3"){
		if(top.sel_gd!="today")	parlayType = "&parlayType=FU";
	}
	
	try{	
		legFrame.location.href="<?php echo U('Old/legFrame');?>";
	}catch(e){
	   legFrame.src="<?php echo U('Old/legFrame');?>";
 
	}
	legview.style.display='';
	legview.style.top=  document.body.scrollTop+82; //21+34+25+10;
	//alert(document.getElementById('myTable').clientWidth+"----"+document.getElementById('legFrame').width);
	//legview.style.left=document.getElementById('myTable').clientWidth*1/2-337+10; //100;
	legview.style.left=document.getElementById('myTable').scrollLeft+10;
	
	
	//self.location="./body_var_lid.php?uid="+uid+"&rtype="+rtype+"&langx="+langx+"&mtype="+ltype;
}
function setleghi(leghight){
	var legview =document.getElementById('legFrame');
	//alert(legview.Height);
	//legview.Height = 800;
	//alert(legview.Height);
	//alert("-----"+leghight);
	//alert("-----"+legview.scrollHeight);
	//legview.Height=0;
	//legview.height = document.body.scrollHeight;
	if((leghight*1) > 95){
		legview.height = leghight;
	}else{
		
		legview.height = 95;
	}
	//legview.height =legview.scrollHeight; 
	//alert("222-----"+legview.height);
	//legview.height=legview.scrollHeight;
}
function LegBack(){
	var legview =document.getElementById('legView');
	legview.style.display='none';
	reload_var("");
}

//選擇聯盟=================end
function unload(){
	clearInterval(ReloadTimeID);
}
window.onunload=unload;

//-----------------------------future------------------------
function selgdate(rtype,cdate){
	//賽事分日期
	var date_opt = "";
	var arrDate =new Array();
	var year ='';
	var nowDate="";	
	if(top.showtype=='hgft'){
		var tmpdate=DateAry[0].split("-");
		for (i = 0; i < hotgdateArr.length; i++) {
			var tmpd =hotgdateArr[i].split("-");
			if(tmpdate[1]*1 > tmpd[0]*1){
				year =tmpdate[0]*1+1;
			}else{
				year =tmpdate[0];
			}
			arrDate =arraySort1(arrDate,year+'-'+hotgdateArr[i]);
		}
		if(cdate=='')cdate ='ALL';
		date_opt = '<select id="g_date" name="g_date" onChange="chg_gdate()">';
		date_opt+= '<option value="ALL" '+((cdate =='ALL')?'selected':'')+'>'+top.alldata+'</option>';
		for (i = 0; i < arrDate.length; i++) {
			nowDate=showdate(arrDate[i]);
			date_opt+= '<option value="'+arrDate[i]+'" '+((cdate ==arrDate[i])?'selected':'')+'>'+nowDate+'</option>';
		}
		date_opt+= "</select>";
	}else{
		arrDate=DateAry ;
		date_opt = "<select id=\"g_date\" name=\"g_date\" onChange=\"chg_gdate()\">";
		date_opt+= "<option value=\"ALL\">"+top.alldata+"</option>";
		if (rtype == "r") {
			date_opt+= "<option value=\"1\" >"+top.S_EM+"</option>";
		}
		for (i = 0; i < arrDate.length; i++) {
			nowDate=showdate(arrDate[i]);
			date_opt+= "<option value=\""+arrDate[i]+"\" >"+nowDate+"</option>";
		}
		date_opt+= "</select>";
	}
	
	document.getElementById("show_date_opt").innerHTML = date_opt;
}
function showdate(sdate){
	var showgdate=sdate.split("-");
	tmpsdate=showgdate[1]+"-"+showgdate[2];
	if(top.langx=="zh-tw"||top.langx=="zh-cn") {
		if((showgdate[1]*1)< 10) showgdate[1]=showgdate[1]*1;
		if((showgdate[2]*1)< 10) showgdate[2]=showgdate[2]*1;
		tmpsdate=showgdate[1]+top.showmonth+showgdate[2]+top.showday;
	}
	return tmpsdate;
}
function arraySort1(array ,data){
	var outarray =new Array();
	var newarray =new Array();
	for(var i=0;i < array.length ;i++){
		if(array[i]<= data){
			outarray.push(array[i]);
		}else{
			newarray.push(array[i]);
		}
	}
	outarray.push(data);
	for(var i=0;i < newarray.length ;i++){
		outarray.push(newarray[i]);		
	}
	return  outarray;
}

//切換日期
function chg_gdate(){
	
	var obj_gdate = document.getElementById("g_date");
	
	g_date=obj_gdate.value;
	pg=0;
	reload_var("");
}

//====== 取表格 TD 的x軸
function GetTD_X(TD_lay,GetTableID){
	var TBar = document.getElementById(GetTableID);
	var td_x = TD_lay;
	for(var i=0; i < TBar.rows[0].children.length; i++){
		if (i == TD_lay) { break; }
		td_x += TBar.rows[0].children[i].clientWidth;
	}
	return td_x;
}
//====== 取表格 TD 的y軸
function GetTD_Y(AryIndex,GetTableID){
	var TBar = document.getElementById(GetTableID);
	var td_y = parseInt(AryIndex)+2;
	
	for(var i=0; i <= parseInt(AryIndex)+1; i++){
		try{
			td_y += TBar.rows[i].clientHeight;
		} catch (E){
			td_y += TBar.rows[i-1].clientHeight;
		}
	}
	return td_y;
}




//----------------------------我的最愛  start----------------------------------
function showPicLove(){
	var gtypeNum= StatisticsGty(top.today_gmt,top.now_gmt,getGtypeShowLoveI());
	try{
		document.getElementById("fav_num").style.display = "none";
		document.getElementById("showNull").style.display = "none";
		document.getElementById("showAll").style.display = "none";
		document.getElementById("showMy").style.display = "none";
		if(gtypeNum!=0){
			document.getElementById("live_num").innerHTML =gtypeNum;
			document.getElementById("fav_num").style.display = "block";
		 if(top.hot_game!=""){
				document.getElementById("showMy").style.display = "block";	
		 }else{	
			if(top.swShowLoveI){
				document.getElementById("showAll").style.display = "block";
			}else{
				document.getElementById("showMy").style.display = "block";	
			}
		 }	
		}else{
			document.getElementById("showNull").style.display = "block";
			top.swShowLoveI=false;
		}
	}catch(E){}
}
//我的最愛中的顯示全部
function showAllGame(gtype){
	top.swShowLoveI=false;
	//eval(""+sel_gtype+"_lid_type=''");
	eval("parent."+sel_gtype+"_lid_type=top."+sel_gtype+"_lid['"+sel_gtype+"_lid_type']");
	reload_var("");
}

//單式盤面點下我的最愛
function showMyLove(gtype){
	top.swShowLoveI =true;
	//精選賽事導回
	if(isHot_game){
		if(top.hot_game!=""){
		top.hot_game="";
		document.getElementById("euro_btn").style.display=''; 
		document.getElementById("euro_up").style.display='none';
		}
	}
	//
	pg =0;
	eval("parent."+sel_gtype+"_lid_type='3'");
	reload_var("");
}


function StatisticsGty(today,now_gmt,gtype){
	var out=0;
	var array =new Array(0,0,0);
	var tmp =today.split("-");
	var newtoday =tmp[1]+"-"+tmp[2];
	var Months =tmp[1]*1;
	tmp =now_gmt.split(":");
	var newgmt=tmp[0]+":"+tmp[1];
	var tmpgday = new Array(0,0);
	var bf = false;
	for (var i=0 ; i < top.ShowLoveIarray[gtype].length ; i++){
		//alert(top.ShowLoveIarray[gtype][i][1]+","+top.ShowLoveIarray[gtype][i][2]+","+top.ShowLoveIarray[gtype][i][3]+","+top.ShowLoveIarray[gtype][i][4]+","+top.ShowLoveIarray[gtype][i][4]);
		tmpday = top.ShowLoveIarray[gtype][i][1].split("<br>")[0];
		tmpgday = tmpday.split("-");
		tmpgmt =top.ShowLoveIarray[gtype][i][1].split("<br>")[1];
		tmpgmt=time_12_24(tmpgmt);
		if(++tmpgday[0] < Months){ 
			bf = true;
		}else{
			bf = false;
		}
		if(bf){
			array[2]++;
		}else{
			if(newtoday >= tmpday ){
				if((newtoday+" "+newgmt) >= (tmpday+" "+tmpgmt)){
					array[0]++;	//走地	
				}else{	
					array[1]++;	//單式	
				}
			}else if(newtoday < tmpday){
				array[2]++;	//早餐
			}
		}
	}
	if(sel_gtype=="FT"||sel_gtype=="OP"||sel_gtype=="BK"||sel_gtype=="BS"||sel_gtype=="VB"||sel_gtype=="TN"){
		if(rtype=="re"){
			out=array[0];
		}else{	
			out=array[1];
		}
	}else if(sel_gtype=="FU"||sel_gtype=="OM"||sel_gtype=="BU"||sel_gtype=="BSFU"||sel_gtype=="VU"||sel_gtype=="TU"){
		out=array[2];
	}
	
	return out;
}

function time_12_24(stTime){
	var out="";
	var shour =stTime.split(":")[0]*1;
	var smin=stTime.split(":")[1];
	var aop =smin.substr(smin.length-1,1);
	if(aop =="p"){
		if((shour*1)>0 && (shour*1) < 12)
		shour += 12;
	}
	out=((shour < 10)?"0":"")+shour+":"+smin;
	return out;
}
//if (top.keep_LoveI_array_FT==undefined) top.keep_LoveI_array_FT=new Array();
// new array{球類 , new array {gid ,data time ,聯盟,H,C,sw}}
function addShowLoveI(gid,getDateTime,getLid,team_h,team_c){
	
	
	var getGtype =getGtypeShowLoveI();
	
	var getnum =top.ShowLoveIarray[getGtype].length;
	var sw =true;
	for (var i=0 ; i < top.ShowLoveIarray[getGtype].length ; i++){
		if(top.ShowLoveIarray[getGtype][i][0]==gid && top.ShowLoveIarray[getGtype][i][1] == getDateTime)
			sw = false;
	}
	//alert(sw+",gid="+gid+",getDateTime="+getDateTime+",getLid="+getLid+",team_h="+team_h+",team_c="+team_c);
	if(sw){
		top.ShowLoveIarray[getGtype] = arraySort(top.ShowLoveIarray[getGtype] ,new Array(gid,getDateTime,getLid,team_h,team_c));
		//單式最愛帶進去滾球
		if(rtype!="re" && top.keep_LoveI_array_FT!=null){
			loveI_has_in=true;
			for (i=0;i < top.keep_LoveI_array_FT.length;i++){
				if(top.keep_LoveI_array_FT[i][0]==gid){
					loveI_has_in=false;
					break;
				}
			}
			if(loveI_has_in){
				tmpd=getDateTime.split("<br>");
				tmpDateTime=tmpd[0]+"<br>"+tmpd[1];
				top.keep_LoveI_array_FT.push(new Array(gid,tmpDateTime,getLid,team_h,team_c));
			}
		}
		//alert("top.keep_LoveI_array_FT==>"+top.keep_LoveI_array_FT.length);
		chkOKshowLoveI();
	}
	
	document.getElementById("sp_"+MM_imgId(getDateTime,gid)).innerHTML = "<div class=\"fov_icon_on\" style=\"cursor:hand\" title=\""+top.str_delShowLoveI+"\" onClick=\"chkDelshowLoveI('"+getDateTime+"','"+gid+"');\"></div>";	
}

function auto_re_addShowLoveI(Game_Data){
	var getGtype =getGtypeShowLoveI();

	//var tmpAry = new Array();
	//for (var k=0;k < top.keep_LoveI_array_FT.length;k++){	
		//tmpAry[tmpAry.length] = top.keep_LoveI_array_FT[k];
	//}
	//top.keep_LoveI_array_FT.toString();
	//if(top.keep_LoveI_array_FT instanceof Array) alert("true");
	//else alert("false");
	if(top.keep_LoveI_array_FT!=null){
	for (var i=top.keep_LoveI_array_FT.length-1;i >= 0;i--){
		var tmp=top.keep_LoveI_array_FT[i][1].split("<br>");
		newTime=change_time(tmp[1])+":00";
		var tmp_today_gmt=top.today_gmt.split("-");
		chk_date_time=tmp_today_gmt[0]+"-"+tmp[0]+" "+newTime;
		var tmp_find=false;
		var tmp_gid=top.keep_LoveI_array_FT[i][0];
		if(chk_date_time < top.today_gmt+" "+top.now_gmt){
			//檢查賽程
			for(var a=0;a < Game_Data.length;a++){
				//alert(Game_FT[a][3]+"---"+tmp_gid);
					if(Game_Data[a][3]==tmp_gid){
						tmp_find=true;
						break;
					}
			}
			if(tmp_find){
				top.ShowLoveIarray[getGtype] = arraySort(top.ShowLoveIarray[getGtype] ,top.keep_LoveI_array_FT[i]);
			}
			//top.keep_LoveI_array_FT.splice(i,1);
			Array.prototype.splice.call(top.keep_LoveI_array_FT,i,1);
			
		}
	}
}
	chkOKshowLoveI();
	//top.keep_LoveI_array_FT = tmpAry;
}

function arraySort(array ,data){
	var outarray =new Array();
	var newarray =new Array();
	for(var i=0;i < array.length ;i++){
		if(array[i][1]<= data[1]){
			outarray.push(array[i]);
		}else{
			newarray.push(array[i]);
		}
	}
	outarray.push(data);
	for(var i=0;i < newarray.length ;i++){
		outarray.push(newarray[i]);		
	}
	return  outarray;
}


function getGtypeShowLoveI(){
	var Gtype;
	var getGtype =sel_gtype;
	var getRtype =rtype;
	Gtype =getGtype;
	if(getRtype=="re"){
		Gtype +="RE";
	}
	/*
	if(getGtype =="FU"||getGtype=="FT"){
		Gtype ="FT";
	}else if(getGtype =="OM"||getGtype=="OP"){
		Gtype ="OP";
	}else if(getGtype =="BU"||getGtype=="BK"){
		Gtype ="BK";
	}else if(getGtype =="BSFU"||getGtype=="BS"){
		Gtype ="BS";
	}else if(getGtype =="VU"||getGtype=="VB"){
		Gtype ="VB";
	}else if(getGtype =="TU"||getGtype=="TN"){
		Gtype ="TN";
	}else {
		Gtype ="FT";
	}
	*/
	
	//alert("in==>"+sel_gtype+",out==>"+Gtype);
	return Gtype;
}
function chkOKshowLoveI(){
	var getGtype = getGtypeShowLoveI();
	var getnum =top.ShowLoveIOKarray[getGtype].length ;
	var ibj="" ;
	top.ShowLoveIOKarray[getGtype]="";
	for (var i=0 ; i < top.ShowLoveIarray[getGtype].length ; i++){
		tmp = top.ShowLoveIarray[getGtype][i][1].split("<br>")[0];
		top.ShowLoveIOKarray[getGtype]+=tmp+top.ShowLoveIarray[getGtype][i][0]+",";
	}
	showPicLove();
}


function chkDelshowLoveI(getDateTime,gid){
	var getGtype = getGtypeShowLoveI();	
	var tmpdata = getDateTime.split("<br>")[0]+gid;
	var tmpdata1 ="";
	var ary = new Array();
	var tmp = new Array();
	tmp = top.ShowLoveIarray[getGtype];
	top.ShowLoveIarray[getGtype] = new Array();
	//top.keep_LoveI_array_FT.toString();//=type(top.keep_LoveI_array_FT);
	//top.keep_LoveI_array_FT=top.keep_LoveI_array_FT.toString().split(",");
	//if(top.keep_LoveI_array_FT instanceof Array) alert("true");
	//else alert("false");
	//alert("1 top.keep_LoveI_array_FT.length="+top.keep_LoveI_array_FT.length);
	for (var i=0 ; i < tmp.length ; i++){
		tmpdata1 =tmp[i][1].split("<br>")[0]+tmp[i][0];
		if(tmpdata1 == tmpdata){
			ary = tmp[i];
			if(top.keep_LoveI_array_FT!=null){
			for (var s=0;s < top.keep_LoveI_array_FT.length;s++){
				if(top.keep_LoveI_array_FT[s][0]==gid) Array.prototype.splice.call(top.keep_LoveI_array_FT,s,1); //top.keep_LoveI_array_FT.splice(s,1);
			}
			}
			continue;
		}
		top.ShowLoveIarray[getGtype].push(tmp[i]);
	}
	//alert("2 top.keep_LoveI_array_FT.length="+top.keep_LoveI_array_FT.length);
	
	chkOKshowLoveI();
	var gtypeNum= StatisticsGty(top.today_gmt,top.now_gmt,getGtypeShowLoveI());
	if(top.swShowLoveI){
		
		var sw=false;
		if(gtypeNum==0){
			top.swShowLoveI=false;
			eval("parent."+sel_gtype+"_lid_type=top."+sel_gtype+"_lid['"+sel_gtype+"_lid_type']");
			reload_var("");
		}else{
			ShowGameList();
		}
	}else{
		if(gtypeNum==0){
			reload_var("");
		}else{
			document.getElementById("sp_"+MM_imgId(ary[1],ary[0])).innerHTML ="<div id='"+MM_imgId(ary[1],ary[0])+"' class=\"fov_icon_out\" style=\"cursor:hand;display:none;\" title=\""+top.str_ShowMyFavorite+"\" onClick=\"addShowLoveI('"+ary[0]+"','"+ary[1]+"','"+ary[2]+"','"+ary[3]+"','"+ary[4]+"'); \"></div>";	
    }
	}
}

function chkDelAllShowLoveI(){
	var getGtype=getGtypeShowLoveI();
	top.ShowLoveIarray[getGtype]= new Array();
	top.keep_LoveI_array_FT=new Array();
	top.ShowLoveIOKarray[getGtype]="";
	if(top.swShowLoveI){
		top.swShowLoveI=false;
		eval("parent."+sel_gtype+"_lid_type=top."+sel_gtype+"_lid['"+sel_gtype+"_lid_type']");
		pg =0;
		reload_var("");
	}else{
		ShowGameList();
	}
}
//檢查所選的最愛賽事是否已經進入滾球或是結束
function checkLoveCount(GameArray){
	
	var getGtype = getGtypeShowLoveI();	
	var tmpdata = "";
	var tmpdata1 ="";
	var ary = new Array();
	var tmp = new Array();
	tmp = top.ShowLoveIarray[getGtype];
	top.ShowLoveIarray[getGtype] = new Array();
	for (s=0;s < GameArray.length;s++){
		tmpdata=GameArray[s].datetime.split("<br>")[0]+GameArray[s].gnum_h;
		for (var i=0;i < tmp.length; i++){
			tmpdata1 =tmp[i][1].split("<br>")[0]+tmp[i][0];
			//alert(tmpdata1+","+tmpdata);
			if(tmpdata1 == tmpdata){
				top.ShowLoveIarray[getGtype].push(tmp[i]);
			}
		}
	}	
	chkOKshowLoveI();
}

function mouseEnter_pointer(tmp){
	//alert("==="+tmp.split("_")[1])
	try{
	document.getElementById(tmp.split("_")[1]).style.display ="block";
	}catch(E){}
}

function mouseOut_pointer(tmp){
	try{
	document.getElementById(tmp.split("_")[1]).style.display ="none";
	}catch(E){}
}

function chkLookShowLoveI(){
	top.swShowLoveI =true;
	eval("parent."+sel_gtype+"_lid_type='3'");
	pg =0;
	reload_var("");
}




function MM_imgId(time,gid){	
	var tmp = time.split("<br>")[0];
	//alert(tmp+gid);
	return tmp+gid;
}


//----------------------------我的最愛  end----------------------------------




//--------------------------odd_f 	start--------------------
//盤口onclick事件

function ChkOddfDiv(){

	// alert(top.odd_f_type);
	var odd_show="<select id=myoddType onchange=chg_odd_type()>";
	var tmp_check="";
	for (i = 0; i < Format.length; i++) {
		//沒盤口選擇時，預設為H(香港變盤)
		if((odd_f_str.indexOf(Format[i][0])!=(-1))&&Format[i][2]=="Y"){
	
	   	if(top.odd_f_type==Format[i][0]){
	   		odd_show+="<option value="+Format[i][0]+tmp_check+" selected>"+Format[i][1]+"</option>";
			}else{
         odd_show+="<option value="+Format[i][0]+tmp_check+">"+Format[i][1]+"</option>"; 
      }
		}
    //else{
		//	odd_show+="<option value="+Format[i][0]+tmp_check+">"+Format[i][1]+"</option>";
		//	}
		//}
	}
	odd_show+"</select>";
	document.getElementById("Ordertype").innerHTML=odd_show;

}

//切換盤口
function chg_odd_type(){
	var myOddtype=document.getElementById("myoddType");
	if(top.odd_f_type == myOddtype.options[myOddtype.selectedIndex].value) {
		refreshReload();
		return;
	}
	top.odd_f_type = myOddtype.options[myOddtype.selectedIndex].value;
	var tmp = top.uid.match(/m\d*l\d*$/);
	tmp = tmp[0];
	tmp =	tmp.substring(1,tmp.length).split("l")
	tmp = tmp[0];
	top.CM.set("OddType@"+tmp,top.odd_f_type);
	refreshReload();
}

function show_oddf(){
	for (i = 0; i < Format.length; i++) {
		if(Format[i][0]==top.odd_f_type){
			document.getElementById("oddftext").innerHTML=Format[i][1];
		}
	}
	
}
//--------------------------odd_f 	end--------------------
var keep_drop_layers;
var dragapproved=false;
var iex;
var iey;
var tempx;
var tempy;
if (document.all){
	document.onmouseup=new Function("dragapproved=false;");
}
function initializedragie(drop_layers){
	return;
	keep_drop_layers=drop_layers;
	iex=event.clientX
	iey=event.clientY
	eval("tempx="+drop_layers+".style.pixelLeft")
	eval("tempy="+drop_layers+".style.pixelTop")
	dragapproved=true;
	document.onmousemove=drag_dropie;
}
function drag_dropie(){
	if (dragapproved==true){
		eval("document.all."+keep_drop_layers+".style.pixelLeft=tempx+event.clientX-iex");
		eval("document.all."+keep_drop_layers+".style.pixelTop=tempy+event.clientY-iey");
		return false
	}
}

function refreshReload(level,fake){
	var ObjDataFT=new Array();
	document.getElementById("refresh_right").className='refresh_M_on';
	document.getElementById("refresh_btn").className='refresh_on';
	document.getElementById("refresh_down").className='refresh_M_on';
	
	if(fake && !reload_chk(reloadFakeSec)){
		//console.log("a");
		reload_fake();
	}else{
		//console.log("b");
		reload_var(level);
	}
}

function parseArray(gameHead,gameData){
	var gameObj=new Object();
	for (var i=0;i<gameHead.length;i++){
		if (gameHead[i]!=""){	
			eval("gameObj."+gameHead[i]+"='"+gameData[i]+"'");
		}
	}
	return gameObj;
}



function get_timer(){return (new Date()).getTime();} // 計數器



function Euro(){
	if(top.hot_game!=""){
		top.hot_game="";
		top.swShowLoveI=false;
		document.getElementById("euro_btn").style.display=''; 
		document.getElementById("euro_up").style.display='none';
	}else{
		top.hot_game=top.hot_type+"_";
		tmp_sel_gtype = (top.sel_gd == "today")?"FT":"FU";
		if(tmp_sel_gtype == "FU"){
			g_date="ALL";
			showDateSel_Future();
		}
		document.getElementById("euro_btn").style.display='none'; 
		document.getElementById("euro_up").style.display='';
	
	}
	
	try{
		var types = (top.hot_game=="")?"":top.head_gtype+"_"+top.head_btn;
		parent.mem_order.goEuro_HOT_btn(types);
	}catch(E){}
	
	pg =0;
	show_page();
	reload_var("");

}

function Eurover(act){
 //alert(act.className)
	if(act.className=="euro_btn"){
		act.className='euro_over';
	}else if(act.className=="euro_up"){
		act.className='euro_up_over';
	}
}
 
function Eurout(act){
	//alert(act.className)
 if(act.className=="euro_over"){
		act.className='euro_btn';
	}else if(act.className=="euro_up_over"){
		act.className='euro_up';
	}
} 


function getObjAbsolute(obj){
	var abs = new Object();
	
	abs["left"] = obj.offsetLeft;
	abs["top"] = obj.offsetTop;
	
	while (obj = obj.offsetParent) {
		abs["left"] += obj.offsetLeft;
		abs["top"] += obj.offsetTop;
	}
	
	return abs;
}

function show_lego_sort(Obj,event){
	if(document.getElementById("SortTable").style.display=="none"){
		abs=getObjAbsolute(Obj);
		document.getElementById("SortTable").style.top=abs["top"]+20;
		document.getElementById("SortTable").style.left=abs["left"]+2;
		document.getElementById("SortTable").style.display ="";
		document.getElementById("uid").value=top.uid;
		document.getElementById("langx").value=top.langx;
		document.getElementById("SortForm").action="../setSortType.php";
	}else{ 
		document.getElementById("SortTable").style.display ="none";
	}
}

function saveSortType(){
	var SortSel=document.getElementById("SortSel");
	if(top.SortType == SortSel.options[SortSel.selectedIndex].value) {
		refreshReload();
		return;
	}
	top.SortType = SortSel.options[SortSel.selectedIndex].value;
	var tmp = top.uid.match(/m\d*l\d*$/);
	tmp = tmp[0];
	tmp =	tmp.substring(1,tmp.length).split("l")
	tmp = tmp[0];
	top.CM.set("SortType@"+tmp,top.SortType);
	refreshReload();
}
function gameSort(){
	if(top.SortType=="") top.SortType="T";
	document.getElementById("SortSel").value = top.SortType;
}


function overInfo(){
	document.getElementById("info").style.display = "";
}

function outInf(){
	document.getElementById("info").style.display = "none";
}


</script>
</head>
<body id="MFT" class="bodyset FTR" onload="onLoad();">
<div id="LoadLayer" style="display: none;">Loading...............................................................................</div>

<div id="showtableData" style="display:none;">
<xmp>
   
          <table id="game_table"  cellspacing="0" cellpadding="0" class="game">
            <tr>
              <th nowrap  class="time">时间</th>
              <th nowrap class="team">赛事</th>
              <th nowrap class="h_1x2">独赢</th>
              <th nowrap class="h_r">全场 - 让球</th>
              <th nowrap class="h_ou">全场 - 大小</th>
              <th nowrap class="h_oe">单双</th>
              <th nowrap class="h_1x2">独赢</th>
              <th nowrap class="h_r">半场 - 让球</th>
              <th nowrap class="h_ou">半场 - 大小</th>
            </tr>
            *showDataTR*
          </table>
  </xmp>
</div>
<!--   表格资料     -->
<div id="DataTR" style="display:none;">
	<xmp>
  <!--SHOW LEGUAGE START-->
  <tr *ST* >
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tr><td class="legicon" onClick="showLeg('*LEG*')">
      <span id="*LEG*" name="*LEG*" class="showleg">
      	*LegMark*
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onClick="showLeg('*LEG*')" class="leg_bar">*LEG*</td></tr></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_*ID_STR*"  *CLASS*>
  <!--<tr id="TR_*ID_STR*" *TR_EVENT* *CLASS*>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->*DATETIME*<!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_*ID_STR*_1" *TR_EVENT*>*TEAM_H*<br>
      *TEAM_C*</td>
    <td class="b_cen">*RATIO_MH*</td>
    <td class="b_rig"><span class="con">*CON_RH*</span> <span class="ratio">*RATIO_RH*</span></td>
    <td class="b_rig"><span class="con">*CON_OUH*</span> <span class="ratio">*RATIO_OUH*</span></td>
    <td class="b_cen">*RATIO_EOO*</td>
    <td class="b_1st">*RATIO_HMH*</td>
    <td class="b_1stR"><span class="con">*CON_HRH*</span> <span class="ratio">*RATIO_HRH*</span></td>
    <td class="b_1stR"><span class="con">*CON_HOUH*</span> <span class="ratio">*RATIO_HOUH*</span></td>
  </tr>
  <tr id="TR1_*ID_STR*" *CLASS*>
  <!--<tr id="TR1_*ID_STR*" *TR_EVENT* *CLASS*>-->
    <td class="b_cen">*RATIO_MC*</td>
    <td class="b_rig"><span class="con">*CON_RC*</span> <span class="ratio">*RATIO_RC*</span></td>
    <td class="b_rig"><span class="con">*CON_OUC*</span> <span class="ratio">*RATIO_OUC*</span></td>
    <td class="b_cen">*RATIO_EOE*</td>
    <td class="b_1st">*RATIO_HMC*</td>
    <td class="b_1stR"><span class="con">*CON_HRC*</span> <span class="ratio">*RATIO_HRC*</span></td>
    <td class="b_1stR"><span class="con">*CON_HOUC*</span> <span class="ratio">*RATIO_HOUC*</span></td>
  </tr>
  <tr id="TR2_*ID_STR*"  *CLASS*>
  <!--<tr id="TR2_*ID_STR*" *TR_EVENT* *CLASS*>-->
    <td class="drawn_td" id="TR_*ID_STR*_1" *TR_EVENT*>*MYLOVE*<!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">*RATIO_MN*</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">*MORE*</span></td>
    <td class="b_1st">*RATIO_HMN*</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>
</xmp>
</div>
<!--右方刷新钮-->
<div id="right_div" style="position: absolute; top: 39px; left: 735px;">
   <div id="refresh_right" class="refresh_M_btn" onclick="this.className='refresh_M_on';javascript:refreshReload('',true)"><span>刷新</span></div>
   <iframe id="right_iframe" class="right_iframe" frameborder="0"></iframe>
</div>

<div id="NoDataTR" style="display:none;">
	<xmp>
	   <td colspan="20" class="no_game">您选择的项目暂时没有赛事。请修改您的选项或迟些再返回。</td>
  </xmp>
</div>


<table border="0" cellpadding="0" cellspacing="0" id="myTable"><tbody><tr><td>
 <table border="0" cellpadding="0" cellspacing="0" id="box">
      <!--tr>
		<td id="ad">
			<span id="real_msg"></span>
		<p><a href="javascript://" onClick="javascript: window.open('../scroll_history.php?uid=c00ahhyrb6m17041417l153432&langx=zh-cn','','menubar=no,status=yes,scrollbars=yes,top=150,left=200,toolbar=no,width=510,height=500')">历史讯息</a></p>
		</td>
		</tr-->
      <tbody><tr>
        <td class="top"><h1><em>今日足球</em>
            <!--span id="hr_info">秒自动更新</span-->
          </h1></td>
      </tr>
      <tr>
        <td class="mem"><h2>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="fav_bar">
              <tbody><tr>
                <td id="page_no"><div id="euro_btn" class="euro_btn" onclick="Euro();" onmouseover="Eurover(this);" onmouseout="Eurout(this);" style="display:none;"><!--奥运--></div><div id="euro_up" class="euro_up" onclick="Euro();" onmouseover="Eurover(this);" onmouseout="Eurout(this);" style="display:none;"><!--所有赛事--></div><span id="pg_txt" class="pg_top">1 / 3 页&nbsp;&nbsp; <select onchange="chg_pg(this.options[this.selectedIndex].value)"><option value="0" selected="">1</option><option value="1">2</option><option value="2">3</option></select></span></td>
                <td id="tool_td">
              
                  <table border="0" cellspacing="0" cellpadding="0" class="tool_box">
                    <tbody><tr>
                        <td id="fav_btn">
                            <div id="fav_num" title="清空" onclick="chkDelAllShowLoveI();" style="display: none;"><!--我的最爱场数--><span id="live_num"></span></div>
                            <div id="showNull" title="无资料" class="fav_null" style="display: block;"></div>
                            <div id="showAll" title="所有赛事" onclick="showAllGame('FT');" style="display:none;" class="fav_on"></div>
                            <div id="showMy" title="我的最爱" onclick="showMyLove('FT');" class="fav_out" style="display: none;"></div>                        </td>
                        <td class="refresh_btn" id="refresh_btn" onclick="this.className='refresh_on';"><!--秒数更新--><div onclick="javascript:refreshReload('',true)"><font id="refreshTime">85</font></div></td>
                        <td class="leg_btn"><div onclick="javascript:chg_league();" id="sel_league">选择联赛 (<span id="str_num">全部</span>)</div></td>
                        <td id="SortGame" class="SortGame" name="SortGame">
                        <select id="SortSel" onchange="saveSortType();">
                        	 <option value="C">按联盟排序</option>
                        	 <option value="T">按时间排序</option>
                        </select></td>
                        <td class="OrderType" id="Ordertype"><select id="myoddType" onchange="chg_odd_type()"><option value="H" selected="">香港盘</option><option value="M">马来盘</option><option value="I">印尼盘</option><option value="E">欧洲盘</option></select></td>
                     </tr>
                  </tbody></table>                </td>
              </tr>
            </tbody></table>
          </h2>
          		<!--     资料显示的layer     -->
				<div id="showtable">

   
          <table id="game_table" cellspacing="0" cellpadding="0" class="game">
            <tbody><tr>
              <th nowrap="" class="time">时间</th>
              <th nowrap="" class="team">赛事</th>
              <th nowrap="" class="h_1x2">独赢</th>
              <th nowrap="" class="h_r">全场 - 让球</th>
              <th nowrap="" class="h_ou">全场 - 大小</th>
              <th nowrap="" class="h_oe">单双</th>
              <th nowrap="" class="h_1x2">独赢</th>
              <th nowrap="" class="h_r">半场 - 让球</th>
              <th nowrap="" class="h_ou">半场 - 大小</th>
            </tr>
            
	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231820" style="display: ;">
  <!--<tr id="TR_07-1231820" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231820_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">GKS卡托威斯 <font color="#005aff">[中]</font><br>
      辛宁</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;langx=zh-cn');" title="GKS卡托威斯 [中]"><font true="">3.65</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;strong=C&amp;langx=zh-cn');" title="GKS卡托威斯 [中]"><font true="">1.08</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;langx=zh-cn');" title="大"><font true="">0.89</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;langx=zh-cn');" title="GKS卡托威斯 [中]"><font true="">4.15</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;strong=C&amp;langx=zh-cn');" title="GKS卡托威斯 [中]"><font true="">0.93</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;langx=zh-cn');" title="大"><font true="">1.03</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231820" style="display: ;">
  <!--<tr id="TR1_07-1231820" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;langx=zh-cn');" title="辛宁"><font true="">1.75</font></a></td>
    <td class="b_rig"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;strong=C&amp;langx=zh-cn');" title="辛宁"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;langx=zh-cn');" title="小"><font true="">0.93</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;langx=zh-cn');" title="辛宁"><font true="">2.28</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31819&amp;strong=C&amp;langx=zh-cn');" title="辛宁"><font true="">0.91</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31820&amp;langx=zh-cn');" title="小"><font true="">0.79</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231820" style="display: ;">
  <!--<tr id="TR2_07-1231820" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231820_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231820"><div id="07-1231820" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31820','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','GKS卡托威斯 [中]','辛宁'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811126&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31819&amp;langx=zh-cn');" title="和"><font true="">3.65</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811126',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811127&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31819&amp;langx=zh-cn');" title="和"><font true="">2.28</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231848" style="display: ;">
  <!--<tr id="TR_07-1231848" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231848_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">西布朗 <font color="#005aff">[中]</font><br>
      布拉格斯拉维亚</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">2.57</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;strong=H&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;langx=zh-cn');" title="大"><font true="">0.95</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">3.10</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;strong=H&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">0.88</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;langx=zh-cn');" title="大"><font true="">0.77</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231848" style="display: ;">
  <!--<tr id="TR1_07-1231848" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">2.55</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">0.98</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;langx=zh-cn');" title="小"><font true="">0.93</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">3.35</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31847&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">1.02</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31848&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231848" style="display: ;">
  <!--<tr id="TR2_07-1231848" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231848_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231848"><div id="07-1231848" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31848','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','西布朗 [中]','布拉格斯拉维亚'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811130&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31847&amp;langx=zh-cn');" title="和"><font true="">3.30</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811130',event);"><font class="total_color">所有玩法 (46)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811131&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31847&amp;langx=zh-cn');" title="和"><font true="">2.08</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231850" style="display: ;">
  <!--<tr id="TR_07-1231850" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231850_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">西布朗 <font color="#005aff">[中]</font><br>
      布拉格斯拉维亚</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31850&amp;strong=H&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">1.25</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31849&amp;langx=zh-cn');" title="大"><font true="">0.77</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811133&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31850&amp;strong=H&amp;langx=zh-cn');" title="西布朗 [中]"><font true="">1.58</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811133&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31849&amp;langx=zh-cn');" title="大"><font true="">1.21</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231850" style="display: ;">
  <!--<tr id="TR1_07-1231850" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31849&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">0.70</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31850&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811132&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811133&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31849&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯拉维亚"><font true="">0.53</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811133&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31850&amp;langx=zh-cn');" title="小"><font true="">0.70</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231850" style="display: ;">
  <!--<tr id="TR2_07-1231850" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231850_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231850"><div id="07-1231850" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31850','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','西布朗 [中]','布拉格斯拉维亚'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231856" style="display: ;">
  <!--<tr id="TR_07-1231856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231856_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">帕都拜斯 <font color="#005aff">[中]</font><br>
      波德布雷佐瓦</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;langx=zh-cn');" title="帕都拜斯 [中]"><font true="">2.72</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;strong=C&amp;langx=zh-cn');" title="帕都拜斯 [中]"><font true="">0.86</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;langx=zh-cn');" title="大"><font true="">0.87</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;langx=zh-cn');" title="帕都拜斯 [中]"><font true="">3.25</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;strong=C&amp;langx=zh-cn');" title="帕都拜斯 [中]"><font true="">1.09</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231856" style="display: ;">
  <!--<tr id="TR1_07-1231856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;langx=zh-cn');" title="波德布雷佐瓦"><font true="">2.14</font></a></td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;strong=C&amp;langx=zh-cn');" title="波德布雷佐瓦"><font true="">0.98</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;langx=zh-cn');" title="小"><font true="">0.95</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;langx=zh-cn');" title="波德布雷佐瓦"><font true="">2.74</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31855&amp;strong=C&amp;langx=zh-cn');" title="波德布雷佐瓦"><font true="">0.75</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31856&amp;langx=zh-cn');" title="小"><font true="">0.71</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231856" style="display: ;">
  <!--<tr id="TR2_07-1231856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231856_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231856"><div id="07-1231856" class="fov_icon_out" style="cursor: pointer; display: block;" title="我的最爱" onclick="addShowLoveI('31856','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','帕都拜斯 [中]','波德布雷佐瓦'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811136&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31855&amp;langx=zh-cn');" title="和"><font true="">3.50</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811136',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811137&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31855&amp;langx=zh-cn');" title="和"><font true="">2.22</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231864" style="display: ;">
  <!--<tr id="TR_07-1231864" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231864_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">奥波莱 <font color="#005aff">[中]</font><br>
      奇偌佰格沃古夫</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;langx=zh-cn');" title="奥波莱 [中]"><font true="">2.53</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;strong=C&amp;langx=zh-cn');" title="奥波莱 [中]"><font true="">1.03</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;langx=zh-cn');" title="大"><font true="">0.81</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;langx=zh-cn');" title="奥波莱 [中]"><font true="">3.05</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;strong=C&amp;langx=zh-cn');" title="奥波莱 [中]"><font true="">0.99</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231864" style="display: ;">
  <!--<tr id="TR1_07-1231864" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;langx=zh-cn');" title="奇偌佰格沃古夫"><font true="">2.25</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;strong=C&amp;langx=zh-cn');" title="奇偌佰格沃古夫"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;langx=zh-cn');" title="小"><font true="">1.01</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;langx=zh-cn');" title="奇偌佰格沃古夫"><font true="">2.82</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31863&amp;strong=C&amp;langx=zh-cn');" title="奇偌佰格沃古夫"><font true="">0.85</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31864&amp;langx=zh-cn');" title="小"><font true="">0.71</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231864" style="display: ;">
  <!--<tr id="TR2_07-1231864" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231864_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231864"><div id="07-1231864" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31864','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','奥波莱 [中]','奇偌佰格沃古夫'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811140&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31863&amp;langx=zh-cn');" title="和"><font true="">3.60</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811140',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811141&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31863&amp;langx=zh-cn');" title="和"><font true="">2.29</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231880" style="display: ;">
  <!--<tr id="TR_07-1231880" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231880_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">云路 <font color="#005aff">[中]</font><br>
      PAOK</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;langx=zh-cn');" title="云路 [中]"><font true="">4.50</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;strong=C&amp;langx=zh-cn');" title="云路 [中]"><font true="">1.08</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;langx=zh-cn');" title="大"><font true="">1.06</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;langx=zh-cn');" title="云路 [中]"><font true="">4.60</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;strong=C&amp;langx=zh-cn');" title="云路 [中]"><font true="">1.08</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;langx=zh-cn');" title="大"><font true="">1.04</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231880" style="display: ;">
  <!--<tr id="TR1_07-1231880" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;langx=zh-cn');" title="PAOK"><font true="">1.54</font></a></td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;strong=C&amp;langx=zh-cn');" title="PAOK"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;langx=zh-cn');" title="小"><font true="">0.76</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;langx=zh-cn');" title="PAOK"><font true="">2.21</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31879&amp;strong=C&amp;langx=zh-cn');" title="PAOK"><font true="">0.76</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31880&amp;langx=zh-cn');" title="小"><font true="">0.78</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231880" style="display: ;">
  <!--<tr id="TR2_07-1231880" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231880_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231880"><div id="07-1231880" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31880','07-12<br>11:00a<br><font color=red>滚球</font>','球会友谊赛','云路 [中]','PAOK'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811148&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31879&amp;langx=zh-cn');" title="和"><font true="">3.95</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811148',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811149&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31879&amp;langx=zh-cn');" title="和"><font true="">2.20</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('瑞典超级联赛U21')">
      <span id="瑞典超级联赛U21" name="瑞典超级联赛U21" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('瑞典超级联赛U21')" class="leg_bar">瑞典超级联赛U21</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231562" style="display: ;">
  <!--<tr id="TR_07-1231562" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231562_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">松兹瓦尔U21<br>
      哈马比U21</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31562&amp;strong=H&amp;langx=zh-cn');" title="松兹瓦尔U21"><font true="">0.36</font></a></span></td>
    <td class="b_rig"><span class="con">大3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31561&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31562&amp;strong=&amp;langx=zh-cn');" title="松兹瓦尔U21"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31561&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1231562" style="display: ;">
  <!--<tr id="TR1_07-1231562" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31561&amp;strong=H&amp;langx=zh-cn');" title="哈马比U21"><font true="">1.56</font></a></span></td>
    <td class="b_rig"><span class="con">小3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31562&amp;langx=zh-cn');" title="小"><font true="">0.81</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810646&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31561&amp;strong=&amp;langx=zh-cn');" title="哈马比U21"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31562&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1231562" style="display: ;">
  <!--<tr id="TR2_07-1231562" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231562_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231562"><div id="07-1231562" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31562','07-12<br>11:00a','瑞典超级联赛U21','松兹瓦尔U21','哈马比U21'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2810646',event);"><font class="total_color">所有玩法 (3)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('瑞典超级甲组联赛U21')">
      <span id="瑞典超级甲组联赛U21" name="瑞典超级甲组联赛U21" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('瑞典超级甲组联赛U21')" class="leg_bar">瑞典超级甲组联赛U21</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231568" style="display: ;">
  <!--<tr id="TR_07-1231568" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231568_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">特利堡U21<br>
      乌席登斯U21</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31568&amp;strong=H&amp;langx=zh-cn');" title="特利堡U21"><font true="">0.26</font></a></span></td>
    <td class="b_rig"><span class="con">大3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31567&amp;langx=zh-cn');" title="大"><font true="">0.51</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31568&amp;strong=&amp;langx=zh-cn');" title="特利堡U21"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31567&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1231568" style="display: ;">
  <!--<tr id="TR1_07-1231568" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31567&amp;strong=H&amp;langx=zh-cn');" title="乌席登斯U21"><font true="">1.85</font></a></span></td>
    <td class="b_rig"><span class="con">小3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31568&amp;langx=zh-cn');" title="小"><font true="">1.26</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810650&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31567&amp;strong=&amp;langx=zh-cn');" title="乌席登斯U21"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31568&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1231568" style="display: ;">
  <!--<tr id="TR2_07-1231568" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231568_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231568"><div id="07-1231568" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31568','07-12<br>11:00a<br><font color=red>滚球</font>','瑞典超级甲组联赛U21','特利堡U21','乌席登斯U21'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2810650',event);"><font class="total_color">所有玩法 (3)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231888" style="display: ;">
  <!--<tr id="TR_07-1231888" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231888_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">布拉格斯巴达 <font color="#005aff">[中]</font><br>
      印戈斯塔德</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;langx=zh-cn');" title="布拉格斯巴达 [中]"><font true="">2.34</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯巴达 [中]"><font true="">0.89</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;langx=zh-cn');" title="大"><font true="">0.81</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;langx=zh-cn');" title="布拉格斯巴达 [中]"><font true="">2.89</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;strong=H&amp;langx=zh-cn');" title="布拉格斯巴达 [中]"><font true="">0.89</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;langx=zh-cn');" title="大"><font true="">1.03</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231888" style="display: ;">
  <!--<tr id="TR1_07-1231888" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;langx=zh-cn');" title="印戈斯塔德"><font true="">2.42</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;strong=H&amp;langx=zh-cn');" title="印戈斯塔德"><font true="">0.95</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;langx=zh-cn');" title="小"><font true="">1.01</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;langx=zh-cn');" title="印戈斯塔德"><font true="">2.96</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31887&amp;strong=H&amp;langx=zh-cn');" title="印戈斯塔德"><font true="">0.95</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31888&amp;langx=zh-cn');" title="小"><font true="">0.79</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231888" style="display: ;">
  <!--<tr id="TR2_07-1231888" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231888_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231888"><div id="07-1231888" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31888','07-12<br>11:30a<br><font color=red>滚球</font>','球会友谊赛','布拉格斯巴达 [中]','印戈斯塔德'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811152&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31887&amp;langx=zh-cn');" title="和"><font true="">3.60</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811152',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811153&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31887&amp;langx=zh-cn');" title="和"><font true="">2.29</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232238" style="display: ;">
  <!--<tr id="TR_07-1232238" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232238_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">平古萨伏登<br>
      圣保利</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32238&amp;langx=zh-cn');" title="平古萨伏登"><font true="">17.00</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32238&amp;strong=C&amp;langx=zh-cn');" title="平古萨伏登"><font true="">1.29</font></a></span></td>
    <td class="b_rig"><span class="con">大4.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32237&amp;langx=zh-cn');" title="大"><font true="">0.61</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32238&amp;strong=&amp;langx=zh-cn');" title="平古萨伏登"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32237&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232238" style="display: ;">
  <!--<tr id="TR1_07-1232238" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32237&amp;langx=zh-cn');" title="圣保利"><font true="">1.02</font></a></td>
    <td class="b_rig"><span class="con">3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32237&amp;strong=C&amp;langx=zh-cn');" title="圣保利"><font true="">0.61</font></a></span></td>
    <td class="b_rig"><span class="con">小4.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32238&amp;langx=zh-cn');" title="小"><font true="">1.26</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32237&amp;strong=&amp;langx=zh-cn');" title="圣保利"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32238&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232238" style="display: ;">
  <!--<tr id="TR2_07-1232238" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232238_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232238"><div id="07-1232238" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32238','07-12<br>11:30a<br><font color=red>滚球</font>','球会友谊赛','平古萨伏登','圣保利'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811946&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32237&amp;langx=zh-cn');" title="和"><font true="">12.00</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811946',event);"><font class="total_color">所有玩法 (5)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('芬兰乙组联赛')">
      <span id="芬兰乙组联赛" name="芬兰乙组联赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('芬兰乙组联赛')" class="leg_bar">芬兰乙组联赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230126" style="display: ;">
  <!--<tr id="TR_07-1230126" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230126_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">爵士<br>
      维京吉特</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;langx=zh-cn');" title="爵士"><font true="">3.05</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;strong=C&amp;langx=zh-cn');" title="爵士"><font true="">0.90</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;langx=zh-cn');" title="大"><font true="">0.88</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;langx=zh-cn');" title="爵士"><font true="">3.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;strong=C&amp;langx=zh-cn');" title="爵士"><font true="">0.76</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;langx=zh-cn');" title="大"><font true="">0.94</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230126" style="display: ;">
  <!--<tr id="TR1_07-1230126" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;langx=zh-cn');" title="维京吉特"><font true="">1.99</font></a></td>
    <td class="b_rig"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;strong=C&amp;langx=zh-cn');" title="维京吉特"><font true="">1.00</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;langx=zh-cn');" title="小"><font true="">1.00</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;langx=zh-cn');" title="维京吉特"><font true="">2.42</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30125&amp;strong=C&amp;langx=zh-cn');" title="维京吉特"><font true="">1.16</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30126&amp;langx=zh-cn');" title="小"><font true="">0.94</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230126" style="display: ;">
  <!--<tr id="TR2_07-1230126" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230126_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230126"><div id="07-1230126" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30126','07-12<br>11:30a<br><font color=red>滚球</font>','芬兰乙组联赛','爵士','维京吉特'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2802082&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30125&amp;langx=zh-cn');" title="和"><font true="">3.75</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2802082',event);"><font class="total_color">所有玩法 (11)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2802083&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30125&amp;langx=zh-cn');" title="和"><font true="">2.40</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('芬兰乙组联赛')">
      <span id="芬兰乙组联赛" name="芬兰乙组联赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('芬兰乙组联赛')" class="leg_bar">芬兰乙组联赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230128" style="display: ;">
  <!--<tr id="TR_07-1230128" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->11:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230128_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">爵士<br>
      维京吉特</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30128&amp;strong=C&amp;langx=zh-cn');" title="爵士"><font true="">1.21</font></a></span></td>
    <td class="b_rig"><span class="con">大3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30127&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30128&amp;strong=&amp;langx=zh-cn');" title="爵士"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30127&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1230128" style="display: ;">
  <!--<tr id="TR1_07-1230128" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30127&amp;strong=C&amp;langx=zh-cn');" title="维京吉特"><font true="">0.72</font></a></span></td>
    <td class="b_rig"><span class="con">小3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30128&amp;langx=zh-cn');" title="小"><font true="">0.77</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2802084&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30127&amp;strong=&amp;langx=zh-cn');" title="维京吉特"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30128&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1230128" style="display: ;">
  <!--<tr id="TR2_07-1230128" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230128_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230128"><div id="07-1230128" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30128','07-12<br>11:30a<br><font color=red>滚球</font>','芬兰乙组联赛','爵士','维京吉特'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')">
      <span id="欧洲U19青年锦标赛(在格鲁吉亚)" name="欧洲U19青年锦标赛(在格鲁吉亚)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')" class="leg_bar">欧洲U19青年锦标赛(在格鲁吉亚)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232290" style="display: ;">
  <!--<tr id="TR_07-1232290" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232290_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">英格兰U19<br>
      捷克U19</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;langx=zh-cn');" title="英格兰U19"><font true="">1.36</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19"><font true="">0.89</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;langx=zh-cn');" title="大"><font true="">1.01</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;langx=zh-cn');" title="英格兰U19"><font true="">1.92</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19"><font true="">0.93</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;langx=zh-cn');" title="大"><font true="">1.06</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232290" style="display: ;">
  <!--<tr id="TR1_07-1232290" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;langx=zh-cn');" title="捷克U19"><font true="">6.70</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;strong=H&amp;langx=zh-cn');" title="捷克U19"><font true="">0.95</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;langx=zh-cn');" title="小"><font true="">0.81</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;langx=zh-cn');" title="捷克U19"><font true="">5.90</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32289&amp;strong=H&amp;langx=zh-cn');" title="捷克U19"><font true="">0.91</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32290&amp;langx=zh-cn');" title="小"><font true="">0.76</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232290" style="display: ;">
  <!--<tr id="TR2_07-1232290" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232290_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232290"><div id="07-1232290" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32290','07-12<br>12:00p<br><font color=red>滚球</font>','欧洲U19青年锦标赛(在格鲁吉亚)','英格兰U19','捷克U19'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812166&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32289&amp;langx=zh-cn');" title="和"><font true="">4.55</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2812166',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812167&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32289&amp;langx=zh-cn');" title="和"><font true="">2.33</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')">
      <span id="欧洲U19青年锦标赛(在格鲁吉亚)" name="欧洲U19青年锦标赛(在格鲁吉亚)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')" class="leg_bar">欧洲U19青年锦标赛(在格鲁吉亚)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232292" style="display: ;">
  <!--<tr id="TR_07-1232292" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232292_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">英格兰U19<br>
      捷克U19</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32292&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19"><font true="">1.14</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32291&amp;langx=zh-cn');" title="大"><font true="">0.76</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32292&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19"><font true="">0.61</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32291&amp;langx=zh-cn');" title="大"><font true="">0.64</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232292" style="display: ;">
  <!--<tr id="TR1_07-1232292" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32291&amp;strong=H&amp;langx=zh-cn');" title="捷克U19"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32292&amp;langx=zh-cn');" title="小"><font true="">1.06</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32291&amp;strong=H&amp;langx=zh-cn');" title="捷克U19"><font true="">1.29</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32292&amp;langx=zh-cn');" title="小"><font true="">1.21</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232292" style="display: ;">
  <!--<tr id="TR2_07-1232292" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232292_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232292"><div id="07-1232292" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32292','07-12<br>12:00p<br><font color=red>滚球</font>','欧洲U19青年锦标赛(在格鲁吉亚)','英格兰U19','捷克U19'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')">
      <span id="欧洲U19青年锦标赛(在格鲁吉亚)" name="欧洲U19青年锦标赛(在格鲁吉亚)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲U19青年锦标赛(在格鲁吉亚)')" class="leg_bar">欧洲U19青年锦标赛(在格鲁吉亚)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232296" style="display: ;">
  <!--<tr id="TR_07-1232296" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232296_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">英格兰U19 -角球数<br>
      捷克U19 -角球数</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;langx=zh-cn');" title="英格兰U19 -角球数"><font true="">1.55</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19 -角球数"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">大9.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;langx=zh-cn');" title="大"><font true="">0.81</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;langx=zh-cn');" title="英格兰U19 -角球数"><font true="">1.83</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;strong=H&amp;langx=zh-cn');" title="英格兰U19 -角球数"><font true="">0.75</font></a></span></td>
    <td class="b_1stR"><span class="con">大4.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;langx=zh-cn');" title="大"><font true="">0.90</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232296" style="display: ;">
  <!--<tr id="TR1_07-1232296" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;langx=zh-cn');" title="捷克U19 -角球数"><font true="">2.95</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;strong=H&amp;langx=zh-cn');" title="捷克U19 -角球数"><font true="">1.03</font></a></span></td>
    <td class="b_rig"><span class="con">小9.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;langx=zh-cn');" title="小"><font true="">1.01</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;langx=zh-cn');" title="捷克U19 -角球数"><font true="">2.75</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32295&amp;strong=H&amp;langx=zh-cn');" title="捷克U19 -角球数"><font true="">1.09</font></a></span></td>
    <td class="b_1stR"><span class="con">小4.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32296&amp;langx=zh-cn');" title="小"><font true="">0.92</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232296" style="display: ;">
  <!--<tr id="TR2_07-1232296" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232296_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232296"><div id="07-1232296" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32296','07-12<br>12:00p<br><font color=red>滚球</font>','欧洲U19青年锦标赛(在格鲁吉亚)','英格兰U19 -角球数','捷克U19 -角球数'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2812172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32295&amp;langx=zh-cn');" title="和"><font true="">6.10</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2812172',event);"><font class="total_color">所有玩法 (8)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2812173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32295&amp;langx=zh-cn');" title="和"><font true="">4.10</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230816" style="display: ;">
  <!--<tr id="TR_07-1230816" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230816_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">祖玛拿斯巴达克<br>
      艾斯坦拿</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">6.50</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;strong=C&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">0.93</font></a></span></td>
    <td class="b_rig"><span class="con">大2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">6.40</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;strong=C&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">0.76</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;langx=zh-cn');" title="大"><font true="">1.05</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230816" style="display: ;">
  <!--<tr id="TR1_07-1230816" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">1.50</font></a></td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;strong=C&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">0.91</font></a></span></td>
    <td class="b_rig"><span class="con">小2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">2.07</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30815&amp;strong=C&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">1.08</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30816&amp;langx=zh-cn');" title="小"><font true="">0.77</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230816" style="display: ;">
  <!--<tr id="TR2_07-1230816" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230816_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230816"><div id="07-1230816" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30816','07-12<br>12:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','祖玛拿斯巴达克','艾斯坦拿'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30815&amp;langx=zh-cn');" title="和"><font true="">4.00</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806248',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806249&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30815&amp;langx=zh-cn');" title="和"><font true="">2.17</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230818" style="display: ;">
  <!--<tr id="TR_07-1230818" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230818_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">祖玛拿斯巴达克<br>
      艾斯坦拿</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30818&amp;strong=C&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">0.66</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30817&amp;langx=zh-cn');" title="大"><font true="">1.14</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806251&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30818&amp;strong=C&amp;langx=zh-cn');" title="祖玛拿斯巴达克"><font true="">1.20</font></a></span></td>
    <td class="b_1stR"><span class="con">大0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806251&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30817&amp;langx=zh-cn');" title="大"><font true="">0.64</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230818" style="display: ;">
  <!--<tr id="TR1_07-1230818" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30817&amp;strong=C&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">1.21</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30818&amp;langx=zh-cn');" title="小"><font true="">0.69</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806250&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806251&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30817&amp;strong=C&amp;langx=zh-cn');" title="艾斯坦拿"><font true="">0.67</font></a></span></td>
    <td class="b_1stR"><span class="con">小0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806251&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30818&amp;langx=zh-cn');" title="小"><font true="">1.21</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230818" style="display: ;">
  <!--<tr id="TR2_07-1230818" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230818_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230818"><div id="07-1230818" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30818','07-12<br>12:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','祖玛拿斯巴达克','艾斯坦拿'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧足联欧洲联赛外围赛')">
      <span id="欧足联欧洲联赛外围赛" name="欧足联欧洲联赛外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧足联欧洲联赛外围赛')" class="leg_bar">欧足联欧洲联赛外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231056" style="display: ;">
  <!--<tr id="TR_07-1231056" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231056_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">因特巴古 <font color="#005aff">[中]</font><br>
      佛拉伊治</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">1.44</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;strong=H&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">1.06</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;langx=zh-cn');" title="大"><font true="">0.93</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">2.01</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;strong=H&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">1.02</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;langx=zh-cn');" title="大"><font true="">0.71</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231056" style="display: ;">
  <!--<tr id="TR1_07-1231056" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;langx=zh-cn');" title="佛拉伊治"><font true="">6.50</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;strong=H&amp;langx=zh-cn');" title="佛拉伊治"><font true="">0.78</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;langx=zh-cn');" title="小"><font true="">0.89</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;langx=zh-cn');" title="佛拉伊治"><font true="">5.70</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31055&amp;strong=H&amp;langx=zh-cn');" title="佛拉伊治"><font true="">0.82</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31056&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231056" style="display: ;">
  <!--<tr id="TR2_07-1231056" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231056_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231056"><div id="07-1231056" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31056','07-12<br>12:00p<br><font color=red>滚球</font>','欧足联欧洲联赛外围赛','因特巴古 [中]','佛拉伊治'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2808226&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31055&amp;langx=zh-cn');" title="和"><font true="">4.30</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2808226',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2808227&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31055&amp;langx=zh-cn');" title="和"><font true="">2.34</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧足联欧洲联赛外围赛')">
      <span id="欧足联欧洲联赛外围赛" name="欧足联欧洲联赛外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧足联欧洲联赛外围赛')" class="leg_bar">欧足联欧洲联赛外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231058" style="display: ;">
  <!--<tr id="TR_07-1231058" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231058_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">因特巴古 <font color="#005aff">[中]</font><br>
      佛拉伊治</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31058&amp;strong=H&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">0.78</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31057&amp;langx=zh-cn');" title="大"><font true="">0.75</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2808229&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31058&amp;strong=H&amp;langx=zh-cn');" title="因特巴古 [中]"><font true="">0.63</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2808229&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31057&amp;langx=zh-cn');" title="大"><font true="">1.14</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231058" style="display: ;">
  <!--<tr id="TR1_07-1231058" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31057&amp;strong=H&amp;langx=zh-cn');" title="佛拉伊治"><font true="">1.06</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31058&amp;langx=zh-cn');" title="小"><font true="">1.07</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2808228&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2808229&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31057&amp;strong=H&amp;langx=zh-cn');" title="佛拉伊治"><font true="">1.26</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2808229&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31058&amp;langx=zh-cn');" title="小"><font true="">0.69</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231058" style="display: ;">
  <!--<tr id="TR2_07-1231058" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231058_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231058"><div id="07-1231058" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31058','07-12<br>12:00p<br><font color=red>滚球</font>','欧足联欧洲联赛外围赛','因特巴古 [中]','佛拉伊治'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231788" style="display: ;">
  <!--<tr id="TR_07-1231788" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231788_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">费伦斯 <font color="#005aff">[中]</font><br>
      科维拉</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;langx=zh-cn');" title="费伦斯 [中]"><font true="">2.06</font></a></td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;strong=H&amp;langx=zh-cn');" title="费伦斯 [中]"><font true="">0.78</font></a></span></td>
    <td class="b_rig"><span class="con">大2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;langx=zh-cn');" title="大"><font true="">0.86</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;langx=zh-cn');" title="费伦斯 [中]"><font true="">2.63</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;strong=H&amp;langx=zh-cn');" title="费伦斯 [中]"><font true="">1.14</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;langx=zh-cn');" title="大"><font true="">1.06</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231788" style="display: ;">
  <!--<tr id="TR1_07-1231788" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;langx=zh-cn');" title="科维拉"><font true="">3.10</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;strong=H&amp;langx=zh-cn');" title="科维拉"><font true="">1.06</font></a></span></td>
    <td class="b_rig"><span class="con">小2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;langx=zh-cn');" title="小"><font true="">0.96</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;langx=zh-cn');" title="科维拉"><font true="">3.90</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31787&amp;strong=H&amp;langx=zh-cn');" title="科维拉"><font true="">0.71</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31788&amp;langx=zh-cn');" title="小"><font true="">0.76</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231788" style="display: ;">
  <!--<tr id="TR2_07-1231788" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231788_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231788"><div id="07-1231788" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31788','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','费伦斯 [中]','科维拉'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811110&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31787&amp;langx=zh-cn');" title="和"><font true="">3.20</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811110',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811111&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31787&amp;langx=zh-cn');" title="和"><font true="">2.07</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231904" style="display: ;">
  <!--<tr id="TR_07-1231904" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231904_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">云达不莱梅 <font color="#005aff">[中]</font><br>
      狼队</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">1.58</font></a></td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;strong=H&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">1.05</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;langx=zh-cn');" title="大"><font true="">0.97</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">2.26</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;strong=H&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">0.84</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;langx=zh-cn');" title="大"><font true="">1.05</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231904" style="display: ;">
  <!--<tr id="TR1_07-1231904" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;langx=zh-cn');" title="狼队"><font true="">4.95</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;strong=H&amp;langx=zh-cn');" title="狼队"><font true="">0.85</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;langx=zh-cn');" title="狼队"><font true="">4.40</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31903&amp;strong=H&amp;langx=zh-cn');" title="狼队"><font true="">1.06</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31904&amp;langx=zh-cn');" title="小"><font true="">0.83</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231904" style="display: ;">
  <!--<tr id="TR2_07-1231904" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231904_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231904"><div id="07-1231904" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31904','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','云达不莱梅 [中]','狼队'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811160&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31903&amp;langx=zh-cn');" title="和"><font true="">4.10</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811160',event);"><font class="total_color">所有玩法 (46)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811161&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31903&amp;langx=zh-cn');" title="和"><font true="">2.30</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231906" style="display: ;">
  <!--<tr id="TR_07-1231906" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231906_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">云达不莱梅 <font color="#005aff">[中]</font><br>
      狼队</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31906&amp;strong=H&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31905&amp;langx=zh-cn');" title="大"><font true="">0.72</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811163&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31906&amp;strong=H&amp;langx=zh-cn');" title="云达不莱梅 [中]"><font true="">1.28</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811163&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31905&amp;langx=zh-cn');" title="大"><font true="">0.65</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231906" style="display: ;">
  <!--<tr id="TR1_07-1231906" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31905&amp;strong=H&amp;langx=zh-cn');" title="狼队"><font true="">1.23</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31906&amp;langx=zh-cn');" title="小"><font true="">1.19</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811162&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811163&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31905&amp;strong=H&amp;langx=zh-cn');" title="狼队"><font true="">0.68</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811163&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31906&amp;langx=zh-cn');" title="小"><font true="">1.29</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231906" style="display: ;">
  <!--<tr id="TR2_07-1231906" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231906_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231906"><div id="07-1231906" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31906','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','云达不莱梅 [中]','狼队'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231912" style="display: ;">
  <!--<tr id="TR_07-1231912" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231912_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">斯图加特 <font color="#005aff">[中]</font><br>
      特雷斯登</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">1.61</font></a></td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;strong=H&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">0.89</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;langx=zh-cn');" title="大"><font true="">0.86</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">2.31</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;strong=H&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">0.90</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;langx=zh-cn');" title="大"><font true="">0.95</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231912" style="display: ;">
  <!--<tr id="TR1_07-1231912" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;langx=zh-cn');" title="特雷斯登"><font true="">4.30</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;strong=H&amp;langx=zh-cn');" title="特雷斯登"><font true="">1.01</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;langx=zh-cn');" title="小"><font true="">1.02</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;langx=zh-cn');" title="特雷斯登"><font true="">4.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31911&amp;strong=H&amp;langx=zh-cn');" title="特雷斯登"><font true="">1.00</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31912&amp;langx=zh-cn');" title="小"><font true="">0.93</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231912" style="display: ;">
  <!--<tr id="TR2_07-1231912" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231912_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231912"><div id="07-1231912" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31912','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','斯图加特 [中]','特雷斯登'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811168&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31911&amp;langx=zh-cn');" title="和"><font true="">4.05</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811168',event);"><font class="total_color">所有玩法 (46)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811169&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31911&amp;langx=zh-cn');" title="和"><font true="">2.16</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231914" style="display: ;">
  <!--<tr id="TR_07-1231914" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231914_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">斯图加特 <font color="#005aff">[中]</font><br>
      特雷斯登</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31914&amp;strong=H&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">1.21</font></a></span></td>
    <td class="b_rig"><span class="con">大3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31913&amp;langx=zh-cn');" title="大"><font true="">1.09</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811171&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31914&amp;strong=H&amp;langx=zh-cn');" title="斯图加特 [中]"><font true="">1.33</font></a></span></td>
    <td class="b_1stR"><span class="con">大1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811171&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31913&amp;langx=zh-cn');" title="大"><font true="">1.33</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231914" style="display: ;">
  <!--<tr id="TR1_07-1231914" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31913&amp;strong=H&amp;langx=zh-cn');" title="特雷斯登"><font true="">0.72</font></a></span></td>
    <td class="b_rig"><span class="con">小3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31914&amp;langx=zh-cn');" title="小"><font true="">0.79</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811170&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811171&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31913&amp;strong=H&amp;langx=zh-cn');" title="特雷斯登"><font true="">0.65</font></a></span></td>
    <td class="b_1stR"><span class="con">小1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811171&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31914&amp;langx=zh-cn');" title="小"><font true="">0.63</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231914" style="display: ;">
  <!--<tr id="TR2_07-1231914" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231914_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231914"><div id="07-1231914" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31914','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','斯图加特 [中]','特雷斯登'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231920" style="display: ;">
  <!--<tr id="TR_07-1231920" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231920_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">艾格比治 <font color="#005aff">[中]</font><br>
      利巴域</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;langx=zh-cn');" title="艾格比治 [中]"><font true="">2.13</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;strong=H&amp;langx=zh-cn');" title="艾格比治 [中]"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;langx=zh-cn');" title="大"><font true="">0.81</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;langx=zh-cn');" title="艾格比治 [中]"><font true="">2.75</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;strong=H&amp;langx=zh-cn');" title="艾格比治 [中]"><font true="">0.71</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;langx=zh-cn');" title="大"><font true="">1.03</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231920" style="display: ;">
  <!--<tr id="TR1_07-1231920" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;langx=zh-cn');" title="利巴域"><font true="">2.68</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;strong=H&amp;langx=zh-cn');" title="利巴域"><font true="">1.14</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;langx=zh-cn');" title="小"><font true="">1.01</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;langx=zh-cn');" title="利巴域"><font true="">3.15</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31919&amp;strong=H&amp;langx=zh-cn');" title="利巴域"><font true="">1.14</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31920&amp;langx=zh-cn');" title="小"><font true="">0.79</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231920" style="display: ;">
  <!--<tr id="TR2_07-1231920" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231920_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231920"><div id="07-1231920" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31920','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','艾格比治 [中]','利巴域'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811172&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31919&amp;langx=zh-cn');" title="和"><font true="">3.60</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811172',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811173&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31919&amp;langx=zh-cn');" title="和"><font true="">2.29</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231928" style="display: ;">
  <!--<tr id="TR_07-1231928" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231928_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">比勒费尔德 <font color="#005aff">[中]</font><br>
      普利布兰</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;langx=zh-cn');" title="比勒费尔德 [中]"><font true="">1.22</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;strong=H&amp;langx=zh-cn');" title="比勒费尔德 [中]"><font true="">0.61</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;langx=zh-cn');" title="大"><font true="">0.66</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;langx=zh-cn');" title="比勒费尔德 [中]"><font true="">1.67</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;strong=H&amp;langx=zh-cn');" title="比勒费尔德 [中]"><font true="">0.68</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;langx=zh-cn');" title="大"><font true="">0.99</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231928" style="display: ;">
  <!--<tr id="TR1_07-1231928" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;langx=zh-cn');" title="普利布兰"><font true="">8.90</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;strong=H&amp;langx=zh-cn');" title="普利布兰"><font true="">1.29</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;langx=zh-cn');" title="小"><font true="">1.19</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;langx=zh-cn');" title="普利布兰"><font true="">8.50</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31927&amp;strong=H&amp;langx=zh-cn');" title="普利布兰"><font true="">1.19</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31928&amp;langx=zh-cn');" title="小"><font true="">0.83</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231928" style="display: ;">
  <!--<tr id="TR2_07-1231928" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231928_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231928"><div id="07-1231928" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31928','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','比勒费尔德 [中]','普利布兰'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811176&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31927&amp;langx=zh-cn');" title="和"><font true="">5.20</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811176',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811177&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31927&amp;langx=zh-cn');" title="和"><font true="">2.45</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231936" style="display: ;">
  <!--<tr id="TR_07-1231936" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231936_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">奥斯堡 <font color="#005aff">[中]</font><br>
      凯沙罗顿</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;langx=zh-cn');" title="奥斯堡 [中]"><font true="">2.13</font></a></td>
    <td class="b_rig"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;strong=H&amp;langx=zh-cn');" title="奥斯堡 [中]"><font true="">1.14</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;langx=zh-cn');" title="大"><font true="">0.75</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;langx=zh-cn');" title="奥斯堡 [中]"><font true="">2.65</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;strong=H&amp;langx=zh-cn');" title="奥斯堡 [中]"><font true="">1.26</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;langx=zh-cn');" title="大"><font true="">0.78</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231936" style="display: ;">
  <!--<tr id="TR1_07-1231936" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;langx=zh-cn');" title="凯沙罗顿"><font true="">2.87</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;strong=H&amp;langx=zh-cn');" title="凯沙罗顿"><font true="">0.77</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;langx=zh-cn');" title="小"><font true="">1.14</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;langx=zh-cn');" title="凯沙罗顿"><font true="">3.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31935&amp;strong=H&amp;langx=zh-cn');" title="凯沙罗顿"><font true="">0.69</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31936&amp;langx=zh-cn');" title="小"><font true="">1.11</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231936" style="display: ;">
  <!--<tr id="TR2_07-1231936" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231936_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231936"><div id="07-1231936" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31936','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','奥斯堡 [中]','凯沙罗顿'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811180&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31935&amp;langx=zh-cn');" title="和"><font true="">3.55</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811180',event);"><font class="total_color">所有玩法 (42)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811181&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31935&amp;langx=zh-cn');" title="和"><font true="">2.21</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231952" style="display: ;">
  <!--<tr id="TR_07-1231952" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231952_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">克维伊鲁昂 <font color="#005aff">[中]</font><br>
      敦克尔克</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;langx=zh-cn');" title="克维伊鲁昂 [中]"><font true="">2.13</font></a></td>
    <td class="b_rig"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;strong=H&amp;langx=zh-cn');" title="克维伊鲁昂 [中]"><font true="">1.14</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;langx=zh-cn');" title="大"><font true="">0.86</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;langx=zh-cn');" title="克维伊鲁昂 [中]"><font true="">2.70</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;strong=H&amp;langx=zh-cn');" title="克维伊鲁昂 [中]"><font true="">1.14</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;langx=zh-cn');" title="大"><font true="">0.87</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231952" style="display: ;">
  <!--<tr id="TR1_07-1231952" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;langx=zh-cn');" title="敦克尔克"><font true="">2.89</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;strong=H&amp;langx=zh-cn');" title="敦克尔克"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;langx=zh-cn');" title="小"><font true="">0.96</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;langx=zh-cn');" title="敦克尔克"><font true="">3.90</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31951&amp;strong=H&amp;langx=zh-cn');" title="敦克尔克"><font true="">0.71</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31952&amp;langx=zh-cn');" title="小"><font true="">0.95</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231952" style="display: ;">
  <!--<tr id="TR2_07-1231952" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231952_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231952"><div id="07-1231952" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31952','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','克维伊鲁昂 [中]','敦克尔克'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811188&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31951&amp;langx=zh-cn');" title="和"><font true="">3.30</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811188',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811189&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31951&amp;langx=zh-cn');" title="和"><font true="">2.03</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231960" style="display: ;">
  <!--<tr id="TR_07-1231960" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231960_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">甘马雷斯B队<br>
      彭拿费尔</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31960&amp;langx=zh-cn');" title="甘马雷斯B队"><font true="">2.60</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31960&amp;strong=C&amp;langx=zh-cn');" title="甘马雷斯B队"><font true="">0.83</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31959&amp;langx=zh-cn');" title="大"><font true="">1.01</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31960&amp;strong=&amp;langx=zh-cn');" title="甘马雷斯B队"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31959&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1231960" style="display: ;">
  <!--<tr id="TR1_07-1231960" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31959&amp;langx=zh-cn');" title="彭拿费尔"><font true="">2.24</font></a></td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31959&amp;strong=C&amp;langx=zh-cn');" title="彭拿费尔"><font true="">1.01</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31960&amp;langx=zh-cn');" title="小"><font true="">0.81</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31959&amp;strong=&amp;langx=zh-cn');" title="彭拿费尔"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31960&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1231960" style="display: ;">
  <!--<tr id="TR2_07-1231960" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231960_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231960"><div id="07-1231960" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31960','07-12<br>12:00p<br><font color=red>滚球</font>','球会友谊赛','甘马雷斯B队','彭拿费尔'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811192&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31959&amp;langx=zh-cn');" title="和"><font true="">3.45</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811192',event);"><font class="total_color">所有玩法 (5)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231984" style="display: ;">
  <!--<tr id="TR_07-1231984" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231984_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">南特 <font color="#005aff">[中]</font><br>
      塞维特</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;langx=zh-cn');" title="南特 [中]"><font true="">1.51</font></a></td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;strong=H&amp;langx=zh-cn');" title="南特 [中]"><font true="">0.87</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;langx=zh-cn');" title="南特 [中]"><font true="">2.09</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;strong=H&amp;langx=zh-cn');" title="南特 [中]"><font true="">0.74</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;langx=zh-cn');" title="大"><font true="">0.74</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231984" style="display: ;">
  <!--<tr id="TR1_07-1231984" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;langx=zh-cn');" title="塞维特"><font true="">4.80</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;strong=H&amp;langx=zh-cn');" title="塞维特"><font true="">0.97</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;langx=zh-cn');" title="塞维特"><font true="">5.00</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31983&amp;strong=H&amp;langx=zh-cn');" title="塞维特"><font true="">1.11</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31984&amp;langx=zh-cn');" title="小"><font true="">1.08</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231984" style="display: ;">
  <!--<tr id="TR2_07-1231984" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231984_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231984"><div id="07-1231984" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31984','07-12<br>12:30p<br><font color=red>滚球</font>','球会友谊赛','南特 [中]','塞维特'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811200&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31983&amp;langx=zh-cn');" title="和"><font true="">3.95</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811200',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811201&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31983&amp;langx=zh-cn');" title="和"><font true="">2.27</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232000" style="display: ;">
  <!--<tr id="TR_07-1232000" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232000_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">索察 <font color="#005aff">[中]</font><br>
      迪卓恩&nbsp;</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;langx=zh-cn');" title="索察 [中]"><font true="">2.79</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;strong=C&amp;langx=zh-cn');" title="索察 [中]"><font true="">0.89</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;langx=zh-cn');" title="索察 [中]"><font true="">3.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;strong=C&amp;langx=zh-cn');" title="索察 [中]"><font true="">1.14</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;langx=zh-cn');" title="大"><font true="">0.85</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232000" style="display: ;">
  <!--<tr id="TR1_07-1232000" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;langx=zh-cn');" title="迪卓恩&nbsp;"><font true="">2.17</font></a></td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;strong=C&amp;langx=zh-cn');" title="迪卓恩&nbsp;"><font true="">0.95</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;langx=zh-cn');" title="小"><font true="">0.71</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;langx=zh-cn');" title="迪卓恩&nbsp;"><font true="">2.75</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31999&amp;strong=C&amp;langx=zh-cn');" title="迪卓恩&nbsp;"><font true="">0.71</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32000&amp;langx=zh-cn');" title="小"><font true="">0.97</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232000" style="display: ;">
  <!--<tr id="TR2_07-1232000" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232000_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232000"><div id="07-1232000" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32000','07-12<br>12:30p<br><font color=red>滚球</font>','球会友谊赛','索察 [中]','迪卓恩&nbsp;'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811208&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31999&amp;langx=zh-cn');" title="和"><font true="">3.35</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811208',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811209&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31999&amp;langx=zh-cn');" title="和"><font true="">2.14</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232008" style="display: ;">
  <!--<tr id="TR_07-1232008" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232008_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">华登舒特<br>
      波鸿</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;langx=zh-cn');" title="华登舒特"><font true="">6.90</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;strong=C&amp;langx=zh-cn');" title="华登舒特"><font true="">1.14</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;langx=zh-cn');" title="大"><font true="">0.81</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;langx=zh-cn');" title="华登舒特"><font true="">6.10</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;strong=C&amp;langx=zh-cn');" title="华登舒特"><font true="">1.05</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;langx=zh-cn');" title="大"><font true="">0.85</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232008" style="display: ;">
  <!--<tr id="TR1_07-1232008" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;langx=zh-cn');" title="波鸿"><font true="">1.29</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;strong=C&amp;langx=zh-cn');" title="波鸿"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;langx=zh-cn');" title="小"><font true="">1.01</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;langx=zh-cn');" title="波鸿"><font true="">1.78</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32007&amp;strong=C&amp;langx=zh-cn');" title="波鸿"><font true="">0.79</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32008&amp;langx=zh-cn');" title="小"><font true="">0.97</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232008" style="display: ;">
  <!--<tr id="TR2_07-1232008" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232008_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232008"><div id="07-1232008" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32008','07-12<br>12:30p<br><font color=red>滚球</font>','球会友谊赛','华登舒特','波鸿'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811212&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32007&amp;langx=zh-cn');" title="和"><font true="">4.95</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811212',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811213&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32007&amp;langx=zh-cn');" title="和"><font true="">2.52</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232016" style="display: ;">
  <!--<tr id="TR_07-1232016" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:30<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232016_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">红星圣欧恩 <font color="#005aff">[中]</font><br>
      切姆步莱</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32016&amp;langx=zh-cn');" title="红星圣欧恩 [中]"><font true="">2.14</font></a></td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32016&amp;strong=H&amp;langx=zh-cn');" title="红星圣欧恩 [中]"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32015&amp;langx=zh-cn');" title="大"><font true="">1.01</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32016&amp;strong=&amp;langx=zh-cn');" title="红星圣欧恩 [中]"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32015&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232016" style="display: ;">
  <!--<tr id="TR1_07-1232016" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32015&amp;langx=zh-cn');" title="切姆步莱"><font true="">2.88</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32015&amp;strong=H&amp;langx=zh-cn');" title="切姆步莱"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32016&amp;langx=zh-cn');" title="小"><font true="">0.81</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32015&amp;strong=&amp;langx=zh-cn');" title="切姆步莱"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32016&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232016" style="display: ;">
  <!--<tr id="TR2_07-1232016" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232016_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232016"><div id="07-1232016" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32016','07-12<br>12:30p<br><font color=red>滚球</font>','球会友谊赛','红星圣欧恩 [中]','切姆步莱'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811216&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32015&amp;langx=zh-cn');" title="和"><font true="">3.25</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811216',event);"><font class="total_color">所有玩法 (5)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('冰岛联赛U19')">
      <span id="冰岛联赛U19" name="冰岛联赛U19" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('冰岛联赛U19')" class="leg_bar">冰岛联赛U19</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232336" style="display: ;">
  <!--<tr id="TR_07-1232336" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->12:45<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232336_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">IBV KFS KFR U19<br>
      维京格U19</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;langx=zh-cn');" title="IBV KFS KFR U19"><font true="">3.25</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;strong=C&amp;langx=zh-cn');" title="IBV KFS KFR U19"><font true="">0.94</font></a></span></td>
    <td class="b_rig"><span class="con">大3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;langx=zh-cn');" title="大"><font true="">0.69</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;langx=zh-cn');" title="IBV KFS KFR U19"><font true="">3.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;strong=C&amp;langx=zh-cn');" title="IBV KFS KFR U19"><font true="">0.84</font></a></span></td>
    <td class="b_1stR"><span class="con">大1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;langx=zh-cn');" title="大"><font true="">0.71</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232336" style="display: ;">
  <!--<tr id="TR1_07-1232336" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;langx=zh-cn');" title="维京格U19"><font true="">1.72</font></a></td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;strong=C&amp;langx=zh-cn');" title="维京格U19"><font true="">0.90</font></a></span></td>
    <td class="b_rig"><span class="con">小3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;langx=zh-cn');" title="小"><font true="">1.14</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;langx=zh-cn');" title="维京格U19"><font true="">2.14</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32335&amp;strong=C&amp;langx=zh-cn');" title="维京格U19"><font true="">1.00</font></a></span></td>
    <td class="b_1stR"><span class="con">小1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32336&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232336" style="display: ;">
  <!--<tr id="TR2_07-1232336" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232336_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232336"><div id="07-1232336" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32336','07-12<br>12:45p<br><font color=red>滚球</font>','冰岛联赛U19','IBV KFS KFR U19','维京格U19'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813614&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32335&amp;langx=zh-cn');" title="和"><font true="">4.30</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2813614',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813615&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32335&amp;langx=zh-cn');" title="和"><font true="">2.76</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230836" style="display: ;">
  <!--<tr id="TR_07-1230836" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230836_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">瑞尼斯基<br>
      马里博尔</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">2.63</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;strong=H&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">0.88</font></a></span></td>
    <td class="b_rig"><span class="con">大2</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;langx=zh-cn');" title="大"><font true="">0.82</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">3.35</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;strong=H&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">0.92</font></a></span></td>
    <td class="b_1stR"><span class="con">大0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;langx=zh-cn');" title="大"><font true="">0.76</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230836" style="display: ;">
  <!--<tr id="TR1_07-1230836" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;langx=zh-cn');" title="马里博尔"><font true="">2.75</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;strong=H&amp;langx=zh-cn');" title="马里博尔"><font true="">0.96</font></a></span></td>
    <td class="b_rig"><span class="con">小2</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;langx=zh-cn');" title="小"><font true="">1.00</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;langx=zh-cn');" title="马里博尔"><font true="">3.45</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30835&amp;strong=H&amp;langx=zh-cn');" title="马里博尔"><font true="">0.92</font></a></span></td>
    <td class="b_1stR"><span class="con">小0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30836&amp;langx=zh-cn');" title="小"><font true="">1.06</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230836" style="display: ;">
  <!--<tr id="TR2_07-1230836" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230836_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230836"><div id="07-1230836" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30836','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','瑞尼斯基','马里博尔'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806252&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30835&amp;langx=zh-cn');" title="和"><font true="">3.05</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806252',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806253&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30835&amp;langx=zh-cn');" title="和"><font true="">1.96</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230838" style="display: ;">
  <!--<tr id="TR_07-1230838" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230838_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">瑞尼斯基<br>
      马里博尔</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30838&amp;strong=H&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">1.23</font></a></span></td>
    <td class="b_rig"><span class="con">大2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30837&amp;langx=zh-cn');" title="大"><font true="">1.09</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806255&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30838&amp;strong=H&amp;langx=zh-cn');" title="瑞尼斯基"><font true="">1.51</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806255&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30837&amp;langx=zh-cn');" title="大"><font true="">1.21</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230838" style="display: ;">
  <!--<tr id="TR1_07-1230838" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30837&amp;strong=H&amp;langx=zh-cn');" title="马里博尔"><font true="">0.65</font></a></span></td>
    <td class="b_rig"><span class="con">小2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30838&amp;langx=zh-cn');" title="小"><font true="">0.73</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806254&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806255&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30837&amp;strong=H&amp;langx=zh-cn');" title="马里博尔"><font true="">0.50</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806255&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30838&amp;langx=zh-cn');" title="小"><font true="">0.64</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230838" style="display: ;">
  <!--<tr id="TR2_07-1230838" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230838_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230838"><div id="07-1230838" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30838','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','瑞尼斯基','马里博尔'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230856" style="display: ;">
  <!--<tr id="TR_07-1230856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230856_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">马模<br>
      华达</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;langx=zh-cn');" title="马模"><font true="">1.36</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;strong=H&amp;langx=zh-cn');" title="马模"><font true="">0.82</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;langx=zh-cn');" title="大"><font true="">0.83</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;langx=zh-cn');" title="马模"><font true="">1.90</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;strong=H&amp;langx=zh-cn');" title="马模"><font true="">0.89</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;langx=zh-cn');" title="大"><font true="">0.89</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230856" style="display: ;">
  <!--<tr id="TR1_07-1230856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;langx=zh-cn');" title="华达"><font true="">8.00</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;strong=H&amp;langx=zh-cn');" title="华达"><font true="">1.02</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;langx=zh-cn');" title="小"><font true="">0.99</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;langx=zh-cn');" title="华达"><font true="">7.00</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30855&amp;strong=H&amp;langx=zh-cn');" title="华达"><font true="">0.95</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30856&amp;langx=zh-cn');" title="小"><font true="">0.93</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230856" style="display: ;">
  <!--<tr id="TR2_07-1230856" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230856_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230856"><div id="07-1230856" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30856','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','马模','华达'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30855&amp;langx=zh-cn');" title="和"><font true="">4.75</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806256',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30855&amp;langx=zh-cn');" title="和"><font true="">2.31</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230858" style="display: ;">
  <!--<tr id="TR_07-1230858" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230858_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">马模<br>
      华达</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30858&amp;strong=H&amp;langx=zh-cn');" title="马模"><font true="">1.08</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30857&amp;langx=zh-cn');" title="大"><font true="">1.08</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806259&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30858&amp;strong=H&amp;langx=zh-cn');" title="马模"><font true="">1.28</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806259&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30857&amp;langx=zh-cn');" title="大"><font true="">1.29</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230858" style="display: ;">
  <!--<tr id="TR1_07-1230858" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30857&amp;strong=H&amp;langx=zh-cn');" title="华达"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30858&amp;langx=zh-cn');" title="小"><font true="">0.74</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806258&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806259&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30857&amp;strong=H&amp;langx=zh-cn');" title="华达"><font true="">0.62</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806259&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30858&amp;langx=zh-cn');" title="小"><font true="">0.59</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230858" style="display: ;">
  <!--<tr id="TR2_07-1230858" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230858_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230858"><div id="07-1230858" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30858','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','马模','华达'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230876" style="display: ;">
  <!--<tr id="TR_07-1230876" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230876_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">比尔舒华夏普尔<br>
      汉维德</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">1.29</font></a></td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;strong=H&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;langx=zh-cn');" title="大"><font true="">1.01</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">1.89</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;strong=H&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">0.90</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;langx=zh-cn');" title="大"><font true="">0.97</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230876" style="display: ;">
  <!--<tr id="TR1_07-1230876" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;langx=zh-cn');" title="汉维德"><font true="">10.50</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;strong=H&amp;langx=zh-cn');" title="汉维德"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;langx=zh-cn');" title="小"><font true="">0.81</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;langx=zh-cn');" title="汉维德"><font true="">7.80</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30875&amp;strong=H&amp;langx=zh-cn');" title="汉维德"><font true="">0.94</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30876&amp;langx=zh-cn');" title="小"><font true="">0.85</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230876" style="display: ;">
  <!--<tr id="TR2_07-1230876" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230876_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230876"><div id="07-1230876" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30876','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','比尔舒华夏普尔','汉维德'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806260&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30875&amp;langx=zh-cn');" title="和"><font true="">5.00</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806260',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806261&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30875&amp;langx=zh-cn');" title="和"><font true="">2.25</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230878" style="display: ;">
  <!--<tr id="TR_07-1230878" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230878_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">比尔舒华夏普尔<br>
      汉维德</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30878&amp;strong=H&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">0.69</font></a></span></td>
    <td class="b_rig"><span class="con">大2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30877&amp;langx=zh-cn');" title="大"><font true="">0.79</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806263&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30878&amp;strong=H&amp;langx=zh-cn');" title="比尔舒华夏普尔"><font true="">1.23</font></a></span></td>
    <td class="b_1stR"><span class="con">大0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806263&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30877&amp;langx=zh-cn');" title="大"><font true="">0.59</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230878" style="display: ;">
  <!--<tr id="TR1_07-1230878" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30877&amp;strong=H&amp;langx=zh-cn');" title="汉维德"><font true="">1.17</font></a></span></td>
    <td class="b_rig"><span class="con">小2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30878&amp;langx=zh-cn');" title="小"><font true="">1.03</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806262&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806263&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30877&amp;strong=H&amp;langx=zh-cn');" title="汉维德"><font true="">0.65</font></a></span></td>
    <td class="b_1stR"><span class="con">小0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806263&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30878&amp;langx=zh-cn');" title="小"><font true="">1.29</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230878" style="display: ;">
  <!--<tr id="TR2_07-1230878" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230878_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230878"><div id="07-1230878" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30878','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','比尔舒华夏普尔','汉维德'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230916" style="display: ;">
  <!--<tr id="TR_07-1230916" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230916_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">阿普尔<br>
      F91 杜迪兰治</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;langx=zh-cn');" title="阿普尔"><font true="">1.23</font></a></td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;strong=H&amp;langx=zh-cn');" title="阿普尔"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;langx=zh-cn');" title="大"><font true="">0.89</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.91</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;langx=zh-cn');" title="阿普尔"><font true="">1.52</font></a></td>
    <td class="b_1stR"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;strong=H&amp;langx=zh-cn');" title="阿普尔"><font true="">0.88</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;langx=zh-cn');" title="大"><font true="">0.93</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230916" style="display: ;">
  <!--<tr id="TR1_07-1230916" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">11.00</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;strong=H&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">1.03</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;langx=zh-cn');" title="小"><font true="">0.93</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.98</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">10.00</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30915&amp;strong=H&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">0.96</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30916&amp;langx=zh-cn');" title="小"><font true="">0.89</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230916" style="display: ;">
  <!--<tr id="TR2_07-1230916" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230916_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230916"><div id="07-1230916" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30916','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','阿普尔','F91 杜迪兰治'); "></div></span></td><td class="hot_tv"><span><div class="tv_icon_out"></div></span></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806268&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30915&amp;langx=zh-cn');" title="和"><font true="">6.00</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806268',event);"><font class="total_color">所有玩法 (66)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806269&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30915&amp;langx=zh-cn');" title="和"><font true="">2.90</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230918" style="display: ;">
  <!--<tr id="TR_07-1230918" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230918_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">阿普尔<br>
      F91 杜迪兰治</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5 / 2</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30918&amp;strong=H&amp;langx=zh-cn');" title="阿普尔"><font true="">1.03</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30917&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806271&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30918&amp;strong=H&amp;langx=zh-cn');" title="阿普尔"><font true="">1.33</font></a></span></td>
    <td class="b_1stR"><span class="con">大1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806271&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30917&amp;langx=zh-cn');" title="大"><font true="">1.26</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230918" style="display: ;">
  <!--<tr id="TR1_07-1230918" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30917&amp;strong=H&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30918&amp;langx=zh-cn');" title="小"><font true="">0.71</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806270&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806271&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30917&amp;strong=H&amp;langx=zh-cn');" title="F91 杜迪兰治"><font true="">0.59</font></a></span></td>
    <td class="b_1stR"><span class="con">小1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806271&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30918&amp;langx=zh-cn');" title="小"><font true="">0.61</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230918" style="display: ;">
  <!--<tr id="TR2_07-1230918" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230918_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230918"><div id="07-1230918" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30918','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','阿普尔','F91 杜迪兰治'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230896" style="display: ;">
  <!--<tr id="TR_07-1230896" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230896_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">舒列夫<br>
      库克斯</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;langx=zh-cn');" title="舒列夫"><font true="">1.37</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;strong=H&amp;langx=zh-cn');" title="舒列夫"><font true="">0.95</font></a></span></td>
    <td class="b_rig"><span class="con">大2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;langx=zh-cn');" title="大"><font true="">0.80</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.96</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;langx=zh-cn');" title="舒列夫"><font true="">1.90</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;strong=H&amp;langx=zh-cn');" title="舒列夫"><font true="">0.91</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230896" style="display: ;">
  <!--<tr id="TR1_07-1230896" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;langx=zh-cn');" title="库克斯"><font true="">8.30</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;strong=H&amp;langx=zh-cn');" title="库克斯"><font true="">0.89</font></a></span></td>
    <td class="b_rig"><span class="con">小2 / 2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;langx=zh-cn');" title="小"><font true="">1.02</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.93</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;langx=zh-cn');" title="库克斯"><font true="">7.00</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30895&amp;strong=H&amp;langx=zh-cn');" title="库克斯"><font true="">0.93</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30896&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230896" style="display: ;">
  <!--<tr id="TR2_07-1230896" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230896_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230896"><div id="07-1230896" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30896','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','舒列夫','库克斯'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2806264&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30895&amp;langx=zh-cn');" title="和"><font true="">4.50</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2806264',event);"><font class="total_color">所有玩法 (13)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2806265&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=30895&amp;langx=zh-cn');" title="和"><font true="">2.30</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('欧洲冠军杯外围赛')">
      <span id="欧洲冠军杯外围赛" name="欧洲冠军杯外围赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('欧洲冠军杯外围赛')" class="leg_bar">欧洲冠军杯外围赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1230898" style="display: ;">
  <!--<tr id="TR_07-1230898" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1230898_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">舒列夫<br>
      库克斯</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30898&amp;strong=H&amp;langx=zh-cn');" title="舒列夫"><font true="">1.20</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30897&amp;langx=zh-cn');" title="大"><font true="">1.04</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806267&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30898&amp;strong=H&amp;langx=zh-cn');" title="舒列夫"><font true="">1.29</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806267&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30897&amp;langx=zh-cn');" title="大"><font true="">1.35</font></a></span></td>
  </tr>
  <tr id="TR1_07-1230898" style="display: ;">
  <!--<tr id="TR1_07-1230898" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30897&amp;strong=H&amp;langx=zh-cn');" title="库克斯"><font true="">0.67</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30898&amp;langx=zh-cn');" title="小"><font true="">0.78</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2806266&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2806267&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=30897&amp;strong=H&amp;langx=zh-cn');" title="库克斯"><font true="">0.61</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2806267&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=30898&amp;langx=zh-cn');" title="小"><font true="">0.56</font></a></span></td>
  </tr>
  <tr id="TR2_07-1230898" style="display: ;">
  <!--<tr id="TR2_07-1230898" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1230898_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1230898"><div id="07-1230898" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('30898','07-12<br>01:00p<br><font color=red>滚球</font>','欧洲冠军杯外围赛','舒列夫','库克斯'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232366" style="display: ;">
  <!--<tr id="TR_07-1232366" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232366_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">巴素利<br>
      毕尔巴鄂竞技</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;langx=zh-cn');" title="巴素利"><font true="">2.30</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;strong=H&amp;langx=zh-cn');" title="巴素利"><font true="">0.78</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;langx=zh-cn');" title="大"><font true="">0.88</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;langx=zh-cn');" title="巴素利"><font true="">2.89</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;strong=H&amp;langx=zh-cn');" title="巴素利"><font true="">0.85</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;langx=zh-cn');" title="大"><font true="">0.77</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232366" style="display: ;">
  <!--<tr id="TR1_07-1232366" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">2.65</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;strong=H&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">1.13</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;langx=zh-cn');" title="小"><font true="">1.00</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">2.99</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32365&amp;strong=H&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">1.05</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32366&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232366" style="display: ;">
  <!--<tr id="TR2_07-1232366" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232366_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232366"><div id="07-1232366" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32366','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','巴素利','毕尔巴鄂竞技'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813756&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32365&amp;langx=zh-cn');" title="和"><font true="">3.50</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2813756',event);"><font class="total_color">所有玩法 (68)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813757&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32365&amp;langx=zh-cn');" title="和"><font true="">2.27</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232368" style="display: ;">
  <!--<tr id="TR_07-1232368" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232368_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">巴素利<br>
      毕尔巴鄂竞技</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32368&amp;strong=H&amp;langx=zh-cn');" title="巴素利"><font true="">1.09</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32367&amp;langx=zh-cn');" title="大"><font true="">0.71</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813759&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32368&amp;strong=H&amp;langx=zh-cn');" title="巴素利"><font true="">1.49</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813759&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32367&amp;langx=zh-cn');" title="大"><font true="">1.23</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232368" style="display: ;">
  <!--<tr id="TR1_07-1232368" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32367&amp;strong=H&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32368&amp;langx=zh-cn');" title="小"><font true="">1.20</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813758&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813759&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32367&amp;strong=H&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">0.57</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813759&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32368&amp;langx=zh-cn');" title="小"><font true="">0.69</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232368" style="display: ;">
  <!--<tr id="TR2_07-1232368" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232368_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232368"><div id="07-1232368" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32368','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','巴素利','毕尔巴鄂竞技'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232370" style="display: ;">
  <!--<tr id="TR_07-1232370" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232370_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">巴素利<br>
      毕尔巴鄂竞技</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32370&amp;strong=C&amp;langx=zh-cn');" title="巴素利"><font true="">0.53</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32369&amp;langx=zh-cn');" title="大"><font true="">1.19</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32370&amp;strong=&amp;langx=zh-cn');" title="巴素利"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32369&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232370" style="display: ;">
  <!--<tr id="TR1_07-1232370" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32369&amp;strong=C&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font true="">1.58</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32370&amp;langx=zh-cn');" title="小"><font true="">0.72</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814000&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32369&amp;strong=&amp;langx=zh-cn');" title="毕尔巴鄂竞技"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32370&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232370" style="display: ;">
  <!--<tr id="TR2_07-1232370" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232370_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232370"><div id="07-1232370" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32370','07-12<br>01:00p','阿尔卑斯节足球锦标赛(在瑞士)','巴素利','毕尔巴鄂竞技'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232386" style="display: ;">
  <!--<tr id="TR_07-1232386" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232386_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">锡昂<br>
      PSV燕豪芬</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;langx=zh-cn');" title="锡昂"><font true="">2.54</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;strong=C&amp;langx=zh-cn');" title="锡昂"><font true="">1.04</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;langx=zh-cn');" title="大"><font true="">0.99</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;langx=zh-cn');" title="锡昂"><font true="">3.05</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;strong=C&amp;langx=zh-cn');" title="锡昂"><font true="">1.06</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;langx=zh-cn');" title="大"><font true="">1.05</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232386" style="display: ;">
  <!--<tr id="TR1_07-1232386" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">2.28</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;strong=C&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">0.86</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;langx=zh-cn');" title="小"><font true="">0.89</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">2.76</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32385&amp;strong=C&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">0.84</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32386&amp;langx=zh-cn');" title="小"><font true="">0.83</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232386" style="display: ;">
  <!--<tr id="TR2_07-1232386" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232386_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232386"><div id="07-1232386" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32386','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','锡昂','PSV燕豪芬'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2813762&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32385&amp;langx=zh-cn');" title="和"><font true="">3.70</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2813762',event);"><font class="total_color">所有玩法 (68)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2813763&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32385&amp;langx=zh-cn');" title="和"><font true="">2.33</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232388" style="display: ;">
  <!--<tr id="TR_07-1232388" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232388_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">锡昂<br>
      PSV燕豪芬</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32388&amp;strong=C&amp;langx=zh-cn');" title="锡昂"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32387&amp;langx=zh-cn');" title="大"><font true="">0.74</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813765&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32388&amp;strong=C&amp;langx=zh-cn');" title="锡昂"><font true="">0.63</font></a></span></td>
    <td class="b_1stR"><span class="con">大1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813765&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32387&amp;langx=zh-cn');" title="大"><font true="">1.42</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232388" style="display: ;">
  <!--<tr id="TR1_07-1232388" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32387&amp;strong=C&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">1.16</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32388&amp;langx=zh-cn');" title="小"><font true="">1.16</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2813764&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2813765&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32387&amp;strong=C&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">1.36</font></a></span></td>
    <td class="b_1stR"><span class="con">小1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2813765&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32388&amp;langx=zh-cn');" title="小"><font true="">0.58</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232388" style="display: ;">
  <!--<tr id="TR2_07-1232388" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232388_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232388"><div id="07-1232388" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32388','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','锡昂','PSV燕豪芬'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232390" style="display: ;">
  <!--<tr id="TR_07-1232390" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232390_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">锡昂<br>
      PSV燕豪芬</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32390&amp;strong=H&amp;langx=zh-cn');" title="锡昂"><font true="">1.40</font></a></span></td>
    <td class="b_rig"><span class="con">大3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32389&amp;langx=zh-cn');" title="大"><font true="">1.23</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32390&amp;strong=&amp;langx=zh-cn');" title="锡昂"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32389&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232390" style="display: ;">
  <!--<tr id="TR1_07-1232390" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32389&amp;strong=H&amp;langx=zh-cn');" title="PSV燕豪芬"><font true="">0.61</font></a></span></td>
    <td class="b_rig"><span class="con">小3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32390&amp;langx=zh-cn');" title="小"><font true="">0.69</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814002&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32389&amp;strong=&amp;langx=zh-cn');" title="PSV燕豪芬"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32390&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232390" style="display: ;">
  <!--<tr id="TR2_07-1232390" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232390_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232390"><div id="07-1232390" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32390','07-12<br>01:00p','阿尔卑斯节足球锦标赛(在瑞士)','锡昂','PSV燕豪芬'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232424" style="display: ;">
  <!--<tr id="TR_07-1232424" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232424_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">马赛<br>
      维托鲁康斯坦萨</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;langx=zh-cn');" title="马赛"><font true="">1.31</font></a></td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;strong=H&amp;langx=zh-cn');" title="马赛"><font true="">0.99</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;langx=zh-cn');" title="马赛"><font true="">1.78</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;strong=H&amp;langx=zh-cn');" title="马赛"><font true="">0.79</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;langx=zh-cn');" title="大"><font true="">0.93</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232424" style="display: ;">
  <!--<tr id="TR1_07-1232424" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">7.10</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;strong=H&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">0.91</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;langx=zh-cn');" title="小"><font true="">0.97</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">6.50</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32423&amp;strong=H&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">1.12</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32424&amp;langx=zh-cn');" title="小"><font true="">0.95</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232424" style="display: ;">
  <!--<tr id="TR2_07-1232424" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232424_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232424"><div id="07-1232424" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32424','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','马赛','维托鲁康斯坦萨'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2814046&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32423&amp;langx=zh-cn');" title="和"><font true="">5.00</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2814046',event);"><font class="total_color">所有玩法 (68)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2814047&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32423&amp;langx=zh-cn');" title="和"><font true="">2.45</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232426" style="display: ;">
  <!--<tr id="TR_07-1232426" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232426_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">马赛<br>
      维托鲁康斯坦萨</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32426&amp;strong=H&amp;langx=zh-cn');" title="马赛"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">大3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32425&amp;langx=zh-cn');" title="大"><font true="">1.14</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2814049&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32426&amp;strong=H&amp;langx=zh-cn');" title="马赛"><font true="">1.17</font></a></span></td>
    <td class="b_1stR"><span class="con">大1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2814049&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32425&amp;langx=zh-cn');" title="大"><font true="">1.35</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232426" style="display: ;">
  <!--<tr id="TR1_07-1232426" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32425&amp;strong=H&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">1.16</font></a></span></td>
    <td class="b_rig"><span class="con">小3 / 3.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32426&amp;langx=zh-cn');" title="小"><font true="">0.75</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814048&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2814049&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32425&amp;strong=H&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">0.75</font></a></span></td>
    <td class="b_1stR"><span class="con">小1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2814049&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32426&amp;langx=zh-cn');" title="小"><font true="">0.62</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232426" style="display: ;">
  <!--<tr id="TR2_07-1232426" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232426_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232426"><div id="07-1232426" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32426','07-12<br>01:00p<br><font color=red>滚球</font>','阿尔卑斯节足球锦标赛(在瑞士)','马赛','维托鲁康斯坦萨'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')">
      <span id="阿尔卑斯节足球锦标赛(在瑞士)" name="阿尔卑斯节足球锦标赛(在瑞士)" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('阿尔卑斯节足球锦标赛(在瑞士)')" class="leg_bar">阿尔卑斯节足球锦标赛(在瑞士)</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232428" style="display: ;">
  <!--<tr id="TR_07-1232428" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232428_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">马赛<br>
      维托鲁康斯坦萨</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5 / 2</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32428&amp;strong=H&amp;langx=zh-cn');" title="马赛"><font true="">1.23</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32427&amp;langx=zh-cn');" title="大"><font true="">0.70</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32428&amp;strong=&amp;langx=zh-cn');" title="马赛"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32427&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232428" style="display: ;">
  <!--<tr id="TR1_07-1232428" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32427&amp;strong=H&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font true="">0.71</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32428&amp;langx=zh-cn');" title="小"><font true="">1.21</font></a></span></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2814050&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font undefined=""></font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32427&amp;strong=&amp;langx=zh-cn');" title="维托鲁康斯坦萨"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32428&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232428" style="display: ;">
  <!--<tr id="TR2_07-1232428" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232428_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232428"><div id="07-1232428" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32428','07-12<br>01:00p','阿尔卑斯节足球锦标赛(在瑞士)','马赛','维托鲁康斯坦萨'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt">&nbsp;</span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232032" style="display: ;">
  <!--<tr id="TR_07-1232032" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232032_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">色格拉布鲁日 <font color="#005aff">[中]</font><br>
      洛格伦</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32032&amp;langx=zh-cn');" title="色格拉布鲁日 [中]"><font true="">4.40</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32032&amp;strong=C&amp;langx=zh-cn');" title="色格拉布鲁日 [中]"><font true="">1.08</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32031&amp;langx=zh-cn');" title="大"><font true="">0.96</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32032&amp;strong=&amp;langx=zh-cn');" title="色格拉布鲁日 [中]"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32031&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232032" style="display: ;">
  <!--<tr id="TR1_07-1232032" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32031&amp;langx=zh-cn');" title="洛格伦"><font true="">1.55</font></a></td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32031&amp;strong=C&amp;langx=zh-cn');" title="洛格伦"><font true="">0.76</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32032&amp;langx=zh-cn');" title="小"><font true="">0.86</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32031&amp;strong=&amp;langx=zh-cn');" title="洛格伦"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32032&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232032" style="display: ;">
  <!--<tr id="TR2_07-1232032" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232032_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232032"><div id="07-1232032" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32032','07-12<br>01:00p<br><font color=red>滚球</font>','球会友谊赛','色格拉布鲁日 [中]','洛格伦'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811224&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32031&amp;langx=zh-cn');" title="和"><font true="">4.05</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811224',event);"><font class="total_color">所有玩法 (5)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232080" style="display: ;">
  <!--<tr id="TR_07-1232080" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232080_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">查维斯 <font color="#005aff">[中]</font><br>
      摩里伦斯</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32080&amp;strong=H&amp;langx=zh-cn');" title="查维斯 [中]"><font true="">0.81</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32079&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32080&amp;strong=&amp;langx=zh-cn');" title="查维斯 [中]"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32079&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232080" style="display: ;">
  <!--<tr id="TR1_07-1232080" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32079&amp;strong=H&amp;langx=zh-cn');" title="摩里伦斯"><font true="">1.03</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32080&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811248&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32079&amp;strong=&amp;langx=zh-cn');" title="摩里伦斯"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32080&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232080" style="display: ;">
  <!--<tr id="TR2_07-1232080" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232080_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232080"><div id="07-1232080" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32080','07-12<br>01:00p<br><font color=red>滚球</font>','球会友谊赛','查维斯 [中]','摩里伦斯'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811248',event);"><font class="total_color">所有玩法 (3)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232096" style="display: ;">
  <!--<tr id="TR_07-1232096" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232096_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">波城 <font color="#005aff">[中]</font><br>
      罗德兹</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;langx=zh-cn');" title="波城 [中]"><font true="">2.32</font></a></td>
    <td class="b_rig"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;strong=H&amp;langx=zh-cn');" title="波城 [中]"><font true="">0.83</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;langx=zh-cn');" title="大"><font true="">0.86</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;langx=zh-cn');" title="波城 [中]"><font true="">2.91</font></a></td>
    <td class="b_1stR"><span class="con">0</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;strong=H&amp;langx=zh-cn');" title="波城 [中]"><font true="">0.81</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;langx=zh-cn');" title="大"><font true="">0.85</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232096" style="display: ;">
  <!--<tr id="TR1_07-1232096" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;langx=zh-cn');" title="罗德兹"><font true="">2.54</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;strong=H&amp;langx=zh-cn');" title="罗德兹"><font true="">1.01</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;langx=zh-cn');" title="小"><font true="">0.96</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;langx=zh-cn');" title="罗德兹"><font true="">3.20</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32095&amp;strong=H&amp;langx=zh-cn');" title="罗德兹"><font true="">1.03</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32096&amp;langx=zh-cn');" title="小"><font true="">0.97</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232096" style="display: ;">
  <!--<tr id="TR2_07-1232096" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232096_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232096"><div id="07-1232096" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32096','07-12<br>01:00p<br><font color=red>滚球</font>','球会友谊赛','波城 [中]','罗德兹'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811256&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32095&amp;langx=zh-cn');" title="和"><font true="">3.40</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811256',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811257&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32095&amp;langx=zh-cn');" title="和"><font true="">2.17</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232246" style="display: ;">
  <!--<tr id="TR_07-1232246" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232246_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">安罗科萨斯<br>
      奥林比克斯尼克西亚</td>
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con">1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32246&amp;strong=H&amp;langx=zh-cn');" title="安罗科萨斯"><font true="">0.78</font></a></span></td>
    <td class="b_rig"><span class="con">大3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32245&amp;langx=zh-cn');" title="大"><font true="">0.71</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32246&amp;strong=&amp;langx=zh-cn');" title="安罗科萨斯"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32245&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1232246" style="display: ;">
  <!--<tr id="TR1_07-1232246" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen">&nbsp;</td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32245&amp;strong=H&amp;langx=zh-cn');" title="奥林比克斯尼克西亚"><font true="">1.06</font></a></span></td>
    <td class="b_rig"><span class="con">小3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32246&amp;langx=zh-cn');" title="小"><font true="">1.12</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811950&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32245&amp;strong=&amp;langx=zh-cn');" title="奥林比克斯尼克西亚"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32246&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1232246" style="display: ;">
  <!--<tr id="TR2_07-1232246" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232246_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232246"><div id="07-1232246" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32246','07-12<br>01:00p<br><font color=red>滚球</font>','球会友谊赛','安罗科萨斯','奥林比克斯尼克西亚'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen">&nbsp;</td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811950',event);"><font class="total_color">所有玩法 (3)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: none;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('球会友谊赛')">
      <span id="球会友谊赛" name="球会友谊赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('球会友谊赛')" class="leg_bar">球会友谊赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1232262" style="display: ;">
  <!--<tr id="TR_07-1232262" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1232262_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">安格斯 <font color="#005aff">[中]</font><br>
      奥尔良</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;langx=zh-cn');" title="安格斯 [中]"><font true="">1.60</font></a></td>
    <td class="b_rig"><span class="con">0.5 / 1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;strong=H&amp;langx=zh-cn');" title="安格斯 [中]"><font true="">0.86</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;langx=zh-cn');" title="大"><font true="">1.12</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;langx=zh-cn');" title="安格斯 [中]"><font true="">2.26</font></a></td>
    <td class="b_1stR"><span class="con">0 / 0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;strong=H&amp;langx=zh-cn');" title="安格斯 [中]"><font true="">0.88</font></a></span></td>
    <td class="b_1stR"><span class="con">大1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;langx=zh-cn');" title="大"><font true="">0.88</font></a></span></td>
  </tr>
  <tr id="TR1_07-1232262" style="display: ;">
  <!--<tr id="TR1_07-1232262" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;langx=zh-cn');" title="奥尔良"><font true="">4.40</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;strong=H&amp;langx=zh-cn');" title="奥尔良"><font true="">0.98</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;langx=zh-cn');" title="小"><font true="">0.71</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;langx=zh-cn');" title="奥尔良"><font true="">4.55</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=32261&amp;strong=H&amp;langx=zh-cn');" title="奥尔良"><font true="">0.96</font></a></span></td>
    <td class="b_1stR"><span class="con">小1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=32262&amp;langx=zh-cn');" title="小"><font true="">0.94</font></a></span></td>
  </tr>
  <tr id="TR2_07-1232262" style="display: ;">
  <!--<tr id="TR2_07-1232262" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1232262_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1232262"><div id="07-1232262" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('32262','07-12<br>01:00p<br><font color=red>滚球</font>','球会友谊赛','安格斯 [中]','奥尔良'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2811958&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32261&amp;langx=zh-cn');" title="和"><font true="">3.70</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2811958',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2811959&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=32261&amp;langx=zh-cn');" title="和"><font true="">2.18</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('瑞典女子甲组联赛')">
      <span id="瑞典女子甲组联赛" name="瑞典女子甲组联赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('瑞典女子甲组联赛')" class="leg_bar">瑞典女子甲组联赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231774" style="display: ;">
  <!--<tr id="TR_07-1231774" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231774_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">波占(女)<br>
      豪瓦士比尔达尔(女)</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;langx=zh-cn');" title="波占(女)"><font true="">1.45</font></a></td>
    <td class="b_rig"><span class="con">1</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;strong=H&amp;langx=zh-cn');" title="波占(女)"><font true="">0.83</font></a></span></td>
    <td class="b_rig"><span class="con">大2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;langx=zh-cn');" title="大"><font true="">0.91</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.95</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;langx=zh-cn');" title="波占(女)"><font true="">2.04</font></a></td>
    <td class="b_1stR"><span class="con">0.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;strong=H&amp;langx=zh-cn');" title="波占(女)"><font true="">1.05</font></a></span></td>
    <td class="b_1stR"><span class="con">大1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;langx=zh-cn');" title="大"><font true="">1.11</font></a></span></td>
  </tr>
  <tr id="TR1_07-1231774" style="display: ;">
  <!--<tr id="TR1_07-1231774" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;langx=zh-cn');" title="豪瓦士比尔达尔(女)"><font true="">5.20</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;strong=H&amp;langx=zh-cn');" title="豪瓦士比尔达尔(女)"><font true="">1.01</font></a></span></td>
    <td class="b_rig"><span class="con">小2.5 / 3</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;langx=zh-cn');" title="小"><font true="">0.91</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.94</font></a></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;langx=zh-cn');" title="豪瓦士比尔达尔(女)"><font true="">5.10</font></a></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31773&amp;strong=H&amp;langx=zh-cn');" title="豪瓦士比尔达尔(女)"><font true="">0.79</font></a></span></td>
    <td class="b_1stR"><span class="con">小1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31774&amp;langx=zh-cn');" title="小"><font true="">0.72</font></a></span></td>
  </tr>
  <tr id="TR2_07-1231774" style="display: ;">
  <!--<tr id="TR2_07-1231774" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231774_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231774"><div id="07-1231774" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31774','07-12<br>01:00p<br><font color=red>滚球</font>','瑞典女子甲组联赛','波占(女)','豪瓦士比尔达尔(女)'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810832&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31773&amp;langx=zh-cn');" title="和"><font true="">4.15</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2810832',event);"><font class="total_color">所有玩法 (9)</font></a></span></td>
    <td class="b_1st"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HM','gid=2810833&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31773&amp;langx=zh-cn');" title="和"><font true="">2.30</font></a></td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


	
  <!--SHOW LEGUAGE START-->
  <tr style="display: ;">
    <td colspan="9" class="b_hline">
    	<table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="legicon" onclick="showLeg('挪威丙组联赛')">
      <span id="挪威丙组联赛" name="挪威丙组联赛" class="showleg">
      	<span id="LegOpen"></span>
       <!--展开联盟-符号--><!--span id="LegOpen"></span-->
       <!--收合联盟-符号--><!--div id="LegClose"></div-->
      </span>
        </td><td onclick="showLeg('挪威丙组联赛')" class="leg_bar">挪威丙组联赛</td></tr></tbody></table>
      </td>
  </tr>
  <!--SHOW LEGUAGE END-->
  <tr id="TR_07-1231556" style="display: ;">
  <!--<tr id="TR_07-1231556" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td rowspan="3" class="b_cen time_main"><!--table><tr><td class="b_cen"-->13:00<br><font color="red">滚球</font><!--/td></tr></table--></td>
    <td rowspan="2" class="team_name none" id="TR_07-1231556_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);">弗罗亚<br>
      斯尔沃于</td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31556&amp;langx=zh-cn');" title="弗罗亚"><font true="">1.38</font></a></td>
    <td class="b_rig"><span class="con">1 / 1.5</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31556&amp;strong=H&amp;langx=zh-cn');" title="弗罗亚"><font true="">0.86</font></a></span></td>
    <td class="b_rig"><span class="con">大3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31555&amp;langx=zh-cn');" title="大"><font true="">0.78</font></a></span></td>
    <td class="b_cen">单<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=ODD&amp;langx=zh-cn');" title="单"><font true="">1.94</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31556&amp;strong=&amp;langx=zh-cn');" title="弗罗亚"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31555&amp;langx=zh-cn');" title="大"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR1_07-1231556" style="display: ;">
  <!--<tr id="TR1_07-1231556" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31555&amp;langx=zh-cn');" title="斯尔沃于"><font true="">4.65</font></a></td>
    <td class="b_rig"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','R','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31555&amp;strong=H&amp;langx=zh-cn');" title="斯尔沃于"><font true="">0.92</font></a></span></td>
    <td class="b_rig"><span class="con">小3.5 / 4</span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','OU','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31556&amp;langx=zh-cn');" title="小"><font true="">1.00</font></a></span></td>
    <td class="b_cen">双<a href="javascript://" onclick="parent.mem_order.betOrder('FT','EO','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;rtype=EVEN&amp;langx=zh-cn');" title="双"><font true="">1.95</font></a></td>
    <td class="b_1st">&nbsp;</td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HR','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=C&amp;gnum=31555&amp;strong=&amp;langx=zh-cn');" title="斯尔沃于"><font undefined=""></font></a></span></td>
    <td class="b_1stR"><span class="con"></span> <span class="ratio"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','HOU','gid=&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=H&amp;gnum=31556&amp;langx=zh-cn');" title="小"><font undefined=""></font></a></span></td>
  </tr>
  <tr id="TR2_07-1231556" style="display: ;">
  <!--<tr id="TR2_07-1231556" onMouseOver='mouseEnter_pointer(this.id);' onMouseOut='mouseOut_pointer(this.id);' style='display: ;'>-->
    <td class="drawn_td" id="TR_07-1231556_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"><table width="99%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left">和局</td><td class="hot_td"><span id="sp_07-1231556"><div id="07-1231556" class="fov_icon_out" style="cursor:hand;display:none;" title="我的最爱" onclick="addShowLoveI('31556','07-12<br>01:00p<br><font color=red>滚球</font>','挪威丙组联赛','弗罗亚','斯尔沃于'); "></div></span></td><td class="hot_tv"></td></tr></tbody></table><!--星星符号--><!--div class="fov_icon_on"></div--><!--星星符号-灰色--><!--div class="fov_icon_out"></div--></td>
    <td class="b_cen"><a href="javascript://" onclick="parent.mem_order.betOrder('FT','M','gid=2810642&amp;uid=c00ahhyrb6m17041417l153432&amp;odd_f_type=H&amp;type=N&amp;gnum=31555&amp;langx=zh-cn');" title="和"><font true="">4.70</font></a></td>
    <td colspan="3" valign="top" class="b_cen"><span class="more_txt"><a href="javascript:" onclick="show_allbets('2810642',event);"><font class="total_color">所有玩法 (5)</font></a></span></td>
    <td class="b_1st">&nbsp;</td>
    <td colspan="3" valign="top" class="b_1st">&nbsp;</td>
  </tr>


          </tbody></table>
  
</div>	</td>
      </tr>
      <tr>
        <td id="foot"><b>&nbsp;</b></td>
      </tr>
    </tbody></table>
	
	<!--<center> -->
	<!--下方刷新钮--><div id="refresh_down" class="refresh_M_btn" onclick="this.className='refresh_M_on';javascript:refreshReload('',true)"><span>刷新</span></div>
	<!--</center> -->

</td>
</tr>
</tbody></table>
<!--div id="show_run_time" ></div-->

	
<div id="SortTable" class="SortTable" name="SortTable" style="position:absolute; display:none;">
	<form id="SortForm" name="SortForm" method="POST" target="saveOrderFrame">
		<input type="hidden" id="SortType" name="SortType" value="">
		<input type="hidden" id="uid" name="uid" value="">
		<input type="hidden" id="langx" name="langx" value="">
	  <table>	
	    <tbody><tr>
	    	<td id="SortTypeC" name="SortTypeC" onclick="changeSortType(this,'C');">
					Sort By Compition
				</td>
			</tr>
	    <tr>
	    	<td id="SortTypeT" name="SortTypeT" onclick="changeSortType(this,'T');">
					Sort By Time
				</td>
			</tr>
		</tbody></table>
	</form>
</div>
	
	
	
<div class="more more_iframe_w" id="more_window" name="more_window" style="position:absolute; display:none;">
  <iframe id="showdata" name="showdata" scrolling="no" frameborder="NO" border="0" framespacing="0" noresize="" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" height="100%"></iframe>
</div>
<!--选择联赛-->
<div id="legView" style="display:none;" class="legView">
    <div class="leg_head" onmousedown="initializedragie('legView')"></div>
		<div><iframe id="legFrame" class="legFrame" src="<?php echo U('Old/legFrame');?>" frameborder="no" border="0" allowtransparency="true"></iframe></div>
    <div class="leg_foot"></div>
</div>
<div><iframe id="saveOrderFrame" name="saveOrderFrame" frameborder="no" border="0" allowtransparency="true"></iframe></div>

<div id="controlscroll" style="position: absolute; display: none;"><table border="0" cellspacing="0" cellpadding="0" class="loadBox"><tbody><tr><td><!--loading--></td></tr></tbody></table></div>

<!-- ------------------------------ 盘口选择 ------------------------------ -->

<div id="odd_f_window" style="display: none;position:absolute">
<table id="odd_group" width="100" border="0" cellspacing="1" cellpadding="1">
		<tbody><tr>
			<td class="b_hline">盘口</td>
		</tr>
		<tr>
			<td class="b_cen" width="100">
				<span id="show_odd_f"></span></td>
		</tr>
	</tbody></table>
</div>

<!-- ------------------------------ 盘口选择 ------------------------------ --><!--<div id="copyright">
    版权所有 皇冠 建议您以 IE 5.0 800 X 600 以上高彩模式浏览本站&nbsp;&nbsp;<a id=download title="下载" href="http://www.microsoft.com/taiwan/products/ie/" target="_blank">立刻下载IE</a>
</div>-->
<!--div id="copyright">
    版权所有 建议您以 IE 5.0 800 X 600 以上高彩模式浏览本站&nbsp;&nbsp;<a id=download title="下载" href="http://www.microsoft.com/taiwan/products/ie/" target="_blank">立刻下载IE</a>
</div-->


<iframe id="body_var" name="body_var" style="display:none;"></iframe>


</body>
</html>