<?php
$sticky = get_option('sticky_posts');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'rand',
    'post__in' => $sticky, // get post sticky
    'ignore_sticky_posts' => 1

);
$the_query = new WP_Query($args);
?>

<div class="col-xl-3 col-12 mt-5 mt-lg-0 ">
    <div class="tech-info-sidebar border">
        <p class="sb-title fw-bold">
            最も人気のある
        </p>
        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="post-item-recomend">
            <div class="wrapper">
                <a class="text-black" href="<?php echo get_permalink() ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
            </div>
            <p class="title">
                <a class="text-black" href="<?php echo get_permalink() ?>">
                    <?php echo get_the_title(); ?>
                </a>
            </p>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>