<?php
$args = array(
	'posts_per_page'   => 5,
	'post_type'        => 'prensa'
);

$the_query = new WP_Query( $args );


if( $the_query->have_posts() ) : ?>


	<div class="h3">Premsa</div>

	<div class="list-group zebra-list">
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); 

			$date = get_field('date');
			?>

			<a href="<?php the_permalink(); ?>" class="list-group-item">
				<div class="info">
					<div class="date-num"><?php echo $date; ?></div>
					<strong class="title"><?php the_title(); ?></strong>
				</div><!-- info end -->
			</a>

		<?php endwhile; ?>
	</div><!-- zebra-list end -->

<?php endif; 


wp_reset_query();