<?php
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