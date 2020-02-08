<?php

/*
Plugin Name: Surbma | Divi Lightbox
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adds Divi's native lightbox effect to images.

Version: 2.1

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-divi-lightbox
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

function surbma_divi_lightbox_js_function() {
	$divi_page_builder_used = wp_basename( get_bloginfo( 'template_directory' ) ) == 'Divi' ? et_pb_is_pagebuilder_used( get_the_ID() ) : false;
	if( !$divi_page_builder_used ) { ?>
<script type="text/javascript">(function($){$(document).ready(function(){$('.entry-content a').children('img').parent('a').addClass(function(){return(($(this).attr("href").split("?",1)[0].match(/\.(jpeg|jpg|gif|png)$/) != null) ? "et_pb_lightbox_image" : "");});});})(jQuery)</script>
	<?php }
}
add_action( 'wp_footer', 'surbma_divi_lightbox_js_function' );
