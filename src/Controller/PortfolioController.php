<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;


class PortfolioController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

   public function index()
   {
     $this->loadModel('Photos');
     $this->loadModel('Categories');
    //  $categories = $this->Categories->find('all')
    //  ->where(['idCategory' => 1]);
     $categories = $this->Categories->find('list',['keyField' => 'idCategory',
      'valueField' => 'Title']);
     $this->set('categories', $categories);
   }

   public function ajaxAction()
   {

      if ($this->request->is(['ajax', 'post']))
      {
        $data = $this->request->getData();
      //   $categories = $this->Category->find('all')
      // ->where(['idCategory' => $data]);
        return $this->json($data);
      }
   }
}
