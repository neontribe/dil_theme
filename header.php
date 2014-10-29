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
	<link href="http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700" rel="stylesheet" type="text/css">
	<link rel="icon" href="favico.png" type="image/png" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/selectivizr-min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<nav role="navigation">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>" aria-label="MOMO homepage"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/momo_logo.png" alt="MOMO homepage" /></a></li>
				<li><a href="<?php bloginfo('url'); ?>/about">About MOMO</a></li>
				<li><a href="<?php bloginfo('url'); ?>/how-it-works">How it works</a></li>
				<li><a class="service-link" href="#">Service MOMO</a></li>
				<li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
			</ul>
		</nav>
		<main role="main" id="main">
			<div>