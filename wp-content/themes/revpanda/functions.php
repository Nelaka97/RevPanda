<?php
//Enqueue Tailwind CSS output file
function revpanda_enqueue_styles() {
    wp_enqueue_style(
        'revpanda-tailwind-output',
        get_template_directory_uri() . '/src/output.css',
        [],
        filemtime(get_template_directory() . '/src/output.css')
    );
}
add_action('wp_enqueue_scripts', 'revpanda_enqueue_styles');

// Enable featured images for RevPanda Theme
add_theme_support('post-thumbnails', ['post', 'page', 'listing']);


