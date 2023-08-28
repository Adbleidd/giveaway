<?php
function load_scripts()
{
    wp_enqueue_script(
        'main',
        CDK_THEME_URL . 'assets/js/script.js',
        array(),
        time()
    );
}
add_action('wp_enqueue_scripts', 'load_scripts');
