<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MYF
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="main-header" role="banner">

		<?php get_template_part( 'components/header/site', 'branding' ); ?>

		<?php //myf_the_custom_logo(); ?>

		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

		<?php //myf_social_menu(); ?>

	</header>
	<main>

