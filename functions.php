<?php
define('THEME_DIR', get_template_directory_uri());

add_action('after_setup_theme', 'red_shop_theme_setup');
function red_shop_theme_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'منوی اصلی',
        'secondary' => 'منوی ثانویه',
    ));
}

add_action('widgets_init', 'red_shop_widgets_init');
function red_shop_widgets_init() {
    register_sidebar(array(
        'name'          => 'سایدبار',
        'id'            => 'sidebar-1',
        'description'   => 'ابزارک‌های نمایش داده‌شده در سایدبار',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'فوتر',
        'id'            => 'footer-1',
        'description'   => 'ابزارک‌های نمایش داده‌شده در فوتر',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
