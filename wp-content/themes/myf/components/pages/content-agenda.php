<?php 
$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'agnda'
);

$the_query = new WP_Query( $args );



if( $the_query->have_posts() ) : 
?>


<h3 class="text-center">Agenda</h3>

<div class="list-group zebra-list">

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 

		$date = get_field('date');
		$time = get_field('time');
		$location = get_field('location');
		$city = get_field('city');
		$h = explode(':', $time)[0];
		explode(':', $time)[1] == '00' ? $m = 'h' : $m =  ':'.explode(':', $time)[1].'h';
		$time = $h.$m;
		?>

		<a href="<?php the_permalink(); ?>" class="list-group-item">

			<div class="date">
				<span class="day"><?php echo strftime('%d'); ?></span>
				<span class="month"><?php echo strftime('%b'); ?></span>
			</div><!-- date end -->


			<div class="info">
				<strong class="title"><?php the_title(); ?></strong>
				<span class="location"><?php echo $location; ?></span> &middot; <span class="time"><?php echo $time; ?></span>
				<div class="city"><?php echo $city; ?></div>
			</div><!-- info end -->

		</a><!-- list-group-item end -->

	<?php endwhile; ?>

</div><!-- zebra-list end -->



<?php endif;




