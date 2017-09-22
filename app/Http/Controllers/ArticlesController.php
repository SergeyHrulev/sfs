<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class ArticlesController extends Controller
{
    //
    
    public function index(){
        $data = Article::all();
        return view('pages.articles.index', [
            'articles' => $data
        ]);
    }
    
    public function article(Article $article, $slug){
        $data = Article::where('slug', $slug)->with('userId', 'commentId')->get();
        return view('pages.articles.article', [
            'article' => $data
        ]);
    }
}
