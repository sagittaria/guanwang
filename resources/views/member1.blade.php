@extends('layouts.origin')

@section('content')

<!--banner-->
<div id="banner">
	<img src="{{ asset('images/member_02.jpg') }}"/>
</div>
<!--banner end-->

<!--content-->
<div id="content">
	<div class="center">
		<div class="left fl">
			<ul>
				<li class="title">纽蓝成员</li>
				<li><a href="/member/1" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">晶百检测</a></li>
				<li><a href="/member/2">晶佰生物</a></li>
				<li><a href="/member/3">爱科学商城</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>晶百检测</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >纽蓝成员</a>
				<li>></li>
				<a >晶百检测</a>
			</div>
			<div class="box">				
				<img src="{{ asset('images/member1_03.jpg') }}"/>
			</div>
			<p>晶百检测始终专注于食品安全领域的检验检测、检测技术研发、咨询技术等服务。以 “严格内部管理、狠抓工作质量、提高工作效率、做到优质服务”的质量方针服务大众，凭借丰富的检验检测经验、雄厚的技术实力、全面完善的服务理念，力争成为食品安全领域最具竞争力和生产力的服务机构。公司严格按照国家对食品检测机构的要求和ISO/IEC17025国际规范进行管理及运作严格执行有关食品安全检验检测的法律法规及公司管理体系，以先进的技术、优良的装备、严密的组织、严格的要求，为客户提供准确可靠的检验数据及结果和满意周
到的服务。公司于2016年1月通过了浙江省技术监督局组织的实验室资质认定的评审工作，并取得了浙江省技术监督局颁发的CMA《食品检验机构资质认定证书》检测范围涵盖营养食品及农产品中的营养成分标签.污染物、元素、农残兽残、微生物、生物毒素、肉源性等检测。目前拥有的大型仪器有：Waters 液相质谱系统、美国热电ICP系统、美国热电原子吸收、美国热电HPLC、美国热电GC-MS、日本日立HPLC、罗氏荧光定量PCR、北京吉天原子荧光、瑞士万通双通道离子色谱仪、美国illumina基因测序系统等等。</p>
			<div class="text">				
				<li class="icon1">地址：杭州市西湖科技园振华路212号林达科技楼10层</li>
				<li class="icon2">电话：0571-81021127</li>
				<li class="icon3">传真：0571-89936641</li>
				<a href="http://www.gbiotest.com/">点击此处进入晶百检测官方网站>></a>
			</div>
		</div>
	</div>
</div>
<!--content end-->

@endsection