<?php
/** 
*
* 
* @package language
* @version $Id: permissions_profile_control.php, v 1.0.0 2009/11/21 12:53:34  Exp $
* @copyright (c) mtrs 2009
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

$lang['permission_cat']['profile_fields'] = 'Profil Alanları';
// Adding the permissions
	$lang = array_merge($lang, array(
		'acl_u_ucp_icq'				=> array('lang' => 'Icq değiştirebilir', 'cat' => 'profile_fields'),	
		'acl_u_ucp_aim'				=> array('lang' => 'Aim değiştirebilir', 'cat' => 'profile_fields'),	
		'acl_u_ucp_msnm'			=> array('lang' => 'Msn değiştirebilir', 'cat' => 'profile_fields'),
		'acl_u_ucp_yim'				=> array('lang' => 'Yim değiştirebilir', 'cat' => 'profile_fields'),	
		'acl_u_ucp_jabber'			=> array('lang' => 'Jabber değiştirebilir', 'cat' => 'profile_fields'),
		'acl_u_ucp_website'			=> array('lang' => 'Websitesini değiştirebilir', 'cat' => 'profile_fields'),	
		'acl_u_ucp_location'		=> array('lang' => 'Yer bilgisini değiştirebilir', 'cat' => 'profile_fields'),
		'acl_u_ucp_occupation'		=> array('lang' => 'Meslek bilgisini değiştirebilir', 'cat' => 'profile_fields'),	
		'acl_u_ucp_interests'		=> array('lang' => 'İlgi alanları bilgisini değiştirebilir', 'cat' => 'profile_fields'),
		'acl_u_ucp_birthday'		=> array('lang' => 'Doğum günü bilgisini değiştirebilir', 'cat' => 'profile_fields'),		
	));

?>