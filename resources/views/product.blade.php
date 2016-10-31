@extends('layouts/origin')

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
				<li class="title">产品与服务</li>
				<li><a href="/product" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">产品分类</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>产品分类</h2>
			<div class="add">
				<li>当前位置:</li>
				<a href="index.html">首页</a>
				<li>></li>
				<a href="Product.html">产品与服务</a>
				<li>></li>
				<a href="Product.html">产品分类</a>
			</div>
			<div class="box-left">
				<div class="box">
					<a href="#" class="title">化学分析仪器</a>
					<div class="clear"></div>
					<a href="#">色谱</a>
					<li>丨</li>
					<a href="#">光谱</a>
					<li>丨</li>
					<a href="#">质谱</a>
					<li>丨</li>
					<a href="#">电化学仪器</a>
					<li>丨</li>
					<a href="#">元素分析仪</a>
					<li>丨</li><br />
					<a href="#">水份测定仪</a>
					<li>丨</li>
					<a href="#">其他化学分析仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">物性测试</a>
					<div class="clear"></div>
					<a href="#">粒度仪</a>
					<li>丨</li>
					<a href="#">热分板仪</a>
					<li>丨</li>
					<a href="#">流变仪、粘度计</a>
					<li>丨</li>
					<a href="#">试验机</a>
					<li>丨</li>
					<a href="#">表界面物理测试仪</a>
					<li>丨</li>
					<a href="#">燃烧测定仪</a>
					<li>丨</li>
					<a href="#">测厚仪</a>
					<li>丨</li>
					<a href="#">环境试验箱</a>
					<li>丨</li>
					<a href="#">其他物性测试仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">生命科学仪器</a>
					<div class="clear"></div>
					<a href="#">生化/分子生物</a>
					<li>丨</li>
					<a href="#">生物工程设备</a>
					<li>丨</li>
					<a href="#">临床检验仪器</a>
					<li>丨</li>
					<a href="#">其他生命科学仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">实验室常用设备</a>
					<div class="clear"></div>
					<a href="#">清洗、消毒</a>
					<li>丨</li>
					<a href="#">天平、计量器</a>
					<li>丨</li>
					<a href="#">制样、消解</a>
					<li>丨</li>
					<a href="#">分离、萃取纯化设备</a>
					<li>丨</li>
					<a href="#">混合、分散</a>
					<li>丨</li>
					<a href="#">恒温、加热、干燥</a>
					<li>丨</li>
					<a href="#">粉碎合成、反应</a>
					<li>丨</li>
					<a href="#">制冷</a>
					<li>丨</li>
					<a href="#">泵</a>
					<li>丨</li>
					<a href="#">液体处理设备</a>
					<li>丨</li>
					<a href="#">气体发生器</a>
					<li>丨</li>
					<a href="#">其他实验室常用设备</a>
				</div>
				<div class="box">
					<a href="#" class="title">技术服务</a>
					<div class="clear"></div>
					<a href="#">维修</a>
					<li>丨</li>
					<a href="#">维保</a>
					<li>丨</li>
					<a href="#">搬迁</a>
					<li>丨</li>
					<a href="#">培训</a>
					<li>丨</li>
					<a href="#">咨询</a>					
				</div>
			</div>
			<div class="box-right">
				<div class="box">
					<a href="#" class="title">光学仪器</a>
					<div class="clear"></div>
					<a href="#">电子显微镜</a>
					<li>丨</li>
					<a href="#">光学显微镜</a>
					<li>丨</li>
					<a href="#">光学测量仪</a>
					<li>丨</li>
					<a href="#">光学实验设备</a>
					<li>丨</li>
					<a href="#">其他光学仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">行业专用仪器</a>
					<div class="clear"></div>
					<a href="#">药物检测</a>
					<li>丨</li>
					<a href="#">石油分析</a>
					<li>丨</li>
					<a href="#">农业和食品</a>
					<li>丨</li>
					<a href="#">动植物生理生态仪器</a>
					<li>丨</li>
					<a href="#">纺织行业</a>
					<li>丨</li>
					<a href="#">包装行业</a>
					<li>丨</li>
					<a href="#">煤炭行业</a>
					<li>丨</li>
					<a href="#">建材行业</a>
					<li>丨</li>
					<a href="#">新能源、新材料</a>
					<li>丨</li>
					<a href="#">其他行业专用仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">环境监测仪器</a>
					<div class="clear"></div>
					<a href="#">水质分析仪</a>
					<li>丨</li>
					<a href="#">气体检测仪</a>
					<li>丨</li>
					<a href="#">便携检测设备</a>
					<li>丨</li>
					<a href="#">辐射测量</a>
					<li>丨</li>
					<a href="#">其他环境监测仪器</a>
				</div>
				<div class="box">
					<a href="#" class="title">试剂/耗材</a>
					<div class="clear"></div>
					<a href="#">一般试剂</a>
					<li>丨</li>
					<a href="#">高纯试剂</a>
					<li>丨</li>
					<a href="#">基准试剂</a>
					<li>丨</li>
					<a href="#">标准品</a>
					<li>丨</li>
					<a href="#">生化试剂</a>
					<li>丨</li>
					<a href="#">其他试剂</a>
					<li>丨</li>
					<a href="#">色谱耗材</a>
					<li>丨</li>
					<a href="#">光谱耗材</a>
					<li>丨</li>
					<a href="#">质谱耗材</a>
					<li>丨</li>
					<a href="#">电化学仪器耗材</a>
					<li>丨</li>
					<a href="#">元素分析仪耗材</a>
					<li>丨</li>
					<a href="#">水份测定仪耗材</a>
					<li>丨</li>
					<a href="#">其他仪器耗材</a>
				</div>
				<div class="box">
					<a href="#" class="title">纽蓝产品</a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection