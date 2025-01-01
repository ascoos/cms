<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 25'                                            *
 * @ASCOOS-VERSION     	: 25.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2025, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Block Manager - Online Website Users
 * @subpackage         	: General and US English Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/en-US.php
 * @fileNo             	: 
 * @version            	: 1.0.3
 * @created            	: 2007-05-01 20:00:00 UTC+3
 * @updated            	: 2025-01-01 00:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @translator         	: 
 * @translatorSite 		: 
 * @translateDate     	: 
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0  
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_online_users_Language
{

    public $blockname = "Who is online on the website?";
    public $total_online = "Total Online";
    public $guests = "Guests";
    public $search_engines = "Search Engines";
    public $members = "Members";
    public $block_users = "Access Denied";
    public $Registered_users = "Registered Users";
    public $no_registered_users = "No registered user is online";
    public $login_to_see_users = "Login to see who is online";

    public $APL_license = "Ascoos General License (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT SOFTWARE";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Displays a box with information about the users who are online on the website.";

    public $APL_paramgroup_general_label = "▼ &nbsp; General Parameters Options";
    public $APL_paramgroup_general_label_info = "<strong>GENERAL PARAMETERS OPTIONS</strong><br />--------------------------------------<br /><br />In this section, you can select from various general parameters and dynamically configure the section";
    public $APL_show_icon_label = "Show Icon";
    public $APL_show_icon_desc = "<strong>SHOW ICON</strong><br />--------------------------------------<br /><br />Would you like an icon to be displayed that identifies the information?";
    public $APL_show_total_label = "Show Total Online";
    public $APL_show_total_desc = "<strong>SHOW TOTAL ONLINE</strong><br />--------------------------------------<br /><br />Would you like the total number of users online to be displayed?";
    public $APL_show_guests_label = "Show Guests";
    public $APL_show_guests_desc = "<strong>SHOW GUESTS</strong><br />--------------------------------------<br /><br />Would you like the number of guests online to be displayed?";
    public $APL_show_robots_label = "Show Robots and Search Engines";
    public $APL_show_robots_desc = "<strong>SHOW SEARCH ENGINES</strong><br />--------------------------------------<br /><br />Would you like the number of robots and search engines online to be displayed?";
    public $APL_show_blocks_label = "Show Blocked Connections";
    public $APL_show_blocks_desc = "<strong>SHOW BLOCKED CONNECTIONS</strong><br />--------------------------------------<br /><br />Would you like the number of blocked visits to the site to be displayed?";

    public $APL_show_users_label = "Show Members";
    public $APL_show_users_desc = "<strong>SHOW MEMBERS</strong><br />--------------------------------------<br /><br />Would you like the number of online members and links to their profiles to be displayed?";
    public $APL_count_label = "Number of Online Members";
    public $APL_count_desc = "<strong>NUMBER OF ONLINE MEMBERS</strong><br />--------------------------------------<br /><br />How many members will be displayed in the list of online members?";

    public $APL_theme_label = "Section Appearance Theme";
    public $APL_theme_placeholder = "Select the appearance theme of the section";
    public $APL_theme_desc = "<strong>SECTION APPEARANCE THEME</strong><br />--------------------------------------<br /><br />Select the appearance theme to be implemented in the section &laquo;%s&raquo;.<br /><br />Each section has at least the default appearance theme named &laquo;Default&raquo;";
}

?>