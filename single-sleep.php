<?php get_header(); ?>

		<section class="archive margin__top">
			<div class="container">
				<div class="archive__video">
					<?php the_field('video'); ?>

				  <div class="stat__store">
						<p class="stat__store_title">Join over a million happy users!</p>
						<a href="<?php the_field('link_apple', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore.svg" alt="" /></a>
						<a href="<?php the_field('link_google', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.svg" alt="" /></a>
					</div>
				</div>

				<div class="archive__navigation">
					<div class="archive__navigation_title">
						<h2 class="archive__page-title">
							<?php the_field('archive-title'); ?>
						</h2>
						<p class="archive__subtitle"><?php the_title(); ?></p>
					</div>

					<div class="archive__nav">
						<?php
							// Отримуємо поточний кастомний тип запису та його ID
							$post_type = get_post_type();
							$current_post_id = get_the_ID();

							// Отримуємо наступний та попередній записи
							$args = array(
								'post_type' => $post_type,
								'posts_per_page' => -1,
								'order' => 'ASC'
							);
							$posts = get_posts($args);
							$prev_post = null;
							$next_post = null;
							foreach ($posts as $index => $post) {
								if ($post->ID === $current_post_id) {
										if (isset($posts[$index-1])) {
											$prev_post = $posts[$index-1];
										}
										if (isset($posts[$index+1])) {
											$next_post = $posts[$index+1];
										}
										break;
								}
							}

							// Виводимо посилання на попередній та наступний записи, якщо вони є
							if ($prev_post) {
								echo '<a class="archive__nav_prev" href="' . get_permalink($prev_post->ID) . '"></a>';
							} else {
								echo '<a href="" class="archive__nav_prev archive__nav_disabled"></a>';
							}
							if ($next_post) {
								echo '<a class="archive__nav_next" href="' . get_permalink($next_post->ID) . '"></a>';
							} else {
								echo '<a href="" class="archive__nav_next archive__nav_disabled"></a>';
							}
						?>
						<p>Download app <br>
							to use all sunsets</p>
					</div>
				</div>

				<div class="archive__posts">
					<h3 class="archive__posts_title">You Might Also Like</h3>

					<div class="archive__posts_list">
					<?php
							$current_post_id = get_the_ID(); 
							// Отримати залишені дописи custom post
							$args = array(
									'post_type' => 'sleep',
									'posts_per_page' => -1, // Відображати всі записи
									'post_status' => 'publish', // Відображати тільки опубліковані записи
									'post__not_in' => array($current_post_id) // виключаємо поточний запис
							);

							$custom_post_query = new WP_Query( $args );

							// Відображення залишених дописів custom post
							if ( $custom_post_query->have_posts() ) {
									while ( $custom_post_query->have_posts() ) {
											$custom_post_query->the_post();

											echo '
												<div
													class="archive__post"
													style="background-image: url(' . get_the_post_thumbnail_url() . ')"
												>
													<p class="swiper__title">' . get_the_title() . '</p>
													' . get_the_content() . '';
													if (get_the_permalink()) {
														echo '<a href="' . get_the_permalink() . '" class="swiper__btn"><img src="' . get_template_directory_uri() . '/assets/img/play.svg" alt="" /></a>';
													} else {
														echo '<button disabled class="swiper__btn" ><img src="' . get_template_directory_uri() . '/assets/img/lock.svg" alt="" /></button>';
													}
												echo '</div>';
									}
							}

							// Скинути запит
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
