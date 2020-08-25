<?php
/**
 * @package HelloGuffPlugin
 * @version 1.0.0
 */
/*
Plugin Name: Helloguff Plugin
Plugin URI: https://mmcguff.github.io/
Description: This is my first attempt on writing a custom Plugin
Version: 1.0.0
Author: Matthew McGuff
Author URI: https://mmcguff.github.io/
License: GPLv2 or later
Text Domain: helloguff plugin
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
*/

// Make sure we don't expose any info if called directly
defined('ABSPATH') or die('Access forbidden to this file');

class HelloGuffPlugin
{
    function __construct(){
        echo '';
    }

    function activate(){

    }

    function deactivate(){

    }

    function uninstall(){

    }
    
}

if (class_exists('HelloGuffPlugin')){
    $helloGuffPlugin = new HelloGuffPlugin();
}

// activation
register_activation_hook(__FILE__, array($helloGuffPlugin, array($helloGuffPlugin, 'activate')));

// // deacttivation
register_deactivation_hook(__FILE__, array($helloGuffPlugin, array($helloGuffPlugin, 'deactivate')));

// unistall



