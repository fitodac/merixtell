<nav class="navbar" role="navigation">
	
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<span class="sr-only"><?php esc_html_e( 'Menu', 'myf' ); ?></span>
		<span class="fa fa-bars"></span>
	</button>

	<div class="main-navbar">
		<header>
			<?php get_template_part( 'components/header/site', 'branding' ); ?>
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
				<span class="sr-only"><?php esc_html_e( 'Menu', 'myf' ); ?></span>
				<span class="fa fa-times"></span>
			</button>
		</header>

		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
		<footer><?php get_template_part( 'components/footer/site', 'info' ); ?></footer>
	</div><!-- main-navbar end -->
</nav>
