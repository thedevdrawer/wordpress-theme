<?php
    /* typerocket init */
    require 'typerocket/init.php';
    require 'inc/cpt.php';
    function devdrawer_enqueue() {
        wp_enqueue_style( 'minicss', get_template_directory_uri() . '/css/mini.min.css');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('minijs', get_template_directory_uri() . '/js/mini.min.js', array('jquery'), true);
    }

    add_action('wp_enqueue_scripts', 'devdrawer_enqueue');

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    function register_navwalker(){
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    register_nav_menus( array(
        'header' => 'Header',
        'footer' => 'Footer'
    ));

    function devdrawer_widgets_init() {
        register_sidebar( array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));

        register_sidebar( array(
            'name'          => 'Footer (Left)',
            'id'            => 'footer_left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));

        register_sidebar( array(
            'name'          => 'Footer (Center)',
            'id'            => 'footer_center',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));

        register_sidebar( array(
            'name'          => 'Footer (Right)',
            'id'            => 'footer_right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

    add_action ( 'widgets_init', 'devdrawer_widgets_init' );

    add_filter('tr_theme_options_page', function() {
        return get_template_directory() . '/theme-options.php';
    });
