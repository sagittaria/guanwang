@extends('layouts.origin')

@section('content')
<div id="banner">
    <img src="{{ asset('images/about_02.jpg') }}"/>
</div>
<div id="content">
    <div class="center">
        <div class="left fl">
            <ul>
                <li class="title">关于纽蓝</li>
                <li><a href="#">公司简介</a></li>              
                <li><a href="#" style="background: #fff;color: #498fe0;border-left: 2px solid #498fe0;box-sizing: border-box;padding: 20px 0 20px 18px;">公司动态</a></li>
                <li><a href="#">组织结构</a></li>
                <li><a href="#">人才战略</a></li>
            </ul>
        </div>
        <div class="right fr">
            <h2>公司动态</h2>
            <div class="add">
                <li>当前位置:</li>
                <a href="#">首页</a>
                <li>></li>
                <a href="#">关于纽蓝</a>
                <li>></li>
                <a href="#">公司动态</a>
            </div>
            <div class="box">
                @if(count($articles) >0)
                <ul>
                    @foreach ($articles as $article)
                    <li>
                        
                        <a style="display: inline;" href="{{ action('OfficialController@showOneRecent',[$article->id]) }}">{{ $article->title }}</a> <span>&nbsp;{{ $article->created_at }}</span>
                        
                        <p>
                            @if(mb_strlen($article->content)>180)
                                {{ mb_substr($article->content,0,180,'utf-8')."..." }}
                            @else
                                {{ $article->content }}
                            @endif
                        </p>
                    </li><br>
                    @endforeach
                </ul>
                @else
                <p> Nothing yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
