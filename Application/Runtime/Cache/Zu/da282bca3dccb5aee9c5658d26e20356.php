<?php if (!defined('THINK_PATH')) exit();?><html xmlns="">
	<head>
		<meta name="Robots" contect="none">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="/Public/css/mem_qa.css" type="text/css">
		<link rel="stylesheet" href="/Public/css/mem_qa_roul.css" type="text/css">
		<title>
			体育规则
		</title>
		<script language="javascript" src="/js/QA_sport.js">
		</script>
	</head>
	<body id="SPORT">
		<div class="qa_head">
			<em>
				帮助
			</em>
			<span class="close_box" onclick="window.close();">
				关闭
			</span>
		</div>
		<div id="wrapper">
			<div id="qa_nav">
				<ul>
					<li class="sport">
						体育规则
					</li>
					<li class="rule">
						<a href="<?php echo U('Old/QA_roul');?>">
							规则与条款
						</a>
					</li>
					<!--li class="wap"><a href="roul_mp.html" OnClick="window.open('/tpl/member/zh-cn/roul_mp.html','ROUL','location=no,status=no,width=680,height=500,toolbar=no,top=0,left=0,scrollbars=no,resizable=no,personalbar=yes');window.close();">Wap指南</a></li-->
					<li class="odd">
						<a href="<?php echo U('Old/QA_way');?>">
							赔率计算列表
						</a>
					</li>
					<li class="mail">
						<a href="Q<?php echo U('Old/QA_conn');?>">
							联系我们
						</a>
					</li>
				</ul>
			</div>
			<div id="main">
				<a name="top">
				</a>
				<label>
					<select name="jumpMenu" id="jumpMenu" onchange="chg_roul(this.options[this.selectedIndex].value);">
						<option value="QA_sport.html" selected="selected">
							一般体育说明
						</option>
						<option value="roul/outright.html">
							冠军
						</option>
						<option value="roul/parlays-multiples.html">
							连串过关 / 复式过关
						</option>
						<option value="roul/roul_nf.html">
							美式足球
						</option>
						<option value="roul/archery.html">
							射箭和射击
						</option>
						<option value="roul/athletic.html">
							田径
						</option>
						<option value="roul/aussie.html">
							澳式足球
						</option>
						<option value="roul/badminton.html">
							羽毛球
						</option>
						<option value="roul/baseball.html">
							棒球
						</option>
						<option value="roul/basketball.html">
							篮球
						</option>
						<option value="roul/beach-soccer.html">
							沙滩足球
						</option>
						<option value="roul/beach-volleyball.html">
							沙滩排球
						</option>
						<option value="roul/boxing.html">
							拳击 / 搏斗
						</option>
						<option value="roul/cricket.html">
							板球
						</option>
						<option value="roul/cycling.html">
							自行车
						</option>
						<option value="roul/darts.html">
							飞镖
						</option>
						<option value="roul/e-sports.html">
							电子竞技
						</option>
						<option value="roul/field-hockey.html">
							曲棍球
						</option>
						<!--option value="roul/financial-bets.html">金融投注</option-->
						<option value="roul/football.html">
							足球
						</option>
						<option value="roul/futsal.html">
							室内足球
						</option>
						<option value="roul/golf.html">
							高尔夫
						</option>
						<option value="roul/gymnastics.html">
							体操
						</option>
						<option value="roul/handball.html">
							手球
						</option>
						<option value="roul/ice-hockey.html">
							冰球
						</option>
						<option value="roul/judo.html">
							柔道、摔交、跆拳道
						</option>
						<!--<option value="roul/major-league-lacrosse.html">袋棍球</option>-->
						<option value="roul/lacrosse.html">
							长曲棍球
						</option>
						<option value="roul/medal-betting.html">
							体育/奖章投注
						</option>
						<option value="roul/motor-sports.html">
							赛车
						</option>
						<option value="roul/olympics.html">
							奥林匹克或相关事件投注
						</option>
						<option value="roul/rowing.html">
							赛艇和皮划艇
						</option>
						<option value="roul/rugby-league.html">
							橄榄球联盟
						</option>
						<option value="roul/snooker.html">
							斯诺克/台球
						</option>
						<option value="roul/softball.html">
							垒球
						</option>
						<!--<option value="roul/swimming.html">游泳</option>-->
						<option value="roul/table-tennis.html">
							乒乓球
						</option>
						<!--<option value="roul/taekwondo.html">跆拳道</option>-->
						<option value="roul/tennis.html">
							网球
						</option>
						<option value="roul/tamp.html">
							三项全能和现代五项运
						</option>
						<!--<option value="roul/ultimate-fighting.html">终极格斗锦标赛（综合格斗大赛）</option>-->
						<option value="roul/volleyball.html">
							排球
						</option>
						<option value="roul/water-polo.html">
							水球
						</option>
						<option value="roul/weightlifting.html">
							举重
						</option>
						<!--<option value="roul/wrestling.html">角力</option>-->
						<option value="roul/wintersports-winterolympics.html">
							冬季运动 &amp; 冬季奥运会 / 比赛
						</option>
					</select>
				</label>
				<div id="info">
					<!--资料区-->
					<p class="b sub">
						一般体育说明
					</p>
					<p class="b sub">
						<em>
							最后更新日期：11/07/2017
						</em>
					</p>
					<p class="b sub">
						概述
					</p>
					<p>
						此规则与条款将适用于本公司所有的投注种类。会员们有责任确保您获知所有的规则与条款，我们保留随时修改条款的权利，并且会将修改的内容公布在本网站上。公布在网站公告上的信息可作为投注附加的规则与条款，若有任何差异或矛盾的地方，将以附加信息为准。
					</p>
					<p>
						本公司对此条款视为公平公正的，若您有任何意见或疑问，您可以联络我们的客服部，我们的客服团队将热诚协助每位客户，并确保能及时友善的解决您的问题。对于任何错误或争论，我们的客服团队将竭力提供服务。
					</p>
					<p>
						所有的条款用于在会员与公司之间建立一般的原则。对产生的任何争议，希望通过该条款让双方都得到满意的解决方案。
					</p>
					<p class="b sub">
						1. 一般体育规则
					</p>
					<p>
						所有在本公司进行的投注都需要依照以下规则与条款处理。在个别体育项目里注明的规则将视为体育主要规则:
					</p>
					<ul style="list-style:decimal;">
						<li>
							所有投注项目的最高和最低投注额将由公司决定，如有任何更改无需提前通知。
						</li>
						<li>
							会员申请账户时需提供正确的个人信息，本公司对提供伪造或错误信息的账户将不负任何责任。
						</li>
						<li>
							会员将全权负责账户提交的所有交易。在投注前请仔细检查选项，一旦投注提交成功后，将无法更改或取消。公司对会员自身原因造成的遗漏或重复投注不负任何责任。会员可以在"交易记录"中查看详情确保所有提交的注单已成功。
						</li>
						<li>
							在任何投诉中，如果在公司的数据库中没有存储任何记录，公司将不接受也不认可任何会员提供的复印件或单据。
						</li>
						<li>
							公司保留在任何时候关闭或冻结会员账号的权利。
						</li>
						<li>
							公司保留在任何时候暂停/中止会员对任何盘口进行投注的权利。
						</li>
						<li>
							公司保留对已预先知道赛果的投注作出取消的权利。如果由于"滚球现场"延迟而引起盘口的赔率错误，此期间的注单将视为无效。
						</li>
						<li>
							关于赛事的信息，例如日期，时间,比分，数据统计，红牌和中立场等信息仅供会员参考，公司对提供此信息的准确性不负任何责任。
						</li>
						<li>
							如果比赛或赛事取消，中断或延迟并且没有在官方指定开球时间的36小时内重新开始，所有该场赛事的投注即被视为无效且取消，除非在个别体育规则里另有指定注明。
							某些无条件终止的盘口将会相应地结算。单独的体育规则中对此类盘口的结算程序做了说明。公司取消该赛事所有注单的结果被视为最终决定，无需参考官方赛事裁判或相关部门的决定。连串投注将会继续按照注单剩余赛事的赛果结算，该取消赛事的赔率将会按照1计算。
						</li>
						<li>
							如果比赛或是赛事取消，所有该场赛事的投注即被视为无效且取消，除非在个别体育规则里另有指定注明。对于取消的定义和处理本公司拥有最终解释权。
						</li>
						<li>
							如果对其它语言版本的信息或球赛队名有争议，请以英文网站的名称为准。
						</li>
						<li>
							由以下事件造成的任何损失，公司不赋予任何责任:
							<ul style="list-style:lower-alpha;">
								<li>
									公司的网站、服务器或网络中断。
								</li>
								<li>
									公司数据库、服务器丢失信息或信息遭受破坏。
								</li>
								<li>
									不法分子攻击网站、服务器或网络供应商。
								</li>
								<li>
									进入网站时由于网络供应商原因造成的网络缓慢。
								</li>
							</ul>
						</li>
						<li>
							如果系统发生不可预知的事件而导致已投注的注单出现争议，公司将会根据数据库的资料为准。
						</li>
						<li>
							如果对此规则与条款的内容有任何疑义，请以公司的解释为准。
						</li>
					</ul>
					<p class="b sub">
						2. 赛果与派彩
					</p>
					<ul style="list-style:decimal;">
						<li>
							赛果均在赛事结束后判定，除非在个别体育规则里另有注明。赛果公布72小时后，若对任何赛果有争议，本公司将不认可。在赛果公布72小时内,除了任何体育纪律委员会所重新裁决之赛果，本公司只会修正人为、系统或参考赛果的相关网页失误等原因的错误。
						</li>
						<li>
							投注通常在赛事结束后派彩。但考虑到会员的利益，某些投注会在官方公布赛事结果之前就进行派彩。如果赛事出现取消，中断或延迟的情况，将会另作说明。为此，公司保留对此而造成的错误进行更改的权利。
						</li>
						<li>
							派彩是根据官方来源或相关体育权威机构判定的结果为准。如果无法从相关体育权威机构判定结果，公司将会根据其他数据来源判定结果进行派彩，同时此数据会在被认定为合理的前提下。
						</li>
						<li>
							所有的交易将以公司最新备份数据记录为准，公司不接纳任何投诉或争议，除非会员提供交易记录的截图或影印证据，否则公司的数据记录将作为最终证明。
						</li>
					</ul>
					<p class="b sub">
						3. 滚球类型投注规则
					</p>
					<p>
						滚球投注是指对正在进行比赛的赛事进行投注。注单会在比赛开始后开始接收并且在盘口关盘后停止所有交易。个别体育会开出多个滚球种类的盘口供投注。
					</p>
					<ul style="list-style:decimal;">
						<li>
							所有滚球投注均需要遵守系统验收程序。这可能会导致每笔投注延迟确认或出现投注失败的情况。
						</li>
						<li>
							所有在注单上显示“待确认”的字眼则表示注单正在等待系统的判断投注是否成功。这表示注单在等待被确认或可能被取消。
						</li>
						<li>
							在赛事有事件发生或出现其他特殊情况时，所有待确认中的注单将不被确认并视为投注失败。此事件可包含进球，红卡，点球或技术上问题等等。(其他例子并不一一详尽列出)
						</li>
						<li>
							在滚球投注中，本公司需强调以下条款，确保投注是按照正确的时间、金额和在正确的情况下进行:
							<ul style="list-style:lower-alpha;">
								<li>
									比赛赛果和入球时间以本公司网站公布的为准，我们不参考任何其它官方网站，体育网站，或"即时比分"等网站公布的赛果或入球时间。
								</li>
								<li>
									如果有合理的理由怀疑投注是在比赛时某个事件发生后才提交的，本公司将保留取消此注单且不需提供任何理由和证明的权利。
								</li>
								<li>
									如果出现网站无法更新比分、赔率或盘口的情况，本公司保留权利取消所有未确认且处理中的注单。
								</li>
							</ul>
						</li>
					</ul>
					<p class="b sub">
						4. 有关时间规则
					</p>
					<ul style="list-style:decimal;">
						<li>
							如比赛在法定时间提前进行，在比赛开始前的投注依然有效，在比赛开始后的所有投注均视为无效(滚球投注另作别论)。
						</li>
						<li>
							足球赛事的正常完场时间包括任何球员伤停补时。
						</li>
						<li>
							除非在个别体育规则另有注明，加时得分则不计算在正常完场时间内。
						</li>
					</ul>
					<p class="b sub">
						5. 并列名次规则
					</p>
					<ul style="list-style:decimal;">
						<li>
							一场赛事的盘口产生2名或者以上的获胜者，那么赢利金额将减少。计算方法是将本金除以获胜者人数，然后乘以原赔率。这部分本金及赢利将返还给会员，剩余的本金将输掉。
						</li>
						<li>
							例如：
						</li>
						<ul style="list-style:none;">
							<li>
								第一阶段-您投注5英镑，赔率15/1（可能的赢利金额为75英镑）
							</li>
							<li>
								第二阶段-您投注的对象与另一名对象同时获胜
							</li>
							<li>
								第三阶段-您本金的一半将会乘以原赔率计算，剩下的部分将输掉。因此2.5英镑乘以15/1=37.50英镑+2.5英镑的返还的本金就是总赢利。
							</li>
							<li>
								如果有2名以上的获胜者，注金将会分成相应的等份。
							</li>
							<li>
								实际上在2名获胜者的情况下，本金的一半（50%）将乘以原赔率，剩余的一半（50%）将输掉。
							</li>
							<br>
						</ul>
						<li>
							多冠军规则并不始终适用，如果我们最终决定赛事的冠军可由获得的比分决定。（例如小组赛事）
						</li>
					</ul>
					<p class="b sub">
						6. 场地变更
					</p>
					<ul style="list-style:decimal;">
						<li>
							如果比赛场地有变更（主客队调换），所有此注单将被取消。
						</li>
						<li>
							本公司保留权利取消因更换场地而可能对赛事结果有影响的注单，例如：网球比赛更换场地表面。
						</li>
						<li>
							若比赛原定在中立场进行改为在非中立场进行且在本公司判定下对比赛没有影响，注单将继续保持有效。
						</li>
						<li>
							在个别体育项目里若有特别注明将覆盖以上规则。
						</li>
					</ul>
					<p class="b sub">
						7. 错误
					</p>
					<ul style="list-style:decimal;">
						<li>
							本公司力求错误发生的机率保持最低，但若有注单显然是在盘口有错误的情况下提交，我们将保留取消此注单的权利。错误的情况包括：
							<ul style="list-style:lower-alpha">
								<li>
									赔率错误 （和市场上提供的有明显差别）；
								</li>
								<li>
									盘口信息错误， 例如：让球数，大小数等；
								</li>
								<li>
									赛事信息错误，例如：参赛队名或队员， 赛事日期或开赛时间。
								</li>
							</ul>
						</li>
						<li>
							若因遇到以上的情况而需取消任何注单，我们会尽可能的与客户取得联系，有关讯息也会及时在公告栏里发布。
						</li>
					</ul>
					<p class="b sub">
						8. 异常投注行为
					</p>
					<ul style="list-style:decimal;">
						<li>
							对任何怀疑在投注时涉嫌作弊或破坏本公司投注平台的会员，公司有权在毫无警告或通知下取消此会员所有的注单并且冻结账户。异常行为包括使用任何设备，自动设备，软件，程序等方式干涉本网站的运作。
						</li>
					</ul>
					<div class="to_top">
						<a href="#top"><span>回最上层</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="qa_foot">
		</div>
	</body>

</html>