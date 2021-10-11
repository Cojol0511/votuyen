<?php get_header(); ?>
<main id="page-product-list">
  <?php get_template_part( "template-parts/banner" ,"product"); ?>

  <section class="product-list">
    <div class="container">
      <div class="row">
        <h1 class="text-title">用途／対応製品：</h1>

        <div class="col-4">
          <div class="side-bar-product">
            <ul>
              <li>
                <h2 class="text-sub-title">特定小電力送信機</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 特定小電力受信機</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 特定小電力トランシーバー</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> LoRaモジュール</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> Sigfoxモジュール</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 無線モジュール</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 有線から無線に変換</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 産業リモコン</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 無線リモコン</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 緊急通報システム</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> リモートモニタリングシステム</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> センサーネットワーク</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> ISMバンド</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 315MHz</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 426MHz</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 429MHz</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 920MHz</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 2.4GHz</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 遠隔監視システム</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 遠隔制御システム</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> カスタマイズ対応</h2>
              </li>
              <li>
                <h2 class="text-sub-title"> 特殊用途対応</h2>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-8">
          <div class="row g-4">
            <div class="col-6">
              <div class="product">
                <img class="product-img"
                  src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-1.png" alt="">
                <div class="product-name">無線リモコン</div>
              </div>
            </div>
            <div class="col-6">
              <div class="product">
                <img class="product-img"
                  src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-2.png" alt="">
                <div class="product-name">トランシーバー</div>
              </div>
            </div>
            <div class="col-6">
              <div class="product">
                <img class="product-img"
                  src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-3.png" alt="">
                <div class="product-name">ワイヤレスシステム</div>
              </div>
            </div>
            <div class="col-6">
              <div class="product">
                <img class="product-img"
                  src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-4.png" alt="">
                <div class="product-name">スマートゲート</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( "template-parts/footer_top" ,"product"); ?>

</main>
<?php get_footer(); ?>