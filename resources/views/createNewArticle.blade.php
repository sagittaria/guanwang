@extends('layouts.app')

@section('content')
<!--
  <div class="editor">
    <form action="{{ action('HomeController@store') }}" method="post">
    	{{ csrf_field() }}
    	<input type="text" name="title"><br>
    	<textarea name="content" id="myEditor"></textarea></div>
    	<input type="submit" name="提交" class="btn btn-primary">
    </form>
  <br>
-->  
<div class="container editor">
  <form method="post" action="{{ action('HomeController@store') }}" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-md-2">        
        <select class="form-control" name="catalog_id" id="catalog">
          @foreach( $catalogs as $catalog)
            <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
          @endforeach
        </select>
      </div>
	  <div class="col-md-8">        
        <input class="form-control" type="text" id="title" name="title">
      </div>
		<button class="btn btn-primary col-md-1">发表</button>
	</div>
    <textarea class="form-control" name="content" id='myEditor'></textarea>
  </form>
</div>
@endsection