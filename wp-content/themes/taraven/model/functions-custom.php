<?php

// if ( function_exists( 'add_image_size' ) ) {
//   add_image_size('thumb-350x250', 350, 250, true);
// }

// add_filter('image_size_names_choose', 'my_image_sizes');
// function my_image_sizes($sizes) {
//   $addsizes = array(
//   "thumb-350x250" => __( "Middle Medium")
//   );
//   $newsizes = array_merge($sizes, $addsizes);
//   return $newsizes;
// }

/*
* Theme Custom Functions 
*/


/*
* Remove WPSEO getting images from POST
*/
// add_filter('wpseo_pre_analysis_post_content', 'mysite_opengraph_content');
//   function mysite_opengraph_content($val) {
//   return '';
// }

// Ajax REQUEST
// function getViews() {
//   $post_id = $_GET['post_id'];
//   if (!empty($post_id)) {
//     wpb_set_post_views($post_id);
//   }
// }
// add_action("wp_ajax_nopriv_getViews", "getViews");
// add_action("wp_ajax_getViews", "getViews");
