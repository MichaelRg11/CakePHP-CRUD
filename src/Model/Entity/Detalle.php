<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detalle Entity
 *
 * @property int $id
 * @property float $precio
 * @property int $cantidad
 * @property float $descuento
 * @property int $ventas_id
 * @property int $productos_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Venta $venta
 * @property \App\Model\Entity\Producto $producto
 */
class Detalle extends Entity
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
        'precio' => true,
        'cantidad' => true,
        'descuento' => true,
        'ventas_id' => true,
        'productos_id' => true,
        'created' => true,
        'modified' => true,
        'venta' => true,
        'producto' => true,
    ];
}
