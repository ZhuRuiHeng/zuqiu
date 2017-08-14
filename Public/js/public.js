var today_count=0;
var early_count=0;
var chgSite_sw = true; //switch old site or new site
var urlHash = new Object();
//var changebtn="rb";
//var headerClass = new Object();


//try{
	//parent = window;
/*
if (""+top.cgTypebtn=="undefined"){
	top.cgTypebtn="re";
}

if (""+top.head_gtype=="undefined"){
	top.head_gtype="FT";
}
if (""+top.head_FU=="undefined"){
	top.head_FU="FT";
}
if (""+top.head_btn=="undefined"){
	top.head_btn="today";
}
*/
	//showGtype = top.gtypeShowLoveI;
	//var xx=showGtype.length;
	//initDate();
	//showGtype = top.gtypeShowLoveI;
//}catch(e){
	
//}


function initHeader(){
	if(top.load_order){
		setTimeStart(top.init_date);
		reloadCrditFunction();
	}
	
	initDivBlur_header(document.getElementById('div_langx'),document.getElementById('sel_div_langx'));
	initDivBlur_header(document.getElementById('div_help'),document.getElementById('sel_div_help'));
	initDivBlur_header(document.getElementById('div_acc'),document.getElementById('sel_div_acc'));
	document.getElementById('sel_div_langx').onclick=function(){
		//console.log("sel_div_langx is onClick");
		hideDiv('annou');
		divOnBlur(document.getElementById('div_langx'),document.getElementById('sel_div_langx'));
	}
	document.getElementById('sel_div_help').onclick=function(){
		hideDiv('annou');
		divOnBlur(document.getElementById('div_help'),document.getElementById('sel_div_help'));
	}
	document.getElementById('sel_div_acc').onclick=function(){
		hideDiv('annou');
		divOnBlur(document.getElementById('div_acc'),document.getElementById('sel_div_acc'));
	}
	/*
	document.getElementById('head_annBTN').onclick=function(){

		//document.getElementById('annou_div').style.display='';
		divOnBlur(document.getElementById('annou_div'));
		showAnnou();
	}
	*/
	// 2017-02-24 彈跳ＴＶ目前不預設開第一場
	//top.select_type = "betlist";

	if(top.mem_status=="S"||top.showKR=="Y"){
			document.getElementById("head_live").style.display = "none";
			document.getElementById("head_live").onclick = null;
	}
	
	if(top.mem_status == "S"){
			document.getElementById("btn_result").style.display = "none";
			document.getElementById("btn_result").onclick = null;
			//2065.測試機&uat&線上-新會員端-只能看帳會員登入英文語系,右上角的語系圖案變韓文的(BGM-311)
			//document.getElementById("head_MINI").className = "head_OUTmenuS noFloat KR";
	}else{
			document.getElementById("btn_result").onclick=function(){
					showMyAccount('Results');
			}
	}


	document.getElementById("btn_openbets").onclick=function(){
			showMyAccount('OpenBets');
	}
	document.getElementById("btn_history").onclick=function(){
			showMyAccount('Statement');
	}


	display_loadingMain("head");
	
	setMemOnlineTimer();
	getAnnouCount();

	getChgUrlSW();
	if (top.casino != "SI2") {
		try{
			document.getElementById("live").style.display = "none";
			document.getElementById("QA_row").style.display = "none";
		}catch(E){}
	}

	if(top.head_btn=="rb"){
		try{
			document.getElementById("nav_re").style.display = "";
			document.getElementById("type_re").style.display = "";
			document.getElementById("nav").style.display = "none";
			document.getElementById("type").style.display = "none";
		}catch(E){}
	}else{
		try{
			document.getElementById("nav_re").style.display = "none";
			document.getElementById("type_re").style.display = "none";
			document.getElementById("nav").style.display = "";
			document.getElementById("type").style.display = "";
		}catch(E){}
	}


	try{
		var obj = document.getElementById(top.cgTypebtn+"");
		obj.className="type_on";
	}catch(E){}

	try{
		if((navigator.appVersion).indexOf("MSIE 6")==-1){
			document.getElementById("download").style.visibility="visible";
		}
	}catch(E){}
	try{
		document.getElementById("today_btn").className="today";
	}catch(E){}
	try{
		document.getElementById("early_btn").className="early";
	}catch(E){}
	try{
		document.getElementById("rb_btn").className="rb";
	}catch(E){}
	try{
		document.getElementById(top.head_btn+"_btn").className=top.head_btn+"_on";
		document.getElementById(top.RB_id).className="rb_menu_on";
	}catch(E){}
	try{
		document.getElementById("rb_btn").className="rb";
	}catch(E){}

	//更新信用額度   max---
	//reloadCrditFunction();
	//showTable();
	//GameType();
	
}
function initDivBlur_header(showdiv,selid){
	showdiv.tabIndex=100;
	showdiv.onblur=function(){
		showdiv.style.display='none';
		setTimeout(function(){
			selid.onclick=function(){
				//alert("onblur");
				hideDiv('annou');
				divOnBlur(showdiv,selid);
				}
		},300);
	};

}

