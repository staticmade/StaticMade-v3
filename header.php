<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?><?php wp_title("|",true); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="Static Made">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:400,700">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:300">
<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="http://platform.tumblr.com/v1/share.js"></script>
</head>
<body>
	<header class="sixteen columns">
		<div class="header-inner">
			<div class="title">
				<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<p>Written + produced with love in the City of Champions.</p>
				<p>&nbsp;</p>
				<ul><li><a href="/about">About</a></li>
				    <li><a href="/archive">Archive</a></li>
				    <li><a href="/subscribe">Feeds</a></li>
				</ul>
			</div>
		</div>
	</header>