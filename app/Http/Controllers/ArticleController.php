<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index()
    {   
        DB::unprepared("
            SET search_path to public;
        ");
        // $article = new Article;
        // $article->setTable('test.articles');
        // return $article->all();
        return Article::all();
        //return DB::table('test.articles')->get();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
