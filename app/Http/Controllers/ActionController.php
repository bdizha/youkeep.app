<?php

namespace App\Http\Controllers;

use App\ReviewAction;
use Illuminate\Http\Request;

class ActionController extends Controller
{

    /**
     * Save action
     *
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        $values = request()->all();

        $actionId = $values['id'];
        $attributes = [
            'id' => $actionId
        ];

        $action = ReviewAction::updateOrCreate($attributes, $values);

        return response()->json([
            'action' => $action,
        ], 200);
    }
}
