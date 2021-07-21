<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Faq;
use App\Testimonial;
use App\UserMerchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{


    /**
     * Show the seller page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.index', ['component' => 'seller']);
    }

    /**
     * Save account seller
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $values = request()->all();
        $userId = Auth::user() ? Auth::user()->id : 1;

        if (!empty($values['id'])) {
            $attributes = [
                'id' => $values['id'],
            ];
        } else {
            $attributes = [
                'user_id' => $userId
            ];
        }
        $values['user_id'] = $userId;

        // save account seller
        $merchant = Merchant::updateOrCreate($attributes, $values);

        session('seller', $merchant);

        return response()->json([
            'seller' => $merchant
        ], 200);
    }
}
