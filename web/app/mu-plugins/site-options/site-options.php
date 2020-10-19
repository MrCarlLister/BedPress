<?php
/**
 * Plugin Name:  Default site options
 * Plugin URI:   https://www.mrcarllister.co.uk/
 * Description:  Register default site options using ACF PRO
 * Version:      1.0.0
 * Author:       Carl Lister
 * Author URI:   https://www.mrcarllister.co.uk/
 */


/**
 * Get the user's roles
 * @since 1.0.0
 */
function ee_mph__get_current_user_role() {
    if( is_user_logged_in() ) {
    $user = wp_get_current_user();
    $roles = ( array ) $user->roles;
    return $roles; // This returns an array
    // Use this to return a single value
    // return $roles[0];
    } else {
    return array();
    }
   }

if ( class_exists('ACF') ) {

    $SITE_OPTIONS_PATH = plugin_dir_path( __FILE__ );


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
        $paths[] = plugin_dir_path( __FILE__ ) . '/acf-json';


        // return
        return $paths;

    }


    
   

      

    function ee__acf_chk_theme_option($option)
    {
        return get_field($option,'options');
    }

    
    include_once($SITE_OPTIONS_PATH.'options/theme-and-settings.php');
    include_once($SITE_OPTIONS_PATH.'options/maps.php');
    include_once($SITE_OPTIONS_PATH.'options/opening-times.php');

    
    
}
