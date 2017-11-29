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
           			'loginRedirect' => ['controller' => 'admin',
                 'action' => 'index'],
           			'logoutRedirect' => '/',
           			'authenticate' => [
           				'Form' => [
           					'fields' => [
           						'username' => 'Login',
           						'password' => 'Password'
           					],
           					'userModel' => 'User'
           				]
           			],
           			'storage' => [
           				'className' => 'Session',
           				'key' => 'Auth.User',
           			]
           		]);
    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
