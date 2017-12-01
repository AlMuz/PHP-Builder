<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class AdminController extends AppController
{
  public function login()
  {
    if ($this->Auth->user()){
      $this->redirect(['controller'=>'main','action' => 'index']);
    }
    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        $this->Flash->success(__('You successfuly logged in'));
        return $this->redirect($this->Auth->redirectUrl());
      }
      $this->Flash->error(__('Invalid username or password, try again'));
    }
  }

  public function logout()
   {
       $this->Flash->success(__('You logged off'));
       return $this->redirect($this->Auth->logout());
   }
}
