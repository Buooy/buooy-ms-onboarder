<?php
/*
	Plugin Name: Buooy Multisite Onboarder
	Plugin URI:  http://buooy.com
	Description: This plugin creates a getting started wizard for new blog administrators to key in some basic information into their site before they are able to continue using the site. They may also skip the wizard
	Version:     1.0
	Author:      Aaron Lee
	Author URI:  http://buooy.com
	License:     GPL2
	License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
defined( 'ABSPATH' ) or die();
define( 'BMSO_VERSION', '0.5.0' );
define( 'BMSO_TEXT_DOMAIN', 'BMSO' );

if( is_admin() ){
	
	include_once( __DIR__.'/admin/admin.php' );
	
}