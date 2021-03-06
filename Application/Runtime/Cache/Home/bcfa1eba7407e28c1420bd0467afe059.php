<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/css/my_account.css">
<div class="acc_leftMain">
    <a name="top">
    </a>
    <!--header-->
    <div class="acc_header noFloat">
        <h1>
            体育规则
        </h1>
    </div>
    <!--main-->
    <div class="acc_rules_DataMain">
        <div class="acc_rules_header noFloat">
            <h1>
                选择体育项目
            </h1>
            
            <ul class="acc_selectSP" onclick="showOption()">
                <li id="first" class="acc_selectSP_first">
                    一般体育说明
                </li>
                <ul  id="soptions" class="acc_selectSP_options" style="display:none;" tabindex="100">
                    <li onclick="chgPage('general');" class="On">
                        一般体育说明
                    </li>
                    <li onclick="chgPage('outright');">
                        冠军
                    </li>
                    <li onclick="chgPage('multiples');">
                        连串过关 / 复式过关
                    </li>
                    <li onclick="chgPage('usa_football');">
                        美式足球
                    </li>
                    <li onclick="chgPage('archery');">
                        射箭和射击
                    </li>
                    <li onclick="chgPage('athletic');">
                        田径
                    </li>
                    <li onclick="chgPage('aussie');">
                        澳式足球
                    </li>
                    <li onclick="chgPage('badminton');">
                        羽毛球
                    </li>
                    <li onclick="chgPage('baseball');">
                        棒球
                    </li>
                    <li onclick="chgPage('basketball');">
                        篮球
                    </li>
                    <li onclick="chgPage('beach_soccer');">
                        沙滩足球
                    </li>
                    <li onclick="chgPage('beach_volleyball');">
                        沙滩排球
                    </li>
                    <li onclick="chgPage('boxing');">
                        拳击 / 搏斗
                    </li>
                    <li onclick="chgPage('cricket');">
                        板球
                    </li>
                    <li onclick="chgPage('cycling');">
                        自行车
                    </li>
                    <li onclick="chgPage('darts');">
                        飞镖
                    </li>
                    <li onclick="chgPage('e_sports');">
                        电子竞技
                    </li>
                    <li onclick="chgPage('field_hockey');">
                        曲棍球
                    </li>
                    <!--<li onClick="chgPage('financial_bets');">金融投注</li>-->
                    <li onclick="chgPage('football');">
                        足球
                    </li>
                    <li onclick="chgPage('futsal');">
                        室内足球
                    </li>
                    <li onclick="chgPage('golf');">
                        高尔夫球
                    </li>
                    <li onclick="chgPage('gymnastics');">
                        体操
                    </li>
                    <li onclick="chgPage('handball');">
                        手球
                    </li>
                    <li onclick="chgPage('ice_hockey');">
                        冰球
                    </li>
                    <li onclick="chgPage('judo');">
                        柔道、摔跤、跆拳道
                    </li>
                    <li onclick="chgPage('lacrosse');">
                        长曲棍球
                    </li>
                    <li onclick="chgPage('medal_betting');">
                        体育/奖章投注
                    </li>
                    <li onclick="chgPage('motor_sports');">
                        赛车
                    </li>
                    <li onclick="chgPage('olympics');">
                        奥林匹克或相关事件投注
                    </li>
                    <li onclick="chgPage('rowing');">
                        赛艇和皮划艇
                    </li>
                    <li onclick="chgPage('rugby_league');">
                        橄榄球联盟
                    </li>
                    <li onclick="chgPage('snooker');">
                        斯诺克/台球
                    </li>
                    <li onclick="chgPage('softball');">
                        垒球
                    </li>
                    <li onclick="chgPage('table_tennis');">
                        乒乓球
                    </li>
                    <li onclick="chgPage('tennis');">
                        网球
                    </li>
                    <li onclick="chgPage('tamp');">
                        三项全能和现代五项运动
                    </li>
                    <li onclick="chgPage('volleyball');">
                        排球
                    </li>
                    <li onclick="chgPage('water_polo');">
                        水球
                    </li>
                    <li onclick="chgPage('weightlifting');">
                        举重
                    </li>
                    <li onclick="chgPage('wintersports');">
                        冬季运动 &amp; 冬季奥运会 / 比赛
                    </li>
                </ul>
            </ul>
        </div>
        <!--文字区-->
        <div class="acc_rules_TXTG">
            <span class="acc_rules_date">
                最后更新日期: 06/08/2014
            </span>
            <h1>
                一般体育说明
            </h1>
            <h2>
                概述
            </h2>
            <p>
                此规则与条款将适用于本公司所有的投注种类。会员们有责任确保您获知所有的规则与条款，我们保留随时修改条款的权利，并且会将修改的内容公布在本网站上。公布在网站公告上的信息可作为投注附加的规则与条款，若有任何差异或矛盾的地方，将以附加信息为准。
            </p>
            <p>
                本公司对此条款视为公平公正的，若您有任何意见或疑问，您可以联络我们的客服部，我们的客服团队将热诚协助每位客户，并确保能及时友善的解决您的问题。对于任何错误或争论，我们的客服团队将竭力提供服务。
            </p>
            <p>
                所有的条款用于在会员与公司之间建立一般的原则。对产生的任何争议，希望通过该条款让双方都得到满意的解决方案。
            </p>
            <h2>
                1. 一般体育规则
            </h2>
            <p>
                所有在本公司进行的投注都需要依照以下规则与条款处理。在个别体育项目里注明的规则将视为体育主要规则:
            </p>
            <ul>
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
                    <ul>
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
            <h2>
                2. 赛果与派彩
            </h2>
            <ul>
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
            <h2>
                3. 滚球类型投注规则
            </h2>
            <p>
                滚球投注是指对正在进行比赛的赛事进行投注。注单会在比赛开始后开始接收并且在盘口关盘后停止所有交易。个别体育会开出多个滚球种类的盘口供投注。
            </p>
            <ul>
                <li>
                    会员在投注滚球时，如果赛场中出现以下几种情况，会员的投注将会维持在'危险球-待确认' 的状态。危险球的定义有:
                    <ul>
                        <li>
                            12码罚球
                        </li>
                        <li>
                            自由球(攻方在守方禁区附近的自由球)
                        </li>
                        <li>
                            角球/掷入球(攻方靠近守方禁区的掷入球)
                        </li>
                        <li>
                            A队向B队禁区附近进攻(或是B队在A队的禁区附近进攻)
                        </li>
                    </ul>
                </li>
                <li>
                    投注提交时如果遇到危险球的情况，注单上会出现"危险球-待确认"的状态。这表示注单在等待被确认或可能被取消。危险期一旦通过，并且期间没有任何显著会影响赛事状态的情况，注单就会被确认。
                </li>
                <li>
                    如果危险期内遭到进球或其他影响赛事状况的情况，比如: 红卡，所有待确认注单将会被取消。
                </li>
                <li>
                    在滚球投注中，本公司需强调以下条款，确保投注是按照正确的时间、金额和在正确的情况下进行:
                    <ul>
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
            <h2>
                4. 有关时间规则
            </h2>
            <ul>
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
            <h2>
                5. 并列名次规则
            </h2>
            <ul>
                <li>
                    在某特定赛事如果产生两名或以上的获胜者，赢利将会减少。注单派彩将按照投注本金除以获胜者人数后乘上赔率，再减去投注本金。方程式为：[（投注本金
                    / 获胜者人数）x 赔率] - 投注本金。
                </li>
                <li>
                    如果某场赛果产生了三名获胜者，投注本金将除以三， 会员的赢利便是以三分之一投注本金来计算。以下是演算例子：
                </li>
                <ul>
                    <li>
                        投注本金 = 100
                    </li>
                    <li>
                        获胜者人数 = 3
                    </li>
                    <li>
                        赔率 = 1.90
                    </li>
                    <li>
                        因此，[(100 / 3) x 1.90] - 100 = -36.66
                    </li>
                </ul>
            </ul>
            <h2>
                6. 场地变更
            </h2>
            <ul>
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
            <h2>
                7. 错误
            </h2>
            <ul>
                <li>
                    本公司力求错误发生的机率保持最低，但若有注单显然是在盘口有错误的情况下提交，我们将保留取消此注单的权利。错误的情况包括：
                    <ul>
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
            <h2>
                8. 异常投注行为
            </h2>
            <ul>
                <li>
                    对任何怀疑在投注时涉嫌作弊或破坏本公司投注平台的会员，公司有权在毫无警告或通知下取消此会员所有的注单并且冻结账户。异常行为包括使用任何设备，自动设备，软件，程序等方式干涉本网站的运作。
                </li>
            </ul>
        </div>
    </div>
    <a href="#top">
        <div id="topDiv" class="acc_backTopBTN" style="top: 624px;">
            回最上层
        </div>
    </a>
</div>
<script type="text/javascript" src="/Public/js/jquery-1.12.2.js"></script>
<script type="text/javascript">
    function showOption(){
        $(".acc_selectSP_options").show();
    }
    $(".acc_selectSP_options li").click(function(event) {
        var zhi = $(this).html();
        $(this).parents(".acc_selectSP_options").siblings(".acc_selectSP_first").text(zhi);   
        $("#soptions").hide(); 
        //阻止下事件冒泡到li中
         event.stopPropagation();
    });
</script>