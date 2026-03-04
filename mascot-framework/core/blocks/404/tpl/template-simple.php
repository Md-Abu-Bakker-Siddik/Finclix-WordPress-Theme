<section class="page-404-wrapper <?php echo esc_attr( $fullscreen );?> <?php echo esc_attr( $section_classes );?>">
	<div class="d-flex justify-content-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="page-404-main-content <?php echo esc_attr( $text_align );?>">

						<?php do_action( 'finclix_page_404_content_start' ); ?>

						<h1 class="title"><?php echo esc_html( $page_title );?></h1>
						<h3 class="sub-title"><?php echo esc_html( $page_subtitle );?></h3>
						<div class="content"><?php echo wp_kses_post( wpautop( do_shortcode( $page_content ) ) ); ?></div>
						<?php
							if( $show_back_to_home_button ) {
								finclix_get_blocks_template_part( 'back-to-home-button', null, '404/tpl', $params );
							}
						?>

						<?php do_action( 'finclix_page_404_content_end' ); ?>

					</div>
					<div class="row mt-30">
						<div class="col-md-6">
							<?php
								if( $show_helpful_links ) {
									finclix_get_blocks_template_part( 'helpful-links', null, '404/tpl', $params );
								}
							?>
						</div>
						<div class="col-md-<?php echo esc_attr( $show_helpful_links ? '6' : '12 '.$text_align ) ?>">
							<?php
								if( $show_search_box ) {
									finclix_get_blocks_template_part( 'search-box', null, '404/tpl', $params );
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-md-8 offset-md-2 <?php echo esc_attr( $text_align );?>">
				<?php
					if( $show_social_links ) {
						finclix_get_blocks_template_part( 'social-links', null, '404/tpl', $params );
					}
				?>
				</div>
			</div>
		</div>
	</div>
</section>