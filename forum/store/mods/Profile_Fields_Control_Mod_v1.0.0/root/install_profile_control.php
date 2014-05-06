<?php
/**
*
* @author mtrs (mtrs) trst2007@gmail.com 
* @package umil
* @version $Id install_profile_control.php 1.0.0 2009-12-12 17:29:18GMT mtrs $
* @copyright (c) 2009 mtrs 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'ACP_PROFILE_FIELDS';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'pfcm_version';

$language_file = 'mods/umil_profile_control_install';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(

	// Version 0.0.1
	'0.0.1'	=> array(
		//Add config
		'config_add' => array(
			array('ucp_icq', '1'),
			array('ucp_aim', '1'),
			array('ucp_msnm', '1'),
			array('ucp_yim', '1'),
			array('ucp_jabber', '1'),
			array('ucp_website', '1'),
			array('ucp_location', '1'),
			array('ucp_occupation', '1'),
			array('ucp_interests', '1'),
		),	
	),
	// Version 0.0.2
	'0.0.2'	=> array(
		// Lets add a config setting
		'config_add' => array(
			array('ucp_reg_birthday', '0'),
		),
		// Alright, now lets add some modules to the ACP
		'module_add' => array(
			// Now we will add the modules manually
            array('acp', 'ACP_CAT_USERS', array(
					'module_basename'   => 'profile_control',
					'module_langname'   => 'ACP_PROFILE_CONTROL',
					'module_mode'       => 'profile_control',
					'module_auth'       => 'acl_a_profile',
				),
			),
		),	
	),
	
	// Version 0.0.3
	'0.0.3'	=> array(
	
		// Now to add some permission settings
		'permission_add' => array(
			array('u_ucp_icq', true),
			array('u_ucp_aim',true),
			array('u_ucp_msnm', true),
			array('u_ucp_yim', true),
			array('u_ucp_jabber',true),
			array('u_ucp_website', true),
			array('u_ucp_location', true),
			array('u_ucp_occupation',true),
			array('u_ucp_interests', true),	
			array('u_ucp_birthday', true),			
		),
		
		// How about we give some default permissions then as well?
		'permission_set' => array(
			// Global Role permissions
			array('ROLE_USER_STANDARD', array('u_ucp_icq', 'u_ucp_aim', 'u_ucp_msnm', 'u_ucp_yim', 'u_ucp_jabber', 'u_ucp_website', 'u_ucp_location', 'u_ucp_occupation', 'u_ucp_interests', 'u_ucp_birthday')),
		),
	),	

	// Version 0.0.4
	'0.0.4'	=> array(
		// Nothing changed in this version.
	),	
	
	// Version 0.0.5
	'0.0.5'	=> array(
		// Lets add a config setting
		'config_add' => array(
			array('ucp_prof_rem_enable', false),
		),
		
		// Lets add a new column
		'table_column_add' => array(
			array('phpbb_users', 'user_profile_reminder', array('BOOL', 1)),
		),	
	),	
	
	// Version 0.0.6
	'0.0.6'	=> array(
		// Nothing changed in this version.
	),	
	
	// Version 0.0.7
	'0.0.7'	=> array(
		// Lets add a config setting
		'config_add' => array(
			array('pfcm_enable', false),
		),
	),
	
	// Version 0.0.8
	'0.0.8'	=> array(
		// Nothing changed in this version.
	),	

	// Version 0.0.9
	'0.0.9'	=> array(
		// Nothing changed in this version.
	),
	
	// Version 1.0.0-RC1
	'1.0.0-RC1'	=> array(
		// Nothing changed in this version.
	),

	// Version 1.0.0
	'1.0.0'	=> array(
		
		//Add group permission in case no role selected for registered users	
		'permission_set' => array(
			// Global Group permissions
			array('REGISTERED', array('u_ucp_icq', 'u_ucp_aim', 'u_ucp_msnm', 'u_ucp_yim', 'u_ucp_jabber', 'u_ucp_website', 'u_ucp_location', 'u_ucp_occupation', 'u_ucp_interests', 'u_ucp_birthday'), 'group'),			
		),
	),	

);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);


?>