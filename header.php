<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<?php wp_head(); ?>
	<title><?php bloginfo('name')?></title>
	<script src="http://use.edgefonts.net/droid-serif.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>

</head>
	<body <?php body_class( $class ); ?>>
		<header>
			<h1><?php bloginfo('name')?></h1>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/appleorange.jpg" />

			<nav>
				<ul>
					<a href="#"><li>Themes</li></a>
					<a href="#"><li>Process</li></a>
					<a href="#"><li>Clients</li></a>
					<a href="#"><li>Contact Us</li></a>
				</ul>
			</nav>

		</header>