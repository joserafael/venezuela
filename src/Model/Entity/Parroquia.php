<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parroquia Entity.
 *
 * @property int $id_parroquia
 * @property int $id_municipio
 * @property string $parroquia
 */
class Parroquia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_parroquia' => false,
    ];
}
