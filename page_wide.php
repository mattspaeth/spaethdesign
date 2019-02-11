<?php
/**
 * Infinity Pro.
 *
 * This file adds the wide page template to the Infinity Pro Theme.
 *
 * Template Name: Wide Page
 *
 * @package Infinity
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/infinity/
 */

 // Add landing page body class to the head.
add_filter( 'body_class', 'infinity_add_body_class' );
function infinity_add_body_class( $classes ) {

	$classes[] = 'wide-page';

	return $classes;

}
// This file handles pages, but only exists for the sake of child theme forward compatibility.
genesis();
