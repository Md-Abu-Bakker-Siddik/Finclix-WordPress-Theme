<?php
	/**
	* finclix_before_blog_section hook.
	*
	*/
	do_action( 'finclix_before_blog_section' );
?>
<section>
	<div class="<?php echo esc_attr( $container_type ); ?>">
		<?php
			/**
			* finclix_blog_container_start hook.
			*
			*/
			do_action( 'finclix_blog_container_start' );
		?>

		<div class="blog-posts">
			<?php
				finclix_get_blog_sidebar_layout();
			?>
		</div>

	<?php
		/**
		* finclix_blog_container_end hook.
		*
		*/
		do_action( 'finclix_blog_container_end' );
	?>
	</div>
</section>
<?php
	/**
	* finclix_after_blog_section hook.
	*
	*/
	do_action( 'finclix_after_blog_section' );
?>
