<?php

namespace App\Http\Controllers;

use App\User;
use App\Address;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class AccountController
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{

    /**
     * Show the account details
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug = null)
    {
        $user = User::where('slug', $slug)
            ->orderBy('created_at', 'DESC')
            ->first();

        return view('account.show', ['user' => $user]);
    }

    /**
     * Show the user details
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request)
    {
        if ($request->ajax()) {
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

        return view('home');
    }

    /**
     * Show the location page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function location(Request $request)
    {
        $user = Auth::user();

        $userId = $user ? $user->id : 1;
        $addresses = Address::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        if (request()->ajax()) {
            return response()->json([
                'addresses' => $addresses,
            ], 200);
        }

        return view('account.show', ['user' => $user]);
    }

    /**
     * Show the payment page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        return view('account.payment');
    }

    /**
     * Show the points page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function points(Request $request)
    {
        return view('account.points');
    }

    /**
     * Show the credit page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function credit(Request $request)
    {
        return view('account.promos');
    }

    /**
     * Show the notifications page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function notifications(Request $request)
    {
        return view('account.notifications');
    }

    /**
     * Show the invite page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function invite(Request $request)
    {
        return view('account.invite');
    }

    /**
     * Save account settings
     *
     * @return \Illuminate\Http\Response
     */
    public function secure()
    {
        $values = request()->all();

        $userId = $values['id'];
        $attributes = [
            'id' => $userId
        ];

        if (!empty($values['password'])) {
            $values['password'] = bcrypt($values['password']);
        }

        $user = User::updateOrCreate($attributes, $values);

        session('user', $user);

        return response()->json([
            'user' => $user,
        ], 200);
    }
}
