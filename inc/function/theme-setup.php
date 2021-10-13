<?php
function wph_setup()
{

    /* add title tag support */
    add_theme_support('title-tag');

    /* Add default posts and comments RSS feed links to head */
    add_theme_support('automatic-feed-links');

    /* Add excerpt to pages */
    add_post_type_support('page', 'excerpt');

    /* Add support for post thumbnails */
    add_theme_support('post-thumbnails');

    /* Add support for Selective Widget refresh */
    add_theme_support('customize-selective-refresh-widgets');

    /** Add sensei support */
    add_theme_support('sensei');

    /** Add woocommerce support */
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    /* Add support for HTML5 */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'widgets',
    ));

    /*  Register menus. */
    register_nav_menus(array(
        'primary'        => __('Main Menu', '' . Theme_Name . ''),
        'footer'         => __('Footer Menu', '' . Theme_Name . ''),
    ));

    /*  Enable support for Post Formats */
    add_theme_support('post-formats', array('video'));
    /*  Add images Size */
    // add_image_size("img_800_386", 800,386, true);
    // add_image_size("img_325_183", 325,183, true);
    // add_image_size("img_676_508", 676,508, true);
}

add_action('after_setup_theme', 'wph_setup');


/**
 * Setup Theme Widgets
 */
function wph_widgets_init()
{


    register_sidebar(array(
        'name'          => __('News Sidebar', '' . Theme_Name . ''),
        'id'            => 'news-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Shop Sidebar', '' . Theme_Name . ''),
        'id'            => 'shop-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));


    register_sidebar(array(
        'name'          => __('Footer 1', '' . Theme_Name . ''),
        'id'            => 'sidebar-footer-1',
        'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));


    register_sidebar(array(
        'name'          => __('Footer 2', '' . Theme_Name . ''),
        'id'            => 'sidebar-footer-2',
        'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'wph_widgets_init');
/**
 * Setup Theme Styles and Scripts
 */
function wph_scripts()
{
    $uri     = get_template_directory_uri();
    wp_enqueue_style( 'bootstrap-css', $uri . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), false, 'all');    
    wp_enqueue_style('carousel-css', $uri . '/assets/lib/owlcarousel/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('default-carousel-css', $uri . '/assets/lib/owlcarousel/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome', $uri . '/assets/lib/fontawesome/all.min.css', array(), false, 'all');
    wp_enqueue_style( 'main-css', $uri . '/assets/css/style.css?v='.time(), array(), false, 'all' );

    /*js*/
    wp_enqueue_script('jqr-js', $uri . '/assets/js/jquery-3.6.0.min.js', array());
    wp_enqueue_script( 'boostrap-js', $uri.'/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script('owlcarousel-js', $uri . '/assets/lib/owlcarousel/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'main-js', $uri.'/assets/js/main.js', array( 'jquery' ), false, true );

}
add_action('wp_enqueue_scripts', 'wph_scripts', 100);

/**
 * Remove jQuery migrate.
 *
 * @param WPh_Scripts $scripts WPh_Scripts object.
 */
function wph_remove_jquery_migrate($scripts)
{
    if (!get_theme_mod('jquery_migrate')) return;
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) { // Check whether the script has any dependencies.
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate',
            ));
        }
    }
}

add_action('wph_default_scripts', 'wph_remove_jquery_migrate');

// Disable emoji scripts
if (!is_admin() && get_theme_mod('disable_emoji', 0)) {
    remove_action('wph_head', 'print_emoji_detection_script', 7);
    remove_action('wph_print_styles', 'print_emoji_styles');
}

function wph_deregister_block_styles()
{
    if (!is_admin() && get_theme_mod('disable_blockcss', 0)) {
        wph_dequeue_style('wp-block-library');
    }
}
add_action('wph_print_styles', 'wph_deregister_block_styles', 100);