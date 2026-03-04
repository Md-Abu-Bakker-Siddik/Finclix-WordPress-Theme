<div class="row">
  <div class="col-md-7 sm-text-center title-content">
	<?php do_action( 'finclix_page_title_content_start' ); ?>
	<?php if( $title_area_show_title ) { finclix_get_title_area_title(); } ?>
	<?php if( $title_area_show_subtitle ) { finclix_get_title_area_subtitle(); } ?>
	<?php do_action( 'finclix_page_title_content_end' ); ?>
  </div>
  <div class="col-md-5 text-right flip sm-text-center">
	<?php if( $title_area_show_breadcrumb ) { finclix_display_breadcrumbs(); } ?>
  </div>
</div>
