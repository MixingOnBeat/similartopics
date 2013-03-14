<?php
/**
 *
 * info_acp_similiar_topics [Swedish]
 * 
 * @package language
 * @copyright (c) 2010 Matt Friedman (Translated by Aros via phpbb.com)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PST_TITLE_ACP'		=> '“Liknande Trådar”',
	'PST_TITLE'			=> 'Precise Similar Topics II',
	'PST_LEGEND1'		=> 'Generella Inställningar',
	'PST_ENABLE'		=> 'Aktivera Similar Topics',
	'PST_LEGEND2'		=> 'Ladda inställningar',
	'PST_LIMIT'			=> 'Antal liknande trådar som ska visas',
	'PST_LIMIT_EXPLAIN'	=> 'Här anger du antalet liknande trådar som skall visas. Förinställt värde är 5 st.',
	'PST_TIME'			=> 'Sökperiod',
	'PST_TIME_EXPLAIN'	=> 'Det här alternativet möjliggör inställning av sökperioden. Exempel, om du anger “5 dagar” kommer systemet endast att visa liknande trådar från de 5 senaste dagarna. Det förinställda värdet är 1 år.',	
	'PST_YEARS'			=> 'År',
	'PST_MONTHS'		=> 'Månader',
	'PST_WEEKS'			=> 'Veckor',
	'PST_DAYS'			=> 'Dagar',
	'PST_CACHE'			=> 'Lagring av liknande trådar',
	'PST_CACHE_EXPLAIN'	=> 'Lagrade trådar upphör efter denna tid, inställt i sekunder. Ange 0 om du vill stänga av lagring av liknande trådar.',
	'PST_LEGEND3'		=> 'Foruminställningar',
	'PST_NOSHOW_LIST'	=> 'Visa inte i',
	'PST_NOSHOW_TITLE'	=> 'Visa inte liknande trådar i',
	'PST_IGNORE_SEARCH'	=> 'Sök inte i',
	'PST_IGNORE_TITLE'	=> 'Sök inte efter liknande trådar i',
	'PST_ADVANCED'		=> 'Avancerade',
	'PST_ADVANCED_TITLE'=> 'Klicka för att ställa in avancerade inställningar',
	'PST_ADVANCED_EXP'	=> 'Här kan du välja specifika kategorier att hämta liknande trådar från. Endast liknande trådar från de kategorier du väljer här kommer att visas i <strong>%s</strong>.<br /><br />Välj inga specifika kategorier om du vill visa liknande trådar från alla kategorier i detta forum.',
	'PST_DESELECT_ALL'	=> 'Avmarkera alla',
	'PST_LEGEND4'		=> 'Valfria inställningar',
	'PST_WORDS'			=> 'Särskilda ord som ska ignoreras',
	'PST_WORDS_EXPLAIN'	=> 'Lägg till särskilda ord på forumet som skall ignoreras vid sökningen av liknande trådar. (Obs: Ord som betraktas som vanliga ord är redan undantagna). Separera varje ord med ett mellanslag. Ingen hänsyn tas till versaler eller gemenser. Max. 255 tecken.',
	'PST_SAVED'			=> 'Inställningarna har uppdaterats',
	'PST_FORUM_INFO'	=> '“Visa inte i” :  Liknande trådar visas inte i valda kategorier.<br />“Sök inte i” :  Sökning efter liknande trådar sker inte i valda kategorier.',
	'PST_WARNING'		=> 'Similar Topics fungerar inte på ditt forum. Similar Topics kräver MySQL 4 eller MySQL 5.',
	'PST_LOG_MSG'		=> '<strong>Ändrade inställningar</strong>',
));

// For permissions
$lang = array_merge($lang, array(
	'acl_u_similar_topics'	=> array('lang' => 'Kan se “Liknande trådar”', 'cat' => 'misc'),
));
