<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
$header_return_true_false = ( finclix_get_redux_option( '404-page-settings-show-header', true ) == true ) ? 'finclix_return_true' : 'finclix_return_false';
add_filter( 'finclix_filter_show_header', $header_return_true_false );

$footer_return_true_false = ( finclix_get_redux_option( '404-page-settings-show-footer', true ) == true ) ? 'finclix_return_true' : 'finclix_return_false';
add_filter( 'finclix_filter_show_footer', $footer_return_true_false );

get_header();

finclix_get_title_area_parts();

finclix_get_404_parts();

get_footer();
