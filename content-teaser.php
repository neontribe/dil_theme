<?php
	$date = get_the_date('d/m/Y');
	if(substr_count($date, '/2014')) {
		$date = '7th of November';
	}
?>
<li>
	<div>
		<h3>On the day <time><?php echo $date; ?></time></h3>
		<?php //if( has_tag() ) { ?>
			<!--<div class="tags"><?php //the_tags('', ' ', ''); ?></div>-->
		<?php // } ?>
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>">Read this day&hellip;</a></p>
	</div>
</li>