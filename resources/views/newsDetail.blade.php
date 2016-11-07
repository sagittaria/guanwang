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
				<li><a href="/news/1">公司动态</a></li>
				<li><a href="/news/2">活动信息</a></li>
				<li><a href="/news/3">行业动态</a></li>
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
			<hr>
			<h3>{{ $article->title }}</h3>
			<li>发布日期:{{ substr($article->updated_at,0,-9) }}</li>
			<img src="{{ '/upload/'.mb_substr($article->content,-36) }}"/>
			<div id="article-content">{!! $content !!}</div>
		</div>
	</div>
</div>
<!--content end-->
@endsection