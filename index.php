<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section class="banner-home">
  <div data-carousel-items="1" data-loop="true" data-margin="0" class="owl-carousel banner-wrapper">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/Banner.jpg" alt="">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/Banner.jpg" alt="">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/Banner.jpg" alt="">
  </div>
</section>
<section class="map-product">
  <div class="map-product-wrapper">
    <div class="container position-relative h-100">
      <div class="content fw-bold content-short yellow-co rounded bg-white">
        製品情報
      </div>
      <div class="content content-medium blue-co rounded bg-white">
        SLR920xxは、都内で10km以上制御可
      </div>
      <div class="content content-long blue-co rounded bg-white">
        SLRxx、EcoTx、EcoRx、EcoMod用の多くのRFコアの開発に成功し、容易にカスタマイズ可
      </div>
    </div>
  </div>
</section>
<section class="cate-products position-relative">
  <div class="container">
    <div class="cate-slider d-flex flex-md-row flex-column-reverse justify-content-lg-between">
      <div class="title fit-content mt-3 mt-md-auto fw-bold ">
        <a href="#" class="yellow-co yellow-co-hv current-page">製品リスト</a>
      </div>
      <div data-margin="25" data-carousel-items="4" data-tablet="3" data-mobile="1" data-dots="false" data-loop="true"
        class="cate-tags owl-carousel d-flex justify-content-end">
        <div class="cate-item border rounded d-flex flex-column">
          <a href="#">
            <img class="rounded" src="<?php bloginfo('template_directory'); ?>/assets/images/cate1.jpg" alt="cate1_img">
            <p class="text-center py-3 fw-bold blue-co">無線リモコン</p>
          </a>
        </div>
        <div class="cate-item border rounded d-flex flex-column">
          <a href="#">
            <img class="rounded" src="<?php bloginfo('template_directory'); ?>/assets/images/cate2.jpg" alt="cate2_img">
            <p class="text-center py-3 fw-bold green-co">トランシーバー</p>
          </a>
        </div>
        <div class="cate-item border rounded d-flex flex-column">
          <a href="#">
            <img class="rounded" src="<?php bloginfo('template_directory'); ?>/assets/images/cate3.jpg" alt="cate3_img">
            <p class="text-center py-3 fw-bold red-co">ワイヤレスシステム</p>
          </a>
        </div>
        <div class="cate-item border rounded d-flex flex-column">
          <a href="#">
            <img class="rounded" src="<?php bloginfo('template_directory'); ?>/assets/images/cate4.jpg" alt="cate4_img">
            <p class="text-center py-3 fw-bold purple-co">スマートゲート</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="application">
  <div class="container">
    <h1 class="purple-co fw-bold text-center">用途事例</h1>
    <div class="list-examples row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <div class="col">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/udung1.jpg" alt="">
        <p class="name blue-co">
          無線リモコン
        </p>
      </div>
      <div class="col">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/udung2.jpg" alt="">
        <p class="name red-co">
          トランシーバー
        </p>
      </div>
      <div class="col">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/udung3.jpg" alt="">
        <p class="name green-co">
          ワイヤレスシステム
        </p>
      </div>
    </div>
    <p class="see-more text-center">
      <a class="purple-co purple-co-hv current-page" href="#">ワイヤレスシステム</a>
    </p>
  </div>
</section>
<section class="profile-company">
  <div class="profile-company-wrapper container text-center">
    <h1 class="green-co">会社概要</h1>
    <h2>私たちは無線通信システムの総合メーカーです。</h2>
    <h1 class="green-co">社是</h1>
    <h2>人々の生活を楽にし、すべてのものとすべての人をより
      繋ぐようにしたい心。</h2>
    <h1 class="green-co">経営理念</h1>
    <h2>常に謙虚に、みんなのために尽すこと。
      お客様の事業、全社員の福利、社会の発展に貢献すること。
    </h2>
    <p class="detail">
      <a class="green-co green-co-hv current-page" href="<?php echo home_url(); ?>/company">会社概要の詳細</a>
    </p>
  </div>
</section>
<a href="<?php echo home_url(); ?> /news">
  <section class="noti-company">
    <div class="container">
      <h1 class="text-white fw-bold">
        新着情報
        令和3年11月11日 ホームページを公開
      </h1>
    </div>
  </section>
</a>
<section class="tech-info">
  <div class="container">
    <h1 class="yellow-co fw-bold text-center">技術情報</h1>
    <ul class="tech-info-list">
      <li>特定小電力トランシーバー周波数／特小周波数／特小無線／特定小電力</li>
      <li>LoRaモジュール</li>
      <li>有線無線変換（有線から無線)</li>
      <li>遠隔監視システム</li>
      <li>ISM バンド</li>
      <li>遠隔制御システム</li>
      <li>センサネットワーク</li>
      <li>産業リモコン</li>
      <li>無線モジュール</li>
      <li>無線リモコン</li>
    </ul>
  </div>
</section>
<!--main-content-->
<?php get_footer(); ?>