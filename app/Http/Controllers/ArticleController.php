<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(6);
        $articleNews = Article::take(4)->get()->sortByDesc('created_at');
        return view('client.article',compact('articles','articleNews'));
    }

    public function articleDetail($id){
        $article = Article::findOrFail($id);
        $articleNews = Article::take(4)->get()->sortByDesc('created_at');
        return view('client.article-detail',compact('article','articleNews'));
    }
}
