<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feed()
    {
        return view('feed');
    }

    /**
     * Show categories
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function categories(): string
    {
        return view('category');
    }

    /**
     * Show raw json
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function json(): string
    {
        return view('json');
    }

    /**
     * Show raw leaderboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leaderboard(): string
    {
        return view('leaderboard');
    }
}
