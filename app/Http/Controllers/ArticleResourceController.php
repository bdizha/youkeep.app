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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ArticleResource::take(12)->get();

        if (request()->ajax()) {
            return response()->json([
                'articles' => $articles,
                'status' => 'success'
            ], 200);
        }

        return view('index', ['articles' => $articles]);
    }

    /**
     * Show article details
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($type, $slug)
    {
        $article = ArticleResource::where('slug', $slug)
            ->first();

        session(['article' => $article]);

        if (request()->ajax()) {
            return response()->json([
                'type' => $type,
                'article' => $article,
                'status' => 'success'
            ], 200);
        }

        return view('index', ['article' => $article]);
    }
}
