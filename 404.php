<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="break-title w-100 float-left bg-white">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div>
<div id="<?php echo $post->post_name; ?>" class="page-content loop-default-page w-100 float-left mt32 mb-5 pb-5">
    <div class="container text-center">
        <h2>404</h2> The page you are looking for no longer exists. Perhaps you can return back to the sites homepage see you can find what you are looking for.
    </div>
</div>
<?php get_footer(); ?>