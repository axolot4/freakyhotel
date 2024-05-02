<?php

return [

    'twig' => [
        'extension' => 'twig',
        'environment' => [
            'debug' => env('APP_DEBUG', false),
            'charset' => 'utf-8',
            'cache' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),
            'auto_reload' => true,
            'strict_variables' => false,
            'autoescape' => 'html',
            'optimizations' => -1,
        ],
    ],

    'globals' => [
        // Define any global variables you need for all Twig templates here
        // Example: 'hotel_name' => 'My Awesome Hotel'
    ],

    'extensions' => [
        'enabled' => [
            TwigBridge\Extension\Loader\Facades::class,
            TwigBridge\Extension\Loader\Filters::class,
            TwigBridge\Extension\Loader\Functions::class,
            TwigBridge\Extension\Laravel\Auth::class,
            TwigBridge\Extension\Laravel\Config::class,
            TwigBridge\Extension\Laravel\Dump::class,
            TwigBridge\Extension\Laravel\Input::class,
            TwigBridge\Extension\Laravel\Session::class,
            TwigBridge\Extension\Laravel\Translator::class,
        ],

        'facades' => [
            'Auth',
            'Config',
            'Session',
            'Route',  // Facilitates route generation from Twig
            'URL',    // For URL generation in Twig templates
        ],
        'functions' => [
            'route',
            'asset',
            'session',
            'config',
        ],
    ],

    'laravel' => [
        'add_paths' => true,
        'functions' => [
            'all',
        ],
        'filters' => [
            'all',
        ],
    ],
];
