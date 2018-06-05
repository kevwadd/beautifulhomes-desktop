<div class="card text-center">
	<?php if (is_category()) { ?>
	<h1 class="header"><span><?php single_cat_title() ; ?></span></h1>
	<?php } else { ?>
	<h1 class="header"><span>Blog</span></h1>
	<?php } ?>
	<h2>Sorry</h2>
	<p>There will be new posts coming soon</p>
</div>