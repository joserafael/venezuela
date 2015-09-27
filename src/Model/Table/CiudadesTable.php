<?php
namespace App\Model\Table;

use App\Model\Entity\Ciudade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ciudades Model
 *
 */
class CiudadesTable extends Table
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

        $this->table('ciudades');
        $this->displayField('id_ciudad');
        $this->primaryKey('id_ciudad');

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
            ->add('id_ciudad', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_ciudad', 'create');

        $validator
            ->add('id_estado', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_estado', 'create')
            ->notEmpty('id_estado');

        $validator
            ->requirePresence('ciudad', 'create')
            ->notEmpty('ciudad');

        $validator
            ->add('capital', 'valid', ['rule' => 'boolean'])
            ->requirePresence('capital', 'create')
            ->notEmpty('capital');

        return $validator;
    }
}
