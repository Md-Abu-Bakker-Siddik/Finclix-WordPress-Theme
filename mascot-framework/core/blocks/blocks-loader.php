<?php

/* Loads all blocks located in blocks folder
================================================== */
if( !function_exists('finclix_load_all_template_parts') ) {
	function finclix_load_all_template_parts() {
		foreach( glob(FINCLIX_FRAMEWORK_DIR.'/core/blocks/*/loader.php') as $each_template_part_loader ) {
			require_once $each_template_part_loader;
		}
	}
}

// Since framework now loads on 'init' (after 'after_setup_theme'),
// the 'finclix_before_custom_action' hook has already fired.
// Load blocks immediately instead of waiting for a hook that already executed.
if ( function_exists('finclix_load_all_template_parts') ) {
	finclix_load_all_template_parts();
}