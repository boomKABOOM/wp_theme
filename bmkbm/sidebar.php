<?php

$themeRoot = "/wp-content/themes/bmkbm/";

// LOGIC OUTLINE
//
// blog
// 	featured_articles
// 	categories_list
// 	subscribe_form
//
// category
// 	featured_articles of category
// 	categories_list
// 	subscribe_form
//
// article
// 	quicklinks
// 	featured_articles of category
// 	categories_list
// 	subscribe_form
//
// page
// 	quicklinks
// 	related_content
// 	child_items
// 	sibling_items
// 	appt_form
// 	contact_info
//
// ------------------
// var list
// 	quicklinks
// 	related_content
// 	child_items
// 	sibling_items
// 	featured_articles
// 	neighbor_articles
// 	categories_list
// 	appt_form
// 	subscribe_form
// 	contact_info

?>

<aside role="complementary">

	<?php if(is_page()){ ?>
		<div id="quicklinks" class="full-only"></div>
		<?php include('sections/sidebar-related-content.php'); ?>
		<?php
		$child_args = array(
			'separator'           => '',
			'style'               => 'list',
			'title_li'            => '',
			'use_desc_for_title'  => 1,
			'depth'							  => 1,
			'child_of' => $post->ID
		);
		if(count(get_pages($child_args)) > 0){ //is a parent
			include('sections/sidebar-child-pages.php');
		}
		if($post->post_parent ){ //has a parent
			include('sections/sidebar-sibling-pages.php');
		}
		include('sections/sidebar-form.php');
		include('sections/sidebar-contact-info.php');

	}?>

	<?php if(is_single()){ ?>
		<div id="quicklinks" class="full-only"></div>
		<?php include('sections/sidebar-neighbor-articles.php'); ?>
		<?php include('sections/sidebar-categories.php'); ?>
		<?php include('sections/sidebar-subscribe-form.php'); ?>
	<?php } ?>

	<?php if(is_category()){ ?>
		<?php include('sections/sidebar-categories.php'); ?>
		<?php include('sections/sidebar-subscribe-form.php'); ?>
	<?php } ?>

	<?php if(is_home()){ ?>
		<?php include('sections/sidebar-categories.php'); ?>
		<?php include('sections/sidebar-subscribe-form.php'); ?>
	<?php } ?>


<script>
$(document).ready(function() {
	var quicklink_count = $('article h2').length;
	if(quicklink_count > 3){
		$('#quicklinks').addClass('sidebar--section');
		$('#quicklinks').prepend('<h5>Jump To</h5><div class="links-container">');
		$('#quicklinks').append('</div>');
	}

	$('article h2').each(function(index){
		$('#quicklinks .links-container').append('<li><a href="#' + $(this).text().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase() + '">' + $(this).text() + '</a></li>');
		$(this).attr('id',$(this).text().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase());
	});

	$('.sidebar--section:has(.links-container)').each(function(i, el){
		if(i === 0){
			$(this).append('<div class="show-hide">-</div>');
		} else {
			$(this).append('<div class="show-hide">+</div>');
			$(this).find('.links-container').slideUp(1500);
		}
	});

	$('.show-hide').click(function(){
		$('.show-hide').each(function(){
			$(this).html('+');
			$(this).show();
			$(this).parents('.sidebar--section').find('.links-container').slideUp();
		});
		if($(this).html() == '+'){
			$(this).html('-');
			$(this).hide();
			$(this).parents('.sidebar--section').find('.links-container').slideDown();
		}
		else{
			$(this).html('+');
			$(this).show();
			$(this).parents('.sidebar--section').find('.links-container').slideUp();
		}
	});

	if(getUrlParameter('anchor')){
		$('html, body').animate({
			scrollTop: $('#' + getUrlParameter('anchor')).offset().top - 60
		}, 500);
		console.log('scroll to ' + getUrlParameter('anchor'));
	}

});
</script>
</aside>
