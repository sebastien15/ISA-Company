<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agroteck
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>



<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="keywords" content=" Agrotek | Agriculture, Dairy farm and Gardening HTML Template,  Agritek - Agriculture, Dairy farm and Gardening WordPress Theme, unlimited colors available, ui/ux, ui/ux design, best html template, html template, html, woocommerce, shopify, prestashop, eCommerce, JavaScript, best CSS theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, Preyan Technosys Pvt.Ltd, cymol themes, themetech mount, Web 3.0, multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme, services, web design and development, agriculture, agro tourism, dairy farm, ecology, farm services, farmer, farming, food producers, gardening, milk, multi business, organic farming, organic food, agriculture life, farming life, agricultural business, agro culture worldwide, agronomy farming simulator, agriculture world">
	<meta name="description" content="Agrotek – Agriculture HTML Template" />
	<meta name="author" content="https://www.themetechmount.com/" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Agrotek – Agriculture HTML Template</title>

	<!-- favicon icon -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.png" />

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" />

	<!-- animate -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/animate.css" />

	<!-- slick-slider -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/slick.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/slick-theme.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/font-awesome.css" />

	<!-- themify -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/themify-icons.css" />

	<!-- flaticon -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/flaticon.css" />


	<!-- REVOLUTION LAYERS STYLES -->

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/revolution/css/rs6.css">

	<!-- prettyphoto -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/prettyPhoto.css">

	<!-- shortcodes -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/shortcodes.css" />

	<!-- main -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/main.css" />

	<!-- responsive -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/responsive.css" />
	
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/contact-form.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>