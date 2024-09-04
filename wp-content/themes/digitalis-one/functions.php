<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Digitalis One for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'digitalis_one_register_required_plugins', 0);
function digitalis_one_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'digitalis-one',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function digitalis_one_pattern_styles()
{
	wp_enqueue_style('digitalis-one-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('digitalis-one-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'digitalis_one_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Digitalis One pattern categories
function digitalis_one_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'digitalis-one'),
			'description' => __('Header patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'digitalis-one'),
			'description' => __('Call to action patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'digitalis-one'),
			'description' => __('Digitalis One content patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'digitalis-one'),
			'description' => __('Team patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'digitalis-one'),
			'description' => __('Banner patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'digitalis-one'),
			'description' => __('layout patterns', 'digitalis-one'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'digitalis-one'),
			'description' => __('Testimonial and review patterns', 'digitalis-one'),
		)
	);

}

add_action('init', 'digitalis_one_register_block_pattern_categories');

// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;

ThemeEntryPoint::init([
	'theme_url' => 'https://superbthemes.com/digitalis-one/',
	'demo_url' => 'https://superbthemes.com/demo/digitalis-one/'
]);




function digitalis_one_block_editor() {
    add_editor_style( '/assets/css/block-editor.css' );
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/block-editor.css' );

}
add_action( 'admin_init', 'digitalis_one_block_editor' );



function digitalis_one_remove_parent_tgmpa() {
    remove_action( 'tgmpa_register', 'idea_flow_register_required_plugins', 0 );
}
add_action( 'after_setup_theme', 'digitalis_one_remove_parent_tgmpa', 0 ); 