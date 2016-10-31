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
				<li class="title">关于纽蓝</li>
				<li><a href="/about">公司简介</a></li>				
				<li><a href="/about/2">组织结构</a></li>
				<li><a href="/about/3" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">人才战略</a></li>
				<li><a href="/about/5">联系我们</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>人才战略</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >关于纽蓝</a>
				<li>></li>
				<a >人才战略</a>
			</div>
			<div class="box" style="margin-top: 50px;">
				<div class="block">
					<li>1、以德为先</li>
				</div>
				<p>没有良好的职业道德、人生和价值观的人才，往往缺乏奉献精神，很难“将做好本职工作作为对自己的第一要求”严重时会将个人的不良倾向波及和影响到整个团队，从而给团队带来较大的管理难度和管理风险。 能力越强的员工，如果职业道德不佳，他对团队的危害性也就越大。“岗位技能可以培养，但人的道德一旦形成，就很难改善。</p>
			</div>
			<div class="box">
				<div class="block" style="background: #000000;opacity: 0.65;filter: alpha(opacity=65);">
					<li>2、务实为本</li>
				</div>
				<p style="padding: 25px 0;">任何的成功都是点滴积累的结果，务实型人才“深谙此道”，他们往往乐于从基础工作做起，一步一个脚印，这样的人才方能成为团队的“栋梁”。</p>
			</div>
			<div class="box">
				<div class="block">
					<li>3、扎实的基础</li>
				</div>
				<p>没有良好的职业道德、人生和价值观的人才，往往缺乏奉献精神，很难“将做好本职工作作为对自己的第一要求”严重时会将个人的不良倾向波及和影响到整个团队，从而给团队带来较大的管理难度和管理风险。 能力越强的员工，如果职业道德不佳，他对团队的危害性也就越大。“岗位技能可以培养，但人的道德一旦形成，就很难改善。</p>
			</div>
			<div class="box">
				<div class="block" style="background: #000000;opacity: 0.65;filter: alpha(opacity=65);">
					<li>4、认同企业文化</li>
				</div>
				<p style="padding: 20px 0;">认同企业文化与被聘后人才的稳定程度有关。人才不稳定，不但不利于团队工作的开展。而且会增加人才招聘成本，从而给企业带来不必要的负担。 识别他们是否有认同感，可以通过向其介绍企业的规章制度、有人政策、薪资政策等，看他们表现出来的认同程度。</p>
			</div>
			<div class="box">
				<div class="block">
					<li>5、较好发展潜力</li>
				</div>
				<p style="padding: 25px 0;">这里提到的最后一个标准，企业所需要的应该是这种具有较好发展潜力的人才，因为这样的人才企业所付出的成本可能不会很高，但创造的价值却是不断增长的。</p>
			</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection