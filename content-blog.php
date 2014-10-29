<div class="narrow content">
	<h1>
		<?php the_title(); ?>
	</h1>
</div>

	<ul class="grid-3-columns blog-grid">

		<?php
		// The Query
		query_posts();

		// The Loop
		while ( have_posts() ) : the_post(); ?>

		    <li>
			    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			    <p class="meta"><time><?php echo get_the_date('F j, Y, g:i a'); ?></time></p>
				<?php the_excerpt(); ?>
			</li>

		<?php endwhile;

		// Reset Query
		wp_reset_query();
		?> 

	</ul>

</div>