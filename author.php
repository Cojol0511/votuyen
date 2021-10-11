<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;

    $user_id    = get_current_user_id();
    $current_user = wp_get_current_user();          
    $author_hia = get_user_by( 'slug', get_query_var( 'author_name' ) );
    $author_id = $author_hia->ID;


?>

<?php get_footer(); ?>