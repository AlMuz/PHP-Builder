<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ServicesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function index()
    {

    }
}
