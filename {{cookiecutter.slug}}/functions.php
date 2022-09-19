<?php
/**
 * Theme functions and definitions
 *
 * @package {{cookiecutter.package}}
 */

/**
 * Load child theme css and optional scripts
 */
function {{cookiecutter.prefix}}_enqueue_scripts() {
	wp_enqueue_style( '{{cookiecutter.slug}}-style', get_stylesheet_directory_uri() . '/style.css', array( 'hello-elementor-theme-style' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', '{{cookiecutter.prefix}}_enqueue_scripts' );

/**
 * Elementor make widget with classes "clickable" or "fullclick" fully linked.
 * Widget trigger first link inside on user click.
 */
function {{cookiecutter.prefix}}_elementor_widget_full_link() {
	if ( did_action( 'elementor/loaded' ) && ! \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
		$class = '.clickable,.fullclick';

		echo "<style>$class{cursor:pointer;}</style>";
		echo "<script>jQuery(function($){var c='$class',d=document,e='click',f=function(){\$(d).off(e,c,f);($('a[href]',this)[0]||d.body).click();$(d).on(e,c,f)};$(d).on(e,c,f)})</script>";
	}
}
add_action( 'wp_footer', '{{cookiecutter.prefix}}_elementor_widget_full_link', 100 );

/**
 * Allow HTML in term (category, tag) descriptions
 */
remove_filter( 'pre_term_description', 'wp_filter_kses' );
if ( ! current_user_can( 'unfiltered_html' ) ) {
    add_filter( 'pre_term_description', 'wp_filter_post_kses' );
}
remove_filter( 'term_description', 'wp_kses_data' );
