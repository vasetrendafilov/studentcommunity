<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Известувања',

	'FORUM_PERMISSIONS'		=> 'Дозволи на форумот',

	'ICON_ANNOUNCEMENT'		=> 'Известување',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'Бевте известени за овој форум, Ве молиме најавете се за да го погледнете',

	'MARK_TOPICS_READ'		=> 'Означи ги темите како прочитани',

	'NEW_POSTS_HOT'			=> 'Нови објави [ Популарно ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Нови објави [ Заклучено ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Нема нови објави [ Популарно ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Нема нови објави [ Заклучено ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Немате дозвола за пристап до темите на форумот.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Оваа категорија нема форуми.',
	'NO_UNREAD_POSTS_HOT'		=> 'Нема непрочитани објави [ Популарно ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Нема непрочитани објави [ Заклучено ]',

	'POST_FORUM_LOCKED'		=> 'Форумот е заклучен',

	'TOPICS_MARKED'			=> 'Темите на форумот сега се означени како прочитани.',

	'UNREAD_POSTS_HOT'		=> 'Непрочитани објави [ Популарно ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочитани објави [ Заклучено ]',

	'VIEW_FORUM'			=> 'Преглед на форумот',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d теми',
	),
));
