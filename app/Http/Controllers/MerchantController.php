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
     * Show the merchant page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('merchant.index', ['component' => 'merchant']);
    }

    /**
     * Save account merchant
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

        // save account merchant
        $merchant = Merchant::updateOrCreate($attributes, $values);

        session('merchant', $merchant);

        return response()->json([
            'merchant' => $merchant
        ], 200);
    }
}
