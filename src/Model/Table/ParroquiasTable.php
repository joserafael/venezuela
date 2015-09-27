<?php
namespace App\Model\Table;

use App\Model\Entity\Parroquia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parroquias Model
 *
 */
class ParroquiasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('parroquias');
        $this->displayField('id_parroquia');
        $this->primaryKey('id_parroquia');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_parroquia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_parroquia', 'create');

        $validator
            ->add('id_municipio', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_municipio', 'create')
            ->notEmpty('id_municipio');

        $validator
            ->requirePresence('parroquia', 'create')
            ->notEmpty('parroquia');

        return $validator;
    }
}
