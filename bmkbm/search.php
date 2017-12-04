<?php get_header(); ?>
<div class="container">
	<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
</div>
<?php get_template_part('loop'); ?>
<?php get_footer(); ?>