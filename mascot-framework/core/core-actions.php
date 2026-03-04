<?php
/*
*
*	Core Actions
*	---------------------------------------
*	Mascot Framework v1.0
* 	Copyright ThemeMascot 2017 - http://www.thememascot.com
*
*/


if(!function_exists('finclix_action_widgets_init')) {
	/**
	 * Init Widgets
	 */
	function finclix_action_widgets_init() {
	}
}


if(!function_exists('finclix_action_wp_head')) {
	/**
	 * Head Action
	 */
	function finclix_action_wp_head() {
		finclix_head_pingback();
		finclix_head_responsive_viewport();
		finclix_head_favicon();
		finclix_head_apple_touch_icons();
	}
}


if(!function_exists('finclix_head_pingback')) {
	/**
	 * link pingback
	 */
	function finclix_head_pingback() {
		if ( is_singular() && pings_open( get_queried_object() ) ) :?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php endif;
	}
}


if(!function_exists('finclix_head_responsive_viewport')) {
	/**
	 * Enable Responsive
	 */
	function finclix_head_responsive_viewport() {
		if( finclix_get_redux_option( 'general-settings-enable-responsive', true ) ) { ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php } else { ?>
			<meta name="viewport" content="width=1140, user-scalable=yes">
		<?php }
	}
}


