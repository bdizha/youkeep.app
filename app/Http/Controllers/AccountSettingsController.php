<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountSettingsController extends Controller
{
    /**
     * Save account settings
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $values = request()->all();

        $attributes = [
            'id' => Auth::user() ? Auth::user()->id : 1
        ];

        if (!empty($values['password'])) {
            $values['password'] = bcrypt($values['password']);
        }

        if (!empty($values['birth_date'])) {
            $values['birth_date'] = date('Y-m-d', strtotime($values['birth_date']));
        }

        $user = User::updateOrCreate($attributes, $values);

        session('user', $user);

        return response()->json([
            'user' => $user,
        ], 200);
    }
}
