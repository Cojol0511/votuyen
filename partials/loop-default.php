<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="break-crumb w-100 float-left">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div>
<div class="page-content w-100 float-left mt-5 mb-3">
    <div class="container">
        <?php 
            while (have_posts()) : the_post();
            the_content();
            endwhile;
        ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>