
	<footer class="footer">
		<div class="container footer__container">
			<a href="#" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-lite.svg" alt="" />
				<span>Sleep. Relax. Enjoy.</span>
			</a>

			<nav class="footer__nav">
				<?php 
						wp_nav_menu( array(
							'menu'=>'menu_footer',
							'menu_class'=>'list',
							'theme_location'=>'menu_footer',
						) );
				?>
			</nav>

			<div class="footer__store">
				<a href="<?php the_field('link_apple', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore.svg" alt="" /></a>
				<a href="<?php the_field('link_google', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.svg" alt="" /></a>
			</div>
		</div>
	</footer>