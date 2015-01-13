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



		<div class="center">

				<?php
			$date = get_the_date('d/m/Y');
			$datetime = get_the_date('Y-m-d');
			if(substr_count($date, '/2014')) {
				$date = '7th of November';
			}
			?>
			<p class="published">Published on the day <time datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>.</p>
			<p>Found in <span class="post-cats">
			<?php
				$categories = get_the_category();
				for ($i = 0; $i < count($categories); ++$i ) {
					$category = $categories[$i];
					if ($category->parent !== 0) {
						$categoryParent = get_cat_name($category->parent);
						$class = strtolower($category->name); ?>
						<a class="<?php echo $class; ?>" href="<?php echo get_category_link($category->cat_ID) ?>">
							<?php echo $categoryParent; ?><span class="visually-hidden"><?php echo $category->name ?></span></a> 
							<?php
					}
				} ?>
				<?php //if( has_tag() ) { ?>
					<!--<br><span class="tags">with the tags <?php // the_tags('', ' ', ''); ?></span>-->
				<?php // } ?>
			</span>
			</p>
		</div>
	<?php the_content(); ?>
</div>
