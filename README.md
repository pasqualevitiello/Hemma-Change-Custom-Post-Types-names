How to change Custom Post Types names in Hemma WordPress theme
=========================

Well, you are here because you've purchased <a href="https://themeforest.net/item/hemma-a-wordpress-theme-for-holiday-houses/15924438" target="_blank">Hemma WordPress theme</a> but you don't have "Rooms" to showcase but "Villas". Or you may want to change the "Event" Custom Post Type to "Activity, etc.

Perfect, let's get started!

<h2>Install and activate the child theme</h2>
This is a very important step because your changes will remain untouched during the theme updates, and you will not have to go through this lengthy process again.

<h2>Create a functions.php inside the child theme's directory</h2>
There you can add your custom code. Now, let's say you want to rename <strong>rooms</strong> to <strong>villas</strong>.

First thing to do is check that "Hemma Custom Post Types" plugin is active:
```php
if( class_exists( 'Hemma_Custom_Post_Types' ) ) {
```

Change "Room/Rooms" to "Villa/Villas" in CPTs
```php
function hemma_change_post_types_name( $args, $post_type ) {
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
   return $args;
}
add_filter( 'register_post_type_args', 'hemma_change_post_types_name', 10, 2 );
```

Change "Room/Rooms" to "Villa/Villas" taxonomy names
```php
function hemma_change_taxonomies_name( $args, $taxonomy ) {
   if ( 'roomcategory' === $taxonomy ) {
      $args['rewrite']['slug'] = 'villa-category';
      $args['label'] = __( 'Villa Category', 'hemma' );
      $args['labels']['name'] = _x( 'Villa Categories', 'taxonomy general name', 'hemma' );
   }
   return $args;
}
add_filter( 'register_taxonomy_args', 'hemma_change_taxonomies_name', 10, 2 );
```

You can optionally update some text strings in the backend as well:
```php
function hemma_update_text_strings( $translated_text, $text, $domain ) {
   switch ( $translated_text ) {
   
      case 'Select the room category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any room category yet.' :
         $translated_text = __( 'Select the villa category you want to filter or leave "None". If you can\'t see any option in the list that\'s because you haven\'t any villa category yet.', 'hemma' );
      break;
      case 'Filter Rooms' :
         $translated_text = __( 'Filter Villas', 'hemma' );
      break;

   return $translated_text;
}
add_filter( 'gettext', 'hemma_update_text_strings', 20, 3 ); 
```

<h2>Final steps</h2>
Now that you've saved the functions.php file and uploaded it to your server, you may get some 404 issues. That basically happens beacuse you have not resaved Permalinks, so go to <i>Settings - Permalinks</i> and hit the <i>Save Changes</i> button. Then you need to update each room post using a custom taxonomy, so navigate to <i>Villas - [Your Posts] - Edit</i> and resave them clicking on the <i>Update</i> button. And that's it... Hope you're enjoying Hemma!

<h4><a href="functions.php">View sample code</a></h4>
