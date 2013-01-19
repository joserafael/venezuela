<?php
App::uses('AppModel', 'Model');
/**
 * Parroquia Model
 *
 * @property Estado $Estado
 * @property Municipio $Municipio
 * @property Ciudade $Ciudade
 */
class Parroquia extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ciudade' => array(
			'className' => 'Ciudade',
			'foreignKey' => 'parroquia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
