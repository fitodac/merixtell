<?php 
get_header(); 


$banner1 = get_field('banner_1');
$banner1_text = get_field('banner_1_text');
$banner1_link = get_field('banner_1_link');
$banner2 = get_field('banner_2');
$banner2_text = get_field('banner_2_text');
$banner2_link = get_field('banner_2_link');
?>

<div class="container">


<div class="row">

	<div class="col-sm-6 col-ms-6">
		<a href="<?php echo $banner1_link; ?>" class="banner banner-1">
			<div class="banner-text"><?php echo $banner1_text; ?></div>
			<img src="<?php echo $banner1['url']; ?>" class="img-responsive" srcset="<?php echo $banner1['sizes']['medium'].' 425w,'.$banner1['sizes']['large'].' 768w'; ?>">
		</a><!-- banner-1 end -->
	</div><!-- col end -->


	<div class="col-sm-6 col-ms-6">
		<a href="<?php echo $banner2_link; ?>" class="banner banner-2">
			<div class="banner-text"><?php echo $banner2_text; ?></div>
			<img src="<?php echo $banner2['url']; ?>" class="img-responsive" srcset="<?php echo $banner2['sizes']['medium'].' 425w,'.$banner2['sizes']['large'].' 768w'; ?>">
		</a><!-- banner-2 end -->
	</div><!-- col end -->

</div><!-- row end -->






<?php 
$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'espectacles'
);

$the_query = new WP_Query( $args );

$count = 0;


if( $the_query->have_posts() ): ?>
<section class="section">
	<h3 class="text-center">En Cartell</h3>


	<div class="row">
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		$poster = get_field('poster');
		$status = get_field('status');

		if( $poster ):
		?>
		<div class="col-md-4 <?php echo $count === 0 ? 'col-md-offset-2' : ''; ?> col-sm-6 col-ms-6">
			<a href="<?php the_permalink(); ?>" class="banner m-b">
				<?php echo $status ? '<span class="banner-status '.$status.'"></span>' : ''; ?>
				<img src="<?php echo $poster['url']; ?>" alt="">
			</a>
		</div><!-- col end -->
		<?php 
		endif;

		$count++;

	endwhile; ?>
	</div><!-- row end -->

<?php endif; ?>
</section>


<?php 
wp_reset_query();









$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'agnda'
);

$the_query = new WP_Query( $args );



if( $the_query->have_posts() ) : ?>

<section class="section">
<h3 class="text-center">Agenda</h3>

<div class="list-group zebra-list">

	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 

		$date = get_field('date');
		$day = explode('/',get_field('date'))[1];
		$month = explode('/',get_field('date'))[0];
		$time = get_field('time');
		$location = get_field('location');
		$city = get_field('city');
		$h = explode(':', $time)[0];
		explode(':', $time)[1] == '00' ? $m = 'h' : $m =  ':'.explode(':', $time)[1].'h';
		$time = $h.$m;
		?>

		<a href="<?php the_permalink(); ?>" class="list-group-item">

			<div class="date">
				<span class="day"><?php echo $day; ?></span>
				<span class="month"><?php echo getMonth($month); ?></span>
			</div><!-- date end -->


			<div class="info">
				<strong class="title"><?php the_title(); ?></strong>
				<span class="location"><?php echo $location; ?></span> &middot; <span class="time"><?php echo $time; ?></span>
				<div class="city"><?php echo $city; ?></div>
			</div><!-- info end -->

			<?php 
				// echo strftime("%A %d de %B del %Y");
			?>
		</a><!-- list-group-item end -->

	<?php endwhile; ?>

</div><!-- zebra-list end -->
</section>
<?php endif; 


wp_reset_query();
?>










<?php
$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'post'
);

$the_query = new WP_Query( $args );



if( $the_query->have_posts() ) : ?>

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

			<?php 
				// echo strftime("%A %d de %B del %Y");
			?>
		</a><!-- list-group-item end -->

	<?php endwhile; ?>

</div><!-- zebra-list end -->
</section>
<?php endif; 


wp_reset_query();
?>





</div><!-- container end -->

<?php get_footer(); ?>




