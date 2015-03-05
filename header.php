<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" /> 
	<title>Elite Web Design - Seattle, WA</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="//use.typekit.net/xgz8fdf.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Begin Header -->
	<header>
		<div class="contain">
			<h1>
			<!-- Hidden for SEO-->
			<span class="logo"><?php bloginfo('name'); ?></span>
			<!-- for screen readers -->
			<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/elite-logo.png" alt="<?php bloginfo('name') ?>"></a>
			</h1>
			<img id="toggle" src="<?php bloginfo('template_url'); ?>/images/img-toggle.png" width="25" height="25"	alt="Toggle Menu">
			<h1 id="pageid"></h1>
		</div>
		<!-- Begin Navigation -->
		<nav class="contain main-menu">
		<?php wp_nav_menu( 'main_menu' ); ?>
			<!-- <ul>
				<li><a href="#">About</a>
				<li><a href="#">Services</a>
					<ul>
						<li><a href="#">SEO</a>
						<li><a href="#">Web Design</a>
						<li><a href="#">Web Development</a>
					</ul>
				<li><a href="#">Portfolio</a>
					<ul>
						<li><a href="#">NECN</a>
						<li><a href="#">InkedandProud</a>
						<li><a href="#">Gump Graphics</a>
					</ul>
				<li><a href="#">Blog</a>
				<li><a href="#">Contact</a>
			</ul> -->
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->
	<div class="contain">
		<!-- Begin Main Content -->
		<main>