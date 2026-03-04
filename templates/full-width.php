<?php
/**
 * Template Name: Full Width
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

finclix_get_title_area_parts();

finclix_get_page( 'container-fluid pt-0 pb-0', 'no-sidebar' );

get_footer();
