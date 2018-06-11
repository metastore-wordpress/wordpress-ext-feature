<?php
/**
 * Plugin Name:     (WP-EXT) Feature
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Feature post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-feature
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Feature`.
 * ------------------------------------------------------------------------------------------------------------------ */

function run_wp_ext_feature() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Feature_Widget.class.php' );
}

run_wp_ext_feature();
