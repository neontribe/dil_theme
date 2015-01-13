<?php get_header(); ?>

<h1>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
	<em><?php the_title(); ?></em>
</h1>
<?php the_content(); ?>

<?php get_footer(); ?>