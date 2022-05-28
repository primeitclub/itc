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

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'thumbnails' => [
            'driver' => 'local',
            'root' => storage_path('app/thumbnails'),
            'url' => env('APP_URL') . '/thumbnails',
            'visibility' => 'public',
        ],

        'speakers' => [
            'driver' => 'local',
            'root' => storage_path('app/speakers'),
            'url' => env('APP_URL') . '/speakers',
            'visibility' => 'public',
        ],

        'members' => [
            'driver' => 'local',
            'root' => storage_path('app/members'),
            'url' => env('APP_URL') . '/members',
            'visibility' => 'public',
        ],

        'albums' => [
            'driver' => 'local',
            'root' => storage_path('app/albums'),
            'url' => env('APP_URL') . '/albums',
            'visibility' => 'public',
        ],

        'images' => [
            'driver' => 'local',
            'root' => storage_path('app/images'),
            'url' => env('APP_URL') . '/images',
            'visibility' => 'public',
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('thumbnails') => storage_path('app/thumbnails'),
        public_path('speakers') => storage_path('app/speakers'),
        public_path('members') => storage_path('app/members'),
        public_path('albums') => storage_path('app/albums'),
        public_path('images') => storage_path('app/images'),
    ],

];
