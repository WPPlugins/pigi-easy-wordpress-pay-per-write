<?php
/*
Plugin Name: Wp Pigi Pay Per Write
Plugin URI: http://www.wpcode.net/pigi-pay-per-write-v-2.html/ 
Description: Turn You Wordpress installation in a powerfull Pay Per Write/Revenue share Website.
Version: 2
Author: Pigi
Author URI: http://www.wpcode.net
License: GPL2
*/
	
/*  Copyright 2010  Pigi  (email : pigi.bari@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once('settings/menu.php');
require_once('settings/usersettings.php');
if ( function_exists('wpcode_widget')) {} else { require_once('dash_wpcode.php'); }

function print_adsense_banner() {         
         $pubid = get_the_author_meta('pub_id', $user->ID);         

        echo $pubid;
}
add_shortcode("adsense", "print_adsense_banner");

function print_chitika_banner() {         
         $chitika = get_the_author_meta('chitika', $user->ID);         

        echo $chitika;
}
add_shortcode("chitika", "print_chitika_banner");

function print_bidvertiser_banner() {         
         $bidvertiser = get_the_author_meta('bidvertiser', $user->ID);         

        echo $bidvertiser;
}
add_shortcode("chitika", "print_bidvertiser_banner");

function print_heyos_banner() {         
         $heyos = get_the_author_meta('heyos', $user->ID);         

        echo $heyos;
}
add_shortcode("chitika", "print_heyos_banner");
?>