<?php

function wktAddThemeScripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
}

// Custom styles for this template style.css
  function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  }
  add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function rekrutacjaCustomLogoSetup() {
    $args = [
        'height' => 260,
        'width' => 260,
        'flex-width'    => false,
        'flex-height'    => true,
        'unlink-homepage-logo' => true
    ];

    add_theme_support('custom-logo', $args);
}

function rekrutacjaRegesterMenus() {
    register_nav_menus( [
        'main-menu' => 'Menu Główne',
        'footer-menu' => 'Menu w stopce'
    ] );
}



add_action( 'init', 'rekrutacjaRegesterMenus' );


add_action( 'after_setup_theme', 'rekrutacjaCustomLogoSetup');

