<?php

namespace App\Http\Controllers;

use App\Card;
use App\UserCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountPaymentController extends Controller
{
    /**
     * Save account Card
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
                'card_number' => $values['card_number'],
            ];
        }
        $values['user_id'] = $userId;

        if (!empty($values['is_default'])) {
            // Ensure other other defaults are reset
            Card::updateOrCreate(['user_id' => $userId], ['is_default' => false]);
        }

        // save account Card
        $card = Card::updateOrCreate($attributes, $values);

        $attributes = [
            'user_id' => $card->id,
            'card_id' => $card->id,
        ];

        // save user Card
        UserCard::updateOrCreate($attributes, $attributes);

        $cards = Card::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        session('card', $card);
        session('cards', $card);

        return response()->json([
            'card' => $card,
            'cards' => $cards,
        ], 200);
    }

    /**
     * Delete account Card
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $userId = Auth::user() ? Auth::user()->id : 1;
        $values = request()->all();

        $cardId = $values['card_id'];

        // Delete the user - Card record
        UserCard::where('card_id', $cardId)
            ->delete();

        // Delete the Card record
        Card::where('id', $cardId)
            ->delete();

        // Fetch the user Payments
        $cards = Card::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json([
            'card' => null,
            'cards' => $cards,
        ], 200);
    }

    /**
     * Fetch account cards
     *
     * @return \Illuminate\Http\Response
     */
    public function cards()
    {
        $userId = Auth::user() ? Auth::user()->id : 1;

        // Fetch the user Payments
        $cards = Card::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json([
            'card' => null,
            'cards' => $cards,
        ], 200);
    }
}
