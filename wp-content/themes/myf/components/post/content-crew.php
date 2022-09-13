<?php 
$crew = get_field('crew'); 

if( $crew ):
?>

<div class="crew">
	<div class="h3">Fitxa Artística</div>
	<?php echo $crew; ?>
</div><!-- post-video end -->

<?php endif; ?>