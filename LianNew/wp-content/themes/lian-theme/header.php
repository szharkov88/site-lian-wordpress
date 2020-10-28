<!DOCTYPE html>
<html lang="ru0">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lian</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<section class="mobile">
		<a href="#menu" class="menu-link">
					<span></span>
				</a>
				<div class="mobile-menu-block">
					<?php wp_nav_menu( array(
						'container'       => 'ul',
						'container_class' => 'mobile-menu',
						'menu_class'      => 'mobile-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
				</div>
	</section>
	<nav class="nav">
			<div class="container">
				
				<div class="row align-items-center">
					<div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-6">
						<div class="nav-logo"><?php the_custom_logo(); ?></div>
					</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 main-menu-lian">
				<div class="nav-menu">
					<?php wp_nav_menu( array(
						'container'       => 'ul',
						'container_class' => 'nav-menu-ul',
						'menu_class'      => 'nav-menu-ul',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
				</div>
				<!-- <div class="nav-menu">
				<ul class="nav-menu-ul">
				        <li class="nav-menu-ul_li">home</li>
				  		<li class="nav-menu-ul_li">about</li>
				  		<li class="nav-menu-ul_li">portfolio</li>
				  		<li class="nav-menu-ul_li">blog</li>
				  		<li class="nav-menu-ul_li">contact</li>		
				</ul>
			</div> -->
			<div class="zoom"></div>
			</div>
			</div>
		</nav>