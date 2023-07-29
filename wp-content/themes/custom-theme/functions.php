<?php

function theme_files() {
  wp_enqueue_style('theme_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_files');

function custom_theme_setup() {
    // Register multiple menu locations if needed
    register_nav_menus( array(
        'primary-menu'   => 'Primary Menu',   // Example: Header Menu
        'secondary-menu' => 'Secondary Menu', // Example: Footer Menu
        // Add more menu locations as necessary
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function my_theme_enqueue_scripts() {
  // Enqueue search JavaScript file
  wp_enqueue_script('search-script', get_template_directory_uri() . '/js/search-script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

