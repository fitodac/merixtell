<?php 
get_header();
/* Template Name: Contacontes */ 

get_template_part( 'components/pages/page','content' );


$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'sessions'
);

$the_query = new WP_Query( $args );


if( $the_query->have_posts() ): ?>
<section class="section">
	<h3 class="text-center">Sessions</h3>

	<div class="container">
		<div class="row">
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
			$poster = get_field('poster');
			$status = get_field('status');

			if( $poster ): ?>
			<div class="col-sm-4 col-ms-6">
				<a href="<?php the_permalink(); ?>" class="banner m-b">
					<?php echo $status ? '<span class="banner-status '.$status.'"></span>' : ''; ?>
					<img src="<?php echo $poster['url']; ?>" alt="">
				</a>
			</div><!-- col end -->
			<?php 
			endif;
		endwhile; ?>
		</div><!-- row end -->
	</div><!-- container end -->
</section>
<?php endif; ?>


<?php 
wp_reset_query();

get_footer(); 





