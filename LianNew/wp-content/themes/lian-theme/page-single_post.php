<?php /*
 * Template Name: Singple post
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
	<section class="mobile-header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="mobile-header-tittle">News About Lian</div>
					<div class="mobile-header-subtittle">Latest News & Insights</div>
					<div class="mobile-header-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</div>
				</div>
			</div>


		</div>
	</section>
	<section class="mainphoto">
		<div class="blog-print" style="font-size: 0px"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/blog/main-photo.jpg" alt=""></div>
	</section>
	<section class="post">
		<div class="container">
			<h1 class="post-tittle">I am a Blog Post with an Awesome Image</h1>
			<div class="post-info">
				<div class="post-info-name">by Jenn Pereira</div>
				<div class="post-info-data"> February 28, 2015</div>
				<div class="post-info-like"><img height="14px" style="margin-right: 3px;" src="<?php echo get_template_directory_uri(); ?>/img/single_post/like.png" alt="">324 likes</div>
			</div>
			<div class="row justify-content-center">
				<div class="post-photo"><img class="post-photo_img" src="<?php echo get_template_directory_uri(); ?>/img/single_post/post-photo.jpg"></div>
				<div class="post-text1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</div>
				<div class="post-text2">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</div>
				<div class="post-text-block">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</div>
			    <div class="post-subtittle">This is a Heading</div>
				<div class="post-text3">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</div>
				<div class="post-text4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue.</div>
			</div>
			<form class="post-form" action="">
				<h3 class="post-form-tittle">Leave a Comment</h3>
				<textarea class="input-block1 post-form-input1" required placeholder="Name" name="" id="" cols="1" rows="1"></textarea>
				<textarea class="input-block2 post-form-input2" required placeholder="Email" name="" id="" cols="1" rows="1"></textarea>
				<textarea class="input-block2 post-form-input3" required placeholder="Website" name="" id="" cols="1" rows="1"></textarea>
				<textarea class="input-block3 post-form-input4" required placeholder="Message" name="" id="" cols="1" rows="1"></textarea>
				<div class="row justify-content-center"><button class="post-form-button">Send Message</button></div>
			</form>
		</div>
	</section>
	<?php get_footer(); ?>