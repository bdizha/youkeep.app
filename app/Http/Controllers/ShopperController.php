<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Testimonial;
use Illuminate\Http\Request;

class ShopperController extends Controller
{


    /**
     * Show the shopper page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopper.index', ['component' => 'shopper']);
    }

    /**
     * Show the shopper apply page
     *
     * @return \Illuminate\Http\Response
     */
    public function apply()
    {
        return view('shopper.index', ['component' => 'shopper-apply']);
    }
}
