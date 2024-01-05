<?php

/**
 * websteinrizki functions and definitions
 *
 */

function websteinrizki_setup()
{

	// Make theme available for translation.
	load_theme_textdomain('websteinrizki', get_template_directory() . '/languages');

	// Add theme support
	add_theme_support('automatic-feed-links');
	add_theme_support('wp-block-styles');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('editor-styles');
	add_theme_support('html5', array('comment-form', 'comment-list'));
	add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'websteinrizki_setup');

/**
 * Enqueue scripts and styles
 */
function websteinrizki_scripts()
{
	$version = wp_get_theme('websteinrizki')->get('Version');
	// Stylesheet
	wp_enqueue_style('websteinrizki-styles', get_theme_file_uri('/style.css'), array(), $version);

	if (is_rtl()) {
		wp_enqueue_style('rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
	}
}
add_action('wp_enqueue_scripts', 'websteinrizki_scripts');

function websteinrizki_excerpt_length($length)
{
	return 25;
}
add_filter('excerpt_length', 'websteinrizki_excerpt_length');

/** Add default theme logo if no logo is specified */
function websteinrizki_get_custom_logo_callback($html)
{
	if (has_custom_logo()) {
		return $html;
	} else {
		$logo = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 135.467 135.467" fill="none"><path d="M68.352 56.003L6.616 31.309 68.352 6.615l61.736 24.694-28.768 11.507z" stroke="#262626" stroke-linejoin="round" stroke-width="13.229"/><path d="M9.073 99.25c-3.392-1.356-7.241.294-8.598 3.686s.293 7.241 3.685 8.598zm59.28 30.836l-2.456 6.142c1.577.631 3.336.631 4.912 0zm64.192-18.553c3.392-1.357 5.042-5.207 3.686-8.598s-5.207-5.042-8.598-3.686zM9.073 62.209c-3.392-1.356-7.241.294-8.598 3.686s.293 7.241 3.685 8.598zm59.28 30.836l-2.456 6.142c1.577.631 3.336.631 4.912 0zm64.192-18.553c3.392-1.357 5.042-5.207 3.686-8.598s-5.207-5.042-8.598-3.686zM4.16 111.534l61.736 24.694 4.912-12.284L9.073 99.25zm66.649 24.694l61.736-24.694-4.912-12.284-61.736 24.694zM4.16 74.492l61.736 24.694 4.912-12.284L9.073 62.209zm66.649 24.694l61.736-24.694-4.912-12.284-61.736 24.694z" fill="#262626"/></svg>';
		return '<a href="' . esc_attr(home_url()) . '">' . $logo . '</a>';
	}
}

add_filter('get_custom_logo', 'websteinrizki_get_custom_logo_callback');

/**
 * Registers block patterns categories, and type.
 */

function websteinrizki_register_block_patterns()
{
	$block_pattern_categories = array(
		'websteinrizki' => array('label' => esc_html__('websteinrizki', 'websteinrizki')),
	);

	$block_pattern_categories = apply_filters('websteinrizki_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'websteinrizki_register_block_patterns', 9);

/* Add custom body class based on the style variation */
function websteinrizki_body_classes($classes)
{
	$style_variation = wp_get_global_settings(array('custom', 'variation'));
	if ('default' !== $style_variation) {
		$classes[] = 'variation-' . $style_variation;
	}
	return $classes;
}
add_filter('body_class', 'websteinrizki_body_classes');

/**
 * Add block style variations.
 */
function websteinrizki_register_block_styles()
{

	$block_styles = array(
		'core/query'            => array(
			'left-featured-image' => __('Left Featured Image', 'websteinrizki'),
		),
		'core/post-terms'       => array(
			'term-button' => __('Button Style', 'websteinrizki'),
		),
		'core/query-pagination' => array(
			'pagination-button' => __('Button Style', 'websteinrizki'),
		),
	);

	foreach ($block_styles as $block => $styles) {
		foreach ($styles as $style_name => $style_label) {
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
add_action('init', 'websteinrizki_register_block_styles');

/**
 * Load custom block styles only when the block is used.
 */
function websteinrizki_enqueue_custom_block_styles()
{

	// Scan our css folder to locate block styles.
	$files = glob(get_template_directory() . '/assets/css/*.css');

	foreach ($files as $file) {

		// Get the filename and core block name.
		$filename   = basename($file, '.css');
		$block_name = str_replace('core-', 'core/', $filename);

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "websteinrizki-block-{$filename}",
				'src'    => get_theme_file_uri("assets/css/{$filename}.css"),
				'path'   => get_theme_file_path("assets/css/{$filename}.css"),
			)
		);
	}
}
add_action('init', 'websteinrizki_enqueue_custom_block_styles');

/**
 * Display the admin notice.
 */
function websteinrizki_admin_notice()
{
	global $current_user;
	$user_id = $current_user->ID;

	if (!get_user_meta($user_id, 'websteinrizki_ignore_customizer_notice')) {
?>

		<div class="notice notice-info">
			<p>
				<?php esc_html_e('Welcome to Company Profile Theme', 'websteinrizki'); ?> <a target="_blank" href="#"><?php esc_html_e('Next Step', 'websteinrizki'); ?></a>
				<span style="float:right">
					<a href="?websteinrizki_ignore_customizer_notice=0"><?php esc_html_e('Hide Notice', 'websteinrizki'); ?></a>
				</span>
			</p>
		</div>

<?php
	}
}
add_action('admin_notices', 'websteinrizki_admin_notice');

/**
 * Dismiss the admin notice.
 */
function websteinrizki_dismiss_admin_notice()
{
	global $current_user;
	$user_id = $current_user->ID;
	/* If user clicks to ignore the notice, add that to their user meta */
	if (isset($_GET['websteinrizki_ignore_customizer_notice']) && '0' === $_GET['websteinrizki_ignore_customizer_notice']) {
		add_user_meta($user_id, 'websteinrizki_ignore_customizer_notice', 'true', true);
	}
}
add_action('admin_init', 'websteinrizki_dismiss_admin_notice');
