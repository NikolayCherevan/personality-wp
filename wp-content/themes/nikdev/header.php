<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nikdev
 */

?>
<?php global $redux_demo; ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" class="header">
		<div class="container">
			<h1 class="logo">
				<a class="scrollto" href="#hero">
					<span class="logo-icon-wrapper"><img class="logo-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.svg" alt=""></span>
					<span class="text"><span class="highlight">APP</span>KIT</span></a>
			</h1>
			<!--//logo-->
			<nav class="main-nav navbar-right" role="navigation">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--//nav-toggle-->
				</div>
				<!--//navbar-header-->
				<div id="navbar-collapse" class="navbar-collapse collapse">
					<?php wp_nav_menu([
						'theme_location'  => '',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					]);
					?>
					<!--//nav-->

				</div>
				<!--//navabr-collapse-->
			</nav>
			<!--//main-nav-->
		</div>
		<!--//container-->
	</header>
	<!--//header-->
	<div id="hero" class="hero-section">

		<div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">

			<div class="figure-holder-wrapper">
				<div class="container">
					<div class="row">
					</div>
					<!--//row-->
				</div>
				<!--//container-->
			</div>
			<!--//figure-holder-wrapper-->

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
				<li data-slide-to="1" data-target="#hero-carousel"></li>
				<li data-slide-to="2" data-target="#hero-carousel"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item item-1 active">
					<div class="item-content container">
						<div class="item-content-inner">

							<h2 class="heading">AppKit is the perfect front-end <br class="hidden-xs">template for app developers</h2>
							<p class="intro">It helps developers to build beautiful and user-friendly web apps quickly and easily!</p>
							<a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Get Started</a>

						</div>
						<!--//item-content-inner-->
					</div>
					<!--//item-content-->
				</div>
				<!--//item-->

				<div class="item item-2">
					<div class="item-content container">
						<div class="item-content-inner">

							<h2 class="heading">Angular Lover?</h2>
							<p class="intro">AppKit also comes with an Angular JS version. It empowers developers to create UI components with very little code. Feeding data into AppKit directives is quick and easy.</p>
							<a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Find out more</a>

						</div>
						<!--//item-content-inner-->
					</div>
				</div>
				<!--//item-->

				<div class="item item-3">
					<div class="item-content container">
						<div class="item-content-inner">

							<h2 class="heading">Ready to build outstanding apps?</h2>
							<p class="intro">Get AppKit today and it will supercharge your development. It's a must-have for any developers who are serious about building great products!</p>
							<a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Try it now</a>

						</div>
						<!--//item-content-inner-->
					</div>
				</div>
				<!--//item-->
			</div>
			<!--//carousel-inner-->

		</div>
		<!--//carousel-->
	</div>
	<!--//hero-->