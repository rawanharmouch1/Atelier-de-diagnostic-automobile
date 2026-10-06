<?php
/**
 * Header Default
 * 
 * slug: auto-repair-center/header-default
 * title: Header Default
 * categories: auto-repair-center
 */

return array(
    'title'      =>__( 'Header Default', 'auto-repair-center' ),
    'categories' => array( 'auto-repair-center' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"black","className":"wow fadeInDown header-box-upper","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wow fadeInDown header-box-upper has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"header-box-middle"} -->
<div class="wp-block-columns header-box-middle"><!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"color":{"background":"var(--wp--preset--color--accent)"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"45px","bottom":"45px"}}},"className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo has-background" style="background-color:var(--wp--preset--color--accent);padding-top:45px;padding-right:var(--wp--preset--spacing--30);padding-bottom:45px;padding-left:var(--wp--preset--spacing--30);flex-basis:20%"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large","fontFamily":"rajdhani"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","className":"right-side-box"} -->
<div class="wp-block-column right-side-box" style="flex-basis:80%"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"15px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"var:preset|spacing|80","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"className":"header-box-lower"} -->
<div class="wp-block-columns are-vertically-aligned-center header-box-lower" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"border-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center border-right-box" style="padding-top:0;padding-bottom:0;flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":133,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/mail.png" alt="" class="wp-image-133"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"para-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left para-text has-background-color has-text-color has-link-color has-rubik-font-family has-medium-font-size">'. esc_html('support@example.com','auto-repair-center') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"border-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center border-right-box" style="padding-top:0;padding-bottom:0;flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":132,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/call.png" alt="" class="wp-image-132"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"para-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left para-text has-background-color has-text-color has-link-color has-rubik-font-family has-medium-font-size">'. esc_html('Phone:123 456 7890','auto-repair-center') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"border-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center border-right-box" style="padding-top:0;padding-bottom:0;flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":129,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/location.png" alt="" class="wp-image-129"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"para-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left para-text has-background-color has-text-color has-link-color has-rubik-font-family has-medium-font-size">'. esc_html('121 king street ','auto-repair-center') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:0;flex-basis:20%"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-logos-only social-icon-header","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only social-icon-header" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|70","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"8px","topRight":"8px"}}},"backgroundColor":"background","className":"menu-group"} -->
<div class="wp-block-columns are-vertically-aligned-center menu-group has-background-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:8px;border-bottom-left-radius:0px;border-bottom-right-radius:8px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center","width":"100%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:100%">
<!-- wp:navigation {"className":"is-head-menu","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"textTransform":"capitalize"}},"fontFamily":"rubik"} -->

<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/auto-repair-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro","opensInNewTab":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent","className":"header-side-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group header-side-box has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":15,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/cart.png" alt="" class="wp-image-15"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);