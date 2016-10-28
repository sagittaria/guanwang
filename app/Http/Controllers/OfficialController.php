<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use EndaEditor;

class OfficialController extends Controller
{
	public function index()
	{
		return view('index');
	}


	public function listRecent(){
        //在官网上列出5篇
		$articles = Article::orderBy('updated_at', 'desc')->get();
		return view('recent',['articles' => $articles]);
	}


	public function showOneRecent($aid)
	{
        //显示专门的一篇
		$article = Article::findOrFail($aid);
        //return view('recentDetail',['article'=>$article]);
		$content = EndaEditor::MarkDecode($article->content);
		return view('recentDetail',['content'=>$content,'article'=>$article]);
	}  
}
