<?php get_header(); ?>

<?php get_template_part( 'parts/blog/post', 'banner' ); ?>

<?php get_template_part( 'parts/blog/post', 'breadcrumbs' ); ?>

<?php get_template_part( 'parts/blog/post', 'content' ); ?>

<?php get_template_part( 'parts/blog/post', 'sign-up' ); ?>

<?php get_template_part( 'parts/blog/post', 'related' ); ?>

<?php if ( comments_open() || get_comments_number() ) { ?>
<?php comments_template();  ?>		
<?php } ?>


<?php get_footer(); ?>