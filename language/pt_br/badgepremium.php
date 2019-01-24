<?php
/**
*
* BBAwards premium rule PAK.
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
* Brazilian Portuguese translation by eunaumtenhoid [2018][ver 1.1.0] (https://github.com/phpBBTraducoes)
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BADGE_TYPE_BOOKMARKED'			=> 'Favoritou',
	'BADGE_TYPE_BBPOINTS'			=> 'BBpontos',
	'BADGE_TYPE_CROSS_BADGE'		=> 'Cruzar Emblemas',
	'BADGE_TYPE_POLLS'				=> 'Enquetes',
	'BADGE_TYPE_REPORTS'			=> 'Denúncias',
	'BADGE_TYPE_SUBSCRIBED'			=> 'Subscreveu',
	'BADGE_TYPE_TOPICS'				=> 'Tópicos',

	'BADGEAUTO_TYPE_BOOKMARKED'		=> 'Prêmio de Emblema Favoritou',
	'BADGEAUTO_TYPE_BBPOINTS'		=> 'Prêmio de Emblema BBpontos',
	'BADGEAUTO_TYPE_CROSS_BADGE'	=> 'Prêmio de Emblema Cruzar Emblemas',
	'BADGEAUTO_TYPE_POLLS'			=> 'Prêmio de Emblema Enquetes',
	'BADGEAUTO_TYPE_REPORTS'		=> 'Prêmio de Emblema Denúncias',
	'BADGEAUTO_TYPE_SUBSCRIBED'		=> 'Prêmio de Emblema Subscreveu',
	'BADGEAUTO_TYPE_TOPICS'			=> 'Prêmio de Emblema Tópicos',

	'BOOKMARKED_EXPLAIN'			=> 'Emblemas de prêmio para autores de tópicos cujo tópico é favoritado por membros',
	'BBPOINTS_EXPLAIN'				=> 'Emblemas de prêmio para usuários com BBpontos',
	'CROSS_BADGE_EXPLAIN'			=> 'Emblemas de prêmio para regras específicas',
	'POLLS_EXPLAIN'					=> 'Emblemas de prêmio para pôstadores que fizeram uma enquete',
	'REPORTS_EXPLAIN'				=> 'Emblemas de prêmio para denúnciadores',
	'SUBSCRIBED_EXPLAIN'			=> 'Emblemas de prêmio para autores de tópicos cujo tópico foi subscrito por membros',
	'TOPICS_EXPLAIN'				=> 'Emblemas de prêmio para autores de tópicos',

	'ACP_BADGE_RULESLIST'			=> 'Lista de regras',
	'ACP_BADGE_RULESLIST_EXPLAIN'	=> 'Selecione várias regras segurando CTRL e clicando em.',
	'BADGE_PREMIUM_NOTICE'			=> '<div><p>As configurações para esta extensão estão em <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
));
