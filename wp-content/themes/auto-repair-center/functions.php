<?php
/**
 * Auto Repair Center functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package auto-repair-center
 * @since auto-repair-center 1.0
 */

if ( ! function_exists( 'auto_repair_center_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since auto-repair-center 1.0
	 *
	 * @return void
	 */
	function auto_repair_center_support() {

		load_theme_textdomain( 'auto-repair-center', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'auto_repair_center_support' );

if ( ! function_exists( 'auto_repair_center_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since auto-repair-center 1.0
	 *
	 * @return void
	 */
	function auto_repair_center_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'auto-repair-center-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'auto-repair-center-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'auto-repair-center-style' );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'auto-repair-center-style', 'rtl', 'replace' );

		wp_enqueue_style('auto-repair-center-swiper-css',
		esc_url(get_template_directory_uri()) . '/assets/css/swiper-bundle.css',
		array()
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'auto_repair_center_styles' );

/* Enqueue Wow Js */
function auto_repair_center_scripts() {

	wp_enqueue_script( 
		'auto-repair-center-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js', 
		array('jquery') 
	);
	wp_enqueue_script( 
		'auto-repair-center-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
	wp_enqueue_script(
        'auto-repair-center-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );
    wp_enqueue_script(
		'auto-repair-center-swiper-js',
		esc_url(get_template_directory_uri()) . '/assets/js/swiper-bundle.js',
		array(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'auto_repair_center_scripts' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_auto-repair-center') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_plugin_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=auto-repair-center'),
    ]);
});

add_action('wp_ajax_check_plugin_activation', function () {
    if (!isset($_POST['plugin']) || empty($_POST['plugin'])) {
        wp_send_json_error(['message' => 'Missing plugin identifier']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    // Map plugin identifiers to their main files
    $auto_repair_center_plugin_map = [
        'woocommerce'          => 'woocommerce/woocommerce.php',
        'wordclever_ai_content_writer'    => 'wordclever-ai-content-writer/wordclever.php',
        'wishlist'             => 'yith-woocommerce-wishlist/init.php',        
        'yith_woocommerce_quick_view'             => 'yith-woocommerce-quick-view/init.php',
    ];

    $auto_repair_center_requested_plugin = sanitize_text_field($_POST['plugin']);

    if (!isset($auto_repair_center_plugin_map[$auto_repair_center_requested_plugin])) {
        wp_send_json_error(['message' => 'Invalid plugin']);
    }

    $auto_repair_center_plugin_file = $auto_repair_center_plugin_map[$auto_repair_center_requested_plugin];
    $auto_repair_center_is_active   = is_plugin_active($auto_repair_center_plugin_file);

    wp_send_json_success(['active' => $auto_repair_center_is_active]);
});

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

function auto_repair_center_theme_setting() {

	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// Add Customizer
	require get_template_directory() . '/inc/customizer.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Notice
	require get_template_directory() . '/get-started/notice.php';

	// Demo Import
	require get_template_directory() . '/get-started/demo-import.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	 // Theme Option
	include get_template_directory() . '/custom.php';
}	
add_action('after_setup_theme', 'auto_repair_center_theme_setting');	