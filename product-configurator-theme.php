<?php
/**
* Plugin Name: Product Configurator custom theme
* Description: My custom theme
* Author: mklacroix
* Version: 1.0.0
*
* Text Domain: product-configurator-custom-theme
* Domain Path: /languages/
*
* Copyright: © 2020 mklacroix (email : contact@mklacroix.com)
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/
if ( ! defined( 'ABSPATH' ) ) exit;

function my_product_configurator_custom_theme_init() {
	if ( function_exists( 'mkl_pc' ) && is_callable( [ mkl_pc( 'themes' ), 'register_theme' ] ) ) {
		/**
		 * Edit the slug of your theme here:
		 * - mytheme is the slug
		 * - my-theme is the name of the folder in this plugin. You can rename it if you wish.
		 * - The name of the theme itself, as displayed in the admin, is set in the file style.css, within the folder "my-theme"
		 */
		mkl_pc( 'themes' )->register_theme( 'mytheme', plugin_dir_path( __FILE__ ) . 'my-theme' );
	}
}
add_action( 'mkl_pc_is_loaded', 'my_product_configurator_custom_theme_init' );