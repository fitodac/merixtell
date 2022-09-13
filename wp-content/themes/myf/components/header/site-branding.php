<?php $description = get_bloginfo( 'description', 'display' ); ?>

<div class="site-branding">
	<?php
	if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span><?php bloginfo( 'name' ); ?></span>
				<?php if ( $description || is_customize_preview() ) : ?>
					<small><?php echo $description; /* WPCS: xss ok. */ ?></small>
				<?php endif; ?>
			</a>
		</h1>
	<?php else : ?>
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span><?php bloginfo( 'name' ); ?></span>
				<?php if ( $description || is_customize_preview() ) : ?>
					<small><?php echo $description; /* WPCS: xss ok. */ ?></small>
				<?php endif; ?>
			</a>
		</div>
	<?php endif; ?>
</div><!-- .site-branding -->