<?php 
$gallery = get_field('gallery'); 

if( $gallery ):
?>

<div class="gallery row">
	<?php foreach($gallery as $img): ?>
		<div class="col-xs-6 col-sm-x5 col-ms-4">
			<a href="<?php echo $img['url']; ?>" class="gallery-item">
				<img src="<?php echo $img['sizes']['medium']; ?>" class="img-responsive">
				<span><i class="fa fa-search"></i></span>
			</a>
		</div><!-- col end -->

	<?php 
	endforeach;
	?>
</div><!-- row end -->

<?php endif; ?>