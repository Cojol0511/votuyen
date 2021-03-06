<?php get_header(); ?>
<main id="page-product-list">
  <section class="banner-product">
    <div class="banner-text">
      <h1 class="text-title yellow-co">製品情報</h1>
      <h2 class="text-sub-title blue-co">高品質＋低コスト＋迅速での開発</h2>
    </div>
  </section>

  <section class="main">
    <div class="container">
      <div class="row gx-4">
        <div class="col-12">
          <h1 class="w-100 d-none d-lg-block text-title">用途／対応製品:</h1>
          <button type="button" data-bs-toggle="modal" data-bs-target="#Modal" class="w-100 button-title d-lg-none">
            <h1 class="text-title">用途／対応製品</h1><i class="fad fa-angle-double-right text-title"></i>
          </button>
        </div>
        <div class="d-none d-lg-block col-lg-4">
          <ul class="side-bar-product">
            <li>
              <span class="text-sub-title">特定小電力送信機</span>
            </li>
            <li>
              <span class="text-sub-title"> 特定小電力受信機</span>
            </li>
            <li>
              <span class="text-sub-title"> 特定小電力トランシーバー</span>
            </li>
            <li>
              <span class="text-sub-title"> LoRaモジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> Sigfoxモジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> 無線モジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> 有線から無線に変換</span>
            </li>
            <li>
              <span class="text-sub-title"> 産業リモコン</span>
            </li>
            <li>
              <span class="text-sub-title"> 無線リモコン</span>
            </li>
            <li>
              <span class="text-sub-title"> 緊急通報システム</span>
            </li>
            <li>
              <span class="text-sub-title"> リモートモニタリングシステム</span>
            </li>
            <li>
              <span class="text-sub-title"> センサーネットワーク</span>
            </li>
            <li>
              <span class="text-sub-title"> ISMバンド</span>
            </li>
            <li>
              <span class="text-sub-title"> 315MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 426MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 429MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 920MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 2.4GHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 遠隔監視システム</span>
            </li>
            <li>
              <span class="text-sub-title"> 遠隔制御システム</span>
            </li>
            <li>
              <span class="text-sub-title"> カスタマイズ対応</span>
            </li>
            <li>
              <span class="text-sub-title"> 特殊用途対応</span>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="row g-2 g-lg-4">
            <div class="col-6">
              <a href="<?php echo get_home_url(); ?>/remote-control/">
                <div class="product">
                  <img class="product-img"
                    src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-1.png" alt="">
                  <div class="product-name">無線リモコン</div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a href="<?php echo get_home_url(); ?>/transceiver/">
                <div class="product">
                  <img class="product-img"
                    src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-2.png" alt="">
                  <div class="product-name">トランシーバー</div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a href="<?php echo get_home_url(); ?>/wireless-system/">
                <div class="product">
                  <img class="product-img"
                    src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-3.png" alt="">
                  <div class="product-name">ワイヤレスシステム</div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a href="<?php echo get_home_url(); ?>/smart-gate/">
                <div class="product">
                  <img class="product-img"
                    src="<?php bloginfo('template_url'); ?>/assets/images/page-product/product-4.png" alt="">
                  <div class="product-name">スマートゲート</div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part( "template-parts/footer_top" ,"product", array(
        'background-color'   => '#f5f5f5',
    )); ?>

  <!-- Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-lg-down">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title text-title">用途／対応製品:</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="side-bar-product">
            <li>
              <span class="text-sub-title">特定小電力送信機</span>
            </li>
            <li>
              <span class="text-sub-title"> 特定小電力受信機</span>
            </li>
            <li>
              <span class="text-sub-title"> 特定小電力トランシーバー</span>
            </li>
            <li>
              <span class="text-sub-title"> LoRaモジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> Sigfoxモジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> 無線モジュール</span>
            </li>
            <li>
              <span class="text-sub-title"> 有線から無線に変換</span>
            </li>
            <li>
              <span class="text-sub-title"> 産業リモコン</span>
            </li>
            <li>
              <span class="text-sub-title"> 無線リモコン</span>
            </li>
            <li>
              <span class="text-sub-title"> 緊急通報システム</span>
            </li>
            <li>
              <span class="text-sub-title"> リモートモニタリングシステム</span>
            </li>
            <li>
              <span class="text-sub-title"> センサーネットワーク</span>
            </li>
            <li>
              <span class="text-sub-title"> ISMバンド</span>
            </li>
            <li>
              <span class="text-sub-title"> 315MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 426MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 429MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 920MHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 2.4GHz</span>
            </li>
            <li>
              <span class="text-sub-title"> 遠隔監視システム</span>
            </li>
            <li>
              <span class="text-sub-title"> 遠隔制御システム</span>
            </li>
            <li>
              <span class="text-sub-title"> カスタマイズ対応</span>
            </li>
            <li>
              <span class="text-sub-title"> 特殊用途対応</span>
            </li>
          </ul>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>