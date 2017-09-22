<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index(){
        $headers['metatitle'] = 'Финансовые решения для бизнеса';
        $headers['metakey'] = 'создаем умные решения для бизнеса, отраслевые решения, безопасность бизнеса, финансовый консалтинг, системы документооборота';
        $headers['metadesc'] = 'создаем умные решения для бизнеса, отраслевые решения, безопасность бизнеса, финансовый консалтинг, системы документооборота';
        $data = Article::latest()->take(3)->get();
        return view('home', [
            'articles' => $data,
            'headers' => $headers
        ]);
    }
}
