<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php
$sticky = get_option('sticky_posts');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'post__in' => $sticky,
    'paged' => $paged
);
$the_query = new WP_Query($args);
?>
<section class="banner-home">
    <div data-carousel-items="1" data-loop="true" data-autoplay="true" data-autotime="3000"
        class="owl-carousel banner-wrapper">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner.jpg" alt="">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner2.jpg" alt="">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/Banner3.jpg" alt="">
    </div>
</section>
<section class="map-product">
    <div class="map-product-wrapper">
        <div class="container position-relative h-100">
            <div class="content fw-bold content-short yellow-co bg-white">
                製品情報
            </div>
            <div class="content content-medium blue-co bg-white">
                <span class="fw-bold">SLR920xx</span>は、都内で <span class="fw-bold">10km</span>以上制御可
            </div>
            <div class="content content-long blue-co bg-white">
                <span class="fw-bold">SLRxx、EcoTx、EcoRx、EcoMod</span>用の多くの <span
                    class="fw-bold">RF</span>コアの開発に成功し、容易にカスタマイズ可
            </div>
        </div>
    </div>
</section>

<section class="cate-products position-relative">
    <div class="container">
        <div class="wrapper d-flex flex-lg-row flex-column-reverse justify-content-lg-between">
            <div class="title fit-content mt-3 mt-md-auto">
                <p class="detail">
                    <a href="<?php bloginfo('template_directory'); ?>/product-list"
                        class="yellow-co yellow-co-hv current-page">製品リスト</a>
                </p>
            </div>
            <div class="row row-cols-2 row-cols-lg-4 cate-tags">
                <div class="col">
                    <div class="cate-item imghover border d-flex flex-column">
                        <a href="<?php echo home_url(); ?>/remote-control">
                            <img class="imghover-op"
                                src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/cate1.jpg"
                                alt="cate1_img">
                            <p class="text-center py-3 fw-bold blue-co">無線リモコン</p>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="cate-item imghover border d-flex flex-column">
                        <a href="<?php echo home_url(); ?>/transceiver">
                            <img class="imghover-op"
                                src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/cate2.jpg"
                                alt="cate3_img">
                            <p class="text-center py-3 fw-bold green-co">トランシーバー</p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="cate-item imghover border d-flex flex-column">
                        <a href="<?php echo home_url(); ?>/wireless-system">
                            <img class="imghover-op"
                                src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/cate3.jpg"
                                alt="cate3_img">
                            <p class="text-center py-3 fw-bold red-co">ワイヤレスシステム</p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="cate-item imghover border d-flex flex-column">
                        <a href="<?php echo home_url(); ?>/smart-gate">
                            <img class="imghover-op"
                                src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/cate4.jpg"
                                alt="cate4_img">
                            <p class="text-center py-3 fw-bold purple-co">スマートゲート</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="application">
    <div class="container">
        <h1 class="purple-co fw-bold text-center">用途事例</h1>
        <div class="list-examples owl-carousel" data-mobile="1" data-tablet="2" data-carousel-items="3" data-loop="true"
            data-drag="false" data-center="true" data-dots="false" data-nav="true" data-margin="24">
            <div class="appl-item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/ungdung1.jpg" alt="">
                <p class="name blue-co">
                    無線リモコン
                </p>
            </div>
            <div class="appl-item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/ungdung2.jpg" alt="">
                <p class="name red-co">
                    トランシーバー
                </p>
            </div>
            <div class="appl-item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/page-home/ungdung3.jpg" alt="">
                <p class="name green-co">
                    ワイヤレスシステム
                </p>
            </div>
        </div>
        <p class="detail text-center">
            <a class="purple-co purple-co-hv current-page" href="<?php echo home_url(); ?>/application">用途事例の詳細</a>
        </p>
    </div>
</section>
<section class="profile-company">
    <div class="profile-company-wrapper container text-center">
        <h1 class="green-co">会社概要</h1>
        <h2>私たちは無線通信システムの総合メーカーです。</h2>
        <h1 class="green-co">社是</h1>
        <h2>人々の生活を楽にし、すべてのものとすべての人をより<br>
            繋ぐようにしたい心。</h2>
        <h1 class="green-co">経営理念</h1>
        <h2>常に謙虚に、みんなのために尽すこと。<br>
            お客様の事業、全社員の福利、社会の発展に貢献すること。
        </h2>
        <p class="detail">
            <a class="green-co green-co-hv current-page" href="<?php echo home_url(); ?>/company">会社概要の詳細</a>
        </p>
    </div>
</section>
<a href="<?php echo home_url(); ?>/news">
    <section class="noti-company">
        <div class="container">
            <h1 class="text-white fw-bold">
                新着情報
            </h1>
            <p>令和3年11月11日 ホームページを公開</p>
        </div>
    </section>
</a>
<section class="tech-info">
    <div class="container">
        <h1 class="text-center"><a class="yellow-co yellow-co-hv fw-bold"
                href="<?php echo home_url(); ?> /tech-posts">技術情報</a></h1>
        <ul class="tech-info-list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="" href="<?php echo get_permalink() ?>">
                <li class="text-truncate"><?php echo get_the_title(); ?></li>
            </a>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </ul>
        <p class="detail text-center">
            <a class="yellow-co yellow-co-hv current-page" href="<?php echo home_url(); ?>/tech-posts">会社概要の詳細</a>
        </p>
    </div>
</section>
<!--main-content-->
<?php get_footer(); ?>