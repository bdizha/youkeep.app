<?php

namespace App\Http\Controllers;

use App\Address;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountCreditController extends Controller
{

    /**
     * Save account credit
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
                'user_id' => $userId,
                'postal_code' => $values['postal_code'],
            ];
        }
        $values['user_id'] = $userId;

        // save account address
        $address = Address::updateOrCreate($attributes, $values);

        $attributes = [
            'user_id' => $address->id,
            'address_id' => $address->id,
        ];

        $addresses = Address::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        // save user address
        UserAddress::updateOrCreate($attributes, $attributes);

        session('address', $address);
        session('addresses', $addresses);

        return response()->json([
            'address' => $address,
            'addresses' => $addresses,
        ], 200);
    }
}
