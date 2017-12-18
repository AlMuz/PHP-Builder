<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
                 'loginAction' => [
                   'controller' => 'admin',
                   'prefix' => 'admin',
                   'action' => 'login'],
           			'loginRedirect' => ['controller' => 'main',
                'prefix' => 'admin',
                 'action' => 'index'],
           			'logoutRedirect' => '/',
           			'authenticate' => [
           				'Form' => [
           					'fields' => [
           						'username' => 'Login',
           						'password' => 'Password'
           					],
           					'userModel' => 'Users'
           				]
           			],
           			'storage' => [
           				'className' => 'Session',
           				'key' => 'Auth.Users',
           			]
           		]);
    }
    public function beforeFilter(Event $event)
        {

          if($this->Auth->user()){
            $this->set('loggedIn',true);
          }else{
            $this->set('loggedIn',false);
          }
          //show in prefix admin - admin layout and check access to admin panel
          if ($this->request->getParam('prefix') == 'admin') {
            if($this->Auth->user()){
              $this->viewBuilder()->layout('admin');
              $authUser = $this->Auth->user();

            }
          } else {
          	$this->viewBuilder()->layout('default');
          }

    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function json($data)
    {
        $this->response->type('json');
        $this->response->body(json_encode($data));
        return $this->response;
    }    
}
