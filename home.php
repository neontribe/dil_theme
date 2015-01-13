<?php get_header(); ?>

<h1><!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">--><?php bloginfo( 'name' ); ?><!--</a>--></h1>
 <?php
// The Query
query_posts( 'page_id=34' );

// The Loop
while ( have_posts() ) : the_post();
    the_content();
endwhile;

// Reset Query
wp_reset_query();
?> 
<a href="/wp-admin/post-new.php" class="button-shaped submit-day">Add a day!</a>

<?php if ( have_posts() ) : ?>
	<h2 class="latest" id="latest">Latest Days</h2>

	<?php _s_paging_nav(); ?>

	<ol class="grid">
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
	</ol>

	<?php _s_paging_nav(); ?>

<?php endif; ?>

<?php get_footer(); ?>