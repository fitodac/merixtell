<?php 
$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'post'
);

$the_query = new WP_Query( $args );



if( $the_query->have_posts() ) : 
?>


<section class="section">
	<h3 class="text-center">Actualitat</h3>

	<div class="list-group zebra-list">

		<?php while( $the_query->have_posts() ) : $the_query->the_post(); 

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


<?php endif;




