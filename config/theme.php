<?php
// ===
// Do not edit anything in this file unless you know what you're doing
// ===

// Setup ACMX Theme
add_action('after_setup_theme', function() {

    // Soil
    // @link https://roots.io/plugins/soil/
    add_theme_support('soil', [
        'clean-up',
        'disable-asset-versioning',
        'disable-trackbacks',
        'js-to-footer',
        'nav-walker',
        'nice-search',
        'disable_emojis',
        'disable_extra_rss',
        'disable_recent_comments_css',
        'clean_html5_markup',
        // 'disable-rest-api',
        // 'google-analytics' => 'UA-XXXXX-Y',
        // 'relative-urls',
    ]);

    // Theme HTML5
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['caption', 'search-form']);

    // Editor
    add_editor_style(  _styles.'-wp-editor.css' );

    // Menu
    register_nav_menus([
        'Main Menu'     => __( 'Menu Navigation', 'acmx-keystone' ),
        'Header Menu'   => __( 'Header Navigation', 'acmx-keystone' ),
        'Footer Menu'   => __( 'Footer Navigation', 'acmx-keystone' ),
        'Mobile Menu'   => __( 'Mobile Navigation', 'acmx-keystone' )
    ]);

});

// Content Width
if ( ! isset( $content_width ) ) {
    $content_width = 1280;
}

// Register Sidebar
function custom_sidebar() {

}
add_action( 'widgets_init', 'custom_sidebar' );