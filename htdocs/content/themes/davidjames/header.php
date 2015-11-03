<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- stylesheets -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php bloginfo(template_url); ?>/css/font-awesome.css" rel="stylesheet">
	<link href="<?php bloginfo(template_url); ?>/style.css" rel="stylesheet" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
