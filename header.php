<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
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
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php do_action( 'wp_after_body_open' ); ?>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="w-100 float-left">
        <header id="header" class="w-100 float-left">
            <div class="header-top">
                <div class="container d-lg-flex justify-content-between">
                    <div class="owner-avt">
                        <img src="<?php bloginfo('template_url')?>/assets/images/owner-avt.png" alt="">
                    </div>
                    <?php  ?>
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('html_logo_header'); ?>" alt="">
                        </a>                        
                    </div>
                    <div class="right-top">
                        <ul class="list-unstyled d-flex">
                            <li><?php echo do_shortcode('[gtranslate]'); ?></li>
                            <li>
                                <?php if ( is_user_logged_in() ) { ?>
                                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="account-link account-login" title="<?php _e('My account', 'woocommerce'); ?>">                                    
                                    <img src="<?php bloginfo('template_url')?>/assets/images/ic-user.png">
                                </a>
                                <?php } else { ?>
                                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="nav-top-link nav-top-not-logged-in">
                                    <img src="<?php bloginfo('template_url')?>/assets/images/ic-user.png">
                                </a>
                                <?php } ?>
                                <?php if ( is_user_logged_in() ) { ?>
                                <ul class="nav-dropdown">
                                    <?php wc_get_template('myaccount/account-links.php'); ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php _e('Cart', 'woocommerce'); ?>">
                                    <span class="position-relative" data-icon-label="<?php echo WC()->cart->cart_contents_count; ?>">
                                        <img src="<?php bloginfo('template_url')?>/assets/images/ic-cart.png">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /header-top -->
            <div class="header-main <?php if(get_theme_mod('wp_sticky_header')) { echo 'sticky-header';}?>">
                <div class="container">                 
                    <?php
                        $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'primary-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                            'depth'           => 0,
                        );
                    if ( has_nav_menu( 'primary' ) ) {
                      wp_nav_menu( $primarymenu );
                    }
                    ?>                  
                </div>
            </div>

            <div class="mobile-main">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="mobile-btn">
                        <a href="javascript:;"><img src="<?php bloginfo('template_url')?>/assets/images/btn-mobile.svg" alt=""></a>         
                    </div>
                    <div class="mobile-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('html_mobile_logo'); ?>" alt="">
                        </a>
                    </div>
                    <div class="mobile-right">
                        <ul class="list-unstyled d-flex mb-0">
                            <li><?php echo do_shortcode('[gtranslate]'); ?></li>
                            <li>
                                <a href="#"><img src="<?php bloginfo('template_url')?>/assets/images/ic-user.png" alt=""></a>
                            </li>
                            <li><a href="#"><img src="<?php bloginfo('template_url')?>/assets/images/ic-cart.png" alt=""></a></li>
                        </ul>
                    </div>                  
                </div>
                <div id="mobile-menu" class="menu-hidden">
                    <?php
                        $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'primary-menu',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'walker'          => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                            'depth'           => 0,
                        );
                    if ( has_nav_menu( 'primary' ) ) {
                      wp_nav_menu( $primarymenu );
                    }
                    ?> 
                </div>
            </div>
        </header><!-- /header -->
        
    

