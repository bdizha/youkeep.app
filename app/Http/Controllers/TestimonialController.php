<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('created_at', 'DESC')
            ->get();

        session('testimonials', $testimonials);

        return response()->json([
            'testimonials' => $testimonials
        ], 200);
    }
}
