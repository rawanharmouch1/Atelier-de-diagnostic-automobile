<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage auto-repair-center
 * @since auto-repair-center 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since auto-repair-center 1.0
	 *
	 * @return void
	 */
	function auto_repair_center_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'auto-repair-center-border',
				'label' => esc_html__( 'Borders', 'auto-repair-center' ),
			)
		);

		
	}
	add_action( 'init', 'auto_repair_center_register_block_styles' );
}