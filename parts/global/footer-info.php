<div class="row">
	<div class="col-3">
			<h3 class="header-caps">Company</h3>
			<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Footer left nav', 
			'menu_class'  => 'list-unstyled',
			'fallback_cb' => false 
			) ); 
			?>
	</div>
	
	<div class="col-3">
		<h3 class="header-caps">Subscribe</h3>
		<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Footer right nav', 
			'menu_class'  => 'list-unstyled',
			'fallback_cb' => false 
			) ); 
		?>
	</div>
	
	<div class="col-6">
		<h3 class="header-caps">Partners</h3>
	</div>
	
</div>