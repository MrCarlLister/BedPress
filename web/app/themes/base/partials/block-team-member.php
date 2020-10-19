<?php
/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/


$title = get_field( 'title' );


echo '<div class="team-member">';
	echo '<div class="team-member--header">';
		if( !empty( $title ) )
			echo '<h6 class="alt">' . esc_html( $title ) . '</h6>';
	echo '</div>';
echo '</div>';