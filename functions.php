<?php
/*
 * Change Hemma Custom Post Types names [Example]
 * Activate the child theme, create a new file called functions.php and put some code as below in.
 * Rember that you may need to resave permalinks to fix 404 issues 
 */

/*
 * Check if "Hemma Custom Post Types" plugin is active
 */
if( class_exists( 'Hemma_Custom_Post_Types' ) ) {

   function hemma_change_post_types_name( $args, $post_type ) {
      
      /*
       * Change "Room/Rooms" to "Villa/Villas" 
       */
      if ( 'room' === $post_type ) {
         $args['rewrite']['slug'] = 'villa';
         $args['singular_label'] = __( 'Villa', 'hemma' );
         $args['labels']['name'] = _x( 'Villas', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Villa', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Villas', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Villa', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Villa', 'hemma' );
         $args['labels']['new_item'] = __( 'New Villa', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Villa', 'hemma' );
         $args['labels']['view_item'] = __( 'View Villa', 'hemma' );
         $args['labels']['all_items'] = __( 'All Villas', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Villas', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Villas:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Villas Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Villas Found in Trash', 'hemma' );
      }

      /*
       * Change "Event/Events" to "Activity/Activities"
       */  
      if ( 'event' === $post_type ) {
         $args['rewrite']['slug'] = 'activity';
         $args['singular_label'] = __( 'Activity', 'hemma' );
         $args['labels']['name'] = _x( 'Activities', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Activity', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Activities', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Activity', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Activity', 'hemma' );
         $args['labels']['new_item'] = __( 'New Activity', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Activity', 'hemma' );
         $args['labels']['view_item'] = __( 'View Activity', 'hemma' );
         $args['labels']['all_items'] = __( 'All Activities', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Activities', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Activities:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Activities Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Activities Found in Trash', 'hemma' );
      }

      /*
       * Change "Food/Foods" to "Drink/Drinks"
       */  
      if ( 'food' === $post_type ) {
         $args['rewrite']['slug'] = 'drink';
         $args['singular_label'] = __( 'Drink', 'hemma' );
         $args['labels']['name'] = _x( 'Drinks', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Drink', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Drinks', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Drink', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Drink', 'hemma' );
         $args['labels']['new_item'] = __( 'New Drink', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Drink', 'hemma' );
         $args['labels']['view_item'] = __( 'View Drink', 'hemma' );
         $args['labels']['all_items'] = __( 'All Drinks', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Drinks', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Drinks:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Drinks Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Drinks Found in Trash', 'hemma' );
      }

      /*
       * Change "Deal/Deals" to "Offer/Offers"
       */  
      if ( 'deal' === $post_type ) {
         $args['rewrite']['slug'] = 'offer';
         $args['singular_label'] = __( 'Offer', 'hemma' );
         $args['labels']['name'] = _x( 'Offers', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Offer', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Offers', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Offer', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Offer', 'hemma' );
         $args['labels']['new_item'] = __( 'New Offer', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Offer', 'hemma' );
         $args['labels']['view_item'] = __( 'View Offer', 'hemma' );
         $args['labels']['all_items'] = __( 'All Offers', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Offers', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Offers:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Offers Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Offers Found in Trash', 'hemma' );
      }

      return $args;
   }
   add_filter( 'register_post_type_args', 'hemma_change_post_types_name', 10, 2 );

   /*
    * Change Hemma Custom Post Types -> Taxonomy name [Example]
    * Activate the child theme, create a new file called functions.php and put some code as below in. 
    * Rember that you may need to update each post and resave permalinks to fix 404 issues 
    */ 
   function change_taxonomies_name( $args, $taxonomy ) {
      
      /*
       * Change "Room/Rooms" to "Villa/Villas"
       */ 
      if ( 'roomcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'villa-category';
         $args['label'] = __( 'Villa Category', 'hemma' );
         $args['labels']['name'] = _x( 'Villa Categories', 'taxonomy general name', 'hemma' );
      }

      /*
       * Change "Event/Events" to "Activity/Activities"
       */ 
      if ( 'eventcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'activity-category';
         $args['label'] = __( 'Activity Category', 'hemma' );
         $args['labels']['name'] = _x( 'Activity Categories', 'taxonomy general name', 'hemma' );
      }

      /*
       * Change "Food/Foods" to "Drink/Drinks"
       */ 
      if ( 'foodcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'drink-category';
         $args['label'] = __( 'Drink Category', 'hemma' );
         $args['labels']['name'] = _x( 'Drink Categories', 'taxonomy general name', 'hemma' );
      }

      /*
       * Change "Deal/Deals" to "Offer/Offers"
       */ 
      if ( 'dealcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'offer-category';
         $args['label'] = __( 'Offer Category', 'hemma' );
         $args['labels']['name'] = _x( 'Offer Categories', 'taxonomy general name', 'hemma' );
      }
      
      return $args;
<?php
/*
 * Change Hemma Custom Post Types names [Example]
 * Activate the child theme, create a new file called functions.php and put some code as below in.
 * Rember that you may need to resave permalinks to fix 404 issues 
 */

/*
 * Check if "Hemma Custom Post Types" plugin is active
 */
if( class_exists( 'Hemma_Custom_Post_Types' ) ) {

function hemma_change_post_types_name( $args, $post_type ) {
   
   /*
    * Change "Room/Rooms" to "Villa/Villas" 
    */
   if ( 'room' === $post_type ) {
      $args['rewrite']['slug'] = 'villa';
      $args['singular_label'] = __( 'Villa', 'hemma' );
      $args['labels']['name'] = _x( 'Villas', 'post type general name', 'hemma' );
      $args['labels']['singular_name'] = _x( 'Villa', 'post type singular name', 'hemma' );
      $args['labels']['menu_name'] = _x( 'Villas', 'admin menu', 'hemma' );
      $args['labels']['name_admin_bar'] = _x( 'Villa', 'add new on admin bar', 'hemma-custom-post-types' );
      $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
      $args['labels']['add_new_item'] = __( 'Add New Villa', 'hemma' );
      $args['labels']['new_item'] = __( 'New Villa', 'hemma' );
      $args['labels']['edit_item'] = __( 'Edit Villa', 'hemma' );
      $args['labels']['view_item'] = __( 'View Villa', 'hemma' );
      $args['labels']['all_items'] = __( 'All Villas', 'hemma' );
      $args['labels']['search_items'] = __( 'Search Villas', 'hemma' );
      $args['labels']['parent_item_colon'] = __( 'Parent Villas:', 'hemma' );
      $args['labels']['not_found'] = __( 'No Villas Found', 'hemma' );
      $args['labels']['not_found_in_trash'] = __( 'No Villas Found in Trash', 'hemma' );
   }

      /*
       * Change "Event/Events" to "Activity/Activities"
       */  
      if ( 'event' === $post_type ) {
         $args['rewrite']['slug'] = 'activity';
         $args['singular_label'] = __( 'Activity', 'hemma' );
         $args['labels']['name'] = _x( 'Activities', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Activity', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Activities', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Activity', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Activity', 'hemma' );
         $args['labels']['new_item'] = __( 'New Activity', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Activity', 'hemma' );
         $args['labels']['view_item'] = __( 'View Activity', 'hemma' );
         $args['labels']['all_items'] = __( 'All Activities', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Activities', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Activities:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Activities Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Activities Found in Trash', 'hemma' );
      }

      /*
       * Change "Food/Foods" to "Drink/Drinks"
       */  
      if ( 'food' === $post_type ) {
         $args['rewrite']['slug'] = 'drink';
         $args['singular_label'] = __( 'Drink', 'hemma' );
         $args['labels']['name'] = _x( 'Drinks', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Drink', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Drinks', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Drink', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Drink', 'hemma' );
         $args['labels']['new_item'] = __( 'New Drink', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Drink', 'hemma' );
         $args['labels']['view_item'] = __( 'View Drink', 'hemma' );
         $args['labels']['all_items'] = __( 'All Drinks', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Drinks', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Drinks:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Drinks Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Drinks Found in Trash', 'hemma' );
      }

      /*
       * Change "Deal/Deals" to "Offer/Offers"
       */  
      if ( 'deal' === $post_type ) {
         $args['rewrite']['slug'] = 'offer';
         $args['singular_label'] = __( 'Offer', 'hemma' );
         $args['labels']['name'] = _x( 'Offers', 'post type general name', 'hemma' );
         $args['labels']['singular_name'] = _x( 'Offer', 'post type singular name', 'hemma' );
         $args['labels']['menu_name'] = _x( 'Offers', 'admin menu', 'hemma' );
         $args['labels']['name_admin_bar'] = _x( 'Offer', 'add new on admin bar', 'hemma-custom-post-types' );
         $args['labels']['add_new'] = _x( 'Add New', 'deal', 'hemma' );
         $args['labels']['add_new_item'] = __( 'Add New Offer', 'hemma' );
         $args['labels']['new_item'] = __( 'New Offer', 'hemma' );
         $args['labels']['edit_item'] = __( 'Edit Offer', 'hemma' );
         $args['labels']['view_item'] = __( 'View Offer', 'hemma' );
         $args['labels']['all_items'] = __( 'All Offers', 'hemma' );
         $args['labels']['search_items'] = __( 'Search Offers', 'hemma' );
         $args['labels']['parent_item_colon'] = __( 'Parent Offers:', 'hemma' );
         $args['labels']['not_found'] = __( 'No Offers Found', 'hemma' );
         $args['labels']['not_found_in_trash'] = __( 'No Offers Found in Trash', 'hemma' );
      }

      return $args;
   }
   add_filter( 'register_post_type_args', 'hemma_change_post_types_name', 10, 2 );

   /*
    * Change Hemma Custom Post Types -> Taxonomy name [Example]
    * Activate the child theme, create a new file called functions.php and put some code as below in. 
    * Rember that you may need to update each post and resave permalinks to fix 404 issues 
    */ 
function hemma_change_taxonomies_name( $args, $taxonomy ) {
   
   /*
    * Change "Room/Rooms" to "Villa/Villas"
    */ 
   if ( 'roomcategory' === $taxonomy ) {
      $args['rewrite']['slug'] = 'villa-category';
      $args['label'] = __( 'Villa Category', 'hemma' );
      $args['labels']['name'] = _x( 'Villa Categories', 'taxonomy general name', 'hemma' );
   }

      /*
       * Change "Event/Events" to "Activity/Activities"
       */ 
      if ( 'eventcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'activity-category';
         $args['label'] = __( 'Activity Category', 'hemma' );
         $args['labels']['name'] = _x( 'Activity Categories', 'taxonomy general name', 'hemma' );
      }

      /*
       * Change "Food/Foods" to "Drink/Drinks"
       */ 
      if ( 'foodcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'drink-category';
         $args['label'] = __( 'Drink Category', 'hemma' );
         $args['labels']['name'] = _x( 'Drink Categories', 'taxonomy general name', 'hemma' );
      }

      /*
       * Change "Deal/Deals" to "Offer/Offers"
       */ 
      if ( 'dealcategory' === $taxonomy ) {
         $args['rewrite']['slug'] = 'offer-category';
         $args['label'] = __( 'Offer Category', 'hemma' );
         $args['labels']['name'] = _x( 'Offer Categories', 'taxonomy general name', 'hemma' );
      }
      
   return $args;
}
add_filter( 'register_taxonomy_args', 'hemma_change_taxonomies_name', 10, 2 );   


function hemma_update_text_strings( $translated_text, $text, $domain ) {
   switch ( $translated_text ) {

      /*
       * Replace strings containing "room" with strings containing "villa"
       */ 
      case 'Select the room category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any room category yet.' :
         $translated_text = __( 'Select the villa category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any villa category yet.', 'hemma' );
      break;
      case 'Filter Rooms' :
         $translated_text = __( 'Filter Villas', 'hemma' );
      break;

      /*
       * Replace strings containing "event" with strings containing "activity"
       */ 
      case 'Select the event category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any event category yet.' :
         $translated_text = __( 'Select the activity category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any activity category yet.', 'hemma' );
      break;
      case 'Filter Events' :
         $translated_text = __( 'Filter Activities', 'hemma' );
      break;

      /*
       * Replace strings containing "food" with strings containing "drink"
       */ 
      case 'Select the food category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any food category yet.' :
         $translated_text = __( 'Select the drink category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any drink category yet.', 'hemma' );
      break;
      case 'Filter Foods' :
         $translated_text = __( 'Filter Drinks', 'hemma' );
      break;

      /*
       * Replace strings containing "deal" with strings containing "offer"
       */ 
      case 'Select the deal category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any deal category yet.' :
         $translated_text = __( 'Select the offer category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any offer category yet.', 'hemma' );
      break;
      case 'Filter Deal' :
         $translated_text = __( 'Filter Offers', 'hemma' );
      break;

   }

   return $translated_text;
}
add_filter( 'gettext', 'hemma_update_text_strings', 20, 3 ); 
}
