<?php
/** 
*
* 
* @package language
* @version $Id: acp_profile_control.php, v 1.0.0 2009/11/21 12:53:34  Exp $
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
		'ACP_PROFILE_CONTROL'					=> 'Profil alanları',
		'ACP_PROFILE_CONTROL_EXPLAIN'			=> 'Bu panelde profil alanlarını etkinleştirebilir veya kullanım dışı yapabilirsiniz. Aynı zamanda, profil alanlarını kayıtta gösterme, kayıtta ve kullanıcı panelinde zorunlu yapabilirsiniz. Bir profil alanı zorunlu ise, kayıt ekranında da gösterilir.',
		'ACP_PROFILE_FIELDS'					=> 'Profil alanları kontrolü',
		'PFCM_ENABLE'							=> 'Profil alanları kontrol eklentisini etkinleştir',
		'PFCM_ENABLE_EXPLAIN'					=> 'Eklentinin kapatılması panoda standart profil alanları özelliklerinin kullanılmasını sağlar.',
		'REQUIRED'								=> 'Zorunlu',
		'PROFILE_UCP_REGS'						=> 'Kayıtta göster',		
		'ACTIVATE_FIRST'						=> 'Önce etkinleştirin',
		
		'PROFILE_FIELD_NAME'					=> 'Profil alanı adı',
		'PROFILE_FIELD_NAME_EXPLAIN'			=> 'Bu ekranda standart profil alanlarını ayarlayabilir, kayıtta gösterebilir, kayıtta ve kullanıcı panelinde doldurulması zorunlu yapabilirsiniz. Lütfen dikkat edin, profil alanı zorunlu ise kayıtta da gösterilir, bununla beraber kullanıcı izinleri ayarı ile profil alanını kullanıcı panelinden gizleyebilirsiniz.',
		'DISPLAY_ON_PROFILE'					=> 'Profilde göster',
		'DISPLAY_ON_PROFILE_EXPLAIN'			=> 'Bu ayar varsayılan durumdur, kullanıcı profil alanını sadece kullanıcı paneli profil sayfasında görür.',
		'DISPLAY_ON_REGISTRATION'				=> 'Kayıt ekranında göster',
		'DISPLAY_ON_REGISTRATION_EXPLAIN'		=> 'Bu seçenek açıksa, profil alanı kullanıcı paneli yanı sıra kayıt ekranında da gösterilir.',
		'REQUIRED_PROFILE_FIELD'				=> 'Doldurulması zorunlu ve kayıt ekranında da göster',
		'REQUIRED_PROFILE_FIELD_EXPLAIN'		=> 'Profil alanının kullanıcı veya yönetici tarafından zorunlu doldurulmasını sağlar. Bir profil alanı zorunlu ise, kullanıcı paneli yanısıra kayıt ekranında da gösterilir.',

		'PROFILE_UPDATE_ENABLE'					=> 'Zorunlu profil alanlarını güncellemeyi etkinleştir',
		'PROFILE_UPDATE_ENABLE_EXPLAIN'			=> 'Etkinleştirilince kayıtta ve profilde zorunlu olan profil alanlarını doldurmak üzere kullanıcı paneline yönlendirir.',
		'PROFILE_UPDATE_REMINDER'				=> 'Profil alanlarını doldurmayı hatırlat',
		'PROFILE_UPDATE_REMINDER_EXPLAIN'		=> 'Hatırlatıcıyı yeniden başlatmak, kullanıcıları zorunlu doldurulmamış profil alanlarını doldurmak üzere kullanıcı paneline yönlendirir.',
		'RESET_PROFILE_REMINDER'				=> 'Profil alanları hatırlatıcı yeniden çalıştırıldı',
		'UCP_PROFILE_UPDATE'					=> 'Lütfen profil alanlarınızı güncelleyin.',
		'RETURN_UCP'							=> '<br />%sKullanıcı paneline erişim için tıklayın%s',

	));

?>