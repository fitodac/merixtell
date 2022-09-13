<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MYF
 */

?>

	</main>

	<footer class="main-footer" role="contentinfo">
		<div class="h2">Contactar</div>
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
