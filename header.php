<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="sr-only" href="#content">Skip to content</a>
	
	<header id="masthead" class="header-normal" role="banner">
		<div class="container">
			<div class="row top-row">
				<div class="col-2 user-links">
					<div class="text-center">
						<?php if (is_user_logged_in()) { ?>
						<a href="<?php echo wp_logout_url(); ?>" title="Login">Logout</a>
						<?php } else { ?>
						<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a> |  
						<a href="<?php echo wp_registration_url(); ?>">Register</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-8">
					<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></span></a>
				</div>
				<div class="col-2 search">
					<button id="search-btn" class="btn btn-default btn-block" data-toggle="modal" data-target="#search-modal">Search<i class="fa fa-search"></i></button>
				</div>
			</div>
			<div class="row bot-row">
				<div class="col-10">
					<nav id="top-nav">
						<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Main nav', 
						'menu_class'  => 'list-inline',
						'fallback_cb' => false 
						) ); 
						?>
					</nav>
				</div>
				<div class="col-2 text-right quick-links">
					<?php
					$main_email = get_field('main_email', 'options');	
					?>
					<a href="<?php echo get_option('home'); ?>/"><span class="sr-only">Home</span><i class="fa fa-home fa-lg"></i></a>
					<a href="<?php bloginfo('rss2_url'); ?>"><span class="sr-only">RSS</span><i class="fa fa-rss fa-lg"></i></a>
					<a href="mailto:<?php echo $main_email; ?>"><span class="sr-only">Email</span><i class="fa fa-envelope fa-lg"></i></a>
					<a href="https://www.instagram.com/beautifulhomesinthenorth/" target="_blank"><span class="sr-only">Instagram</span><i class="fa fa-instagram fa-lg"></i></a>
					
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<main id="content" class="site-content">