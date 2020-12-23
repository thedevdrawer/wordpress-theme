<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Enabled Plugins
    |--------------------------------------------------------------------------
    |
    | The class names of the TypeRocket plugins you wish to enable.
    |
    */
    'plugins' => [
        //'\TypeRocketSEO\Plugin',
        '\TypeRocketPageBuilder\Plugin',
        '\TypeRocketThemeOptions\Plugin',
        '\TypeRocketDev\Plugin',
    ],

    /*
    |--------------------------------------------------------------------------
    | Enabled Features
    |--------------------------------------------------------------------------
    |
    | Options to control what features you can use on the site.
    |
    */
    'features' => [
        'gutenberg' => true,
        'posts_menu' => true,
        'comments' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug
    |--------------------------------------------------------------------------
    |
    | Turn on Debugging for TypeRocket. Set to false to disable.
    |
    */
    'debug' => true,

    /*
    |--------------------------------------------------------------------------
    | Seed
    |--------------------------------------------------------------------------
    |
    | A 'random' string of text to help with security from time to time.
    |
    */
    'seed' => 'seed_5e86268d4914a',

    /*
    |--------------------------------------------------------------------------
    | Class Overrides
    |--------------------------------------------------------------------------
    |
    | Set the classes to use as the default for helper functions.
    |
    */
    'class' => [
        'icons' => '\TypeRocket\Elements\Icons',
        'user' => '\App\Models\User',
        'form' => '\TypeRocket\Elements\Form'
    ],

    /*
    |--------------------------------------------------------------------------
    | Template Engine
    |--------------------------------------------------------------------------
    |
    | The template engine used to build views for the front-end and admin.
    |
    | Options:
    |    - \TypeRocket\Template\TemplateEngine
    |    - \TypeRocket\Template\TwigTemplateEngine
    |
    */
    'template_engine' => [
        'front' => '\TypeRocket\Template\TemplateEngine',
        'admin' => '\TypeRocket\Template\TemplateEngine',
    ],

    /*
    |--------------------------------------------------------------------------
    | TypeRocket Rooting
    |--------------------------------------------------------------------------
    |
    | The templates to use for the TypeRocket theme. Set to false if using
    | a theme or `templates` if using core for templates. Must be using
    | TypeRocket as root.
    |
    */
    'root' => [
        'use_root' => false,
        'theme' => 'templates',
    ],

    /*
    |--------------------------------------------------------------------------
    | Assets Version
    |--------------------------------------------------------------------------
    |
    | The version of TypeRocket core assets. Changing this can help bust
    | browser caches.
    |
    */
    'assets' => '4.0.8'

];
