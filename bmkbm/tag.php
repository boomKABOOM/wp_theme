<?php get_header(); ?>
<main role="main">
<div class="wrapper w-main">
	<hr/>
	<div class="container">
		<div class="modules-container">
            <div class="onethird sticky-container">
                <div class="sticky">
                    <a href="/contact" class="blocklink">Contact Us for a 30 Minute Free Consultation &raquo;</a>
                </div>
            </div>
            <div class="twothirds">
            	<h2>
					<?php _e( 'Projects Containing: ', 'html5blank' ); ?>
					<strong><?php echo single_tag_title('', false); ?></strong>
                </h2>
                <?php get_template_part('loop'); ?>
            </div>
        
		</div>
        <?php get_template_part('pagination'); ?>
    </div>
</div>
</main>
<?php get_footer(); ?>
