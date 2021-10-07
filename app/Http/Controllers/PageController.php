<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the about us page
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('page.about_us');
    }

    /**
     * Show the about us page
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view('page.contact_us');
    }

    /**
     * Show the privacy page
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('page.index', ['component' => 'privacy']);
    }

    /**
     * Show the privacy page
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('page.index', ['component' => 'terms']);
    }

    /**
     * Show the faqs page
     *
     * @return \Illuminate\Http\Response
     */
    public function faqs()
    {
        $faqSections = [];

        foreach (Faq::$groups as $fs => $faqSection) {
            $faqSections[$fs]['name'] = $faqSection;
            $faqSections[$fs]['faqs'] = Faq::where('is_active', true)
                ->where('group', $fs)
                ->orderBy('question', 'DESC')
                ->get();
        }

        return response()->json($faqSections, 200);
    }

    /**
     * Show the how it works page
     *
     * @return \Illuminate\Http\Response
     */
    public function hiw()
    {
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('page.hiw', ['testimonials' => $testimonials]);
    }

    /**
     * Show the career page
     *
     * @return \Illuminate\Http\Response
     */
    public function careers()
    {
        return view('page.index', ['component' => 'career']);
    }

    /**
     * Show the kbill page
     *
     * @return \Illuminate\Http\Response
     */
    public function kbill()
    {
        return view('page.index', ['component' => 'kbill']);
    }

    /**
     * Show the shopple page
     *
     * @return \Illuminate\Http\Response
     */
    public function spazastop()
    {
        return view('page.index', ['component' => 'shopple']);
    }

    /**
     * Show the kkart page
     *
     * @return \Illuminate\Http\Response
     */
    public function kkart()
    {
        return view('page.index', ['component' => 'kkart']);
    }

    /**
     * Show the kzart page
     *
     * @return \Illuminate\Http\Response
     */
    public function kzart()
    {
        return view('page.index', ['component' => 'kzart']);
    }

    /**
     * Show the ktreats page
     *
     * @return \Illuminate\Http\Response
     */
    public function ktreats()
    {
        return view('page.index', ['component' => 'ktreats']);
    }
}
