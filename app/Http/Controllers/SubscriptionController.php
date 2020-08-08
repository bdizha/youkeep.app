<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    /**
     * Save new email subscription
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
        $values = request()->all();

        // save Subscription message
        $subscription = Subscription::create($values);

        return response()->json([
            'subscription' => $subscription,
        ], 200);
    }
}
