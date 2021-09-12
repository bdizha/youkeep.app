<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleCategory;

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = [];
        $this->appId = $request->get('app_id', env('APP_ID'));
        $this->resourceType = $request->get('resource_type', ArticleCategory::TYPE_BLOG);

        $articles = Article::whereHas('categories', function ($query) {
            $query->where('article_categories.resource_type', $this->resourceType);
        })
            ->with('categories')
            ->where('app_id', $this->appId)
            ->take(24)
            ->get();

        $response['articles'] = $articles;

        return response()->json($response, 200);
    }

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function article(Request $request)
    {
        $response = [];
        $slug = $request->get('slug', null);

        $article = Article::where('slug', $slug)
            ->with('categories')
            ->first();

        session(['article' => $article]);
        $response['article'] = $article;

        return response()->json($response, 200);
    }

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {
        $response = [];
        $this->appId = $request->get('app_id', env('APP_ID'));
        $this->slug = $request->get('slug', null);
        $this->resourceType = $request->get('resource_type', ArticleCategory::TYPE_BLOG);

        $this->articleCategory = ArticleCategory::where('slug', $this->slug)
            ->where('resource_type', $this->resourceType)
            ->first();

        $articles = Article::whereHas('categories', function ($query) {
            $query->where('category_articles.article_category_id', $this->articleCategory->id);
        })
            ->orderBy('created_at', 'DESC')
            ->take(24)
            ->get();

        $response['article_category'] = $this->articleCategory;
        $response['articles'] = $articles;

        return response()->json($response, 200);
    }
}
