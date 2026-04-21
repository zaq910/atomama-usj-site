<?php

if (!defined('ABSPATH')) {
    exit;
}

function atomama_mobile_first_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    register_nav_menus([
        'global_menu' => 'グローバルメニュー',
        'footer_menu' => 'フッターメニュー',
    ]);
}
add_action('after_setup_theme', 'atomama_mobile_first_setup');

function atomama_mobile_first_assets(): void
{
    wp_enqueue_style('atomama-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'atomama_mobile_first_assets');

function atomama_mobile_first_customize(
    WP_Customize_Manager $wp_customize
): void {
    $wp_customize->add_section('atomama_cta_section', [
        'title' => 'トップCTA設定',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('atomama_priority_cta_url', [
        'default' => '/yoyakunori-kouryaku/',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('atomama_priority_cta_url', [
        'label' => '最重要CTA URL（よやくのり攻略）',
        'section' => 'atomama_cta_section',
        'type' => 'url',
    ]);
}
add_action('customize_register', 'atomama_mobile_first_customize');
