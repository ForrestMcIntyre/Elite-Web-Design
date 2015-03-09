<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" /> 
	<title>Elite Web Design - Seattle, WA</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">

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
			<div id="toggle"><span class="fa fa-navicon"></span>&nbsp;MENU</div>
		</div>
		<!-- Begin Navigation -->
		<nav class="contain main-menu">
			<?php wp_nav_menu( 'main_menu' ); ?>
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->
	<div class="contain">
		<!-- Begin Main Content -->
		<main>