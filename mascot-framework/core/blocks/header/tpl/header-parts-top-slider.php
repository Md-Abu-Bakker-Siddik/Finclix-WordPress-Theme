
	<?php
	/**
	* finclix_before_top_sliders_container hook.
	*
	*/
	do_action( 'finclix_before_top_sliders_container' );
	?>
	<div class="top-sliders-container">
		<?php
			/**
			* finclix_top_sliders_container_start hook.
			*
			*/
			do_action( 'finclix_top_sliders_container_start' );
		?>

		<?php
			echo finclix_get_top_main_slider();
		?>

		<?php
			/**
			* finclix_top_sliders_container_end hook.
			*
			*/
			do_action( 'finclix_top_sliders_container_end' );
		?>
	</div>
	<?php
	/**
	* finclix_after_top_sliders_container hook.
	*
	*/
	do_action( 'finclix_after_top_sliders_container' );
	?>
