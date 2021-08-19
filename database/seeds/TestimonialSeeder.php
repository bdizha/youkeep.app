<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'author' => 'Batanayi Matuku',
                'company' => 'Engineering Head @Kkart',
                'content' => 'Their development team is accessible, versatile, and understand our issues. It only took a few days to implement, which is faster than any other provider we\'ve worked with in the past.',
            ],
            [
                'author' => 'Kyle Moodley',
                'company' => 'Head of Product @OnSight',
                'content' => 'Since we switched to Checkout.com, our acceptance rate and settlement times have improved significantly. Reconciliations are also much faster thanks to Checkout.com\'s dedicated API.',
            ],
            [
                'author' => 'Michelle Richards',
                'company' => 'Operations Officer @Woolworths',
                'content' => 'As a business with global customers, their range of international payment methods along with their excellent customer service made them a great fit for us.',
            ],
            [
                'author' => 'Andre Bean',
                'company' => 'PR Director @Brickcent',
                'content' => 'After switching to Checkout.com from a previous provider, we saw a 16% boost in our online revenue.',
            ],
            [
                'author' => 'Tracey Murray',
                'company' => 'Digital Marketing manager @Pick n Pay',
                'content' => 'Working with Checkout.com on cards processing, they’ve proven to be flexible, responsive, and delivered excellent customer service.',
            ],
        ];

        foreach ($testimonials as $testimonial) {

            $attributes = [
                'author' => $testimonial['author'],
                'content' => $testimonial['content'],
            ];
            $values = $testimonial;

            \App\Testimonial::updateOrCreate($attributes, $values);
        }

        die("Testimonials have been imported successfully");
    }
}
