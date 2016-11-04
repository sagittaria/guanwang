@extends('layouts.app')

@section('content')
<!--<div class="editor">
  <form method="post" action="{{ action('HomeController@update',[$article->id]) }}">
  	{{ method_field('PUT') }}
  	{{ csrf_field() }}
  	<input type="text" name="Article[title]" value="{{ $article->title }}"><br>
  	<textarea name="Article[content]" id="myEditor">{{ $article->content }}</textarea><br>
  	<input type="submit" name="提交">
  </form>
</div>-->
<div class="container editor">
  <form method="post" action="{{ action('HomeController@update',[$article->id]) }}" class="form-horizontal">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-md-2">        
        <select class="form-control" name="Article[catalog_id]" id="catalog">
          <option value="{{ $article->catalog->id }}">{{ $article->catalog->name }}</option>
          @foreach( $catalogs as $catalog)
          <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-8">
        <input class="form-control" type="text" name="Article[title]" value="{{ $article->title }}">        
      </div>
	  <button class="btn btn-primary col-md-1">发表</button>
    </div>
    <textarea class="form-control" name="Article[content]" id='myEditor'>{{ $article->content }}</textarea>
  </form>
</div>
@endsection