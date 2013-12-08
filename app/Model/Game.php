<?php
App::uses('AuthComponent', 'Controller/Component');
class Game extends AppModel {
    public $name = 'Game';
    
	public function isOwnedBy($game, $user) {
		return $this->field('id', array('id' => $game, 'user_id' => $user)) === $game;
	}

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}