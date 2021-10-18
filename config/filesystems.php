<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        'article' => [
            'driver' => 'local',
            'root' => storage_path('app/public/article'),
            'url' => env('APP_URL') . '/storage/article',
            'visibility' => 'public',
        ],

        'testimonial' => [
            'driver' => 'local',
            'root' => storage_path('app/public/testimonial'),
            'url' => env('APP_URL') . '/storage/testimonial',
            'visibility' => 'public',
        ],

        'service' => [
            'driver' => 'local',
            'root' => storage_path('app/public/service'),
            'url' => env('APP_URL') . '/storage/product',
            'visibility' => 'public',
        ],

        'profile' => [
            'driver' => 'local',
            'root' => storage_path('app/public/profile'),
            'where' => storage_path('app/public/profile'),
            'url' => env('APP_URL') . '/storage/profile',
            'visibility' => 'public',
        ],
        'store' => [
            'driver' => 'local',
            'root' => storage_path('app/public/store'),
            'where' => storage_path('app/public/store'),
            'url' => env('APP_URL') . '/storage/store',
            'visibility' => 'public',
        ],
        'category' => [
            'driver' => 'local',
            'root' => storage_path('app/public/category'),
            'where' => storage_path('app/public/category'),
            'url' => env('APP_URL') . '/storage/category',
            'visibility' => 'public',
        ],
        'banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/banner'),
            'where' => storage_path('app/public/banner'),
            'url' => env('APP_URL') . '/storage/banner',
            'visibility' => 'public',
        ],
        'position' => [
            'driver' => 'local',
            'root' => storage_path('app/public/position'),
            'where' => storage_path('app/public/position'),
            'url' => env('APP_URL') . '/storage/position',
            'visibility' => 'public',
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

    ],

];
