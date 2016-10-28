@extends('layouts.app')

@section('content')
这里列出全部的文章<br>
@if(count($articles) >0)
<ul>
    @foreach ($articles as $article)
    <li>
        <h2>
            {{ $article->title }} &nbsp;&nbsp;<small>{{ $article->updated_at }}</small>
            <a class="btn btn-primary" href="{{ action('HomeController@edit',[$article->id]) }}">编辑</a> 

            <form action="{{ action('HomeController@destroy',[$article->id]) }}" method="POST" style="display: inline;">  
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">删除</button>
            </form>

        </h2>
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
@endsection
