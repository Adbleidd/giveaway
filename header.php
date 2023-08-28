<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?= CDK_THEME_URL . 'assets/img/favicon.ico'; ?>">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header class="header">
			<div class="container">
				<img src="<?= CDK_THEME_URL . 'assets/img/logo.svg'; ?>" alt="SentiOne" class="header__logo">
			</div>
		</header>