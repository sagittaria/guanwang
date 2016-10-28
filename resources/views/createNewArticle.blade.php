@extends('layouts.app')

@section('content')
	新增文章的界面
  <div class="editor">
    <form action="{{ action('HomeController@store') }}" method="post">
    	{{ csrf_field() }}
    	<input type="text" name="title"><br>
    	<textarea name="content" id="myEditor"></textarea></div>
    	<input type="submit" name="提交">
    </form>
  <br>
@endsection

