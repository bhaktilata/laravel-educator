<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Здесь вы можете указать диск файловой системы по умолчанию, который следует использовать
    | по framework. «local» диск, а также различные облачные
    | Диски на основе доступны для вашего приложения. Просто храните подальше!
    |'default' => env('FILESYSTEM_DRIVER', 'public'),
    */

    'default' => env('FILESYSTEM_DRIVER', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    |Здесь вы можете настроить столько «дисков» файловой системы, сколько пожелаете.
    | может даже настроить несколько дисков одного и того же драйвера. По умолчанию есть
    | были настроены для каждого драйвера в качестве примера необходимых опций.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            
        ],

        'public' => [
            'driver' => 'local',
            'root' => public_path('uploads/images'), // public_path - функция хелпера, ведет в публичную папку public по адресу 'uploads/images'
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            
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
        public_path('storage') => storage_path('app/public'),
    ],

];
