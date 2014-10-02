<?php get_header(); ?>

<?php
	$category = get_queried_object();
	$thisCatName = $category->name;
	$parentCat = $category->category_parent;
	$parentCatName = get_cat_name($parentCat);
?>

<h1><a href="/"><?php bloginfo( 'name' ); ?></a> 
<?php if ($parentCat !== 0) : ?>
	<em class="<?php echo strtolower($thisCatName); ?>"><?php echo $parentCatName; ?> <span class="visually-hidden">(<?php echo strtolower($thisCatName); ?> references)</span></em>
<?php else : ?>
	<em class="dashes"><?php echo $thisCatName; ?></em>
<?php endif; ?>
</h1>

<?php if ($parentCat !== 0) : ?>
<p class="cat-description">All days that mention <strong><?php echo strtolower($parentCatName); ?></strong> <span class="<?php echo strtolower($thisCatName); ?>"><?php echo strtolower($thisCatName); ?>ly</span>.</p>
<?php endif; ?>

<?php if ($parentCat == 0) : ?>

	<p aria-hidden class="center">Showing all days that mention <strong><?php echo $thisCatName; ?></strong>. You can choose to read just negative, neutral or positive mentions:</p>

	<nav role="navigation" aria-labelledby="pos-or-neg">
		<h2 id="pos-or-neg" class="visually-hidden">Choose to read just positive, negative or neutral days</h2>
		<ul>
			<?php wp_list_categories('hide_empty=0&title_li&child_of='.$category->term_id); ?>
		</ul>
	</nav>

<?php endif; ?>

<?php if ( have_posts() ) : ?>
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

		<?php _s_paging_nav(); ?>
	</ol>
<?php else : ?>

	<?php get_template_part( 'content', 'empty_category' ); ?>

<?php endif; ?>


<?php get_footer(); ?>