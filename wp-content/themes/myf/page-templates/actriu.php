<?php 
get_header();
/* Template Name: Actriu */ 

$img_header = get_field('header_image');
$img_header_lg = get_field('header_image_lg');

// var_dump($img_header);

?>


<section class="page-content bg-white">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-5 col-md-offset-6 col-sm-7 col-sm-offset-5">
				<?php echo $post->post_content; ?>
			</div><!-- col end -->
		</div><!-- row end -->
	</div><!-- container end -->

	<div class="img-diagonal" data-bg-mobile="<?php echo $img_header['url']; ?>" data-bg-desktop="<?php echo $img_header_lg['url']; ?>">
	</div><!-- img-diagonal end -->
</section>


<?php if( get_field('gallery') ): ?>
<div class="container">
	<?php get_template_part( 'components/post/content','gallery' ); ?>
</div><!-- container end -->
<?php endif; 




if( have_rows('teatre') || have_rows('camera') || have_rows('direccio') ): ?>
<div class="expertise container">

<div class="h3 text-center">Experiència</div>

<ul class="nav nav-pills" role="tablist">
	<?php if( have_rows('teatre') ): ?>
		<li class="active">
			<a href="#teatre" data-toggle="tab">Teatre</a>
		</li>
	<?php endif; ?>

	<?php if( have_rows('camera') ): ?>
		<li>
			<a href="#camera" data-toggle="tab">Càmera</a>
		</li>
	<?php endif; ?>

	<?php if( have_rows('direccio') ): ?>
		<li>
			<a href="#direccio" data-toggle="tab">Direcció</a>
		</li>
	<?php endif; ?>
</ul>


<div class="tab-content">

	<?php if( have_rows('teatre') ): ?>
		<div class="tab-pane active" id="teatre">
			<div class="list-group zebra-list">
				<?php while ( have_rows('teatre') ) : the_row(); ?>
					<div class="list-group-item">
					<div class="info">
						<?php if(get_sub_field('date')): ?>
							<div class="date-num"><?php the_sub_field('date'); ?></div>
						<?php endif; ?>
						<?php if(get_sub_field('title')): ?>
							<strong class="title"><?php the_sub_field('title'); ?></strong>
						<?php endif; ?>
						<?php if(get_sub_field('description')): ?>
							<small class="excerpt"><?php the_sub_field('description'); ?></small>
						<?php endif; ?>
					</div><!-- info end -->
					</div><!-- list-group-item end -->
				<?php endwhile; ?>
			</div><!-- list-group end -->
		</div><!-- tab-pane end -->
	<?php endif; ?>


	<?php if( have_rows('camera') ): ?>
		<div class="tab-pane" id="camera">
			<div class="list-group zebra-list">
				<?php while ( have_rows('camera') ) : the_row(); ?>
					<div class="list-group-item">
					<div class="info">
						<?php if(get_sub_field('date')): ?>
							<div class="date-num"><?php the_sub_field('date'); ?></div>
						<?php endif; ?>
						<?php if(get_sub_field('title')): ?>
							<strong class="title"><?php the_sub_field('title'); ?></strong>
						<?php endif; ?>
						<?php if(get_sub_field('description')): ?>
							<small class="excerpt"><?php the_sub_field('description'); ?></small>
						<?php endif; ?>
					</div><!-- info end -->
					</div><!-- list-group-item end -->
				<?php endwhile; ?>
			</div><!-- list-group end -->
		</div><!-- tab-pane end -->
	<?php endif; ?>


	<?php if( have_rows('direccio') ): ?>
		<div class="tab-pane" id="direccio">
			<div class="list-group zebra-list">
				<?php while ( have_rows('direccio') ) : the_row(); ?>
					<div class="list-group-item">
					<div class="info">
						<?php if(get_sub_field('date')): ?>
							<div class="date-num"><?php the_sub_field('date'); ?></div>
						<?php endif; ?>
						<?php if(get_sub_field('title')): ?>
							<strong class="title"><?php the_sub_field('title'); ?></strong>
						<?php endif; ?>
						<?php if(get_sub_field('description')): ?>
							<small class="excerpt"><?php the_sub_field('description'); ?></small>
						<?php endif; ?>
					</div><!-- info end -->
					</div><!-- list-group-item end -->
				<?php endwhile; ?>
			</div><!-- list-group end -->
		</div><!-- tab-pane end -->
	<?php endif; ?>

</div><!-- tab-content end -->

</div><!-- container end -->
<?php 
endif;




if( get_field('video') ): ?>

<div class="container">
	<?php get_template_part( 'components/post/content','video' ); ?>
</div><!-- container end -->

<?php 
endif;


get_footer(); 











