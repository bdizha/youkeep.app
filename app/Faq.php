<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    public static $groups = [
        0 => 'How Spazastop Works',
        1 => 'Pricing',
        2 => 'Payments',
        3 => 'Ordering',
        4 => 'Delivery',
        5 => 'Account',
        6 => 'Applying to be a shopper',
        7 => 'Being a shopper'
    ];

    public static $sections = [
        0 => [
            'name' => 'Popular Topics',
            'group_ids' => [0, 5]
        ],
        1 => [
            'name' => 'Spazastop Shopper Applicant FAQ',
            'group_ids' => [6, 7]
        ],
        2 => [
            'name' => 'FAQs about Spazastop',
            'group_ids' => [0, 1, 2, 3, 4]
        ]
    ];
}
