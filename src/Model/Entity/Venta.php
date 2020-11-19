<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venta Entity
 *
 * @property int $id
 * @property string $numero
 * @property \Cake\I18n\FrozenDate $fecha
 * @property float $subtotal
 * @property float $iva
 * @property float $descuento
 * @property float $total
 * @property int $clientes_id
 * @property int $vendedores_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Vendedore $vendedore
 */
class Venta extends Entity
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
        'numero' => true,
        'fecha' => true,
        'subtotal' => true,
        'iva' => true,
        'descuento' => true,
        'total' => true,
        'clientes_id' => true,
        'vendedores_id' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'vendedore' => true,
    ];
}
