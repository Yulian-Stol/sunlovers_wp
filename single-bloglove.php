<?php get_header(); ?>

		<div class="container breadcrumbs__container">
			<a href="<?php the_field('link_home','option'); ?>" class="breadcrumbs__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			<div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="<?php the_field('link_home','option'); ?>" itemprop="item">
					<span >Home</span>
				</a>
				<span class="breadcrumbs__separator"> / </span>
				<a class="breadcrumbs__link" href="<?php the_field('blog_link','option'); ?>" ><span>Blog</span>
				</a>
				<span class="breadcrumbs__separator"> / </span>
				<span class="breadcrumbs__current"><span><?php the_title(); ?></span>
				</span>
			</div>
		</div>

		<section class="banner">
			<div class="container">
				<div class="banner__img">
					<img class="" src="<?php the_field('banner-img'); ?>" alt="">
				</div> 
			</div>
		</section>

		<section class="blog">
			<div class="container">
				<div class="blog__wrapper">
					<h3 class="blog__wrapper_title"><?php the_title(); ?></h3>
						<div class="blog__tag">
							<div class="blog__name">
								<p>Ralph Hawkins</p> <p><?php echo date_i18n('F j, Y', strtotime(get_post()->post_date)); ?> (10 mins read)</p>
							</div>
							<p>#technology #tech #career</p>
						</div>
						
						<?php the_content(); ?>
				</div>
				<div class="blog__social">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Twitter.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pinterest.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/LinkedIn.svg" alt="">
					</a>
				</div>
				<a href="<?php the_field('blog_link','option'); ?>" class="stat__btn">
					Back to Blog
				</a>
			</div>
		</section>

<?php get_footer(); ?>