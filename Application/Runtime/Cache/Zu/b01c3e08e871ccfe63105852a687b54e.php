<?php if (!defined('THINK_PATH')) exit();?><html><head><script>
top.uid = 'c00ahhyrb6m17041417l153432';
top.langx = 'zh-cn';
top.liveid = ''
top.casino = 'SI2';
top.mtype = '4';
top.autoOddCheck = (''+top.autoOddCheck!='undefined')?top.autoOddCheck:true;
</script>


<meta name="Robots" contect="none">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Public/css/mem_order_sel.css" rel="stylesheet" type="text/css">
<link href="/Public/css/mem_order_olympics_cn.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 "><script>
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
</script><meta http-equiv="Content-Type" content="text/html; charset=utf-8 "><script>
var isHot_game = true;//是否為世足賽
var hotgame_gtype = "FT";//目前特殊賽事的球類
function bodyLoad(){
	
	if (checkRoute == "Y"||isIPad()){
		document.getElementById('chg_site').style.display="none";
	}else{
		document.getElementById('chg_site').style.display=""; 
	}
	close_bet();
	setMsg(msg);
	
	set_messageCount(countMessage);
	reload_messageCount();
	//reload_live_game(GameHead,GameData);
	//window.onscroll();
	//document.getElementById('main').onscroll=scroll;
	//var obj=document.getElementById('main');
	//obj.
	scroll();
	try{
		//var gamecountHot=parent.body.getCountHOT();
		getCountHOT(countHOT);
		goRB();
		document.getElementById('euro_open').style.zIndex=-1;
	}catch(e){
		document.getElementById('euro_open').style.display='none';
	}	
	
	
}
window.onresize = scroll;

function isIPad(){
		var agent = navigator.userAgent;
		if(agent.indexOf("iPad")!=-1){
				return true;
		}		
		return false;		
}

function setMsg(msg){
	document.getElementById('real_msg').innerHTML=msg;
}

function showOrder(){
	
	try{
		bet_order_frame.resetTimer();
	}catch(e){}
	document.getElementById('rec_frame').height=0;
	rec_frame.document.close();
	document.getElementById('order_button').className="ord_on";
	document.getElementById('record_button').className="record_btn";
	var betDiv=document.getElementById('bet_div');
	var rec5Div=document.getElementById('rec5_div');
	betDiv.style.display="";
	rec5Div.style.display="none";
	document.getElementById('pls_bet').style.display="none";
	document.getElementById('info_div').style.display='';
	if (checkRoute != "Y"&&!isIPad()){
		document.getElementById('chg_site').style.display="";
	}
	//scroll();
	
	top.open_Rec="";
	try{
		//var gamecountHot=parent.body.getCountHOT();
		getCountHOT(countHOT);
	}catch(e){
		document.getElementById('euro_open').style.display='none';
	}	
	
}

function showRec(){

	try{
		bet_order_frame.clearAllTimer();
	}catch(e){}
	try{		
		close_bet();
	}catch(e){}
	//	bet_order_frame.document.close();
	
	document.getElementById('order_button').className="ord_btn";
	document.getElementById('record_button').className="record_on";
	//document.getElementById('info_div').style.display='none';
	
	var betDiv=document.getElementById('bet_div');
	var rec5Div=document.getElementById('rec5_div');
	
	betDiv.style.display="none";
	rec5Div.style.display="";
	rec5_div.focus();
	//alert(top.uid);
	rec_frame.location.replace("./today/show10rec.php?uid="+top.uid+"&langx="+top.langx);
	document.getElementById('pls_bet').style.display="none";
	
	try{	
		if(tenrec_id ==""){
			top.open_Rec="";
		}else{
			top.open_Rec="Y";
		}	
	}catch(e){}	
		
	try{
		//var gamecountHot=parent.body.getCountHOT();
		getCountHOT(countHOT);
	}catch(e){
		document.getElementById('euro_open').style.display='none';
	}			

	//scroll();
	//alert("showRec");
}
function onloadSet(w,h,frameName){
	
	//alert("width="+w+",height="+h+",frameName="+frameName);
	//document.getElementById(frameName).style.display="";
	document.getElementById(frameName).width  =216;
	document.getElementById(frameName).height =h;
	//document.getElementById(frameName).height =311;
	document.getElementById('pls_bet').style.display="none";
	if (frameName=="rec_frame"){
		try{	
			if(tenrec_id!=""){
				top.open_Rec="Y";
				document.getElementById('info_div').style.display='none';
				document.getElementById('chg_site').style.display="none";	
				document.getElementById('euro_open').style.display='none';
			}else{
				top.open_Rec="";
			}	
		}catch(e){}	
			
		try{
			//var gamecountHot=parent.body.getCountHOT();
			getCountHOT(countHOT);
		}catch(e){
			document.getElementById('euro_open').style.display='none';
		}		
	}

	//scroll();
}
//var top.ioradio="";

function betOrder(gtype,wtype,param){
		//alert(gtype+","+wtype+","+param)
	if (wtype=="P3"||wtype=="PR"){
		//top.keepGold_PR="";
	}else{
		top.keepGold="";
		top.keepGold_PR="";
	}
	top.ioradio="";
	var url=parseUrl(gtype,wtype,param);
	document.getElementById('order_button').className="ord_on";
	document.getElementById('record_button').className="record_btn";
	document.getElementById('pls_bet').style.display="none";
	document.getElementById('rec_frame').height=0;
	rec_frame.document.close();
	document.getElementById('rec5_div').style.display="none";
	document.getElementById('bet_div').style.display="";
	bet_order_frame.location.replace(url);
	document.getElementById('info_div').style.display='none';
	document.getElementById('chg_site').style.display="none";
	
	//document.getElementById('euro_close').style.display='none';
	document.getElementById('euro_open').style.display="none";

	top.open_bet="Y";	
	top.open_Rec="";
	//bet_order_frame.onload=onloadSet;
	//alert("betorder")
}

