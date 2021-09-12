<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * @property mixed $articleCategoryId
 */
class HelpController extends Controller
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
        $this->resourceType = $request->get('resource_type', ArticleCategory::TYPE_HELP);

        $articleCategories = ArticleCategory::with('articles')
        ->whereHas('apps', function ($query) {
            $query->where('app_article_categories.app_id', $this->appId);
        })
            ->where('resource_type', $this->resourceType)
            ->whereNull('article_category_id')
            ->take(24)->get();

        $articles = Article::orderBy('created_at', 'DESC')
            ->with('category')
            ->where('app_id', $this->appId)
            ->take(12)
            ->get();

        $response['breadcrumbs'] = [];
        $response['recent_articles'] = $articles;
        $response['article_categories'] = $articleCategories;

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
            ->with('category')
            ->where('article_category_id', $articleCategory->id)
            ->take(24)
            ->get();

        $articleCategories = ArticleCategory::with('articles.category')
            ->where('article_category_id', $articleCategory->id)
            ->whereHas('apps', function ($query) {
                $query->where('app_article_categories.app_id', $this->appId);
            })
            ->take(24)
            ->get();

        $response['breadcrumbs'] = $articleCategory->breadcrumbs;
        $response['article_category'] = $articleCategory;
        $response['article_categories'] = $articleCategories;
        $response['articles'] = $articles;

        return response()->json($response, 200);
    }

    /**
     * Show blog details
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

        $this->setSessionArticle($article);

        $relatedArticles = Article::orderBy('created_at', 'DESC')
            ->with('category')
            ->where('article_category_id', $article->article_category_id)
            ->where('id', '!=', $article->id)
            ->take(24)
            ->get();

        $response['breadcrumbs'] = $article->breadcrumbs;
        $response['blog'] = $article;
        $response['viewed_articles'] = $this->getSessionArticles();
        $response['related_articles'] = $relatedArticles;

        return response()->json($response, 200);
    }

    protected function setSessionArticle($article)
    {
        $articles = $this->getSessionArticles();
        $articles[] = $article;
        Session::put('articles', $articles);
    }

    protected function getSessionArticles()
    {
        return Session::get('articles', []);
    }
}
