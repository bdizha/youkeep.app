<?php

namespace App\Http\Controllers;

use App\Address;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ReviewController extends Controller
{
    /**
     * Show the location page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->limit = $request->get('limit', 12);
        $this->productId = $request->get('product_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->setReviews();

            $response = $this->reviews;
             Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }


    /**
     * Show the review
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $review = Review::where('id', $id)
            ->orderBy('created_at', 'DESC')
            ->first();

        return response()->json([
            'review' => $review,
        ], 200);
    }


    /**
     * Save save
     *
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        $values = request()->all();

        $reviewId = $values['id'];
        $attributes = [
            'id' => $reviewId
        ];

        $review = Review::updateOrCreate($attributes, $values);

        session('review', $review);

        return response()->json([
            'review' => $review,
        ], 200);
    }
}
