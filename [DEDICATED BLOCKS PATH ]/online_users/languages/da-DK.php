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
 * @subpackage         	: Danish Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/da-DK.php
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

    public $blockname = "Hvem er online på webstedet?";
    public $total_online = "I alt online";
    public $guests = "Gæster";
    public $search_engines = "Søgemaskiner";
    public $members = "Medlemmer";
    public $block_users = "Adgang nægtet";
    public $Registered_users = "Registrerede brugere";
    public $no_registered_users = "Ingen registrerede brugere er online";
    public $login_to_see_users = "Log ind for at se, hvem der er online";

    public $APL_license = "Ascoos Generel Licens (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT SOFTWARE";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Viser en boks med oplysninger om de brugere, der er online på webstedet.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Generelle parametre indstillinger";
    public $APL_paramgroup_general_label_info = "<strong>GENEREELLE PARAMETRE INDSTILLINGER</strong><br />--------------------------------------<br /><br />I dette afsnit kan du vælge mellem forskellige generelle parametre og dynamisk konfigurere afsnittet";
    public $APL_show_icon_label = "Vis ikon";
    public $APL_show_icon_desc = "<strong>VIS IKON</strong><br />--------------------------------------<br /><br />Vil du have vist et ikon, der identificerer oplysningerne?";
    public $APL_show_total_label = "Vis i alt online";
    public $APL_show_total_desc = "<strong>VIS I ALT ONLINE</strong><br />--------------------------------------<br /><br />Vil du have vist det samlede antal brugere online?";
    public $APL_show_guests_label = "Vis gæster";
    public $APL_show_guests_desc = "<strong>VIS GÆSTER</strong><br />--------------------------------------<br /><br />Vil du have vist antallet af online gæster?";
    public $APL_show_robots_label = "Vis robotter og søgemaskiner";
    public $APL_show_robots_desc = "<strong>VIS SØGEMASKINER</strong><br />--------------------------------------<br /><br />Vil du have vist antallet af online robotter og søgemaskiner?";
    public $APL_show_blocks_label = "Vis blokerede forbindelser";
    public $APL_show_blocks_desc = "<strong>VIS BLOKEREDE FORBINDELSER</strong><br />--------------------------------------<br /><br />Vil du have vist antallet af blokerede besøg på webstedet?";

    public $APL_show_users_label = "Vis medlemmer";
    public $APL_show_users_desc = "<strong>VIS MEDLEMMER</strong><br />--------------------------------------<br /><br />Vil du have vist antallet af online medlemmer og links til deres profiler?";
    public $APL_count_label = "Antal online medlemmer";
    public $APL_count_desc = "<strong>ANTAL ONLINE MEDLEMMER</strong><br />--------------------------------------<br /><br />Hvor mange medlemmer vil blive vist på listen over online medlemmer?";

    public $APL_theme_label = "Sektionens udseende tema";
    public $APL_theme_placeholder = "Vælg sektionens udseende tema";
    public $APL_theme_desc = "<strong>SEKTIONENS UDSEENDE TEMA</strong><br />--------------------------------------<br /><br />Vælg udseende temaet, der skal implementeres i sektionen &laquo;%s&raquo;.<br /><br />Hver sektion har mindst standard udseende temaet kaldet &laquo;Standard&raquo;";
}

?>