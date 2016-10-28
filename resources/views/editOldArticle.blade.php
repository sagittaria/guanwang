@extends('layouts.app')

@section('content')
编辑旧文的界面<br>
<div class="editor">
  <form method="post" action="{{ action('HomeController@update',[$article->id]) }}">
  	{{ method_field('PUT') }}
  	{{ csrf_field() }}
  	<input type="text" name="Article[title]" value="{{ $article->title }}"><br>
  	<textarea name="Article[content]" id="myEditor">{{ $article->content }}</textarea><br>
  	<input type="submit" name="提交">
  </form>
</div>


@endsection