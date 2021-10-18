<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$sticky = get_option('sticky_posts');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'post__not_in' => $sticky, // get post sticky
    'paged' => $paged
);
$the_query = new WP_Query($args);
?>
<section class="banner-tech-info">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-tech-posts/Banner-tech-posts.jpg"
        class="w-100" alt="">
</section>
<section class="content-tech-info">
    <div class="container">
        <h1 class="fw-bold yellow-co text-center">
            技術情報
        </h1>
        <div class="row">
            <div class="col-lg-9 col-12">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="post-item border ">
                    <div class="d-flex">
                        <div class="wrapper">
                            <a href="<?php echo get_permalink() ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                        </div>
                        <div class="content">
                            <p class="title fw-bold"><a class="text-black"
                                    href="<?php echo get_permalink() ?>"><?php echo get_the_title(); ?></a></p>
                            <p class="short-desc"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
                            <p class="see-detail "><a href="<?php echo get_permalink() ?>"
                                    class="current-page text-black">もっと見る></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php prw_wp_corenavi($the_query, $paged); ?>
                <?php wp_reset_query(); ?>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>