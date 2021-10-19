<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Page Title ================================================== -->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_after_body_open'); ?>
    <?php wp_body_open(); ?>
    <div id="header" class="bg-white" style="margin-top:<?php echo is_user_logged_in() ? '31px' : '' ?>">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="hLeft">
                    <div class="d-flex">
                        <a href="<?php echo home_url(); ?>/">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt=""
                                class="logo me-2 ms-auto ms-md-0 ">
                        </a>
                        <p class="text-center fw-bold comp-name mb-0">無線プラス株式会社</p>
                    </div>
                    <h1 class="comp-tel fw-bold"><a href="tel:07090033177">Tel.<span class=" red-co mb-0">
                                070-9003-3177</span></a>
                    </h1>

                </div>
                <div class="hRight d-flex align-items-center">
                    <div class="h-mb d-xxl-none my-auto">
                        <i class="fas fa-bars mb-menu"></i>
                    </div>
                    <ul class="nav d-xxl-flex d-none justify-content-between w-100">
                        <li><a data-navurl="home" class="red-co red-co-hv" href="<?php echo home_url(); ?>/">ホーム</a>
                        </li>
                        <li><a data-navurl="product-list" class="yellow-co yellow-co-hv"
                                href="<?php echo home_url(); ?>/product-list">製品情報</a></li>
                        <li><a data-navurl="application" class="purple-co purple-co-hv"
                                href="<?php echo home_url(); ?>/application">用途事例</a></li>
                        <li><a data-navurl="company" class="green-co green-co-hv"
                                href="<?php echo home_url(); ?>/company">会社概要</a>
                        </li>
                        <li><a data-navurl="contact" class="blue-co blue-co-hv"
                                href="<?php echo home_url(); ?>/contact">問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="mb-menu">
        <ul class="nav d-block w-100">
            <li><a data-navurl="home" class="red-co red-co-hv" href="<?php echo home_url(); ?>/">ホーム</a>
            </li>
            <li><a data-navurl="product-list" class="yellow-co yellow-co-hv"
                    href="<?php echo home_url(); ?>/product-list">製品情報</a></li>
            <li><a data-navurl="application" class="purple-co purple-co-hv"
                    href="<?php echo home_url(); ?>/application">用途事例</a></li>
            <li><a data-navurl="company" class="green-co green-co-hv" href="<?php echo home_url(); ?>/company">会社概要</a>
            </li>
            <li><a data-navurl="contact" class="blue-co blue-co-hv" href="<?php echo home_url(); ?>/contact">問い合わせ</a>
            </li>
        </ul>
    </div>