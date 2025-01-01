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
 * @package            	: Block Manager - Online Website users
 * @subpackage         	: Swedish Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/sv-SE.php
 * @fileNo             	: 
 * @version            	: 1.0.3
 * @created            	: 2007-05-01 20:00:00 UTC+3
 * @updated            	: 2025-01-01 00:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @translator         	:
 * @translatorSite 		: 
 * @translateDate		:
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0  
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_online_users_Language
{

    public $blockname = "Vem är online på webbplatsen?";
    public $total_online = "Totalt Online";
    public $guests = "Gäster";
    public $search_engines = "Sökmotorer";
    public $members = "Medlemmar";
    public $block_users = "Åtkomst nekad";
    public $Registered_users = "Registrerade användare";
    public $no_registered_users = "Ingen registrerad användare är online";
    public $login_to_see_users = "Logga in för att se vem som är online";

    public $APL_license = "Ascoos Allmän Licens (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT PROGRAMVARA";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Visar en ruta med information om användarna som är online på webbplatsen.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Allmänna Parametrar Alternativ";
    public $APL_paramgroup_general_label_info = "<strong>ALLMÄNNA PARAMETRAR ALTERNATIV</strong><br />--------------------------------------<br /><br />I detta avsnitt kan du välja mellan olika allmänna parametrar och konfigurera avsnittet dynamiskt";
    public $APL_show_icon_label = "Visa ikon";
    public $APL_show_icon_desc = "<strong>VISA IKON</strong><br />--------------------------------------<br /><br />Vill du att en ikon ska visas som identifierar informationen?";
    public $APL_show_total_label = "Visa totalt Online";
    public $APL_show_total_desc = "<strong>VISA TOTALT ONLINE</strong><br />--------------------------------------<br /><br />Vill du att det totala antalet användare online ska visas?";
    public $APL_show_guests_label = "Visa gäster";
    public $APL_show_guests_desc = "<strong>VISA GÄSTER</strong><br />--------------------------------------<br /><br />Vill du att antalet online gäster ska visas?";
    public $APL_show_robots_label = "Visa robotar och sökmotorer";
    public $APL_show_robots_desc = "<strong>VISA SÖKMOTORER</strong><br />--------------------------------------<br /><br />Vill du att antalet online robotar och sökmotorer ska visas?";
    public $APL_show_blocks_label = "Visa blockerade anslutningar";
    public $APL_show_blocks_desc = "<strong>VISA BLOCKERADE ANSLUTNINGAR</strong><br />--------------------------------------<br /><br />Vill du att antalet blockerade besök på webbplatsen ska visas?";

    public $APL_show_users_label = "Visa medlemmar";
    public $APL_show_users_desc = "<strong>VISA MEDLEMMAR</strong><br />--------------------------------------<br /><br />Vill du att antalet online medlemmar och länkar till deras profiler ska visas?";
    public $APL_count_label = "Antal Online Medlemmar";
    public $APL_count_desc = "<strong>ANTAL ONLINE MEDLEMMAR</strong><br />--------------------------------------<br /><br />Hur många medlemmar ska visas i listan över online medlemmar?";

    public $APL_theme_label = "Sektionens utseende tema";
    public $APL_theme_placeholder = "Välj sektionens utseende tema";
    public $APL_theme_desc = "<strong>SEKTIONENS UTSEENDE TEMA</strong><br />--------------------------------------<br /><br />Välj utseende temat som ska implementeras i sektionen &laquo;%s&raquo;.<br /><br />Varje sektion har minst standardutseendet som heter &laquo;Standard&raquo;";
}

?>