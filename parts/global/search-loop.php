<section class="search-list">

	<?php if ( have_posts() ): ?>
	
	<div class="post-list">
					
		<div class="container">	
			<?php while ( have_posts() ) : the_post();
			$date = get_the_date('l - jS F - Y');
			 ?>	
		
			<article <?php post_class(); ?>>
				<h4><?php the_title(); ?></h4>
				
				<?php if ($post->post_type == 'post') { ?>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $date; ?></time>
				<?php } ?>
						
				<?php the_excerpt(); ?>	
					
				<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" class="btn btn-default btn-block" rel="bookmark">
					View <?php echo ($post->post_type == 'post') ? "Post":"Page"; ?> <i class="fa fa-angle-right fa-lg"></i>
				</a>
				
			</article>
			<?php endwhile; ?>
		</div>	

	</div><!-- End List -->
	
	<?php else: ?>
	<div class="container">	
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
			<div class="well well-lg posts-message">
				<h3 class="text-center">Sorry</h3>
				<p class="text-center">There are no search results for "<?php echo $search_query; ?>". Please try again.</p>
			</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

</section>
