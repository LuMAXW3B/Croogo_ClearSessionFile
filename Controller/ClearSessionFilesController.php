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

App::uses('ClearSessionFilesAppController', 'ClearSessionFile.Controller');

class ClearSessionFilesController extends ClearSessionFilesAppController {
	public $uses = array('ClearSessionFile.ClearSessionFile');
	public function admin_clear() { 
		$this->ClearSessionFile->delete();
		$this->Session->setFlash(__d('clear_session_file', 'Session files have been deleted, please login.'), 'default', array('class' => 'success'));
		return $this->redirect(DS . 'admin');
	}
}