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
				<li><a href="{{ url('member/1') }}">晶百检测</a></li>
				<li><a href="{{ url('member/2') }}">晶佰生物</a></li>
				<li><a href="{{ url('member/3') }}" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">爱科学商城</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>爱科学商城</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >纽蓝成员</a>
				<li>></li>
				<a >爱科学商城</a>
			</div>
			<h3>爱科学商城介绍</h3>
			<p>爱科学商城是杭州纽蓝科技旗下的国内优秀的实验用品一站式综合采购平台。爱科学商城成立于2016年,秉承“质量第一,客户至上”的宗旨,致力于实验室仪器、常用设备、消耗品服务。主要经营各种化学分析,光学仪器,物性测试及各个行业领域专用仪器类；清洗、消毒,天平,计量器,制样、消解,分离、萃取,纯化,混合分散,恒温、加热、干燥,粉碎,合成、反应,制冷,各种泵及液体处理14个类别的实验室常用设备,试剂、标物,计量仪器,常规耗材,仪器耗材,防护用品5个类别的消耗品。目前商城已有Metrohm、Rephile、Agilent、labnet的浙江总代,并与Thermo、Waters,PE,天美,Brand,eppendorf,梅特勒,IKA,Merck,Ohaus,Sartorius,Schott,梅里埃,HACH等20多个国内外品牌建立长期合作关系,为广大客户提供更广阔的产品选择空间。我们的宗旨,只要您实验需要的,不管是仪器,还是耗材或是配件,在我们商场您都能找到您满意的产品,我们优质的产品为您的实验保驾护航。</p>
			<div class="text">
				<li class="icon2">电话：0571-89936641</li>
				<a href="http://www.iscimart.com/">点击此处进入爱科学官方网站>></a>
			</div>
		</div>
	</div>
</div>
<!--content end-->

@endsection