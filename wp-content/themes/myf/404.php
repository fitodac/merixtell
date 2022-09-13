<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MYF
 */

get_header(); ?>

<div class="container">

	<div class="error-404">
		<small>ERROR</small>
		<h1>404</h1>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Volver a la página de inicio</a>
	</div><!-- error-404 end -->

</div><!-- container end -->

<?php
get_footer();
