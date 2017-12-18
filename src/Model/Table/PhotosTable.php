<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PhotosTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('photos');
        $this->setDisplayField('idPhoto');
        $this->setPrimaryKey('idPhoto');
        $this->belongsTo('categories',[
         'foreignKey' => 'idCategory',
         'joinType' => 'INNER'
       ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idPhoto')
            ->allowEmpty('idPhoto', 'create');

        $validator
            ->integer('idCategory')
            ->requirePresence('idCategory', 'create')
            ->notEmpty('idCategory');

        $validator
            ->scalar('Photo')
            ->requirePresence('Photo', 'create')
            ->notEmpty('Photo');

        return $validator;
    }
}
