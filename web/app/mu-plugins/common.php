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

