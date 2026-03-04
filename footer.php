<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the .main-content div and #wrapper
 *
 */
?>


	<?php finclix_get_footer_top_callout(); ?>


	<?php
		/**
		 * finclix_main_content_end hook.
		 *
		 */
		do_action( 'finclix_main_content_end' );
	?>
	</div>
	<!-- main-content end -->
	<?php
		/**
		 * finclix_after_main_content hook.
		 *
		 */
		do_action( 'finclix_after_main_content' );
	?>


	<?php if( apply_filters('finclix_filter_show_footer', true) ): ?>
	<?php finclix_get_footer_parts(); ?>
	<?php endif; ?>

	<?php
		/**
		 * finclix_wrapper_end hook.
		 *
		 */
		do_action( 'finclix_wrapper_end' );
	?>
</div>
<!-- wrapper end -->
<?php
	/**
	 * finclix_body_tag_end hook.
	 *
	 */
	do_action( 'finclix_body_tag_end' );
?>
<?php
	/**
	 * nav_search_icon_popup_html hook.
	 *
	 */
	do_action( 'finclix_nav_search_icon_popup_html');
	finclix_floating_cart_sidebar();
?>
<?php wp_footer(); ?>
</body>
</html>
