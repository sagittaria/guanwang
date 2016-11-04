@extends('layouts/origin')

@section('content')
<!--banner-->
<div id="banner">
	<img src="{{ asset('images/news.jpg') }}"/>
</div>
<!--banner end-->

<!--content-->
<div id="content">
	<div class="center">
		<div class="left fl">
			<ul>
				<li class="title">公司动态</li>
				<li><a href="/news">公司动态</a></li>
				<li><a href="/news/1">活动信息</a></li>
				<li><a href="/news/2">行业动态</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>公司动态</h2>
			<div class="add">
				<li>当前位置:</li>
				<a>首页</a>
				<li>></li>				
				<a>公司动态</a>
			</div>
			<h3>基因芯片扫描服务（Illumina兼容）</h3>
			<li>发布日期:2016年01月18日</li>
			<img src="{{ asset('images/about4_01.jpg') }}"/>
			<h4>基因芯片扫描平台</h4>
			<li>Hiscan芯片扫描仪：</li>
			<p>强大的芯片扫描仪，扩展后可增加新一代测序，实现最广泛的行业领先的应用。</p>
			<li>仪器介绍：</li>
			<p>HiScan系统是一套技术领先，专业的芯片扫描系统，支持快速，灵敏和精确的illumina芯片基因分析产品的成像。与iScan功能类似，该系统具有高信噪比、高敏感性、精确的检测限制、广泛的动力学范围从而可获得极高品质的数据。扩展后可增加新一代测序，可实现最广泛的行业领先的应用！</p>
			<li>产品优势：</li>
			<li>1. 数据质量一流</li>
			<p>结合高性能激光器，光学和检测系统，该扫描仪的高信噪比，高灵敏度，极低的检测下限和宽广的动力范围，均保障了其出众的数据质量。</p>
			<li>2. 高通量的数据读取</li>
			<p>BeadArray 产品在密度方面的进步，提高了全基因组分型的基因组覆盖率﹑细胞遗传学和CNV检测的分辨率，以及基因表达﹑DNA 甲基化和基因分型产品的样本处理量。HiScan 系统能够快速处理密度最高的多样本芯片，可以在数分钟内完成原本数小时才能完成的微珠芯片扫描 ，使得实验可以更快的速度完成整项研究。</p>
			<li>3. 应用灵活</li>
			<p>兼容各种形式，各类应用和自动化选项以轻松提高产量。样本处理过程可以选择自动化操作以提高通量，扫描仪的自动进样功能可以进行全天24小时不间断自动扫描。</p>
			<li>4. 完全集成</li>
			<p>与LIMS，AutoLoader2.×,自动移液装置，分析软件和其他下游应用无缝集成。通过全自动LIMS 控制的iScan系统可以减少项目工作人员负担，减少每天处理成千上万个样本的时候最小化造成的额外消耗的错误.</p>
		</div>
	</div>
</div>
<!--content end-->
@endsection