<div class="row">
  <div class="col-md-12 sm-text-center title-content">
	<?php do_action( 'finclix_page_title_content_start' ); ?>
	<?php if( $title_area_show_title ) { finclix_get_title_area_title(); } ?>
	<?php if( $title_area_show_breadcrumb ) { finclix_display_breadcrumbs(); } ?>
	<?php if( $title_area_show_subtitle ) { finclix_get_title_area_subtitle(); } ?>
	<?php do_action( 'finclix_page_title_content_end' ); ?>
  </div>
</div>