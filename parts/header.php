
	<header class="header">
		<div class="header__container container">
			<a href="/" class="header__logo">
				<img src="<?php the_field('logo_header', 'option'); ?>" alt="" /> 
			</a> 

			<nav class="header__nav">
			<?php
				add_filter( 'nav_menu_css_class', 'add_current_class_to_menu_item', 10, 2 );
				function add_current_class_to_menu_item( $classes, $item ) {
						if ( is_page() && $item->object_id == get_queried_object_id() ) {
								$classes[] = 'current-item-active';
						}
						return $classes;
				}
			?>

				<?php 
					wp_nav_menu( array(
						'menu'=>'menu_header',
						'menu_class'=>'list',
						'theme_location'=>'menu_header',
					) );
				?>

				<div class="header__store">
					<a href="<?php the_field('link_apple', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore.svg" alt="" /></a>
					<a href="<?php the_field('link_google', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.svg" alt="" /></a>
				</div>
			</nav>

			<button class="btn btn--header"><p>Try for Free</p></button>

			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>
		</div>
	</header>