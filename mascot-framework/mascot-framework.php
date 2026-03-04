<?php
/*
*
*	Mascot Framework Main Class
*	---------------------------------------
*	Mascot Framework v1.0
* 	Copyright Theme Mascot 2014 - http://www.thememascot.com
*
*/

/* Core Utility Variables and Functions
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/core/core-utility-variables-functions' );


/* REDUX OPTIONS FRAMEWORK DATA
================================================== */
if ( mascot_core_finclix_plugin_installed() && class_exists( 'ReduxFramework' ) && file_exists( FINCLIX_FRAMEWORK_DIR . '/redux-framework/config.php' ) ) {
	get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/redux-framework/config' );
}

/* Breadcrumb Trail
================================================== */
if ( !function_exists( 'finclix_breadcrumb_trail' ) ) {
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/lib/breadcrumbs' );
}


/* Custom Actions
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/mascot-custom-action' );

/* Core Functions
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/core/core-functions' );

/* Load Core Lib
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/core/core-loader' );

/* Core Actions
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/core/core-actions' );

/* Core Filters
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/core/core-filters' );

/* Custom Nav Walker
================================================== */
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/custom-nav-walker/sweet-custom-menu' );

// Register Custom Comment Walker
get_template_part( FINCLIX_FRAMEWORK_FOLDER . '/lib/class-wp-bootstrap-comment-walker' );
