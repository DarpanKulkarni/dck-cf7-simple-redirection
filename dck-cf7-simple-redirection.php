<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://darpan.co
 * @since             1.0.0
 * @package           Dck_Cf7_Simple_Redirection
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Redirection for Contact Form 7
 * Plugin URI:        https://wp-plugins.darpan.co/simple-redirection-for-contact-form-7
 * Description:       Simple redirection plugin for Contact Form 7, allows you to redirect to an existing page or a custom URL after form submission.
 * Version:           1.0.0
 * Author:            Darpan Kulkarni
 * Author URI:        https://darpan.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dck-cf7-simple-redirection
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('DCK_CF7_SIMPLE_REDIRECTION_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dck-cf7-simple-redirection-activator.php
 */
function activate_dck_cf7_simple_redirection()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-dck-cf7-simple-redirection-activator.php';
    Dck_Cf7_Simple_Redirection_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dck-cf7-simple-redirection-deactivator.php
 */
function deactivate_dck_cf7_simple_redirection()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-dck-cf7-simple-redirection-deactivator.php';
    Dck_Cf7_Simple_Redirection_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_dck_cf7_simple_redirection');
register_deactivation_hook(__FILE__, 'deactivate_dck_cf7_simple_redirection');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-dck-cf7-simple-redirection.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dck_cf7_simple_redirection()
{

    $plugin = new Dck_Cf7_Simple_Redirection();
    $plugin->run();

}

run_dck_cf7_simple_redirection();
