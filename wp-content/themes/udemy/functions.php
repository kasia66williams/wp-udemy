<?php

//Setup
define('JU_DEV_MODE', true );

//Includes
add_theme_support('widgets');
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/custom-nav-walker.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
//Hooks

add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
add_action( 'after_setup_theme', 'ju_setup_theme');
add_action( 'widgets_init', 'ju_widgets' );



//Shortcodes