<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use EndaEditor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('updated_at', 'desc')->get();
        return view('home',['articles' => $articles]);
    }

    public function create(){
        //新建
        return view('createNewArticle');
    }

    public function store(Request $request){
        //保存新文
        $article = new Article;
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        return redirect('/');
    }

    public function edit($aid){
        //编辑旧文界面
        $article = Article::findOrFail($aid);
        return view('editOldArticle',['article'=>$article]);

    }

    public function update(Request $request, $aid){
        //保存旧文的更改
        Article::where('id',$aid)->update($request->input('Article'));
        return redirect('/');
    }

    public function destroy($aid){
        Article::find($aid)->delete();
        return redirect('/');
    }

    public function frontpage()
    {
        return view('index');
    }


    public function listRecent(){
        //在官网上列出5篇
        $articles = Article::orderBy('updated_at', 'desc')->get();
        return view('recent',['articles' => $articles]);
    }


    public function show($aid)
    {
        //显示专门的一篇
        $article = Article::findOrFail($aid);
        //return view('recentDetail',['article'=>$article]);
        $content = EndaEditor::MarkDecode($article->content);
        return view('recentDetail',['content'=>$content,'article'=>$article]);
    }  
}
