<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendedore Entity
 *
 * @property int $id
 * @property string $documento
 * @property string $nombres
 * @property string $apellidos
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $correo
 * @property float $salario
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Vendedore extends Entity
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
        'documento' => true,
        'nombres' => true,
        'apellidos' => true,
        'direccion' => true,
        'telefono' => true,
        'correo' => true,
        'salario' => true,
        'created' => true,
        'modified' => true,
    ];

    protected function _getFullName()
    {
        return $this->id .' - '.$this->apellidos.' '.$this->nombres;
    }
}
