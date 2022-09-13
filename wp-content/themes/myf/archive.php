<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MYF
 */

get_header(); ?>

<div class="container">
	<?php //get_template_part( 'components/pages/content','actualitat' ); ?>

	<section class="section">
		<h3 class="text-center">Actualitat</h3>

		<div class="list-group zebra-list">

			<?php while( have_posts() ) : the_post(); 

				$date = get_the_date('d').'/'.get_the_date('m').'/'.get_the_date('y');
				?>

				<a href="<?php the_permalink(); ?>" class="list-group-item">
					<div class="info">
						<div class="date-num"><?php echo $date; ?></div>
						<strong class="title"><?php the_title(); ?></strong>
						<?php if(get_the_excerpt()): ?>
							<small class="excerpt"><?php echo get_the_excerpt(); ?></small>
						<?php endif; ?>
					</div><!-- info end -->

				</a><!-- list-group-item end -->

			<?php endwhile; ?>

		</div><!-- zebra-list end -->
	</section>

	<?php numeric_pagination(); ?>

</div>

<?php 
get_footer();



