<?php
/* Custom functions code goes here. */

function custom_login() {
  wp_enqueue_style( 'custom-login-css', get_stylesheet_directory_uri() . '/css/login-style.css', array(), '1.0' );
}
add_action( 'login_head', 'custom_login' );
function custom_url_login() {
	return 'https://www.facebook.com/inmarketingypublicidad'; // colocamos la web de cuscofc 
}
add_filter( 'login_headerurl', 'custom_url_login' );

function eliminar_logo_wp() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'eliminar_logo_wp');
