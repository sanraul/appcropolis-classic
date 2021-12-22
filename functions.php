<?php



/**
 * Prevent /login from redirecting to /public/wp-admin/wp-login.php
 */
add_action('init', function () {
    remove_action('template_redirect', 'wp_redirect_admin_locations', 1000);
});



if ( function_exists( 'add_theme_support') ) {
    add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'normal', 600, 9999, false );
	// add_image_size( 'image-small', 32, 9999, false );
}

function get_post_categories($post_id, $what=null) {
    $post_categories = wp_get_post_categories( $post_id );
    $names = array();
    $slugs = array();
    $cats = array();
        
    foreach($post_categories as $c){
        $cat = get_category( $c );
        $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
        $names[] = $cat->name;
        $slugs[] = $cat->slug;
    }

    if($what == 'name') {
        return implode(', ', $names);

    } else if($what == 'slug') {
        return implode(' ', $slugs);

    } else {
        return $cats;
    }

}


function get_all_categories($what=null) {
    $categories = get_categories( 
        array(
        'orderby' => 'name',
        'order'   => 'ASC'
        ) 
    );
    
    $names = array();
    $slugs = array();
    $cats = array();

    foreach($categories as $c){
        $cat = get_category( $c );
        $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
        $names[] = $cat->name;
        $slugs[] = $cat->slug;
    }

    if($what == 'name') {
        return implode(', ', $names);

    } else if($what == 'slug') {
        return implode(' ', $slugs);

    } else {
        return $cats;
    }

}