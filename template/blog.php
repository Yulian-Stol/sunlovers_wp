<?php
/* Template name: Блог */
?>

<?php get_header(); ?>

		<?php
			$args1 = array(
				'post_type' => 'bloglove',
				'order' => 'ASC',
			);
			$query1 = new WP_Query( $args1 );

			$args2 = array(
				'post_type' => 'blogfriendship',
				'order' => 'ASC',
			);
			$query2 = new WP_Query( $args2 );
		?>

		<div class="container breadcrumbs__container">
			<a href="<?php the_field('link_home','option'); ?>" class="breadcrumbs__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			<div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="<?php the_field('link_home','option'); ?>" itemprop="item">
					<span >Home</span>
				</a>
				<span class="breadcrumbs__separator"> / </span>
				<span class="breadcrumbs__current"><span>Blog</span>
				</span>
			</div>
		</div>

		<section class="banner">
			<div class="container">
				<div class="banner__wrap">
					<div class="banner__item">
						<h2 class="banner__title">How to know <br>
							how Sleep Love <br>
							works</h2>
						<p class="banner__time">May 7, 2019 (10 mins read)</p>
						<p class="banner__subtitle">Proident aliquip velit qui commodo officia qui consectetur dolor ullamco aliquip elit incididunt. Ea minim ex consectetur excepteur. Ex laborum nostrud mollit sint consectetur Lorem amet aliqua do enim. Commodo duis dolor anim excepteur. In aliquip mollit nulla...</p>
					</div>

					<a href="#" class="banner__btn stat__btn">
						Download app
					</a>
				</div>
			</div>
		</section>

		<section class="blog">
			<div class="container">
				<div class="tabs">
					<ul class="tabs__list">
						<li class="tabs__item">Love</li>
						<li class="tabs__item">Friendship</li>
						<li class="tabs__item">Carreer</li>
						<li class="tabs__item">Health</li>
						<li class="tabs__item">Tips</li>
					</ul>
					<div class="blog__list">
						<div class="tabs__wrap">
							<?php if ( $query1->have_posts()) : while ( $query1->have_posts()) : $query1->the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="blog__item">
										<div class="blog__img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										</div>
			
										<div class="blog__info">
											<h3 class="blog__title"><?php the_title(); ?></h3>
											<p class="blog__time"><?php echo date_i18n('F j, Y', strtotime(get_post()->post_date)); ?></p>
											<p class="blog__text"><?php the_field('blog-subtitle'); ?></p>
										</div>
									</a>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
						<div class="tabs__wrap">
							<?php if ( $query2->have_posts()) : while ( $query2->have_posts()) : $query2->the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="blog__item">
										<div class="blog__img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										</div>
			
										<div class="blog__info">
											<h3 class="blog__title"><?php the_title(); ?></h3>
											<p class="blog__time"><?php echo date_i18n('F j, Y', strtotime(get_post()->post_date)); ?></p>
											<p class="blog__text"><?php the_field('blog-subtitle'); ?></p>
										</div>
									</a>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
						<div class="tabs__wrap">3</div>
						<div class="tabs__wrap">4</div>
						<div class="tabs__wrap">5</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>