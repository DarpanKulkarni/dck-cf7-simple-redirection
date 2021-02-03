<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://john.doe
 * @since      1.0.0
 *
 * @package    Dck_Cf7_Simple_Redirection
 * @subpackage Dck_Cf7_Simple_Redirection/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dck_Cf7_Simple_Redirection
 * @subpackage Dck_Cf7_Simple_Redirection/includes
 * @author     John Doe <johndoe@example.com>
 */
class Dck_Cf7_Simple_Redirection_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'dck-cf7-simple-redirection',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );

    }


}
