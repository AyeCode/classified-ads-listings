<?php

if ( class_exists( 'BlockStrap_Admin' ) ) {


	class BlockStrap_Admin_Child extends BlockStrap_Admin {

		public function __construct() {
			parent::__construct();
		}

		/**
		 * Get the theme title.
		 *
		 * @return string|null
		 */
		public function get_theme_title() {
			return __( 'Classifieds', 'classified-ads-listings' );
		}

		/**
		 * Get the required plugins details array.
		 *
		 * @return array
		 */
		public function get_required_plugins() {
			return array(
				'blockstrap-page-builder-blocks' => __( 'BlockStrap Builder', 'classified-ads-listings' ),
                'geodirectory'                   => __( 'GeoDirectory', 'classified-ads-listings' ),
                'userswp'                   => __( 'UsersWP', 'classified-ads-listings' ),
			);
		}
	}

}
