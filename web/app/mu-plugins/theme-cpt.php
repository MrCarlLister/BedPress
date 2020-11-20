<?php
/**
 * Plugin Name:  Theme custom post types & taxomomies
 * Plugin URI:   https://www.mrcarllister.co.uk/
 * Description:  Site specific content types & taxonomies
 * Version:      1.0.0
 * Author:       Carl Lister
 * Author URI:   https://www.mrcarllister.co.uk/
 */


function cpt_articles() {
    $labels = array(
        'name'               => _x( 'Articles', 'post type Articles name' ),
        'singular_name'      => _x( 'Articles', 'post type Articles name' ),
        'add_new'            => _x( 'Add New', 'Articles' ),
        'add_new_item'       => __( 'Add New Articles' ),
        'edit_item'          => __( 'Edit Articles' ),
        'new_item'           => __( 'New Articles' ),
        'all_items'          => __( 'All Articles' ),
        'view_item'          => __( 'View Articles' ),
        'search_items'       => __( 'Search Articles' ),
        'not_found'          => __( 'No Articles found' ),
        'not_found_in_trash' => __( 'No Articles found in the trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Articles'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Articles specific data',
        'public'        => true,
        'show_ui'       => true,
        'menu_position' => 2,
        'supports'      => array( 'title', 'revisions' ),
        'has_archive'   => false,
        'hierarchical'  => false,
        'rewrite'       => array('with_front'=>false, 'slug'=>'articles'),
        'menu_icon'     => 'dashicons-welcome-learn-more',
    );
    register_post_type( 'cpt-articles', $args );
}

add_action( 'init', 'cpt_articles' );



function cpt_services() {
    $labels = array(
        'name'               => _x( 'Services', 'post type Services name' ),
        'singular_name'      => _x( 'Services', 'post type Services name' ),
        'add_new'            => _x( 'Add New', 'Services' ),
        'add_new_item'       => __( 'Add New Services' ),
        'edit_item'          => __( 'Edit Services' ),
        'new_item'           => __( 'New Services' ),
        'all_items'          => __( 'All Services' ),
        'view_item'          => __( 'View Services' ),
        'search_items'       => __( 'Search Services' ),
        'not_found'          => __( 'No Services found' ),
        'not_found_in_trash' => __( 'No Services found in the trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Services'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Services specific data',
        'public'        => true,
        'show_ui'       => true,
        'menu_position' => 1,
        'show_in_rest' => true,
        'supports'      => array( 'title', 'revisions','editor' ),
        'has_archive'   => false,
        'hierarchical'  => false,
        'rewrite'       => array('with_front'=>false, 'slug'=>'services'),
        'menu_icon'     => 'dashicons-video-alt',
    );
    register_post_type( 'cpt-services', $args );
}

add_action( 'init', 'cpt_services' );

