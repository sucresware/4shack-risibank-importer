<?php

return [
    'default' => env('FILESYSTEM_DRIVER', 'local'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => env('FILESYSTEM_LOCAL_PATH', getcwd()),
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],
    ],
];
