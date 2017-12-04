<?php
//providers have special access. check to see if these posts are for their eyes only

$restricted_slugs = ['providers-portal'];

$category = get_the_category();
$cat_slug = $category[0]->slug;
$cat_parent_id = $category[0]->category_parent;

if($cat_parent_id){ // restricted access to posts of certain categories
  $cat_parent_slug = get_category_parents($cat_parent_id, false, '', true, false);
  if($cat_parent_slug == 'providers-only'){
    if(is_user_logged_in()){
      get_template_part('loop');
    } else {
      include('sections/restricted-providers.php');
    }
  } else {
    get_template_part('loop');
  }
} else {
  get_template_part('loop');
}
?>
