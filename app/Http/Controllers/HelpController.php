<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use App\ArticleType;
use Illuminate\Http\Request;

/**
 * @property mixed $articleCategoryId
 */
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

        $this->appId = env('APP_ID', $request->get('limit', 24));
        $this->categoryArticleType = $request->get('article_type', null);
        $this->articleResourceType = $request->get('resource_type', ArticleCategory::TYPE_HELP);

        $query = ArticleCategory::with('articles')
            ->where('resource_type', $this->articleResourceType);

        $query->whereHas('article_type', function ($query) {
            $query->where('app_id', $this->appId);
        });

        $articleCategories = $query->take(24)
            ->get();
        $response['article_categories'] = $articleCategories;

        $articleTypes = ArticleType::where('app_id', $this->appId)
            ->take(6)
            ->get();

        $response['article_types'] = $articleTypes;

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
        $this->appId = env('APP_ID', $request->get('limit', 24));
        $this->articleCategoryId = $request->get('article_category_id', null);
        $this->articleResourceType = $request->get('resource_type', ArticleCategory::TYPE_HELP);

        $articles = Article::orderBy('created_at', 'DESC')
            ->where('article_category_id', $this->articleCategoryId)
            ->take(24)
            ->get();

        return response()->json([
            'articles' => $articles,
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

        $articles = Article::orderBy('created_at', 'DESC')
            ->where('article_category_id', $this->articleCategoryId)
            ->take(24)
            ->get();

        return response()->json([
            'type' => $type,
            'article' => $article,
            'related_articles' => $articles,
            'status' => 'success'
        ], 200);
    }
}
