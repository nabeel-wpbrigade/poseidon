<?php

/**
 * Contains all the shortcodes
 * 
 */

if ( ! function_exists('poseidon_current_year_shortcode') ) {
	/**
	 * Get the current year.
	 *
	 * @return string
	 */
	function poseidon_current_year_shortcode() {
		return date( "Y" );
	}
}
add_shortcode( 'poseidon_current_year', 'poseidon_current_year_shortcode' );
