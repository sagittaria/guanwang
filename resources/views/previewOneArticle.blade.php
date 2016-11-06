@extends('layouts.app')

@section('content')
<div class="container">
<h3>{{ $article->title }}&nbsp;<small>发布日期:{{ substr($article->updated_at,0,-9) }}</small></h3>
  <div id="article-content">{!! $content !!}</div>
</div>
@endsection