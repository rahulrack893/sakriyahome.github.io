<?php
/*
Plugin Name: YITH Advanced Refund System for WooCommerce
Plugin URI: http://yithemes.com/themes/plugins/yith-advanced-refund-system-for-woocommerce/
Description: YITH Advanced Refund System for WooCommerce
Author: YITHEMES
Text Domain: yith-advanced-refund-system-for-woocommerce
Version: 1.0.1
Author URI: http://yithemes.com/
*/

/*
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/* === DEFINE === */
! defined( 'YITH_WCARS_VERSION' )          && define( 'YITH_WCARS_VERSION', '1.0.1' );
! defined( 'YITH_WCARS_FREE_INIT' )        && define( 'YITH_WCARS_FREE_INIT', plugin_basename( __FILE__ ) );
! defined( 'YITH_WCARS_FILE' )             && define( 'YITH_WCARS_FILE', __FILE__ );
! defined( 'YITH_WCARS_PATH' )             && define( 'YITH_WCARS_PATH', plugin_dir_path( __FILE__ ) );
! defined( 'YITH_WCARS_URL' )              && define( 'YITH_WCARS_URL', plugins_url( '/', __FILE__ ) );
! defined( 'YITH_WCARS_ASSETS_URL' )       && define( 'YITH_WCARS_ASSETS_URL', YITH_WCARS_URL . 'assets/' );
! defined( 'YITH_WCARS_ASSETS_JS_URL' )    && define( 'YITH_WCARS_ASSETS_JS_URL', YITH_WCARS_URL . 'assets/js/' );
! defined( 'YITH_WCARS_TEMPLATE_PATH' )    && define( 'YITH_WCARS_TEMPLATE_PATH', YITH_WCARS_PATH . 'templates/' );
! defined( 'YITH_WCARS_WC_TEMPLATE_PATH' ) && define( 'YITH_WCARS_WC_TEMPLATE_PATH', YITH_WCARS_PATH . 'templates/woocommerce/' );
! defined( 'YITH_WCARS_OPTIONS_PATH' )     && define( 'YITH_WCARS_OPTIONS_PATH', YITH_WCARS_PATH . 'plugin-options' );
! defined( 'YITH_WCARS_CUSTOM_POST_TYPE' ) && define( 'YITH_WCARS_CUSTOM_POST_TYPE', 'yith_refund_request' );

require_once YITH_WCARS_PATH . '/functions.php';

/* Initialize */

yith_initialize_plugin_fw( plugin_dir_path( __FILE__ ) );

/* Plugin Framework Version Check */
yit_maybe_plugin_fw_loader( plugin_dir_path( __FILE__ ) );

/* Register the plugin when activated */
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );

/* Start the plugin on plugins_loaded */
add_action( 'plugins_loaded', 'yith_ywars_install', 11 );
