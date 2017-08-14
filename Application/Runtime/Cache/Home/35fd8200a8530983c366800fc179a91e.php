<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/dns.css">
<div class="dns_all">
		<!--header-->
		<div class="dns_header noFloat">
        	<h1 class="dns_Title">故障及疑难排解</h1>
        	<div class="dns_lan" title="语言转换">
                <span id="sel_div_langx" class="head_lanBTN" onmouseover="showDiv();"></span><!--将按钮图案取出-->
                <span class="head_lanTxt" onmouseover="showDiv();">简</span>
                <div id="div_langx" class="head_MINImenu" style="display: none;" onmouseleave="hideDiv();">
                	<span class="head_MINImenu_arr"></span>
                	<h1>语言</h1>
                	<ul class="head_MINIul">
                    <li class="head_en" onclick="showDiv();changeLangx('en-us')" onmouseover="showOn(this);" onmouseout="showOut(this);">English</li>
                    <li class="head_tw" onclick="showDiv();changeLangx('zh-tw')" onmouseover="showOn(this);" onmouseout="showOut(this);">繁体</li>
                    <li class="head_cn" onclick="showDiv();changeLangx('zh-cn')" onmouseover="showOn(this);" onmouseout="showOut(this);">简体</li>
                    </ul>
                </div>
              </div>
        </div>
        
        <!--main-->
        <div class="dns_DataMain">
        	<ul>
            	<li>1. 无法正常的打开我们的网页或网页打开后被转导到别的网站？
                	<ul>
                    	<li>网页无法正常打开或被转导的原因常常是因为当地电讯公司的DNS被劫持，而 DNS劫持是指域名解析记录控制权被擅改并恶意修改域名的原IP地址至指定IP地址，其结果就是对特定的网址不能访问或所访问的网址是假的，从而实现窃取资料或破坏原有正常服务的目的。我们建议用户下载DNS修复软件，该软件将会自动帮您的电脑指向有效的DNS.</li>
                        <li class="dns_blueWord">解决方法1: <a href="dowload_exe.html">下载DNS Fixed 软件</a></li>
                        <!--下载DNS  -->
                        <div class="dns_downMain noFloat">
				        	<h1 class="dns_Title02">修改DNS工具</h1>
				        	<ul class="dns_IMG">
				            	<li><img src="/Public/images/member/DNS_Hijack01_cn.jpg"></li>
				                <li><img src="/Public/images/member/DNS_Hijack02_cn.jpg"></li>
				                <li><img src="/Public/images/member/DNS_Hijack03_cn.jpg"></li>
				                <li><img src="/Public/images/member/DNS_Hijack04_cn.jpg"></li>
				            </ul>
				            
				            <ul class="dns_TXT">
				            	<li style="margin-bottom:52px"><b>1.</b> 下载软件.<a href="/Public/member/exef/download.php"><span class="dns_downBTN">立即下载</span></a></li>
				                <li style="margin-bottom:130px"><b>2.</b> 点击 ‘OK’.</li>
				                <li style="margin-bottom:131px"><b>3.</b> 等到它变成100%.</li>
				                <li><b>4.</b> 点击 ‘OK’ 关闭.</li>
				            </ul>
				        </div>
                        <li class="dns_blueWord">解决方法2: <a href="winxp.html">修改 DNS 地址</a></li>
                        <!-- 修改DNS -->
                        <div class="dns_cacheMain noFloat">
				        	<h1 class="dns_Title02">修改在你电脑的 DNS</h1>
				        	<ul class="dns_IMG">
				            	<li><img src="/Public/images/member/winxp_01_cn.jpg"></li>
				                <li><img src="/Public/images/member/winxp_02_cn.jpg"></li>
				                <li><img src="/Public/images/member/winxp_03_cn.jpg"></li>
				                <li><img src="/Public/images/member/winxp_04_cn.jpg"></li>
				                <li style="margin-bottom:1px"><img src="/Public/images/member/winxp_05_cn.jpg"></li>
				            </ul>
				            
				            <ul class="dns_TXT">
				            	<li style="margin-bottom:339px"><b>1.</b> 点击 ‘开始’， 选择 ‘控制面板’.</li>
				                <li style="margin-bottom:346px"><b>2.</b> 选择 ‘网络连接’.</li>
				                <li style="margin-bottom:307px"><b>3.</b> ‘本地连接’ 按右键， 选择 ‘属性’.</li>
				                <li style="margin-bottom:389px"><b>4.</b> 选择 ‘Internet 协议 (TCP / IP)’ , 点击进入 ‘属性’.</li>                
				                <li><b>5.</b> 选择 ‘使用下面的DNS服务器地址 (E)’, <br>并修改:<br>首选DNS服务器 (P) : ‘202.45.84.58’<br>备用DNS 服务器 (A) : ‘203.80.96.10’<br>点击 ‘确定’ 即完成DNS 设置.</li>
				            </ul>
				        </div>
                    </ul>
                </li>
                <li>2. 网页排版错位或不整齐
                	<ul>
                    	<li>浏览器的缓存是为了让网页速度更快且顺畅. 但是，如果我们更新网页后，浏览器的缓存还是会保留旧的资料. 因此必须清除浏览器的缓存
