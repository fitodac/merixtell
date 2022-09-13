<?php 
$poster = get_field('poster'); 
$poster_gallery = get_field('additional_images'); 
$postype = get_post_type();


if( $poster ):
?>

<?php if( $postype == 'espectacles' || $postype == 'sessions' ): ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-sm-6">
<?php endif; ?>


<div class="poster">
	<div class="addthis_inline_share_toolbox_dqla"></div>
	<img src="<?php echo $poster['url']; ?>">

	<?php if( get_post_type() == 'agnda' ): ?>
	<div class="date">
		<span class="day"><?php echo strftime('%d'); ?></span>
		<span class="month"><?php echo strftime('%b'); ?></span>
	</div><!-- date end -->	
	<?php endif ?>
</div><!-- poster end -->


<?php if( $postype == 'espectacles' || $postype == 'sessions' ): ?>
			</div><!-- col end -->

	<?php if( $poster_gallery ): ?>
		<div class="col-sm-6">
			<div class="poster-gallery">
				<?php 
				$counter = 0;

				foreach( $poster_gallery as $image ): 
					if( $counter < 4 ):

					if($counter === 0): ?>
					<div class="col-sm-12">
						<img src="<?php echo $image['sizes']['medium_large']; ?>">
					</div><!-- col end -->
					<?php 
					endif; 

					if($counter > 0 ): ?>
					<div class="col-sm-6">
						<img src="<?php echo $image['sizes']['medium_large']; ?>">
					</div><!-- col end -->
					<?php 
					endif;

					$counter++;

					endif;
				endforeach; ?>
			</div><!-- poster-gallery end -->
		</div><!-- col end -->
	<?php endif; ?>


			
		</div><!-- row end -->
	</div><!-- col end -->
</div><!-- row end -->
<?php endif; ?>



<?php endif; ?>





