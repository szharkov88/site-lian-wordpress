<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
	<section class="mobile-header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="mobile-header-tittle">Get in Touch</div>
					<div class="mobile-header-subtittle">Contact us Today</div>
					<div class="mobile-header-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</div>
				</div>
			</div>


		</div>
	</section>
	<section class="photoabout">
		<div class="photoabout-print" style="font-size: 0"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/contact/main-photo.jpg" alt=""></div>
	</section>
	<section class="message">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
					<div class="info-block">
						<h1 class="info-block-tittle">Office Info</h1>
						<h2 class="info-block-subtittle">People Behind the Success of our Company</h2>
						<p class="info-block-text1"><span class="info-block-text">Office Hours:</span><?php the_field('time_of_work'); ?></p>
						<p class="info-block-text2"><span class="info-block-text">Address:</span><?php the_field('adress'); ?></p>
						<p class="info-block-tell"><span class="info-block-text">Tell:</span><?php the_field('tell'); ?></p>
						<p class="info-block-fax"><span class="info-block-text">Fax:</span><?php the_field('fax'); ?></p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-8">
					<div class="input-block">
						<form action="">
							<textarea class="input-block1" required placeholder="Name" name="" id="" cols="1" rows="1"></textarea>
							<textarea class="input-block2" required placeholder="Email" name="" id="" cols="1" rows="1"></textarea>
							<textarea class="input-block3" required placeholder="Message" name="" id="" cols="1" rows="1"></textarea>
						</form>
					</div>
					<button class="button-send">send message</button>
				</div>
			</div>
		</div>
	</section>
	<section class="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab564b8e247fb32e350fffc9f5473cf435d129a2c4e77e0e35c8f3fc81d605c07&amp;width=100%25&amp;height=360&amp;lang=ru_RU&amp;scroll=false"></script>
	</section>
	<section class="values">
		<div class="container">
			<h1 class="values-tittle"><?php the_field('values_title'); ?></h1>
			<div class="values-blocktext"><p class="values-text"><?php the_field('values_text'); ?></p></div>
			
		
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4"><div class="values-block wow fadeInUp" data-wow-delay='0.2s'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/contact/values-img1.jpg" style="display: inline-block" alt="">
				<h2 class="values-block-tittle"><?php the_field('values_title1'); ?></h2>
				<p class="values-block-text"><?php the_field('values_text1'); ?></p>
			</div></div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4"><div class="values-block wow fadeInUp" data-wow-delay='0.3s'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/contact/values-img2.jpg" style="display: inline-block" alt="">
				<h2 class="values-block-tittle"><?php the_field('values_title2'); ?></h2>
				<p class="values-block-text"><?php the_field('values_text2'); ?></p>
			</div></div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4"><div class="values-block wow fadeInUp" data-wow-delay='0.4s'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/contact/values-img3.jpg" style="display: inline-block" alt="">
				<h2 class="values-block-tittle"><?php the_field('values_title3'); ?></h2>
				<p class="values-block-text"><?php the_field('values_text3'); ?></p>
			</div></div>
		</div>
	  </div>
	</section>
	<?php get_footer(); ?>