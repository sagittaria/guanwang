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
				<li class="title">新闻中心</li>
				@foreach($catalogs as $catalog)
					<li><a href="/news/{{ $catalog->id }}"
					@if($selected_catalog_name==$catalog->name)
						style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;"
					@endif
					>{{ $catalog->name }}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="right fr">
			<h2>{{ $selected_catalog_name }}</h2>
			<div class="add">
				<li>当前位置:</li>
				<a>首页</a>
				<li>></li>
				<a>新闻中心</a>
				<li>></li>				
				<a>{{ $selected_catalog_name }}</a>
			</div>
			@foreach($articles as $article)
				<div class="box">
				<img src="{{ asset('images/about1_03.jpg') }}"/>
				<a href="{{ url('/news/detail/'.$article->id) }}">{{ $article->title }}</a>
				<li>{{ substr($article->updated_at,0,-9) }}</li>
				<p>
				@if(mb_strlen($article->content)>170)
					{{ mb_substr($article->content,0,160) }}...
				@else
					{{  $article->content }}
				@endif
				</p>
			</div>
			@endforeach


			<!--
			<div style="clear:both;"></div>
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
			-->
		</div>
	</div>
</div>
<!--content end-->
@endsection