<?php 
$email = get_field('email','options');
$phone = get_field('phone','options');

$facebook = get_field('facebook','options');
$twitter = get_field('twitter','options');
$instagram = get_field('instagram','options');
$youtube = get_field('youtube','options');
?>

<div>
	<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
</div>

<div>
	<a href="tel:<?php echo $phone; ?>">T. <?php echo $phone; ?></a>
</div>

<div class="social">
	<a href="<?php echo $facebook; ?>"><span class="fa fa-facebook"></span></a>
	<a href="<?php echo $twitter; ?>"><span class="fa fa-twitter"></span></a>
	<a href="<?php echo $instagram; ?>"><span class="fa fa-instagram"></span></a>
	<a href="<?php echo $youtube; ?>"><span class="fa fa-youtube-play"></span></a>
</div>
