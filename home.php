<?php get_header(); ?>

<h1><!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">--><?php bloginfo( 'name' ); ?><!--</a>--></h1>
<p><?php bloginfo( 'description' ); ?></p>
<a href="#" class="button-shaped submit-day">Add a day!</a>
<h2 class="latest">Latest Days</h2>
<ol class="grid">
<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			/* Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', 'teaser' );
		?>

	<?php endwhile; ?>

	<?php _s_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>
</ol>

<?php get_footer(); ?>