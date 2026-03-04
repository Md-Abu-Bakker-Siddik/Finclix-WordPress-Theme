<?php finclix_enqueue_script_owl_carousel(); ?>

<?php if ( has_post_thumbnail() ) { ?>
<div class="post-thumb lightgallery-lightbox">
	<div class="owl-carousel owl-theme tm-owl-carousel-1col owl-dots-center-bottom" data-nav="true" data-dots="false" data-autoplay="true">
		<?php
		finclix_get_blocks_template_part( 'thumb', null, 'blog/tpl/parts', $params );

		$gallery_images = finclix_get_rwmb_group_advanced( 'finclix_' . "blog_mb_pf_gallery_settings",  "gallery_images", null, false, 'all', $img_size );
		if ( !empty( $gallery_images ) ) {
			foreach ( $gallery_images as $each_gallery_image ) {
		?>
		<div class="box-hover-effect">
			<div class="effect-wrapper">
				<div class="thumb">
					<img src="<?php echo esc_url( $each_gallery_image['url'] );?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
				</div>
			</div>
		</div>
		<?php
			}
		}
		?>
	</div>
</div>
<?php } ?>