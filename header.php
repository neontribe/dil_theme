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
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js" media="all"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div>
		<aside role="complementary" aria-labelledby="meta-nav">
			<h2 class="visually-hidden" id="meta-nav">Site Tools</h2>
			<ul>
				<li><a href="<?php $page = get_page_by_title( 'About' ); echo $page->guid ?>">About <em>A Day In The Life</em></a></li>
				<li><a href="/wp-admin">Login</a></li>
			</ul>
		</aside>
		<nav role="navigation" aria-labelledby="topic-nav">
			<h2 class="visually-hidden" id="topic-nav">Topic Navigation</h2>
			<ul>
				<?php wp_list_categories('hide_empty=0&exclude=1&title_li'); ?>
			</ul>
		</nav>
		<main id="main" role="main">
			<div>