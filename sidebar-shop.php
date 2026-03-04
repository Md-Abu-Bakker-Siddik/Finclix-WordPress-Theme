<?php
/**
 * The template for the left sidebar
 */


if( is_product() ) {
	$sidebar = finclix_get_redux_option( 'shop-single-product-settings-sidebar-choose' );
} else {
	$sidebar = finclix_get_redux_option( 'shop-archive-settings-sidebar-choose' );
}

if ( is_active_sidebar( $sidebar )  ) :
	dynamic_sidebar( $sidebar );
endif;

