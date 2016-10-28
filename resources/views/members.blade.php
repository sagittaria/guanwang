@extends('layouts/origin')

@section('content')
<!--banner-->
<div id="banner">
	<img src="images/member_02.jpg"/>
</div>
<!--banner end-->

<!--content-->
<div id="content">
	<div class="center">
		<div class="left fl">
			<ul>
				<li class="title">纽蓝成员</li>
				<li><a href="member/1">晶百检测</a></li>
				<li><a href="member/2">晶佰生物</a></li>
				<li><a href="member/3">爱科学商城</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>纽蓝成员</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >纽蓝成员</a>
			</div>
			<div class="box">
				<a href="member/1"><img src="images/member_07.jpg"/></a>
				<a href="member/1" style="padding: 50px 0;">杭州晶百检测技术有限公司</a>
			</div>
			<div class="box1">
				<a href="member/2"><img src="images/member_05.jpg"/></a>
				<a href="member/2" style="padding: 50px 0;">杭州晶佰生物技术有限公司</a>
			</div>
			<div class="box">
				<a href="member/3"><img src="images/member_12.jpg"/></a>
				<a href="member/3" style="padding: 50px 0;">爱科学商城</a>
			</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection