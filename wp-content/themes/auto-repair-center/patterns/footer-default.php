<?php
/**
 * Footer Default
 * 
 * slug: auto-repair-center/footer-default
 * title: Footer Default
 * categories: auto-repair-center
 */
$theme_data = wp_get_theme();
$theme_uri = $theme_data->get( 'ThemeURI' );
$author_uri = $theme_data->get( 'AuthorURI' );
$wordpress_uri = '//wordpress.org/';
return array(
    'title'      =>__( 'Footer Default', 'auto-repair-center' ),
    'categories' => array( 'auto-repair-center' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"alignwide wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontFamily":"saira"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-saira-font-family" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontFamily":"rajdhani"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-rajdhani-font-family" style="font-size:30px;font-style:normal;font-weight:400"><strong>'. esc_html('Helps','auto-repair-center') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontFamily":"rubik"} -->
<!-- wp:navigation-link {"label":"Design Skills","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Help","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Privacy Policy","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Terms And Conditions","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shipping details","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontFamily":"rajdhani"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-rajdhani-font-family" style="font-size:30px;font-style:normal;font-weight:400"><strong>'. esc_html('Categories','auto-repair-center') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontFamily":"rubik"} -->
<!-- wp:navigation-link {"label":"Design Skills","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Development","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Marketing Finance","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Accounting IT","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Software Sales","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Marketing","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontFamily":"rajdhani"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-rajdhani-font-family" style="font-size:30px;font-style:normal;font-weight:400"><strong>'. esc_html('Quick Links','auto-repair-center') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","className":"is-head-menu","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"fontFamily":"rubik"} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Courses","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"rajdhani"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"lineHeight":"1.8"}},"textColor":"background","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="line-height:1.8">'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"upper-heading","fontFamily":"rubik"} -->
<p class="has-text-align-left has-background-color has-text-color has-link-color has-rubik-font-family has-upper-heading-font-size"><span class="dashicons dashicons-email-alt"></span>'. esc_html('  support@example.com','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"upper-heading","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-upper-heading-font-size"><span class="dashicons dashicons-phone"></span>'. esc_html('  +123 456 7890','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"upper-heading","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-upper-heading-font-size"><span class="dashicons dashicons-admin-home"></span>'. esc_html('  123, Red Hills, Chicago,IL, USA','auto-repair-center') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"black","className":"copyright-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group copyright-text has-black-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"wow fadeInUp","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-center wow fadeInUp has-background-color has-text-color has-link-color has-rubik-font-family has-medium-font-size"><a href="' . $theme_uri . '"target="_blank">'. esc_html('Auto WordPress Theme ','property-management-company') .'</a> '. esc_html(' By ','auto-repair-center') .'<a href="' . $author_uri . '"target="_blank">'. esc_html('WP Radiant','auto-repair-center') .'</a> | '. esc_html('Proudly powered by','auto-repair-center') .' <a href="' . $wordpress_uri . '"target="_blank">'. esc_html('WordPress','auto-repair-center') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

 <!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-button"} -->
<div class="wp-block-button scroll-top-button"><a class="wp-block-button__link wp-element-button"><span class="dashicons dashicons-arrow-up-alt"></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->',
);