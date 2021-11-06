<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    public static $sortOptions = [
        0 => [
            'column' => 'name',
            'dir' => 'ASC',
            'Name: A to Z',
        ],
        1 => [
            'column' => 'name',
            'dir' => 'DESC',
            'Name: Z to A',
        ],
        2 => [
            'column' => 'price',
            'dir' => 'ASC',
            'label' => 'Price: Low to High'
        ],
        3 => [
            'column' => 'price',
            'dir' => 'DESC',
            'Price: High to Low',
        ],
        4 => [
            'column' => 'created_at',
            'dir' => 'DESC',
            'Most Recent'


}
