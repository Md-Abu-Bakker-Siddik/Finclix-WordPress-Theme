
			<a class="menuzord-brand site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if( !$use_logo ): ?>
				<?php echo esc_html( $site_brand ); ?>
				<?php else: ?>
					<?php if( !$use_switchable_logo ): ?>
					<img class="logo-default" src="<?php echo esc_url( $logo_default ); ?>" alt="<?php esc_attr_e( 'Finclix Logo', 'finclix' ); ?>">
					<img class="logo-mobile-version" src="<?php echo esc_url( $logo_mobile_version ); ?>" alt="<?php esc_attr_e( 'Finclix Logo', 'finclix' ); ?>">
					<?php else: ?>
					<img class="logo-primary" src="<?php echo esc_url( $logo_light ); ?>" alt="<?php esc_attr_e( 'Finclix Logo Light', 'finclix' ); ?>">
					<img class="logo-on-sticky" src="<?php echo esc_url( $logo_dark ); ?>" alt="<?php esc_attr_e( 'Finclix Logo Dark', 'finclix' ); ?>">
					<?php endif; ?>
				<?php endif; ?>
			</a>