<?php 
$video = get_field('video'); 

if( $video ):
?>

<div class="post-video">
	<?php echo $video; ?>
</div><!-- post-video end -->

<?php endif; ?>