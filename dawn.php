<?php

/*
Plugin Name: Dawn
Plugin URI: https://github.com/rbourassaca/Dawn
Description: Wordpress admin theme for rbourassa's client.
Author: rbourassa
Version: 0.1
Author URI: https://rbourassa.ca
GitHub Plugin URI: https://github.com/rbourassaca/Dawn
*/

add_action('admin_enqueue_scripts', 'admin_theme');
add_action('login_enqueue_scripts', 'admin_theme');

function admin_theme () {
    wp_enqueue_style('my-admin-theme', plugins_url('style/style.css', __FILE__));
}
?>