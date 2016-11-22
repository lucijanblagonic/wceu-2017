<?php
/*
Plugin Name: WCEU 2017 CSS + Style guide
Plugin URI: https://github.com/lucijanblagonic/wceu-2017
Description: CSS + Style guide for the WordCamp Europe 2017 theme
Version: 1.0
Author: Scott Evans
Author URI: http://scott.ee
Text Domain: wceu-2017
Domain Path: /languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

define( 'WCEU_2017_CSS_URL', plugins_url( '/build/assets/stylesheets', __FILE__ ) );

/**
 * Enqueue the compiled stylesheet
 *
 * @return void
 */
function wceu_2017_css_setup() {
	wp_enqueue_style( 'wceu-2017', WCEU_2017_CSS_URL . '/style.css', array(), '1.2', 'screen' );
	wp_dequeue_style( 'style' ); // remove base CSS from theme
}
add_action( 'wp_enqueue_scripts', 'wceu_2017_css_setup', 100);


/**
 * Add typekit kit
 */
function wceu_2017_fontkit() {
	?>
	<script src="https://use.typekit.net/amr6iww.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php
}
add_action( 'wp_head', 'wceu_2017_fontkit' );