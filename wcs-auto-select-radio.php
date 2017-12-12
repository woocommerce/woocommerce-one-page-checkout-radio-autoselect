<?php
/**
 * Plugin Name: WooCommerce One Page Checkout - Auto-Select Radio
 * Plugin URI: https://github.com/Prospress/one-page-checkout-auto-select-radio/
 * Description: Auto-selects a radio button defined by ID in OPC's 'Product-List' template.
 * Author: Prospress Inc.
 * Author URI: http://prospress.com/
 * Version: 1.0
 * License: GPLv3
 *
 * GitHub Plugin URI: Prospress/woocommerce-one-page-checkout-radio-autoselect
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce One Page Checkout
 * @author		Prospress Inc.
 * @since		1.0
 */

/**
 * Equeue the custom select radio script.
 */

function wcs_auto_select_radio() {
	wp_enqueue_script( 'wcs-auto-select-radio' , plugin_dir_url( __FILE__ ) . 'wcs-auto-select-radio.js', array( 'jquery' ), '1.0.0', true  );
}
add_action( 'plugins_loaded', 'wcs_jr_maybe_load_select' );

/**
 * Register our enqueuing function when One Page Checkout is loaded.
 */

function wcs_jr_maybe_load_select() {
	if ( ! class_exists( 'PP_One_Page_Checkout' ) ) {
		return;
	}
	add_action( 'wp_enqueue_scripts', 'wcs_auto_select_radio' );
}
