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
				<li class="title">解决方案</li>
				<li><a href="/solution">生命科学</a></li>
				<li><a href="/solution/1">化工与环境</a></li>
				<li><a href="/solution/2" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">食品安全</a></li>
				<li><a href="/solution/3">能源</a></li>
				<li><a href="/solution/4">研究</a></li>
				<li><a href="/solution/5">制药</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>食品安全</h2>
			<div class="add">
				<li>当前位置:</li>
				<a>首页</a>
				<li>></li>
				<a>解决方案</a>
				<li>></li>
				<a>食品安全</a>
			</div>
			<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<h3>基因芯片扫描服务</h3>
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据。扩展后可增加新一代测序，可实现最广泛的行业领先的应用！</p>
				<a href="#">查看详情 》</a>
			</div>
			<div class="clear"></div>
			<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<h3>基因芯片扫描服务</h3>
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据。扩展后可增加新一代测序，可实现最广泛的行业领先的应用！</p>
				<a href="#">查看详情 》</a>
			</div>
			<div class="clear"></div>
			<div class="box" style="margin-bottom: 50px;">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<h3>基因芯片扫描服务</h3>
				<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据。扩展后可增加新一代测序，可实现最广泛的行业领先的应用！</p>
				<a href="#">查看详情 》</a>
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