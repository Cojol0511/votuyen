<?php get_header(); ?>
<section class="banner-news">
    <div class="banner-wrapper">
        <img src="assets/images/Banner-news.jpg" class="w-100" alt="">
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
            <form id="contactForm">
                <div class="form-group">
                    <label for="">件名</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="">会社名 </label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <div>
                        <label for="">お名前</label>
                        <span class="required-tag">必須</span>
                    </div>
                    <input type="text">
                </div>
                <div class="form-group">
                    <div> <label for="">ふりがな</label>
                        <span class="required-tag">必須</span>
                    </div>

                    <input type="text">
                </div>
                <div class="form-group">
                    <div>
                        <label for="">ご住所</label>
                        <span class="required-tag">必須</span>
                    </div>
                    <input type="text">
                </div>
                <div class="form-group">
                    <div>
                        <label for="">お電話番号</label>
                        <span class="required-tag">必須</span>
                    </div>
                    <input type="text">
                </div>
                <div class="form-group">
                    <div>
                        <label for="">メールアドレス</label>
                        <span class="required-tag">必須</span>
                    </div>
                    <input type="text">
                </div>
                <div class="form-group">
                    <div>
                        <label for="">お問い合わせ内容</label>
                        <span class="required-tag">必須</span>
                    </div>
                    <textarea>
                        </textarea>
                </div>
                <input type="submit" class="btn-cus d-block mx-auto" value="送信内容を確認する">
            </form>
            <div class="box-guide">
                <div class="head">
                    <p class="fw-bold text-white">メールが届かない方へ</p>
                </div>
                <div class="foot">
                    <p>お客様が迷惑メールなどの設定で、メールが正しく届かない場合がございます。</p>
                    <p>【@musenplus.com】からのメールを受信できるように設定お願い申し上げます。</p>
                </div>
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