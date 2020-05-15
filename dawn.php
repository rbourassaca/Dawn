<?php

/*
Plugin Name: Dawn
Plugin URI: https://github.com/rbourassaca/Dawn
Description: Wordpress admin theme for rbourassa's client.
Author: Raphael Bourassa
Version: 0.2
Author URI: https://rbourassa.ca
*/

add_action('admin_enqueue_scripts', 'admin_theme');
add_action('wp_enqueue_scripts', 'admin_theme');
add_action('login_enqueue_scripts', 'admin_theme');

add_filter('admin_footer_text', 'footerText');

add_action( 'admin_init', 'editAdminThemeSelection');
add_filter( 'get_user_option_admin_color', 'forceColorScheme' );


function admin_theme () {
    wp_enqueue_style('rbourassa_admin_theme', plugins_url('style/style.css', __FILE__));
}

function footerText() {
    echo 'Site web créé par <a href="https://rbourassa.ca" target="_blank">Raphael Bourassa</a>';
}

function editAdminThemeSelection(){
    global $_wp_admin_css_colors;
    $_wp_admin_css_colors = array( 'dawn' => $_wp_admin_css_colors['midnight'] );
}

function forceColorScheme($color){
    return 'dawn';
}

?>
