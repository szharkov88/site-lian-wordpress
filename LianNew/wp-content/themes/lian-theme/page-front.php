<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
	<section class="mainpart">
		<div class="sim-slider">
		  <ul class="sim-slider-list">
		    <li><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/slider/base-black.jpg" alt="screen"></li> <!-- это экран -->
		    <li class="sim-slider-element"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/slider/mainslide.jpg" alt="0"></li>
		    <li class="sim-slider-element"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-2.jpg" alt="1"></li>
		    <li class="sim-slider-element"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/slider/mainslide.jpg" alt="2"></li>    
		  </ul>
		  <div class="sim-slider-arrow-left"></div>
		  <div class="sim-slider-arrow-right"></div>
		  <div class="sim-slider-dots"></div>
		</div>
	</section>
	<?php include 'photos.php'; ?>
	<?php get_footer(); ?>