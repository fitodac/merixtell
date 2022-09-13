<?php 
$id = get_the_ID();
$logo = get_field('logo',$id);
$width = get_field('logo_w',$id);
$top = get_field('logo_top',$id);
$bottom = get_field('logo_bottom',$id);

// var_dump($post);
// var_dump(get_the_content($id));

if( $post->post_content ): ?>
	<section class="section-diagonal page-content">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php if($logo):
						echo '<img src="'. $logo['url'] .'" class="header-image" style="width:'.$width.'px; margin-top:'.$top.'px; margin-bottom:'.$bottom.'px;">';
					endif; 

					echo $post->post_content; ?>
				</div><!-- col end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section>

	<!-- <div class="section-diagonal page-content-separator"></div> -->
<?php endif;