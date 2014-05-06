<?php
/** 
*
* 
* @package language
* @version $Id: umil_profile_control_install.php, v 1.0.0 2009/11/21 12:53:34  Exp $
* @copyright (c) mtrs
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

$lang = array_merge($lang, array(
		'INSTALL_ACP_PROFILE_FIELDS'			=> 'Profil Alanları Kontrol eklentisini kur',
		'INSTALL_ACP_PROFILE_FIELDS_CONFIRM'	=> 'Profil Alanları Kontrol eklentisini kurmaya hazır mısınız?',
		'ACP_PROFILE_FIELDS'					=> 'Profil Alanları Kontrol',
		'ACP_PROFILE_FIELDS_EXPLAIN'			=> 'Profil Alanları Kontrol eklentisi veritabanı değişikliklerini UMIL otomatik yöntemiyle kur.',
		'UNINSTALL_ACP_PROFILE_FIELDS'			=> 'Profil Alanları Kontrol eklentisini kaldır',
		'UNINSTALL_ACP_PROFILE_FIELDS_CONFIRM'	=> 'Profil Alanları Kontrol eklentisini kaldırmaya hazır mısınız? Bu eklenti tarafından yapılan tüm ayarlar ve eklenen veri kaldırılacaktır!',
		'UPDATE_ACP_PROFILE_FIELDS'				=> 'Profil Alanları Kontrol eklentisini güncelle',
		'UPDATE_ACP_PROFILE_FIELDS_CONFIRM'		=> 'Profil Alanları Kontrol eklentisini güncellemeye hazır mısınız?',

	));

?>