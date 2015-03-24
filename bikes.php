<?php
/**
 * Template Name: Bikes Overview
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cycles J Bryant
 */

get_header(); ?>

	<div id="primary" class="bike-overview">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="page-title">Bikes</h1>

		<?php endwhile; // end of the loop. ?>

			<?php

				$args = array(
					'post_type' => 'product',
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field'    => 'slug',
							'terms' => 'frames'
						)
					)
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : ?>

				<section class="portal-container">

					<?php while($query->have_posts()) : ?>

						<?php $query->the_post(); ?>

						<article class="bike-portal">

							<div class="bike-image">
								<?php $small_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bike-mobile' ); ?>
								<?php $medium_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bike-tablet' ); ?>
								<?php $large_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bike-desktop' ); ?>

								<picture class="bike-image">
									<!--[if IE 9]><video style="display: none"><![endif]-->
									<source
										data-srcset="<?php echo $small_image[0]; ?>"
										media="(max-width: 500px)" />
									<source
										data-srcset="<?php echo $medium_image[0]; ?>"
										media="(max-width: 1028px)" />
									<source
										data-srcset="<?php echo $large_image[0]; ?>"
										media="(max-width: 2224px)" />
									<!--[if IE 9]></video><![endif]-->
									<img
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										class="lazyload"
										alt="Cycles J Bryant" />
								</picture>
							</div>

							<h3 class="bike-name">
								<a href="<?php the_permalink(); ?>">
									<?php the_title() ?>
								</a>
							</h3>

						</article>

					<?php endwhile; ?>

				</section>

			<?php endif; ?>

	</div><!-- #primary -->

	<?php while ( have_posts() ) : the_post(); ?>

		<article class="slogan">
			<h1><?php the_field('bike_slogan'); ?></h1>
		</article>

		<section class="versatility-container">

			<div class="versatility-feature">

				<div class="versatility-image">

					<?php $explore_small = wp_get_attachment_image_src(get_field('versatility_image_1'), 'versatility-mobile'); ?>
					<?php $explore_medium = wp_get_attachment_image_src(get_field('versatility_image_1'), 'versatility-tablet'); ?>
					<?php $explore_large = wp_get_attachment_image_src(get_field('versatility_image_1'), 'versatility-desktop'); ?>

					<picture>
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							data-srcset="<?php echo $explore_small[0]; ?>"
							media="(max-width: 500px)" />
						<source
							data-srcset="<?php echo $explore_medium[0]; ?>"
							media="(max-width: 860px)" />
						<source
							data-srcset="<?php echo $explore_large[0]; ?>"
							media="(min-width: 861px)" />
						<!--[if IE 9]></video><![endif]-->
						<img
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							class="lazyload"
							alt="Cycles J Bryant" />
				</div>

				<div class="content">
					<div class="versatility-icon">
						<img src="<?php the_field('versatility_section_1_icon'); ?>" />
					</div>
					<div class="versatility-content">
						<?php the_field('versatility_section_1_content'); ?>
					</div>
				</div>

			</div>

			<div class="versatility-feature">

				<div class="versatility-image">

					<?php $explore_small = wp_get_attachment_image_src(get_field('versatility_image_2'), 'versatility-mobile'); ?>
					<?php $explore_medium = wp_get_attachment_image_src(get_field('versatility_image_2'), 'versatility-tablet'); ?>
					<?php $explore_large = wp_get_attachment_image_src(get_field('versatility_image_2'), 'versatility-desktop'); ?>

					<picture>
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							data-srcset="<?php echo $explore_small[0]; ?>"
							media="(max-width: 500px)" />
						<source
							data-srcset="<?php echo $explore_medium[0]; ?>"
							media="(max-width: 860px)" />
						<source
							data-srcset="<?php echo $explore_large[0]; ?>"
							media="(min-width: 861px)" />
						<!--[if IE 9]></video><![endif]-->
						<img
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							class="lazyload versatility-image"
							alt="Cycles J Bryant" />
				</div>

				<div class="content">
					<div class="versatility-icon">
						<img src="<?php the_field('versatility_section_2_icon'); ?>" />
					</div>
					<div class="versatility-content">
						<?php the_field('versatility_section_2_content'); ?>
					</div>
				</div>
			</div>

			<div class="versatility-feature">

				<div class="versatility-image">

					<?php $explore_small = wp_get_attachment_image_src(get_field('versatility_image_three'), 'versatility-mobile'); ?>
					<?php $explore_medium = wp_get_attachment_image_src(get_field('versatility_image_three'), 'versatility-tablet'); ?>
					<?php $explore_large = wp_get_attachment_image_src(get_field('versatility_image_three'), 'versatility-desktop'); ?>

					<picture>
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							data-srcset="<?php echo $explore_small[0]; ?>"
							media="(max-width: 500px)" />
						<source
							data-srcset="<?php echo $explore_medium[0]; ?>"
							media="(max-width: 860px)" />
						<source
							data-srcset="<?php echo $explore_large[0]; ?>"
							media="(min-width: 861px)" />
						<!--[if IE 9]></video><![endif]-->
						<img
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							class="lazyload versatility-image"
							alt="Cycles J Bryant" />
				</div>

				<div class="content">
					<div class="versatility-icon">
						<img src="<?php the_field('versatility_section_3_icon'); ?>" />
					</div>
					<div class="versatility-content">
						<?php the_field('versatility_section_3_content'); ?>
					</div>
				</div>
			</div>

		</section>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