if(!function_exists('finclix_head_favicon')) {
	/**
	 * Add Favicon
	 */
	function finclix_head_favicon() {
		// Stop here if and icon was added via the customizer.
		if ( function_exists( 'has_site_icon' ) && has_site_icon() ) {
			return;
		}

		if( finclix_get_redux_option( 'general-settings-favicon', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( finclix_get_redux_option( 'general-settings-favicon', false, 'url' ) ); ?>" rel="shortcut icon">
		<?php } else { ?>
			<link href="<?php echo esc_url( FINCLIX_ASSETS_URI . '/images/logo/favicon.png') ?>" rel="shortcut icon" type="image/png">
		<?php }
	}
}


if(!function_exists('finclix_head_apple_touch_icons')) {
	/**
	 * Add Apple Touch Icons 144x144, 114x114, 72x72, 32x32
	 */
	function finclix_head_apple_touch_icons() {
		//apple-touch-icon
		if( finclix_get_redux_option( 'general-settings-apple-touch-32', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( finclix_get_redux_option( 'general-settings-apple-touch-32', false, 'url' ) ); ?>" rel="apple-touch-icon">
		<?php } else { ?>
			<link href="<?php echo esc_url( FINCLIX_ASSETS_URI . '/images/apple-touch-icon.png') ?>" rel="apple-touch-icon">
		<?php }

		//apple-touch-icon-72x72
		if( finclix_get_redux_option( 'general-settings-apple-touch-72', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( finclix_get_redux_option( 'general-settings-apple-touch-72', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="72x72">
		<?php } else { ?>
			<link href="<?php echo esc_url( FINCLIX_ASSETS_URI . '/images/apple-touch-icon-72x72.png') ?>" rel="apple-touch-icon" sizes="72x72">
		<?php }

		//apple-touch-icon-114x114
		if( finclix_get_redux_option( 'general-settings-apple-touch-114', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( finclix_get_redux_option( 'general-settings-apple-touch-114', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="114x114">
		<?php } else { ?>
			<link href="<?php echo esc_url( FINCLIX_ASSETS_URI . '/images/apple-touch-icon-114x114.png') ?>" rel="apple-touch-icon" sizes="114x114">
		<?php }

		//apple-touch-icon-144x144
		if( finclix_get_redux_option( 'general-settings-apple-touch-144', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( finclix_get_redux_option( 'general-settings-apple-touch-144', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="144x144">
		<?php } else { ?>
			<link href="<?php echo esc_url( FINCLIX_ASSETS_URI . '/images/apple-touch-icon-144x144.png') ?>" rel="apple-touch-icon" sizes="144x144">
		<?php }
	}
}


if(!function_exists('finclix_action_wp_head_at_the_end')) {
	/**
	 * Head Action put code at the end
	 */
	function finclix_action_wp_head_at_the_end() {
		finclix_header_custom_html_js();
	}
}


if(!function_exists('finclix_header_custom_html_js')) {
	/**
	 * Custom HTML/JS Code (in Footer)
	 */
	function finclix_header_custom_html_js() {
		if( finclix_get_redux_option( 'custom-codes-custom-html-script-header' ) ) {
			echo "\n";
			echo finclix_get_redux_option( 'custom-codes-custom-html-script-header' );
			echo "\n";
		}
	}
}


if(!function_exists('finclix_action_wp_footer')) {
	/**
	 * Footer Action
	 */
	function finclix_action_wp_footer() {
		finclix_footer_enable_smooth_scroll();
		finclix_footer_enable_backtotop();
		finclix_footer_custom_html_js();
	}
}


if(!function_exists('finclix_footer_enable_smooth_scroll')) {
	/**
	 * Enable Smooth Scrolling
	 */
	function finclix_footer_enable_smooth_scroll() {
		if( finclix_get_redux_option( 'general-settings-smooth-scroll' ) ) {
			wp_enqueue_script( 'tm-bundled-lenis' );
		}
	}
}

if(!function_exists('finclix_smooth_localscroll_add_class_to_body')) {
	/**
	 * Function add class localscroll to bg when lenis not enabled
	 */
	function finclix_smooth_localscroll_add_class_to_body ( $classes ) {
		$classes[] = '';
		if( ! finclix_get_redux_option( 'general-settings-smooth-scroll' ) ) {
			$classes[] = 'tm-enable-localscroll';
		}
		return $classes;
	}
	add_filter( 'body_class', 'finclix_smooth_localscroll_add_class_to_body' );
}


if(!function_exists('finclix_footer_enable_backtotop')) {
	/**
	 * Enable Back To Top
	 */
	function finclix_footer_enable_backtotop() {
		if( finclix_get_redux_option( 'general-settings-enable-backtotop' ) ) { ?>
			<div class="scroll-to-top"><a class="scroll-link" href="<?php echo esc_url( '#' )?>"><i class="lnr-icon-arrow-up"></i></a></div>
		<?php }
	}
}


if(!function_exists('finclix_footer_custom_html_js')) {
	/**
	 * Custom HTML/JS Code (in Footer)
	 */
	function finclix_footer_custom_html_js() {
		if( finclix_get_redux_option( 'custom-codes-custom-html-script-footer' ) ) {
			echo "\n";
			echo finclix_get_redux_option( 'custom-codes-custom-html-script-footer' );
			echo "\n";
		}
	}
}


if (!function_exists( 'finclix_require_core_plugin_message')) {
	/**
	 * Prints a mesasge in the admin if user hides TGMPA plugin activation message
	 */
	function finclix_require_core_plugin_message() {
		if ( get_user_meta( get_current_user_id(), 'tgmpa_dismissed_notice_tgmpa', true ) && !mascot_core_finclix_plugin_installed() ) {
			$class = 'notice notice-error';
			$message = sprintf( esc_html__( 'For proper theme functioning, the %s plugins are required', 'finclix' ),
				"<strong>Mascot Core</strong>"
			);
			$message .= '<a href="' . esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ) . '">' . esc_html__( 'install', 'finclix' ) . '</a>';
			$message .= esc_html__( ' and activate the plugins.', 'finclix' );
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message );
		}
	}
	add_action( 'admin_notices', 'finclix_require_core_plugin_message' );
}


if(!function_exists('finclix_add_theme_page')) {
	/**
	 * Add Theme Page
	 */
	function finclix_add_theme_page() {
		$theme_name = FinclixThemeInfo::get_instance()->get_name();
		add_menu_page(
			$theme_name,
			$theme_name,
			'manage_options',
			'mascot-about',
			'finclix_theme_page_about',
			'dashicons-admin-generic',
			4
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'Support & Help', 'finclix' ),
			esc_html__( 'Support & Help', 'finclix' ),
			'manage_options',
			'mascot-docs',
			'finclix_theme_page_docs'
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'FAQ', 'finclix' ),
			esc_html__( 'FAQ', 'finclix' ),
			'manage_options',
			'mascot-faq',
			'finclix_theme_page_faq'
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'System Status', 'finclix' ),
			esc_html__( 'System Status', 'finclix' ),
			'manage_options',
			'mascot-system-status',
			'finclix_theme_page_system_status'
		);
		if ( mascot_core_finclix_plugin_installed() ) {
			add_submenu_page(
				'mascot-about',
				esc_html__( 'System Status', 'finclix' ),
				esc_html__( 'System Status', 'finclix' ),
				'manage_options',
				'mascot-system-status',
				'finclix_theme_page_system_status'
			);
		}
	}
	add_action('admin_menu', 'finclix_add_theme_page');
}

if(!function_exists('finclix_theme_page_about')) {
	function finclix_theme_page_about() {
		get_template_part( 'admin/admin-tpl/mascot-about' );
	}
}

if(!function_exists('finclix_theme_page_docs')) {
	function finclix_theme_page_docs() {
		get_template_part( 'admin/admin-tpl/mascot-docs' );
	}
}

if(!function_exists('finclix_theme_page_faq')) {
	function finclix_theme_page_faq() {
		get_template_part( 'admin/admin-tpl/mascot-faq' );
	}
}

if(!function_exists('finclix_theme_page_system_status')) {
	function finclix_theme_page_system_status() {
		get_template_part( 'admin/admin-tpl/mascot-system-status' );
	}
}
