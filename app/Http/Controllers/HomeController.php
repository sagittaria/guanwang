<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\Catalog;
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
		$catalogs = Catalog::orderBy('id')->get();
		return view('createNewArticle',['catalogs' => $catalogs]);
    }

    public function store(Request $request){
        //保存新文
        $article = new Article;
        $article->title = $request->input('title');
        $article->content = $request->input('content');
		$article->catalog_id = $request->input('catalog_id');
        $article->save();
        return redirect('/home');
    }

    public function edit($aid){
        //编辑旧文界面
        $article = Article::findOrFail($aid);
		$catalogs = Catalog::where('id','<>',$article->catalog_id)->orderBy('id')->get();
        return view('editOldArticle',['article'=>$article,'catalogs' => $catalogs]);
    }

    public function update(Request $request, $aid){
        //保存旧文的更改
        Article::where('id',$aid)->update($request->input('Article'));
        return redirect('/home');
    }

    public function preview($aid){
        //在后台预览效果
        $article = Article::findOrFail($aid);
        $content = EndaEditor::MarkDecode($article->content);
        return view('previewOneArticle',['content'=>$content,'article'=>$article]);
    }

    public function destroy($aid){
        Article::find($aid)->delete();
        return redirect('/home');
    }

    public function upload(){
        //这是上传图片的功能，给ajax用
        $data = EndaEditor::uploadImgFile('upload');
        return json_encode($data);
    }
}
