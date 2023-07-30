<?php

namespace App\Http\Controllers;

// Articleクラスを読み込む
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // articlesディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

    //showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
}
