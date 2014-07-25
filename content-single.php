<?php
/**
 * @package _s
 */
?>

<h1>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<span>of <?php the_author(); ?></span>
</h1>
<div class="dil-page">



		<p class="center">
			Published on the day <time><?php echo get_the_date('d/m/Y'); ?></time>.<br/>
			Found in <span class="post-cats">
			<?php
				$categories = get_the_category();
				for ($i = 0; $i < count($categories); ++$i ) {
					$category = $categories[$i];
					if ($category->parent !== 0) {
						$categoryParent = get_cat_name($category->parent);
						$class = strtolower($category->name); ?>
						<a class="<?php echo $class; ?>" href="<?php echo get_category_link($category->cat_ID) ?>">
							<?php echo $categoryParent; ?><span class="visually-hidden"><?php echo $category->name ?></span></a><?php if ($i + 1 !== count($categories)) { echo ', '; }
					}
				} 
			?>
			</span>
		</p>
		<div class="categories">
		</div>
	<?php the_content(); ?>
</div>













<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php _s_posted_on(); ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', '_s' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', '_s' ) );

			if ( ! _s_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article>
