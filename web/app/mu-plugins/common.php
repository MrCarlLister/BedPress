<?php
/**
 * Plugin Name:  My common functions
 * Plugin URI:   https://www.mrcarllister.co.uk/
 * Description:  Common functions I use on most sites
 * Version:      1.0.0
 * Author:       Carl Lister
 * Author URI:   https://www.mrcarllister.co.uk/
 */

 /**
  * Returns a print of array, prettified
  *
  * @param [type] $array
  * @return void
  */
function dd($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


/**
 * Create a table
 *
 * @param [type] $table_name
 * @param [type] $array
 * @return void
 */
function ee_mph__create_new_table($table_name,$array)
{
   
    global $wpdb;
    include_once ABSPATH . '/wp-admin/includes/upgrade.php';
    $table_charset = '';
    $prefix = $wpdb->prefix.'ee_';
    $users_table = $prefix . $table_name;

    
    if ($wpdb->has_cap('collation')) {
        if (!empty($wpdb->charset)) {
            $table_charset = "DEFAULT CHARACTER SET {$wpdb->charset}";
        }
        if (!empty($wpdb->collate)) {
            $table_charset .= " COLLATE {$wpdb->collate}";
        }
    }

    $specifics='';

    foreach($array as $key => $value){

      /**
       * Backtick used for input names with spaces
       */
      $specifics .= '`'.$key.'`'.' TEXT NOT NULL, ';
    }

    $statement = "CREATE TABLE {$users_table} (id int(11) NOT NULL auto_increment, {$specifics} Date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id)) ENGINE = MyISAM {$table_charset};";
    // echo json_encode(array('success' => $statement)); die();
    maybe_create_table($users_table, $statement);
}

/**
 * Updates a table
 *
 * @param [type] $table_name
 * @param [type] $enq
 * @return void
 */
function ee_mph__update_table($table_name,$enq)
{
    global $wpdb;
    $prefix = $wpdb->prefix;
   
    $wpdb->insert(
        $prefix .'ee_'. $table_name,
        $enq
    );
}

/**
 * Gets wp nav items as an array or returns false if does not exist
 *
 * @param [type] $menu_name
 * @return mixed
 */
function ee_mph__get_menu_as_array($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);    
    }
    return false; 
}