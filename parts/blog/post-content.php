<?php if ( have_posts() ) : ?>

<div class="container">
	<?php while ( have_posts() ) : ?>

		<?php get_template_part( 'parts/blog/post', 'article' );  ?>

	<?php endwhile; ?>
</div>
	
<?php endif; ?>