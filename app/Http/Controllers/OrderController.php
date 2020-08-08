<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Show the order details
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('order.show');
    }

    /**
     * Show the order timeline
     *
     * @return \Illuminate\Http\Response
     */
    public function track()
    {
        return view('order.track');
    }

    /**
     * Show the checkout details
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('order.checkout');
    }

    /**
     * Show the cart details
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function cart(Request $request)
    {
        $values = $request->all();

        $request->session()->put('cart', $values['cart']);

        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'cart' => $values['cart']], 200);
        }

        return view('order.checkout');
    }
}
