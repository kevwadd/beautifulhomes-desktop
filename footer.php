		<?php get_template_part( 'parts/sections/the', 'magazines' ); ?>
		
		<?php  
		$rate_my_rooms_pg = get_page_by_path('rate-my-rooms');	
		$contact_us_pg = get_page_by_path('contact-us');	
		if ($post->ID != $rate_my_rooms_pg->ID) {	
		?>
		<?php get_template_part( 'parts/global/rate', 'myroom' ); ?>
		<?php } ?>
		</main><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
			<?php //get_template_part( 'parts/global/instagram', 'imgs' ); ?>
			<?php get_template_part( 'parts/global/footer', 'info' ); ?>
			</div>
			<div class="line-btn text-center">
				<div class="container">
					<div class="row">
						<div class="col-8 offset-2">
							<a href="<?php echo get_permalink($contact_us_pg->ID); ?>" class="text-uppercase">Give us your feedback</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-btm">
				<div class="container">
					<div class="row">
						<div class="col-6 copyright">
						Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <?php bloginfo('description'); ?>. All rights reserved.
						</div>
						<div class="col-6">
						<?php wp_nav_menu(array( 
							'container' => 'false', 
							'menu' => 'Footer bottom nav', 
							'menu_class'  => 'list-inline pull-right',
							'fallback_cb' => false 
							) ); 
						?>	
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
		
	</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>