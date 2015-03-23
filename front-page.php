<?php
/**
 * Template Name: Front Page
 *
 * @package Cycles J Bryant
 */

get_header(); ?>

	<div id="primary" class="front-page">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $small_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-mobile' ); ?>
			<?php $medium_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-tablet' ); ?>
			<?php $large_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-desktop' ); ?>

			<picture class="hero-image">
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

			<section class="leading-section">

				<h1 class="heading"><?php the_field('leading_section_title'); ?></h1>

				<div class="leading-section-content">

					<?php the_field('leading_section_content'); ?>

				</div>

			</section>

			<section class="explore-section">

				<div class="explore-icon skill-icon">

					<img src="<?php the_field('leading_section_icon'); ?>" />

				</div>

				<div class="explore-image">
					<?php $explore_small = wp_get_attachment_image_src(get_field('explore_image'), 'explore-mobile'); ?>
					<?php $explore_medium = wp_get_attachment_image_src(get_field('explore_image'), 'explore-tablet'); ?>
					<?php $explore_large = wp_get_attachment_image_src(get_field('explore_image'), 'explore-desktop'); ?>

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
					</picture>

				</div>

				<div class="explore-content">
					<?php the_field('explore_content'); ?>
				</div>

			</section>

			<section class="instagram-feed">
				<?php dynamic_sidebar( 'instagram' ); ?>

				<div class="instagram-content">
					<?php the_field('crafted_content'); ?>
				</div>
			</section>

			<section class="crafted">

				<div class="crafted-icon skill-icon">
					<img src="<?php the_field('crafted_icon'); ?>" />
				</div>

				<div class="crafted-image">
					<?php $explore_small = wp_get_attachment_image_src(get_field('crafted_image'), 'explore-mobile'); ?>
					<?php $explore_medium = wp_get_attachment_image_src(get_field('crafted_image'), 'explore-tablet'); ?>
					<?php $explore_large = wp_get_attachment_image_src(get_field('crafted_image'), 'explore-desktop'); ?>

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
					</picture>
				</div>

				<div class="crafted-content">
					<?php the_field('crafted_content'); ?>
				</div>
			</section>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
