<?php


if (!function_exists('finclix_preloader_bg_color')) {
	/**
	 * Generate CSS codes for BG Color of Preloader
	 */
	function finclix_preloader_bg_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'general-settings-page-preloader-bg-color';
		$declaration = array();
		$selector = array(
			'#preloader.three-layer-loaderbg .layer .overlay',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $finclix_redux_theme_opt[$var_name];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_preloader_bg_color');
}

if (!function_exists('finclix_preloading_text_color')) {
	/**
	 * Generate CSS codes for text Color of Preloading text
	 */
	function finclix_preloading_text_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'general-settings-page-preloading-text-color';
		$declaration = array();
		$selector = array(
			'#preloader .txt-loading .letters-loading',
			'#preloader .txt-loading .letters-loading:before',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['color'] = $finclix_redux_theme_opt[$var_name];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_preloading_text_color');
}

if (!function_exists('finclix_preloading_text_typography')) {
	/**
	 * Generate CSS codes for Title Typography
	 */
	function finclix_preloading_text_typography() {
		$var_name = 'general-settings-page-preloading-text-typography';
		$declaration = array();
		$selector = array(
			'#preloader .txt-loading .letters-loading',
			'#preloader .txt-loading .letters-loading:before',
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_preloading_text_typography');
}