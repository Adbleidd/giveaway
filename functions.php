<?php

if (!defined('CDK_THEME_DIR')) {
	define('CDK_THEME_DIR', get_theme_root() . '/' . get_template() . '/');
}
if (!defined('CDK_THEME_URL')) {
	define('CDK_THEME_URL', WP_CONTENT_URL . '/themes/' . get_template() . '/');
}

add_theme_support('post-thumbnails');

require_once CDK_THEME_DIR . 'inc/styles.php';
require_once CDK_THEME_DIR . 'inc/scripts.php';
require_once CDK_THEME_DIR . 'inc/extras.php';
