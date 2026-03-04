<?php
	/**
	* finclix_before_blog_single_section hook.
	*
	*/
	do_action( 'finclix_before_blog_single_section' );
?>
<section>
	<div class="<?php echo esc_attr( $container_type );?>">
		<?php
			/**
			* finclix_blog_single_container_start hook.
			*
			*/
			do_action( 'finclix_blog_single_container_start' );
		?>

		<?php
			if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) : the_post();
				finclix_get_blog_single_sidebar_layout();
			endwhile;
			else :
			// If no content, include the "No posts found" template.
			echo esc_html( "No posts found!" );
			endif;
		?>

		<?php
			/**
			* finclix_blog_single_container_end hook.
			*
			*/
			do_action( 'finclix_blog_single_container_end' );
		?>
	</div>
</section>
<?php
	/**
	* finclix_after_blog_single_section hook.
	*
	*/
	do_action( 'finclix_after_blog_single_section' );
?>