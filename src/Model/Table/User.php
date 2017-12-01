<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        // setting table from db to this model
        $this->setTable('Users');
        $this->setDisplayField('idUser');
        $this->setPrimaryKey('idUser');
    }

}
