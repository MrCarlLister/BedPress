<?php

/**
 * Register image and text block
 *
 * @return void
 */
function ee_mph__acf_register_text_and_image_block()
{

	if (!function_exists('acf_register_block_type'))
		return;

	$block_name = 'text-and-image';
	$render_template = ee_mph__acf_find_the_template_path($block_name);

	acf_register_block_type(array(
		'name'				=> $block_name,
		'title'				=> __('Text and image', get_bloginfo('name')),
		'description'		=> __('Display a text block with image options'),
		'category'			=> 'common',
		'icon'				=> 'playlist-video',
		'keywords'			=> array('video', 'image', 'call to action', 'text'),
		// 'post_types'		=> array('posts','pages'),
		'mode'				=> 'preview',
		// 'align'				=> '',
		// 'align_text'		=> 'left',
		// 'align_content'		=> 'top',
		'render_template'   => $render_template,
		// 'enqueue_style'		=> ee_mph__acf_find_the_template_path($block_name,'css'),
		// 'enqueue_script'		=> ee_mph__acf_find_the_template_path($block_name,'js'),
		// 'enqueue_assets'	=> function(){
		// 	wp_enqueue_style( 'block-testimonial', ee_mph__acf_find_the_template_path($block_name,'css') );
		// 	wp_enqueue_script( 'block-testimonial', ee_mph__acf_find_the_template_path($block_name,'js'), array('jquery'), '', true );
		//   },
		// 'supports'			=> array(
		// 	// disable alignment toolbar
		// 	'align' => false,

		// 	// customize alignment toolbar
		// 	'align' => array( 'left', 'right', 'full' ),

		// 	// Show text alignment toolbar.
		// 	'align_text' => true,

		// 	// Show content alignment toolbar.
		// 	'align_content' => true,

		// 	// disable preview/edit toggle
		// 	'mode' => false,

		// 	'multiple' => false

		// ),
		// 'example'  => array(
		// 	'attributes' => array(
		// 		'mode' => 'preview',
		// 		'data' => array(
		// 		  'testimonial'   => "Your testimonial text here",
		// 		  'author'        => "John Smith"
		// 		)
		// 	)
		// )

	));
}
add_action('acf/init', 'ee_mph__acf_register_text_and_image_block');
