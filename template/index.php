<?php
/* Template name: Головна */
?>

<?php get_header(); ?>

		<section class="form">
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
    </section>

		<section class="swiper mySwiper">
			<div class="swiper-wrapper">
				<?php if( have_rows('swiper') ): ?>
					<?php while( have_rows('swiper') ): the_row(); 
						$img = get_sub_field('swiper__img');
						$title = get_sub_field('swiper__title');
						$subtitle = get_sub_field('swiper__subtitle');
						$link = get_sub_field('swiper__link');
					?>
						<a href="<?php if($link): ?> 
								<?php echo $link; ?>
								<?php else: ?>
								/
							<?php endif; ?>"
							class="swiper-slide"
							style="background-image: url('<?php echo $img; ?>')"
						>
							<p class="swiper__title"><?php echo $title; ?></p>
							<p class="swiper__subtitle"><?php echo $subtitle; ?></p>
							<?php if($link): ?> 
								<button class="swiper__btn swiper__center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt="" /></button>
								<?php else: ?>
								<button disabled class="swiper__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lock.svg" alt="" /></button>
							<?php endif; ?>
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</section>

    <section class="stat">
      <div class="stat__container">
				<div></div>

				<div class="stat__block">
					<h2 class="stat__title"><?php the_field('stat-title'); ?></h2>
					<p class="stat__subtitle">
							<?php the_field('stat-subtitle'); ?>
					</p>
	
					<div class="stat__wrap">
						<?php if( have_rows('stat') ): ?>
							<?php while( have_rows('stat') ): the_row(); 
								$title = get_sub_field('stat__title');
								$subtitle = get_sub_field('stat__subtitle');
							?>
								<div class="stat__item">
									<p class="stat__item_title"><?php echo $title; ?></p>
									<p class="stat__item_subtitle"><?php echo $subtitle; ?></p>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>
	
					<a class="stat__btn" href="#">Download App</a>
				</div>

        <div class="stat__store">
          <p class="stat__store_title">Join over a million happy users!</p>
          <a href="<?php the_field('link_apple', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore.svg" alt="" /></a>
					<a href="<?php the_field('link_google', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.svg" alt="" /></a>
        </div>
      </div>
    </section>

    <section class="table">
			<div class="container">
				<h2><?php the_field('table-title'); ?></h2> 
				<p class="table__subtitle">
					<?php the_field('table-subtitle'); ?>
				</p>
				<div class="table__wrap">
					<div class="table__column">
						<p class="table__title"></p>
						<p>Basic</p>
						<p class="table__select">Premium</p>
					</div>

					<?php if( get_field('table__group')): ?>
						<?php $group_field = get_field('table__group');
							if($group_field) {
								$button = $group_field['button_name'];
								if($button) {
									echo '<button class="btn table__btn"><p>' . esc_html($button) .'</p></button>';
								}
							}
						?>
					<?php endif; ?>

					<?php if( have_rows('table') ): ?>
						<?php while( have_rows('table') ): the_row(); 
							$title = get_sub_field('table__title');
							$group_basic = get_sub_field('table__group_basic');
							$group_premium = get_sub_field('table__group_premium');
						?>
						<div class="table__column">
							<p class="table__title"><?php echo $title; ?></p>
							<?php
								if ($group_basic) {
										$text_field_value = $group_basic['table__choice'];
										$image_field_value = $group_basic['table__img'];
										if($text_field_value && !$image_field_value) {
											echo '<p>' . esc_html($text_field_value) . '</p>';
										} else {
											echo '<p><img src="' . esc_url($image_field_value) . '" alt="" /></p>';
										}
								}
							?>
							<?php
								if ($group_premium) {
										$text_field_value = $group_premium['table__choice'];
										$image_field_value = $group_premium['table__img'];
										if($text_field_value && !$image_field_value) {
											echo '<p class="table__select">' . esc_html($text_field_value) . '</p>';
										} else {
											echo '<p class="table__select"><img src="' . esc_url($image_field_value) . '" alt="" /></p>';
										}
								}
							?>

						</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<div class="table__column">
						<p class="table__title"></p>
						<p></p>
						<div class="table__select">
							<?php if( get_field('table__group')): ?>
								<?php $group_field = get_field('table__group');
									if($group_field) {
										$price_disc = $group_field['button_price_discount'];
										$price = $group_field['button_price'];
										if($button) {
											echo '<p class="table__discount table__height">' . esc_html($price_disc) .'</p>';
											echo '<p class="table__height">' . esc_html($price) .'</p>';
										}
									}
								?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php get_footer(); ?>