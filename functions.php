<?php

add_action( 'wp_enqueue_scripts', 'tfs_scripts' );

function tfs_scripts() {
	wp_enqueue_style( 'tfs-normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'tfs-foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'tfs-style', get_template_directory_uri() . '/style.css' );
}

register_nav_menus( array(
	//'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',
) );
