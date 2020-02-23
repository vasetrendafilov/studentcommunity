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
	'APPROVE'								=> 'Одобри',
	'ATTACHMENT'						=> 'Датотека',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'The attachments feature has been disabled.',

	'BOOKMARK_ADDED'		=> 'Успешно обележана тема.',
	'BOOKMARK_ERR'			=> 'Обележувањето на темата не успеа. Ве молиме обидете се повторно.',
	'BOOKMARK_REMOVED'		=> 'Успешно отстранета обележана тема.',
	'BOOKMARK_TOPIC'		=> 'Обележи тема',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Отстрани од обележани',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Избриши тема',
	'DELETED_INFORMATION'	=> 'Избришано од %1$s на %2$s',
	'DISAPPROVE'					=> 'Disapprove',
	'DOWNLOAD_NOTICE'		=> 'Ја немате потребната дозвола за да ги погледнете датотеките прикачени на оваа објава.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Последно изменето од %2$s на %3$s, изменето вкупно %1$d пат.',
		2	=> 'Последно изменето од %2$s на %3$s, изменето вкупно %1$d пати.',
	),
	'EMAIL_TOPIC'			=> 'Email topic',
	'ERROR_NO_ATTACHMENT'	=> 'Избраната датотека повеќе не постои.',

	'FILE_NOT_FOUND_404'	=> 'Датотеката <strong>%s</strong> не постои.',
	'FORK_TOPIC'			=> 'Копирај тема',
	'FULL_EDITOR'			=> 'Full Editor &amp; Преглед',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorized to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Бевте известени за оваа тема, Ве молиме најавете се за да ја видите.',
	'LOGIN_VIEWTOPIC'		=> 'Потребно е да се регистрирате и најавите за да може да ја видите темата.',

	'MAKE_ANNOUNCE'				=> 'Смени на “Известување”',
	'MAKE_GLOBAL'				=> 'Смени на “Глобално”',
	'MAKE_NORMAL'				=> 'Смени на “Стандардна тема”',
	'MAKE_STICKY'				=> 'Смени на “Sticky”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Можете да изберете <strong>%d</strong> опција',
		2	=> 'Можете да изберете најмногу <strong>%d</strong> опции',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Датотеката <strong>%s</strong> повеќе не е достапна',
	'MOVE_TOPIC'				=> 'Премести тема',

	'NO_ATTACHMENT_SELECTED'=> 'Немате избрано датотека за да ја превземете или погледнете.',
	'NO_NEWER_TOPICS'		=> 'Нема нови теми во овој форум.',
	'NO_OLDER_TOPICS'		=> 'Нема постари теми во овој форум.',
	'NO_UNREAD_POSTS'		=> 'Нема нови непрочитани објави за оваа тема.',
	'NO_VOTE_OPTION'		=> 'Мора да специфицирате опција кога гласате.',
	'NO_VOTES'				=> 'Нема гласови',
	'NO_AUTH_PRINT_TOPIC'	=> 'You are not authorized to print topics.',

	'POLL_ENDED_AT'			=> 'Гласањето заврши во %s',
	'POLL_RUN_TILL'			=> 'Гласањето трае до %s',
	'POLL_VOTED_OPTION'		=> 'Гласавте за оваа опција',
	'POST_DELETED_RESTORE'	=> 'Објавата беше избришана. It can be restored.',
	'PRINT_TOPIC'			=> 'Print view',

	'QUICK_MOD'				=> 'Quick-mod tools',
	'QUICKREPLY'			=> 'Брз одговор',
	'QUOTE'					=> 'Цитат',

	'REPLY_TO_TOPIC'		=> 'Врати на тема',
	'RESTORE'				=> 'Врати',
	'RESTORE_TOPIC'			=> 'Врати тема',
	'RETURN_POST'			=> '%sВрати се на објавата%s',

	'SUBMIT_VOTE'			=> 'Гласај',

	'TOPIC_TOOLS'			=> 'Алатки',
	'TOTAL_VOTES'			=> 'Вкупни гласови',

	'UNLOCK_TOPIC'			=> 'Отклучи тема',

	'VIEW_INFO'				=> 'Детали на објавата',
	'VIEW_NEXT_TOPIC'		=> 'Следна тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Претходна тема',
	'VIEW_RESULTS'			=> 'Види резултати',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d објава',
		2	=> '%d објави',
	),
	'VIEW_UNREAD_POST'		=> 'Прва непрочитана објава',
	'VOTE_SUBMITTED'		=> 'Вашиот глас беше испратен. Your vote has been cast.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
