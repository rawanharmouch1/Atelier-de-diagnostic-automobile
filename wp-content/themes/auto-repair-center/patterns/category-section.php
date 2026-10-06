<?php
/**
 * Category Section
 * 
 * slug: auto-repair-center/category-section
 * title: Category Section
 * categories: auto-repair-center
 */

$auto_repair_center_plugins_list = get_option( 'active_plugins' );
$auto_repair_center_plugin = 'woocommerce/woocommerce.php';
$auto_repair_center_results = in_array( $auto_repair_center_plugin , $auto_repair_center_plugins_list);
if ( $auto_repair_center_results )  {

return array(
    'title'      =>__( 'Category Section', 'auto-repair-center' ),
    'categories' => array( 'auto-repair-center' ),
    'content'    => '<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group">
<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","fontFamily":"rajdhani"} -->
<h3 class="wp-block-heading has-text-align-center has-rajdhani-font-family has-large-font-size">'. esc_html('Our Best Product','auto-repair-center') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#545454"},"elements":{"link":{"color":{"text":"#545454"}}}},"fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-center has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="color:#545454">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":22,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template product-box-image","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"className":"single-product-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-product-box"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"normal","fontFamily":"rajdhani","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontFamily":"rubik","fontSize":"small"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"className":"banner-btn-first","backgroundColor":"primary","textColor":"background","fontFamily":"rajdhani","fontSize":"upper-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"5px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"product-pagination-box","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"className":"product-pagination-box"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);

} else {

return array(
    'title'      =>__( 'Category Section', 'auto-repair-center' ),
    'categories' => array( 'auto-repair-center' ),
    'content'    => '<!-- wp:group {"tagName":"main","className":"wp-block-group alignfull","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","fontFamily":"rajdhani"} -->
<h3 class="wp-block-heading has-text-align-center has-rajdhani-font-family has-large-font-size">'. esc_html('Our Best Product','auto-repair-center') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#545454"},"elements":{"link":{"color":{"text":"#545454"}}}},"fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-center has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="color:#545454">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','auto-repair-center') .'</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":40,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-01.png" alt="" class="wp-image-40"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":65,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-02.png" alt="" class="wp-image-65"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":66,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-03.png" alt="" class="wp-image-66"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":67,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-04.png" alt="" class="wp-image-67"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":66,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-03.png" alt="" class="wp-image-66"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":40,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-01.png" alt="" class="wp-image-40"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":67,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-04.png" alt="" class="wp-image-67"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"image-main-group wow pulse animated","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-main-group wow pulse animated"><!-- wp:image {"id":65,"sizeSlug":"full","linkDestination":"none","className":"product-image"} -->
<figure class="wp-block-image size-full product-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image-02.png" alt="" class="wp-image-65"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"product-icon-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-icon-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"lightbox":{"enabled":false},"id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":47,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/quickview.png" alt="" class="wp-image-47"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal","fontFamily":"rajdhani"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-rajdhani-font-family has-normal-font-size"><a href="#">'. esc_html('Product Name Here','auto-repair-center') .'</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-rubik-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">$25</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":57,"sizeSlug":"full","linkDestination":"none","className":"review-star"} -->
<figure class="wp-block-image size-full review-star"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-57"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"5px"}},"className":"banner-btn-first","fontSize":"extra-small","fontFamily":"rajdhani"} -->
<div class="wp-block-button has-custom-font-size banner-btn-first has-rajdhani-font-family has-extra-small-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px"><strong>'. esc_html('Add To Cart','auto-repair-center') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->',
);

}