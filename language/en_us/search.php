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
	'ALL_AVAILABLE'			=> 'Сите достапни',
	'ALL_RESULTS'			=> 'Сите резултати',

	'DISPLAY_RESULTS'		=> 'Прикажи ги резултатите како',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Пронајдено %d совпаѓање',
		2	=> 'Пронајдени %d совпаѓања',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Пронајдено повеќе од %d совпаѓање',
		2	=> 'Пронајдени повеќе од %d совпаѓања',
	),

	'GLOBAL'				=> 'Глобално известување',

	'IGNORED_TERMS'			=> 'игнорирано',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следните зборови во вашето пребарување беа игнорирани заради тоа што се премногу вообичаени: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Скокни на објава',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Потребно е да се регистрирате и најавите со цел да ги видите вашите објави.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Потребно е да се регистрирате и најавите со цел да ги видите вашите непрочитани објави.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Потребно е да се регистрирате и најавите со цел да ги видите новите објави по вашата последна посета.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'You specified too many words to search for. Ве молиме не внесувајте повеќе од %1$d збор.',
		2	=> 'You specified too many words to search for. Ве молиме не внесувајте повеќе од %1$d зборови.',
	),

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %s and must not contain more than %s excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'Нема неодамнешни пребарувања.',
	'NO_SEARCH'				=> 'Извинете но немате одобрение да го користите системот на пребарување.',
	'NO_SEARCH_RESULTS'		=> 'Не беа пронајдени соодветни совпаѓања.',
	'NO_SEARCH_LOAD'		=> 'Извинете но не може да пребарувате моментално. Серверот е преоптоварен. Ве молиме обидете се повторно подоцна.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Извинете но не може да пребарувате моментално. Ве молиме обидете се пак за %d секунда.',
		2	=> 'Извинете но не може да пребарувате моментално. Ве молиме обидете се пак за %d секунди.',
	),
	'NO_SEARCH_UNREADS'		=> 'Извинете но пребарувањето непрочитани објави беше оневозможено.',
	'WORD_IN_NO_POST'		=> 'Не беа пронајдени објави бидејќи зборот <strong>%s</strong> не е содржан во ниту една објава.',
	'WORDS_IN_NO_POST'		=> 'Не беа пронајдени објави бидејќи ниту една објава не ги содржи зборовите <strong>%s</strong>.',

	'POST_CHARACTERS'		=> 'characters of posts',
	'PHRASE_SEARCH_DISABLED'	=> 'Пребарување според дадена фраза не е поддржано.',

	'RECENT_SEARCHES'		=> 'Последни пребарувања',
	'RESULT_DAYS'			=> 'Limit results to previous',
	'RESULT_SORT'			=> 'Подреди според',
	'RETURN_FIRST'			=> 'Врати прво',
	'GO_TO_SEARCH_ADV'	=> 'Оди на напредно пребарување',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Пребарана тема',
	'SEARCHED_QUERY'			=> 'Searched query',
	'SEARCH_ALL_TERMS'			=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'Search for any terms',
	'SEARCH_AUTHOR'				=> 'Пребарај автор Search for author',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * as a wildcard for partial matches.',
	'SEARCH_FIRST_POST'			=> 'Само првата објава од темата',
	'SEARCH_FORUMS'				=> 'Барај во форуми',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Одберете го форумот или форумите во кои сакате да пребарувате. Подфорумите се пребаруваат автоматски доколку не ја оневозможите опцијата "Пребарај подфоруми" долу.',
	'SEARCH_IN_RESULTS'			=> 'Пребарај ги овие резултати',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Внесете <strong>+</strong> пред зборот кој мора да биде пронајден и <strong>-</strong> пред зборот кој не мора да биде пронајден. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'Message text only',
	'SEARCH_OPTIONS'			=> 'Пребарај опции',
	'SEARCH_QUERY'				=> 'Search query',
	'SEARCH_SUBFORUMS'			=> 'Пребарај подфоруми',
	'SEARCH_TITLE_MSG'			=> 'Post subjects and message text',
	'SEARCH_TITLE_ONLY'			=> 'Наслови на теми само',
	'SEARCH_WITHIN'				=> 'Search within',
	'SORT_ASCENDING'			=> 'Растечки',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'Опаѓачки',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Post subject',
	'SORT_TIME'					=> 'Време на објавување',
	'SPHINX_SEARCH_FAILED'		=> 'Пребарувањето не е успешно: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Мора да специфицирате најмалку %d карактер од името на авторот.',
		2	=> 'Мора да специфицирате најмалку %d карактери од името на авторот.',
	),
));
