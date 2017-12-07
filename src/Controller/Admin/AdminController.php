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
        $this->Flash->success(__('Вы успешно вошли в аккаунтю'));
        return $this->redirect($this->Auth->redirectUrl());
      }
      $this->Flash->error(__('Неправильные данные, попробуйте снова.'));
    }
  }

  public function logout()
   {
       $this->Flash->success(__('Вы вышли из аккаунта'));
       return $this->redirect($this->Auth->logout());
   }
}
