<?php
/**
*
* @package Precise Similar Topics
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\similartopics\acp;

/**
* @package module_install
*/
class similar_topics_info
{
	function module()
	{
		return array(
			'filename'	=> '\vse\similartopics\acp\similar_topics_module',
			'title'		=> 'PST_TITLE_ACP',
			'modes'		=> array(
				'settings'	=> array('title' => 'PST_SETTINGS', 'auth' => 'ext_vse/similartopics && acl_a_board', 'cat' => array('PST_TITLE_ACP')),
			),
		);
	}
}
