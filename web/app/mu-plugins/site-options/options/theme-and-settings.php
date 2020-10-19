<?php


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(
        array(
            'page_title' => 'Options',
            'menu_title' => 'Site Options',
            'menu_slug' => 'site-options',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-layout',
            'position' => 2,
            'redirect'		=> false


        )
    );

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme options',
        'menu_title'	=> 'Theme options',
        'menu_slug' 	=> 'theme-options',
        'parent_slug'	=> 'site-options',
        'capability' => 'manage_options',

    ));

}