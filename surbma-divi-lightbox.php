<?php

/*
Plugin Name: Surbma - Divi Lightbox
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adds Divi's native lightbox effect to images.

Version: 1.0.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-lightbox
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

add_action( 'wp_footer', 'surbma_divi_lightbox_js_function' );
function surbma_divi_lightbox_js_function() {
	?><script type="text/javascript">(function($){$(document).ready(function(){$('.entry-content a').children('img').parent('a').addClass(function(){var _href = $(this).attr("href").substr($(this).attr("href").length-5,$(this).attr("href").length);var _class = "";if(_href.includes('.jpg') || _href.includes('.jpeg') || _href.includes('.png') || _href.includes('.gif')){_class="et_pb_lightbox_image";}return _class;});});})(jQuery)</script><?php
}
