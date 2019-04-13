<?php 

if ( ! function_exists( 'magazine_saga_breadcrumb_content' ) ) :

	/**
	 * Display breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function magazine_saga_breadcrumb_content() {

		// Bail if Breadcrumb disabled.
		$breadcrumb_type = magazine_saga_get_option( 'breadcrumb_type', true );
		if ( 'disabled' === $breadcrumb_type ) {
			return;
		}
		// Bail if Home Page.
		if ( is_front_page() || is_home() ) {
			return;
		}
		// Render breadcrumb.
		switch ( $breadcrumb_type ) {
			case 'simple':
				magazine_saga_get_breadcrumb();
			break;
			case 'advanced':
				if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				}
			break;
			default:
			break;
		}
		return;
	}

endif;

add_action( 'magazine_saga_display_breadcrumb', 'magazine_saga_breadcrumb_content' );
