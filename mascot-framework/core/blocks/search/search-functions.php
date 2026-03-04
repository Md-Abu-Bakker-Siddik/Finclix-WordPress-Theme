<?php


if(!function_exists('finclix_get_search_page')) {
	/**
	 * Function that Renders Search Page HTML Codes
	 * @return HTML
	 */
	function finclix_get_search_page( $container_type = 'container' ) {
		$params = array();

		$params['container_type'] = $container_type;

		//Produce HTML version by using the parameters (filename, variation, folder name, parameters)
		$html = finclix_get_blocks_template_part( 'search-page-parts', null, 'search/tpl', $params );

		return $html;
	}
}