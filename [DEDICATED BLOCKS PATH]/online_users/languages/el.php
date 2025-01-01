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
 * @subpackage         	: Greek Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/el.php
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

	public $blockname = "Ποιοι είναι μέσα στην ιστοσελίδα;";
	public $total_online = "Σύνολο Συνδεδεμένων";
	public $guests = "Επισκέπτες";
	public $search_engines = "Μηχανές Αναζήτησης";
	public $members = "Μέλη";
	public $block_users = "Άρνηση πρόσβασης";
	public $Registered_users = "Εγγεγραμμένοι χρήστες";
	public $no_registered_users = "Κανένας εγγεγραμμένος χρήστης δεν είναι συνδεδεμένος";
	public $login_to_see_users = "Συνδεθείτε για να δείτε ποιοι χρήστες είναι συνδεδεμένοι";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "ΔΡΟΓΚΙΔΗΣ ΧΡΗΣΤΟΣ";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT ΛΟΓΙΣΜΙΚΟ";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Εμφανίζει ένα πλαίσιο με πληροφορίες σχετικά με τους χρήστες που είναι μέσα στην ιστοσελίδα.";

	public $APL_paramgroup_general_label = "▼ &nbsp; Επιλογές Γενικών Παραμέτρων";
	public $APL_paramgroup_general_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΓΕΝΙΚΩΝ ΠΑΡΑΜΕΤΡΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να επιλέξετε από διάφορες γενικές παραμέτρους και να διαμορφώσετε δυναμικά την ενότητα";
	public $APL_show_icon_label = "Εμφάνιση εικονιδίου";
	public $APL_show_icon_desc = "<strong>ΕΜΦΑΝΙΣΗ ΕΙΚΟΝΙΔΙΟΥ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ένα εικονίδιο που προσδιορίζει την πληροφορία;";
	public $APL_show_total_label = "Εμφάνιση συνόλου συνδεδεμένων";
	public $APL_show_total_desc = "<strong>ΕΜΦΑΝΙΣΗ ΣΥΝΟΛΟΥ ΣΥΝΔΕΔΕΜΕΝΩΝ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται το σύνολο όσων είναι μέσα στην ιστοσελίδα;";
	public $APL_show_guests_label = "Εμφάνιση Επισκεπτών";
	public $APL_show_guests_desc = "<strong>ΕΜΦΑΝΙΣΗ ΕΠΙΣΚΕΠΤΩΝ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο αριθμός των επισκεπτών που είναι τώρα μέσα στην ιστοσελίδα;";
	public $APL_show_robots_label = "Εμφάνιση ρομπότ και μηχανών αναζήτησης";
	public $APL_show_robots_desc = "<strong>ΕΜΦΑΝΙΣΗ ΜΗΧΑΝΩΝ ΑΝΑΖΗΤΗΣΗΣ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο αριθμός των ρομπότ και των μηχανών αναζήτησης που είναι τώρα μέσα στην ιστοσελίδα;";
	public $APL_show_blocks_label = "Εμφάνιση μπλοκαρισμένων συνδέσεων";
	public $APL_show_blocks_desc = "<strong>ΕΜΦΑΝΙΣΗ ΜΠΛΟΚΑΡΙΣΜΕΝΩΝ ΣΥΝΔΕΣΕΩΝ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο αριθμός των μπλοκαρισμένων επισκέψεων στην σελίδα;";

	public $APL_show_users_label = "Εμφάνιση μελών";
	public $APL_show_users_desc = "<strong>ΕΜΦΑΝΙΣΗ ΜΕΛΩΝ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο αριθμός των μελών που είναι συνδεδεμένα, καθώς και ο σύνδεσμός προς τα προφίλ αυτών;";
	public $APL_count_label = "Αριθμός των συνδεδεμένων μελών";
	public $APL_count_desc = "<strong>ΑΡΙΘΜΟΣ ΣΥΝΔΕΔΕΜΕΝΩΝ ΜΕΛΩΝ</strong><br />--------------------------------------<br /><br />Πόσα μέλη θα εμφανιστούν στη λίστα συνδεδεμένων μελών;";

	public $APL_theme_label = "Θέμα εμφάνισης Ενότητας";
	public $APL_theme_placeholder = "Επιλέξτε θέμα εμφάνισης της ενότητας";
	public $APL_theme_desc = "<strong>ΘΕΜΑ ΕΜΦΑΝΙΣΗΣ ΕΝΟΤΗΤΑΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε το θέμα εμφάνισης που θα υλοποιηθεί η ενότητα &laquo;%s&raquo;.<br /><br />Κάθε ενότητα έχει τουλάχιστο το προκαθορισμένο θέμα εμφάνισης με την ονομασία &laquo;Default&raquo;";
}

?>