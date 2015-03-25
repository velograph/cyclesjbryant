<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cycles J Bryant
 */

get_header(); ?>

	<div id="primary" class="journal">

		<?php if ( have_posts() ) : ?>

			<h1 class="page-title">Follow Along on my Adventures</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="jounral-entry">

					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<a href="<?php the_permalink(); ?>">
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
					</a>

					<?php the_excerpt(); ?>

					<hr />

					Categorized by: <?php the_category(); ?>

				</article>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #primary -->

	<section class="journal-paging">

		<?php basis_paging_nav(); ?>

	</section>

<?php get_footer(); ?>
