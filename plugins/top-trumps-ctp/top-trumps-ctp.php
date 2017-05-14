<?php
/**
 * Plugin Name: Top Trumps Custom Post Types
 * Description: A simple plugin that adds Top Trumps custom post types.
 * Version: 0.1.20170514
 * Author: Eugene Molari
 * Author URI:  https://github.com/eugelogic
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
"Top Trumps Custom Post Types" plugin is free software: you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or any later version.

"Top Trumps Custom Post Types" plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with "Top Trumps Custom Post Types" plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Register a top trump post type.

function top_trumps() {
  $labels = array(
    'name'               => _x( 'Cards', 'post type general name', 'top-trumps-ctp' ),
    'singular_name'      => _x( 'Card', 'post type singular name', 'top-trumps-ctp' ),
    'menu_name'          => _x( 'Cards', 'admin menu', 'top-trumps-ctp' ),
    'name_admin_bar'     => _x( 'Card', 'add new on admin bar', 'top-trumps-ctp' ),
    'add_new'            => _x( 'Add New', 'card', 'top-trumps-ctp' ),
    'add_new_item'       => __( 'Add New Card', 'top-trumps-ctp' ),
    'new_item'           => __( 'New Card', 'top-trumps-ctp' ),
    'edit_item'          => __( 'Edit Card', 'top-trumps-ctp' ),
    'view_item'          => __( 'View Card', 'top-trumps-ctp' ),
    'all_items'          => __( 'All Cards', 'top-trumps-ctp' ),
    'search_items'       => __( 'Search Cards', 'top-trumps-ctp' ),
    'parent_item_colon'  => __( 'Parent Cards:', 'top-trumps-ctp' ),
    'not_found'          => __( 'No cards found.', 'top-trumps-ctp' ),
    'not_found_in_trash' => __( 'No cards found in Trash.', 'top-trumps-ctp' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'top-trumps-ctp' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_position' 	   => 5,
    'menu_icon'		 	     => 'dashicons-screenoptions',
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'cards' ),
    'capability_type'    => 'page',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'thumbnail', 'page-attributes' )
  );

  register_post_type( 'cards', $args );

}

add_action( 'init', 'top_trumps' );

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    my_cpt_init();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    top_trumps();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
