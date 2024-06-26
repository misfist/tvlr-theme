<?php
/**
 * WDS tvlr functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */

namespace TVLR;

// Define a global path and url.
define( 'TVLR\ROOT_PATH', trailingslashit( get_template_directory() ) );
define( 'TVLR\ROOT_URL', trailingslashit( get_template_directory_uri() ) );

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function include_inc_files() {
	$files = array(
		'inc/blocks/', // Block functions.
		'inc/customizer/customizer.php', // Customizer additions.
		'inc/functions/', // Custom functions that act independently of the theme templates.
		'inc/hooks/', // Load custom filters and hooks.
		'inc/custom-fields/', // Load custom fields.
		'inc/setup/', // Theme setup.
		// 'inc/shortcodes/', // Load shortcodes.
		'inc/template-tags/', // Custom template tags for this theme.
		// 'inc/wpcli/',
	);

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}

include_inc_files();
