<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ArticlesController extends Controller
{

    public function index(){
        //$articles = Article::all();
        //$articles = Article::latest('published_at')->get();
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index')->with('articles', $articles);
        // return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        dd($article->published_at->diffForHumans());
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Requests\CreateArticle $request){

//        dd($request->all());
        //Auth::user();
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, Requests\CreateArticle $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
