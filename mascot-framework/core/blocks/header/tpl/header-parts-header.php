	<!-- Header -->
	<?php
		/**
		* finclix_before_header hook.
		*
		*/
		do_action( 'finclix_before_header' );
	?>
	<header id="header" class="header <?php echo esc_attr(implode(' ', $header_classes)); ?>" <?php if( $params['header_layout_type'] == 'header-vertical-nav' ) { ?> style="<?php echo esc_attr( $vertical_nav_bgcolor ); ?> <?php echo esc_attr( $vertical_nav_bgimg ); ?>" <?php } ?>>
		<?php
			/**
			* finclix_header_start hook.
			*
			*/
			do_action( 'finclix_header_start' );
		?>
		<?php
			/**
			* finclix_header_top_area hook.
			*
			* @hooked finclix_get_header_top
			*/
			do_action( 'finclix_header_top_area' );
		?>
		<?php
			finclix_get_header_layout_type();
		?>

		<?php
			/**
			* finclix_header_end hook.
			*
			*/
			do_action( 'finclix_header_end' );
		?>
	</header>
	<?php
		/**
		* finclix_after_header hook.
		*
		*/
		do_action( 'finclix_after_header' );
	?>