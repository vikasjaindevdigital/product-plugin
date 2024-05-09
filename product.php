
<?php
/*
Plugin Name:  Product
Description: Add post types for custom products
Author: Hostinger Dev
*/
// Hook custom_post_custom_product() to the init action hook
add_action( 'init', 'custom_post_custom_product' );
// The custom function to register a custom product post type
function custom_post_custom_product() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Products' ),
        'singular_name'      => __( 'Product' ),
        'add_new'            => __( 'Add New Product' ),
        'add_new_item'       => __( 'Add New Product' ),
        'edit_item'          => __( 'Edit Product' ),
        'new_item'           => __( 'New Product' ),
        'all_items'          => __( 'All Products' ),
        'view_item'          => __( 'View Product' ),
        'search_items'       => __( 'Search Product' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our product post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );
    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('product', $args);
}
