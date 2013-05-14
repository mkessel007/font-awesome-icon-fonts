<?php
/**
 * Plugin Name: FontAwesome Icon Fonts
 * Plugin URI: http://www.ozzyrodriguez.com/
 * Description: Adds the ability to use FontAwesome icon fonts
 * Version: 1.0.0
 * Author: Ozzy Rodriguez
 * Author URI: http://www.ozzyrodriguez.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

define ( 'FAIF_DIR', dirname( __FILE__ ) );

// Add stylsheets and fonts
include_once( FAIF_DIR . '/lib/load-stylesheets.php' );

// add shortcodes
include_once( FAIF_DIR . '/lib/setup-shortcodes.php' );