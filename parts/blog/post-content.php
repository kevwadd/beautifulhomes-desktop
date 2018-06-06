<?php if ( have_posts() ) : ?>

<div class="container">
	<?php while ( have_posts() ) : ?>

		<?php get_template_part( 'parts/blog/post', 'article' );  ?>
		
		<?php wp_link_pages(); ?>
		
	<?php endwhile; ?>
</div>
	
<?php endif; ?>