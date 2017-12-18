<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categories');
        $this->setDisplayField('idCategory');
        $this->setPrimaryKey('idCategory');
        $this->hasMany('Photos');

    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idCategory')
            ->allowEmpty('idCategory', 'create');

        $validator
            ->scalar('Title')
            ->requirePresence('Title', 'create')
            ->notEmpty('Title');

        return $validator;
    }
}
