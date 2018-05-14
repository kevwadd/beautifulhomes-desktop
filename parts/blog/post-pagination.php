<?php if ( have_posts() ) : ?>
<div class="post-filters">
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			
			<div class="col-6 pagination-links">
				<?php wp_pagenavi(); ?>
			</div>
			
			<div class="col-3"></div>
		</div>
	</div>
</div>
<?php endif; ?>