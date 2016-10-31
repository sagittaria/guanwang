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

	public function members()
	{
		return view('members',['cssname'=>'members.css']);
	}

	public function memberDetail($mid)
	{
		return view('member'.$mid,['cssname'=>'members'.$mid.'.css']);
	}
	
	public function about()
	{
		return view('about',['cssname'=>'about.css']);
	}
	
	public function aboutDetail($aid)
	{
		return view('about'.$aid,['cssname'=>'about'.$aid.'.css']);
	}
	
	public function news()
	{
		return view('news',['cssname'=>'news.css']);
	}
	
	public function newsDetail($nid)
	{
		return view('news'.$nid,['cssname'=>'news'.$nid.'.css']);
	}
	
	public function product()
	{
		return view('product',['cssname'=>'product.css']);
	}
	
	public function solution()
	{
		return view('solution',['cssname'=>'solution.css']);
	}
	
	public function solutionDetail($sid)
	{
		return view('solution'.$sid,['cssname'=>'solution'.$sid.'.css']);
	}
}
