		<?php get_template_part( 'parts/sections/the', 'magazines' ); ?>
		
		<?php  
		$rate_my_rooms_pg = get_page_by_path('rate-my-rooms');	
		if ($post->ID != $rate_my_rooms_pg->ID) {	
		?>
		<?php get_template_part( 'parts/global/rate', 'myroom' ); ?>
		<?php } ?>
		</main><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
			<?php get_template_part( 'parts/global/instagram', 'imgs' ); ?>
			<?php get_template_part( 'parts/global/footer', 'info' ); ?>
			</div>
			<div class="line-btn text-center">
				<a href="" class="btn btn-default btn-lg text-uppercase">Give us your feedback</a>
			</div>
			<div class="copyright text-center">
				<div class="container">
				Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <?php bloginfo('description'); ?>. All rights reserved.
				</div>
			</div>
		</footer><!-- #colophon -->
		
	</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>