<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cannot access pages directly.' );
}
?>

<?php
$links = array(
	'mascot-about'			  	=> esc_html__( 'About', 'finclix' ),
	'mascot-docs' 				=> esc_html__( 'Support & Help', 'finclix' ),
	'mascot-faq' 				=> esc_html__( 'FAQ', 'finclix' ),
	'mascot-system-status'     	=> esc_html__( 'System Status', 'finclix' ),
);
if ( !mascot_core_finclix_plugin_installed() ) {
	unset( $links['mascot-system-status'] );
}
?>

<h2 class="nav-tab-wrapper wp-clearfix">
	<?php
		foreach ( $links as $link_id => $title ) {
		$active = '';

		if( isset( $_REQUEST[ 'page' ] ) ) {
			if( $link_id == $_REQUEST[ 'page' ] ) $active = ' nav-tab-active';
		}
	?>
			<a href="<?php echo esc_url( "admin.php?page={$link_id}" ); ?>" class="nav-tab<?php echo esc_attr( $active ) ?>"><?php echo esc_html( $title ); ?></a>
	<?php
		}
	?>
</h2>