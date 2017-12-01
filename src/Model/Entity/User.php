<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity
{

    protected $_accessible = [
        'Login' => true,
        'Password' => true,
        'Created' => true
    ];

    protected function _setPassword($password)
   {
       if (strlen($password) > 0) {
           return (new DefaultPasswordHasher)->hash($password);
       }
   }
}
