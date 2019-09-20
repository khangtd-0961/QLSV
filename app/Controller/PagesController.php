<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
//  * @var array
//  */
// 	public $uses = array();

// /**
//  * Displays a view
//  *
//  * @return CakeResponse|null
//  * @throws ForbiddenException When a directory traversal attempt.
//  * @throws NotFoundException When the view file could not be found
//  *   or MissingViewException in debug mode.
//  */
// 	public function display() {
// 		$path = func_get_args();

// 		$count = count($path);
// 		if (!$count) {
// 			return $this->redirect('/');
// 		}
// 		if (in_array('..', $path, true) || in_array('.', $path, true)) {
// 			throw new ForbiddenException();
// 		}
// 		$page = $subpage = $title_for_layout = null;

// 		if (!empty($path[0])) {
// 			$page = $path[0];
// 		}
// 		if (!empty($path[1])) {
// 			$subpage = $path[1];
// 		}
// 		if (!empty($path[$count - 1])) {
// 			$title_for_layout = Inflector::humanize($path[$count - 1]);
// 		}
// 		$this->set(compact('page', 'subpage', 'title_for_layout'));

// 		try {
// 			$this->render(implode('/', $path));
// 		} catch (MissingViewException $e) {
// 			if (Configure::read('debug')) {
// 				throw $e;
// 			}
// 			throw new NotFoundException();
// 		}
// 	}
	public $helpers = array('Html', 'Form','Flash');
	public $components = array('Flash');
	public $name = 'Pages';

	public function display() {
        $this->set('page', $this->Page->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid page'));
        }

        $post = $this->Page->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid page'));
        }
        $this->set('page', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Page->create();
            if ($this->Page->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'display'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
	}

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Page->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
			);
		}
	
		return $this->redirect(array('action' => 'display'));
	}

	public function edit($id = NULL){
	
		$post = $this->Page->findById($id);

	
		if ($this->request->is(array('post', 'put'))) {
			$this->Page->id = $id;
			if ($this->Page->set($this->request->data)) {
				$this->Flash->success(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'display'));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}
	
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
}
