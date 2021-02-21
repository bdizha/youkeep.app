<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = ['user' => null];
        if (Auth::check()) {
            $user = Auth::user();
            $response = [
                'user' => $user
            ];
            session('user', $user);
        }
        return response()->json($response, 200);
    }

    /**
     * Show the art categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function art(Request $request)
    {
        return view('art');
    }
}