function setChgSiteVisible(isShow){
		var dis = "none";
		/*
		if(top.aspenbet=="Y"||util.isIPad()||top.showKR=="Y"){
				dis = "none";
		}else{
				dis = (isShow)?"":"none";
		}
		*/
		
		document.getElementById("chg_site").onclick = null;
		
		if(isShow){
				if(!(top.aspenbet=="Y"||util.isIPad()||top.showKR=="Y")){
						dis = "";
						document.getElementById("chg_site").onclick = chgSiteEvent;
				}
		}

		document.getElementById("chg_site").style.display = dis;
		
}

function getChgUrlSW(){

		var param = "";
		param+="uid="+top.uid;
		param+="&langx="+top.langx;
		param+="&code=getSW";

		var getHttp = new util.HttpRequest();
		getHttp.addEventListener("LoadComplete", function(html){

				if(html){
						var tmp = html.split(",");
						urlHash["sw"] = tmp[1];
						urlHash["domain"] = tmp[2];

						try{
								if(urlHash["sw"]=="Y"){
										setChgSiteVisible(true);
										//document.getElementById("chg_site").onclick = chgSiteEvent;
								}else{
										setChgSiteVisible(false);
										//document.getElementById("chg_site").onclick = null;
								}
						}catch(e){
								systemMsg(e.toString());
						}

				}else{
						setChgSiteVisible(false);
						//document.getElementById("chg_site").onclick = null;
				}

		});

		getHttp.loadURL(util.getNowDomain()+"/app/member/chgurl.php", "GET", param);
}

//switch old site or new site
function chgSiteEvent(){

		var param = "";
		param+="mtype="+top.mtype;
		param+="&uid="+top.uid;
		param+="&langx="+top.langx;
		param+="&chgURL_domain="+urlHash["domain"];
		param+="&ts="+new Date().getTime();
		param+="&code=goToDomain";

		if(!urlHash["domain"]) return;

		var getHttp = new util.HttpRequest();
		getHttp.addEventListener("LoadComplete", function(html){
				try{
						document.getElementById('showURL').innerHTML = html;
  					var obj = document.getElementById('newdomain').submit();
  			}catch(e){
  					systemMsg(e.toString());
  			}
		});

		getHttp.loadURL(util.getNowDomain()+"/app/member/chgurl.php", "GET", param);

}

function showOn(obj){
	obj.className += " On";
}

function showOut(obj){
	obj.className = obj.className.replace(" On","");
}

function chg_head(a,b,c){
	top.RB_id="";
	top.hot_game="";
	if(top.swShowLoveI)b=3;
	if(top.showtype=='hgft')b=3;
	var hot_str="";
	if(top.head_gtype=="FT"){
		try{
		parent.mem_order.goEuro_HOT_btn("");
		}catch(E){}
	}
	//加入hot_game參數值
	hot_str="&hot_game="+top.hot_game;

	parent.body.location=a+"&league_id="+b+hot_str;

	//2015-07-23 Peter 重置選取聯盟
	//reload_leg();
}

