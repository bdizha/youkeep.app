<?php

namespace App\Http\Controllers;

use App\Address;
use App\UserAddress;
use Illuminate\Support\Facades\Auth;

class AccountAddressController extends Controller
{
    /**
     * Save account address
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $values = request()->all();
        list($address, $addresses) = Controller::_setAddress($values);

        return response()->json([
            'address' => $address,
            'addresses' => $addresses,
        ], 200);
    }

    /**
     * Delete account address
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $userId = Auth::user() ? Auth::user()->id : 1;
        $values = request()->all();

        $addressId = $values['address_id'];

        // Delete the address record
        Address::where('id', $addressId)
            ->delete();

        // Fetch the user addresses
        $addresses = Address::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();

        return response()->json([
            'address' => null,
            'addresses' => $addresses,
        ], 200);
    }

}
