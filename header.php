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
			<div class="row">
				<div class="col-2">
				</div>
				<div class="col-8">
					<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></span></a>
				</div>
				<div class="col-2">
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<main id="content" class="site-content">