function chg_index_head(a,b,c,d){
	top.RB_id="";
	top.hot_game="";
	top.swShowLoveI=false;
	top.cgTypebtn="re_class";
	var hot_str="";
	hot_str="&hot_game="+top.hot_game;
	if(top.head_gtype=="FT"){
		try{
		parent.mem_order.goEuro_HOT_btn("");
		}catch(E){}
	}
	parent.body.location.href=b+"&league_id="+c+hot_str;
	self.location.href=a;

	//2015-07-20 Peter 重置選取聯盟
	//reload_leg();
}

function chg_rb_index_head(a,b,c,d){
	top.RB_id="";
	top.head_FU="FT";
	top.hot_game="";
	top.swShowLoveI=false;
	top.cgTypebtn="re_class";
	var hot_str="";
	hot_str="&hot_game="+top.hot_game;
	if(top.head_gtype=="FT"){
		try{
		parent.mem_order.goEuro_HOT_btn("");
		}catch(E){}
	}
	parent.body.location.href=b+"&league_id="+c+hot_str;
	self.location.href=a;

}

//2015-07-20 Peter function 重置選取聯盟
function reload_leg(game_type){
	tmp_gtype = "";
	tmp_fs = "";
	switch(top.head_gtype){
		case "FT":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"FT":"FU";
			break;
		case "BK":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"BK":"BU";
			break;
		case "BS":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"BS":"BSFU";
			break;
		case "TN":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"TN":"TU";
			break;
		case "VB":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"VB":"VU";
			break;
		case "BM":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"BM":"BMFU";
			break;
		case "TT":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"TT":"TTFU";
			break;
		case "OP":
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"OP":"OM";
			break;
		default:
			tmp_gtype = (top.head_btn == "today" || top.head_btn == "rb")?"FT":"FU";
			break;
	}
	try{
		if(top.head_gtype == "FT" && top.head_btn == "early" && top.cgTypebtn == "hp3_class"){
			tmp_gtype = "FT";
			parent[tmp_gtype+"_lid_type"] = '';
			parent[tmp_gtype+"_lid_ary"] = 'ALL';
			parent[tmp_gtype+"_lname_ary"] = 'ALL';
		}
		else{
			parent[tmp_gtype+"_lid_type"] = '';
			parent[tmp_gtype+"_lid_ary"] = 'ALL';
			parent[tmp_gtype+"_lname_ary"] = 'ALL';
			if(top.head_btn == "rb"){
				parent[tmp_gtype+"_lid_ary_RE"] = 'ALL';
				parent[tmp_gtype+"_lname_ary_RE"] = 'ALL';
			}
		}

		if(game_type == "fs_class"){
			top["FS"+top.head_gtype+"_lid"]["FS"+top.head_gtype+"_lname_ary"] = 'ALL';
			top["FS"+top.head_gtype+"_lid"]["FS"+top.head_gtype+"_lid_ary"] = 'ALL';
			parent["FS"+top.head_gtype+"_lid_ary"] = 'ALL';
			parent["FS"+top.head_gtype+"_lname_ary"] = 'ALL';
			parent.body.reload_var();
		}
	}catch(e){}
}





function changeLangx(setlangx){

	clearAllOpenWindow();
	//console.log("==>"+top.ShowLoveIarray["FTRE"]);
	if (top.langx!=setlangx){
		//initDate();換語系不用初始化我的最愛
		top.cgTypebtn="re_class";
		top.langx=setlangx;
		top.head_gtype="FT";
		top.head_FU="FT";
		top.head_btn="today";
		top.FT_lid = new Array();
		top.FU_lid = new Array();
		top.FSFT_lid = new Array();
		top.FT_lid['FT_lid_ary']= FT_lid_ary='ALL';
		top.FT_lid['F…