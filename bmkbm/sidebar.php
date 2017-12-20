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

		if(is_page('about') || is_page('holiday-2017')){
		$services_post = get_page_by_path( 'services', OBJECT, 'page' );
		$about_serv_args = array( //get siblings
			'separator'           => '',
			'style'               => 'list',
			'title_li'            => '',
			'use_desc_for_title'  => 1,
			'depth'							  => 1,
		  'child_of' => $services_post->ID,
		);
		?>

		<div class="sidebar--section">
		  <h5><?php echo get_the_title($services_post); ?></h5>
		  <div class="links-container">
		    <?php wp_list_pages($about_serv_args); ?>
		  </div>
		</div>

		<?php
		}

		if($post->post_parent ){ //has a parent
			include('sections/sidebar-sibling-pages.php');
		}
		include('sections/sidebar-form.php');

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
