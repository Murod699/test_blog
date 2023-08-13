<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::latest()->limit(6)->get();

        return view('home', compact('articles'));
    }

    public function articleAll(){
        $posts = Article::latest()->paginate(10);
        $tags = Tag::all();

        return view('Article.articles', compact('posts', 'tags'));
    }


    public function more($slug){

        $article = $this->getArticleBySlug($slug);

        return view('Article.more', compact('article'));
    }

    public function incrementViews(Request $request){

        $slug = $request->postId;

        $post = $this->getArticleBySlug($slug);

        $view = $post->increment('views');

        $new_view = $post->views;

        return response()->json([

            'view' => $new_view

        ]);

    }

    private function getArticleBySlug($slug){

        return Article::findBySlug($slug);
    }


}
