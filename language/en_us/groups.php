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
	'ALREADY_DEFAULT_GROUP'		=> 'Избраната група е вашата основна група.',
	'ALREADY_IN_GROUP'			=> 'Веќе сте член на избраната група.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Имате испратено барање за придружување на избраната група.',

	'CANNOT_JOIN_GROUP'			=> 'Не можете да и се придружите на оваа група. Можете да се придружите само на отворени и слободно отворени групи.',
	'CANNOT_RESIGN_GROUP'		=> 'You are not able to resign from this group. You are only able to resign from open and freely open groups.',
	'CHANGED_DEFAULT_GROUP'		=> 'Успешно променета основна група.',

	'GROUP_AVATAR'						=> 'Аватар на групата',
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'Затворена',
	'GROUP_DESC'						=> 'Опис на групата',
	'GROUP_HIDDEN'						=> 'Скриена',
	'GROUP_INFORMATION'					=> 'Usergroup information',
	'GROUP_IS_CLOSED'					=> 'Ова е затворена група, нови членови може да се придружат само преку покана од лидерот на групата.',
	'GROUP_IS_FREE'						=> 'Ова е слободно отворена група, сите нови членови се добредојдени.',
	'GROUP_IS_HIDDEN'					=> 'Ова е скриена група, само членовите на истата можат да го разгледаат нејзиното членоство.',
	'GROUP_IS_OPEN'						=> 'Ова е отворена група, членовите може да аплицираат за да се придружат.',
	'GROUP_IS_SPECIAL'					=> 'Ова е специјална група, специјалните групи се управувани од страна на администраторите.',
	'GROUP_JOIN'						=> 'Придружи се на групата',
	'GROUP_JOIN_CONFIRM'				=> 'Дали сте сигурни дека сакате да и се придружите на избраната група?',
	'GROUP_JOIN_PENDING'				=> 'Барање за придружување на група',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Дали сте сигурни дека сакате да испратите барање за придружување на избраната група?',
	'GROUP_JOINED'						=> 'Успешно и се придруживте на избраната група.',
	'GROUP_JOINED_PENDING'				=> 'Барањето за членство во групата беше успешно испратено. Ве молиме почекајте лидерот на групата да го одобри вашето членство.',
	'GROUP_LIST'						=> 'Manage users',
	'GROUP_MEMBERS'						=> 'Членови на групата',
	'GROUP_NAME'						=> 'Име на групата',
	'GROUP_OPEN'						=> 'Отворена',
	'GROUP_RANK'						=> 'Ранг на групата',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Напушти ја групата ***Resign group membership',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Дали сте сигурни дека сакате да ја напуштите избраната група?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Успешно бевте отстранети од избраната група.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_TYPE'						=> 'Тип на група',
	'GROUP_UNDISCLOSED'					=> 'Скриена група',
	'FORUM_UNDISCLOSED'					=> 'Модерирање скриен/и форум(и)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Потребно е да се најавите за да ги видите деталите на групата.',

	'NO_LEADERS'					=> 'Не сте лидер на ниту една група.',
	'NOT_LEADER_OF_GROUP'			=> 'Бараната акција не може да се изврши бидејќи не сте лидер на избраната група.',
	'NOT_MEMBER_OF_GROUP'			=> 'Бараната акција не може да се изврши бидејќи не сте член на избраната група или пак вашето членство не е сеуште одобрено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Не е можно да ја напуштите вашата основна група.',

	'PRIMARY_GROUP'		=> 'Примарна група',

	'REMOVE_SELECTED'		=> 'Отстрани избрани',

	'USER_GROUP_CHANGE'			=> 'Од “%1$s” група до “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Demote leadership',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));
