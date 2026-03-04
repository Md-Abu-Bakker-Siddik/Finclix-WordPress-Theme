<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="page-content">
			<?php
				finclix_get_blog_single_post_thumbnail();
			?>
			<?php
				/**
				* finclix_before_page_content hook.
				*
				*/
				do_action( 'finclix_before_page_content' );
			?>
			<?php
				the_content();
			?>
			<?php
				/**
				* finclix_after_page_content hook.
				*
				*/
				do_action( 'finclix_after_page_content' );
			?>

			<?php finclix_get_post_wp_link_pages(); ?>

			<?php
				if( finclix_get_redux_option( 'page-settings-show-share' ) ) {
					finclix_get_social_share_links();
				}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	if( $page_show_comments ) {
		finclix_show_comments();
	}
?>
