<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>
    </title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            font-family: '宋体', 'Calibri';
            font-size: 12pt;
        }

        p {
            padding: 0px;
            margin: 0px;
            text-align: left;
        }

        span {
            word-break: break-all;
            /*word-wrap: break-word;*/
            display: inline;
            text-align: left;
            padding: 0px;
            margin: 0px;
            text-indent: 0;
        }

        div:first-child span {
            /*text-indent: 24pt;*/
        }

        div {
            word-break: break-all;
            /*word-wrap: break-word;*/
            display: block;
        }
    </style>
</head>
<body>
<div>
    <div style="line-height:20pt; margin:0pt; orphans:0; text-align:center; widows:0">
                <span style="font-weight:bold;font-size: 16pt">
                    个人消费贷款合同
                </span>
    </div>
    <br>
    <div style="line-height:20pt; margin:0pt; orphans:0; text-align:center; widows:0">
                <span style="font-weight:bold">
                    合同编号：<?php echo $data['contract_no']; ?>
                </span>
    </div>
    <br>
    <div style="font-weight:bold">
        特别提醒：在确认签署本合同之前，请借款人务必仔细阅读本合同所有条款，特别是以粗体或下划线标注的条款，该类条款含有免除或者限制合同另一方责任的内容。一旦借款人确认或签署本合同，即意味着借款人已充分理解本合同所有条款的含义及相应的法律后果，同意以数据电文形式订立本合同并接受本合同约束。
    </div>
    <br>
    <div style="font-weight:bold">
        借款人在<?php echo $data['intermediary']; ?>（以下简称“居间人”）的网站、<span>APP<span>或微信平台上一经点击“同意”或“确认”或者勾选本合同或者进行电子签名即视为本人签署，并视为借款人全部阅读、完全认可并不可撤销地承诺遵守本合同全部内容。
    </div>
    <br>
    <div style="font-weight:bold">
        贷款人有权根据情况需要对本合同内容进行变更，变更的原因包括但不限于国家法律、法规及其他规范性文件的规定变化。因所涉客户数量众多，故贷款人在对本合同内容进行变更时，不另行单独通知借款人，该等变更会以官方网站、居间人网站或其他适当方式予以公布；
        <span style="font-weight:bold; text-decoration:underline">
                    借款人在本合同内容公告变更后继续使用本消费贷款服务，表示借款人已充分阅读、理解并确认接受变更后的合同内容，并遵循变更后的合同内容而使用本贷款服务；若借款人不同意修改后的合同内容，借款人应在变更事项公告后7个工作日内通知贷款人停止使用本消费贷款服务，逾期未通知则视为借款人同意修改后的合同内容。
                </span>
        经贷款人、居间人与借款人协商一致，签约各方对本合同条款的理解完全一致，不存在异议。各方均认可本合同所采用签署（包括电子签名）方式的法律效力并认可本电子合同的形式合法性、保存合法性、证据真实性和签名可靠性。一经借款人签署，即视为借款人全部阅读、完全认可并不可撤销地承诺遵守本合同全部内容；居间人所提交的个人消费贷款合同一经进入贷款人贷款平台信息系统，就表示居间人已确认本合同。
    </div>
    <br>
    <div style="font-weight:bold; text-decoration:underline">
        签约各方签署本合同后并不导致本合同立即生效，仅在经过贷款人审核通过并将贷款资金发放给借款人指定的为其提供教育培训服务的教育培训机构的银行账户时，本合同生效。
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    贷款人：<?php echo $data['fcs_lender']; ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    地址：<?php echo $data['fcs_address']; ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    借款人：<span><?php echo $data['full_name']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    身份证号：<span><?php echo $data['identity_number']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    工作单位：<span><?php echo $data['work_name']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    单位地址：<span><?php echo $data['work_address']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    户籍地址：<span><?php echo $data['address']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    居住地址：<span><?php echo $data['home_address']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    联系电话：<span><?php echo $data['user_phone']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    电子邮箱：<span><?php echo $data['email']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    还款账户账号：<span><?php echo $data['bank_account']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    还款账户开户行：<span><?php echo $data['bank_name']; ?></span>
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    居间人：<?php echo $data['intermediary']; ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    法定代表人：<?php echo $data['intermediary_authorized_representative']; ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    地址：<?php echo $data['intermediary_address']; ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    鉴于：
                </span>
    </div>
    <br>
    <div>
                <span>
                    1、贷款人是具有经营小额贷款业务资质并合法存续的有限责任公司。贷款人为基于消费或经营需求的个人客户提供信用贷款服务，推出了灵活多样的特色金融服务产品。
                </span>
    </div>
    <br>
    <div>
                <span>
                    2、借款人为年满18周岁且具有完全民事行为能力的中华人民共和国公民，且借款人为通过居间人运营管理的<?php echo $data['intermediary_product']; ?>平台申请借贷的客户（包括但不限于其网站、<span>移动APP<span>、微信公众账号、<span>H5页面</span>等），并承诺其提供给居间人的信息是完全真实的，准确的，完整的；
                </span>
    </div>
    <br>
    <div>
                <span>
                    3、借款人有借款需求，贷款人亦同意出借，双方有意成立借贷关系。
                </span>
    </div>
    <br>
    <div>
                <span>
                    4、本协议项下，贷款人、借款人合称为双方。为此，借款人向贷款人申请借款，居间人在双方的委托下提供居间等服务。双方及居间人根据《合同法》及有关法律法规，经友好协商，签订如下协议，以共同遵照履行：
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div style="line-height:20pt; margin:0pt; orphans:0; widows:0">
                <span style="font-weight:bold">
                    1、定义与解释
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.1 个人消费贷款：贷款人向借款人提供的仅限于消费用途的贷款，借款人可以使用该笔贷款购买符合条件的商品或服务。未经贷款人书面同意，借款人不得将消费贷款挪作他用。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    1.2 本合同：本合同由本合同条款、贷款人贷款平台信息系统和居间人平台系统记录的与借款人相关的所有信息（包括但不限于贷款申请信息、贷款核准信息及相关变更信息等）以及贷款人贷款平台各项规则组成，各组成部分均具有法律效力，彼此内容有冲突的，以时间在后的信息为准。
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.3 中国法令：指中华人民共和国的法律、行政法规、最高人民法院的司法解释以及金融监管机构的规章、规定与命令。
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.4 应付款额：指借款人累计已逾期和在当月还款日应当偿还的全部金额，包括但不限消费贷款本金、利息、罚息、滞纳金、手续费及其他应付款项（如有）。
                </span>
    </div>
    <br>
    <div>
                <span style="text-align:left;">
                    1.5 还款日：指借款人所获得的消费贷款每月的固定还款时间。
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.6 套现：指通过虚假交易、虚开价格、现金退货等方式取得本合同项下的消费贷款后，交易对手自行或通过第三方向借款人直接支付现金的情形。
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.7 初始贷款本金：经贷款人审批通过的借款人的贷款金额。
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.8 商品或服务提供方：本合同商品或服务提供方指【<?php echo $data['org_name'] ?>】。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    1.9 在校大学生：具备普通全日制学籍的在校生。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    2、贷款发放
                </span>
    </div>
    <br>
    <div>
                <span>
                    2.1 借款人通过居间人平台向贷款人提出借款申请，贷款人对借款人的该申请进行审核后，最后确定授予借款人的贷款金额、期限、利率如下所示：
                </span>
    </div>
    <br>
    <div>
                <span>
                    贷款本金：人民币【<?php echo $data['borrow_money'] ?>】元。
                </span>
    </div>
    <br>
    <div>
                <span>
                    贷款期限：自本协议生效之日起【<?php echo $data['repay_need'] ?>】个月（下称“分期期数”）。其中宽限期【<?php echo $data['grace_period'] ?>】个月，宽限期内每期仅归还当期利息。
                </span>
    </div>
    <br>
    <div>
                <span>
                    月利率：【<?php echo $data['rate'] ?>%】/月
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    2.2 为保证本贷款用于指定用途，借款人不可撤销地授权贷款人将本贷款直接支付到借款人指定的为其提供教育培训服务的教育培训机构【<?php echo $data['org_name'] ?>】的银行账户，本合同中指定为教育培训机构【<?php echo $data['org_name'] ?>】与贷款人签署的战略合作协议中所指定的银行账户，账户信息如下：
                </span>
    </div>
    <br>
    <div>
                <span>
                    户名：<?php echo $data['org_full_name'] ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    开户行：<?php echo $data['org_bank_name'] ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    账号：<?php echo $data['org_bank_account'] ?>
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    本贷款一经贷款人审批通过并执行放款至【<?php echo $data['org_name'] ?>】的指定银行账户，即视为贷款人已经完成放款义务，且相应款项已被借款人提取，借款人须按时偿付贷款本金及相应息费。
                </span>
    </div>
    <br>
    <div>
        <span></span>
        2.3 贷款人有权审核借款人相关信息并自主决定是否同意本贷款。借款人同意
        <span style="font-family:SimSun;  font-weight:bold">
                    签署授权委托书
                </span>
        并不可撤销地授权贷款人向中国人民银行个人信用信息基础数据库以及其他经政府有权部门批准合法设立的第三方信息库查询借款人信用报告、财产、资信等其他相关情况以及报送借款人信用记录。
        <span style="font-family:SimSun;  font-weight:bold">
                    如贷款人查询中发现借款人信用不良或借款人在向贷款人申请贷款后存在同时向其它机构申请同一贷款目的贷款的情况，贷款人有权据此停止本次拨款。
                </span>
    </div>
    <br>
    <div style="font-family:SimSun;  font-weight:bold">
        鉴于贷款人已接入人民银行征信中心查询系统，借款人同意并授权贷款人按照中国人民银行的有关规定查询和如实上传其征信数据，如果借款人未能按照合同约定的时间足额归还各期应还的本息款项，将在征信系统留下逾期记录，并严重影响借款人的信用记录及将来的银行融资。
    </div>
    <br>
    <div>
                <span>
                    2.4 除非有第三方确实且充分的相反证据，否则贷款人内部系统生成的记账凭证是本合同项下贷款发放及本息费偿还情况的有效证据。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    3、贷款息费
                </span>
    </div>
    <br>
    <div>
                <span>
                    3.1 贷款利率以本合同记载为准，自放款日计收。借款人按照贷款人推送给借款人的还款计划表来进行还款。利息及其他费用（如有）一经产生，借款人即须按照本合同和还款计划表的约定按时偿付，且贷款人收取后不因任何原因而退还或补偿。
                </span>
    </div>
    <br>
    <div>
        <span></span>
        3.2 借款人未能按期足额偿还任何到期应付的贷款本金、利息、费用或/及其他应付款项时，应就应付款项
        <span style="font-weight:bold; text-decoration:underline;text-indent: 0pt;">
                    按照每日【0.01%】（逾期罚息利率），
                </span>
        按日加付自款项到期日起至借款人实际偿还日止以实际天数计算的罚息；同时，应
        <span style="font-weight:bold; text-decoration:underline">
                    按逾期次数加付逾期滞纳金，每次为人民币【1】元。
                </span>
        借款人使用贷款的用途不符合合同约定或法律法规或金融规章规定的，应立即偿还上述违约使用的贷款本息、费用及其他应付款项。
    </div>
    <br>
    <div>
                <span>
                    3.3 借款人应就尚未偿还的本金按照贷款利率按月支付本金及利息，贷款期限届满时应结清最后一期到期利息和本金。
                </span>
    </div>
    <br>
    <div>
                <span>
                    3.4 借款人应以初始贷款本金为基数，按约定方式的利率和费率支付分期利息、罚息等相关费用，计收方式分为按月计收及其他方式：
                </span>
    </div>
    <br>
    <div>
                <span>
                    （1）按月计收：借款人应于每个还款日支付利息等相关费用（月利息=当前贷款本金余额&times;月利率）；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （2）其他方式：在本合同其他条款或附件中约定。
                </span>
    </div>
    <br>
    <div>
                <span>
                    3.5 贷款到期、提前还款或贷款被贷款人依据本合同约定提前收贷的，若在贷款到期日、提前还款日或提前收贷日，借款人没有依约结清全部贷款余额的本金、利息、罚息和费用及/或其他应付款项的，贷款将继续按月记账；借款人逾期偿还当期应付款项的，则除应对全部应付款项按本合同约定按日计收罚息外，每逾期还款一次，应继续按本合同约定计收逾期滞纳金；
                </span>
    </div>
    <br>
    <div>
                <span>
                    3.6 借款人提前还款或贷款人提前收贷时，借款人应在提前还款日或提前收贷日补足贷款使用期间产生的应付未付的利息等相关费用。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    4、还款方式及提前还款、退课
                </span>
    </div>
    <br>
    <div>
                <span>
                    4.1 还款方式：【<?php echo $data['repayment']; ?>】；
                </span>
    </div>
    <br>
    <div>
                <span>
                    借款人指定的还款账户信息如下：
                </span>
    </div>
    <br>
    <div>
                <span>
                    户名：<?php echo $data['full_name'] ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    开户行：<?php echo $data['bank_name'] ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    账号：<?php echo $data['bank_account'] ?>
                </span>
    </div>
    <br>
    <div>
                <span>
                    （上述账户信息以借款人通过居间人平台系统成功绑定的银行卡信息为准）。
                </span>
    </div>
    <br>
    <div>
        <span></span>
        贷款用途：仅用于
        <span style="font-weight:bold;">
                    教育培训费。借款人使用本合同项下贷款消费时，应保留相应的消费凭据（包括但不限于发票、收据、购物凭证等），在贷款人要求提供时，借款人应当提供。
                </span>
    </div>
    <br>
    <div>
                <span>
                    上述借款及服务明细中列明的还款到期日等根据实际放款日进行调整（其他相关日期应相应调整），以贷款人贷款平台信息系统上发布或更新的还款明细为准。借款人应按等额本息的还款方式偿还贷款本金及全部利息（如有）、费用（如有），即借款人应于每个还款日以相等的总金额偿还贷款本金和贷款利息（如有），并支付相关费用（如有）。
                </span>
    </div>
    <br>
    <div>
                <span style="text-decoration:underline">
                    宽限期月还款金额=月利息（如有）+ 相关费用（如有）
                </span>
        <br>
        <span style="text-decoration:underline">
                    非宽限期月还款金额= 当期应偿还本金 + 月利息（如有）+ 相关费用（如有）
                </span>
    </div>
    <br>
    <div>
                <span>
                    4.2 本合同项下贷款首个还款日为放款日次月15日，此后每月15日为当月还款日。最后一个还款日为贷款期限届满日。贷款核准确认信息对还款日另有规定的，以贷款核准确认信息确定的还款日执行。具体的还款安排以贷款人系统记录为准。
                </span>
    </div>
    <br>
    <div>
        <span></span>
        4.3
        为及时偿还贷款本息费，借款人应在贷款期内始终维持其还款帐户状态正常且可用余额充足，如借款人在申请贷款时无法提供符合贷款人要求的还款账户，借款人应按要求办理指定还款账户绑定事宜。借款人不可撤销地授权贷款人有权委托第三方机构代收/代扣本合同项下贷款本息费及其他应付款项。
        <span style="font-weight:bold; text-decoration:underline">
                    借款人须在还款日当日（北京时间【中午12：00】）之前将足额款项存入还款账户供贷款人委托的第三方机构按时扣收；如遇还款日为非工作日，还款时间顺延，借款人应提前存入足额款项。借款人在此不可撤销地授权贷款人委托的第三方机构于还款日或该日后从还款账户自行扣收全部到期应付款项。
                </span>
        如因余额不足、卡片状态不正常等任何原因导致未能成功扣款，由此产生的逾期及其他损失和不利后果由借款人自行承担。扣款通知发出后借款人对扣收有异议的，应当在扣款通知送达之日起7个工作日内以书面形式向贷款人提出。
    </div>
    <br>
    <div style="line-height:150%; margin:0pt; orphans:0; text-align:justify; widows:0">
        <span></span>
        4.4 借款人要求提前归还本合同项下全部或部分款项的，经贷款人同意的，借款人应在结清全部已到期款项后，于提前还款日向还款账户中存入足额款项，款项包括但不限于剩余未还本金、利息（如有）、罚息（如有）等相关费用，并支付
        <span style="font-weight:bold">
                    提前还款手续费（提前还款手续费按照当期月还款金额归还后的剩余未还本金的【2%】支付）。
                </span>
        借款人提前还款申请一经提出即不可撤销，经贷款人同意后，借款人未能于约定的提前还款日足额还款产生逾期的，贷款人不退还任何已收利息、费用及相关款项，并有权对借款人未能足额偿还的款项收取逾期罚息同时采取催收手段。
    </div>
    <br>
    <div style="line-height:150%; margin:0pt; orphans:0; text-align:justify; widows:0">
                <span>
                    4.5  借款人在贷款发放之日起，可向贷款人申请退课。贷款发放15天（自然日）内为犹豫期，犹豫期内发起退课申请的，由借款人联系学校，并由学校将贷款本金全额退还给贷款人，本贷款合同自动终止；贷款发放第16天（自然日）起，发起退课申请的，由借款人按照教育培训机构的退课流程偿还当前剩余未还本金、利息（退课当日不足一个还款周期的，按照一期计算）、退课手续费（放款后16~30天退课手续费 = 当期月还款金额归还后的剩余未还本金*1%；放款后31天及以上退课手续费 = 当期月还款金额归还后的剩余未还本金*3%）、罚息等相关费用，如退课时有未使用完的学费，由借款人与教育培训机构【<?php echo $data['org_name'] ?>】协商解决。
                </span>
    </div>
    <br>
    <div style="line-height:150%; margin:0pt; orphans:0; text-align:justify; widows:0">
                <span>
                    4.6   借款人如果发生15天及以上的逾期时，贷款人有权视同借款人已发起退课申请，贷款人可向教育培训机构【<?php echo $data['org_name'] ?>】要求对借款人进行停课、扣留相关证照等处理，由借款人偿还当前剩余未还本金、利息（退课当日不足一个还款周期的，按照一期计算）、退课手续费（放款后16~30天退课手续费 =  当期月还款金额归还后的剩余未还本金*1%；放款后31天及以上退课手续费 = 当期月还款金额归还后的剩余未还本金*3%）、罚息等相关费用，如退课时有未使用完的学费，由借款人与教育培训机构【<?php echo $data['org_name'] ?>】协商解决。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    4.7 在不对已办理的本合同项下业务中的借款人权益产生重大不利影响的前提下，贷款人保留对上述计息、计费与还款规则进行调整的权利。该等调整一经贷款人做出并以贷款人官方网站公告、营业网点公告或者客户服务热线提示等方式公布，或者以电话或者短信方式通知借款人，即于贷款人确定的日期正式生效。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    4.8 借款人在此不可撤销地授权并确认：贷款人或贷款人委托的第三方机构有权随时从借款人在指定银行开立的任何账户中自行扣划应还未还款项用于清偿应付款项，扣收不足的部分借款人仍应继续清偿。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    5、承诺与保证
                </span>
    </div>
    <br>
    <div>
                <span>
                    5.1除在本合同其他条款中已做出的承诺与保证之外，借款人在此还向贷款人作出以下承诺与保证：
                </span>
    </div>
    <br>
    <div>
                <span>
                    （1）借款人具有完全的民事行为能力，有订立和履行本合同的资格和能力，符合中国法律法规要求的贷款主体要求。同时，借款人不能是在校大学生；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （2）借款人具有有效身份证明、固定住址、信用良好，有能力按期偿还贷款本息费，借款人在本合同项下的债务以其个人财产和夫妻共同财产承担清偿责任，借款人已获得其配偶（如有）的同意；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （3）借款人已在申请信息中向贷款人如实、完整地说明了其个人有关信息，借款人将按合同约定的用途使用贷款，在本合同终止之前，除非事先经过贷款人正式明确的书面同意，否则借款人不会就本贷款所购买的商品/服务进行转让、出租、出借、或以其他任何方式进行变现处置；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （4）借款人已在申请信息中说明并如实填写了现居住地及工作单位所在地的详细地址；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （5）借款人订立和履行本合同，并不违反任何对其有约束力的法律、法规、规章、行政命令或生效的司法裁判仲裁裁决，不违反任何对其有约束力的合同或承诺，不侵犯任何第三方的合法权益；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （6）借款人已根据贷款人的要求对其学历信息、职业信息（包含是否为在校学生）、单位信息、资产、负债情况进行说明，借款人保证上述情况说明及材料（如有）全部真实、合法、完整、有效，不存在任何隐瞒、虚假、欺诈或误导，否则贷款人有权对借款人申请业务按拒绝处理或宣布本合同及合同项下贷款提前到期，提前收回贷款；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （7）如发生对借款人财务情况构成威胁或对借款人履行本合同项下义务产生不利影响的任何其他事件，包括但不限于涉及或可能涉及经济纠纷、财务状况恶化等，借款人均应在该等情形发生之日起五个工作日内通知（包括但不限于网点通知、客服热线通知等）贷款人。
                </span>
    </div>
    <br>
    <div>
                <span>
                    （8）在本合同终止之前，借款人变更姓名、户籍所在地、经常居住地、通讯地址、邮政编码、住宅电话、工作单位、单位电话、手机号码或其他个人信息的，应于变更后五个工作日内书面通知（包括但不限于网点通知、客服热线通知等）贷款人；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （9）如有任何损害或可能损害贷款人在本合同项下权益的事实发生或可能发生，借款人应尽力采取补救措施毫不迟延地通知贷款人；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    （10）借款人知悉，理解并确认贷款人非商品的提供者，贷款人与商品或服务提供方之间无任何广告、保证或经销关系。在借款人因商品或服务提供方所提供的商品或服务存在质量问题等原因与商品或服务提供方产生纠纷时，借款人应当与商品或服务提供方自行协商解决，概与贷款人无关，借款人不得以任何商品或服务纠纷为由拒绝偿还贷款人贷款本金及相关费用；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    （11）借款人知悉、理解并确认，借款人与贷款人的借贷法律关系已经合法成立并独立于借款人与培训机构的教育培训服务提供法律关系。如为借款人提供教育培训服务的机构出现倒闭、停业、跑路等不能正常提供或停止提供双方所约定的教育培训服务情形的，借款人应当与教育培训机构自行协商解决，概与贷款人无关，借款人不得以此为由拒绝偿还贷款人贷款本息及其他相关费用。
                </span>
    </div>
    <br>
    <div>
                <span>
                    （12）借款人在此向贷款人保证买卖合同真实、合法及有效，不存在任何违法、无效或可撤销的情形。若买卖合同或其任何内容不存在或依法不成立、不生效、无效、被撤销、被变更或被终止，则：
                </span>
        <span>
                    a）如果本合同被依法解除、撤销或终止，借款人应向贷款人返还全部贷款本金，借款人应同时向贷款人支付以贷款本金为基数按逾期利率和自贷款发放之日起至借款人足额返还之日止的实际天数计算的利息作为补偿，上述义务仍属于借款人对贷款人负有的债务。并且
                </span>
        <span>
                    b）无论贷款人是否有权向商品或服务提供方追索及是否向该等商品或服务提供方行使追索权，借款人均有义务直接向贷款人清偿全部债务，并且，借款人还应承担违约责任。
                </span>
    </div>
    <br>
    <div>
                <span>
                    （13）借款人应妥善保管本人的账号、密码、绑定的手机号码、手机校验码等与办理及使用贷款人借款过程中的一切有关信息。借款人应确保不向其他任何人泄露有关账号信息和密码。对于因账号、密码泄露所致的损失，由借款人自行承担。如借款人发现有他人冒用或盗用本人账号及密码或任何其他未经合法授权之情形时，应立即以有效方式通知贷款人，要求暂停相关服务。同时，借款人理解贷款人对相应的请求采取行动需要合理期限，在此之前，贷款人对已执行的指令及/或所导致的借款人损失不承担任何责任。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    6、违约与扣款清偿
                </span>
    </div>
    <br>
    <div>
                <span>
                    6.1 借款人出现下列任一项或多项情形时，视为违约：
                </span>
    </div>
    <br>
    <div>
                <span>
                    （1）借款人未能完全适当地履行其在本合同项下的任何承诺、保证、义务或责任；借款人没有按期足额偿还任一期的贷款本金、利息、分期手续等相关费用及/或其他应付款项的；借款人未按照合同约定用途使用贷款资金的；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （2）借款人死亡、被宣告死亡、失踪或被宣告失踪，或者成为限制民事行为能力人或丧失民事行为能力；借款人被刑事监禁、或发生重大疾病、重大事故等可能影响借款人偿付能力的情况；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （3）借款人的任何其他贷款、担保、赔偿承诺或其它偿债责任到期不能履行，或已进入诉讼/仲裁强制执行程序，或借款人的房屋、车辆等财产被公检法、行政机关查封、冻结中扣押的；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （4）借款人明确表示或以自己的行为表明其将不履行本合同项下的义务；借款人拒绝或阻挠贷款人对贷款使用情况进行监督检查；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （5）借款人使用虚假的身份、财产证明或提供虚假资料或隐瞒重要事实；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （6）借款人与其他自然人、法人或经济组织签订有损贷款人权益的合同的；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （7）其他对借款人资信情况、清偿能力或对贷款人债权产生严重不利影响的事件或行为。
                </span>
    </div>
    <br>
    <div>
                <span>
                    （8）借款人的其他任何债务在到期（包括被宣布提前到期）后未清偿，或者借款人不履行应当承担的担保责任或其他义务，已经或可能影响借款人在本合同项下义务履行的；
                </span>
    </div>
    <br>
    <div>
                <span>
                    （9）贷款人认为有风险的其他情况。
                </span>
    </div>
    <br>
    <div>
                <span>
                    6.2 借款人发生本合同项下任一违约行为时，贷款人有权要求借款人支付罚息、逾期滞纳金、违约金，并承担损失责任。同时贷款人还有权同时采取包括但不限于下述措施：
                </span>
        <span>
                    （1）提高贷款利率；
                </span>
        <span>
                    （2）减少贷款期限；
                </span>
        <span>
                    （3）要求借款人提供贷款人认可的担保；
                </span>
        <span>
                    （4）停止发放尚未划付的贷款；
                </span>
        <span>
                    （5）随时宣布本合同项下的全部或部分债务立即到期，要求借款人立即清偿，且无需事先向借款人发出书面通知；
                </span>
        <span>
                    （6）解除本合同；
                </span>
        <span>
                    （7）采取公告、委托代理机构、提起诉讼等方式进行清收；
                </span>
        <span>
                    （8）要求借款人偿还债务并承担贷款人为实现债权而实际发生的费用，包括但不限于诉讼/仲裁费用、律师费用、调查取证费用、差旅费及其他合理费用；
                </span>
        <span>
                    （9）法律法规规定、本合同约定或贷款人认为必要的其他措施。
                </span>
    </div>
    <br>
    <div>
                <span>
                    6.3 本合同的终止或解除并不影响借款人与贷款人之间已经发生的债权债务关系，借款人仍须偿还贷款人剩余贷款和相应息费，并承担贷款人实现债权的费用，包括但不限于律师费。对于贷款人在本合同项下行使权利而获得的任何款项，应按下列顺序清偿贷款人的债权：
                </span>
        <span>
                    （1）实现债权和担保权益的费用以及借款人应承担的其他费用；
                </span>
        <span>
                    （2）损害赔偿金、补偿金和违约金；
                </span>
        <span>
                    （3）逾期滞纳金；
                </span>
        <span>
                    （4）复利和罚息；
                </span>
        <span>
                    （5）分期手续费等相关费用；
                </span>
        <span>
                    （6）利息；
                </span>
        <span>
                    （7）本金；
                </span>
        <span>
                    （8）其他应付款项。贷款人有权单方变更上述清偿顺序。本合同项下应付款项与借款人在贷款人其他业务项下（如有）应付款项均已到期的，其清偿顺序由贷款人确定。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    7、居间人权利义务
                </span>
    </div>
    <br>
    <div>
        <span></span>
        7.1 居间人负责初步审核客户所提供贷款信息及资料，居间人将保证借款人申请资料的完整性和原始性；居间人应当确保电子文件及电子签名的真实性、合法性、有效性。
        <span style="font-weight:bold">
                    借款人在此不可撤销地授权并同意：为审核信贷资质及办理贷款之用途，居间人有权使用借款人提供的贷款信息及资料，并提供给贷款人。
                </span>
    </div>
    <br>
    <div>
                <span>
                    7.2 居间人应在借款人签署合同前就本合同条款所约定的内容向借款人进行充分披露与提示，以确保借款人知悉并理解本合同所约定的内容，对相关费用的收取清楚并认可；
                </span>
    </div>
    <br>
    <div>
                <span>
                    7.3 居间人负责对借款人提供还款提醒服务，在每期还款日提前1—3天内，贷款人授权居间人代表贷款人向借款人提供至少两次还款提醒服务，提醒方式包括但不限于电子邮件、电话通知、手机短信、微信通知等。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    8、通知与送达
                </span>
    </div>
    <br>
    <div>
        <span></span>
        8.1 贷款人在本合同项下
        <span style="font-weight:bold">
                    涉及诉讼、仲裁或者公证的各类文书及本合同权利义务告知、确认和变化的或其他必要通知，应按本协议中借款人提供的地址以书面形式，或网站公示的方式发出，以书面方式发出的，收到方应当签收。
                </span>
        发出的通知或文件，如采用网站公示的方式发出，则以贷款人系统记录发出公示的时间即为送达时间，如采用亲自或委托递交的方式，则以被通知方或其收件代理人签收之日为送达日期，如采用邮政特快专递或同城（包括市区与郊区）挂号邮件进行邮递的方式，则以邮件寄出之日的次日为送达日期；如采用电子邮件的方式，则贷款人系统记录发出电子邮件的时间即为送达时间；如采用电话通知、手机短信的方式，则贷款人系统记录的电话接通、发出手机短信的时间即为送达时间。依照上述规定而确定的送达日期与被通知方实际收到的日期或被通知方正式签收的日期不一致时，以其中最早的日期为送达日期。
    </div>
    <br>
    <div>
                <span>
                    8.2 借款人变更个人信息而未按本合同规定通知贷款人的，贷款人按照本合同记载的借款人信息所发出的任何通知或文件，无论是否最终为借款人所收悉，一经发出即应被视为已于发出之日的次日有效送达借款人并为其所知悉。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    9、信息使用及披露
                </span>
    </div>
    <br>
    <div>
                <span>
                    借款人同意：贷款人有权按照中国法令或征信机构要求，将有关本合同的信息和借款人提供的其他信息，录入中国人民银行个人信用信息基础数据库以及其他经政府有权部门批准合法设立的信息库，供具有适当资格的单位/个人查询和使用；当借款人发生本合同下的违约时，贷款人有权根据借款人的违约情况酌情决定公开借款人的违约信息，并为催收借款人欠款之目的将有关信息提供催收机构。
                </span>
    </div>
    <br>
    <div>
                <span>
                    借款人同意，贷款人及其关联公司有权合理使用借款人信息，包括但不限于向借款人推荐贷款人及其关联公司的贷款产品等。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    10、转让
                </span>
    </div>
    <br>
    <div>
                <span>
                    10.1 未经贷款人事先以书面方式同意，借款人不得单独或共同将其在本合同项下的任何权利、义务转让给第三方，也不得在其权利上设定担保及/或设立信托。
                </span>
    </div>
    <br>
    <div>
                <span>
                    10.2 贷款人有权将其在本合同下的权益转让给第三方、设定担保及/或设立信托。但贷款人转让权利应以在公开媒体、贷款人网站上发布公告或以本合同约定的通知方式告知借款人。
                </span>
        <span style="font-weight:bold; text-decoration:underline">
                    借款人同意贷款人有权自行或委托权益受让人代贷款人履行债权转让/代偿的通知义务。
                </span>
        <span style="font-weight:normal">
                    借款人应按照本合同的约定向贷款人及权益受让人和受益人继续承担责任。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    11、免责条款
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.1 贷款人或软（硬）件系统出现下列任一状况而无法正常运作，致使无法履行本合同义务，贷款人不承担任何违约或赔偿责任，该状况包括但不限于：
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.1.1 系统网站维护期间；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.1.2 电信设备出现故障不能进行数据传输的；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.1.3 因台风、地震、海啸、洪水、停电、战争、恐怖袭击等不可抗力之因素，造成贷款人不能提供约定服务的；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.1.4 由于黑客攻击、电信部门和其他有信息技术依赖的相关部门、企事业单位技术调整或故障、网站升级、银行方面的问题等原因而造成的服务中断或者延迟；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold; text-decoration:underline">
                    11.2 本合同有效期内，因国家相关主管部门颁布、变更的法令、政策导致贷款人不能提供约定服务的，不视为其违约，各方可根据相关的法令、政策变更合同内容或提前终止本合同，在此情况下，借款人已经使用信用贷款服务而尚未到期或尚未偿还的任何款项（包括服务费和其他费用），视为立即到期，借款人应立即归还，否则贷款人仍有权按照本合同约定采取合理的救济措施。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    12、适用法律与争议解决
                </span>
    </div>
    <br>
    <div>
                <span>
                    本合同适用中国法令。本合同项下及与之有关的一切争议，未能友好协商解决的，任何一方均有权将争议提交贷款人注册地有管辖权的人民法院提起诉讼。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    13、附则
                </span>
    </div>
    <br>
    <div>
                <span>
                    13.1 借款人为同贷款人订立本合同，而在本合同签订之前向贷款人提供的申请、承诺、保证、陈述与说明对借款人仍有约束力。
                </span>
    </div>
    <br>
    <div>
                <span>
                    13.2 本合同的任何条款或内容被依法撤销或被认定为无效时，其它条款和内容的效力不受影响，仍为有效。
                </span>
    </div>
    <br>
    <div>
                <span>
                    13.3 在贷款人的债权尚未得到全部清偿前，借款人出现逾期等任何违约行为时，贷款人在任何时间所给予的宽容、宽限或延缓行使权利，均不损害、影响或限制贷款人应享的一切权利，亦不能解释为贷款人对任何违约行为的许可，更不能视为贷款人放弃现在或将来对上述违约行为采取行动的权利。
                </span>
    </div>
    <br>
    <div>
                <span>
                    13.4 本合同未尽事宜，以贷款人官方网站公告、营业网点公告的其他规则约定及借款人签署的贷款人其他相关文件为准。
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    14、信息查询授权
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    借款人在此不可撤销地授权贷款人按照国家相关规定采集符合法律法规规定的借款人个人信息及包括信贷信息在内的正常信用信息、不良信用信息、履约情况信息、行为数据信息等（以下统称“个人信息”）等，并可以向依法设立的征信机构、资信评估机构或有关法律、监管机构许可的类似机构（以下统称“信用机构”）或从贷款人关联方、为本合同项下服务提供必要技术和服务的合作方（以下简称“合作方”）以及其他有关机构（包括但不限于法院、公积金、社保、税务、民政、物流、通信运营商、电子商务平台、互联网平台等第三方机构）查询以上个人信息。借款人再次不可撤销地授权贷款人可以根据国家有关规定通过信用机构或合作方或其他有关机构查询、打印、保存符合法律法规规定的借款人个人信息。上述信息可用于包括但不限于下列范围：
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （1）审核借款人的贷款申请；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （2）审核借款人作为担保人：
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （3）对已发放的个人信贷进行贷后风险管理；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （4）借款人向贷款人申请或办理的其他业务；
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    （5）其他合法合规的用途。
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    贷款人签章：
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    居间人签章：
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    借款人签章：
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    &nbsp;
                </span>
    </div>
    <br>
    <div>
                <span>
                    合同签订日期：<?php echo date('Y年m月d日'); ?>
                </span>
    </div>
    <br>
    <div>
                <span style="font-weight:bold">
                    &nbsp;
                </span>
    </div>
    <br>
</div>
<br>
</body>
</html>