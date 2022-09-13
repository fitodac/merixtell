<?php 
$logo = get_field('manager_logo','options');
$email = get_field('manager_email','options');
$phone = get_field('manager_phone','options');
?>


<div class="container manager-info">
	<div class="h3 text-center">Contractacions</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-ms-4 col-ms-offset-4 col-xs-8 col-xs-offset-2">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-md-offset-2 col-md-8">
					<img src="<?php echo $logo['url']; ?>" class="logo">
				</div>
			</div>
		</div><!-- col end -->
	</div><!-- row end -->


	<div class="row">
		<div class="col-xs-6 col-ms-4 col-ms-offset-2 wrapper-email">
			<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</div><!-- col end -->

		<div class="col-xs-6 col-ms-4 wrapper-phone">
			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
		</div><!-- col end -->
	</div><!-- row end -->

</div><!-- container end -->