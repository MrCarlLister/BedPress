<?php
/**
 * Plugin Name:  Default site options
 * Plugin URI:   https://www.mrcarllister.co.uk/
 * Description:  Register default site options using ACF PRO
 * Version:      1.0.0
 * Author:       Carl Lister
 * Author URI:   https://www.mrcarllister.co.uk/
 */

if ( class_exists('ACF') ) {

    add_filter('acf/settings/save_json', 'ee_mph__json_save_point');

    function ee_mph__json_save_point( $path ) {

        // update path
        $path = plugin_dir_path( __FILE__ ) . '/acf-json';


        // return
        return $path;

    }

    add_filter('acf/settings/load_json', 'ee_mph__json_load_point');

    function ee_mph__json_load_point( $paths ) {

        // remove original path (optional)
        unset($paths[0]);


        // append path
        $path = plugin_dir_path( __FILE__ ) . '/acf-json';


        // return
        return $paths;

    }


    
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(
            array(
                'page_title' => 'Options',
                'menu_title' => 'Site Options',
                'menu_slug' => 'site-options',
                'capability' => 'edit_posts',
                'icon_url' => 'dashicons-layout',
                'position' => 2

            )
        );

    }
}
