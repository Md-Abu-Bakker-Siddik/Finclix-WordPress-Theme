<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="quote-content">
		<?php do_action( 'finclix_blog_post_entry_header_start' ); ?>
		<?php finclix_get_post_thumbnail( $post_format ); ?>
		<?php do_action( 'finclix_blog_post_entry_header_end' ); ?>
	</div>
</article>