<?php

/**
* @package VC
* @version $Id: peoplesign_utilities.php,v 1.0.13 2011/01/09 15:00 hookerb Exp$
* @copyright (c) 2008-2010 Myricomp LLC
* @license http://opensource.org/licenses/gpl-license.php GNU Public License, v2
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* The purpose of this file is to abstract out the implementation of individual mechanisms between
* web frameworks.  Specifically to take advantage of particular phpBB3 functionality that does not exist elsewhere.
*/

function get_post_var($variable_name, $variable_type)
{

	$return = request_var($variable_name, $variable_type);
	$return = str_replace('&amp;', '&', $return);

	return $return;
}

function print_error ($message)
{
	error_log(ERROR_PREAMBLE . $message);

	return;
}

?>
