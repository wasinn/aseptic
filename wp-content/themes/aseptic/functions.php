<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

function register_my_menu2() {
  register_nav_menu('footer-menu2',__( 'Footer Menu2' ));
}



add_action( 'init', 'register_my_menu' );
add_action( 'init', 'register_my_menu2' );
?>