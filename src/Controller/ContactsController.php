<?php
namespace App\Controller;

use App\Controller\AppController;

class ContactsController extends AppController
{
    public function index()
    {
       if ($this->request->is('post')) {
         debug($this->request->data);
       }

    }

}
