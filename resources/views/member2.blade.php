@extends('layouts.origin')

@section('content')

<!--banner-->
<div id="banner">
	<img src="{{ asset('images/members.jpg') }}"/>
</div>
<!--banner end-->

<!--content-->
<div id="content">
	<div class="center">
		<div class="left fl">
			<ul>
				<li class="title">纽蓝成员</li>
				<li><a href="{{ url('/member/1') }}">晶百检测</a></li>
				<li><a href="{{ url('/member/2') }}" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">晶佰生物</a></li>
				<li><a href="{{ url('/member/3') }}">爱科学商城</a></li>
			</ul>
		</div>
		<div class="right fr">
			<h2>晶佰生物</h2>
			<div class="add">
				<li>当前位置:</li>
				<a >首页</a>
				<li>></li>
				<a >纽蓝成员</a>
				<li>></li>
				<a >晶佰生物</a>
			</div>
			<hr>
			<div class="pic">
				<img src="{{ asset('images/member2_03.jpg') }}"/>
			</div>			
			<div class="text">				
				<li class="icon1">地址：杭州市西湖科技园振华路212号林达科技楼10层</li>
				<li class="icon2">电话：0571-89936641</li>
				<li class="icon3">传真：0571-89936654</li>
				<a href="http://igeneseq.com/">点击此处进入晶佰生物官方网站>></a>
			</div>
		</div>
	</div>
</div>
<!--content end-->

@endsection