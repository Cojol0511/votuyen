<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Page Title 
    ================================================== -->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_after_body_open'); ?>
    <?php wp_body_open(); ?>
    <div id="header" class="bg-white" style="box-shadow: 1px 0px 6px 0px #00000061;">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="hLeft">
                    <div class="d-flex">
                        <div class="h-mb d-lg-none me-2 my-auto ">
                            <i class="fas fa-bars fs-3"></i>
                        </div>
                        <a href="<?php echo home_url(); ?>/">
                            <img style="width: 42px;height: 42px;"
                                src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt=""
                                class="logo me-0 me-lg-2 ms-auto ms-md-0 ">
                        </a>
                        <p class="text-center comp-name d-lg-block d-none mb-0">無線プラス株式会社</p>
                    </div>
                    <h1 class="d-lg-block d-none fw-bold">Tel.<span class="comp-tel red-co mb-0">
                            070-9003-3177</span>
                    </h1>

                </div>
                <div class="hRight d-flex align-items-center">
                    <ul class="nav d-md-flex d-none justify-content-between w-100">
                        <li><a data-navurl="home" class="red-co red-co-hv" href="<?php echo home_url(); ?>/">ホーム</a>
                        </li>
                        <li><a data-navurl="product" class="yellow-co yellow-co-hv" href="#">製品情報</a></li>
                        <li><a data-navurl="application" class="purple-co purple-co-hv" href="#">用途事例</a></li>
                        <li><a data-navurl="company" class="green-co green-co-hv"
                                href="<?php echo home_url(); ?>/company">会社概要</a></li>
                        <li><a data-navurl="contact" class="blue-co blue-co-hv"
                                href="<?php echo home_url(); ?>/contact">問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>