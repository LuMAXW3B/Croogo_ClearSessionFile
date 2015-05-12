<?php
/**
 * ClearSessionFile
 *
 * @category Controller
 * @package  ClearSessionFile
 * @version  2.x
 * @author   Lukas Marks <info@lumax-web.de>
 * @link     http://www.lumax-web.de/
 */
App::uses('ClearSessionFilesAppController', 'ClearSessionFile.Controller');

class ClearSessionFilesController extends ClearSessionFilesAppController {
	public $uses = array('ClearSessionFile.ClearSessionFile');
	public function admin_clear() { 
		$this->ClearSessionFile->delete();
		$this->Session->setFlash(__d('clear_session_file', 'Session files have been deleted, please login.'), 'default', array('class' => 'success'));
		$this->redirect('/admin');
	}
}