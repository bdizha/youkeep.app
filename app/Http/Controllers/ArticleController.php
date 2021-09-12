<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use App\ArticleType;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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
            ->where('app_id', $this->appId)
            ->where('resource_type', $this->resourceType)
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
            ->first();

        session(['blog' => $article]);
        $response['blog'] = $article;

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

        $articleCategory = ArticleCategory::where('slug', $this->slug)
            ->first();

        $articles = Article::orderBy('created_at', 'DESC')
            ->with('categories')
            ->where('article_category_id', $articleCategory->id)
            ->take(24)
            ->get();

        $response['article_category'] = $articleCategory;
        $response['articles'] = $articles;

        return response()->json($response, 200);
    }
}
