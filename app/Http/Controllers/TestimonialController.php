<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class TestimonialController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $testimonials = Testimonial::where('is_active', true)
                ->orderBy('created_at', 'DESC')
                ->get();

            $response['testimonials'] = $testimonials;

            Cache::put($key, $response, now()->addMinutes(15));
        }

        return response()->json($response, 200);
    }
}
