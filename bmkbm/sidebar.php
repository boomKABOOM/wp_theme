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

</aside>
