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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Најактивен форум',
	'ACTIVE_IN_TOPIC'		=> 'Најактивна тема',
	'ADD_FOE'				=> 'Додади непријател',
	'ADD_FRIEND'			=> 'Додади пријател',
	'AFTER'					=> 'Пред',

	'ALL'					=> 'Сите',

	'BEFORE'				=> 'Потоа',

	'CC_SENDER'				=> 'Пратете копија од овој мејл на себеси.',
	'CONTACT_ADMIN'			=> 'Контактирај администратор',

	'DEST_LANG'				=> 'Јазик',
	'DEST_LANG_EXPLAIN'		=> 'Изберете соодветен јазик (ако е достапен) за примачот на пораката.',

	'EDIT_PROFILE'			=> 'Измени профил',

	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.',
	'EMAIL_DISABLED'		=> 'Sorry but all email related functions have been disabled.',
	'EMAIL_SENT'			=> 'Мејлот беше испратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Мора да внесете точна еmail адреса на примачот.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Мора да внесете порака за да биде испратена.',
	'EMPTY_MESSAGE_IM'		=> 'Мора да внесете порака за да биде пратена.',
	'EMPTY_NAME_EMAIL'		=> 'Мора да го внесете точното име на примачот.',
	'EMPTY_SENDER_EMAIL'	=> 'Мора да внесете валидна email адреса.',
	'EMPTY_SENDER_NAME'		=> 'Мора да внесете име.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the email.',
	'EQUAL_TO'				=> 'Еднакво на',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another email at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Лидер на група',

	'HIDE_MEMBER_SEARCH'	=> 'Hide member search',

	'IM_ADD_CONTACT'		=> 'Додади Контакт',
	'IM_DOWNLOAD_APP'		=> 'Превземи апликација',
	'IM_JABBER'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'		=> 'Ова е автоматска порака, Ве молиме не одговарајте на истата! Порака од %1$s во %2$s.',
	'IM_MESSAGE'			=> 'Вашата порака',
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'Примач',
	'IM_SEND'				=> 'Испрати порака',
	'IM_SEND_MESSAGE'		=> 'Испрати порака',
	'IM_SENT_JABBER'		=> 'Вашата порака до %1$s беше успешно испратена.',
	'IM_USER'				=> 'Прати инстант порака',

	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'Помалку од',
	'LIST_USERS'				=> array(
		1	=> '%d корисник',
		2	=> '%d корисници',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Потребно е да се регистрирате и најавите за да можете да го видите тимот.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Потребно е да се регистрирате и најавите за да може да пристапите до листата на членови.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Потребно е да се регистрирате и најавите за да можете да пребарувате корисници.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Потребно е да се регистрирате и најавите за да можете да ги погледнете профилите.',

	'MANAGE_GROUP'			=> 'Manage Group',
	'MORE_THAN'				=> 'Повеќе од',

	'NO_CONTACT_FORM'		=> 'The board administrator contact form has been disabled.',
	'NO_CONTACT_PAGE'		=> 'The board administrator contact page has been disabled.',
	'NO_EMAIL'				=> 'Немате дозвола да пратите мејл на овој корисник.',
	'NO_VIEW_USERS'			=> 'Не сте авторизирани за да ја погледнете листата на членови или профили.',

	'ORDER'					=> 'Редослед',
	'OTHER'					=> 'Друго',

	'POST_IP'				=> 'Објавено од IP/домен',

	'REAL_NAME'				=> 'Име на примач',
	'RECIPIENT'				=> 'Примач',
	'REMOVE_FOE'			=> 'Отстрани непријател',
	'REMOVE_FRIEND'			=> 'Отстрани пријател',

	'SELECT_MARKED'			=> 'Избери означени',
	'SELECT_SORT_METHOD'	=> 'Избери метод на подредување',
	'SENDER_EMAIL_ADDRESS'	=> 'Вашата email адреса',
	'SENDER_NAME'			=> 'Вашето име',
	'SEND_ICQ_MESSAGE'		=> 'Испрати ICQ порака',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Испрати Jabber порака',
	'SEND_MESSAGE'			=> 'Порака',
	'SEND_YIM_MESSAGE'		=> 'Испрати YIM порака',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Последно активен',
	'SORT_POST_COUNT'		=> 'Број на објави',

	'USERNAME_BEGINS_WITH'	=> 'Корисничкото име започнува со',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'			=> 'User statistics',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Онлајн',
	'USER_PRESENCE'			=> 'Board presence',
	'USERS_PER_PAGE'		=> 'Users per page',

	'VIEWING_PROFILE'		=> 'Viewing profile - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Погледни Facebook профил',
	'VIEW_SKYPE_PROFILE'	=> 'Погледни Skype профил',
	'VIEW_TWITTER_PROFILE'	=> 'Погледни Twitter профил',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Погледни YouTube канал',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Погледни Google+ профил',
));
