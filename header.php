<!DOCTYPE html>
<!--[if IE 7]>     <html class="ie ie7 lt-ie8 lt-ie9" dir="ltr"
lang="en-GB"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lt-ie9" dir="ltr" lang="en-GB">
<![endif]-->
<!--[if IE 9]>     <html class="ie ie9" dir="ltr" lang="en-GB"> <![endif]-->
<!--[if gt IE 9]>  <html dir="ltr" lang="en-GB"> <![endif]-->
<!--[if !IE]><!--> <html dir="ltr" lang="en-GB"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="favico.png" type="image/png" />
	<link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' data-youshallnotparse='true' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Kreon:700&text=abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' data-youshallnotparse='true' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico&text=abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789' data-youshallnotparse='true' rel='stylesheet' type='text/css'>	
	<style data-youshallnotparse='true'>
	@font-face {
		font-family: 'icomoon';
		src:url('<?php bloginfo('stylesheet_directory'); ?>/icomoon.eot?-wu32mu');
		src:url('<?php bloginfo('stylesheet_directory'); ?>/icomoon.eot?#iefix-wu32mu') format('embedded-opentype'),
			url('<?php bloginfo('stylesheet_directory'); ?>/icomoon.woff?-wu32mu') format('woff'),
			url('<?php bloginfo('stylesheet_directory'); ?>/icomoon.ttf?-wu32mu') format('truetype'),
			url('<?php bloginfo('stylesheet_directory'); ?>/icomoon.svg?-wu32mu#icomoon') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	</style>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-30970110-2', 'auto');
		  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class(); ?>>
	<div>
		<a href="#main">skip to content</a>
		<aside role="complementary" aria-labelledby="meta-nav">
			<h2 class="visually-hidden" id="meta-nav">Site Tools</h2>
			<ul>
				<li><a href="/guide">How to use <em>A Day In The Life</em></a></li>
				<li><a href="/wp-admin">Login</a></li>
			</ul>
		</aside>
		<button aria-controls="topics" aria-expanded="false" type="button">Choose a topic</button>
		<nav role="navigation" aria-labelledby="topic-nav" id="topics">
			<h2 class="visually-hidden" id="topic-nav">Topic Navigation</h2>
			<ul>
				<?php wp_list_categories('hide_empty=0&exclude=1&title_li=&depth=1'); ?>
			</ul>
		</nav>
		<main role="main" id="main">
			<div>
