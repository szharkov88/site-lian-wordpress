<?php
/*
Template Name: Портфолио
*/
?>
<?php get_header(); ?>
	<section class="mobile-header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="mobile-header-tittle">LATEST PROJECTS</div>
					<div class="mobile-header-subtittle">We Deliver Quality</div>
					<div class="mobile-header-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</div>
				</div>
			</div>


		</div>
	</section>
	<section class="heading" style="font-size: 0">
		<div class="heading-print">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/heading.jpg" alt="">
		</div>
	</section>
	<?php include 'photos.php'; ?>		
	<?php get_footer(); ?>