才可以让网页更新有效. 由于有些网页的技术需要新的浏览器才可支援，因此，我们建议用户更新新的浏览器.</li>
						<li class="dns_blueWord">解决方法1：<a href="javascript:;">清除浏览器缓存</a></li>
							<!-- 清除浏览器缓存 -->
						<div class="dns_cacheMain noFloat">
				        	<h1 class="dns_Title02">清除浏览器的缓存</h1>
				        	<ul class="dns_IMG">
				            	<li><img src="/Public/images/member/cache_google01_cn.jpg"></li>
				                <li style="margin-bottom:38px"><img src="/Public/images/member/cache_google02_cn.jpg"></li>
				            </ul>
				            
				            <ul class="dns_TXT">
				            	<li style="margin-bottom:15px"><b>1.</b> 点击右上选项.</li>
				                <li style="margin-bottom:310px"><b>2.</b> 点选 ‘工具’  -  ‘清除浏览数据’.</li>
				                <li><b>3.</b> 全部勾选后点击 ‘清除浏览数据’.</li>
				            </ul>
				        </div>
                        <li class="dns_blueWord">解决方法2：<a href="javascript:;">下载最新的浏览器</a></li>
                        <!--下载最新的浏览器  -->
                        <div class="browserG">
				        	<h1>您的浏览器版本太旧</h1>
				            <ul>
				            	<li>我们的新网站已不支援您正在使用的浏览器版本。</li>
				                <li>一旦浏览器不在被支援，<b>保护您的网络安全程式</b>将不是最新的，这也会增加您被骇和资料被盗取的可能性。</li>
				                <li>我们强烈建议您下载以下最新的浏览器以便有较好的体验和保持目前最高的网络安全级别。不然，您可以继续使用我们的旧网站登录。</li>
				            </ul>
				            
				            <div class="browserBTNG noFloat">
				            	<div class="browser_ChromeBTN"><span class="browser_recommend"></span><tt>谷歌浏览器</tt><a target="_blank" href="http://www.google.cn/intl/zh-tw/chrome/browser/desktop/index.html"><span class="browser_downloadBTN">下载</span></a></div>
				                <div class="browser_FirefoxBTN"><tt>火狐浏览器</tt><a target="_blank" href="https://www.mozilla.org/zh-tw/firefox/new/#"><span class="browser_downloadBTN">下载</span></a></div>
				                <div class="browser_Safari"><tt>苹果浏览器</tt><a target="_blank" href="https://support.apple.com/zh-tw/HT204416"><span class="browser_downloadBTN">下载</span></a></div>
				            </div>
				            <h2>为什么有升级浏览器的必要？</h2>
				            <div class="browserWordG noFloat">
				            <span class="browserWord_txt01"><h3>安全性</h3><h4>新版浏览器可以更好的保护您免受诈骗，病毒，木马，网络钓鱼和其他等的威胁。而且也修正旧浏览器的安全漏洞。</h4></span>
				            <span class="browserWord_txt02"><h3>兼容性</h3><h4>有使用新技术的网站能优化画面的显示和其性能。</h4></span>
				            <span class="browserWord_txt03"><h3>速度</h3><h4>每新一代的浏览器速度会提升。</h4></span>
				            <span class="browserWord_txt04"><h3>更好的体验</h3><h4>随着新功能的增加和现有功能的延伸，您将有一个更舒适的网络体验。</h4></span>
				            </div>
				            
				            
						</div>
                    </ul>
                </li>
                <li class="dns_blueWord">3. <a href="javascript:;">如何屏幕载图？</a></li>
            </ul>
        </div>
 </div>
 <!-- 如何屏幕载图？ -->
 	<div class="dns_downMain noFloat">
    	<h1 class="dns_Title02">屏幕载图</h1>
    	<ul class="dns_IMG">
        	<li><img src="/Public/images/member/screen01_cn.jpg"></li>
            <li><img src="/Public/images/member/screen02_cn.jpg"></li>
            <li style="margin-bottom:77px"><img src="/Public/images/member/screen03_cn.jpg"></li>
        </ul>
        
        <ul class="dns_TXT">
        	<li style="margin-bottom:131px"><b>1.</b> 按 ‘PrtScn’.</li>
            <li style="margin-bottom:177px"><b>2.</b> 打开‘画图’.</li>
            <li><b>3.</b> 贴画面然后保存.</li>
        </ul>
    </div>
 <script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
 <script type="text/javascript">
 	function showDiv(){
 		$("#div_langx").toggle();
 	}
 </script>