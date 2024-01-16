<?php
/*
Plugin Name: Products
Plugin URI: https://www.genetechsolutions.com/
Description: Add products here
Version: 1.0
Author: Sakina Zehra
*/

// To Prevent Direct Access To PHP Files
if (!defined('ABSPATH')) {
    exit();
}

// Adding action of fields
function create_products_cpt(){
    $labels = array(
        'name' => __('Products', 'Products'),
        'singular_name' => __('Products', 'Products'),
        'menu_name' => __('Products', 'Products'),
        'name_admin_bar' => __('Products', 'Products'),
        'attributes' => __('Products Attributes', 'Products'),
        'parent_item_colon' => __('Parent Products', 'Products'),
        'all_items' => __('All Products', 'Products'),
        'add_new_item' => __('Add New Products', 'Products'),
        'add_new' => __('Add New', 'Products'),
        'new_item' => __('New Products', 'Products'),
        'edit_item' => __('Edit Products', 'Products'),
        'update_item' => __('Update Products', 'Products'),
        'view_item' => __('View Products', 'Products'),
        'view_items' => __('View Products', 'Products'),
        'search_items' => __('Search Products', 'Products'),
        'not_found' => __('Not Found', 'Products'),
        'not_found_in_trash' => __('Not Found In Trash', 'Products'),
        'insert_into_item' => __('Insert Into Products', 'Products'),
        'uploaded_to_this_item' => __('Uploaded Into This Products', 'Products'),
        'items_list' => __('Products List', 'Products'),
        'items_list_navigation' => __('Products List Navigation', 'Products'),
        'filter_items_list' => __('Filter Products List', 'Products'),
    );

    $args = array(
        'label' => __('Products', 'Products'),
        'description' => __('List Of All Products', 'Products'),
        'labels' => $labels,
        'supports' => array('title', 'excerpt', 'revisions', 'category', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'products'),
    );

    register_post_type('products', $args);
}

add_action('init', 'create_products_cpt');

function create_products_hierarchical_taxonomy(){
    $labels = array(
        'name' => _x('Products Category', 'taxonomy general name'),
        'singular_name' => _x('Topic', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Categories'),
        'update_item' => __('Update Categories'),
        'add_new_item' => __('Add New Categories'),
        'new_item_name' => __('New Categories Name'),
        'menu_name' => __('Products Categories'),
    );

    register_taxonomy('products_catesegory', array('products'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'products-category'),
    ));
}

add_action('init', 'create_products_hierarchical_taxonomy');

// Creating Structural Short Code
function show_products($atts){
    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'ID',
        'order' => 'asc',
        'tax_query' => array(
            array(
                'taxonomy' => 'products_category',
                'field' => 'slug',
                'terms' => $atts['slug'],
            ),
        ),
    );

    $featured = new WP_Query($args);
    $html = '';

    $html .= '<div class="our_products-section">';

    if ($featured->have_posts()):
        while ($featured->have_posts()): $featured->the_post();

            $html .= '<div class="our_products_row">
                        <div class="our_products_col">
                            <div class="products_feature-img">
                                <img src="'.get_the_post_thumbnail_url(get_the_ID()).'">
                            </div>
                            <div class="our_products_content">
                                <h2>'.get_the_title().'</h2>
                                <p class="bio">'.get_the_content().'</p>
                            </div>
                        </div>
                    </div>';

        endwhile;
    endif;

    $html .= '</div>';

    wp_reset_query();
    return $html;
}

add_shortcode('show_products_shortcode', 'show_products');
