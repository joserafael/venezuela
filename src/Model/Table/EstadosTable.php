<?php
namespace App\Model\Table;

use App\Model\Entity\Estado;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estados Model
 *
 * @property \Cake\ORM\Association\HasMany $Ciudades
 * @property \Cake\ORM\Association\HasMany $Municipios
 */
class EstadosTable extends Table
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

        $this->table('estados');
        $this->displayField('estado');
        $this->primaryKey('id_estado');

        $this->hasMany('Ciudades', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Municipios', [
            'foreignKey' => 'estado_id'
        ]);
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
            ->add('id_estado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_estado', 'create');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }
}
