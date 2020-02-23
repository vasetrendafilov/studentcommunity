<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Додади датотеки',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Add files to the upload queue and click the start button.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s е веќе присутна во редицата.',
	'PLUPLOAD_CLOSE'			=> 'Затвори',
	'PLUPLOAD_DRAG'				=> 'Drag files here.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Duplicate file error.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можете да прикачите датотеки со You may also attach files by dragging and dropping them in the message box.',
	'PLUPLOAD_ERR_INPUT'		=> 'Failed to open input stream.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Failed to move uploaded file.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Failed to open output stream.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Датотеката е премногу голема:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'File count error.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Невалидна екстензија на датотеката:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime ran out of available memory.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upload URL might be wrong or does not exist.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'File extension error.',
	'PLUPLOAD_FILE'				=> 'Датотека: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Датотека: %s, големина: %d, максимална големина на датотека: %d',
	'PLUPLOAD_FILENAME'			=> 'Име на датотека',
	'PLUPLOAD_FILES_QUEUED'		=> '%d files queued',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Генеричка грешка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP грешка.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Форматот на сликата е грешен или пак не е поддржан.',
	'PLUPLOAD_INIT_ERROR'		=> 'Иницијална грешка.',
	'PLUPLOAD_IO_ERROR'			=> 'IO error.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Безбедносна грешка.',
	'PLUPLOAD_SELECT_FILES'		=> 'Избери датотека',
	'PLUPLOAD_SIZE'				=> 'Големина',
	'PLUPLOAD_SIZE_ERROR'		=> 'File size error.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Започни прикачување',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start uploading queue',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stop upload',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop current upload',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Прикачени %d/%d датотеки',
));
