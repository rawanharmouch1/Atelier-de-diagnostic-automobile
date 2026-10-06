<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage auto-repair-center
 * @since auto-repair-center 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function auto_repair_center_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Auto_Repair_Center_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Auto Repair Center Pro', 'auto-repair-center' ),
		'button_text'      => __( 'Upgrade Pro', 'auto-repair-center' ),
		'url'              => 'https://www.wpradiant.net/products/auto-repair-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'auto_repair_center_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function auto_repair_center_custom_control_scripts() {
	wp_enqueue_script( 'auto-repair-center-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'auto-repair-center-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'auto_repair_center_custom_control_scripts' );