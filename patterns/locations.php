<?php
/**
 * Title: Classifieds - Locations
 * Slug: classifieds/locations
 * Categories: blockstrap-page-content
 * Viewport Width: 1280
 */

// only show if location manger installed
if ( ! defined( 'GEODIRLOCATION_VERSION' ) ) {
    return '';
}

$txt_browse = __( 'Browse Listings by Location', 'classifieds' ); /* <?php echo esc_attr( $txt_browse ); ?> */
$txt_discover = __( 'Discover Whats Available Nearby', 'classifieds' ); /* <?php echo esc_attr( $txt_discover ); ?> */

?>

<!-- wp:blockstrap/blockstrap-widget-container {"mb_lg":"","content":"\u003cdiv class=\u0022bs-counter-number-wrapper text-dark text-start fw-bold  h1 \u0022  \u003e\u003cspan class=\u0022bs-counter-number\u0022 data-auicounter data-auistart=\u00220\u0022 data-auiend=\u002256\u0022 data-auiduration=\u00222000\u0022 data-auisep=\u0022\u0022\u003e56\u003c/span\u003e\u003cspan class=\u0022bs-counter-suffix\u0022\u003eK+\u003c/span\u003e\u003c/div\u003e\u003cdiv class=\u0022bs-counter-title text-start fs-5 \u0022 \u003eMonthly Users\u003c/div\u003e","sd_shortcode":"[bs_container container='container'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
<div class="wp-block-blockstrap-blockstrap-widget-container bg-image-fixed container"><!-- wp:blockstrap/blockstrap-widget-container {"container":"row","row_cols":"1","mb_lg":"","pt":"3","pt_lg":"5","pb_lg":"5","flex_align_items_lg":"align-items-lg-center","sd_shortcode":"[bs_container container='row'  h100=''  row_cols='1'  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt='3'  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='5'  pr_lg=''  pb_lg='5'  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg='align-items-lg-center'  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
    <div class="wp-block-blockstrap-blockstrap-widget-container pt-3 pt-lg-5 pb-5 row-cols-1 bg-image-fixed row align-items-center"><!-- wp:blockstrap/blockstrap-widget-container {"container":"col","mb_lg":"","sd_shortcode":"[bs_container container='col'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
        <div class="wp-block-blockstrap-blockstrap-widget-container bg-image-fixed col"><!-- wp:blockstrap/blockstrap-widget-heading {"text":"<?php echo esc_attr( $txt_browse ); ?>","html_tag":"p","text_color":"gray-dark","text_color_custom":"#0c0d24","font_size":"fs-5","text_align_lg":"text-lg-center","mb_lg":"2"} -->
            <p class="wp-block-blockstrap-blockstrap-widget-heading mb-2 text-gray-dark text-center fs-5"><?php echo esc_attr( $txt_browse ); ?></p>
            <!-- /wp:blockstrap/blockstrap-widget-heading -->

            <!-- wp:blockstrap/blockstrap-widget-heading {"text":"<?php echo esc_attr( $txt_discover ); ?>","html_tag":"h2","text_color_custom":"#0c0d24","font_size":"h1","font_weight":"font-weight-bold","text_align_lg":"text-lg-center","mb_lg":"5"} -->
            <h2 class="wp-block-blockstrap-blockstrap-widget-heading mb-5 text-center font-weight-bold h1"><?php echo esc_attr( $txt_discover ); ?></h2>
            <!-- /wp:blockstrap/blockstrap-widget-heading -->

            <!-- wp:geodirlocation/geodir-location-widget-locations {"show_advanced":true,"output_type":"grid","per_page":6,"grid_item_aspect":"16by9","grid_font_size":"h6","shadow":"large","content":"\u003cdiv class=\u0022geodir-lm-locations bsui sdel-72884c15\u0022 \u003e\t\t\u003cdiv class=\u0022geodir-category-list-in clearfix geodir-location-lity-type-grid\u0022\u003e\n\t\t    \u003cdiv class=\u0022gd-rows-popular-locations gd-wgt-pagi-1875003408\u0022\u003e\u003cdiv class='geodir-location-grid-container row row-cols-1 row-cols-sm-2 row-cols-md-3 '\u003e\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/maryland/carroll-county/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022512\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e-768x512.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/4521bb08-870b-4b51-a7c7-18c1ec1cb22e.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tCarroll County\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/maryland/cecil-county/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022512\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf-768x512.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/9700abf3-5e80-4006-ac9c-0c438eb8aeaf.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tCecil County\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/pennsylvania/derry-township/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022512\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4-768x512.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/9b2ca51e-3eb2-4825-a1eb-0df3d668ced4.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tDerry Township\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/pennsylvania/newton-township/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022512\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e-768x512.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e-768x512.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e-300x200.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/8728d8b1-2c5d-4e7f-9063-dbcada05735e.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tNewton Township\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/pennsylvania/philadelphia/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022567\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e-768x567.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e-768x567.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e-300x221.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e-768x567.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e-300x221.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/ffaa6327-612d-4e66-a166-59d2290b653e.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tPhiladelphia\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\t\t\u003cdiv class='col mb-4'\u003e\n\t\t\t\u003cdiv class=\u0022card h-100 shadow-sm p-0 card bg-dark text-white shadow-sm border-0 m-0\u0022\u003e\n\t\t\t\t\u003ca href=\u0022http://classifieds.local/location/united-states/pennsylvania/west-rockhill/\u0022 class=\u0022embed-has-action ratio ratio-16x9 stretched-link\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022gd-cptcat-cat-left border-0 m-0 overflow-hidden  d-inline-block me-1 align-middle h1\u0022\u003e\n\t\t\t\t\t\t\u003cimg width=\u0022768\u0022 height=\u0022379\u0022 src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAABCAQAAACC0sM2AAAADklEQVR42mP8X88wLAAAK5IBgMYCdqgAAAAASUVORK5CYII=' data-src=\u0022http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f-768x379.jpg\u0022 class=\u0022geodir-lazy-load embed-item-cover-xy align-top  card-img\u0022 alt=\u0022\u0022 decoding=\u0022async\u0022 loading=\u0022lazy\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f-768x379.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f-300x148.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f.jpg 1024w\u0022 sizes=\u0022(max-width: 768px) 100vw, 768px\u0022 data-srcset=\u0022http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f-768x379.jpg 768w, http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f-300x148.jpg 300w, http://classifieds.local/wp-content/uploads/2024/03/f17bb88b-ea3b-4499-b63c-5788265be11f.jpg 1024w\u0022 /\u003e\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/a\u003e\n\t\t\t\t\u003cdiv class=\u0022card-img-overlay d-flex align-items-end text-center p-0 pb-3 img-gradient-overlay\u0022 style=\u0022z-index: 0;\u0022\u003e\n\t\t\t\t\t\u003cdiv class=\u0022card-body text-center btn btn-link  pb-2 overflow-hidden text-decoration-none\u0022\u003e\n\t\t\t\t\t\t\u003ch3 class=\u0022gd-cptcat-cat-right text-truncate text-white mb-0  fw-bold  h6  text-uppercase \u0022\u003e\n\t\t\t\t\t\t\tWest Rockhill\t\t\t\t\t\t\u003c/h3\u003e\n\t\t\t\t\t\u003c/div\u003e\n\t\t\t\t\u003c/div\u003e\n\t\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e\u003c/div\u003e\u003cp style=\u0022display:none;\u0022 class=\u0022gd-ajax-wgt-loading\u0022\u003e\u003ci class=\u0022fas fa-cog fa-spin\u0022\u003e\u003c/i\u003e\u003c/p\u003e\u003cscript type=\u0022text/javascript\u0022\u003e\njQuery(document).on('click', '.gd-wgt-pagi-1875003408 .gd-wgt-page', function(e) {\n    var obj = this;\n    var pid = parseInt(jQuery(this).data('page'));\n    var container = jQuery(obj).closest('.gd-rows-popular-locations');\n    var loading = jQuery('.gd-ajax-wgt-loading', jQuery(container).closest('.geodir-widget'));\n    \n    if (!pid \u003e 0 || !(container \u0026\u0026 typeof container != 'undefined')) {\n        return false;\n    }\n    \n    var scatts = \u0022{\\\u0022title\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_tag\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_size_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_align_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_color_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_border_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_border_color_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_mt_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_mr_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_mb_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_ml_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_pt_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_pr_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_pb_class\\\u0022:\\\u0022\\\u0022,\\\u0022widget_title_pl_class\\\u0022:\\\u0022\\\u0022,\\\u0022what\\\u0022:\\\u0022city\\\u0022,\\\u0022slugs\\\u0022:\\\u0022\\\u0022,\\\u0022no_loc\\\u0022:false,\\\u0022show_current\\\u0022:false,\\\u0022country\\\u0022:\\\u0022\\\u0022,\\\u0022region\\\u0022:\\\u0022\\\u0022,\\\u0022city\\\u0022:\\\u0022\\\u0022,\\\u0022output_type\\\u0022:\\\u0022grid\\\u0022,\\\u0022per_page\\\u0022:6,\\\u0022fallback_image\\\u0022:false,\\\u0022grid_per_row\\\u0022:\\\u00223\\\u0022,\\\u0022grid_item_aspect\\\u0022:\\\u002216by9\\\u0022,\\\u0022grid_font_size\\\u0022:\\\u0022h6\\\u0022,\\\u0022grid_font_case\\\u0022:\\\u0022text-uppercase\\\u0022,\\\u0022grid_font_weight\\\u0022:\\\u0022fw-bold\\\u0022,\\\u0022grid_text_align\\\u0022:\\\u0022\\\u0022,\\\u0022grid_text_align_md\\\u0022:\\\u0022\\\u0022,\\\u0022grid_text_align_lg\\\u0022:\\\u0022\\\u0022,\\\u0022type\\\u0022:\\\u0022\\\u0022,\\\u0022icon_class\\\u0022:\\\u0022\\\u0022,\\\u0022shadow\\\u0022:\\\u0022large\\\u0022,\\\u0022color\\\u0022:\\\u0022\\\u0022,\\\u0022bg_color\\\u0022:\\\u0022#0073aa\\\u0022,\\\u0022txt_color\\\u0022:\\\u0022#ffffff\\\u0022,\\\u0022size\\\u0022:\\\u0022\\\u0022,\\\u0022pagi_t\\\u0022:false,\\\u0022pagi_b\\\u0022:false,\\\u0022pagi_info\\\u0022:\\\u0022\\\u0022,\\\u0022mt\\\u0022:\\\u0022\\\u0022,\\\u0022mr\\\u0022:\\\u0022\\\u0022,\\\u0022mb\\\u0022:\\\u0022\\\u0022,\\\u0022ml\\\u0022:\\\u0022\\\u0022,\\\u0022css_class\\\u0022:\\\u0022\\\u0022,\\\u0022country_val\\\u0022:\\\u0022\\\u0022,\\\u0022region_val\\\u0022:\\\u0022\\\u0022,\\\u0022city_val\\\u0022:\\\u0022\\\u0022}\u0022;\n    \n    var data = {\n        'action': 'gd_popular_location_list',\n        '_nonce': 'c16b2560bf',\n        'geodir_ajax': true,\n        'pageno': pid,\n        'scatts': scatts,\n    };\n    \n    jQuery(document).ajaxStop(function() {\n        jQuery('ul', container).css({'opacity': '1'});\n        loading.hide();\n    });\n\n    jQuery('ul', container).css({'opacity': '0.4'});\n    loading.show();\n\n    jQuery.post(geodir_params.ajax_url, data, function(response) {\n        if (response \u0026\u0026 response != '0') {\n            loading.hide();\n            jQuery(container).html(response);\n            geodir_init_lazy_load();\n        }\n    });\n});\n\u003c/script\u003e\n\t\t\u003c/div\u003e\n\t\t\u003c/div\u003e"} -->
            <div class="wp-block-geodirlocation-geodir-location-widget-locations">[gd_locations title=''  widget_title_tag=''  widget_title_size_class=''  widget_title_align_class=''  widget_title_color_class=''  widget_title_border_class=''  widget_title_border_color_class=''  widget_title_mt_class=''  widget_title_mr_class=''  widget_title_mb_class=''  widget_title_ml_class=''  widget_title_pt_class=''  widget_title_pr_class=''  widget_title_pb_class=''  widget_title_pl_class=''  what='city'  slugs=''  no_loc='false'  show_current='false'  country=''  region=''  city=''  output_type='grid'  per_page='6'  fallback_image='false'  grid_per_row='3'  grid_item_aspect='16by9'  grid_font_size='h6'  grid_font_case='text-uppercase'  grid_font_weight='font-weight-bold'  grid_text_align=''  grid_text_align_md=''  grid_text_align_lg=''  type=''  icon_class=''  shadow='large'  color=''  bg_color='#0073aa'  txt_color='#ffffff'  size=''  pagi_t='false'  pagi_b='false'  pagi_info=''  mt=''  mr=''  mb=''  ml=''  css_class='' ]</div>
            <!-- /wp:geodirlocation/geodir-location-widget-locations --></div>
        <!-- /wp:blockstrap/blockstrap-widget-container --></div>
    <!-- /wp:blockstrap/blockstrap-widget-container --></div>
<!-- /wp:blockstrap/blockstrap-widget-container -->