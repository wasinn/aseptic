<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function register_my_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}

add_action( 'init', 'register_my_menu' );
?>