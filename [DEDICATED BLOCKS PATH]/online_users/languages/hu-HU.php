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
 * @subpackage         	: Hungarian Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/hu-HU.php
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

    public $blockname = "Ki van online a weboldalon?";
    public $total_online = "Összesen online";
    public $guests = "Vendégek";
    public $search_engines = "Keresőmotorok";
    public $members = "Tagok";
    public $block_users = "Hozzáférés megtagadva";
    public $Registered_users = "Regisztrált felhasználók";
    public $no_registered_users = "Nincs online regisztrált felhasználó";
    public $login_to_see_users = "Jelentkezz be, hogy lásd, ki van online";

    public $APL_license = "Ascoos általános licenc (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT SZOFTVER";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Megjelenít egy dobozt az online felhasználókról a weboldalon.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Általános paraméterek beállításai";
    public $APL_paramgroup_general_label_info = "<strong>ÁLTALÁNOS PARAMÉTEREK BEÁLLÍTÁSAI</strong><br />--------------------------------------<br /><br />Ebben a részben különböző általános paraméterek közül választhatsz és dinamikusan konfigurálhatod a részt";
    public $APL_show_icon_label = "Ikon megjelenítése";
    public $APL_show_icon_desc = "<strong>IKON MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha egy ikon azonosítaná az információt?";
    public $APL_show_total_label = "Összesen online megjelenítése";
    public $APL_show_total_desc = "<strong>ÖSSZESEN ONLINE MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha az online felhasználók összesített száma megjelenne?";
    public $APL_show_guests_label = "Vendégek megjelenítése";
    public $APL_show_guests_desc = "<strong>VENDÉGEK MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha az online vendégek száma megjelenne?";
    public $APL_show_robots_label = "Robotok és keresőmotorok megjelenítése";
    public $APL_show_robots_desc = "<strong>KERESŐMOTOROK MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha az online robotok és keresőmotorok száma megjelenne?";
    public $APL_show_blocks_label = "Letiltott kapcsolatok megjelenítése";
    public $APL_show_blocks_desc = "<strong>LETILTOTT KAPCSOLATOK MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha az oldalhoz letiltott látogatások száma megjelenne?";

    public $APL_show_users_label = "Tagok megjelenítése";
    public $APL_show_users_desc = "<strong>TAGOK MEGJELENÍTÉSE</strong><br />--------------------------------------<br /><br />Szeretnéd, ha az online tagok száma és profiljaikra mutató linkek megjelennének?";
    public $APL_count_label = "Online tagok száma";
    public $APL_count_desc = "<strong>ONLINE TAGOK SZÁMA</strong><br />--------------------------------------<br /><br />Hány tag jelenjen meg az online tagok listájában?";

    public $APL_theme_label = "Szakasz megjelenési témája";
    public $APL_theme_placeholder = "Válaszd ki a szakasz megjelenési témáját";
    public $APL_theme_desc = "<strong>SZAKASZ MEGJELENÉSI TÉMÁJA</strong><br />--------------------------------------<br /><br />Válaszd ki a szakasz &laquo;%s&raquo; megjelenési témáját.<br /><br />Minden szakasz rendelkezik legalább egy alapértelmezett megjelenési témával, amelynek neve &laquo;Alapértelmezett&raquo;";
}

?>