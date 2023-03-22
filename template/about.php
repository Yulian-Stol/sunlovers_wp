<?php
/* Template name: Про нас */
?>

<?php get_header(); ?>

<div class="container breadcrumbs__container">
			<a href="<?php the_field('link_home','option'); ?>" class="breadcrumbs__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			<div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="<?php the_field('link_home','option'); ?>" itemprop="item">
					<span >Home</span>
				</a>
				<span class="breadcrumbs__separator"> / </span>
				<span class="breadcrumbs__current"><span>About</span>
				</span>
			</div>
		</div>

		<section class="banner">
			<div class="container">
				<div class="banner__img-about">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-banner.jpg" alt="">
					<p class="banner__img-text">Sleep Lover</p>
				</div>
			</div>
		</section>

		<section class="blog">
			<div class="container">
				<div class="blog__wrapper">
					<h3 class="blog__wrapper_title">About Us</h3>
						<p>Commodo labore ut nisi laborum amet eu qui magna ullamco ut labore. Aliquip consectetur labore consectetur dolor exercitation est minim quis. Magna non irure qui ex est laborum nulla excepteur qui. Anim Lorem dolore cupidatat pariatur ex tempor. Duis ea excepteur proident ex commodo irure est.
							<br><br>
							Nisi commodo qui pariatur enim sint laborum consequat enim in officia. Officia fugiat incididunt commodo et mollit aliqua non aute. Enim dolor eiusmod aliqua amet ipsum in enim eiusmod. Quis exercitation sit velit duis.
							<br><br>
							Est Lorem labore consectetur minim sit eu eiusmod mollit velit. Consectetur voluptate ex amet id eiusmod laborum irure. Aliquip ad qui id exercitation irure amet commodo nisi quis. Occaecat minim incididunt eiusmod nostrud veniam quis culpa. Nisi ipsum et consequat id deserunt excepteur. Cillum non pariatur culpa ut occaecat laboris eu. Ullamco ad Lorem et elit laboris eu qui irure nulla qui culpa et. Cupidatat sunt ipsum proident aute exercitation do tempor aliqua cupidatat quis non exercitation. Adipisicing do minim dolore nulla mollit. Adipisicing incididunt irure ipsum et in esse ipsum elit tempor.
							<br><br>
							Aliquip mollit sunt qui irure. Irure ullamco Lorem excepteur dolor qui ea ad quis. Enim fugiat cillum enim ad occaecat sint qui elit labore mollit sunt laborum fugiat consequat. Voluptate labore sunt duis eu deserunt. Occaecat do ut ut labore cillum enim dolore ad enim enim id. Aliquip do veniam ad excepteur ad cillum qui deserunt nostrud sunt aliqua duis sunt occaecat. Laborum incididunt commodo ullamco proident quis.</p>
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
				<a href="#" class="stat__btn">
					Download app
				</a>
			</div>
		</section>

<?php get_footer(); ?>