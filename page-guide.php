<?php get_header(); ?>

<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="home page"><?php bloginfo( 'name' ); ?></a>
	<em class="dashes">How to use</em>
</h1>

<nav role="navigation" aria-label="on this page">
	<ul>
		<li><a href="#introduction">Introduction</a></li>
		<li><a href="#using-the-site">Using the site</a></li>
		<li><a href="#contributing">Contributing</a></li>
		<li><a href="#registration">Registration (Signing Up)</a></li>
		<li><a href="#writing-guidelines">Writing guidelines</a></li>
	</ul>
</nav>

<div id="introduction" class="section">

<?php
	query_posts( 'page_id=62' );
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	    <?php the_content();
	endwhile;
	wp_reset_query();
?>

</div>

<div id="using-the-site" class="section">

<?php
	query_posts( 'page_id=36' );
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	    <?php
	    the_content();
	endwhile;
	wp_reset_query();
?>

</div>

<div id="contributing" class="section">

<?php
	query_posts( 'page_id=41' );
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	    <?php
	    the_content();
	endwhile;
	wp_reset_query();
?>
</div>

<div id="registration" class="section">

<?php
	query_posts( 'page_id=110' );
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	    <?php
	    the_content();
	endwhile;
	wp_reset_query();
?>

</div>


<div id="writing-guidelines" class="section">

<?php
	query_posts( 'page_id=39' );
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	    <?php
	    the_content();
	endwhile;
	wp_reset_query();
?>
<a href="/wp-admin/post-new.php" class="button-shaped submit-day">Add a day!</a>
</div>

<?php get_footer(); ?>