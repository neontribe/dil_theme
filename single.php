<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>