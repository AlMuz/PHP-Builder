<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ContactsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function index()
    {
      $contact = $this->Contacts->newEntity();
      if ($this->request->is('post')) {
          $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
          if ($this->Contacts->save($contact)) {
              $this->Flash->success(__('Форма отправлена, мы свяжемся с вами.'));
              return $this->redirect(['controller'=>'Pages','action' => 'index']);
          }
          $this->Flash->error(__('Что то не так, попробуйте еще раз!'));
      }

    }

}
