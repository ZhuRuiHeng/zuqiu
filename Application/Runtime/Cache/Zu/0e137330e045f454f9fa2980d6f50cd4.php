<?php if (!defined('THINK_PATH')) exit();?><html>
		<head></head>
		<script>
		top.uid = '';
		top.langx = 'zh-cn';
		top.today_gmt = '';
		top.hasLogin = 'login';
		top.iovationKey = 'GHDHDA';
		var iovationURL='http://sbc.ry00000.com/iovation/vindex.html?webProtocal=http&webDomain=66.133.87.54';
		var iovation_Proxy='http://sbc.ry00000.com';
		</script>
		
		<script language="javascript" src="/Public/js/HttpRequestXML.js"></script>
		<script language="JavaScript" src="/Public/js/lib_util.js"></script>
		<script language="javascript">
		//window.onload = function(){
			document.cookie = "protocolstr="+location.protocol.replace(":","")+";path=/;";
		//}
		
		top.newWinObj=new Array();
		if(!!window.onunload){
		 window.onUnloadDWinObj=window.onunload;
		}else{
		 window.onUnloadDWinObj=function(){}
		}
		
		window.onunload=function(){
		 window.onUnloadDWinObj();
		 for(var i=0;i<newWinObj.length;i++){
		  if(!newWinObj[i].closed){
		   newWinObj[i].window.close();
		  }
		 }
		}
		
		if(!!window.onbeforeunload){
		 window.onbeforeUnloadDWinObj=window.onbeforeunload;
		}else{
		 window.onbeforeUnloadDWinObj=function(){}
		}
		
		window.onbeforeunload=function(){
		 window.onbeforeUnloadDWinObj();
		 for(var i=0;i<newWinObj.length;i++){
		  if(!newWinObj[i].closed){
		   newWinObj[i].window.close();
		  }
		 }
		}
		
		window.onload=function(){
			if(iovationURL!=''){
				var p=document.location.protocol;
				p=p.replace(":","")
				iovation_Proxy=iovation_Proxy.replace("http","");
				iovation_Proxy=iovation_Proxy.replace("https","");
				iovationURL=p+iovation_Proxy+"/iovation/vindex.html?webProtocal="+p+"&webDomain="+document.domain;
				document.getElementById("SI2_func").src=iovationURL;
			}else{
		                window.getblackbox(" no blackbox ");
		        }
		}
		top.blackbox='';
		window.getblackbox=function(bb){
		 top.blackbox=bb;
		}
		
	
	</script>
	<frameset rows="*,0,0" frameborder="NO" border="0" framespacing="0">
		<frame name="SI2_mem_index" src="<?php echo U('Old/FT_index');?>">
		<frame id="SI2_func" name="SI2_func" scrolling="NO" noresize="" src="">
	</frameset>
	<noframes>
		<body bgcolor="#FFFFFF" text="#000000"></body>
	</noframes>
</html>