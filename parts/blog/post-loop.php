<?php if ( have_posts() ) : ?>
<section id="section-posts" class="post-grid page-section">
	
	<div class="container">
		<ul class="list-unstyled row">
		<?php while ( have_posts() ) : ?>

			<?php get_template_part( 'parts/blog/loop', 'item' );  ?>

		<?php endwhile; ?>
		</ul>
	</div>
</section>
<?php else : ?>
<section class="no-posts-message page-section">
	<div class="container">
	<?php get_template_part( 'parts/blog/no', 'posts' );  ?>
	</div>
</section>
<?php endif; ?>