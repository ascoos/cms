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
 * @subpackage         	: Finnish Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/fi-FI.php
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

    public $blockname = "Kuka on online-tilassa sivustolla?";
    public $total_online = "Yhteensä online";
    public $guests = "Vieraat";
    public $search_engines = "Hakukoneet";
    public $members = "Jäsenet";
    public $block_users = "Pääsy kielletty";
    public $Registered_users = "Rekisteröidyt käyttäjät";
    public $no_registered_users = "Yksikään rekisteröity käyttäjä ei ole online-tilassa";
    public $login_to_see_users = "Kirjaudu sisään nähdäksesi kuka on online-tilassa";

    public $APL_license = "Ascoos Yleinen Lisenssi (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT OHJELMISTO";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Näyttää ruudun, jossa on tietoja käyttäjistä, jotka ovat online-tilassa sivustolla.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Yleiset parametriasetukset";
    public $APL_paramgroup_general_label_info = "<strong>YLEISET PARAMETRIASETUKSET</strong><br />--------------------------------------<br /><br />Tässä osiossa voit valita useista yleisistä parametreista ja määrittää osion dynaamisesti";
    public $APL_show_icon_label = "Näytä kuvake";
    public $APL_show_icon_desc = "<strong>NÄYTÄ KUVAKE</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään kuvake, joka tunnistaa tiedot?";
    public $APL_show_total_label = "Näytä yhteensä online";
    public $APL_show_total_desc = "<strong>NÄYTÄ YHTEENSÄ ONLINE</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään online-käyttäjien kokonaismäärä?";
    public $APL_show_guests_label = "Näytä vieraat";
    public $APL_show_guests_desc = "<strong>NÄYTÄ VIERAAT</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään online-vieraiden määrä?";
    public $APL_show_robots_label = "Näytä robotit ja hakukoneet";
    public $APL_show_robots_desc = "<strong>NÄYTÄ HAKUKONEET</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään online-tilassa olevien robottien ja hakukoneiden määrä?";
    public $APL_show_blocks_label = "Näytä estetyt yhteydet";
    public $APL_show_blocks_desc = "<strong>NÄYTÄ ESTETYT YHTEYDET</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään sivuston estettyjen vierailujen määrä?";

    public $APL_show_users_label = "Näytä jäsenet";
    public $APL_show_users_desc = "<strong>NÄYTÄ JÄSENET</strong><br />--------------------------------------<br /><br />Haluatko, että näytetään online-tilassa olevien jäsenten määrä ja linkit heidän profiileihinsa?";
    public $APL_count_label = "Online-jäsenten määrä";
    public $APL_count_desc = "<strong>ONLINE-JÄSENTEN MÄÄRÄ</strong><br />--------------------------------------<br /><br />Kuinka monta jäsentä näytetään online-jäsenten luettelossa?";

    public $APL_theme_label = "Osion ulkoasuteema";
    public $APL_theme_placeholder = "Valitse osion ulkoasuteema";
    public $APL_theme_desc = "<strong>OSION ULKOASUTEEMA</strong><br />--------------------------------------<br /><br />Valitse osion &laquo;%s&raquo; toteutettava ulkoasuteema.<br /><br />Jokaisessa osiossa on vähintään oletus ulkoasuteema nimeltä &laquo;Oletus&raquo;";
}

?>