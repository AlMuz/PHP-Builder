<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('idUser');
        $this->setPrimaryKey('idUser');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idUser')
            ->allowEmpty('idUser', 'create');

        $validator
            ->scalar('Login')
            ->requirePresence('Login', 'create')
            ->notEmpty('Login');

        $validator
            ->scalar('Password')
            ->requirePresence('Password', 'create')
            ->notEmpty('Password');

        $validator
            ->dateTime('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        return $validator;
    }
}
