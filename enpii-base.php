<?php
/**
 * Plugin Name: Enpii Base
 * Description: The Base plugin for Theme and Plugin development. It requires ACF pro to work completely.
 * Version: 0.0.1
 * Author: Enpii
 * Author URI: http://www.enpii.com/wordpress-plugin-enpii-base
 * License: GPLv2 or later
 * Text Domain: enpii
 * Domain Path: /languages/
 */

defined( 'ENPII_BASE_PLUGIN_VER' ) || define( 'ENPII_BASE_PLUGIN_VER', 0.2 );
defined( 'ENPII_BASE_PLUGIN_FOLDER_NAME' ) || define( 'ENPII_BASE_PLUGIN_FOLDER_NAME', 'enpii-base' );
defined( 'ENPII_BASE_PLUGIN_URL' ) || define( 'ENPII_BASE_PLUGIN_URL', plugins_url( ENPII_BASE_PLUGIN_FOLDER_NAME ) );
defined( 'ENPII_BASE_PLUGIN_PATH' ) || define( 'ENPII_BASE_PLUGIN_PATH', __DIR__ );
defined( 'ENPII_BASE_PLUGIN_ASSETS_URL' ) || define( 'ENPII_BASE_PLUGIN_ASSETS_URL', plugins_url( ENPII_BASE_PLUGIN_FOLDER_NAME ) . DIRECTORY_SEPARATOR . 'assets' );
