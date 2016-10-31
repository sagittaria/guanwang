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
				<li><a href="/about/3">人才战略</a></li>
				<li><a href="/about/5" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">联系我们</a></li>
			</ul>			
		</div>
		<div class="right fr">
			<h2>联系我们</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >关于纽蓝</a>
				<li>></li>
				<a >联系我们</a>
			</div>
			<div class="text">
				<li class="icon">杭州纽蓝科技有限公司</li>
				<li class="icon1">地址：杭州市西湖区振华路210号2幢2楼</li>
				<li class="icon2">电话：0571-86800217</li>
				<li class="icon3">传真：0571-86800217</li>
				<li class="icon4">邮编：310011</li>
			</div>
			<div class="pic">
				<img src="{{ asset('images/contact_03.jpg') }}"/>
			</div>
			<div class="msg1">
				<img src="{{ asset('images/contact_24.jpg') }}"/>
				<li>全国服务热线</li>
				<li class="con">400-0717-168</li>
			</div>
			<div class="msg2">
				<img src="{{ asset('images/contact_21.jpg') }}"/>
				<li>诚邀您与我们交流</li>
				<li class="con">微信二维码</li>
			</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection