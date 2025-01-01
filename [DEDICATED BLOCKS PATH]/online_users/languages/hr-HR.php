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
 * @subpackage         	: Croatian Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/hr-HR.php
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

    public $blockname = "Tko je online na web stranici?";
    public $total_online = "Ukupno Online";
    public $guests = "Gosti";
    public $search_engines = "Tražilice";
    public $members = "Članovi";
    public $block_users = "Pristup Odbijen";
    public $Registered_users = "Registrirani Korisnici";
    public $no_registered_users = "Nema registriranih korisnika online";
    public $login_to_see_users = "Prijavite se da biste vidjeli tko je online";

    public $APL_license = "Ascoos Opća Licenca (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT SOFTWARE";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Prikazuje okvir s informacijama o korisnicima koji su online na web stranici.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Opcije Općih Parametara";
    public $APL_paramgroup_general_label_info = "<strong>OPCIJE OPĆIH PARAMETARA</strong><br />--------------------------------------<br /><br />U ovom dijelu možete birati između različitih općih parametara i dinamički konfigurirati dio";
    public $APL_show_icon_label = "Prikaz ikone";
    public $APL_show_icon_desc = "<strong>PRIKAZ IKONE</strong><br />--------------------------------------<br /><br />Želite li da se prikaže ikona koja identificira informaciju?";
    public $APL_show_total_label = "Prikaz Ukupno Online";
    public $APL_show_total_desc = "<strong>PRIKAZ UKUPNO ONLINE</strong><br />--------------------------------------<br /><br />Želite li da se prikaže ukupan broj online korisnika?";
    public $APL_show_guests_label = "Prikaz Gostiju";
    public $APL_show_guests_desc = "<strong>PRIKAZ GOSTIJU</strong><br />--------------------------------------<br /><br />Želite li da se prikaže broj online gostiju?";
    public $APL_show_robots_label = "Prikaz Robota i Tražilica";
    public $APL_show_robots_desc = "<strong>PRIKAZ TRAŽILICA</strong><br />--------------------------------------<br /><br />Želite li da se prikaže broj online robota i tražilica?";
    public $APL_show_blocks_label = "Prikaz Blokiranih Veza";
    public $APL_show_blocks_desc = "<strong>PRIKAZ BLOKIRANIH VEZA</strong><br />--------------------------------------<br /><br />Želite li da se prikaže broj blokiranih posjeta web stranici?";

    public $APL_show_users_label = "Prikaz Članova";
    public $APL_show_users_desc = "<strong>PRIKAZ ČLANOVA</strong><br />--------------------------------------<br /><br />Želite li da se prikaže broj online članova i veze na njihove profile?";
    public $APL_count_label = "Broj Online Članova";
    public $APL_count_desc = "<strong>BROJ ONLINE ČLANOVA</strong><br />--------------------------------------<br /><br />Koliko članova će biti prikazano na popisu online članova?";

    public $APL_theme_label = "Tema Izgleda Dijela";
    public $APL_theme_placeholder = "Odaberite temu izgleda dijela";
    public $APL_theme_desc = "<strong>TEMA IZGLEDA DIJELA</strong><br />--------------------------------------<br /><br />Odaberite temu izgleda koja će biti implementirana u dijelu &laquo;%s&raquo;.<br /><br />Svaki dio ima najmanje zadanu temu izgleda koja se zove &laquo;Zadano&raquo;";
}

?>