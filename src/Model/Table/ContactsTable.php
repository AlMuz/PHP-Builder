<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ContactsTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contacts');
        $this->setDisplayField('idContact');
        $this->setPrimaryKey('idContact');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idContact')
            ->allowEmpty('idContact', 'create');

        $validator
            ->scalar('Name')
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->scalar('Email')
            ->requirePresence('Email', 'create')
            ->notEmpty('Email');

        $validator
            ->integer('Telephone')
            ->allowEmpty('Telephone');

        $validator
            ->scalar('Text')
            ->requirePresence('Text', 'create')
            ->notEmpty('Text');

        $validator
            ->dateTime('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        return $validator;
    }
}
