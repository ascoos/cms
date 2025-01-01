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
 * @subpackage         	: Simplified Chinese Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/zh_CN.php
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

    public $blockname = "谁在网站上？";
    public $total_online = "总在线人数";
    public $guests = "访客";
    public $search_engines = "搜索引擎";
    public $members = "会员";
    public $block_users = "拒绝访问";
    public $Registered_users = "注册用户";
    public $no_registered_users = "没有注册用户在线";
    public $login_to_see_users = "登录以查看谁在线";

    public $APL_license = "Ascoos 通用许可证 (AGL)";
    public $APL_author = "德罗吉迪斯·克里斯托斯";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT 软件";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "显示一个框，包含有关网站在线用户的信息。";

    public $APL_paramgroup_general_label = "▼ &nbsp; 通用参数选项";
    public $APL_paramgroup_general_label_info = "<strong>通用参数选项</strong><br />--------------------------------------<br /><br />在此部分中，您可以从各种通用参数中选择，并动态配置部分";
    public $APL_show_icon_label = "显示图标";
    public $APL_show_icon_desc = "<strong>显示图标</strong><br />--------------------------------------<br /><br />您希望显示一个标识信息的图标吗？";
    public $APL_show_total_label = "显示总在线人数";
    public $APL_show_total_desc = "<strong>显示总在线人数</strong><br />--------------------------------------<br /><br />您希望显示在线人数总数吗？";
    public $APL_show_guests_label = "显示访客";
    public $APL_show_guests_desc = "<strong>显示访客</strong><br />--------------------------------------<br /><br />您希望显示在线访客的数量吗？";
    public $APL_show_robots_label = "显示机器人和搜索引擎";
    public $APL_show_robots_desc = "<strong>显示搜索引擎</strong><br />--------------------------------------<br /><br />您希望显示在线机器人和搜索引擎的数量吗？";
    public $APL_show_blocks_label = "显示被阻止的连接";
    public $APL_show_blocks_desc = "<strong>显示被阻止的连接</strong><br />--------------------------------------<br /><br />您希望显示被阻止的访问数量吗？";

    public $APL_show_users_label = "显示会员";
    public $APL_show_users_desc = "<strong>显示会员</strong><br />--------------------------------------<br /><br />您希望显示在线会员的数量和他们的资料链接吗？";
    public $APL_count_label = "在线会员数量";
    public $APL_count_desc = "<strong>在线会员数量</strong><br />--------------------------------------<br /><br />将在线会员数量显示在列表中的数量是多少？";

    public $APL_theme_label = "部分外观主题";
    public $APL_theme_placeholder = "选择部分的外观主题";
    public $APL_theme_desc = "<strong>部分外观主题</strong><br />--------------------------------------<br /><br />选择将要实现的部分外观主题 &laquo;%s&raquo;.<br /><br />每个部分至少具有默认外观主题，名为 &laquo;默认&raquo;";
}

?>