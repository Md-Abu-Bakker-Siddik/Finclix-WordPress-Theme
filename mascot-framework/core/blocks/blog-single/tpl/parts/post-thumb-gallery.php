<?php finclix_enqueue_script_lightgallery(); ?>
<?php finclix_enqueue_script_owl_carousel(); ?>
<?php $gallery_images = finclix_get_rwmb_group_advanced( 'finclix_' . "blog_mb_pf_gallery_settings",  "gallery_images", null, false, 'all', 'large' );?>

<?php if ( has_post_thumbnail() || !empty( $gallery_images ) ) { ?>
<div class="post-thumb lightgallery-lightbox">
	<div class="owl-carousel owl-theme tm-owl-carousel-1col owl-dots-center-bottom" data-nav="true" data-dots="true" data-autoplay="true">
		<?php
		if ( has_post_thumbnail() ) {
			$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$full_image_url = $full_image_url[0];
		?>

		<div class="box-hover-effect">
			<div class="effect-wrapper">
				<div class="thumb">
					<?php finclix_get_blocks_template_part( 'thumb', null, 'blog-single/tpl/parts', $params ); ?>
				</div>
			</div>
		</div>
		<?php
		}


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