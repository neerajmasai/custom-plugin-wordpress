<?php

/**
 * @package myplugin
 */
/*
Plugin Name: My Plugin
Plugin URI: #
Description: Example Plugin as part of exercise Linkedin Learning Course WordPress Plugin Development
Version: 4.2.4
Author: Neeraj Malwal
Author URI: #
License: GPLv2 or later
Text Domain: myplugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/


//No direct access security measure
if (!defined('ABSPATH')) {
    exit;
}

if( is_admin()){
    require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path(__FILE__) . 'admin/settings-validate.php';
}


// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}

// core functions (includes folder)

require_once plugin_dir_path(__FILE__) . 'includes/core-functions.php';
