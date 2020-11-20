<?php

/**
 * Plugin Name:  Default gutenberg modules
 * Plugin URI:   https://www.mrcarllister.co.uk/
 * Description:  Register default Gutenberg modules using ACF
 * Version:      1.0.0
 * Author:       Carl Lister
 * Author URI:   https://www.mrcarllister.co.uk/
 */


function ee_mph__acf_get_array_of_blocknames()
{

	/**
	 * buttons 			✅
	 * image and media 	✅
	 * image grid 		✅
	 * image only 		✅
	 * headline 		✅
	 * text only 		✅
	 * promo 			✅
	 * testimonials 	✅
	 * team all 		✅
	 * related 			✅
	 * articles 		✅
	 * case studies 	✅
	 * services 		✅
	 * usp				✅
	 * contact form		✅
	 * newsletter 		✅
	 * video	 		✅
	 */
	return array(
		'buttons',
		'text-and-image',
		'longform-media',
		'image-grid',
		'promo',
		'testimonials',
		'team',
		'related',
		'articles',
		'case-studies',
		'services',
		'usp',
		'contact-form',
		'newsletter',
		'video',

	);
}

add_filter('allowed_block_types', 'ee_mph__guten_default_blocks', 1);

function ee_mph__guten_default_blocks($allowed_blocks)
{


	$blocks = array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list'
	);

	foreach (ee_mph__acf_get_array_of_blocknames() as $blockname) :
		$blocks[] = 'acf/' . $blockname;
	endforeach;



	return $blocks;
}

function ee_mph__acf_find_the_template_path($block_name, $ext = 'php')
{
	// $path = '/blocks/' . $block_name . '/' . $block_name . '.' . $ext;
	// return get_stylesheet_directory_uri() . $path;
	$path = 'blocks/'.$block_name.'/'.$block_name.'.'.$ext;
	return file_exists(get_stylesheet_directory().'/'.$path) ? get_stylesheet_directory() .'/'. $path : plugin_dir_path( __FILE__ ) . $path ;


}



/**
 * Start of block rendering
 * For more info, see https://www.advancedcustomfields.com/resources/acf_register_block_type/
 */


foreach (ee_mph__acf_get_array_of_blocknames() as $blockname) :
	include_once(plugin_dir_path(__FILE__) . 'register/' . $blockname . '.php');
endforeach;
