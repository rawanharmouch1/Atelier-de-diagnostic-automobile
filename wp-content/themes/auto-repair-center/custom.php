<?php 

add_action( 'admin_menu', 'auto_repair_center_menu' );
add_action( 'admin_init', 'auto_repair_center_register_settings' );

function auto_repair_center_menu() {
    add_menu_page(
        'Theme Options',
        'Theme Option',
        'manage_options',
        'auto_repair_center_theme_option',
        'auto_repair_center_preloader_page_callback',
        'dashicons-screenoptions',
        30
    );
}

function auto_repair_center_register_settings() {
    register_setting( 'auto_repair_center_preloader_settings', 'auto_repair_center_preloader_toggle' );
}

function auto_repair_center_preloader_page_callback() {
    ?>
    <div class="menu-box">
        <h2><?php esc_html__('Preloader Setting','auto-repair-center'); ?></h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'auto_repair_center_preloader_settings' ); ?>
            <?php $toggle = get_option( 'auto_repair_center_preloader_toggle', 'off' ); ?>
            <label for="auto_repair_center_preloader_toggle">
                <input type="checkbox" id="auto_repair_center_preloader_toggle" name="auto_repair_center_preloader_toggle" <?php checked( $toggle, 'on' ); ?> />
                <?php esc_html__('Enable Preloader','auto-repair-center'); ?>
            </label>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}