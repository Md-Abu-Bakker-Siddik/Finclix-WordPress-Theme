<?php

if (!function_exists('finclix_sidebar_padding')) {
	/**
	 * Generate CSS codes for Sidebar Padding
	 */
	function finclix_sidebar_padding() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $finclix_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $finclix_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $finclix_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $finclix_redux_theme_opt[$var_name]['padding-left'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_padding');
}


if (!function_exists('finclix_sidebar_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Background Color
	 */
	function finclix_sidebar_bg_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_bg_color');
}


if (!function_exists('finclix_sidebar_text_align')) {
	/**
	 * Generate CSS codes for Sidebar Text Alignment
	 */
	function finclix_sidebar_text_align() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-text-align';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['text-align'] = $finclix_redux_theme_opt[$var_name];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_text_align');
}





if (!function_exists('finclix_sidebar_title_padding')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Padding
	 */
	function finclix_sidebar_title_padding() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $finclix_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $finclix_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $finclix_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $finclix_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $finclix_redux_theme_opt[$var_name]['padding-left'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_title_padding');
}


if (!function_exists('finclix_sidebar_title_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Background Color
	 */
	function finclix_sidebar_title_bg_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_title_bg_color');
}


if (!function_exists('finclix_sidebar_title_text_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Text Color
	 */
	function finclix_sidebar_title_text_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-text-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_title_text_color');
}


if (!function_exists('finclix_sidebar_title_font_size')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Font Size
	 */
	function finclix_sidebar_title_font_size() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-font-size';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['font-size'] = $finclix_redux_theme_opt[$var_name] . 'px';
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_title_font_size');
}


if (!function_exists('finclix_sidebar_title_line_bottom_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Line Bottom Color
	 */
	function finclix_sidebar_title_line_bottom_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-line-bottom-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title.widget-title-line-bottom:after'
		);

		if( !finclix_get_redux_option( 'sidebar-settings-sidebar-title-show-line-bottom' ) ) {
			return;
		}

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
	add_action('finclix_dynamic_css_generator_action', 'finclix_sidebar_title_line_bottom_color');
}