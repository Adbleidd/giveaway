<?php

add_theme_support('align-wide');

add_action('admin_head', 'admin_styles');
function admin_styles()
{
    echo '<style>
    .wp-block {max-width: 1280px;}
    .wp-block[data-align="wide"] {max-width: 1280px;}
    </style>';
}

// Only admin can upload SVGs
add_filter(
    'upload_mimes',
    function ($upload_mimes) {
        if (!current_user_can('administrator')) {
            return $upload_mimes;
        }
        $upload_mimes['svg']  = 'image/svg+xml';
        $upload_mimes['svgz'] = 'image/svg+xml';
        return $upload_mimes;
    }
);

// SVG files support
add_filter(
    'wp_check_filetype_and_ext',
    function ($wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime) {
        if (!$wp_check_filetype_and_ext['type']) {
            $check_filetype  = wp_check_filetype($filename, $mimes);
            $ext             = $check_filetype['ext'];
            $type            = $check_filetype['type'];
            $proper_filename = $filename;
            if ($type && 0 === strpos($type, 'image/') && 'svg' !== $ext) {
                $ext  = false;
                $type = false;
            }
            $wp_check_filetype_and_ext = compact('ext', 'type', 'proper_filename');
        }
        return $wp_check_filetype_and_ext;
    },
    10,
    5
);
