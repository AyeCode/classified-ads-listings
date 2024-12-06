<?php

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

    register_block_pattern(
        'blockstrap/header-default',
        array(
            'title'      => esc_html__( 'Default Header', 'classified-ads-listings' ),
            'categories' => array( 'blockstrap-site-header' ),
            'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
                'blockstrap_pattern_header_default',
                ''
            ) : '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"color":{"gradient":"linear-gradient(135deg,rgb(30,169,9) 0%,rgb(30,225,73) 100%)"}},"textColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-light-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg,rgb(30,169,9) 0%,rgb(30,225,73) 100%);padding-top:20px;padding-bottom:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":60} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        )
    );

}


/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

    register_block_pattern(
        'blockstrap/footer-default',
        array(
            'title'      => esc_html__( 'Default Footer', 'classified-ads-listings' ),
            'categories' => array( 'blockstrap-site-footer' ),
            'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
                'blockstrap_pattern_footer_default',
                ''
            ) : '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"backgroundColor":"dark","textColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color has-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-link-color has-small-font-size">
		' . __( 'Designed with WordPress', 'classified-ads-listings' ) . '		</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        )
    );

}


/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

    register_block_pattern(
        'blockstrap/feature-home-default',
        array(
            'title'      => esc_html__( 'Hero home', 'classified-ads-listings' ),
            'categories' => array( 'blockstrap-feature-sections' ),
            'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
                'blockstrap_pattern_feature_home_default',
                ''
            ) : '<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group has-background"><!-- wp:paragraph -->
<p>' . __( 'Classifieds is a lightweight and minimalist WordPress theme that was built specifically to work seamlessly with the BlockStrap page builder plugin.', 'classified-ads-listings' ) . '</p>
<!-- /wp:paragraph --><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->',
        )
    );

}