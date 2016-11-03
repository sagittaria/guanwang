@extends('layouts.app')

@section('content')

@if(count($articles) >0)
<div class="container">
<ul style="list-style-type:none;">
    @foreach ($articles as $article)
    <li style="margin-bottom:24px;">
        <h4>
			<a class="btn btn-primary btn-xs" href="{{ action('HomeController@edit',[$article->id]) }}">编辑</a> 
            [{{ $article->catalog->name }}] {{ $article->title }} &nbsp;&nbsp;<small>{{ $article->updated_at }}</small>
            <form action="{{ action('HomeController@destroy',[$article->id]) }}" method="POST" style="display: inline;">  
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs">删除</button>
            </form>

        </h4>
        <p>
            @if(mb_strlen($article->content)>180)
                {{ mb_substr($article->content,0,180,'utf-8')."..." }}
            @else
                {{ $article->content }}
            @endif
        </p>
    </li>
    @endforeach
</ul>
@else
<p> Nothing yet.</p>
@endif
</div>
@endsection
