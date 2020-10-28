$(document).ready(function(){
		  var link = $('.menu-link');
		  var link_active = $('.menu-link_active');
		  var menu = $('.mobile-menu-block');
		  var nav_link = $('.mobile-menu-block a');

		  link.click(function(){
		 	link.toggleClass('menu-link_active');
		 	menu.toggleClass('mobile-menu-block_active');
		  });
	      nav_active.click(function(){
	        link.toggleClass('menu-link_active');
	        menu.toggleClass('mobile-menu-block_active');

	      });
	});