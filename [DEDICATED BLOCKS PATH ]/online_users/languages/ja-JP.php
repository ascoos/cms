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
 * @subpackage         	: Japanese Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/ja-JP.php
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

    public $blockname = "ウェブサイトでオンラインの人は誰ですか？";
    public $total_online = "合計オンライン";
    public $guests = "ゲスト";
    public $search_engines = "検索エンジン";
    public $members = "メンバー";
    public $block_users = "アクセス拒否";
    public $Registered_users = "登録ユーザー";
    public $no_registered_users = "オンラインの登録ユーザーはいません";
    public $login_to_see_users = "オンラインのユーザーを見るにはログインしてください";

    public $APL_license = "Ascoos 一般ライセンス (AGL)";
    public $APL_author = "DROGKIDIS CHRISTOS";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT ソフトウェア";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "ウェブサイトでオンラインのユーザーに関する情報を表示するボックスを表示します。";

    public $APL_paramgroup_general_label = "▼ &nbsp; 一般パラメータオプション";
    public $APL_paramgroup_general_label_info = "<strong>一般パラメータオプション</strong><br />--------------------------------------<br /><br />このセクションでは、さまざまな一般パラメータから選択し、セクションを動的に構成できます";
    public $APL_show_icon_label = "アイコンを表示";
    public $APL_show_icon_desc = "<strong>アイコンを表示</strong><br />--------------------------------------<br /><br />情報を識別するアイコンを表示しますか？";
    public $APL_show_total_label = "合計オンラインを表示";
    public $APL_show_total_desc = "<strong>合計オンラインを表示</strong><br />--------------------------------------<br /><br />オンラインのユーザーの合計数を表示しますか？";
    public $APL_show_guests_label = "ゲストを表示";
    public $APL_show_guests_desc = "<strong>ゲストを表示</strong><br />--------------------------------------<br /><br />オンラインのゲストの数を表示しますか？";
    public $APL_show_robots_label = "ロボットと検索エンジンを表示";
    public $APL_show_robots_desc = "<strong>検索エンジンを表示</strong><br />--------------------------------------<br /><br />オンラインのロボットと検索エンジンの数を表示しますか？";
    public $APL_show_blocks_label = "ブロックされた接続を表示";
    public $APL_show_blocks_desc = "<strong>ブロックされた接続を表示</strong><br />--------------------------------------<br /><br />サイトへのブロックされた訪問数を表示しますか？";

    public $APL_show_users_label = "メンバーを表示";
    public $APL_show_users_desc = "<strong>メンバーを表示</strong><br />--------------------------------------<br /><br />オンラインのメンバーの数とプロファイルへのリンクを表示しますか？";
    public $APL_count_label = "オンラインメンバー数";
    public $APL_count_desc = "<strong>オンラインメンバー数</strong><br />--------------------------------------<br /><br />オンラインメンバーのリストに表示されるメンバーの数は？";

    public $APL_theme_label = "セクションの外観テーマ";
    public $APL_theme_placeholder = "セクションの外観テーマを選択";
    public $APL_theme_desc = "<strong>セクションの外観テーマ</strong><br />--------------------------------------<br /><br />セクションに実装される外観テーマを選択 &laquo;%s&raquo;.<br /><br />各セクションには、少なくとも &laquo;デフォルト&raquo; と呼ばれるデフォルトの外観テーマがあります。";
}

?>