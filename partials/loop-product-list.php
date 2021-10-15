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
          <h1 class="w-100 d-none d-md-block text-title">用途／対応製品</h1>
          <button type="button" data-bs-toggle="modal" data-bs-target="#Modal" class="w-100 button-title d-md-none">
            <h1 class="text-title">用途／対応製品</h1><i class="fad fa-angle-double-right text-title"></i>
          </button>
        </div>
        <div class="d-none d-md-block col-md-4">
          <ul class="side-bar-product">
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
        <div class="col-md-8">
          <div class="row g-2 g-md-4">
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

  <!-- Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="side-bar-product">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>