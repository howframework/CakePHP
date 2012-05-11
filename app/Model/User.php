<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Username required'
			),
		),
		'password' => array(
			'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Password is required'
      ),
      'must_equal_validate' => array(
        'rule' => 'passwordEqualValidation',
        'message' => 'Password must be equal to password validation',
      ),
		),
		'email' => array(
			'email' => array(
        'rule' => array('email'),
        'message' => 'Must be valid email'
			),
		),
	);


  public function beforeSave() {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
  }

  public function passwordEqualValidation($check)
  {
        return $check['password'] == $this->data[$this->alias]['password_validate'];
  }
}
