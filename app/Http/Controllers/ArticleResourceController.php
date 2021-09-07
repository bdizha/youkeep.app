<?php

namespace App\Http\Controllers;

use App\ArticleResource;
use Illuminate\Http\Request;

class ArticleResourceController extends Controller
{
    /**
     * BLog landing page
     *
     * @param Request $request
     */
    public function index()
    {
        $this->appId = env('APP_ID', 2);
        $articleResources = ArticleResource::where('app_id', $this->appId)
            ->take(24)
            ->get();

        return response()->json([
            'articles' => $articleResources,
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
        $article = ArticleResource::where('slug', $slug)
            ->first();

        session(['article' => $article]);

        return response()->json([
            'type' => $type,
            'article' => $article,
            'status' => 'success'
        ], 200);
    }
}
