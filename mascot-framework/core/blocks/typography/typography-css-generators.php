<?php

if (!function_exists('finclix_typography_primary_body')) {
	/**
	 * Generate CSS codes for body, p Typography
	 */
	function finclix_typography_primary_body() {
		$var_name = 'typography-primary-body';
		$declaration = array();
		$selector = array(
			'body',
			'p',
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-family'])) $declaration['--body-font-family'] = $declaration['font-family'];
		if(isset($declaration['font-size'])) $declaration['--body-font-size'] = $declaration['font-size'];
		if(isset($declaration['font-weight'])) $declaration['--body-font-weight'] = $declaration['font-weight'];
		if(isset($declaration['line-height'])) $declaration['--body-line-height'] = $declaration['line-height'];
		if(isset($declaration['color'])) $declaration['--text-color'] = $declaration['color'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_primary_body');
}

if (!function_exists('finclix_typography_primary_link_color')) {
	/**
	 * Generate CSS codes for Primary Link Color
	 */
	function finclix_typography_primary_link_color() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-primary-body-link-color';
		$declaration = array();
		$selector = array(
			'a',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['color'] = $finclix_redux_theme_opt[$var_name];
		$declaration['--link-color'] = $declaration['color'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_primary_link_color');
}



//For Section Title
if (!function_exists('finclix_typography_section_title')) {
	/**
	 * Generate CSS codes for Section Title Typography
	 */
	function finclix_typography_section_title() {
		$var_name = 'typography-section-title';
		$declaration = array();
		$selector = array(
			'.tm-sc-section-title .title-wrapper .title',
			'.tm-sc-section-title .title-wrapper h2.title',
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['color'])) $declaration['--section-title-color'] = $declaration['color'];
		if(isset($declaration['font-size'])) $declaration['--section-title-font-size'] = $declaration['font-size'];
		if(isset($declaration['line-height'])) $declaration['--section-title-line-height'] = $declaration['line-height'];
		if(isset($declaration['font-family'])) $declaration['--section-title-font-family'] = $declaration['font-family'];
		if(isset($declaration['font-weight'])) $declaration['--section-title-font-weight'] = $declaration['font-weight'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_section_title');
}



//For Section Title
if (!function_exists('finclix_typography_section_subtitle')) {
	/**
	 * Generate CSS codes for Section Title Typography
	 */
	function finclix_typography_section_subtitle() {
		$var_name = 'typography-section-subtitle';
		$declaration = array();
		$selector = array(
			'.tm-sc-section-title .title-wrapper .sub-title-outer .subtitle',
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['color'])) $declaration['--section-title-subtitle-color'] = $declaration['color'];
		if(isset($declaration['font-size'])) $declaration['--section-title-subtitle-font-size'] = $declaration['font-size'];
		if(isset($declaration['line-height'])) $declaration['--section-title-subtitle-line-height'] = $declaration['line-height'];
		if(isset($declaration['font-family'])) $declaration['--section-title-subtitle-font-family'] = $declaration['font-family'];
		if(isset($declaration['font-weight'])) $declaration['--section-title-subtitle-font-weight'] = $declaration['font-weight'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_section_subtitle');
}



//For H1-H6
if (!function_exists('finclix_typography_h1_h6')) {
	/**
	 * Generate CSS codes for H1 - H6 Typography
	 */
	function finclix_typography_h1_h6() {
		$var_name = 'typography-h1-h6';
		$declaration = array();
		$selector = array(
			'h1, .h1',
			'h2, .h2',
			'h3, .h3',
			'h4, .h4',
			'h5, .h5',
			'h6, .h6'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-family'])) $declaration['--heading-font-family'] = $declaration['font-family'];
		if(isset($declaration['color'])) $declaration['--headings-color'] = $declaration['color'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h1'] = $declaration['font-weight'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h2'] = $declaration['font-weight'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h3'] = $declaration['font-weight'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h4'] = $declaration['font-weight'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h5'] = $declaration['font-weight'];
		if(isset($declaration['font-weight'])) $declaration['--headings-font-weight-h6'] = $declaration['font-weight'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h1_h6');
}



//For H1
if (!function_exists('finclix_typography_h1')) {
	/**
	 * Generate CSS codes for H1 Typography
	 */
	function finclix_typography_h1() {
		$var_name = 'typography-h1';
		$declaration = array();
		$selector = array(
			'h1, .h1'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h1-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h1');
}

if (!function_exists('finclix_typography_h1_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H1 Margin Top & Bottom
	 */
	function finclix_typography_h1_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h1-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h1, .h1'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h1_margin_top_bottom');
}


//For H2
if (!function_exists('finclix_typography_h2')) {
	/**
	 * Generate CSS codes for H2 Typography
	 */
	function finclix_typography_h2() {
		$var_name = 'typography-h2';
		$declaration = array();
		$selector = array(
			'h2, .h2'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h2-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h2');
}

if (!function_exists('finclix_typography_h2_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H2 Margin Top & Bottom
	 */
	function finclix_typography_h2_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h2-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h2, .h2'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h2_margin_top_bottom');
}


//For H3
if (!function_exists('finclix_typography_h3')) {
	/**
	 * Generate CSS codes for H3 Typography
	 */
	function finclix_typography_h3() {
		$var_name = 'typography-h3';
		$declaration = array();
		$selector = array(
			'h3, .h3'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h3-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h3');
}

if (!function_exists('finclix_typography_h3_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H3 Margin Top & Bottom
	 */
	function finclix_typography_h3_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h3-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h3, .h3'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h3_margin_top_bottom');
}


//For H4
if (!function_exists('finclix_typography_h4')) {
	/**
	 * Generate CSS codes for H4 Typography
	 */
	function finclix_typography_h4() {
		$var_name = 'typography-h4';
		$declaration = array();
		$selector = array(
			'h4, .h4'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h4-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h4');
}

if (!function_exists('finclix_typography_h4_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H4 Margin Top & Bottom
	 */
	function finclix_typography_h4_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h4-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h4, .h4'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h4_margin_top_bottom');
}


//For H5
if (!function_exists('finclix_typography_h5')) {
	/**
	 * Generate CSS codes for H5 Typography
	 */
	function finclix_typography_h5() {
		$var_name = 'typography-h5';
		$declaration = array();
		$selector = array(
			'h5, .h5'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h5-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h5');
}

if (!function_exists('finclix_typography_h5_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H5 Margin Top & Bottom
	 */
	function finclix_typography_h5_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h5-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h5, .h5'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h5_margin_top_bottom');
}


//For H6
if (!function_exists('finclix_typography_h6')) {
	/**
	 * Generate CSS codes for H6 Typography
	 */
	function finclix_typography_h6() {
		$var_name = 'typography-h6';
		$declaration = array();
		$selector = array(
			'h6, .h6'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		if(isset($declaration['font-size'])) $declaration['--h6-font-size'] = $declaration['font-size'];
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h6');
}

if (!function_exists('finclix_typography_h6_margin_top_bottom')) {
	/**
	 * Generate CSS codes for H6 Margin Top & Bottom
	 */
	function finclix_typography_h6_margin_top_bottom() {
		global $finclix_redux_theme_opt;
		$var_name = 'typography-h6-margin-top-bottom';
		$declaration = array();
		$selector = array(
			'h6, .h6'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $finclix_redux_theme_opt ) ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $finclix_redux_theme_opt[$var_name]['margin-top'] != "" ) {
			$declaration['margin-top'] = $finclix_redux_theme_opt[$var_name]['margin-top'];
		}
		if( $finclix_redux_theme_opt[$var_name]['margin-bottom'] != "" ) {
			$declaration['margin-bottom'] = $finclix_redux_theme_opt[$var_name]['margin-bottom'];
		}
		finclix_dynamic_css_generator($selector, $declaration);
	}
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_h6_margin_top_bottom');
}






//For Button default
if (!function_exists('finclix_button_typography_default')) {
	/**
	 * Generate CSS codes for Button default Typography
	 */
	function finclix_button_typography_default() {
		global $finclix_redux_theme_opt;
		$var_name = 'button-typography-btn-default';
		$declaration = array();
		$selector = array(
			'.btn:not(.btn-lg):not(.btn-sm):not(.btn-xs)'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);


		//padding around it
		$var_name = 'button-typography-btn-default-padding';
		$declaration = array();
		$selector = array(
			'.btn:not(.btn-lg):not(.btn-sm):not(.btn-xs)'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_button_typography_default');
}



//For Button lg
if (!function_exists('finclix_button_typography_lg')) {
	/**
	 * Generate CSS codes for Button lg Typography
	 */
	function finclix_button_typography_lg() {
		global $finclix_redux_theme_opt;
		$var_name = 'button-typography-btn-lg';
		$declaration = array();
		$selector = array(
			'.btn.btn-lg'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);


		//padding around it
		$var_name = 'button-typography-btn-lg-padding';
		$declaration = array();
		$selector = array(
			'.btn.btn-lg'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_button_typography_lg');
}



//For Button sm
if (!function_exists('finclix_button_typography_sm')) {
	/**
	 * Generate CSS codes for Button sm Typography
	 */
	function finclix_button_typography_sm() {
		global $finclix_redux_theme_opt;
		$var_name = 'button-typography-btn-sm';
		$declaration = array();
		$selector = array(
			'.btn.btn-sm'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);


		//padding around it
		$var_name = 'button-typography-btn-sm-padding';
		$declaration = array();
		$selector = array(
			'.btn.btn-sm'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_button_typography_sm');
}



//For Button xs
if (!function_exists('finclix_button_typography_xs')) {
	/**
	 * Generate CSS codes for Button xs Typography
	 */
	function finclix_button_typography_xs() {
		global $finclix_redux_theme_opt;
		$var_name = 'button-typography-btn-xs';
		$declaration = array();
		$selector = array(
			'.btn.btn-xs'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);


		//padding around it
		$var_name = 'button-typography-btn-xs-padding';
		$declaration = array();
		$selector = array(
			'.btn.btn-xs'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_button_typography_xs');
}



//For Content Link Typography
if (!function_exists('finclix_typography_content_link')) {
	/**
	 * Generate CSS codes for Content Link Typography
	 */
	function finclix_typography_content_link() {
		$var_name = 'link-typography-link';
		$declaration = array();
		$selector = array(
			'body.single .main-content-area article .entry-content .post-content a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link)',
			'body.single .main-content-area article .entry-content .post-excerpt a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link)',

			'body.single .main-content-area article .entry-content .post-content p a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link)',
			'body.single .main-content-area article .entry-content .post-excerpt p a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link)',

			'body.page .main-content-area .page .entry-content .page-content a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link)'
		);
		$declaration = finclix_redux_option_field_typography( $var_name );
		finclix_dynamic_css_generator($selector, $declaration);




		global $finclix_redux_theme_opt;
		$var_name = 'link-typography-link-hover-color';
		$declaration = array();
		$selector = array(
			'body.single .main-content-area article .entry-content .post-content a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link):hover',
			'body.single .main-content-area article .entry-content .post-excerpt a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link):hover',

			'body.single .main-content-area article .entry-content .post-content p a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link):hover',
			'body.single .main-content-area article .entry-content .post-excerpt p a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link):hover',

			'body.page .main-content-area .page .entry-content .page-content a:not(.btn):not(.styled-icons-item):not(.wp-block-button__link):hover'
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
	add_action('finclix_dynamic_css_generator_action', 'finclix_typography_content_link');
}