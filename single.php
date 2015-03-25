<?php
/**
 * The template for displaying all single posts.
 *
 * @package Cycles J Bryant
 */

get_header(); ?>

	<div id="primary" class="journal">

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="jounral-entry">

				<h2 class="entry-title"><?php the_title(); ?></h2>

				<?php the_content(); ?>

			</article>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

	<section class="journal-paging">

		<?php basis_post_nav(); ?>

	</section>

	<div class="comments-container">

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	</div>

<?php get_footer(); ?>
