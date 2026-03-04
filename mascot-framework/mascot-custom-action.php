<?php

// Custom Action for this theme
add_action('after_setup_theme', 'finclix_custom_action_init', 0);

function finclix_custom_action_init() {

	do_action('finclix_before_custom_action');

	do_action('finclix_custom_action');

	do_action('finclix_after_custom_action');
}