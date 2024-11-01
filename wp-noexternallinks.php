<?php
/**
 * WP No External Links bootstrap file.
 *
 * @link              https://wordpress.org/plugins/wp-noexternallinks/
 * @since             4.0.0
 * @package           WP_NoExternalLinks
 *
 * @wordpress-plugin
 * Plugin Name:       WP No External Links
 * Plugin URI:        https://wordpress.org/plugins/wp-noexternallinks/
 * Description:       Convert external links into internal links, site wide or post/page specific. Add NoFollow, Click logging, and more...
 * Version:           4.3
 * Author:            steamerdevelopment
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-noexternallinks
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/wp-noexternallinks.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    4.0.0
 */
function run_wp_noexternallinks() {

    $plugin = new WP_NoExternalLinks();
    $plugin->run();

}

run_wp_noexternallinks();
