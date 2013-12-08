<?php
App::uses('Controller', 'Controller');
class GameController extends AppController {

	//Peach
	public function index() {
	
	}
	
	public function play() {
		//(AuthComponent::user('username'));
	}

	/** revendo **/
	public function isAuthorized($user) {
		if (!parent::isAuthorized($user)) {
			if (in_array($this->action, array('index', 'play'))){
				// All registered users can index
				return true;
			}
			if (in_array($this->action, array('edit', 'delete'))) {
				$postId = $this->request->params['pass'][0];
				return $this->Game->isOwnedBy($postId, $user['id']);
			}
		}
		return false;
	}
	
}
