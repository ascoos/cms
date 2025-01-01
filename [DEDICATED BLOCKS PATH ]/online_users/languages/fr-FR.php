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
 * @subpackage         	: French Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/fr-FR.php
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

    public $blockname = "Qui est en ligne sur le site ?";
    public $total_online = "Total en ligne";
    public $guests = "Invités";
    public $search_engines = "Moteurs de recherche";
    public $members = "Membres";
    public $block_users = "Accès refusé";
    public $Registered_users = "Utilisateurs enregistrés";
    public $no_registered_users = "Aucun utilisateur enregistré n'est en ligne";
    public $login_to_see_users = "Connectez-vous pour voir qui est en ligne";

    public $APL_license = "Licence générale Ascoos (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT LOGICIEL";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Affiche une boîte avec des informations sur les utilisateurs en ligne sur le site.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Options des paramètres généraux";
    public $APL_paramgroup_general_label_info = "<strong>OPTIONS DES PARAMÈTRES GÉNÉRAUX</strong><br />--------------------------------------<br /><br />Dans cette section, vous pouvez sélectionner parmi divers paramètres généraux et configurer dynamiquement la section";
    public $APL_show_icon_label = "Afficher l'icône";
    public $APL_show_icon_desc = "<strong>AFFICHER L'ICÔNE</strong><br />--------------------------------------<br /><br />Voulez-vous qu'une icône identifiant l'information soit affichée ?";
    public $APL_show_total_label = "Afficher le total en ligne";
    public $APL_show_total_desc = "<strong>AFFICHER LE TOTAL EN LIGNE</strong><br />--------------------------------------<br /><br />Voulez-vous que le nombre total d'utilisateurs en ligne soit affiché ?";
    public $APL_show_guests_label = "Afficher les invités";
    public $APL_show_guests_desc = "<strong>AFFICHER LES INVITÉS</strong><br />--------------------------------------<br /><br />Voulez-vous que le nombre d'invités en ligne soit affiché ?";
    public $APL_show_robots_label = "Afficher les robots et moteurs de recherche";
    public $APL_show_robots_desc = "<strong>AFFICHER LES MOTEURS DE RECHERCHE</strong><br />--------------------------------------<br /><br />Voulez-vous que le nombre de robots et moteurs de recherche en ligne soit affiché ?";
    public $APL_show_blocks_label = "Afficher les connexions bloquées";
    public $APL_show_blocks_desc = "<strong>AFFICHER LES CONNEXIONS BLOQUÉES</strong><br />--------------------------------------<br /><br />Voulez-vous que le nombre de visites bloquées soit affiché ?";

    public $APL_show_users_label = "Afficher les membres";
    public $APL_show_users_desc = "<strong>AFFICHER LES MEMBRES</strong><br />--------------------------------------<br /><br />Voulez-vous que le nombre de membres en ligne et les liens vers leurs profils soient affichés ?";
    public $APL_count_label = "Nombre de membres en ligne";
    public $APL_count_desc = "<strong>NOMBRE DE MEMBRES EN LIGNE</strong><br />--------------------------------------<br /><br />Combien de membres seront affichés dans la liste des membres en ligne ?";

    public $APL_theme_label = "Thème d'apparence de la section";
    public $APL_theme_placeholder = "Sélectionnez le thème d'apparence de la section";
    public $APL_theme_desc = "<strong>THÈME D'APPARENCE DE LA SECTION</strong><br />--------------------------------------<br /><br />Sélectionnez le thème d'apparence qui sera implémenté dans la section &laquo;%s&raquo;.<br /><br />Chaque section a au moins le thème d'apparence par défaut nommé &laquo;Défaut&raquo;";
}

?>