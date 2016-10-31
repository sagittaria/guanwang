@extends('layouts/origin')

@section('content')
<!--banner-->
<div id="banner">
	<img src="{{ asset('images/about_02.jpg') }}"/>
</div>
<!--banner end-->

<!--content-->
<div id="content">
	<div class="center">
		<div class="left fl">
			<ul>
				<li class="title">新闻中心</li>
				<li><a href="/news">公司动态</a></li>
				<li><a href="/news/1" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">活动信息</a></li>
				<li><a href="/news/2">行业动态</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>活动信息</h2>
			<div class="add">
				<li>当前位置:</li>
				<a>首页</a>
				<li>></li>
				<a>新闻中心</a>
				<li>></li>				
				<a>活动信息</a>
			</div>
			<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<a href="About4.html">基因芯片扫描服务</a>
				<li>2016-2-13</li>				
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据...</p>
			</div>
			<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<a href="About4.html">第五届浙江省色谱质谱分析技术青年论坛圆满落幕</a>
				<li>2016-2-13</li>				
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据...</p>
			</div>
			<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<a href="About4.html">第五届浙江省色谱质谱分析技术青年论坛圆满落幕</a>
				<li>2016-2-13</li>				
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据...</p>
			</div>
			<div class="box" style="margin-bottom: 50px;">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<a href="About4.html">第五届浙江省色谱质谱分析技术青年论坛圆满落幕</a>
				<li>2016-2-13</li>				
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据...</p>
			</div>
			<div class="page">
				<li><a href="#">首页</a></li>
				<li><a href="#">上一页</a></li>
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">下一页</a></li>
				<li><a href="#">末页</a></li>
			</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection