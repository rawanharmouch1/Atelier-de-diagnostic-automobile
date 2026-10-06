<?php
/**
 * Demo import for Auto Repair Center.
 *
 * @package Auto Repair Center
 */

add_action( 'wp_ajax_auto_repair_center_run_demo_import', 'auto_repair_center_run_demo_import' );

/**
 * Import demo products and categories.
 *
 * @return true|WP_Error
 */
function auto_repair_center_import_demo_products_data() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return new WP_Error( 'woocommerce_not_active', 'WooCommerce not active' );
	}

	$auto_repair_center_category_ids = auto_repair_center_create_demo_categories();
	$auto_repair_center_products     = auto_repair_center_get_demo_products();

	if ( get_option( 'auto_repair_center_demo_import_completed' ) ) {
		auto_repair_center_assign_categories_to_demo_products( $auto_repair_center_products, $auto_repair_center_category_ids );
		return true;
	}

	foreach ( $auto_repair_center_products as $auto_repair_center_product ) {
		$auto_repair_center_product_id = wp_insert_post(
			array(
				'post_title'   => $auto_repair_center_product['title'],
				'post_content' => $auto_repair_center_product['description'],
				'post_excerpt' => $auto_repair_center_product['short_description'],
				'post_status'  => 'publish',
				'post_type'    => 'product',
			)
		);

		if ( is_wp_error( $auto_repair_center_product_id ) ) {
			continue;
		}

		update_post_meta( $auto_repair_center_product_id, '_regular_price', $auto_repair_center_product['price'] );
		update_post_meta( $auto_repair_center_product_id, '_price', $auto_repair_center_product['price'] );

		if ( ! empty( $auto_repair_center_category_ids ) ) {
			wp_set_object_terms(
				$auto_repair_center_product_id,
				$auto_repair_center_category_ids,
				'product_cat'
			);
		}

		if ( ! empty( $auto_repair_center_product['image'] ) && file_exists( $auto_repair_center_product['image'] ) ) {
			if ( ! function_exists( 'media_handle_sideload' ) ) {
				require_once ABSPATH . 'wp-admin/includes/media.php';
				require_once ABSPATH . 'wp-admin/includes/file.php';
				require_once ABSPATH . 'wp-admin/includes/image.php';
			}

			$auto_repair_center_tmp_file = wp_tempnam( $auto_repair_center_product['image'] );
			if ( $auto_repair_center_tmp_file ) {
				copy( $auto_repair_center_product['image'], $auto_repair_center_tmp_file );
				$auto_repair_center_file_array = array(
					'name'     => basename( $auto_repair_center_product['image'] ),
					'tmp_name' => $auto_repair_center_tmp_file,
				);

				$auto_repair_center_attachment_id = media_handle_sideload( $auto_repair_center_file_array, $auto_repair_center_product_id );

				if ( is_wp_error( $auto_repair_center_attachment_id ) ) {
					@unlink( $auto_repair_center_tmp_file );
				} else {
					set_post_thumbnail( $auto_repair_center_product_id, $auto_repair_center_attachment_id );
				}
			}
		}
	}

	auto_repair_center_assign_categories_to_demo_products( $auto_repair_center_products, $auto_repair_center_category_ids );

	update_option( 'auto_repair_center_demo_import_completed', true );

	return true;
}

/**
 * Create demo product categories and return their IDs.
 *
 * @return array<int>
 */
function auto_repair_center_create_demo_categories() {
	$auto_repair_center_categories = array(
		array(
			'name' => 'Tyres',
			'slug' => 'tyres',
		),
		array(
			'name' => 'Alloy Rims',
			'slug' => 'alloy-rims',
		),
		array(
			'name' => 'Car Hoods',
			'slug' => 'car-hoods',
		),
		array(
			'name' => 'Engine Parts',
			'slug' => 'engine-parts',
		),
	);


	$auto_repair_center_category_ids = array();

	foreach ( $auto_repair_center_categories as $auto_repair_center_cat ) {
		$auto_repair_center_term = term_exists( $auto_repair_center_cat['slug'], 'product_cat' );

		if ( ! $auto_repair_center_term ) {
			$auto_repair_center_term = wp_insert_term(
				$auto_repair_center_cat['name'],
				'product_cat',
				array(
					'slug' => $auto_repair_center_cat['slug'],
				)
			);
		}

		if ( is_wp_error( $auto_repair_center_term ) ) {
			continue;
		}

		if ( is_array( $auto_repair_center_term ) && isset( $auto_repair_center_term['term_id'] ) ) {
			$auto_repair_center_category_ids[] = (int) $auto_repair_center_term['term_id'];
		} else {
			$auto_repair_center_category_ids[] = (int) $auto_repair_center_term;
		}
	}

	return $auto_repair_center_category_ids;
}

/**
 * Get demo product definitions.
 *
 * @return array<int, array<string, string>>
 */
function auto_repair_center_get_demo_products() {
	return array(
		array(
			'title'             => 'All-Season Performance Tyre',
			'price'             => '89.99',
			'image'             => get_template_directory() . '/assets/images/image-01.png',
			'short_description' => 'Durable tyre designed for all weather conditions.',
			'description'       => 'This all-season tyre offers excellent grip, stability, and long-lasting performance for both city and highway driving.',
		),
		array(
			'title'             => 'Sport Alloy Rim 17 Inch',
			'price'             => '150.00',
			'image'             => get_template_directory() . '/assets/images/image-02.png',
			'short_description' => 'Stylish alloy rim with a modern sporty finish.',
			'description'       => 'Enhance your vehicle’s appearance and performance with this lightweight and durable 17-inch alloy rim.',
		),
		array(
			'title'             => 'Front Car Hood Panel',
			'price'             => '220.00',
			'image'             => get_template_directory() . '/assets/images/image-03.png',
			'short_description' => 'High-quality replacement hood for various models.',
			'description'       => 'Built with strong metal and precise fitment, this hood panel ensures safety and durability for your vehicle.',
		),
		array(
			'title'             => 'Engine Oil Filter Kit',
			'price'             => '25.00',
			'image'             => get_template_directory() . '/assets/images/image-04.png',
			'short_description' => 'Reliable oil filter for engine protection.',
			'description'       => 'Keep your engine clean and efficient with this premium oil filter kit designed for long-lasting performance.',
		),
	);
}

/**
 * Ensure all demo products are assigned to demo categories.
 *
 * @param array<int, array<string, string>> $auto_repair_center_products Demo products.
 * @param array<int>                        $auto_repair_center_category_ids Demo category IDs.
 */
function auto_repair_center_assign_categories_to_demo_products( $auto_repair_center_products, $auto_repair_center_category_ids ) {
	if ( empty( $auto_repair_center_category_ids ) ) {
		return;
	}

	foreach ( $auto_repair_center_products as $auto_repair_center_product ) {
		if ( empty( $auto_repair_center_product['title'] ) ) {
			continue;
		}

		$auto_repair_center_product_slug = sanitize_title( $auto_repair_center_product['title'] );
		$auto_repair_center_existing_product = get_page_by_path( $auto_repair_center_product_slug, OBJECT, 'product' );

		if ( $auto_repair_center_existing_product && ! empty( $auto_repair_center_existing_product->ID ) ) {
			wp_set_object_terms(
				(int) $auto_repair_center_existing_product->ID,
				$auto_repair_center_category_ids,
				'product_cat'
			);
		}
	}
}

/**
 * Import demo products for Auto Repair Center.
 */
function auto_repair_center_run_demo_import() {
	check_ajax_referer( 'auto_repair_center_demo_nonce', 'nonce' );

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_send_json_error( 'Permission denied' );
	}

	$result = auto_repair_center_import_demo_products_data();

	if ( is_wp_error( $result ) ) {
		wp_send_json_error( $result->get_error_message() );
	}

	if ( get_option( 'auto_repair_center_demo_import_completed' ) ) {
		wp_send_json_success( 'Demo imported successfully' );
	}

	wp_send_json_success( 'Demo data processed successfully' );
}
