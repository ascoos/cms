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
 * @subpackage         	: Main Frontend file
 * @source             	: /[BLOCKS PATH]/online_users/index.php
 * @fileNo             	: 
 * @version            	: 1.0.3
 * @created            	: 2007-05-01 20:00:00 UTC+3
 * @updated            	: 2025-01-01 00:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


global $cms_site, $objDatabase, $my;

$show_icon = $block->getParam('bool', 'show_icon', false);
$show_total = $block->getParam('bool', 'show_total', false);
$show_guests = $block->getParam('bool', 'show_guests', false);
$show_robots = $block->getParam('bool', 'show_robots', false);
$show_blocks = $block->getParam('bool', 'show_blocks', false);
$show_users = $block->getParam('bool', 'show_users', false);
$count = $block->getParam('int', 'count', 20);
$theme = $block->getParam('str', 'theme', 'default');

$block->loadTheme($theme);

// Total connected to Frontend
if ($show_total) {
	$query = "SELECT count(id) FROM #__session WHERE client=0";
	$objDatabase->setSQLQuery($query);
	$total_online = $objDatabase->getResult();
}

// How many of them are ordinary visitors?
if ($show_guests) {
	$query = "SELECT count(id) FROM #__session WHERE client=0 AND guest=0";
	$objDatabase->setSQLQuery($query);
	$guests = $objDatabase->getResult();
}

// How many of them are search engines?
if ($show_robots) {
	$query = "SELECT count(id) FROM #__session WHERE client=0 AND guest=1";
	$objDatabase->setSQLQuery($query);
	$robots = $objDatabase->getResult();
}

// How many connections are blocked?
if ($show_blocks) {
	$query = "SELECT count(id) FROM #__ass_ban";
	$objDatabase->setSQLQuery($query);
	$blocks = $objDatabase->getResult();
}

// How many of them are registered members?
$query = "SELECT count(userid) FROM #__session WHERE client=0 AND guest=2";
$objDatabase->setSQLQuery($query);
$users_online_count = $objDatabase->getResult();

if ($show_users AND ($my->groupid >= 9999) )
{
	$query = "SELECT userid, username FROM #__session WHERE client=0 AND guest=2 LIMIT ".$count;
	$objDatabase->setSQLQuery($query);
	$users_online = $objDatabase->getRows();
}	
if (isset($query)) unset($query);

$text = '';
$text .= "<div class=\"block-online_users-".$theme."\">";
if ($block->getVar('show_title')) { 
	$text .= "<div class=\"header\"><h3>".$block->getTitle()."</h3></div><div class=\"clear\"></div>";
}
$text .= "<div class=\"text\"><div class=\"table\">";

if ($show_total) { 
	$text .= "<div class=\"row\">";
	if ($show_icon) $text .= "<div class=\"cell\"><img src=\"".$cms_site."/themes/blocks/fronts/online_users/$theme/users_total.png\" alt=\"".$block->getLangVar('total_online')."\" border=\"0\" /></div>";
	$text .= "<div class=\"cell\">".$block->getLangVar('total_online')."</div>";
	$text .= "<div class=\"cell right\">".$total_online."</div>";
	$text .= "</div>";	
}

if ($show_guests) {
	$text .= "<div class=\"row\">";
	if ($show_icon) $text .= "<div class=\"cell\"><img src=\"".$cms_site."/themes/blocks/fronts/online_users/$theme/users_guest.png\" alt=\"".$block->getLangVar('guests')."\" border=\"0\" /></div>";
	$text .= "<div class=\"cell\">".$block->getLangVar('guests')."</div>";
	$text .= "<div class=\"cell right\">".$guests."</div>";
	$text .= "</div>";
}	

if ($show_robots) {
	$text .= "<div class=\"row\">";
	if ($show_icon) $text .= "<div class=\"cell\"><img src=\"".$cms_site."/themes/blocks/fronts/online_users/$theme/users_robot.png\" alt=\"".$block->getLangVar('search_engines')."\" border=\"0\" /></div>";
	$text .= "<div class=\"cell\">".$block->getLangVar('search_engines')."</div>";
	$text .= "<div class=\"cell right\">".$robots."</div>";
	$text .= "</div>";	
}

if ($show_blocks) {
	$text .= "<div class=\"row\">";
	if ($show_icon) $text .= "<div class=\"cell\"><img src=\"".$cms_site."/themes/blocks/fronts/online_users/$theme/users_block.png\" alt=\"".$block->getLangVar('block_users')."\" border=\"0\" /></div>";
	$text .= "<div class=\"cell\">".$block->getLangVar('block_users')."</div>";
	$text .= "<div class=\"cell right\">".$blocks."</div>";
	$text .= "</div>";	
}


if ($show_users AND ($my->groupid >= 9999) )
{
	$uo = [];
	foreach ($users_online as $uonline) { 
		$uo[] = "<span><a href=\"".asc2seo('index.php?p=users&amp;t=profile&amp;a=view&amp;id='.$uonline[0].'&amp;fp_fullpage')."\"><b>".$uonline[1]."</b></a></span>";
	}
	$uuo = implode(',&nbsp;&nbsp;', $uo);
	$uuo = ($users_online_count > $count) ? $uuo.'...' : $uuo;
} else {
	$uuo = ($users_online_count > 0) ? $block->getLangVar('login_to_see_users') : $block->getLangVar('no_registered_users');
}
$text .= "<div class=\"row\">";
if ($show_icon) $text .= "<div class=\"cell\"><img src=\"".$cms_site."/themes/blocks/fronts/online_users/$theme/users_registered.png\" alt=\"".$block->getLangVar('registered_users')."\" border=\"0\" /></div>";
$text .= "<div class=\"cell\">".$uuo."</div>";
$text .= "<div class=\"cell right\">".$users_online_count."</div>";
$text .= "</div>";		


$text .= "</div></div>";
// If is Free Edition of Ascoos Cms.
if (!ASCOOS_CMS_IS_COMMERCIAL_EDITION) $text .= "<div class=\"more\"><a href=\"https://www.ascoos.com\"><strong>ASCOOS CMS</strong></a></div>";
$text .= "</div>";

echo $text;
