<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cannot access pages directly.' );
}
$wp_get_theme = wp_get_theme( get_template() );
$theme_name = $wp_get_theme->get('Name');
?>

<div class="wrap about-wrap mascot-admin-tpl-wrapper">
	<?php echo finclix_get_template_part( 'admin/admin-tpl/mascot-header' ); ?>
	<?php echo finclix_get_template_part( 'admin/admin-tpl/mascot-tabs' ); ?>

	<div class="about-wrapper">
		<div class="welcome-message">
			<h3>
				<?php esc_html_e( 'Thank you for choosing', 'finclix' ); ?> <?php echo esc_html( $theme_name ); ?>!
				<br>
				<small>
					<?php
						echo sprintf( esc_html__( 'For proper theme functioning, the %s plugin is required!', 'finclix' ),
						"<strong>Mascot Core</strong>");
					?>
				</small>
			</h3>

			<h4><?php echo sprintf( esc_html__( 'Installation Instructions for %s plugin:', 'finclix' ),
						"<strong>Mascot Core</strong>"); ?></h4>
			<ul>
				<li><?php echo sprintf( esc_html__( '1. From your WordPress dashboard visit Appearance > Install Plugins or you can %1$s click here %2$s', 'finclix' ), '<a target="_blank" href="' . esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ) . '">', '</a>' ); ?></li>
				<li><?php echo sprintf( esc_html__( '2. Search for %s plugin and install it.', 'finclix' ),
						"<strong>Mascot Core</strong>"); ?></li>
				<li><?php esc_html_e( '3. Now activate it.', 'finclix' ); ?></li>
				<li><?php esc_html_e( '4. Once the plugin is activated you will find full features of the theme including Custom Post Types, Theme Options, Post Meta etc.', 'finclix' ); ?></li>
			</ul>
		</div>
	</div>
</div>