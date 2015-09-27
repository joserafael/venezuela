<?php
namespace App\Model\Table;

use App\Model\Entity\Municipio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipios Model
 *
 */
class MunicipiosTable extends Table
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

        $this->table('municipios');
        $this->displayField('id_municipio');
        $this->primaryKey('id_municipio');

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
            ->add('id_municipio', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_municipio', 'create');

        $validator
            ->add('id_estado', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_estado', 'create')
            ->notEmpty('id_estado');

        $validator
            ->requirePresence('municipio', 'create')
            ->notEmpty('municipio');

        return $validator;
    }
}
