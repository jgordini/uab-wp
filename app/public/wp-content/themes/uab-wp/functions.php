<?php
/**
 * This file adds functions to the uab-wp WordPress theme.
 *
 * @package uab-wp
 * @author  WP Engine
 * @license GNU General Public License v3
 * @link    https://uab-wpwp.com/
 */

if ( ! function_exists( 'uab_wp_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function uab_wp_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'uab-wp', get_template_directory() . '/languages' );

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'uab_wp_setup' );

// Enqueue stylesheet.
add_action( 'wp_enqueue_scripts', 'uab_wp_enqueue_stylesheet' );
function uab_wp_enqueue_stylesheet() {

	wp_enqueue_style( 'uab-wp', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function uab_wp_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => __( 'Reverse', 'uab-wp' ),
		),
		'core/group' => array(
			'shadow-light' => __( 'Shadow', 'uab-wp' ),
			'shadow-solid' => __( 'Solid', 'uab-wp' ),
		),
		'core/list' => array(
			'no-disc' => __( 'No Disc', 'uab-wp' ),
		),
		'core/quote' => array(
			'shadow-light' => __( 'Shadow', 'uab-wp' ),
			'shadow-solid' => __( 'Solid', 'uab-wp' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'uab-wp' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'uab_wp_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function uab_wp_register_block_pattern_categories() {

	register_block_pattern_category(
		'uab-wp-page',
		array(
			'label'       => __( 'Page', 'uab-wp' ),
			'description' => __( 'Create a full page with multiple patterns that are grouped together.', 'uab-wp' ),
		)
	);
	register_block_pattern_category(
		'uab-wp-pricing',
		array(
			'label'       => __( 'Pricing', 'uab-wp' ),
			'description' => __( 'Compare features for your digital products or service plans.', 'uab-wp' ),
		)
	);

}

add_action( 'init', 'uab_wp_register_block_pattern_categories' );
