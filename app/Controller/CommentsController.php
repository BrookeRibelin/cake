<?php

class CommentsController extends AppController {
	public $components = array('Session');

	public function add($post_id = null) {
    	if ($this->request->is('post')) {
        	$this->Comment->set(array('post_id'=>$post_id));
        	if ($this->Comment->save($this->request->data)) {
            	$this->Session->setFlash(__('Your comment has been added.'));
            	//$this->redirect(array('action' => 'index'));
            	$this->redirect(array('controller' => 'posts', 'action' => 'view', $post_id));
        	} else {
            	$this->Session->setFlash(__('Unable to add your comment.'));
        	}
    	}
	}
}