function parseUrl(gtype,wtype,param){
	var rm15 = new Array("ARM","BRM","ERM","DRM");
	var re15 = new Array("ARE","BRE","ERE","DRE")
	var rou15 = new Array("AROU","BROU","EROU","DROU");
	var m15 = new Array("AM","BM","CM","DM","EM","FM");
	var r15 = new Array("AR","BR","CR","DR","ER","FR")
	var ou15 = new Array("AOU","BOU","COU","DOU","EOU","FOU");
	var singleGame = new Array(
		"RWM","HRWM","RDC","RWE","RWB","ARG","BRG","CRG","DRG","ERG","FRG","GRG","HRG","IRG","JRG","RCS","RWN","RHG","RMG","RSB","RT3G","RT1G"
		,"WM","HWM","DC","BH","WE","WB","PG","CS","WN","F2G","F3G","HG","MG","SB","FG","T3G","T1G","TK","PA","RCD","ST","OS"
	);
	var doubleGame = new Array(
		"RTS","RTS2","TS","HTS","OG","OT","ROT","EOH","EOC","HEOH","HEOC"
	);
	var rouhc = new Array("ROUH","ROUC","HRUH","HRUC");
	var ouhc = new Array("OUH","OUC","HOUH","HOUC");
	var urlArray=new Array();

	urlArray['R']=new Array("../"+gtype+"_order/"+gtype+"_order_r.php");
	urlArray['HR']=new Array("../"+gtype+"_order/"+gtype+"_order_hr.php");
	urlArray['OU']=new Array("../"+gtype+"_order/"+gtype+"_order_ou.php");
	urlArray['HOU']=new Array("../"+gtype+"_order/"+gtype+"_order_hou.php");
	urlArray['M']=new Array("../"+gtype+"_order/"+gtype+"_order_m.php");
	urlArray['HM']=new Array("../"+gtype+"_order/"+gtype+"_order_hm.php");
	urlArray['EO']=new Array("../"+gtype+"_order/"+gtype+"_order_t.php");
	urlArray['REO']=new Array("../"+gtype+"_order/"+gtype+"_order_rt.php");
	urlArray['HEO']=new Array("../"+gtype+"_order/"+gtype+"_order_t.php");
	urlArray['HREO']=new Array("../"+gtype+"_order/"+gtype+"_order_rt.php");
	urlArray['PD']=new Array("../"+gtype+"_order/"+gtype+"_order_pd.php");
	urlArray['RPD']=new Array("../"+gtype+"_order/"+gtype+"_order_rpd.php");
	urlArray['HPD']=new Array("../"+gtype+"_order/"+gtype+"_order_hpd.php");
	urlArray['HRPD']=new Array("../"+gtype+"_order/"+gtype+"_order_hrpd.php");
	urlArray['F']=new Array("../"+gtype+"_order/"+gtype+"_order_f.php");
	urlArray['RF']=new Array("../"+gtype+"_order/"+gtype+"_order_rf.php");
	urlArray['T']=new Array("../"+gtype+"_order/"+gtype+"_order_t.php");
	urlArray['HT']=new Array("../"+gtype+"_order/"+gtype+"_order_t.php");
	urlArray['RT']=new Array("../"+gtype+"_order/"+gtype+"_order_rt.php");
	urlArray['HRT']=new Array("../"+gtype+"_order/"+gtype+"_order_rt.php");
	urlArray['SP']=new Array("../"+gtype+"_order/"+gtype+"_order_sp.php");
	urlArray['P']=new Array("../"+gtype+"_order/"+gtype+"_order_p.php");
	urlArray['P3']=new Array("../"+gtype+"_order/"+gtype+"_order_p3.php");
	urlArray['PR']=new Array("../"+gtype+"_order/"+gtype+"_order_pr.php");
	urlArray['RE']=new Array("../"+gtype+"_order/"+gtype+"_order_re.php");
	urlArray['HRE']=new Array("../"+gtype+"_order/"+gtype+"_order_hre.php");
	urlArray['ROU']=new Array("../"+gtype+"_order/"+gtype+"_order_rou.php");
	urlArray['HROU']=new Array("../"+gtype+"_order/"+gtype+"_order_hrou.php");
	urlArray['RM']=new Array("../"+gtype+"_order/"+gtype+"_order_rm.php");
	urlArray['HRM']=new Array("../"+gtype+"_order/"+gtype+"_order_hrm.php");
	urlArray['NFS']=new Array("../"+gtype+"_order/"+gtype+"_order_nfs.php");
	
	
	urlArray['RE15']=new Array("../"+gtype+"_order/"+gtype+"_order_re15.php");
	urlArray['ROU15']=new Array("../"+gtype+"_order/"+gtype+"_order_rou15.php");
	urlArray['RM15']=new Array("../"+gtype+"_order/"+gtype+"_order_rm15.php");
	
	urlArray['R15']=new Array("../"+gtype+"_order/"+gtype+"_order_r15.php");
	urlArray['OU15']=new Array("../"+gtype+"_order/"+gtype+"_order_ou15.php");
	urlArray['M15']=new Array("../"+gtype+"_order/"+gtype+"_order_m15.php");
	
	urlArray['SINGLE']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['DOUBLE']=new Array("../"+gtype+"_order/"+gtype+"_order_double.php");
	urlArray['ROUHC']=new Array("../"+gtype+"_order/"+gtype+"_order_rouhc.php");
	urlArray['OUHC']=new Array("../"+gtype+"_order/"+gtype+"_order_ouhc.php");
	urlArray['W3']=new Array("../"+gtype+"_order/"+gtype+"_order_w3.php");
	
	//網球新遊戲
	urlArray['PD3']=new Array("../"+gtype+"_order/"+gtype+"_order_pd3.php");
	urlArray['PD5']=new Array("../"+gtype+"_order/"+gtype+"_order_pd5.php");
	urlArray['RPD3']=new Array("../"+gtype+"_order/"+gtype+"_order_rpd3.php");
	urlArray['RPD5']=new Array("../"+gtype+"_order/"+gtype+"_order_rpd5.php");

	urlArray['PD7']=new Array("../"+gtype+"_order/"+gtype+"_order_pd7.php");
	urlArray['RPD7']=new Array("../"+gtype+"_order/"+gtype+"_order_rpd7.php");
	
	//足球新玩法
	//Next 只有下個角球有30個，其餘兩個只有15個(A~O)
	var wtypeAndOU = new Array("A","B","C","D");
	var wtypeNext = new Array("1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U");
	urlArray['MQ']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['MW']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");

	for(var i = 0;i < wtypeAndOU.length;i++){
		urlArray['MOU'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['DU'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['OUT'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['OUE'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['OUP'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['RMU'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['RDU'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['RUT'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['RUE'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
		urlArray['RUP'+wtypeAndOU[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	}

	urlArray['MPG']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['MTS']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['DG']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['DS']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['RMPG']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['RMTS']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['RDG']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");
	urlArray['RDS']=new Array("../"+gtype+"_order/"+gtype+"_order_single.php");

	for(var i = 0;i < wtypeNext.length;i++){
		urlArray['RSH'+wtypeNext[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_double.php");
		urlArray['RSC'+wtypeNext[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_double.php");
		urlArray['RNB'+wtypeNext[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_double.php");
		urlArray['RNC'+wtypeNext[i]]=new Array("../"+gtype+"_order/"+gtype+"_order_double.php");
	}
	
	if(!Array.indexOf){
		Array.prototype.indexOf = function(obj){
			for(var i=0; i<this.length; i++){
				if(this[i]==obj){
					return i;
				}
			}
			return -1;
		}
	}
	if(gtype=="BS"&& (wtype=="OT"||wtype=="ROT")){
		wtype = "SINGLE";
	}
	if(ouhc.indexOf(wtype) != -1){
		wtype = "OUHC";
	}
	if(rouhc.indexOf(wtype) != -1){
		wtype = "ROUHC";
	}
	if(singleGame.indexOf(wtype) != -1){
		wtype = "SINGLE";
	}
	if(doubleGame.indexOf(wtype) != -1){
		wtype = "DOUBLE";
	}
	if(re15.indexOf(wtype) != -1){
		wtype = "RE15";
	}
	if(rou15.indexOf(wtype) != -1){
		wtype = "ROU15";
	}	
	if(rm15.indexOf(wtype) != -1){
		wtype = "RM15";
	}	
	if(r15.indexOf(wtype) != -1){
		wtype = "R15";
	}
	if(ou15.indexOf(wtype) != -1){
		wtype = "OU15";
	}	
	if(m15.indexOf(wtype) != -1){
		wtype = "M15";
	}
	if( gtype == 'SK' ){
		urlArray['R']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['RE']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['M']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['RM']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['OU']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['ROU']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['EO']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['REO']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['P3']	=new Array("../"+gtype+"_order/"+gtype+"_order_p3.php");
		urlArray['F01']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		urlArray['F02']	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		//獨贏 讓局 各有六場賽事 （1-5） （6-8） （10-14） （15-17） （19-23） （24-26）
		var key_wtype = new Array("A","B","C","D","E","F");
		for( var i = 1;i<key_wtype.length;i++){
			urlArray[key_wtype[i]+'R'] 	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
			urlArray[key_wtype[i]+'RE'] =new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
			urlArray[key_wtype[i]+'M'] 	=new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
			urlArray[key_wtype[i]+'RM'] =new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		}
		//滾球 則有一共35場的獨贏單盤賽事
		for( var j =1;j<36;j++){
			if(j<10)
				urlArray['RF0'+j] =new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
			else
				urlArray['RF'+j] =new Array("../"+gtype+"_order/"+gtype+"_order_all.php");
		}
	}	      
	var url = '';
	url=urlArray[wtype]+"?"+param;
	return url;
}
function close_bet(){
	//top.more_bgYalloW ="";
	try{
		//parent.body.body_browse.showdata.reloadGameData();
		parent.body.body_browse.showdata.canclebet();
	}catch(e){}
	document.getElementById('pls_bet').style.display="none";
	//document.getElementById('bet_div').style.display="";
	document.getElementById('bet_order_frame').height =0;
	//alert("close bet 1");
	bet_order_frame.document.close();
	//alert("close bet 2");
//	bet_order_frame.document.body.className="ord_main";
//	bet_order_frame.document.body.bgColor="red";
	//bet_order_frame.document.body.style.background-color="red";
	//document.getElementById('pls_bet').style.backgroundColor="#007000";
	//alert(document.getElementById('pls_bet').style.backgroundColor);
	
	bet_order_frame.document.writeln("<html><link href=\""+imgurl+"/style/member/mem_order_sel.css\" rel=\"stylesheet\" type=\"text/css\">");
	bet_order_frame.document.writeln("<body class=\"bet_info\" style='margin:0;'>");
	
	bet_order_frame.document.writeln(document.getElementById('pls_bet').innerHTML);
	bet_order_frame.document.writeln("</body></html>");
	//alert("write order frame");
//	bet_order_frame.location.replace("");
	document.getElementById('bet_order_frame').height = bet_order_frame.document.body.scrollHeight;
	//document.getElementById('bet_order_frame').height = 20;
	document.getElementById('info_div').style.display='';
	if (checkRoute != "Y"&&!isIPad()){
		document.getElementById('chg_site').style.display="";
	}
	top.scripts=new Array();
	top.keepGold="";
	top.keepGold_PR="";
	try{
		parent.body.orderRemoveALL();
	}catch (E) {}
		
	top.open_bet="";			
	try{
		//var gamecountHot=parent.body.getCountHOT();
		getCountHOT(countHOT);
	}catch(e){
		document.getElementById('euro_open').style.display='none';
	}		
		
}
function Show10List(){
	var objs=document.getElementById('reloadPHP');
    if (parent.refresh_var=='Y'||(""+parent.refresh_var=="undefined")){
    	objs.src = "./today/show10rec.php?uid="+top.uid;
    }else{
    	objs.src="../../../tpl/member/"+top.langx+"/show10rec_norefresh.html?uid="+top.uid;
    }
}

function show_record(){
	if (parent.show=='N'||(""+parent.show=="undefined")){
		parent.show='';
	}else{
		parent.show='N';
	}
	self.location = "./select.php?uid="+top.uid+"&langx="+top.langx+"&show="+parent.show;
}
function reload_var(){
	parent.refresh_var='Y';
	self.location.reload();
}
function Hot_click(a,b,c){
    parent.location=a+"&league_id=3";
}
function OpenLive(){
	if (top.liveid == undefined) {
		parent.self.location = "";
		return;
	}
	var getLiveObj = window.open("./live/live.php?langx="+top.langx+"&uid="+top.uid+"&liveid="+top.liveid+"&autoOddCheck="+top.autoOddCheck,"Live","width=780,height=580,top=0,left=0,status=no,toolbar=no,scrollbars=yes,resizable=no,personalbar=no");
	getLiveObj.focus();
}

//2015-07-21 Peter 更正select取個人訊息筆數的error
var getMessageCount="";
function reload_messageCount(){
	clearTimeout(getMessageCount);
	var url = "getNewMessage.php";
	var params = "uid="+top.uid;
	
	loadHref(url+"?"+params);
	getMessageCount = setTimeout("reload_messageCount()",300000);
	//loadHref(url+"?"+params);
}

function loadHref(str){
	loadPHP.location.href=str;
}

function set_messageCount(countMessage){
	var mdata;
	var mtable = document.getElementById('messages');
	if(document.all){
		mdata = document.getElementById("messages").innerText;
	}else{
		mdata = document.getElementById("messages").textContent;
	}
	if(countMessage != 0){
		mtable.style.display="";
		mdata = countMessage;
	}
	else{
		mtable.style.display="none";
	}
	mtable.innerText = mdata;
}

function overInfo(){
	document.getElementById("personal_Info").style.display = "";
}
function outInf(){
	document.getElementById("personal_Info").style.display = "none";
}

var ObjDataLive=new Array();
function reload_live_game(Game_Head,gamedata){
	for (var j=0;j < gamedata.length;j++){
		if (gamedata[j]!=null){
			ObjDataLive[j]=parseArray(Game_Head,gamedata[j]);
		}	
	}
	var showtableData;
	var trdata;
	if(document.all){
		showtableData=document.getElementById('livetableData').innerText;
	 	trdata=document.getElementById('DataTR').innerText;
	} else{
		showtableData=document.getElementById('livetableData').textContent;
	 	trdata=document.getElementById('DataTR').textContent;
	}
	var showlayers="";
	if(ObjDataLive.length > 0){
		for ( i=0 ;i < ObjDataLive.length;i++){
			showlayers+=getLayer(trdata,i);
		}
	}else{
		var tmp_layer=trdata;
		tmp_layer=tmp_layer.replace("*TIME*","");
		tmp_layer=tmp_layer.replace("*TEAMS*","無直播資料");
		showlayers = tmp_layer;
	}
	var showtable=document.getElementById('showLive_table');
	showtableData=showtableData.replace("*showDataTR*",showlayers);
	showtable.innerHTML=showtableData;
}
//表格內容
function getLayer(onelayer,gamerec){
	onelayer=onelayer.replace("*TIME*",ObjDataLive[gamerec].time+":");
	onelayer=onelayer.replace("*TEAMS*",ObjDataLive[gamerec].teamH+" VS "+ObjDataLive[gamerec].teamC);
	return onelayer; 
	
}


//window.onscroll = scroll;

function scroll(){
	//return; 
	var refresh_right = document.getElementById('info_div');
	
	var msg_height=(refresh_right.style.height.replace("px","")*1);
	var recframe=document.getElementById('rec_frame');
	//alert(recframe.height+"---"+document.body.scrollHeight+"---"+msg_height);
	//if(recframe.height+msg_height < document.body.scrollHeight){
		//alert("1");
		refresh_right.style.top=document.body.scrollHeight - msg_height-15;
	//}else{
		//alert("2");
		//refresh_right.style.top=recframe.height*1+msg_height+250;
		//refresh_right.style.left=0;
	//}
	
}
function showMoreMsg(kind){
	//parent.body.location='./scroll_history.php?uid='+top.uid+'&langx='+top.langx;
	//var MoreMsgObj = window.open('./scroll_history.php?uid='+top.uid+'&langx='+top.langx+"&t_important="+kind,"History","width=617,height=500,top=0,left=0,status=no,toolbar=no,scrollbars=yes,resizable=no,personalbar=no");
	var MoreMsgObj = window.open('<?php echo U('Old/scroll_history');?>');
	MoreMsgObj.focus();
	chgCountMessage(kind);
}
function chgCountMessage(kind,counts){
	countMessage = counts;
	if(kind == 2 && (counts == 0 || counts == "")){
		document.getElementById("messages").style.display="none";
		/*countMessage = 0;
		if(countMessage != 0)
			mdata = countMessage;
		else
			mdata = " ";
		mtable.innerHTML = mdata;*/
		
	}
}
/*
function chg_URL(){
	if(!confirm("請問是否切換至舊網址"){
		return false;
	}
	chgURL.location.href='retimeset.php?gid='+gamegid+"&gtype="+gamegtype+"&se="+gamese+"&retime="+gameretime+"&"+get_pageparam();
}
*/
var xmlHttp;
function createXHR(){
 if (window.XMLHttpRequest) {
  xmlHttp = new XMLHttpRequest();
 }else if (window.ActiveXObject) {
  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }

 if (!xmlHttp) {
  //alert('您使用的瀏覽器不支援 XMLHTTP 物件');
  return false;
 }
}
function sendRequest(url){
//alert(url);
 
 
 if(chg_site()){
	createXHR();
	xmlHttp.open('GET',url,true);
	xmlHttp.onreadystatechange=catchResult;
	xmlHttp.send(null);
 }else{
	parent.show_chg_div(true);
 }
}

function chg_site(){
	
		var ret = true;
		var agent = navigator.userAgent;
		var ie = "MSIE";
		var pos = agent.indexOf(ie);
		//Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C)
		
		//Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
		//Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/601.3.9 (KHTML, like Gecko) Version/9.0.2 Safari/601.3.9
		var brows = new Array("Chrome","Safari","Firefox","rv:11");
		if(pos!=-1){				
				var tmp_agent = agent.substring(pos+ie.length,agent.length);
				var str = tmp_agent.indexOf(".");
				var version = tmp_agent.substring(0, str);
				if(version*1>=11) ret = true;
				if(version*1<=10) ret = false;
		}

		/*for(var i=0;i<brows.length;i++){
			if(agent.indexOf(brows[i]) != -1){
				ret = true;
				break;
			}
		}*/


		return ret;
}

function catchResult(){
 if (xmlHttp.readyState==4){
  s=xmlHttp.responseText;
  if (xmlHttp.status == 200) {
  //alert("已成功加入~~"+s+":");
  // location.reload();  
  document.getElementById('showURL').innerHTML=s;
  
  var obj = document.getElementById('newdomain');
  obj.submit();
      // document.getElementById(s).innerHTML='<img src="058/btn_cart.gif" width="129" height="32" align="absmiddle" />';
  }else{
       //alert('執行錯誤,代碼:'+xmlHttp.status+'\('+xmlHttp.statusText+'\)');
      }
 }
}
function showHOT(){
	var countgtype =new Array("FT","BK","TN","VB","BM","TT","BS","SK","OP");
	//alert(top.open_bet+"---"+mem_enable)
	//alert("top.open_bet:"+top.open_bet+",mem_enable="+mem_enable+",top.open_Rec="+top.open_Rec);
	if(top.open_bet =="Y" || mem_enable=="S" || top.open_Rec=="Y"){
		document.getElementById('euro_open').style.display="none";	
	}else{
	  var today_RB=0;
	  for( var i=0;i<countgtype.length;i++){
			today_RB +=recordHash[countgtype[i]+"_RB"];
			//塞場次進去div
			var tmp_obj_RB=document.getElementById(countgtype[i]+"_RB");
					tmp_obj_RB.innerHTML=eval("top.str_order_"+countgtype[i]) + "("+recordHash[countgtype[i]+"_RB"]+")";	
					//該球類沒有滾球隱藏
					if(recordHash[countgtype[i]+"_RB"]*1==0){
						tmp_obj_RB.style.display="none";
					}else{
						tmp_obj_RB.style.display="";
					}
			
		}
		//alert("today_RB=="+today_RB);	
		//今日沒有滾球賽程,整個MENU隱藏     			
		if (today_RB > 0) {
			document.getElementById('euro_open').style.display="";
		}else{
			
			document.getElementById('euro_open').style.display="none";
		}	
			
 	}
 	
}

function showRB(gtypeFT){
	var protocol = document.location.protocol;
	if(recordHash[gtypeFT+"_RB"]*1==0){
		//alert(top.no_oly);
		return;
	}
	top.hot_game="";
	top.head_FU="FT";
	parent.header.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_header.php?uid="+top.uid+"&showtype=&langx="+top.langx+"&mtype="+top.mtype;
	parent.body.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_browse/index.php?rtype=re&uid="+top.uid+"&langx="+top.langx+"&mtype="+top.mtype+"&showtype="+top.showtype+"&hot_game="+top.hot_game;
	parent.header.chg_button_bg(gtypeFT,"rb");
}

function showHotRB(gtypeFT){
	var protocol = document.location.protocol;
	if(recordHash[gtypeFT+"_"+top.hot_type+"_RB"]*1==0){
		//alert(top.no_oly);
		return;
	}
	top.hot_game=top.hot_type+"_";
	//top.head_FU="FT";
	parent.header.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_header.php?uid="+top.uid+"&showtype=&langx="+top.langx+"&mtype="+top.mtype;
	parent.body.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_browse/index.php?rtype=re&uid="+top.uid+"&langx="+top.langx+"&mtype="+top.mtype+"&showtype="+top.showtype+"&hot_game="+top.hot_game;
	parent.header.chg_button_bg(gtypeFT,"rb");
}

function showHotFT(gtypeFT){
	var protocol = document.location.protocol;
	if(recordHash[gtypeFT+"_"+top.hot_type+"_FT"]*1==0){
		//alert(top.no_oly);
		return;
	}
	top.hot_game=top.hot_type+"_";
	parent.header.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_header.php?uid="+top.uid+"&showtype=&langx="+top.langx+"&mtype="+top.mtype;
	parent.body.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFT+"_browse/index.php?rtype=r&uid="+top.uid+"&langx="+top.langx+"&mtype="+top.mtype+"&showtype="+top.showtype+"&hot_game="+top.hot_game;
	parent.header.chg_button_bg(gtypeFT,"today");
}

function showHotFU(gtypeFU){
	var protocol = document.location.protocol;
	if(recordHash[gtypeFU+"_"+top.hot_type+"_FU"]*1==0){
		//alert(top.no_oly);
		return;
	}
	top.hot_game=top.hot_type+"_";
	parent.header.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFU+"_header.php?uid="+top.uid+"&showtype=future&langx="+top.langx+"&mtype="+top.mtype;
	parent.body.location.href=protocol+"//"+document.domain+"/app/member/"+gtypeFU+"_future/index.php?rtype=r&uid="+top.uid+"&langx="+top.langx+"&mtype="+top.mtype+"&showtype=future&hot_game="+top.hot_game+"&g_date=ALL";
	parent.header.chg_button_bg(gtypeFU,"early");
}

function Eurover(act){
	if(act.className=="hot_btn"){
		act.className='hot_up';
	}else if(act.className=="early_btn"){
		act.className='early_up';
	}else if(act.className=="rb_btn"){
		act.className='rb_up';
	}
}
 
function Eurout(act){
	if(act.className=="hot_up"){
		act.className='hot_btn';
	}else if(act.className=="early_up"){
		act.className='early_btn';
	}else if(act.className=="rb_up"){
		act.className='rb_btn';
	}
}

var recordHash=new Array();
function getCountHOT(countHOT){

	this.countHOT = countHOT;
	//alert("getCountHOT==>"+countHOT);
	var countgtype =new Array("FT","BK","TN","VB","BM","TT","BS","OP");
	var countgames=countHOT.split(",");
		for( var i=0;i<countgames.length;i++){
			var detailgame=countgames[i].split("|");
			recordHash[detailgame[0]+"_"+detailgame[1]]=detailgame[2]*1;
		}
		
		if(isHot_game){
				for(var j=0; j<countgtype.length; j++){
						var _gtype = countgtype[j];						
						if((recordHash[_gtype+"_"+top.hot_type+"_RB"]*1 + recordHash[_gtype+"_"+top.hot_type+"_FT"]*1 + recordHash[_gtype+"_"+top.hot_type+"_FU"]*1) >= 1){
								hotgame_gtype = _gtype;
								document.getElementById("euro_menu_all").style.display = "";
								document.getElementById("HOT_rb").innerHTML = "("+recordHash[_gtype+"_"+top.hot_type+"_RB"]+")";
								document.getElementById("HOT_today").innerHTML = "("+recordHash[_gtype+"_"+top.hot_type+"_FT"]+")";
								document.getElementById("HOT_early").innerHTML = "("+recordHash[_gtype+"_"+top.hot_type+"_FU"]+")";
								break;
						}else{
								document.getElementById("euro_menu_all").style.display = "none";
								document.getElementById("HOT_rb").innerHTML = "0";
								document.getElementById("HOT_today").innerHTML = "0";
								document.getElementById("HOT_early").innerHTML = "0";
						}
				}
			}else{
				document.getElementById("euro_menu_all").style.display = "none";
			}
		
	return showHOT();	
}

function goRB(){
	document.getElementById('RB_btn').className="rb_over";
	//document.getElementById('today_btn').className="hot_btn";
	//document.getElementById('early_btn').className="early_btn";						
	document.getElementById('RB_oly').style.display="";
	//document.getElementById('today_oly').style.display="none";
	//document.getElementById('early_oly').style.display="none";
}

function goHOT_FT(){
	document.getElementById('RB_btn').className="rb_btn";
	document.getElementById('today_btn').className="hot_over";
	document.getElementById('early_btn').className="early_btn";					
	document.getElementById('RB_oly').style.display="block";
	document.getElementById('today_oly').style.display="";
	document.getElementById('early_oly').style.display="none";
}

function goHOT_FU(){
	document.getElementById('RB_btn').className="rb_btn";
	document.getElementById('today_btn').className="hot_btn";
	document.getElementById('early_btn').className="early_over";						
	document.getElementById('RB_oly').style.display="none";
	document.getElementById('today_oly').style.display="none";
	document.getElementById('early_oly').style.display="";
}
//FT_today,FT_rb,FT_early
function goEuro_HOT(types){

	//var ary = types.split("_");
	//var tmpGtype = ary[0];
	//var tmpTypes = ary[1];
	var tmpGtype = hotgame_gtype;
	var tmpTypes = types;
	var langx = "";
	
	top.hot_game = top.hot_type+"_";
	
	goEuro_HOT_btn(hotgame_gtype+"_"+types);
	
	switch(tmpTypes){
		case "rb":
			if(recordHash[tmpGtype+"_"+top.hot_type+"_RB"]*1==0){
				//alert(top.no_oly);
				return;
			}
			showHotRB(tmpGtype);
			break;
		case "today":
			if(recordHash[tmpGtype+"_"+top.hot_type+"_FT"]*1==0){
				//alert(top.no_oly);
				return;
			}
			showHotFT(tmpGtype);
			break;
		case "early":
			if(recordHash[tmpGtype+"_"+top.hot_type+"_FU"]*1==0){
				//alert(top.no_oly);
				return;
			}
			showHotFU(tmpGtype);
			break;
		default:
			break;
	}
	
}


function goEuro_HOT_btn(types){
	
	
	var langx = "";
	
	switch(top.langx){
		case "zh-tw":
			langx = "tw";
			break;
		case "zh-cn":
			langx = "cn";
			break;
		case "en-us":
			langx = "en";
			break;
		default:
			langx = "en";
			break;
	}
	
	document.getElementById('HOT_rb_btn').className = "rb_left_"+langx+"_out";
	document.getElementById('HOT_today_btn').className = "hot_left_"+langx+"_out";
	document.getElementById('HOT_early_btn').className = "early_left_"+langx+"_out";
	///alert(top.hot_game);
	if(top.hot_game==""||types=="") return;		

	var ary = types.split("_");
	var tmpGtype = ary[0];
	var tmpTypes = ary[1];
	
	switch(tmpTypes){
		case "rb":
			document.getElementById('HOT_rb_btn').className = "rb_left_"+langx+"_on";
			break;
		case "today":
			document.getElementById('HOT_today_btn').className = "hot_left_"+langx+"_on";
			break;
		case "early":
			document.getElementById('HOT_early_btn').className = "early_left_"+langx+"_on";
			break;
		default:
			break;
	}
}
</script><meta http-equiv="Content-Type" content="text/html; charset=utf-8 "><script>
/* Obj.e520 | Copyright 2014 ,Cvssp Inc. from this DBA Depts. | Gather you rosebuds while you may. | string
  bill TW_time:2014-11-11 17:06:39 file(112-300,301,302,303,304,224,212,321)
 */  

/* conf_lvar_00 (160) */
top["str_Quit_MailSet"]="取消注册？";
top["str_Quit_getPass"]="取消密码恢复？";
top["str_RM_getPass"]="删除密码恢复功能？";
top["str_input_pwd"]="请输入密码。";
top["str_input_repwd"]="请输入确认密码。";
top["str_err_pwd"]="密码确认错误, 请重新输入。";
top["str_pwd_limit"]="您输入的密码不符合要求：<br>1. 您的新密码必须由 6-12个字母和数字 (A-Z 或 0-9)组成. <br>2. 您的新密码不能和现用密码相同。";
top["str_pwd_limit2"]="您输入的密码不符合要求：<br>1. 您的新密码必须由 6-12个字母和数字 (A-Z 或 0-9)组成. <br>2. 您的新密码不能和现用密码相同。";
top["str_pwd_limit3"]="您的新密码必须由 6-12个字母和数字 (A-Z 或 0-9)组成.";
top["str_err_mail"]="请输入有效的电子邮件。";
top["str_pwd_NoChg"]="您的新密码必须和现用密码不一样。";
top["str_pwd_NowErr"]="您输入的密码不正确，请重试。";
top["str_pwd_OldErr"]="请输入现用密码。";
top["str_input_longin_id"]="请输入登录帐号。";
top["str_input_longin_id2"]="请输入 帐号 或 登录帐号。";
top["str_longin_limit1"]="您输入的登录帐号不符合要求：<br>1. 您的登入帐号必须由2个英文大小写字母(A-Z或a-z)和数字(0-9)组合, 输入限制6-12字元.<br>2. 您的登入帐号不准许有空格.";
top["str_longin_limit2"]="您的登录帐号需使用字母加上数字!!";
top["str_o"]="单";
top["str_e"]="双";
top["str_checknum"]="验证码错误,请重新输入";
top["str_irish_kiss"]="和";
top["dPrivate"]="私域";
top["dPublic"]="公有";
top["grep"]="群组";
top["grepIP"]="群组IP";
top["IP_list"]="IP列表";
top["Group"]="组别";
top["choice"]="请选择";
top["account"]="请输入登录帐号。";
top["password"]="请输入密码。";
top["S_EM"]="特早";
top["alldata"]="全部";
top["date"]="所有日期";
top["webset"]="资讯网";
top["str_renew"]="更新";
top["outright"]="冠军";
top["financial"]="金融";
top["str_FT"]="足球";
top["str_BK"]="篮球";
top["str_TN"]="网球";
top["str_VB"]="排球";
top["str_BM"]="羽毛球";
top["str_TT"]="兵乓球";
top["str_BS"]="棒球";
top["str_SK"]="斯诺克/台球";
top["str_OP"]="其他";
top["str_score"]="比分";
top["str_order_FT"]="足球";
top["str_order_BK"]="篮球 / 美式足球";
top["str_order_TN"]="网球";
top["str_order_VB"]="排球";
top["str_order_BM"]="羽毛球";
top["str_order_TT"]="兵乓球";
top["str_order_BS"]="棒球";
top["str_order_SK"]="斯诺克/台球";
top["str_order_OP"]="其他";
top["str_fs_FT"]="足球 : ";
top["str_fs_BK"]="篮球 / 美式足球 : ";
top["str_fs_TN"]="网球 : ";
top["str_fs_VB"]="排球 : ";/* No.50 */
top["str_fs_BM"]="羽毛球 : ";
top["str_fs_TT"]="兵乓球 : ";
top["str_fs_BS"]="棒球 : ";
top["str_fs_SK"]="斯诺克/台球 : ";
top["str_fs_OP"]="其他体育 : ";
top["str_game_list"]="所有球类";
top["str_date_list"]="所有日期";
top["str_second"]="秒";
top["str_demo"]="样本播放";
top["str_alone"]="独立";
top["str_back"]="返回";
top["str_RB"]="滚球";
top["str_msAll"]="(全场)";
top["str_ShowMyFavorite"]="我的最爱";
top["str_ShowAllGame"]="全部赛事";
top["str_delShowLoveI"]="移出";
top["str_SortType"]="按时间排序";
top["str_SortTypeC"]="按联盟排序";
top["str_SortTypeT"]="按时间排序";
top["strOver"]="大";
top["strUnder"]="小";
top["strOdd"]="单";
top["strEven"]="双";
top["message001"]="请输入下注金额。";
top["message002"]="只能输入数字!!";
top["message003"]="最低投注额是 ";
top["message004"]="本场有下注金額最高是 ";
top["message005"]=" 元限制!!";
top["message006"]="最高投注额设在";
top["message007"]="总下注金额已超过单场限额。";
top["message008"]="本场累积下注共: ";
top["message009"]="。\n\n总下注金额已超过单场限额。";
top["message010"]="下注金额不可大于信用额度。";
top["message011"]="可赢金额：";
top["message012"]="<br>确定进行下注吗?";
top["message013"]="确定进行下注吗?<br>";
top["message014"]="未输入下注金额!!!";
top["message015"]="下注金额只能输入数字。";
top["message016"]="\n\n确定进行下注吗?";
top["message017"]="串1";
top["message018"]="队联碰";
top["message019"]="您必须选择至少";
top["message020"]="个队伍,否则不能下注!!";
top["message021"]="不接受";
top["message022"]="串过关投注。";
top["message023"]="请输入欲下注金额!!";
top["message024"]="已超过某场次之过关注单限额!!";
top["message025"]="下注金额不可大于信用额度。";
top["message026"]="请选择下注队伍!!";
top["message027"]="单式投注请至单式下注页面下注!!";
top["message028"]="仅接受";/* No.100 */
top["message029"]="串投注!!";
top["message030"]="确定要进行交易吗？";
top["message031"]="请输入要搜寻的文字";
top["message032"]="找不到相符项目";
top["message033"]="你的浏览器不支援";
top["page"]="页";
top["refreshTime"]="刷新";
top["showmonth"]="月";
top["showday"]="日";
top["showtoday"]="今日";
top["showfuture"]="未来";
top["Half1st"]="上半滚球";
top["Half2nd"]="下半滚球";
top["mem_logut"]="您的帐号已登出";
top["retime1H"]="上半场";
top["retime2H"]="下半场";
top["str_otb_close"]="赛事已关闭。";
top["no_oly"]="您选择的项目暂时没有赛事。请查看冠军玩法。";
top["conf_R"]="让球,大小,单双";
top["conf_RE"]="滚球让球,滚球大小,滚球单双";
top["conf_RE_BK"]="滚球让球,滚球大小,滚球单双";
top["conf_M"]="独赢,滚球独赢";
top["conf_M_BK"]="独赢,滚球独赢";
top["conf_DT"]="其他";
top["conf_RDT"]="滚球其他";
top["conf_FS"]="冠军";
top["str_more"]="更多玩法";
top["str_all_bets"]="所有玩法";
top["str_TV_RB"]="视频转播可使用";
top["str_TV_FT"]="视频转播将在滚球时提供";
top["addtoMyMarket"]="加到\"我的盘口\"";
top["str_BK_OT"]="加时";
top["str_midfield"]="中";
top["str_BK_Market_Main"]="览看主要盘口";
top["str_BK_Market_All"]="览看所有盘口 ";
top["str_BK_Period_View"]="览看赛节投注";
top["str_BK_Period_Hide"]="隐藏赛节投注 ";
top["str_TN_Market_Main"]="览看主要盘口";
top["str_TN_Market_All"]="览看所有盘口";
top["str_TN_Period_View"]="览看赛盘投注";
top["str_TN_Period_Hide"]="隐藏赛盘投注";
top["str_BM_Market_Main"]="览看主要盘口";
top["str_BM_Market_All"]="览看所有盘口";
top["str_BM_Period_View"]="览看赛局投注";
top["str_BM_Period_Hide"]="隐藏赛局投注";
top["str_TT_Market_Main"]="览看主要盘口";
top["str_TT_Market_All"]="览看所有盘口";
top["str_TT_Period_View"]="览看赛局投注";
top["str_TT_Period_Hide"]="隐藏赛局投注";
top["str_VB_Market_Main"]="览看主要盘口";
top["str_VB_Market_All"]="览看所有盘口";
top["str_VB_Period_View"]="览看赛局投注";
top["str_VB_Period_Hide"]="隐藏赛局投注";
top["TN_set_1"]="第一盘";
top["TN_set_2"]="第二盘";
top["TN_set_3"]="第三盘";
top["TN_set_4"]="第四盘";
top["TN_set_5"]="第五盘";
top["BM_set_1"]="第一局";
top["BM_set_2"]="第二局";/* No.150 */
top["BM_set_3"]="第三局";
top["BM_set_4"]="第四局";
top["BM_set_5"]="第五局";
top["VB_set_1"]="第一局";
top["VB_set_2"]="第二局";/* No.150 */
top["VB_set_3"]="第三局";
top["VB_set_4"]="第四局";
top["VB_set_5"]="第五局";
top["VB_set_6"]="第六局";
top["VB_set_7"]="第七局";
top["TT_set_1"]="第一局";
top["TT_set_2"]="第二局";/* No.150 */
top["TT_set_3"]="第三局";
top["TT_set_4"]="第四局";
top["TT_set_5"]="第五局";
top["TT_set_6"]="第六局";
top["TT_set_7"]="第七局";
top["SK_set_01"]="第1局";
top["SK_set_02"]="第2局";/* No.150 */
top["SK_set_03"]="第3局";
top["SK_set_04"]="第4局";
top["SK_set_05"]="第5局";
top["SK_set_06"]="第6局";
top["SK_set_07"]="第7局";
top["SK_set_08"]="第8局";
top["SK_set_09"]="第9局";
top["SK_set_10"]="第10局";
top["SK_set_11"]="第11局";
top["SK_set_12"]="第12局";
top["SK_set_13"]="第13局";
top["SK_set_14"]="第14局";
top["SK_set_15"]="第15局";
top["SK_set_16"]="第16局";
top["SK_set_17"]="第17局";
top["SK_set_18"]="第18局";
top["SK_set_19"]="第19局";
top["SK_set_20"]="第20局";
top["SK_set_21"]="第21局";
top["SK_set_22"]="第22局";
top["SK_set_23"]="第23局";
top["SK_set_24"]="第24局";
top["SK_set_25"]="第25局";
top["SK_set_26"]="第26局";
top["SK_set_27"]="第27局";
top["SK_set_28"]="第28局";
top["SK_set_29"]="第29局";
top["SK_set_30"]="第30局";
top["SK_set_31"]="第31局";
top["SK_set_32"]="第32局";
top["SK_set_33"]="第33局";
top["SK_set_34"]="第34局";
top["SK_set_35"]="第35局";
top["SK_bestof_1"]="一盘制";
top["SK_bestof_2"]="兩盘制";
top["SK_bestof_3"]="三盘两胜";
top["SK_bestof_4"]="四盘制";
top["SK_bestof_5"]="五盘三胜";
top["SK_bestof_6"]="六盘制";
top["SK_bestof_7"]="七盘四胜";
top["SK_bestof_8"]="八盘制";
top["SK_bestof_9"]="九盘五胜";
top["SK_bestof_10"]="十盘制";
top["SK_bestof_11"]="十一盘六胜";
top["SK_bestof_12"]="十二盘制";
top["SK_bestof_13"]="十三盘制";
top["SK_bestof_14"]="十四盘制";
top["SK_bestof_15"]="十五盘制";
top["SK_bestof_16"]="十六盘制";
top["SK_bestof_17"]="十七盘九胜";
top["SK_bestof_18"]="十八盘制";
top["SK_bestof_19"]="十九盘十胜";
top["SK_bestof_20"]="二十盘制";
top["SK_bestof_21"]="二十一盘制";
top["SK_bestof_22"]="二十二盘制";
top["SK_bestof_23"]="二十三盘制";
top["SK_bestof_24"]="二十四盘制";
top["SK_bestof_25"]="二十五盘十三胜";
top["SK_bestof_26"]="二十六盘制";
top["SK_bestof_27"]="二十七盘制";
top["SK_bestof_28"]="二十八盘制";
top["SK_bestof_29"]="二十九盘制";
top["SK_bestof_30"]="三十盘制";
top["SK_bestof_31"]="三十一盘制";
top["SK_bestof_32"]="三十二盘制";
top["SK_bestof_33"]="三十三盘十七胜";
top["SK_bestof_34"]="三十四盘制";
top["SK_bestof_35"]="三十五盘十八胜";

top["SK_title_GM"]="全场";
top["SK_title_GM1"]="第 1 - 5 局";
top["SK_title_GM2"]="第 6 - 8 局";
top["SK_title_GM3"]="第 10 - 14 局";
top["SK_title_GM4"]="第 15 - 17 局";
top["SK_title_GM5"]="第 19 - 23 局";
top["SK_title_GM6"]="第 24 - 26 局";

top["SK_title_F01"]="第1局";
top["SK_title_F02"]="第2局";
top["SK_title_F03"]="第3局";
top["SK_title_F04"]="第4局";
top["SK_title_F05"]="第5局";
top["SK_title_F06"]="第6局";
top["SK_title_F07"]="第7局";
top["SK_title_F08"]="第8局";
top["SK_title_F09"]="第9局";
top["SK_title_F10"]="第10局";
top["SK_title_F11"]="第11局";
top["SK_title_F12"]="第12局";
top["SK_title_F13"]="第13局";
top["SK_title_F14"]="第14局";
top["SK_title_F15"]="第15局";
top["SK_title_F16"]="第16局";
top["SK_title_F17"]="第17局";
top["SK_title_F18"]="第18局";
top["SK_title_F19"]="第19局";
top["SK_title_F20"]="第20局";
top["SK_title_F21"]="第21局";
top["SK_title_F22"]="第22局";
top["SK_title_F23"]="第23局";
top["SK_title_F24"]="第24局";
top["SK_title_F25"]="第25局";
top["SK_title_F26"]="第26局";
top["SK_title_F27"]="第27局";
top["SK_title_F28"]="第28局";
top["SK_title_F29"]="第29局";
top["SK_title_F30"]="第30局";
top["SK_title_F31"]="第31局";
top["SK_title_F32"]="第32局";
top["SK_title_F33"]="第33局";
top["SK_title_F34"]="第34局";
top["SK_title_F35"]="第35局";

top["SK_current_score"]="当前总数 : ";
top["str_VB_Game"]="总局数 : ";
top["str_VB_allPoint"]="球员总分 : ";
top["str_VB_point"]="分数 : ";
top["str_VB_more_r0"]="让局";
top["str_VB_more_r"]="让分";
top["str_VB_more_re0"]="让局";
top["str_VB_more_re"]="让分";/* No.160 */
top["point"]=".";//點
top["str_AO"] = "大 1.5";
top["str_BO"] = "大 2.5";
top["str_CO"] = "大 3.5";
top["str_DO"] = "大 4.5";
top["str_AU"] = "小 1.5";
top["str_BU"] = "小 2.5";
top["str_CU"] = "小 3.5";
top["str_DU"] = "小 4.5";

// 2017-05-05 PMO-51 危險球狀態字樣改變+十秒自動更新注單狀況
top["str_bet_sucess"] = "成功提交注单!";
top["str_bet_reject"] = "提交注单已失败!";
top["str_bet_pending"] = "提交注单待确认!";

/* conf_lvar_01  (3) */
top.str_HCN=["主","客","无"];

/* conf_lvar_02  (24) */
top.strRtypeSP={"PGF":"最先进球","OSF":"最先越位","STF":"最先替补","CNF":"最先角球","CDF":"第一张罚牌","RCF":"最先任意球","YCF":"最先界外球","GAF":"最先球门球","PGL":"最后进球","OSL":"最后越位","STL":"最后替补","CNL":"最后角球","CDL":"最后一张罚牌","RCL":"最后任意球","YCL":"最后界外球","GAL":"最后球门球","PG":"最先/最后进球球队","OS":"最先/最后越位球队","ST":"最先/最后替补球员球队","CN":"最先/最后角球","CD":"第一张/最后一张罚牌","RC":"最先/最后任意球","YC":"最先界外球/最后界外球","GA":"最先/最后球门球"};

/* conf_lvar_03  (3) */
top.statu={"HT":"半场","1H":"上半场","2H":"下半场"};

/* conf_lvar_04  (7) */
top.str_BK_MS=["","上半场","下半场","第一节","第二节","第三节","第四节"];

/* conf_session  (41) */
top._session={"FTi0":"全场","FTi1":"上半","BKi0":"全场","BKi1":"上半","BKi2":"下半","BKi3":"第1节","BKi4":"第2节","BKi5":"第3节","BKi6":"第4节","BSi0":"全场","FSi0":"全场","OPi0":"全场","TNi0":"全场","TNi1":"第一盘","TNi2":"第二盘","TNi3":"第三盘","TNi4":"第四盘","TNi5":"第五盘","TNi6":"让局","TNi7":"主队局数","TNi8":"客队局数","VBi0":"全场","VBi1":"局数","VBi2":"分数","VBi3":"第一局","VBi4":"第二局","VBi5":"第三局","VBi6":"第四局","VBi7":"第五局","VBi8":"第六局","VBi9":"第七局","BMi0":"全场","BMi1":"分数","BMi2":"第一局","BMi3":"第二局","BMi4":"第三局","BMi5":"第四局","BMi6":"第五局","BMi7":"第六局","BMi8":"第七局","TTi0":"全场"};

/* conf_gtype  (9) */
top._gtype={"FT":"足球","BK":"篮球","BS":"棒球","FS":"冠军","OP":"其他","TN":"网球","VB":"排球","BM":"羽毛球","TT":"乒乓球"};

/* conf_lvar_21  (19) */
top.str_result={"No":"无","Y":"是","NA":"否","N":"否","FG_S":"射门","FG_H":"头球","FG_N":"无进球","FG_P":"点球","FG_F":"任意球","FG_O":"乌龙球","T3G_1":"26分钟以下","T3G_2":"27分钟+","T3G_N":"无进球","T1G_N":"无进球","T1G_1":"0 - 14:59","T1G_2":"15 - 29:59","T1G_3":"30 – 半场","T1G_4":"45 – 59:59","T1G_5":"60 – 74:59","T1G_6":"75 – 全场","MQ_H":" - 90分钟","MQ_C":" - 90分钟","MQ_HOT":" - 加时赛","MQ_COT":" - 加时赛","MQ_HPK":" - 点球","MQ_CPK":" - 点球","RNB_P":"没有罚牌","RNC_P":"没有角球","RS_Y":"进球","RS_N":"无进球","RS_P":"没有点球","Both":"两队皆是"};  </script><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><script>
gamedate = '2017-07-12';
var GameData = new Array();
GameData[0] = new Array('FT','00:01','球會友誼賽','馬賽 [中]','維托魯康斯坦薩','1732813');
GameData[1] = new Array('TN','08:00','ATP溫布爾登網球公開賽','安迪.穆雷(大不列顛)','山姆.奎裡(美國)','161322');
GameData[2] = new Array('TN','08:00','ATP溫布爾登網球公開賽','吉爾.穆勒(盧森堡)','馬林.西里奇(克羅地亞)','161441');
GameData[3] = new Array('TN','08:30','WTA溫布爾登網球公開賽-雙打','阿什利.巴特伊/凱西.德拉奎亞(澳洲)','愛卡特琳娜.瑪卡洛娃/愛蓮娜.維斯妮娜(俄羅斯)','161489');
GameData[4] = new Array('TN','08:30','WTA溫布爾登網球公開賽-雙打','斯維特拉娜.庫茲涅佐娃(俄羅斯)/克利絲提娜.姆拉德諾維奇(法國)','二宫真琴(日本)/雷娜塔.沃拉科娃(捷克)','161499');
GameData[5] = new Array('TN','09:00','溫布爾登網球公開賽-混雙','安德烈.伯格曼(德國)/妮可.梅里查爾(美國)','丹尼爾.內斯托(加拿大)/安德雷雅.卡勒柏奇(斯洛文尼亞)','161372');
var GameHead = new Array('gtype','time','league','teamH','teamC','gidm');
var msg='敬请註意:从7月11日起足球滚球已启用新的收单制度，请前往一般体育规则查看滚球规则的更新，如有任何疑问请向客服中心查询。.';
var chgURL_domain='66.133.87.20';
var mtype='4';
var mem_enable='Y';
var countHOT= '' ;
var checkRoute='N';
var imgurl='http://op6.pp55761133mm888.com';
var countMessage='';
</script></head>






<body id="OSEL" class="bodyset" onload="bodyLoad();" style="background:#493721;">

<div id="main" class="main">


  <div id="menu">
    <div class="ord_on" id="order_button" onclick="showOrder();">交易单</div>
    <div class="record_btn" id="record_button" onclick="showRec();">最新十笔交易</div>
  </div>

  <div id="order_div" name="order_div" style=" overflow:hidden;">
    <div id="pls_bet" name="pls_bet" style="background-color:#E3CFAA;left:0;top:0; display:none;">
    	<img src="../images/member/order_none.jpg" width="216" height="22">
    	<div style="width:216; height:63px; text-align:center; padding-top:16px;">
       
    		<font style="font:0.75em Arial, Helvetica, sans-serif; font-weight:bold;">点击赔率便可将<br>选项加到交易单里。</font>
    	</div>
  	</div>
    <div id="bet_div" name="bet_div">
      <iframe id="bet_order_frame" src="<?php echo U('Old/bet_order_frame');?>" name="bet_order_frame" scrolling="NO" frameborder="NO" border="0" height="101"></iframe>
    </div>
    <div id="rec5_div" name="rec5_div">
      <iframe id="rec_frame" src="<?php echo U('Old/rec_frame');?>" name="rec_frame" scrolling="NO" frameborder="NO" border="0" height="0"></iframe>
    </div>
  </div>

<!-- 奥运   Start -->
		<div id="euro_menu_all" class="left_btn" style="display:none;">
        <div id="euro_banner" class="euro_btn"></div>
			<div class="rb_left_cn_out" id="HOT_rb_btn" onmouseover="Eurover(this);" onmouseout="Eurout(this);" onclick="goEuro_HOT('rb');"><br><span id="HOT_rb" class=" text_s">0</span></div>
			<div class="hot_left_cn_out" id="HOT_today_btn" onmouseover="Eurover(this);" onmouseout="Eurout(this);" onclick="goEuro_HOT('today');"><br><span id="HOT_today" class="text_s">0</span></div>
			<div class="early_left_cn_out" id="HOT_early_btn" onmouseover="Eurover(this);" onmouseout="Eurout(this);" onclick="goEuro_HOT('early');"><br><span id="HOT_early" class="text_s">0</span></div>
		</div>
    <!-- 已开赛 -->
    <div id="euro_open" style="z-index: -1;display: block;">
        <div id="euro_menu">
						<div class="rb_over" id="RB_btn" onmouseover="Eurover(this);" onmouseout="Eurout(this);" onclick="goRB();"></div>
            <!--<div class="hot_btn" id="today_btn"  onmouseover="Eurover(this);" onMouseOut="Eurout(this);" onClick="goHOT_FT();"></div>
            <div class="early_btn" id="early_btn"  onmouseover="Eurover(this);" onMouseOut="Eurout(this);" onClick="goHOT_FU();"></div>-->
        </div>
         
         <!--div id="oly_main"--> 
         <div id="oly_main111">
            <!--滚球 -->
            <div id="RB_oly">
                <div id="FT_RB" onclick="showRB('FT');" class="oly_tr">足球(6)</div>
                <div id="BK_RB" onclick="showRB('BK');" class="oly_tr">篮球 / 美式足球(2)</div>
                <div id="TN_RB" onclick="showRB('TN');" class="oly_tr">网球(4)</div>
                <div id="VB_RB" onclick="showRB('VB');" class="oly_tr" style="display: none;">排球(0)</div>
                <div id="BM_RB" onclick="showRB('BM');" class="oly_tr" style="display: none;">羽毛球(0)</div>
                <div id="TT_RB" onclick="showRB('TT');" class="oly_tr" style="display: none;">兵乓球(0)</div>
                <div id="BS_RB" onclick="showRB('BS');" class="oly_tr" style="display: none;">棒球(0)</div>	
                <div id="SK_RB" onclick="showRB('SK');" class="oly_tr" style="display: none;">斯诺克/台球(0)</div>
                <div id="OP_RB" onclick="showRB('OP');" class="oly_tr" style="display: none;">其他(0)</div>
            </div>        	
         	 
            <!--今日 -->
           <!--<div id="today_oly">
                <div id="FT_FT" onClick="showHotFT('FT');" class="oly_tr"></div>
                <div id="BK_FT" onClick="showHotFT('BK');" class="oly_tr"></div>
                <div id="TN_FT" onClick="showHotFT('TN');" class="oly_tr"></div>
                <div id="VB_FT" onClick="showHotFT('VB');" class="oly_tr"></div>
                <div id="BS_FT" onClick="showHotFT('BS');" class="oly_tr"></div>	
               <div id="OP_FT" onClick="showHotFT('OP');" class="oly_tr"></div>		
            </div>-->
            
            <!--早盘 -->
          <!--<div id="early_oly">
                <div id="FT_FU" onClick="showHotFU('FT');" class="oly_tr"></div>
                <div id="BK_FU" onClick="showHotFU('BK');" class="oly_tr"></div>
                <div id="TN_FU" onClick="showHotFU('TN');" class="oly_tr"></div>
                <div id="VB_FU" onClick="showHotFU('VB');" class="oly_tr"></div>
                <div id="BS_FU" onClick="showHotFU('BS');" class="oly_tr"></div>
                <div id="OP_FU" onClick="showHotFU('OP');" class="oly_tr"></div>
            </div>-->
         </div>
        
    </div>
          
<!-- 奥运   End -->



  <!--div id="showLive_table"></div>
  <!--div id="livetableData" style="display:none;">
    <xmp>
      <div id="live_box">
      	<h2>现场直播<span class="more"><a href="javascript://" onClick="OpenLive();">查看所有直播</a></span></h2>
        <div class="live_main">
   	     <ul class="live_list">
         	*showDataTR*
   		 </ul>
        </div>
      </div>
     
    </xmp>
  </div-->
  
  <!-- LIVE表格资料-->
  <div id="DataTR" style="display:none;">
    <xmp>
      <li><span class="time">*TIME*</span><span class="team">*TEAMS*</span></li>
    </xmp>
  </div>
  <!--公告 Start--> 
	<!--div id="info_div" name="info_div" style="position: absolute;"-->
    <div id="info_div" name="info_div" style="top: 339px;">
		<div class="msg_box">
		<h2><span class="msg_float">公告</span><a class="letter_bg" href="#" onclick="showMoreMsg(2)" onmouseover="overInfo();" onmouseout="outInf();"><span id="messages" class="letter_text" style="display:none">*MESSAGES*</span></a><span class="more"><a href="#" onclick="showMoreMsg();">更多</a></span><span id="personal_Info" class="msg_info" style="display:none;">个人公告</span></h2>
			<div class="msg_main">
				<marquee height="70" scrollamount="1" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
				<span id="real_msg">敬请註意:从7月11日起足球滚球已启用新的收单制度，请前往一般体育规则查看滚球规则的更新，如有任何疑问请向客服中心查询。.</span>
				</marquee>
			</div>
		</div>
	</div>
     <!--公告 End-->
     
      <!--广告 start-->
      <!--<div class="left_banner">
      <span onClick="window.open('http://433.com');" class="banner_tw"></span>
      </div>-->
      
      <!--div class="new_banner">
      <span class="banner_title">即将更新</span>
      <div class="banner_con">
      <span class="banner_pic_cn"></span>
      <span>温馨提示: <span class="text_color">12月16日</span>桌面和手机版会员端登入页面将会更改至全新的页面,此预览图让你事先获知新的页面更新.</span>
      </div>
      </div-->
      
      <div class="left_banner">
      <span id="chg_site" class="cro666_mem_cn" onclick="sendRequest('chgurl.php?uid='+top.uid+'&amp;langx='+top.langx+'&amp;mtype='+mtype+'&amp;chgURL_domain='+chgURL_domain+'&amp;ts='+new Date().getTime());return false;"></span>
      <span onclick="window.open('http://www.live228.com');" class="live228_cn"></span>
      </div>

      
      <!--广告 end-->
  
</div>
<div id="showURL"></div>
<iframe name="loadPHP" width="0" height="0"></iframe>


</body>
</html>