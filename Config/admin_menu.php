<?php
/**
 * ClearSessionFile
 * Copyright (c) Lukas Marks (http://lumax-web.de/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Lukas Marks (http://lumax-web.de/)
 * @since         0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Admin menu (navigation)
 */
CroogoNav::add('settings.children.clear_session_file', array(
	'icon' => 'trash',
	'title' => __d('clear_session_file', 'Clear Session'),
	'url' => array(
		'admin' => true,
		'plugin' => 'clear_session_file',
		'controller' => 'clear_session_files',
		'action' => 'clear'
	),
	'weight' => 300,
	'children' => array(
	),
));