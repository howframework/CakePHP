<?php

class UsersController extends AppController
{
  var $scaffold;

  public function beforeFilter()
  {
    parent::beforeFilter();
    $this->Auth->allow('register', 'login','logout');
  }

  public function login()
  {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->Session->setFlash(__('Invalid username or password, try again'),'notifications/alert', array('class' => 'alert-success' ));
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'),'notifications/alert', array('class' => 'alert-error' ));
        }
    }
  }

  public function logout()
  {
    $this->redirect($this->Auth->logout());
  }

  public function register() 
  {
    if ($this->request->is('post')) 
    {
      $this->User->create();
      if ($this->User->save($this->request->data)) {
          $this->Session->setFlash(__('Registration successful. Please login'),'notifications/alert', array('class' => 'alert-success' ));
          $this->redirect(array('action' => 'login'));
      } else {
          $this->Session->setFlash(__('The user could not be saved. Please, try again.'),'notifications/alert', array('class' => 'alert-error' ));
          unset($this->request->data['User']['password']);
          unset($this->request->data['User']['password_validate']);
      }
    }
  }

}

?>
