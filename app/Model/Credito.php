<?php
App::uses('AuthComponent', 'Controller/Component');
class Credito extends AppModel {
    public $name = 'Credito';
    public $validate = array(
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('gamer')),
                'message' => 'Perfil invalido',
                'allowEmpty' => false
            )
        )
    );

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}