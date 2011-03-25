<?php
/**
*
* phpbb [Português Brasileiro]
*
* @package quickinstall
* @version $Id$
* @copyright (c) 2007, 2008 eviL3
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Traduzido por: <a href="http://www.suportephpbb.com.br">Suporte phpBB</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007
	'USER_LANG'			=> 'pt-br',
	'USER_LANG_LONG'	=> 'Português Brasileiro',

	'datetime'			=> array(
		'TODAY'		=> 'Hoje',
		'TOMORROW'	=> 'Amanhã',
		'YESTERDAY'	=> 'Ontem',

		'Sunday'	=> 'Domingo',
		'Monday'	=> 'Segunda-feia',
		'Tuesday'	=> 'Terça-feira',
		'Wednesday'	=> 'Quarta-feira',
		'Thursday'	=> 'Quinta-feira',
		'Friday'	=> 'Sexta-feira',
		'Saturday'	=> 'Sábado',

		'Sun'		=> 'Dom', 
		'Mon'		=> 'Seg', 
		'Tue'		=> 'Ter', 
		'Wed'		=> 'Qua', 
		'Thu'		=> 'Qui', 
		'Fri'		=> 'Sex', 
		'Sat'		=> 'Sáb', 

		'January'	=> 'Janeiro', 
		'February'	=> 'Fevereiro', 
		'March'		=> 'Março', 
		'April'		=> 'Abril', 
		'May'		=> 'Maio', 
		'June'		=> 'Junho', 
		'July'		=> 'Julho', 
		'August'	=> 'Agosto', 
		'September' => 'Setembro', 
		'October'	=> 'Outubro', 
		'November'	=> 'Novembro', 
		'December'	=> 'Dezembro', 

		'Jan'		=> 'Jan', 
		'Feb'		=> 'Fev', 
		'Mar'		=> 'Mar', 
		'Apr'		=> 'Abr', 
		'May_short'	=> 'Mai',	// Short representation of "May". May_short used because in english the short and long date are the same for May.		 
		'Jun'		=> 'Jun', 
		'Jul'		=> 'Jul', 
		'Aug'		=> 'Ago', 
		'Sep'		=> 'Set', 
		'Oct'		=> 'Out', 
		'Nov'		=> 'Nov', 
		'Dec'		=> 'Dez', 
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D M d, Y h:i', // Mon Jan 01, 2007 1:37 pm

));

?>