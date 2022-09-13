<?php 
$dossier = get_field('dossier'); 

if( $dossier ):
?>

<div class="dossier-download">
	<a href="<?php echo $dossier['url']; ?>" target="_blank">
		<img src="<?php echo home_url( '/' ); ?>wp-content/uploads/2017/06/download-btn.svg" alt="">
	</a>
</div><!-- post-video end -->

<?php endif; ?>