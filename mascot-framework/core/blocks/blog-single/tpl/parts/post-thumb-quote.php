<?php
	$quote_quote = finclix_get_rwmb_group( 'finclix_' . "blog_mb_pf_quote_settings", 'quote' );
	$quote_author = finclix_get_rwmb_group( 'finclix_' . "blog_mb_pf_quote_settings", 'quote_author' );
	$quote_position = finclix_get_rwmb_group( 'finclix_' . "blog_mb_pf_quote_settings", 'quote_position' );
	if( !empty($quote_quote) ) :
?>
<div class="post-excerpt">
	<blockquote class="highlighted-quote">
		<p><?php echo esc_html( $quote_quote ); ?></p>
		<footer><?php echo esc_html( $quote_author ); ?> <cite><?php echo esc_html( $quote_position ); ?></cite></footer>
	</blockquote>
</div>
<?php else: ?>
<div class="post-excerpt">
	<?php the_content();?>
	<div class="clearfix"></div>
</div>
<?php endif; ?>