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
				<li><a href="/about/2" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">组织结构</a></li>
				<li><a href="/about/3">人才战略</a></li>
				<li><a href="/about/5">联系我们</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>组织结构</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >关于纽蓝</a>
				<li>></li>
				<a >组织结构</a>
			</div>
			<div class="pic">
				<img src="{{ asset('images/about2_03.jpg') }}"/>
			</div>			
		</div>
	</div>
</div>
<!--content end-->
@endsection