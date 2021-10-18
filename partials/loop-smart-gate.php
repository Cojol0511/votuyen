<?php get_header(); ?>
<main id="page-transceiver" class="page-detail-product">
  <section class="banner-product">
    <div class="banner-text">
      <h1 class="text-title yellow-co">製品情報</h1>
      <h2 class="text-sub-title purple-co">太陽光電源使用</h2>
      <h2 class="text-sub-title blue-co">スマートチェーンゲート</h2>
    </div>
  </section>

  <!-- Part 1 -->
  <section class="product">
    <div class="description">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1 class="text-title mt-4 mt-md-4">スマートチェーンゲート</h1>
            <div class="menu mb-4 mb-md-4">
              <ul>
                <li class="w-100">
                  <h2 class="text-menu">型番: EcoCG01</h2>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <img class="product-img"
              src="<?php bloginfo('template_url'); ?>/assets/images/page-product/smart-gate-part1.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
    <div class="text">
      <div class="container">
        <h2 class="text-sub-title">特徴</h2>
        <ul class="feature-list">
          <li><span>1. 車に乗ったままにリモコンを取り出し、開閉操作をなく、スマートに完全自動開閉可
              <i class="fas fa-arrow-alt-right"></i>
              <span class="blue-co">スマート</span>
            </span></li>
          <li><span>2. 省エネのDC電池、太陽光パネルを使用、商用電源の電気工事不要
              <i class="fas fa-arrow-alt-right"></i>
              <span class="green-co"> ECO</span>
            </span></li>
          <li><span>3. 小型化によって小型モーターを使用、さらに安全性を向上
              <i class="fas fa-arrow-alt-right"></i>
              <span class="purple-co">コンパクト</span>
            </span></li>
        </ul>
      </div>
    </div>
    <div class="text">
      <div class="container">
        <h2 class="text-sub-title">用途／対応製品</h2>
        <ul class="feature-list">
          <li><span>1. ホームゲート</span></li>
          <li><span>2. カーゲート</span></li>
          <li><span>3. チェーンゲート</span></li>
          <li><span>4. パークキーパー</span></li>
          <li><span>5. 駐車場自動ゲートシステム</span></li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part( "template-parts/footer_top" ,"product", array(
        'background-color'   => '#f5f5f5',
    )); ?>

</main>
<?php get_footer(); ?>