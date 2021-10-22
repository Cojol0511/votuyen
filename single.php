<?php
get_header();
?>
<div class="page-content w-100 float-left">
    <section class="section-blog py-4">
        <div class="container">
            <div class="row">
                <div class="ar-left col-12 col-xl-9">
                    <h1><?php echo get_the_title(); ?></h1>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p>
                        <?php echo get_the_content(); ?>
                    </p>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>