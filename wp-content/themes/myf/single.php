<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MYF
 */

get_header(); 


$postype = get_post_type();
$subtitle = get_field('subtitle');
$location = get_field('location');

$time = get_field('time');
if( $time ){	
	$h = explode(':', $time)[0];
	explode(':', $time)[1] == '00' ? $m = 'h' : $m =  ':'.explode(':', $time)[1].'h';
	$time = $h.$m;
}

$city = get_field('city');
$link = get_field('link');



// var_dump(  );
?>

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>


		<?php if( $postype == 'espectacles' || $postype == 'sessions' || $postype == 'agnda' ){
			get_template_part( 'components/post/content','poster' ); 
		} 

		if( has_post_thumbnail() ): ?>
			<div class="poster">
				<div class="addthis_inline_share_toolbox_dqla"></div>
		  	<?php the_post_thumbnail(); ?>
		  </div>
		<?php endif; ?>


		<header class="post-header">
			<h1><?php the_title(); ?></h1>
			<?php if($subtitle): ?>
				<span class="subtitle"><?php echo $subtitle; ?></span>
			<?php endif; ?>
			
			<?php if($location || $time || $city): ?>
				<span class="subtitle">
					<?php echo $location ? $location : ''; ?>
					<?php echo $time ? ' &middot; '.$time : ''; ?>
					<?php echo $city ? '<span class="block">'.$city.'</span>' : ''; ?>
				</span>
			<?php endif; ?>

			<?php if($link): ?>
				<div class="entrades">
					<a href="<?php echo $link; ?>" class="btn btn-primary">Entrades</a>
				</div>
			<?php endif; ?>
		</header>


		<?php if( $postype == 'espectacles' ){
			get_template_part( 'components/post/content','video' ); 
		} ?>


		<?php if( $postype == 'espectacles' ): ?>
			<div class="h3">Sinopsi</div>
		<?php endif; ?>



		<?php if( $postype == 'espectacles' ): ?>
		<div class="row">
			<div class="col-sm-6">
		<?php endif; ?>

		<div class="post-content">
			<?php the_content(); ?>
		</div><!-- post-content end -->

		<?php if( $postype == 'espectacles' ): ?>
			</div><!-- col end -->

			<div class="col-sm-6">
		<?php endif; ?>


		<?php if( $postype == 'agnda' ){
			get_template_part( 'components/pages/content','agenda' ); 
		} ?>

		<?php if( $postype == 'espectacles' || $postype == 'sessions' ){
			get_template_part( 'components/post/content','crew' ); 
		} ?>

		<?php if( $postype == 'espectacles' ): ?>
			</div><!-- col end -->
		
		</div><!-- row end -->
		<?php endif; ?>


		<?php if( $postype == 'espectacles' || $postype == 'sessions' ){
			get_template_part( 'components/post/content','gallery' ); 
		} ?>


		<?php if( $postype == 'espectacles' || $postype == 'sessions' ){
			get_template_part( 'components/post/content','prensa' ); 
		} ?>


		<?php if( $postype == 'espectacles' || $postype == 'sessions' ){
			get_template_part( 'components/post/content','dossier' ); 
		} ?>


		<?php if( $postype == 'post' ){
			get_template_part( 'components/pages/content','actualitat' ); 
		} ?>

	<?php 
	// the_post_navigati  on();

	endwhile; ?>

</div><!-- container end -->


<?php
if( $postype == 'espectacles' ){
	get_template_part( 'components/footer/manager','info' ); 
}

get_footer();





