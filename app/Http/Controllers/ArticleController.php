<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * BLog landing page
     *
     * @param Request $request
     */
    public function index()
    {
        $this->appId = env('APP_ID', 2);
        $this->articleTypeId = env('article_type', null);

        $query = Article::where('app_id', $this->appId);

        $articles = $query->where('article_type_id', $this->articleTypeId)
            ->take(24)
            ->get();

        $articleTypes = ArticleType::where('app_id', $this->appId)
            ->take(6)
            ->get();

        return response()->json([
            'articles' => $articles,
            'article_types' => $articleTypes,
            'status' => 'success'
        ], 200);
    }

    /**
     * Show article details
     *
     * @param $type
     * @param $slug
     */
    public function show($type, $slug)
    {
        $article = Article::where('slug', $slug)
            ->first();

        session(['article' => $article]);

        return response()->json([
            'type' => $type,
            'article' => $article,
            'status' => 'success'
        ], 200);
    }
}
