<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Catalog;
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


	// public function showOneRecent($aid)
	// {
 //        //显示专门的一篇
	// 	$article = Article::findOrFail($aid);
 //        //return view('recentDetail',['article'=>$article]);
	// 	$content = EndaEditor::MarkDecode($article->content);
	// 	return view('recentDetail',['content'=>$content,'article'=>$article]);
	// } 

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
	
	public function newsList($nid)
	{//列出各分类下面的文章列表，&nid就做 catalog_id 来用
		$articles = Article::orderBy('updated_at', 'desc')->where('catalog_id','=',$nid)->get();
		$selected_catalog_name =  $articles[0]->Catalog->name;
		$catalogs = Catalog::orderBy('id')->get();
		return view('newsList',['cssname'=>'newsList.css', 'articles'=>$articles,'selected_catalog_name'=>$selected_catalog_name,'catalogs'=>$catalogs]);
	}

	public function newsDetail($cid)
	{//显示文章详情页，cid里的c表示content
		$article = Article::findOrFail($cid);
        //return view('recentDetail',['article'=>$article]);
		$content = EndaEditor::MarkDecode($article->content);
		return view('newsDetail',['cssname'=>'newsDetail.css','content'=>$content,'article'=>$article]);
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
