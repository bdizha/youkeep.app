<?php

namespace App\Http\Controllers;

use App\Category;
use App\Store;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Show inbox page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inbox.index');
    }

    /**
     * Show chat message page
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $chat = [];

        return view('inbox.index', ['chat' => $chat]);
    }
}
