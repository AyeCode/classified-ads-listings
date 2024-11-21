<?php
/**
 * Title: Classifieds - Transparent Header
 * Slug: classified-ads-listings/header-transparent
 * Categories: blockstrap-site-header
 * Viewport Width: 1280
 */

 $logo_url = esc_url( get_theme_file_uri( 'assets/images/logo-white.png' ) ); /* <?php echo esc_url( $logo_url ); ?> */
 $home_url = get_home_url(); /* <?php echo esc_url( $home_url ); ?> */
$txt_skip = __( 'Skip to main content', 'classified-ads-listings' ); /* <?php echo esc_attr( $txt_skip ); ?> */

?>
<!-- wp:blockstrap/blockstrap-widget-skip-links {"content":"\u003ca href=\u0022#main\u0022 class=\u0022btn btn-primary\u0022\u003e<?php echo esc_attr( $txt_skip ); ?>\u003c/a\u003e","sd_shortcode":"[bs_skip_links text1='<?php echo esc_attr( $txt_skip ); ?>'  hash1='main'  text2=''  hash2=''  text3=''  hash3=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  css_class='' ]"} /-->

<!-- wp:blockstrap/blockstrap-widget-navbar {"bg":"white","bg_color":"rgba(255,255,255,0.84)","bgtus":true,"cscos":true,"container":"navbar-dark","inner_container":"container","mb_lg":"","pr":"2","pl":"3","pt_lg":"3","pb_lg":"3","border":"0","shadow":"shadow-sm","position":"fixed-top","sd_shortcode":"[bs_navbar bg='white'  bg_color='rgba(255,255,255,0.84)'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bgtus='true'  cscos='true'  container='navbar-dark'  inner_container='container'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr='2'  pb=''  pl='3'  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='3'  pr_lg=''  pb_lg='3'  pl_lg=''  border='0'  rounded=''  rounded_size=''  shadow='shadow-sm'  position='fixed-top'  sticky_offset_top=''  sticky_offset_bottom='' ]","sd_shortcode_close":"[/bs_navbar]"} -->
<nav class="navbar navbar-expand-lg pe-2 ps-3 pt-3 pb-3 border-0 bg-white bg-image-fixed bg-transparent-until-scroll color-scheme-flip-on-scroll navbar-dark fixed-top shadow-sm"><div class="wp-block-blockstrap-blockstrap-widget-navbar container"><!-- wp:blockstrap/blockstrap-widget-navbar-brand {"text":"","icon_image":"<?php echo esc_url( $logo_url ); ?>","img_max_width":150,"custom_url":"/","brand_font_size":"h1","brand_font_weight":"font-weight-normal","brand_font_italic":"font-italic","bg_gradient":"linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)","bg_on_text":true,"mb_lg":"","pb_lg":"2","rounded_size":"lg","sd_shortcode":"[bs_navbar_brand text=''  icon_image='<?php echo esc_url( $logo_url ); ?>'  img_max_width='150'  type='home'  custom_url='/'  text_color=''  brand_font_size='h1'  brand_font_weight='font-weight-normal'  brand_font_italic='font-italic'  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)'  bg_on_text='true'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg='2'  pl_lg=''  border=''  rounded=''  rounded_size='lg'  shadow=''  css_class='' ]"} -->
        <a class="navbar-brand d-flex align-items-center pb-2 rounded-lg" href="<?php echo esc_url( $home_url ); ?>"><img class="" alt="Site logo" src="<?php echo esc_url( $logo_url ); ?>" style="max-width:150px" width="150" height="50"/><span class="mb-0 props.attributes.brand_font_size props.attributes.brand_font_weight fst-italic"></span></a>
        <!-- /wp:blockstrap/blockstrap-widget-navbar-brand -->
        <?php
        echo classified_ads_listings_theme_get_default_menu(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        ?>
        </div></nav>
<!-- /wp:blockstrap/blockstrap-widget-navbar -->