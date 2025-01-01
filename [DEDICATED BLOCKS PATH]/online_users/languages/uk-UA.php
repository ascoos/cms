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
 * @subpackage         	: Ukrainian Language file
 * @source             	: /[BLOCKS PATH]/online_users/languages/uk-UA.php
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

    public $blockname = "Хто онлайн на сайті?";
    public $total_online = "Загалом онлайн";
    public $guests = "Гості";
    public $search_engines = "Пошукові системи";
    public $members = "Члени";
    public $block_users = "Доступ заборонено";
    public $Registered_users = "Зареєстровані користувачі";
    public $no_registered_users = "Немає зареєстрованих користувачів онлайн";
    public $login_to_see_users = "Увійдіть, щоб побачити, хто онлайн";

    public $APL_license = "Загальна ліцензія Ascoos (AGL)";
    public $APL_author = "ДРОГКІДІС ХРІСТОС";
    public $APL_creation = "";
    public $APL_copyright = "ALEXSOFT ПРОГРАМНЕ ЗАБЕЗПЕЧЕННЯ";
    public $APL_translator = "";
    public $APL_translatorEmail = "";
    public $APL_translatorUrl = "";
    public $APL_desc = "Відображає вікно з інформацією про користувачів, які онлайн на сайті.";

    public $APL_paramgroup_general_label = "▼ &nbsp; Параметри загальних налаштувань";
    public $APL_paramgroup_general_label_info = "<strong>ПАРАМЕТРИ ЗАГАЛЬНИХ НАЛАШТУВАНЬ</strong><br />--------------------------------------<br /><br />У цьому розділі ви можете вибрати з різних загальних параметрів і динамічно налаштувати розділ";
    public $APL_show_icon_label = "Показати іконку";
    public $APL_show_icon_desc = "<strong>ПОКАЗАТИ ІКОНКУ</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася іконка, яка ідентифікує інформацію?";
    public $APL_show_total_label = "Показати загальну кількість онлайн";
    public $APL_show_total_desc = "<strong>ПОКАЗАТИ ЗАГАЛЬНУ КІЛЬКІСТЬ ОНЛАЙН</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася загальна кількість користувачів онлайн?";
    public $APL_show_guests_label = "Показати гостей";
    public $APL_show_guests_desc = "<strong>ПОКАЗАТИ ГОСТЕЙ</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася кількість онлайн гостей?";
    public $APL_show_robots_label = "Показати роботів і пошукові системи";
    public $APL_show_robots_desc = "<strong>ПОКАЗАТИ ПОШУКОВІ СИСТЕМИ</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася кількість онлайн роботів і пошукових систем?";
    public $APL_show_blocks_label = "Показати заблоковані підключення";
    public $APL_show_blocks_desc = "<strong>ПОКАЗАТИ ЗАБЛОКОВАНІ ПІДКЛЮЧЕННЯ</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася кількість заблокованих відвідувань сайту?";

    public $APL_show_users_label = "Показати членів";
    public $APL_show_users_desc = "<strong>ПОКАЗАТИ ЧЛЕНІВ</strong><br />--------------------------------------<br /><br />Чи хочете ви, щоб відображалася кількість онлайн членів і посилання на їхні профілі?";
    public $APL_count_label = "Кількість онлайн членів";
    public $APL_count_desc = "<strong>КІЛЬКІСТЬ ОНЛАЙН ЧЛЕНІВ</strong><br />--------------------------------------<br /><br />Скільки членів буде відображатися у списку онлайн членів?";

    public $APL_theme_label = "Тема вигляду розділу";
    public $APL_theme_placeholder = "Виберіть тему вигляду розділу";
    public $APL_theme_desc = "<strong>ТЕМА ВИГЛЯДУ РОЗДІЛУ</strong><br />--------------------------------------<br /><br />Виберіть тему вигляду, яка буде реалізована у розділі &laquo;%s&raquo;.<br /><br />Кожен розділ має принаймні одну тему вигляду за замовчуванням, яка називається &laquo;За замовчуванням&raquo;";
}

?>