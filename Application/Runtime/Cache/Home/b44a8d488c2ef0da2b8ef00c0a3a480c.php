<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>全部</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/reset_indexFT.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/order.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/bet_maincotrol.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/live.css">
</head>
<body>
  <body id="MFT" class="bet_rmax_FS" >

      <div id="max_leg">
        <div id="fixhead_layer" class="fixhead_layer" style="top: 0px;">
          <div class="bet_head">
            <!--左侧按钮-->
            <div class="bet_left">
              <span id="sel_league" onclick="chg_league();" class="bet_league_btn">
                <tt class="bet_normal_text">
                  选择联赛&nbsp;
                  <tt id="str_num" class="bet_yellow">
                    (全部)
                  </tt>
                </tt>
              </span>
              <span id="show_pg_chk" style="display:none;" class="bet_paging">
                <label>
                  <input id="pg_chk" onclick="clickChkbox();" type="checkbox" class="bet_selsect_box"
                  value="C">
                  <span>
                  </span>
                  <span class="bet_more_chk">
                    分頁
                  </span>
                </label>
              </span>
              <div id="show_pg_chk_msg" style="display:none;" class="bet_game_head_i">
                <div class="bet_head_i_bg">
                  <span class="bet_head_iarrow_text">
                    如您觉得网页运行缓慢,请选分页，
                    <br>
                    这会限制每页显示的比赛场数。
                  </span>
                </div>
              </div>
            </div>
            <!--右侧按钮-->
            <div class="bet_right">
              <span class="bet_time_btn" onclick="javascript:refreshReload('',true)">
                <tt id="refreshTime" class="bet_time_text">
                  180
                </tt>
              </span>
            </div>
          </div>
        </div>
        <div id="backTOP" style="top: 675px; z-index: 1; display: none;" onclick="backtop();"
        class="bet_top_bg">
        </div>
        <div id="showgames" class="showLEG(this,id)_normal">
        </div>
        <div id="showLEG(this,id)" class="showLEG(this,id)_normal">
          <table cellpadding="0" cellspacing="0" border="0" class="bet_game_table">
            <tbody>
              <tr id="title_tr" name="fixhead_copy" class="bet_game_title">
                <td colspan="2" class="bet_game_name">
                  足球
                  <br>
                  <tt class="bet_game">
                    冠军
                  </tt>
                </td>
              </tr>
              <!-- 2国家球队 -->
              <tr class="bet_game_league" id="LEG_93105">
                <td id="93105_美洲金杯2017(在国)" onclick="showLEG(this,id)" colspan="2">
                  美洲金杯2017(在英国)
                  <span class="bet_corr_number">
                    2017-07-14 23:00
                  </span>
                </td>
              </tr>
              <!-- 内容 -->
              <div class="neirong">
               <!-- 分组title -->
                <tr class="bet_date_small_title 93105" id="TR_93105">
                  <td colspan="2">
                    <span>
                      分组赛A组冠军
                    </span>
                  </td>
                </tr>                
                <tr id="TR_0_L_93105" class="bet_game_small_top 93105">
                  <td id="TR1_93105_0" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  class="bet_date_small_left 93105" style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS01&amp;wtype=FS&amp;langx=zh-cn','FSFS0193105');">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        哥斯达黎加
                      </span>
                      <span class="bet_small_right" style="cursor:hand">
                        <span id="FSFS0193105" class="bet_bg_color">
                          <font title="哥斯达黎加">
                            1.70
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                  <td id="TR2_93105_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS02&amp;wtype=FS&amp;langx=zh-cn','FSFS0293105');"
                  class="bet_date_small_right">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        洪都拉斯
                      </span>
                      <span class="bet_small_right">
                        <span id="FSFS0293105" class="bet_bg_color">
                          <font title="洪都拉斯">
                            3.00
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                </tr>
                <tr id="TR_2_L_93105" class="bet_game_small_top 93105">
                  <td id="TR1_93105_2" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  class="bet_date_small_left" style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS03&amp;wtype=FS&amp;langx=zh-cn','FSFS0393105');">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        加拿大
                      </span>
                      <span class="bet_small_right" style="cursor:hand">
                        <span id="FSFS0393105" class="bet_bg_color">
                          <font title="加拿大">
                            4.50
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                  <td id="TR2_93105_3" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS04&amp;wtype=FS&amp;langx=zh-cn','FSFS0493105');"
                  class="bet_date_small_right">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        法属圭亚那
                      </span>
                      <span class="bet_small_right">
                        <span id="FSFS0493105" class="bet_bg_color">
                          <font title="法属圭亚那">
                            41.00
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                </tr>
                <!--2-->
                <tr class="bet_game_league" id="TR_93106">
	                <td id="93105_美洲金杯2017(在英国)" onclick="showLEG(this,id)" colspan="2">
	                  美洲金杯2017(在美国)
	                  <span class="bet_corr_number">
	                    2017-07-14 23:00
	                  </span>
	                </td>
	             </tr>
                <tr class="bet_date_small_title 93106" id="TR_93106">
                  <td colspan="2">
                    <span>
                      分组赛B组冠军
                    </span>
                  </td>
                </tr>
                <tr id="TR_0_L_93106" class="bet_game_small_top 93106">
                  <td id="TR1_93106_0" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  class="bet_date_small_left" style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93106&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS01&amp;wtype=FS&amp;langx=zh-cn','FSFS0193106');">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        美国
                      </span>
                      <span class="bet_small_right" style="cursor:hand">
                        <span id="FSFS0193106" class="bet_bg_color">
                          <font title="美国">
                            1.25
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                  <td id="TR2_93106_1" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93106&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS02&amp;wtype=FS&amp;langx=zh-cn','FSFS0293106');"
                  class="bet_date_small_right">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        巴拿马
                      </span>
                      <span class="bet_small_right">
                        <span id="FSFS0293106" class="bet_bg_color">
                          <font title="巴拿马">
                            3.50
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                </tr>
                <tr id="TR_2_L_93106" class="bet_game_small_top 93106">
                  <td id="TR1_93106_2" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  class="bet_date_small_left" style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93106&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS03&amp;wtype=FS&amp;langx=zh-cn','FSFS0393106');">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        尼加拉瓜
                      </span>
                      <span class="bet_small_right" style="cursor:hand">
                        <span id="FSFS0393106" class="bet_bg_color">
                          <font title="尼加拉瓜">
                            16.00
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                  <td id="TR2_93106_3" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                  style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93106&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS04&amp;wtype=FS&amp;langx=zh-cn','FSFS0493106');"
                  class="bet_date_small_right">
                    <div class="bet_small_table">
                      <span class="bet_small_left">
                        马提尼克
                      </span>
                      <span class="bet_small_right">
                        <span id="FSFS0493106" class="bet_bg_color">
                          <font title="马提尼克">
                            31.00
                          </font>
                        </span>
                      </span>
                    </div>
                  </td>
                </tr>
             </div>
              <!-- 结束 -->
              <!-- 2 美国对-->
              <tr class="bet_game_league" id="LEG_93107">
                <td id="93107_美洲金杯2017(在美国)" onclick="showLEG(this,id)" colspan="2">
                  美洲金杯2017(在中国)
                  <span class="bet_corr_number">
                    2017-07-14 23:00
                  </span>
                </td>
              </tr>
              <tr class="bet_date_small_title 93107" id="TR_93107">
                <td colspan="2">
                  <span>
                    分组赛A组冠军
                  </span>
                </td>
              </tr>
              <div class="neirong">
                  <tr id="TR_2_L_93107" class="bet_game_small_top 93107">
                      <td id="TR1_93107_2" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                      class="bet_date_small_left" style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS03&amp;wtype=FS&amp;langx=zh-cn','FSFS0393105');">
                        <div class="bet_small_table">
                          <span class="bet_small_left">
                            加拿大
                          </span>
                          <span class="bet_small_right" style="cursor:hand">
                            <span id="FSFS0393105" class="bet_bg_color">
                              <font title="加拿大">
                                4.50
                              </font>
                            </span>
                          </span>
                        </div>
                      </td>
                      <td id="TR2_93107_3" onmouseover="mouseEnter_pointer(this.id);" onmouseout="mouseOut_pointer(this.id);"
                      style="cursor:pointer" onclick="parent.mem_order.betOrder('FT','NFS','gametype=FT&amp;gid=93105&amp;uid=9dp89phrvm16963210l2604482&amp;rtype=FS04&amp;wtype=FS&amp;langx=zh-cn','FSFS0493105');"
                      class="bet_date_small_right">
                        <div class="bet_small_table">
                          <span class="bet_small_left">
                            法属圭亚那
                          </span>
                          <span class="bet_small_right">
                            <span id="FSFS0493105" class="bet_bg_color">
                              <font title="法属圭亚那">
                                41.00
                              </font>
                            </span>
                          </span>
                        </div>
                      </td>
                    </tr>
              </div>
            </table>
          </div>
        </div>
        <div id="NoDataTR" style="display:none;">
          
            <tr>
              <td colspan="20" class="bet_no_game">
                您选择的项目暂时没有赛事。
              </td>
            </tr>
          
        </div>
    </div>
    <div id="legView" style="display:none; width:100%; height:100%;" class="legView">
      <div class="leg_head" onmousedown="initializedragie('legView')">
      </div>
      <div style="width:100%; height:100%;">
        <iframe id="legFrame" frameborder="no" border="0" allowtransparency="true"
        scrolling="no" width="100%" height="100%" src="<?php echo U('Content/legFrame');?>">
        </iframe>
      </div>
      <div class="leg_foot">
      </div>
    </div>
   
    <div id="controlscroll" style="position: absolute; display: none;">
      <table border="0" cellspacing="0" cellpadding="0" class="loadBox">
        <tbody>
          <tr>
            <td>
              <!--loading-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>

