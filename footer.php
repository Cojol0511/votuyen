<a href="#">
    <div id="bottom_to_top">
        <i class="fas fa-arrow-up text-white"></i>
    </div>
</a>
<div id="footer">
    <div class="container d-flex flex-lg-row flex-column-reverse justify-content-between">
        <div class="fLeft">
            <div class="d-flex">
                <a href="<?php echo home_url(); ?>/">
                    <img style="width: 32px;height: 32px;"
                        src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="" class="logo me-2">
                </a>
                <h2 class="company-name fw-bold m-0">無線プラス株式会社</h2>
            </div>
            <p class="address">〒555-0024　大阪府大阪市西淀川区野里 1-21-3</p>
            <p class="tel text-black fw-bold">TEL. <span class="red-co fw-bold">070-9003-3177</span></p>
            <p class="email">Eメール: musenplus@gmail.com</p>
        </div>
        <div class="fRight d-flex align-items-center ">
            <ul class="fNav d-flex justify-content-lg-between">
                <li><a data-navurl="home" class=" red-co red-co-hv " href="<?php echo home_url(); ?>/">ホーム</a></li>
                <li><a data-navurl="product-list" class="yellow-co yellow-co-hv"
                        href="<?php echo home_url(); ?>/product-list">製品情報</a></li>
                <li><a data-navurl="application" class="purple-co purple-co-hv"
                        href="<?php echo home_url(); ?>/application">用途事例</a></li>
                <li><a data-navurl="company" class="green-co green-co-hv"
                        href="<?php echo home_url(); ?>/company">会社概要</a></li>
                <li><a data-navurl="contact" class="blue-co blue-co-hv"
                        href="<?php echo home_url(); ?>/contact">問い合わせ</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
<?php
  global $post;
  $post_slug = $post->post_name;
  ?>
var current_slug = '<?php echo $post_slug; ?>'
</script>
<?php wp_footer(); ?>
</div>
<a href="javascript:;" id="goTop" class="bd-circle t-center"></a>
</body>

</html>