<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 10:56
 */

namespace App\Http\Controllers;


use App\Article;

class BlogController extends Controller
{
    public function index(Article $article)
    {
        $blogPosts = $article->orderBy('date', 'desc')->paginate(9);

        return view('blog', ['articles' => $blogPosts]);
    }

    public function show($id, Article $article)
    {
        $moreArticles = $article->where('id', '!=', $id)
            ->orderBy('date', 'desc')
            ->take(5)->get();
        $activeArticle = $article->findOrFail($id);
        return view('article', ['article' => $activeArticle, 'moreArticles' => $moreArticles]);
    }
}