</body>

</body>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
  function mouseOut_pointer(id){
      //console.log(id);
  };
  function mouseEnter_pointer(id){
      //console.log(id);
  };

  function backtop(){
      var speed=200;//滑动的速度
      $('body,html').animate({ scrollTop: 0 }, speed);
      return false;
  };
  function refreshReload(){
    window.location.reload();
    $("#refreshTime").html(180);
  };
  //选择联赛
  function chg_league(){
    $("#legView,.bet_select_bg,body,.legView").show();
    //alert(1);
  };
  //关闭选择联赛弹窗
  
//	function back(){
//  	alert(222);
//  	$("#legFrame").attr("src","");
//  }
  //全选
	function selall(){
		//判断状态全选
		var zhuangtai = $(".bet_box_w label").find("input").is(':checked');
		
		if(zhuangtai == false){
			$(".bet_box_w label").find("input").prop("checked",true);
		}else{
			$(".bet_box_w label").find("input").prop("checked",false);
		}
	};
	//折叠
	function showLEG(obj,str_num){
		str_num = $(obj).parent().attr("id");
		str_num = parseInt(str_num.replace(/[^0-9]/ig,""));
		$("."+str_num).toggle();
		$(obj).parent(".bet_game_league").toggleClass('bet_game_league_down');
    	$(obj).parent(".bet_game_league").siblings('.neirong').toggle();
	};
	parent.load();
	
</script>
</body>
</html>