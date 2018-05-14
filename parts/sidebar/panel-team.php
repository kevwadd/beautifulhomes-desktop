<?php
$team_img_id = get_field('team_img', 'options');
$team_img = wp_get_attachment_image_src($team_img_id, 'medium'); 
//echo '<pre>';print_r($team_img);echo '</pre>';
$team_biogs = get_field('team_biogs', 'options');	
?>

<aside class="panel">
	<h3>Meet the team</h3>
	<img src="<?php echo $team_img[0]; ?>" class="img-fluid" style="margin-bottom: 20px;">
	<?php foreach ($team_biogs as $biog) { ?>
	<h4><?php echo $biog['name']; ?></h4>
	<h5><?php echo $biog['role']; ?></h5>
	<p><?php echo $biog['biog']; ?></p>
	<?php } ?>
</aside>
