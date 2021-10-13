<?php get_header(); ?>
<section class="banner-contact">
    <div class="banner-wrapper">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Banner-contact.jpg" class="w-100" alt="">
    </div>
</section>
<section class="contact-desc">
    <div class="contact-title text-center fw-bold">
        <div class="container">
            <h1 class="blue-co">
                お問い合わせ
            </h1>
            <p class="blue-co ">Tel: 070-9003-3177</p>
        </div>
    </div>
    <div class="contact-detail">
        <div class="container text-center">
            <p class="para1 fw-bold">製品のお問い合わせについて</p>
            <p class="para2 fw-bold">技術コンサルタント・製品の用途・通信距離などについてご質問などがございましたらお電話・メール、または下記お問い合わせフォームにてお問い合わせください。</p>
            <div class="box-tel border d-flex justify-content-between">
                <div class="box-tel-left d-flex align-items-center">
                    <p>Tel: 070-9003-3177</p>
                </div>
                <div class="box-tel-right">
                    <p>＜メールでのお問い合わせ＞</p>
                    <p>「ご用件：お客様の要望、概要」</p>
                    <p>Eメール: musenplus@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form">
    <div class="container">
        <div class="contact-form-desc text-center fw-bold">
            <p>お問い合わせフォーム</p>
            <p>お問い合わせ内容を入力して、確認ボタンを押してください（確認画面へ進みます）</p>
        </div>
        <div class="form-place">
            <div id="contactForm">
                <?php echo do_shortcode('[contact-form-7 id="15" title="Form liên hệ 1"]');  ?>
            </div>
        </div>
        <ul class="recomend-cate d-flex justify-content-between">
            <li class="fw-bold"><a class="blue-co blue-co-hv current-page" href="#">無線リモコン</a></li>
            <li class="fw-bold"><a class="green-co green-co-hv current-page" href="#">トランシーバー </a></li>
            <li class="fw-bold"><a class="red-co red-co-hv current-page" href="#">ワイヤレスシステム</a></li>
            <li class="fw-bold"><a class="purple-co purple-co-hv current-page" href="#">スマートゲート</a></li>
        </ul>
    </div>
</section>
<?php get_footer(); ?>