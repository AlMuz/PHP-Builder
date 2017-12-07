<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class ContactsController extends AppController
{

    public function index()
    {
        $contacts = $this->paginate($this->Contacts);

        $this->set(compact('contacts'));
        $this->set('_serialize', ['contacts']);
    }

    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => []
        ]);

        $this->set('contact', $contact);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success(__('Данные контактной формы удалены.'));
        } else {
            $this->Flash->error(__('Упс, что то пошло не так.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
