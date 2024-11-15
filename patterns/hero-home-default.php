<?php
/**
 * Title: Classifieds - Hero Home
 * Slug: classifieds/hero-home-default
 * Categories: blockstrap-hero-sections
 * Viewport Width: 1280
 */

$img_url = esc_url( get_theme_file_uri( 'assets/images/demo/hero-home.webp' ) ); /* <?php echo esc_url( $img_url ); ?> */
$lm_addon_active = defined( 'GEODIRLOCATION_VERSION' );

$txt_treasures = __( 'Treasures in Your Town', 'classifieds' );
$txt_treasures_lm = sprintf( __( 'Treasures in %s', 'classifieds' ),"[gd_location_meta no_wrap='true']");
$txt_treasures_in = $lm_addon_active ? $txt_treasures_lm : $txt_treasures; /* <?php echo esc_attr( $txt_treasures_in ); ?> */
$txt_buy_sell =  __( 'Buy, sell, rent, or exchange. Fast, easy, and convenient.', 'classifieds' ); /* <?php echo esc_attr( $txt_buy_sell ); ?> */
?>

<!-- wp:blockstrap/blockstrap-widget-container {"container":"container-fluid","bg":"custom-color","bg_color":"rgba(0,0,0,0.85)","bg_gradient":"radial-gradient(rgb(5,63,40) 0%,rgba(11,23,18,0.93) 100%)","bg_image_fixed":true,"bg_image":"<?php echo esc_url( $img_url ); ?>","bg_image_id":5211,"bg_image_xy":{"x":0.75,"y":0.99},"text_color":"white","mb_lg":"","pt":"8","pb":"0","pt_lg":"10","pb_lg":"10","position":"position-relative","content":"\u003cdiv class=\u0022bs-counter-number-wrapper text-dark text-start fw-bold  h1 \u0022  \u003e\u003cspan class=\u0022bs-counter-number\u0022 data-auicounter data-auistart=\u00220\u0022 data-auiend=\u002256\u0022 data-auiduration=\u00222000\u0022 data-auisep=\u0022\u0022\u003e56\u003c/span\u003e\u003cspan class=\u0022bs-counter-suffix\u0022\u003eK+\u003c/span\u003e\u003c/div\u003e\u003cdiv class=\u0022bs-counter-title text-start fs-5 \u0022 \u003eMonthly Users\u003c/div\u003e","sd_shortcode":"[bs_container container='container-fluid'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg='custom-color'  bg_color='rgba(0,0,0,0.85)'  bg_gradient='radial-gradient(rgb(5,63,40) 0%,rgba(11,23,18,0.93) 100%)'  bg_image_fixed='true'  bg_image_use_featured='false'  bg_image='<?php echo esc_url( $img_url ); ?>'  bg_image_id='5211'  bg_on_text='false'  text_color='white'  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt='8'  pr=''  pb='0'  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='10'  pr_lg=''  pb_lg='10'  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position='position-relative'  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
<div class="wp-block-blockstrap-blockstrap-widget-container pt-8 pb-0 pt-lg-10 pb-lg-10 bg-custom-color bg-image-fixed text-white container-fluid position-relative" style="background-color:rgba(0,0,0,0.85);background-image:url(<?php echo esc_url( $img_url ); ?>);background-blend-mode:overlay;background-size:cover;background-attachment:fixed;background-position:75% 99%"><!-- wp:blockstrap/blockstrap-widget-container {"text_align_lg":"text-lg-start","mb_lg":"","position":"position-relative","sd_shortcode":"[bs_container container='container'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg='text-lg-start'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position='position-relative'  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
    <div class="wp-block-blockstrap-blockstrap-widget-container bg-image-fixed text-start container position-relative"><!-- wp:blockstrap/blockstrap-widget-container {"container":"row","mb_lg":"","flex_justify_content_lg":"justify-content-lg-center","sd_shortcode":"[bs_container container='row'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg='justify-content-lg-center'  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
        <div class="wp-block-blockstrap-blockstrap-widget-container bg-image-fixed row justify-content-center"><!-- wp:blockstrap/blockstrap-widget-container {"container":"col","col":"12","col_lg":"9","text_align":"text-center","mb_lg":"","pb_lg":"3","border":"0","rounded":"rounded","position":"position-relative","flex_align_self":"align-items-center","sd_shortcode":"[bs_container container='col'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col='12'  col_md=''  col_lg='9'  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align='text-center'  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg='3'  pl_lg=''  border='0'  border_type=''  border_width=''  border_opacity=''  rounded='rounded'  rounded_size=''  shadow=''  position='position-relative'  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self='align-items-center'  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
            <div class="wp-block-blockstrap-blockstrap-widget-container pb-3 col-12 col-lg-9 border-0 bg-image-fixed text-center col position-relative rounded align-items-center"><!-- wp:blockstrap/blockstrap-widget-heading {"text":"<?php echo esc_attr( $txt_treasures_in ); ?>","html_tag":"h1","text_color":"white","text_color_custom":"#0c0d24","font_size":"display-3","font_weight":"font-weight-bold","text_align_lg":"text-lg-center"} -->
                <h1 class="wp-block-blockstrap-blockstrap-widget-heading mb-3 text-white text-center font-weight-bold display-3"><?php echo esc_attr( $txt_treasures_in ); ?></h1>
                <!-- /wp:blockstrap/blockstrap-widget-heading -->

                <!-- wp:blockstrap/blockstrap-widget-heading {"text":"<?php echo esc_attr( $txt_buy_sell ); ?>","html_tag":"p","font_size":"fs-5","text_align":"text-center","mt":"3","mb":"4","mr_md":"0","ml_md":"0","mt_lg":"3","mb_lg":"4"} -->
                <p class="wp-block-blockstrap-blockstrap-widget-heading mt-3 mb-4 me-md-0 ms-md-0 mt-lg-3 mb-lg-4 text-center fs-5"><?php echo esc_attr( $txt_buy_sell ); ?></p>
                <!-- /wp:blockstrap/blockstrap-widget-heading -->

                <!-- wp:geodirectory/geodir-widget-search {"input_border":"0","btn_bg":"primary","btn_rounded_size_lg":"pill","bg":"white","mt":"5","pt":"3","pr":"3","pb":"3","pl":"2","border":"0","rounded":"rounded","rounded_size":"3","rounded_size_lg":"pill","shadow":"shadow-lg","content": "","sd_shortcode":"[gd_search hide_search_input='false'  hide_near_input='false'  input_size=''  bar_flex_wrap=''  bar_flex_wrap_md=''  bar_flex_wrap_lg=''  input_border='0'  input_border_opacity=''  input_rounded_size=''  btn_bg='primary'  btn_rounded_size=''  btn_rounded_size_md=''  btn_rounded_size_lg='pill'  bg='white'  mt='5'  mr=''  mb='3'  ml=''  pt='3'  pr='3'  pb='3'  pl='2'  border='0'  rounded='rounded'  rounded_size='3'  rounded_size_md=''  rounded_size_lg='pill'  shadow='shadow-lg'  css_class='' ]"} -->
                <div class="wp-block-geodirectory-geodir-widget-search"></div>
                <!-- /wp:geodirectory/geodir-widget-search --></div>
            <!-- /wp:blockstrap/blockstrap-widget-container --></div>
        <!-- /wp:blockstrap/blockstrap-widget-container -->

        <!-- wp:blockstrap/blockstrap-widget-container {"container":"row","mb_lg":"","flex_justify_content_lg":"justify-content-lg-center","sd_shortcode":"[bs_container container='row'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg='justify-content-lg-center'  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
        <div class="wp-block-blockstrap-blockstrap-widget-container bg-image-fixed row justify-content-center"><!-- wp:blockstrap/blockstrap-widget-container {"container":"col","col_lg":"7","mb_lg":"","sd_shortcode":"[bs_container container='col'  h100=''  row_cols=''  row_cols_md=''  row_cols_lg=''  col=''  col_md=''  col_lg='7'  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bg_on_text='false'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  border_type=''  border_width=''  border_opacity=''  rounded=''  rounded_size=''  shadow=''  position=''  sticky_offset_top=''  sticky_offset_bottom=''  display=''  display_md=''  display_lg=''  flex_align_items=''  flex_align_items_md=''  flex_align_items_lg=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  flex_align_self=''  flex_align_self_md=''  flex_align_self_lg=''  flex_order=''  flex_order_md=''  flex_order_lg=''  overflow=''  max_height=''  scrollbars=''  hover_animations=''  visibility_conditions=''  anchor=''  css_class='' ]","sd_shortcode_close":"[/bs_container]"} -->
            <div class="wp-block-blockstrap-blockstrap-widget-container col-7 bg-image-fixed col"><!-- wp:geodirectory/geodir-widget-categories {"hide_empty":true,"max_level":"0","max_count":"5","sort_by":"az","design_type":"icon-top","row_items":"5","row_positioning":"center","card_padding_inside":"1","card_color":"transparent","card_shadow":"none","icon_color":"white","icon_size":"h4","cat_text_color":"white","cat_font_size":"h6","cat_font_weight":"font-weight-normal","cat_font_case":"text-capitalize","hide_count":true,"content": "","sd_shortcode":"[gd_categories title=''  widget_title_tag=''  widget_title_size_class=''  widget_title_align_class=''  widget_title_color_class=''  widget_title_border_class=''  widget_title_border_color_class=''  widget_title_mt_class=''  widget_title_mr_class=''  widget_title_mb_class=''  widget_title_ml_class=''  widget_title_pt_class=''  widget_title_pr_class=''  widget_title_pb_class=''  widget_title_pl_class=''  post_type='0'  cpt_ajax='false'  filter_ids=''  hide_empty='true'  max_level='0'  max_count='5'  max_count_child='all'  no_cpt_filter='false'  no_cat_filter='false'  sort_by='az'  design_type='icon-top'  row_items='5'  row_positioning='center'  card_padding_inside='1'  card_color='transparent'  card_shadow='none'  hide_icon='false'  use_image='false'  image_size='medium'  icon_color='white'  icon_size='h4'  cat_text_color='white'  cat_text_color_custom=''  cat_font_size='h6'  cat_font_size_custom=''  cat_font_weight='font-weight-normal'  cat_font_case='text-capitalize'  hide_count='true'  badge_position=''  badge_color='light'  badge_text_append='light'  badge_text_color=''  badge_text_color_custom=''  badge_font_size=''  badge_font_size_custom=''  badge_font_weight=''  badge_font_case=''  cpt_title='false'  title_tag='h4'  bg=''  mt=''  mr=''  mb='3'  ml=''  pt=''  pr=''  pb=''  pl=''  border=''  rounded=''  rounded_size=''  shadow=''  css_class='' ]"} -->
                <div class="wp-block-geodirectory-geodir-widget-categories"></div>
                <!-- /wp:geodirectory/geodir-widget-categories --></div>
            <!-- /wp:blockstrap/blockstrap-widget-container --></div>
        <!-- /wp:blockstrap/blockstrap-widget-container --></div>
    <!-- /wp:blockstrap/blockstrap-widget-container --></div>
<!-- /wp:blockstrap/blockstrap-widget-container -->