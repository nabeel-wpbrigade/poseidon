<?php

/**
 * Theme setup, support and script/style enqueue
 * 
 */

if ( ! function_exists( 'poseidon_scripts_styles' ) ) {
	
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function poseidon_scripts_styles() {

		// dequeue some scripts loaded by 'poseidon'
		wp_dequeue_script( 'jquery-match-height-js' );
		wp_dequeue_script( 'poseidon-main-js' );

		wp_enqueue_style(
			'poseidon',
			POSEIDON_THEME_URI . '/style.css',
			[],
			POSEIDON_THEME_VERSION
		);

		wp_enqueue_style(
			'poseidon-main',
			POSEIDON_THEME_URI . '/assets/css/main.css',
			[],
			POSEIDON_THEME_VERSION
		);
				
		// jQuery iScroll
		wp_enqueue_script(
			'poseidon-main',
			POSEIDON_THEME_URI . '/assets/js/main.js',
			array( 'jquery', 'swiper' ),
			POSEIDON_THEME_VERSION,
			true
		);

	}
}
add_action( 'wp_enqueue_scripts', 'poseidon_scripts_styles', 200 );
