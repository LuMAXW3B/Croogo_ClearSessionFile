<?php
/**
 * ClearSessionFile
 *
 * @category Model
 * @package  ClearSessionFile
 * @version  2.x
 * @author   Lukas Marks <info@lumax-web.de>
 * @link     http://www.lumax-web.de/
 */
App::uses('ClearSessionFileAppModel', 'ClearSessionFile.Model');

class ClearSessionFile extends ClearSessionFileAppModel {

    public $name = 'ClearSessionFile';
    public $useTable = false;

    public function delete($path = null, $recursive = true) {

        if (!$path) { $path = TMP . 'sessions' . DS; }

        $dirItems = scandir($path);
        $ignore = array('.', '..');

        foreach ($dirItems AS $dirItem) {
            
            if (in_array($dirItem, $ignore)) {
                continue;
            }

            if (is_dir($path . $dirItem) && $recursive) {
                $this->delete($path . $dirItem . DS);
            } elseif (substr($dirItem, 0, 5) == 'sess_') {
                unlink($path . $dirItem);
            }
        }
    }
}