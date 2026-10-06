<?php
/**
 * Banner Section
 * 
 * slug: auto-repair-center/banner
 * title: Banner
 * categories: auto-repair-center
 */

return array(
    'title'      =>__( 'Banner', 'auto-repair-center' ),
    'categories' => array( 'auto-repair-center' ),
    'content'    => '<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png","id":32,"dimRatio":0,"customOverlayColor":"#181719","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":750,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"banner-main-div wow bounceInDown center","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover banner-main-div wow bounceInDown center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#181719"></span><img class="wp-block-cover__image-background wp-image-32" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"35%","className":"banner-column"} -->
<div class="wp-block-column banner-column" style="flex-basis:35%"><!-- wp:group {"className":"clip-path-box wow rubberBand","layout":{"type":"constrained"}} -->
<div class="wp-block-group clip-path-box wow rubberBand"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-large","fontFamily":"rajdhani"} -->
<h2 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-rajdhani-font-family has-extra-large-font-size">'. esc_html('BEST CAR REPAIR &amp; MAINTENANCE SERVICES','auto-repair-center') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"lineHeight":"1.5"}},"textColor":"background","fontSize":"upper-heading","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-upper-heading-font-size" style="line-height:1.5">'. esc_html('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:cover {"overlayColor":"accent","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","className":"banner-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-cover banner-bg" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"buttons-group"} -->
<div class="wp-block-buttons buttons-group"><!-- wp:button {"style":{"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:5px"><strong>'. esc_html('LEARN MORE','auto-repair-center') .'</strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"5px"}},"className":"is-style-outline banner-btn-first","fontSize":"small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size is-style-outline banner-btn-first has-rajdhani-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('MAKE AN APPOINTMENTS','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);