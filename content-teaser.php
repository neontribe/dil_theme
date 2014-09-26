<li>
	<div>
		<h3>On the day <time><?php echo get_the_date('d/m/Y'); ?></time></h3>
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>">Read this day from <?php echo get_the_date('d/m/Y'); ?></a></p>
	</div>
</li>