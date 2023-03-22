	<?php get_header(); ?>

		<?php
			$args1 = array(
				'post_type' => 'sleep',
				'order' => 'ASC',
			);
			$query1 = new WP_Query( $args1 );

			$args2 = array(
				'post_type' => 'breathing',
				'order' => 'ASC',
			);
			$query2 = new WP_Query( $args2 );
		?>

	<h2 class="archive__title margin__top">Sleep Stories</h2>

	<section class="swiper mySwiper">
			<div class="swiper-wrapper">
				<?php if ( $query1->have_posts()) : while ( $query1->have_posts()) : $query1->the_post(); ?>
						<a href="<?php if(get_the_permalink()): ?> 
								<?php echo get_the_permalink(); ?>
								<?php else: ?>
								/
								<?php endif; ?>"
								class="swiper-slide"
								style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"
							>
								<p class="swiper__title"><?php the_title(); ?></p>
			
								<?php the_content(); ?>

								<?php if ( get_the_permalink() ) : ?>
									<button class="swiper__btn swiper__center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt="" /></button>
									<?php else: ?>
									<button disabled class="swiper__btn" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lock.svg" alt="" /></button>
								<?php endif; ?>

							</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
	</section>

	<h2 class="archive__title margin__top_50">Breathing</h2>

	<section class="swiper mySwiper"> 
			<div class="swiper-wrapper">
				<?php if ( $query2->have_posts()) : while ( $query2->have_posts()) : $query2->the_post(); ?>
						<a href="<?php if(get_the_permalink()): ?> 
								<?php echo get_the_permalink(); ?>
								<?php else: ?>
								/
								<?php endif; ?>"
								class="swiper-slide"
								style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"
							>
								<p class="swiper__title"><?php the_title(); ?></p>
								<p class="swiper__subtitle"><?php the_content(); ?></p>

								<?php if ( get_the_permalink() ) : ?>
									<button class="swiper__btn swiper__center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt="" /></button>
									<?php else: ?>
									<button disabled class="swiper__btn" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lock.svg" alt="" /></button>
								<?php endif; ?>
						</a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
	</section>

		<section class="stat">
      <div class="stat__container">
				<div></div>

				<div class="form archive__form">
					<div class="container">
						<h1 class="h1 form__title">Sleep better</h1>
						<div class="form__subtitle">
							<p>40% off</p> of <p>Sleep Lover</p> Premium
						</div>
						<form action="#">
							<div class="form__item">
								<input
									id="formMail"
									type="email"
									name="mail"
									placeholder="Your Email"
									class="form__input"
								/>

								<p class="form__disk">40% off Code will be sent to your email</p>

								<button type="submit" class="form__btn" name="submit">
									Get Discount
								</button>
							</div>
						</form>
					</div>
				</div>

        <div class="stat__store">
          <p class="stat__store_title">Join over a million happy users!</p>
          <a href="<?php the_field('link_apple', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore.svg" alt="" /></a>
					<a href="<?php the_field('link_google', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.svg" alt="" /></a>
        </div>
      </div>
    </section>

	<?php get_footer(); ?>